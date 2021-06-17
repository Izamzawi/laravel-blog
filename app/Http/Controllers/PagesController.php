<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index()
    {
        $recentPost = DB::table('posts')
            ->latest('created_at')
            ->first();

        return view('index', ['recentPost' => $recentPost]);
    }

    public function about()
    {

    }
}
