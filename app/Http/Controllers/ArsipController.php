<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function index()
    {
        $archives = Post::orderBy('created_at', 'desc')->get()->map(
            function ($archives) {
                return [
                    'title' => $archives->title,
                    'link_materi' => $archives->link_materi,
                    'tanggal' => $archives->created_at,
                ];
            }
        );
        // return response()->json($archives);
        return view('page.archive0', compact('archives'));
    }
}
