<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\Post;
use App\Models\Message;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function index()
    {
        $projectsCount = Project::count();
        $postsCount = Post::count();
        $messagesCount = Message::count();

        return view('admin.dashboard', compact('projectsCount', 'postsCount', 'messagesCount'));
    }
}
