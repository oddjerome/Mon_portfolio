<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Post;
use App\Models\Message;

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
