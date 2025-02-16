@php
    $totalCustomers = \App\Models\Customer::query()->count();
    $totalLeads = \App\Models\Lead::query()->count();
//    $pendingTasks = \App\Models\Task::query()->where('status', '')->count();
//    $totalTasks = \App\Models\Task::query()->count();
@endphp

<x-app-layout>

    <div class="pt-6">
        <div class="container mx-auto transition delay-150 duration-500 ease-in-out motion-safe:hover:scale-[1.01]">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>{{ Carbon\Carbon::greetings() }}<span class="font-bold">{{ userName() }}</span>! </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <a href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset
                    dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex justify-between items-center motion-safe:hover:scale-[1.01]
                    transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                        <i class="fa-solid fa-users text-2xl text-red-500"></i>
                    </div>
                    <div class="flex justify-end flex-col">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Total Customers</h2>
                        <h2 class="text-2xl font-semibold text-right text-gray-900 dark:text-white">{{ $totalCustomers }}</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset
                    dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex justify-between items-center motion-safe:hover:scale-[1.01]
                    transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                        <i class="fa-solid fa-cubes-stacked text-2xl text-red-500"></i>
                    </div>
                    <div class="flex justify-end flex-col">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Total Leads</h2>
                        <h2 class="text-2xl font-semibold text-right text-gray-900 dark:text-white">{{ $totalLeads }}</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset
                    dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex justify-between items-center motion-safe:hover:scale-[1.01]
                    transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                        <i class="fa-solid fa-clock-rotate-left text-2xl text-red-500"></i>
                    </div>
                    <div class="flex justify-end flex-col">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Pending Tasks</h2>
                        <h2 class="text-2xl font-semibold text-right text-gray-900 dark:text-white">{{ $totalCustomers }}</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset
                    dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex justify-between items-center motion-safe:hover:scale-[1.01]
                    transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                        <i class="fa-solid fa-list-check text-2xl text-red-500"></i>
                    </div>
                    <div class="flex justify-end flex-col">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Total Tasks</h2>
                        <h2 class="text-2xl font-semibold text-right text-gray-900 dark:text-white">{{ $totalCustomers }}</h2>
                    </div>
                </a>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-12">
                <div class="scale-100 px-6 min-h-96 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset
                    dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex justify-between items-center
                    transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
