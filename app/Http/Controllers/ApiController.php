<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index () {
        $allPosts = Http::get('http://localhost:8001/api/v1/posts')
            ->json()['data'];

           

        return view('api.index', ['allPosts' => $allPosts]);
    }

    public function indexComments () {
        $allComments = Http::get('http://localhost:8001/api/v1/comments')
            ->json()['data'];

           

        return view('api.comments', ['allComments' => $allComments]);
    }

    public function newPostIndex() {
            return view('api.newpost');
    }

    public function newCommentIndex() {
        return view('api.newcomment');
}    

    public function newPost(Request $request) {
        if (isset($request->postTitle)) {

            $request = Http::asForm()->post('http://localhost:8001/api/v1/posts', [
                'title' => $request->postTitle,
                'content' => $request->postContent,
                'author' => '5' //placeholder
            ]);

            return redirect()->route('api.newpost');
        
        }
    }

    public function newComment(Request $request) {
        if (isset($request->commentContent)) {

            $request = Http::asForm()->post('http://localhost:8001/api/v1/comments', [
                'post_id' => $request->postId,
                'content' => $request->commentContent,
                'author' => '5' //placeholder
            ]);

            return redirect()->route('api.newcomment');
        
        }
    }
}
