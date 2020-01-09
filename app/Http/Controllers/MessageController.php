<?php

namespace App\Http\Controllers;

use App\Mail\Book_message;
use App\Mail\Contact_message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    //

    public function book(Request $request)
    {
        Mail::to('ski.paradise@mail.ru')->send(new Book_message($request->all()));
        if ($request->ajax()){
            return response()->json([
                'status' => "success",
            ]);
        }
    }

    public function contact(Request $request)
    {
        Mail::to('ski.paradise@mail.ru')->send(new Contact_message($request->all()));
        if ($request->ajax()){
            return response()->json([
                'status' => "success",
            ]);
        }
    }
}
