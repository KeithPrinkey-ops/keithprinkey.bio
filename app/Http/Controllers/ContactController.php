<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Resources\ContactResource;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Laravel\Jetstream\InteractsWithBanner;


class ContactController extends Controller
{
    use AuthorizesRequests, InteractsWithBanner;

    public function index()
    {
        $this->authorize('viewAny', User::class);
        return ContactResource::collection(Contact::all());
    }

    public function store(ContactRequest $request)
    {
        $this->authorize('create', Contact::class);

        // Redirect to /contact
        return redirect()->route('contact.index');
    }


    public function show(Contact $contact)
    {
        $this->authorize('view', $contact);

        return new ContactResource($contact);
    }

    public function update(ContactRequest $request, Contact $contact)
    {
        $this->authorize('update', $contact);

        $contact->update($request->validated());

        return new ContactResource($contact);
    }

    public function destroy(Contact $contact)
    {
        $this->authorize('delete', $contact);

        $contact->delete();

        return response()->json();
    }
}
