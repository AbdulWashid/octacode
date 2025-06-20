<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inquiry;

class ContactController extends Controller
{
    public function contact(){
        $contacts = Inquiry::orderBy('id','desc')->get();
        return view('admin.contact',compact('contacts'));
    }

    public function contact_detail($id){
        $contact = Inquiry::findOrFail($id);
        return view('admin.contact-detail',compact('contact'));
    }

    public function contact_status($id)
    {
        $contact = Inquiry::findOrFail($id);

        if ($contact->status == 'pending') {
            $contact->status = 'done';
            $contact->save();
        }

        return response()->json([
            'success' => true,
            'status' => $contact->status,
            'message' => 'Status updated successfully'
        ]);
    }

}
