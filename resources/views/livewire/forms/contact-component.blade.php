<div>
    <div class="py-10 bg-blend-darken  md:py-16">
        <div class="px-10 mx-auto max-w-7xl md:px-16">
            <div class="max-w-3xl mx-auto mb-10 md:mb-16">
                <p class="text-xs font-bold text-blue-500 uppercase">Contact Us</p>
                <h2 class="mt-1 text-2xl font-bold text-left text-zinc-200 lg:text-3xl md:mt-2">Need to ask us a question?</h2>
                <p class="max-w-screen-md mx-auto mt-4 text-left text-zinc-300 md:text-lg md:mt-6">
                    Fill out the form below and we'll do some research on our end and get back to you within 24-48 hours.
                </p>
            </div>
            <form id="contact-form" class="grid max-w-3xl gap-4 mx-auto sm:grid-cols-2" wire:submit.prevent="save">
                @csrf
                <div>
                    <x-label for="first_name" class="inline-block mb-2 text-sm font-medium text-zinc-300 sm:text-base">First name</x-label>
                    <x-input autofill required name="first_name" class="w-full px-3 py-2 text-zinc-800 transition duration-100 border rounded-md outline-none bg-zinc-50 focus:ring ring-blue-300" wire:model="first_name" />
                </div>

                <div>
                    <x-label for="last_name" class="inline-block mb-2 text-sm font-medium text-zinc-300 sm:text-base">Last name</x-label>
                    <x-input autofill required name="last_name" class="w-full px-3 py-2 text-zinc-800 transition duration-100 border rounded-md outline-none bg-zinc-50 focus:ring ring-blue-300" wire:model="last_name"/>
                </div>

                <div class="sm:col-span-2">
                    <x-label for="company" class="inline-block mb-2 text-sm font-medium text-zinc-300 sm:text-base">Company</x-label>
                    <x-input autofill name="company" class="w-full px-3 py-2 text-zinc-800 transition duration-100 border rounded-md outline-none bg-zinc-50 focus:ring ring-blue-300" wire:model="company"/>
                </div>

                <div class="sm:col-span-2">
                    <x-label for="email" class="inline-block mb-2 text-sm font-medium text-zinc-300 sm:text-base">Email</x-label>
                    <x-input autofill required name="email" class="w-full px-3 py-2 text-zinc-800 transition duration-100 border rounded-md outline-none bg-zinc-50 focus:ring ring-blue-300" wire:model="email"/>
                </div>

                <div class="sm:col-span-2">
                    <x-label for="subject" class="inline-block mb-2 text-sm font-medium text-zinc-300 sm:text-base">Subject</x-label>
                    <x-input autofill required name="subject" class="w-full px-3 py-2 text-zinc-800 transition duration-100 border rounded-md outline-none bg-zinc-50 focus:ring ring-blue-300" wire:model="subject" />
                </div>

                <div class="sm:col-span-2">
                    <x-label for="message" class="inline-block mb-2 text-sm font-medium text-zinc-300 sm:text-base">Message</x-label>
                    <textarea autofill required name="message" class="w-full h-64 px-3 py-2 text-zinc-800 transition duration-100 border rounded-md outline-none bg-zinc-50 focus:ring ring-blue-300" wire:model="message"></textarea>
                </div>

                <div class="flex items-center justify-between sm:col-span-2">
                    <x-button type="submit" class="inline-block px-8 py-3 text-sm font-semibold text-center text-white transition duration-100 bg-blue-600 rounded-md outline-none hover:bg-blue-500 active:bg-blue-700 ring-blue-300 md:text-base">Send Message</x-button>
                </div>
            </form>
            <blockquote class="max-w-3xl mx-auto mt-5 text-xs text-zinc-300">
                Please allow up to 24-48 hour response during the weekdays.
            </blockquote>
        </div>
    </div>
</div>
