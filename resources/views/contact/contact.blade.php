{{-- resources/views/contact/contact.blade.php --}}
                <x-guest-layout>
                    <x-form-section submit="submitContact">
                        <x-slot name="title">
                            <x-section-title>
                                <x-slot name="title">Contact Us</x-slot>
                                <x-slot name="description">Need to ask us a question?</x-slot>
                            </x-section-title>
                        </x-slot>

                        <x-slot name="description">
                            Fill out the form below and we'll do some research on our end and get back to you within 24-48 hours!
                        </x-slot>

                        <x-slot name="form">
                            <x-validation-errors class="mb-4" />

                            <div class="col-span-6 sm:col-span-3">
                                <x-label for="first_name" value="First name" />
                                <x-input id="first_name" name="first_name" type="text" required autofocus />
                                <x-input-error for="first_name" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <x-label for="last_name" value="Last name" />
                                <x-input id="last_name" name="last_name" type="text" required />
                                <x-input-error for="last_name" />
                            </div>

                            <div class="col-span-6">
                                <x-label for="company" value="Company" />
                                <x-input id="company" name="company" type="text" />
                                <x-input-error for="company" />
                            </div>

                            <div class="col-span-6">
                                <x-label for="email" value="Email" />
                                <x-input id="email" name="email" type="email" required />
                                <x-input-error for="email" />
                            </div>

                            <div class="col-span-6">
                                <x-label for="subject" value="Subject" />
                                <x-input id="subject" name="subject" type="text" required />
                                <x-input-error for="subject" />
                            </div>

                            <div class="col-span-6">
                                <x-label for="message" value="Message" />
                                <textarea id="message" name="message" required class="w-full h-32"></textarea>
                                <x-input-error for="message" />
                            </div>
                        </x-slot>

                        <x-slot name="actions">
                            <x-action-message class="mr-3" on="saved">
                                Message sent successfully!
                            </x-action-message>
                            <x-button type="submit">Send Message</x-button>
                        </x-slot>
                    </x-form-section>
                </x-guest-layout>
