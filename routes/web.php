<?php

use App\Http\Controllers\PagesController;
use App\Livewire\BlogPage;
use App\Livewire\Blog\ShowPost;
use App\Livewire\LeadCaptureForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;
use App\Livewire\Forms\BlogPostForm;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Http\Controllers\NotificationController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session', 'web'),  // Provide a default string value
    'verified',
])->group(function () {
    Route::get('/dashboard', BlogPostForm::class)
        ->name('dashboard');
});

Route::middleware('auth:sanctum')->get('/admin/icons', function () {$icons = Storage::disk('public')->files('services/icons');
    return view('admin.icons', compact('icons')); })->name('admin.icons');

Route::view('/', 'home.home')->name('home');
Route::view('/about', 'about.about')->name('about');
Route::view('/skills', 'skills.skills')->name('skills');
Route::view('/tech-stack', 'tech-stack.tech-stack')->name('tech-stack');
Route::view('/resume', 'resume.resume')->name('resume');
Route::get('/resume', [ResumeController::class, 'index'])->name('resume.index');
Route::get('/resume/download', [ResumeController::class, 'download'])->name('resume.download');

Route::get('/blog', BlogPage::class)->name('blog');

Route::get('/blog/{post:slug}', ShowPost::class) // <-- Use ShowPost here
->where('post', '^(?!blog$)[A-Za-z0-9\-_]+$')
    ->name('blog.show');

// Lead capture and viewing routes
Route::get('/leads', LeadCaptureForm::class)->name('leads.capture');

// Add the terms and privacy policy routes for their markdown files
Route::get('/terms', function () {
    $markdown = File::get(resource_path('markdown/terms.md'));
    $terms = Str::markdown($markdown);
    return view('terms', compact('terms'));
})->name('terms');

Route::get('/privacy', function () {
    $markdown = File::get(resource_path('markdown/policy.md'));
    $policy = Str::markdown($markdown);
    return view('policy', compact('policy'));
})->name('privacy-policy');

Route::middleware('auth:web')->get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
Route::post('/notifications/{notification}/read', [NotificationController::class, 'markAsRead'])->name('notifications.read');
Route::delete('/notifications/{notification}', [NotificationController::class, 'destroy'])->name('notifications.destroy');

Route::get('/pages', [PagesController::class, 'index'])->name('pages.index');
Route::view('/pages/world-esports', 'pages.world-esports')->name('world-esports');
Route::view('/pages/al-anon', 'pages.al-anon')->name('al-anon');
Route::view('/pages/al-mills-hvac' , 'pages.al-mills-hvac')->name('al-mills-hvac');
Route::get('/pages/{page:route_name}', [PagesController::class, 'show'])
    ->where('page', '^(?!world-esports|al-anon|al-mills-hvac)[A-Za-z0-9\-_]+$')
    ->name('pages.show');

Route::get('/sitemap.xml', function () {
    $urls = [];

    // ---- static, public pages
    $add = function (string $loc, string $changefreq = 'monthly', string $priority = '0.7', ?string $lastmod = null) use (&$urls) {
        $urls[] = compact('loc', 'changefreq', 'priority', 'lastmod');
    };

    $add(route('home'),                'monthly', '1.0');
    $add(route('about'),               'yearly',  '0.6');
    $add(route('skills'),              'yearly',  '0.6');
    $add(route('tech-stack'),          'yearly',  '0.5');
    $add(route('resume.index'),        'yearly',  '0.6');
    $add(route('leads.capture'),        'yearly',  '0.5');
    $add(route('blog'),                'weekly',  '0.8');
    $add(route('terms'),               'yearly',  '0.3');
    $add(route('privacy-policy'),      'yearly',  '0.3');
    $add(route('world-esports'),       'monthly', '0.8');

    // Excluded on purpose (auth/API/download):
    // /dashboard, /notifications, /resume/download, /contact-json

    // ---- dynamic blog posts (adjust the "published" filter to match your schema)
    $posts = Post::query()
        ->whereNotNull('created_at')   // or ->where('status','published')
        ->orderByDesc('updated_at')
        ->get(['slug', 'updated_at']);

    foreach ($posts as $post) {
        $add(
            route('blog.show', $post->slug),
            'weekly',
            '0.9',
            optional($post->updated_at)->toAtomString()
        );
    }

    return response()
        ->view('sitemap', ['urls' => $urls])
        ->header('Content-Type', 'application/xml; charset=UTF-8');
})->name('sitemap');



