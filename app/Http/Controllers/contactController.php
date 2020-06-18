<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Http\Requests\ContactFormRequest;

class contactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

//    public function store(ContactFormRequest $request)
//    {
//
//        $contact = [];
//
//        $contact['name'] = $request->get('name');
//        $contact['email'] = $request->get('email');
//        $contact['msg'] = $request->get('msg');
//
//        // Mail delivery logic goes here
//        Mail::to('lionsheart81@gmail.com')->send(new ContactEmail($contact));
//        //Mail::to(config('mail.support.address'))->send(new ContactEmail($contact));
//        flash('Your message has been sent!')->success();
//
//        return redirect()->route('contact');
//
//    }

	public function store(ContactFormRequest $request)
	{

		Mail::send('emails.contact',
			array(
				'name' => $request->get('name'),
				'email' => $request->get('email'),
				'user_message' => $request->get('msg')
			), function($message)
			{
				$message->from('lionsheart81@gmail.com');
				$message->to('lionsheart81@gmail.com', 'Admin')->subject('Website Feedback');
			});

		return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');

	}

}
