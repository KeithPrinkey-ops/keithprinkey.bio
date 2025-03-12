<?php

namespace App\Policies;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Log;

class ContactPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any contacts.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasRole('super-admin'); // Adjust based on your role system
    }

    /**
     * Determine whether the user can view a specific contact.
     */
    public function view(User $user, Contact $contact): bool
    {
        Log::info("Checking view permission for user: {$user->id} on contact: {$contact->id}");

        return $user->hasRole('super-admin') || $user->id === $contact->user_id;
    }

    /**
     * Determine whether the user can create a contact.
     */
    public function create(User $user): bool
    {
        return true; // Anyone can submit a contact form
    }

    /**
     * Determine whether the user can update a contact.
     */
    public function update(User $user, Contact $contact): bool
    {
        return $user->hasRole('super-admin') || $user->id === $contact->user_id;
    }

    /**
     * Determine whether the user can delete a contact.
     */
    public function delete(User $user, Contact $contact): bool
    {
        return $user->hasRole('super-admin'); // Only admins can delete contacts
    }

    /**
     * Determine whether the user can restore a deleted contact.
     */
    public function restore(User $user, Contact $contact): bool
    {
        return $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can permanently delete a contact.
     */
    public function forceDelete(User $user, Contact $contact): bool
    {
        return $user->hasRole('super-admin');
    }
}
