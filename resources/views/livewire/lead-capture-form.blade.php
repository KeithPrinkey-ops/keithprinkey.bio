<!-- resources/views/livewire/lead-capture-form.blade.php -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl p-8">
                    <form wire:submit.prevent="save" class="mt-12 max-w-3xl mx-auto">
                        {{-- Global validation errors --}}
                        <x-validation-errors class="mb-10 pb-10" />

                        {{-- Centered section title with extra spacing --}}
                        <x-section-title>
                            <x-slot name="title" class="text-2xl font-semibold text-black dark:text-white mb-4">
                                Request Consultation
                            </x-slot>
                            <x-slot name="description">
                                Please fill out the form below. <strong>Or</strong> you can schedule a meeting with me via the 'Schedule Time with Me' button at the bottom right of your screen. This form should only take around 30 seconds to complete!
                            </x-slot>
                        </x-section-title>

                        {{-- Form container --}}

                            <div class="grid grid-cols-6 gap-4 rounded-xl">
                                {{-- Name --}}
                                <div class="col-span-6 sm:col-span-4">
                                    <x-label for="name" value="Your Name" />
                                    <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="form.name" autocomplete="name" />
                                    <x-input-error for="form.name" class="mt-2" />
                                </div>

                                {{-- Email --}}
                                <div class="col-span-6 sm:col-span-4">
                                    <x-label for="email" value="Email Address" />
                                    <x-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="form.email" autocomplete="email" />
                                    <x-input-error for="form.email" class="mt-2" />
                                </div>

                                {{-- Company / Message --}}
                                <div class="col-span-6">
                                    <x-label for="company" value="Company" />
                                    <x-input id="company" class="mt-1 block w-full rounded-md shadow-sm bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100" wire:model.defer="form.company" rows="4"></x-input>
                                    <x-input-error for="form.company" class="mt-2" />
                                </div>

                                <div class="col-span-6">
                                    <x-label for="project_type" value="Project Type" />
                                    <x-input id="project_type" class="mt-1 block w-full rounded-md shadow-sm bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100" wire:model.defer="form.company" rows="4"></x-input>
                                    <x-input-error for="form.project_type" class="mt-2" />
                                </div>

                                <div class="col-span-6">
                                    <x-label for="budget_range" value="Budget Range" />
                                    <x-input id="budget_range" class="mt-1 block w-full rounded-md shadow-sm bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100" wire:model.defer="form.company" rows="4"></x-input>
                                    <x-input-error for="form.budget_range" class="mt-2" />
                                </div>

                                <div class="col-span-6">
                                    <x-label for="decision_timeline" value="Decision Timeline" />
                                    <x-input id="decision_timeline" class="mt-1 block w-full rounded-md shadow-sm bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100" wire:model.defer="form.company" rows="4"></x-input>
                                    <x-input-error for="form.decision_timeline" class="mt-2" />
                                </div>


                                {{-- Confirmation Checkbox --}}
                                <div class="col-span-6 flex items-center">
                                    <x-checkbox wire:model.defer="form.agree_to_terms" id="agree_to_terms" />
                                    <x-label for="agree_to_terms" class="ml-2">
                                        I agree to be contacted regarding my inquiry.
                                    </x-label>
                                    <x-input-error for="form.agree_to_terms" class="mt-2" />
                                </div>

                                {{-- Actions --}}
                                <div class="col-span-6 flex items-center justify-end space-x-3 mt-4">
                                    <x-action-message on="saved" class="mr-3">
                                        Form submitted successfully.
                                    </x-action-message>

                                    <x-button type="submit">Submit</x-button>
                                    <x-danger-button type="button" onclick="history.back()">Cancel</x-danger-button>
                                </div>
                            </div>

                    </form>
                </div>
