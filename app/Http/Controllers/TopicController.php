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

        // $topics = Topic::where('slug', $slug)->limit(6)->with([
        //     'posts' => function ($query) {
        //         $query->with('media')->where('is_published', 1);
        //     }
        // ])->get();

        //  $otherPosts = Topic::where('slug', $slug)->limit(4)->with([
        //     'posts' => function ($query) {
        //         $query->with('media')->where('is_published', 1);
        //     }
        // ])->get();

        // $formattedTopics = $topics->map(function ($topic) {
        //     return [
        //         'id' => $topic->id,
        //         'name' => $topic->name,
        //         'slug' => $topic->slug,
        //         'posts' => $topic->posts->map(function ($post) {
        //             return [
        //                 'id' => $post->id,
        //                 'title' => $post->title,
        //                 'slug' => $post->slug,
        //                 'content' => $post->content,
        //                 'is_published' => $post->is_published,
        //                 'thumbnail' => $post->getFirstMediaUrl('posts'),
        //                 'topic_id' => $post->topic_id,
        //             ];
        //         }),
        //     ];
        // });

         $formattedTopics = $topics->map(function ($post) {
            return [
                'id' => $post->id,
                'title' => $post->title,
                'slug' => $post->slug,
                'content' => $post->content,
                'is_published' => $post->is_published,
                'thumbnail' => $post->getFirstMediaUrl('posts'),
                'topic_id' => $post->topic_id,
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
