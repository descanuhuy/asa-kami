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
        $allPosts = Topic::where('slug', $slug)->with([
            'posts' => function ($query) {
                $query->with('media')->where('is_published', 1);
            }
        ])->get();

        $topics = $allPosts->first()->posts->take(4);

        $otherPosts = $allPosts->first()->posts->skip(4)->take(6);

         $formattedTopics = $topics->map(function ($post) {
            return [
                'id' => $post->id,
                'title' => $post->title,
                'content' => $post->content,
                'thumbnail' => $post->getFirstMediaUrl('posts'),
            ];
        });

        $topicDetails = [
            'id' => $allPosts->first()->id,
            'name' => $allPosts->first()->name,
            'slug' => $allPosts->first()->slug,
        ];

        return view('page.topic', [
            'formattedTopics' => $formattedTopics,
            'otherPosts' => $otherPosts,
            'topicDetails' => $topicDetails,
        ]);

    }
}
