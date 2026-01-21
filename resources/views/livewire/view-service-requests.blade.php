{{-- Blade --}}
                                   <div class="container mx-auto py-8 bg-white dark:bg-slate-900 text-slate-900 dark:text-slate-100 transition-colors duration-200">
                                       <h1 class="text-3xl font-bold mb-6 dark:text-slate-100">Service Requests</h1>

                                       <div class="mb-6 flex gap-4">
                                           <x-input
                                               type="text"
                                               wire:model.live="search"
                                               placeholder="Search by ID or Service Name"
                                               class="flex-1 px-4 py-2 border rounded bg-white dark:bg-slate-700 border-gray-300 dark:border-slate-600 text-slate-900 dark:text-slate-100 placeholder-gray-400 dark:placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-200 dark:focus:ring-blue-900 transition-colors"
                                           />
                                           <select
                                               wire:model.live="categoryFilter"
                                               class="px-4 py-2 border rounded bg-white dark:bg-slate-700 border-gray-300 dark:border-slate-600 text-slate-900 dark:text-slate-100 focus:outline-none focus:ring-2 focus:ring-blue-200 dark:focus:ring-blue-900 transition-colors"
                                           >
                                               <option value="" class="bg-white dark:bg-slate-700">All Categories</option>
                                               @foreach ($category as $categories)
                                                   <option value="{{ $categories }}" class="bg-white dark:bg-slate-700">{{ $categories }}</option>
                                               @endforeach
                                           </select>
                                       </div>

                                       <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                           @forelse($services as $service)
                                               <div class="bg-white dark:bg-slate-800 border border-gray-200 dark:border-slate-700 rounded-lg p-6 shadow hover:shadow-lg transition-shadow duration-150">
                                                   @if($service->icon)
                                                       <img src="{{ $service->icon }}" alt="{{ $service->name }}" class="w-16 h-16 mb-4">
                                                   @endif
                                                   <h3 class="text-xl font-bold mb-2 dark:text-slate-200">{{ $service->name }}</h3>
                                                   <p class="text-gray-600 dark:text-slate-200 mb-4">{{ Str::limit($service->description, 100) }}</p>

                                                   <p class="text-sm text-gray-500 dark:text-slate-400 mb-4">
                                                       Category: {{ optional($service->categoryModel)->name ?? $service->category }}
                                                   </p>
                                                       <x-button>
                                                   <a href="{{ route('services.services', $service->slug) }}" class="hover:underline">
                                                       View Details
                                                   </a>
                                                       </x-button>
                                               </div>
                                           @empty
                                               <p class="text-gray-600 dark:text-slate-300">No service requests found.</p>
                                           @endforelse
                                       </div>

                                       <div class="mt-6">
                                           <div class="inline-block px-2 py-1 bg-transparent dark:bg-transparent rounded">
                                               {{ $services->links() }}
                                           </div>
                                       </div>
                                   </div>
