<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        // if (!Gate::allows('admin')) {
        //     abort(403);
        // }
        // this from above does the same thins as the line below
        // $this->authorize('admin'); // shorter way of giving access; but we can do this into the routes file (web.php)

        $totalUsers = User::count();
        $totalIdeas = Idea::count();
        $totalComments = Comment::count();

        return view('admin.dashboard', compact('totalUsers', 'totalIdeas', 'totalComments'));
    }
}
