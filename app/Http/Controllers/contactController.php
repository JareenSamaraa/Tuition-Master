<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Notifications\SendContactNotification;
use Illuminate\Support\Facades\Notification;

class contactController extends Controller
{
    //
    public function showForm(){
        return view('contact.form');
        }

         // Send Email (/contact)
    public function sendEmail(Request $request) {
    	$this->validate($request, [
    		'name' => 'required|max:255|string',
    		'email' => 'required|email|max:255',
    		'message' => 'required'
    	]);
    	Notification::route('mail', 'test@gmail.com')
    					->notify(new SendContactNotification($request));
    	Session::flash('success', 'The email was sent successfully!');
    	return redirect()->route('index');


}
}
