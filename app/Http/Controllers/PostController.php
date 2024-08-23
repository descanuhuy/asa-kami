<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getLatestPost()
    {
        $post = Post::limit(5)->get()->map(
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
        return response()->json($post);
    }
}
