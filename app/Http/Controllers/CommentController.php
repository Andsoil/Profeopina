<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function index()
    {
        $items = Comment::all();
        return $items;
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'content' => 'required',
            // Add validation rules for other attributes
        ]);

        // Create the model
        $model = Comment::create($validatedData);

        // Attempt to create the model
        try {
            $model = Comment::create($validatedData);

            // Return a success message and the created model
            return response()->json([
                'message' => 'Model created successfully',
                'model' => $model
            ], 201);
        } catch (\Exception $e) {
            // Return an error message if an exception occurred during model creation
            return response()->json(['message' => 'Error creating model: ' . $e->getMessage()], 500);
        }
    }

    public function destroy($id){
        $item = Comment::find($id)->delete();
        if ($item) {
            return 'Item eliminado.';
        } else {
            return 'No se pudo eliminar.';
        }
    }
}
