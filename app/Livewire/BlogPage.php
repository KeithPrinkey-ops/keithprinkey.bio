<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Category;

class BlogPage extends Component
{
    public $post = [];        // will be set when viewing a single post
    public $trending   = [];
    public $categories = [];


    public function mount()
    {
        // “Trending” = top 4 by views (or however you define it)
        // This method can be used to handle any additional logic if needed
        $this->trending = Post::with('category')
            ->orderByDesc('views')
            ->take(4)
            ->get();

        // Pull your two main categories in the order you want them displayed

    }

    public function render()
    {
        $trending   = Post::with('category')
            ->latest()
            ->get(); // ← Collection
        $categories = Category::with(['posts' => fn($q)=> $q->latest()->take(4)])
            ->whereIn('slug',['coding'])
            ->get();  // ← Collection

        return view('livewire.blog', compact('trending','categories'))
            ->layout('layouts.guest');
    }

}
