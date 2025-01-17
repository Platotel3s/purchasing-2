<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posting;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posting::all();
        return view('index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'content'=>'required|string|max:255'
        ]);
        Posting::create($request->all());
        return redirect()->route('view.index')->with('success','berhasil membuat postingan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts=Posting::findOrFail($id);
        return view('post.edit',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts=Posting::findOrFail($id);
        return view('post.index',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'required|string|max:255',
            'content'=>'required|string|max:255',
        ]);
        $posts=Posting::findOrFail($id);
        $posts->update($request->all());
        return redirect()->route('post.index')->with('success','Berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $posts=Posting::findOrFail($id);
        $posts->delete();
        return redirect()->route('post.index')->with('success','Berhasil menghapus postingan');
    }
}
