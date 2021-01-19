<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
Session_start();
use App\Comment;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use App\Customer;
class CommentController extends Controller
{
    public function store(Request $request, Product $product)
    {
        $data = $request->validate([
            'comment_body' => 'required',
        ]);
        if(Session::get('customer_id'))
        {
            $comment = new Comment;
            $comment->customer_id=Session::get('customer_id');
            $comment->comment_body=$request->comment_body;
            $product->comments()->save($comment);
            return back();

        }
        else
        {
            return Redirect::to('login');
        }

    }


}
