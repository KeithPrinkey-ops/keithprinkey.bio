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
        $filePath = public_path('Keith_Prinkey_Resume.pdf');
        return Response::download($filePath, 'Keith_Prinkey_Resume.pdf');
    }
}
