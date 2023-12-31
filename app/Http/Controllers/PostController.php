<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(Request $request)
    {
        dump($request->route()->getName());
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Post and $id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('posts.edit',['id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dump($id);
        dd($request);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dump(__METHOD__);
        dd($id);
    }
}
