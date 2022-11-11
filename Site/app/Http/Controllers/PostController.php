<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function rewiew_check(Request $request){
        $valid=$request->validate([
        'email' => 'required|min:4|max:100',
        'subject' => 'required|min:4|max:100',
        'message' => 'required|min:15|max:500',
        ]);

        $review = new Contact();
        $review->email=$request->input('email');
        $review->email=$request->input('subject');
        $review->email=$request->input('message');

        $review->save();

        return redirect()->route('/rewiew');
    }
}
