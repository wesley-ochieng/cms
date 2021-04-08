<?php

namespace App\Http\Controllers;

use App\Mail\Enquiry;
use App\Mail\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'event' => 'required',
            'email' => 'required',
            'message' => 'required',
            'numberofguests' => 'required',
            'date' => 'required',
            'phone' => 'required'
        ]);

        $details = [
            'name' => $request->name,
            'event' => $request->event,
            'email' => $request->email,
            'message' => $request->message,
            'numberofguests' => $request->numberofguests,
            'date' => $request->date,
            'phone' => $request->phone
        ];

        DB::table('enquiries')->insert($details);

        Mail::to('events@edenep.com')->send(new Enquiry($details));
        return redirect()->back();
    }

    public function mails()
    {
        $messages = DB::table('enquiries')->select('id', 'message', 'email', 'created_at', 'event', 'date', 'numberofguests', 'status')->paginate(5);
        $totalEnquiries = DB::table('enquiries')->count();
        $totalResponses = DB::table('responses')->count();
        return view('admin.messages.enquiries', compact('messages', 'totalEnquiries', 'totalResponses'));
    }

    public function getResponseForm($id)
    {
        $data = DB::table('enquiries')->select('email')->where('id', '=', $id)->first();

        return view('admin.messages.responseform', compact('data'));
    }

    public function respond(Request $request)
    {
        $response = [
            'email' => $request->email,
            'message' => $request->message
        ];

        DB::table('responses')->insert($response);

        Mail::to($request->email)->send(new Response($response));

        if(empty(Mail::failures())) {
            $sent = DB::table('enquiries')->where('email', '=', $request->email)->update([ 'status' => 1]);
        }
        return redirect()->route('enquiries.all')->with('message', 'Response sent successfully');



    }
}
