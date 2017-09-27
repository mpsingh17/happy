<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|string|max:191|min:4',
            'body'  => 'required|string|min:6|',
        ];

        $this->validate($request, $rules);

        // dd($request->all());

        if($request->hasFile('image')) {
            $imageRules = [
                'image' => 'image|max:1999'
            ];
            $this->validate($request, $imageRules);

            $img          = $request->file('image');
            $ext          = $img->getClientOriginalExtension();
            $imgName      = time() . '.' . $ext;
            Storage::putFileAs('public/posts', $img, $imgName);
        }

        $title = $request->input('title');
        $body = $request->input('body');

        // dd($title . ' ' . $body . ' ' . $imgName);

        $post = Post::create([
            'title' => $title,
            'body'  => $body,
            'image' => $imgName,
            'user_id' => 1
        ]);

        return redirect()->route('posts.index')->with('success', 'Post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::with('user')->findOrFail($id);
        return view('admin.posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::with('user')->findOrFail($id);
        return view('admin.posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::with('user')->findOrFail($id);

        $rules = [
            'title' => 'required|string|max:191|min:4',
            'body'  => 'required|string|min:6|',
        ];

        $this->validate($request, $rules);
        $title = $request->input('title');
        $body = $request->input('body');

        $post->title = $title;
        $post->body = $body;

        if($request->hasFile('image')) {
            $imageRules = [
                'image' => 'image|max:1999'
            ];
            $this->validate($request, $imageRules);

            $img          = $request->file('image');
            $ext          = $img->getClientOriginalExtension();
            $imgName      = time() . '.' . $ext;
            Storage::putFileAs('public/posts', $img, $imgName);
            $oldImg = $post->image;
            Storage::delete($oldImg);
            $post->image = $imhName;
        }
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post has been deleted');
    }
}
