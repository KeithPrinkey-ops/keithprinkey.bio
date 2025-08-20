<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
use App\Http\Resources\PageResource;
use App\Models\Page;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PageRESTController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Page::class);

        return PageResource::collection(Page::all());
    }

    public function store(PageRequest $request)
    {
        $this->authorize('create', Page::class);

        return new PageResource(Page::create($request->validated()));
    }

    public function show(Page $page)
    {
        $this->authorize('view', $page);

        return new PageResource($page);
    }

    public function update(PageRequest $request, Page $page)
    {
        $this->authorize('update', $page);

        $page->update($request->validated());

        return new PageResource($page);
    }

    public function destroy(Page $page)
    {
        $this->authorize('delete', $page);

        $page->delete();

        return response()->json();
    }
}
