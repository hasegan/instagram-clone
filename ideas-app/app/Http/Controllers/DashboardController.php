<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // check if there is a search
        // if there is, check the search value with our DB
        // Idea::with('user',...) = eager load (reduce number of queries : make a single query to display all the users, comments etc.)
        //      you have to be sure there exist the relation user for the comments (for this case), will eager lod the commentts AND the users for comments
        //$ideas = Idea::with('user', 'comments.user')->orderBy('created_at', 'DESC');
        // or you can do eager loading into the model

        $ideas = Idea::orderBy('created_at', 'DESC');

        if (request()->has('search')) {
            $ideas = $ideas->search(request('search', ''));
        }
        // the code does the same thing as above
        // $ideas->when(request()->has('search'), function ($query) {
        //     $query->search(request('search', ''));
        // });

        return view('dashboard', [
            'ideas' => $ideas->paginate(5),
        ]);
    }
}
