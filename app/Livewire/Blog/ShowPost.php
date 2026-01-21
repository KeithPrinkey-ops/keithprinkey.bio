<?php

namespace App\Livewire\Blog;

use AllowDynamicProperties;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use App\Models\Post;
#[AllowDynamicProperties]
class ShowPost extends Component
{
    public Post $post;
    public function mount(Post $post)
    {
        $this->categories = Category::all();
        // Convert the category color to a hex code
        $this->categories->transform(function (Category $category) {
            $category->color_class = $category->color_class ? $category->color_class : 'red'; // Default to black if no color is set
            return $category;
        });

        // This will show individual blog posts
        $this->post = $post;
        if (!$this->post) {
            abort(404, 'Post not found');
        }
        // Increment the views count for the post
        // Optionally, you can load the post from the database if needed

        $post->increment('views');
        $post->refresh();

        $this->post = $post;
    }
    public function render()
    {
        return view('livewire.blog.show', [
            'post' => $this->post,
        ])->layout('layouts.guest');
    }
}

