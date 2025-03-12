<x-guest-layout>
<h1>New Contact Submission</h1>
<p><strong>Name:</strong> {{ $contact->$first_name }} {{ $contact->last_name }}</p>
<p><strong>Company:</strong> {{ $company }}</p>
<p><strong>Email:</strong> {{ $email }}</p>
<p><strong>Subject:</strong> {{ $subject }}</p>
<p><strong>Message:</strong> {{ $message }}</p>


</x-guest-layout>
