<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index(){
        $posts = Post::all();
        return inertia()->render('Comment/index',[
            'greatings' => 'hello world form controller',
            'posts' => $posts
        ]);
    }
}
