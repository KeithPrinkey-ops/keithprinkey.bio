<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use App\Notifications\NewPostNotification;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Category;
use App\Livewire\MarkdownX;

class BlogPostForm extends Component
{
    use InteractsWithBanner;

    protected $listeners = ['bodyUpdated' => 'updateBody'];

    public Post $post;
    public $categories;
    use InteractsWithBanner, WithFileUploads;

    #[Validate(['required', 'integer'])]
    public $user_id = '';

    #[Validate(['required', 'integer'])]
    public $category_id = '';

    #[Validate(['required'])]
    public $title = '';

    #[Validate(['required'])]
    public $slug = '';

    #[Validate(['required'])]
    public $excerpt = '';

    #[Validate(['required'])]
    public $body = '';

    #[Validate(['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'])]
    public $hero_image;

    #[Validate(['required', 'file', 'mimes:ico', 'max:512'])]
    public $thumb_image;

    #[Validate(['nullable', 'integer'])]
    public $views = '0';


    // Create the save method that will handle the form submission
    public function mount()
    {
        $this->categories = Category::all();
        // Initialize any properties if needed
        if (auth()->check()) {
            $this->user_id = auth()->id();
        } else {
            $this->user_id = '';
        }
    }
    public function submit()
    {
        // Validate the data (via attributes)
        $this->validate();

        $heroPath  = $this->hero_image->store('blog', 'public');
        $thumbPath = $this->thumb_image->store('blog', 'public');

        $post = Post::create([
            'user_id' => $this->user_id,
            'category_id' => $this->category_id,
            'title' => $this->title,
            'slug' => $this->slug,
            'excerpt' => $this->excerpt,
            'body' => $this->body,
            'hero_image_path'  => $heroPath,
            'thumb_image_path' => $thumbPath,
            'views' => $this->views,
        ]);

        Auth::user()->notify(new NewPostNotification($post));
        $this->reset(['hero_image', 'thumb_image']);
        // Optionally, you can redirect or show a success message
        session()->flash('message', 'Blog post created successfully!');
    }

    public function updateBody($value)
    {
        // This method is called when the body is updated from the MarkdownX component
        $this->body = $value;
    }


    public function render()
    {
        return view('livewire.forms.create-post')->layout('layouts.app');
    }
}
