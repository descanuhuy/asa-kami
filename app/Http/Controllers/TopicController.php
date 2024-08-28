<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    // public function index()
    // {
    //     return view('page.topic');
    // }

    public function topic($slug)
    {
        $topics = Topic::where('slug', $slug)->limit(6)->with([
            'posts' => function ($query) {

                $query->with('media');
            }
        ])->get();

        $formattedTopics = $topics->map(function ($category) {
            return [
                'id' => $category->id,
                'name' => $category->name,
                'slug' => $category->slug,
                'posts' => $category->posts->map(function ($post) {
                    return [
                        'id' => $post->id,
                        'title' => $post->title,
                        'slug' => $post->slug,
                        'content' => $post->content,
                        'is_published' => $post->is_published,
                        'thumbnail' => $post->getFirstMediaUrl('posts'),
                        'category_id' => $post->category_id,
                    ];
                }),
            ];
        });

        return view('page.topic', compact('formattedTopics'));

        // return response($formattedTopics);
    }
}
