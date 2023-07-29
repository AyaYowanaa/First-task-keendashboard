<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

  
    /* Update the user's profile information.  */
   
  /* public function update(ProfileUpdateRequest $request): RedirectResponse
    {
       //dd($request->file);

        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }  */


    /**
     * Delete the user's account.
     */

public function update(Request $request) {
    // dd($request);
$user_id=auth()->user()->id;
$user=User::findorfail($user_id);
$user->name=$request->name;
$user->email=$request->email;
$img=$request->file('avatar')->getClientOriginalName();
$path=$request->file('avatar')->storeAs('imgs',$img,'aya') ;
$user->photo=$path;
$user->save();
return Redirect::route('profile.edit')->with('status', 'profile-updated');
} 

     
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
