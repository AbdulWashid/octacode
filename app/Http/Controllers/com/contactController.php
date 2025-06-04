<?php

namespace App\Http\Controllers\com;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inquiry;
use Carbon\Carbon;

class contactController extends Controller
{
    public function index(){
        return view('com.contact');
    }
    public function contactData(Request $request)
    {
        $request->validate([
            'name'    => ['required', 'string'],
            'email'   => ['nullable', 'email', 'required_without:number'],
            'number'  => ['nullable', 'digits:10', 'required_without:email'],
            'sub'     => ['nullable', 'string'],
            'message' => ['nullable', 'string'],
            'date'    => ['nullable', 'date', 'after:now'],
        ],
        [
            'email.required_without'  => 'You must provide an email if no phone number is given.',
            'number.required_without' => 'You must provide a phone number if no email is given.',
            'date.after'              => 'The date must be in the future.',
        ]);

        $inquiry = new Inquiry();
        $inquiry->name    = $request->name;
        $inquiry->email   = $request->email;
        $inquiry->number  = $request->number;
        $inquiry->sub     = $request->sub;
        $inquiry->message = $request->message;

        if ($request->filled('date')) {
            $inquiry->time = Carbon::parse($request->date);
        }

        $inquiry->save();

        return redirect()->back()->with('contact-success', 'Your message has been sent. We’ll contact you shortly.');
    }
}
