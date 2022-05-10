<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PostResource;
use App\Http\Resources\V1\PostCollection;
use App\Filters\V1\PostsFilter;
use App\Http\Requests\V1\StoreApiRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new PostsFilter();
        $filterItems = $filter->transform($request);

        $includeComments = $request->query('includeComments');
        
        $posts = Post::where($filterItems);

        if ($includeComments) {
            $posts = $posts->with('comments');
        }

        return new PostCollection($posts->paginate()->appends($request->query()));

        
    }

    public function store(StoreApiRequest $request)
    {
        return new PostResource(Post::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $includeComments = request()->query('includeComments');

        if ($includeComments) {
            return new PostResource($post->loadMissing('comments'));
        }
        return new PostResource($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
