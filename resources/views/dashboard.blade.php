@php
    $totalCustomers = \App\Models\Customer::query()->count();
//    $totalLeads = \App\Models\Customer::query()->count();
//    $totalTasks = \App\Models\Customer::query()->count();
//    $pendingTasks = \App\Models\Customer::query()->count();
@endphp

<x-app-layout>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <a href="{{ route('customers.index') }}">
                    <div class="card bg-sky-500 text-white font-bold text-lg shadow-md
                                transition duration-300 ease-in-out hover:scale-110">
                        <div class="card-header">
                            Total Customers
                        </div>
                        <div class="card-body font-bold text-3xl d-flex justify-content-between">
                            <i class="fa-solid fa-users"></i>
                            {{ $totalCustomers }}
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <div class="card bg-emerald-600 text-white font-bold text-lg shadow-md
                                transition duration-300 ease-in-out hover:scale-110">
                        <div class="card-header">
                            Total Leads
                        </div>
                        <div class="card-body font-bold text-3xl d-flex justify-content-between">
                            <i class="fa-solid fa-cubes-stacked"></i>
                            {{ $totalCustomers }}
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <div class="card bg-yellow-500 text-white font-bold text-lg shadow-md
                                transition duration-300 ease-in-out hover:scale-110">
                        <div class="card-header">
                            Pending Tasks
                        </div>
                        <div class="card-body font-bold text-3xl d-flex justify-content-between">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                            {{ $totalCustomers }}
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <div class="card bg-indigo-500 text-white font-bold text-lg shadow-md
                                transition duration-300 ease-in-out hover:scale-110">
                        <div class="card-header">
                            Total Tasks
                        </div>
                        <div class="card-body font-bold text-3xl d-flex justify-content-between">
                            <i class="fa-solid fa-list-check"></i>
                            {{ $totalCustomers }}
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="container mx-auto transition delay-150 duration-500 ease-in-out hover:scale-105">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
