<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Category;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Cookie;

class ApiController extends Controller
{
 
    /**
     * Display a listing of the resource.
     */
    public function index($category = null)
    {
        $announces = Announce::all();
        return response()->json($announces);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'string|required',
            'description' => 'string|required',
            'price' => 'string|required',
            'images' => 'required|array|max:5', // Validate as array
            'images.*' => 'string', // Validate each image as a URL
            'city' => 'string|required',
            'announceType' => 'required|string',
        ]);

        $categoryName = $request->input('announceType');
        $category = Category::where('title', 'LIKE', $categoryName)->first();

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        $announcement = new Announce([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'images' => json_encode($validated['images']), // Store as JSON
            'category_id' => $category->id,
            'city' => $validated['city']
        ]);

        $announcement->save();

        return response()->json(['message' => "Announcement added successfully", 'data' => $announcement], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $announce = Announce::findOrFail($id);
        $catName = $announce->category->title;
        return response()->json(['announce' => $announce, "category" => $catName]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $announce = Announce::findOrFail($id);
        $announce->delete();
        return response()->json(['message' => 'deleted successfully', 'error' => 'No file uploaded']);
    }
}