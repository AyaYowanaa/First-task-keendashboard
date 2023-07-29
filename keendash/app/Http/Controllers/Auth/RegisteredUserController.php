<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register1');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'photo' => ['required','unique:'.User::class],
        ]);
      

        /* $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'photo'=>$request->$path,
        ]); */
        $img=$request->file('photo')->getClientOriginalName();
        $path=$request->file('photo')->storeAs('imgs',$img,'aya') ;
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password= Hash::make($request->password);
        $user->photo=$path;
        $user->update();

     //return $path;
      //dd($path);
      event(new Registered($user));
       Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
