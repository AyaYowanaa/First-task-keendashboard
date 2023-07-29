<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request)    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

    /* $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]); */
       
      /*  $user=new User();
        $user->password = password_hash($request->password, PASSWORD_DEFAULT);  */
        
       $hashedPassword = Auth::User()->password;
 
       if (\Hash::check($request->current_password , $hashedPassword )) {
 
         if (!\Hash::check($request->password , $hashedPassword)) {
 
              $user->password = bcrypt($request->password);
 
              session()->flash('message','password updated successfully');
              $user->update();
              return redirect()->back();
            }
 
            else{
                  session()->flash('message','new password can not be the old password!');
                  return redirect()->back();
                }
           }
          
 
          else{
               session()->flash('message','old password doesnt matched ');
               return redirect()->back();
             }
 
             $user->update();
             return back()->with('status', 'password-updated');
         }

       
       }
 



        
      

