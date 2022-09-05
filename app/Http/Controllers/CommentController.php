<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{

    public function addComment(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $number = $request->input('phone');
        $comment= $request->input('comment');

        Message::create([
            'name' => $name,
            'email' => $email,
            'phone'=>$number,
            'comment' => $comment
        ]);



        return View('mpage')->with('page','confirmed');
    }

    public function listComments()
    {
        $currentUser = Auth::user();
        if($currentUser->userType == 'Administrator') {

            $messages=  Message::all();
            return View('mpage')->with('page','messages')->with('messages',$messages);

        }
        else
        {
            return redirect('/loginAdminPage');
        }


    }

    public function delete($id)
    {
        DB::table('messages')
            ->where('id',$id )
            ->delete();

        return redirect('messages');

    }





}
