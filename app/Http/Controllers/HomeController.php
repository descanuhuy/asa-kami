<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $mainPosts = Post::orderBy('created_at', 'desc')->limit(5)->get()->map(
            function ($post) {
                return [
                    'id' => $post->id,
                    'title' => $post->title,
                    'slug' => $post->slug,
                    'content' => $post->content,
                    'is_published' => $post->is_published,
                    'thumbnail' => $post->getFirstMediaUrl('posts'),
                    'category_id' => $post->category_id,
                ];
            }
        );

        $otherPosts = Post::orderBy('created_at', 'desc')->skip(5)->limit(10)->get()->map(
            function ($post) {
                return [
                    'id' => $post->id,
                    'title' => $post->title,
                    'slug' => $post->slug,
                ];
            }
        );
        return view('page.home', [
            'mainPosts' => $mainPosts,
            'otherPosts' => $otherPosts,
        ]);

    }
}
