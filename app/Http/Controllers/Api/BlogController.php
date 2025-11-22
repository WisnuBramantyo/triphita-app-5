<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'status' => 'required|in:draft,published,scheduled',
            'featured_image' => 'nullable|url',
            'meta_description' => 'nullable|string',
            'tags' => 'nullable|array',
            'tags.*' => 'string',
            'publish_date' => 'nullable|date'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $blog = Blog::create($request->all());

            return response()->json([
                'success' => true,
                'message' => 'Blog post created successfully',
                'data' => $blog
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create blog post',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function index()
    {
        $blogs = Blog::where('status', 'published')
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);

        return response()->json([
            'success' => true,
            'data' => $blogs
        ]);
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return response()->json([
            'success' => true,
            'data' => $blog
        ]);
    }

    public function update(Request $request, $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'status' => 'required|in:draft,published,scheduled',
            'featured_image' => 'nullable|url',
            'meta_description' => 'nullable|string',
            'tags' => 'nullable|array',
            'tags.*' => 'string',
            'publish_date' => 'nullable|date'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Update the blog
            $blog->update($request->all());

            return response()->json([
                'success' => true,
                'message' => 'Blog post updated successfully',
                'data' => $blog
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update blog post',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy($slug)
    {
        try {
            $blog = Blog::where('slug', $slug)->firstOrFail();
            $blog->delete();

            return response()->json([
                'success' => true,
                'message' => 'Blog post deleted successfully'
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete blog post',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}