<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ResumeController extends Controller
{
    /**
     * Display the resume PDF inside a Jetstream view.
     */
    public function index()
    {
        return view('resume.resume');
    }

    /**
     * Serve the resume file for direct download.
     */
    public function download()
    {
        $filePath = public_path('resume_laravel.pdf');
        return Response::download($filePath, 'resume_laravel.pdf', ['Content-Type' => 'application/pdf']);
    }
}
