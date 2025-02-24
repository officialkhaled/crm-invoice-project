<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\MailService;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function create()
    {
        return view('mails.create');
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'to_mail' => 'required',
            'title' => 'required',
            'subject' => 'required',
            'body' => 'required',
        ], [
            'to_mail.required' => 'Please enter your Email Address',
            'title.required' => 'Please enter your Title',
            'subject.required' => 'Please enter your Subject',
            'body.required' => 'Please enter your Message',
        ]);

        $toMail = 'khaled@skylarksoft.com';

        $mailData = [
            'title' => $request->input('title'),
            'to_mail' => $request->input('to_mail'),
            'subject' => $request->input('subject'),
            'body' => $request->input('body'),
            'view' => 'mails.mail-template',
        ];

        Mail::to($toMail)->send(new MailService($mailData));

        return redirect()->route('dashboard')->with([
            'status', 'success',
            'message' => 'Email Sent Successfully!'
        ]);
    }
}
