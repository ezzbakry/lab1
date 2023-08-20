<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Blogcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs =Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->category_id = $request->category_id;
        $blog->save();
        return redirect()->route('blogs.index')->with('success', 'create blog successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blog::findorfail($id);
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findorfail($id);
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::findorfail($id);
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->category_id=$request->category_id;

        $blog->save();
        return redirect()->route('blogs.index')->with('success', 'update blog successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findorfail($id);
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'delete blog successfully');
    }
}
