<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ContactEmail as ContactEmail;

class PageController extends Controller {

    public function getContact()
    {
        return view('pages.contato');
    }
    
    public function postContact(Request $request)
    {    
        $data = $request->only('name', 'email');
        $data['messageLines'] = explode("\n", $request->get('message'));

      Mail::send('emails.contact', $data, function ($message) use ($data) {
        $message->subject('Formulário de Contato: '.$data['name'])
                ->to(config('blog.contact_email'))
                ->replyTo($data['email']);
      });

      return back()->withSuccess("Thank you for your message. It has been sent.");
    }
}