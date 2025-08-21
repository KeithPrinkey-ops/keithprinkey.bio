<?php

namespace App\Http\Controllers;

use App\Models\Page; // Make sure the Page model is imported

class PagesController extends Controller
{
    /**
     * Display a listing of the pages.
     */
    public function index()
    {
        $pages = Page::latest()->get();

        return view('pages.index', compact('pages'));
    }

    /**
     * Display the specified page.
     */
    public function show(Page $page)
    {
        return response()->json($page);
    }
}
