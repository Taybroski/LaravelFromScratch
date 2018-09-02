<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    public function index ()
    {
        $posts = DB::table('posts')->get();
        return view('pages.index', compact('posts'));
    }
}
