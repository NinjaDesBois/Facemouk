<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use App\Notifications\LikeNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $posts= Post::all();

    //     return view('welcome' , compact('posts'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('posts.createpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $request->validate([
            'photo' => 'required',
            'description' => 'required'
        ]);
        // $user = User::where('pseudo', $pseudo)->first();
        // if ($user) {
        $post = new Post();
        $post->description = $request->description;

        if ($request->hasFile('photo')) {
            $post->photo = $request->file('photo')->store('feed');
        }
        $post->user_id = Auth::id();
        $post->save();
        flashy()->success('The Post has been added with sucess');
        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function storeLike(Request $request)
    {

        $like = new Like();
        $post = Post::findOrFail($request->post_id);
        if ($this->checkIfUserLike($request->post_id)) {

            $post->users_likes()->detach([Auth::id()]);
            return view('Posts.show', compact('post'));
        } else {


            $like->post_id = $request->post_id;
            $like->user_id = Auth::id();
            $like->save();
            // Notify user who posts
            $post->user->notify( new LikeNotify());
            

            if ($like->save()) {
                return view('Posts.show', compact('post'));
            } else 
            {
                return 0;
            }
        }
    }

    private function checkIfUserLike($post_id)
    {
        $post = Post::findOrFail($post_id);
        return ($post->users_likes->contains(Auth::id()));
    }
}
