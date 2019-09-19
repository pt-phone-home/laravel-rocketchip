<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageFromWebsite;
use App\Mail;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function webdesign()
    {
        return view('services.webdesign');
    }

    public function ecommerce()
    {
        return view('services.ecommerce');
    }

    public function webapp()
    {
        return view('services.webapp');
    }

    public function redesign()
    {
        return view('services.redesign');
    }

    public function seo()
    {
        return view('services.seo');
    }

    public function hosting()
    {
        return view('services.hosting');
    }

    public function design()
    {
        return view('services.design');
    }

    public function logo()
    {
        return view('services.logo');
    }


    public function portfolio()
    {
        return view('portfolio');
    }
    public function contact()
    {
        return view('contact');
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $email = new Mail;

        $email->name = $request['name'];
        $email->email = $request['email'];
        $email->number = $request['number'];
        $email->message = $request['message'];

        \Mail::to('info@rocketchipwebsolutions.ie')->send(
            new MessageFromWebsite($email)
        );

        return redirect('/contact')->with('mail', 'Thanks for getting in touch. A member of the team will contact you shortly');
    }
}