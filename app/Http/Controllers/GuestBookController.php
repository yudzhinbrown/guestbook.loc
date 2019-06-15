<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\GuestCommentRequest;
use Illuminate\Http\Request;

class GuestBookController extends Controller
{
    public function index()
    {
        ;
        return view('index',
            [
                'comments' => Comment::where('published', true)->paginate(4),
            ]);
    }

    public function create()
    {
        return view('comment.create');
    }

    public function store(GuestCommentRequest $request)
    {


        Comment::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'text' => $request->input('text')]
        );


        return redirect()->route('create')->with('message', 'Ваш отзыв был успешно добавлен, модератор обрабатывает его и если всё впорядке упубликует.');

    }
}
