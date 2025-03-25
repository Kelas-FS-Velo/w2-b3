<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return response()->json([
            'name' => 'Irfan Kamil',
            'job_title' => 'Full-stack Software Developer',
            'location' => 'Bandung, Indonesia',
        ]);
    }
}
