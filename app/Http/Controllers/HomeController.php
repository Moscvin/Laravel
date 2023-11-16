<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post; // Schimbare aici pentru a reflecta namespace-ul corect

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home Page';

        $posts = Post::orderBy('id','desc')->get();

        $h1 = '<h1>Home Page</h1>'; // Modificare aici, tagul h1 trebuie să aibă o etichetă de închidere

        $data1 = range(1, 20);
        $data2 = [
            'title' => 'Title',
            'content' => 'Content',
            'keys' => 'Keywords'
        ];

        return view('home', compact('title', 'h1', 'data1', 'data2', 'posts'));
    }
}
