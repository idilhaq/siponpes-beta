<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsbController extends Controller
{
    public function showForm()
    {
        return view('psb.register');
    }

    public function submitForm(Request $request)
    {
        // Handle form submission
    }

    public function status()
    {
        // Show status
    }

    public function documents()
    {
        // Show documents
    }
}
