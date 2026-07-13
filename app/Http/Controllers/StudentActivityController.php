<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentActivity;

class StudentActivityController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'menu_key' => 'required|string',
        ]);

        StudentActivity::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'menu_key' => $request->menu_key,
            ],
            [
                'completed' => true,
            ]
        );

        return response()->json([
            'success' => true
        ]);
    }
}