<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::all();

        return view('blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new post();
        $post->name = $request->name;
        $post->age = $request->age;
        $post->course = $request->course;
        $post->save();

        return redirect(route('blog.show'));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //dito i sho-show mga datas
        return view('blog.show', ['name' => DB::select('select * from posts')]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('blog.edit', [
            'post' => Post::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Post::where('id', $id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'course' => $request->course
        ]);
        return redirect(route('blog.show'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy($id);
        return redirect()->route('blog.show')->with('message', 'User has been deleted');
    }
}
