<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    //
    public function index(): JsonResponse
    {
        // Retrieve all categories with their associated posts and media
        $categories = Category::with([
            'posts' => function ($query) {
                // Eager load the media for each post
                $query->with('media');
            }
        ])->get();

        // Format the response to include media URLs
        $formattedCategories = $categories->map(function ($category) {
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
                        'thumbnail' => $post->getFirstMediaUrl('posts'), // Get the first media URL
                        'category_id' => $post->category_id,
                    ];
                }),
            ];
        });

        // Return the formatted categories as a JSON response
        return response()->json($formattedCategories);
    }
}
