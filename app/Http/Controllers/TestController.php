<?php

namespace App\Http\Controllers;


use App\Models\Comment;
use App\Models\Email;
use App\Models\User;

class TestController extends Controller
{
    public function test_1()
    {
        $users = User::take(500)->get();

        //  $users = User::with('articles')->take(500)->get();


        // $users = User::query()
        //     ->with(['articles' => function ($query) {
        //         $query->select('user_id', 'heading');
        //     }])
        //     ->take(500)
        //     ->get(['id', 'name']);

        //  $users = User::with(['articles:heading,user_id'])->take(500)->get(['name', 'id']);
        return view('articles')->with('users', $users);
    }

    public function test_2()
    {
        $comments = Comment::where('first', 'LIKE', 'Ann%')->get(['first', 'fifth']);
        $comments = Comment::where('second', 'LIKE', 'Ann%')->get(['first', 'fifth']);

        //  $comments = Comment::where('third', 'LIKE', 'Ann%')->orWhere('second', 'LIKE', 'ann%')->get(['first', 'fifth']);

        // $comments = Comment::where('third', 'LIKE', 'Ann%')->where('first', 'LIKE', 'ann%')->get(['first', 'fifth']);
        // $comments = Comment::where('third', 'LIKE', 'Ann%')->where('second', 'LIKE', 'ann%')->get(['first', 'fifth']);

        // $comments = Comment::where('first', 'LIKE', '%Ann%')->get(['first', 'fifth']);
        // $comments = Comment::where('third', 'LIKE', '%Ann%')->get(['first', 'fifth']);


        // $comments = Comment::whereRaw(
        //     "MATCH(fourth) AGAINST(?)",
        //     array('Ann')
        // )->get(['first', 'fifth']);

        // $comments = Comment::whereRaw(
        //     "MATCH(fourth) AGAINST(?)",
        //     array('Ann')
        // )->whereRaw(
        //     "MATCH(fifth) AGAINST(?)",
        //     array('Mary')
        // )->get(['first', 'fifth']);

        // $secondComments = Comment::whereRaw(
        //     "MATCH(fifth) AGAINST(?)",
        //     array('Mary')
        // )->get(['first', 'fifth']);
        // $comments = $comments->concat($secondComments);
        // $comments = $comments->concat($secondComments);

        return view('comments')->with('comments', $comments);
    }
    public function test_3()
    {
        $email = Email::where('first', "aa@hessel.org")->get();
        if ($email->count()) return $email->first()->first;
        return 'does not exist';
    }
}
