<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\MailService;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(Request $request)
    {
        $mailData = [
            'title' => 'Mail Title',
            'to_mail' => 'abdulla@skylarksoft.com',
            'subject' => 'Mail from Test Success',
            'body' => 'This is for testing email using smtp.',
            'view' => 'mails.mail-template',
        ];

        Mail::to('khaled@skylarksoft.com')->send(new MailService($mailData));

        return redirect()->route('dashboard')->with('success', 'Email Sent Successfully!');
    }
}
