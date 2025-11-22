<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of published blog posts
     */
    public function index()
    {
        $blogs = Blog::where('status', 'published')
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
        
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Display the specified blog post
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        
        // Only show published blogs
        if ($blog->status !== 'published') {
            abort(404);
        }
        
        return view('blogs.show', compact('blog'));
    }
}
