<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $mainPosts = Post::orderBy('created_at', 'desc')->limit(4)->where('is_published', 1)->get()->map(
            function ($post) {
                return [
                    'id' => $post->id,
                    'title' => $post->title,
                    'slug' => $post->slug,
                    'content' => $post->content,
                    'is_published' => $post->is_published,
                    'thumbnail' => $post->getFirstMediaUrl('posts'),
                    'topic_id' => $post->topic_id,
                ];
            }
        );

        $otherPosts = Post::orderBy('created_at', 'desc')->skip(4)->limit(6)->where('is_published', 1)->get()->map(
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
