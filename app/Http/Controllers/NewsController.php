<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class NewsController extends Controller
{
    public function detail($id) {
        $post = Post::findOrFail($id);
            
        $post = [
            'id' => $post->id,
            'title' => $post->title,
            'slug' => $post->slug,
            'tanggal' =>  $post->created_at,
            'content' => $post->content,
            'is_published' => $post->is_published,
            'thumbnail' => $post->getFirstMediaUrl('posts'),
            'topic_id' => $post->topic_id,
        ];

        return view('page.news', compact('post'));
    }
}
