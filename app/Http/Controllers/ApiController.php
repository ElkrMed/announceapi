<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
            'images' => 'required|max:5',
            'images.*' =>  'required',
            'city' => 'string|required',
            'announceType' => 'required|string',
        ]);
        $categoryName = $request->input('announceType');
        $category = Category::where('title', 'LIKE', $categoryName)->first();

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        $uploadedFiles = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $destinationPath = public_path('uploads');

                $fileName = $file->getClientOriginalName();

                $file->move($destinationPath, $fileName);
                $uploadedFiles[] = '/uploads/' . $fileName;
            }
        }
        $announcement = new Announce([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'images' => json_encode($uploadedFiles),
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
