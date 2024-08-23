<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
        // Fetch all topics and share them with all views
        $topics = Topic::all();
        view()->share('topics', $topics);
    }
}
