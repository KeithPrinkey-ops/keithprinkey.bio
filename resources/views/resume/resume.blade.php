<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('My Resume') }}
        </h2>
    </x-slot>

    <div class="py-10 mx-auto max-w-7xl md:px-16">
        <div class="bg-white shadow-sm sm:rounded-lg p-6">
            <iframe src="{{ asset('Keith_Prinkey_Resume.pdf') }}" class="w-full h-screen" style="height: 80vh;"></iframe>

            <div class="mt-5 flex justify-center">
                <x-button>
                    <a href="{{ route('resume.download') }}" download>
                        Download Resume
                    </a>
                </x-button>
            </div>
        </div>
    </div>
</x-guest-layout>

