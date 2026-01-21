<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Category;
use Livewire\WithPagination;
class BlogPage extends Component
{
    use WithPagination;

    // Optional: keep the URL clean (no ?page=) by disabling query-string syncing
    protected $updatesQueryString = false;

    // Optional: use Tailwind-styled pagination (not strictly needed for arrows)
    protected $paginationTheme = 'tailwind';

    public $post = [];        // will be set when viewing a single post
    public $categories = [];

    public int $perPage = 1; // Number of posts per page
    public int $currentPage = 2;
    public function mount()
    {
        // “Trending” = top 4 by views (or however you define it)
        // This method can be used to handle any additional logic if needed

        // Pull your two main categories in the order you want them displayed
    }

    public function render()
    {


        $trending = Post::with('category')
            ->orderByDesc('views')
            ->paginate(4);

        $categories = Category::with([
            'posts' => fn($q) => $q->latest()->take(4)
        ])
            ->whereIn('slug', ['coding'])
            ->get();

        return view('livewire.blog', [
            'trending'   => $trending,
            'categories' => $categories,
        ])->layout('layouts.guest');    }

}
