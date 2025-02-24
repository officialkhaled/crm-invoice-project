@php
    $totalCustomers = \App\Models\Customer::query()->count();
    $totalLeads = \App\Models\Lead::query()->count();
    $pendingTasks = \App\Models\Task::query()->where('status', 'Pending')->count();
    $totalTasks = \App\Models\Task::query()->count();
@endphp

<x-app-layout>

    <div class="pt-6">
        <div class="container mx-auto transition delay-150 duration-500 ease-in-out motion-safe:hover:scale-[1.01]">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between">
                    <div class="p-6 text-gray-900">
                        <p>{{ Carbon\Carbon::greetings() }}<span class="font-bold">{{ userName() }}</span>! </p>
                    </div>
                    <div class="p-6">
                        <a href="{{ route('send-mail') }}" class="bg-indigo-500 hover:bg-indigo-600 rounded-md px-3 py-2 text-white">
                            <i class="fa-solid fa-paper-plane"></i>&nbsp;&nbsp;SEND MAIL
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <a href="#" class="scale-100 p-6 bg-white rounded-lg shadow-2xl shadow-gray-500/20 flex justify-between items-center motion-safe:hover:scale-[1.01]
                    transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-600">
                    <div class="h-16 w-16 bg-indigo-50 flex items-center justify-center rounded-full">
                        <i class="fa-solid fa-users text-2xl text-indigo-600"></i>
                    </div>
                    <div class="flex justify-end flex-col">
                        <h2 class="text-lg font-semibold text-gray-900">Total Customers</h2>
                        <h2 class="text-xl font-semibold text-right text-gray-900">{{ $totalCustomers }}</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="scale-100 p-6 bg-white rounded-lg shadow-2xl shadow-gray-500/20 flex justify-between items-center motion-safe:hover:scale-[1.01]
                    transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-600">
                    <div class="h-16 w-16 bg-indigo-50 flex items-center justify-center rounded-full">
                        <i class="fa-solid fa-cubes-stacked text-2xl text-indigo-600"></i>
                    </div>
                    <div class="flex justify-end flex-col">
                        <h2 class="text-lg font-semibold text-gray-900">Total Leads</h2>
                        <h2 class="text-xl font-semibold text-right text-gray-900">{{ $totalLeads }}</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="scale-100 p-6 bg-white rounded-lg shadow-2xl shadow-gray-500/20 flex justify-between items-center motion-safe:hover:scale-[1.01]
                    transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-600">
                    <div class="h-16 w-16 bg-indigo-50 flex items-center justify-center rounded-full">
                        <i class="fa-solid fa-clock-rotate-left text-2xl text-indigo-600"></i>
                    </div>
                    <div class="flex justify-end flex-col">
                        <h2 class="text-lg font-semibold text-gray-900">Pending Tasks</h2>
                        <h2 class="text-xl font-semibold text-right text-gray-900">{{ $pendingTasks }}</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="scale-100 p-6 bg-white rounded-lg shadow-2xl shadow-gray-500/20 flex justify-between items-center motion-safe:hover:scale-[1.01]
                    transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-600">
                    <div class="h-16 w-16 bg-indigo-50 flex items-center justify-center rounded-full">
                        <i class="fa-solid fa-list-check text-2xl text-indigo-600"></i>
                    </div>
                    <div class="flex justify-end flex-col">
                        <h2 class="text-lg font-semibold text-gray-900">Total Tasks</h2>
                        <h2 class="text-xl font-semibold text-right text-gray-900">{{ $totalTasks }}</h2>
                    </div>
                </a>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-12">
                <div class="scale-100 px-6 min-h-96 mb-8 bg-gray-50 rounded-lg shadow-2xl shadow-gray-500/20 flex justify-between items-center
                    transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-600">
                    <div class="bg-gray-50 py-8 sm:py-24">
                        <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
                            <h2 class="text-center text-base/7 font-semibold text-indigo-600">Deploy faster</h2>
                            <p class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-gray-950 sm:text-5xl">Everything you need to deploy your app</p>

                            <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
                                <div class="relative lg:row-span-2">
                                    <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-[2rem]"></div>
                                    <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                                        <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                                            <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Mobile friendly</p>
                                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
                                        </div>
                                        <div class="@container relative min-h-[30rem] w-full grow max-lg:mx-auto max-lg:max-w-sm">
                                            <div class="absolute inset-x-10 top-10 bottom-0 overflow-hidden rounded-t-[12cqw] border-x-[3cqw] border-t-[3cqw] border-gray-700 bg-gray-900 shadow-2xl">
                                                <img class="size-full object-cover object-top" src="https://tailwindui.com/plus-assets/img/component-images/bento-03-mobile-friendly.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 lg:rounded-l-[2rem]"></div>
                                </div>

                                <div class="relative max-lg:row-start-1">
                                    <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem]"></div>
                                    <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                                        <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                                            <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Performance</p>
                                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit maiores impedit.</p>
                                        </div>
                                        <div class="flex flex-1 items-center justify-center px-8 max-lg:pt-10 max-lg:pb-12 sm:px-10 lg:pb-2">
                                            <img class="w-full max-lg:max-w-xs" src="https://tailwindui.com/plus-assets/img/component-images/bento-03-performance.png" alt="">
                                        </div>
                                    </div>
                                    <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 max-lg:rounded-t-[2rem]"></div>
                                </div>

                                <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                                    <div class="absolute inset-px rounded-lg bg-white"></div>
                                    <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)]">
                                        <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                                            <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Security</p>
                                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Morbi viverra dui mi arcu sed. Tellus semper adipiscing suspendisse semper morbi.</p>
                                        </div>
                                        <div class="@container flex flex-1 items-center max-lg:py-6 lg:pb-2">
                                            <img class="h-[min(152px,40cqw)] object-cover" src="https://tailwindui.com/plus-assets/img/component-images/bento-03-security.png" alt="">
                                        </div>
                                    </div>
                                    <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5"></div>
                                </div>

                                <div class="relative lg:row-span-2">
                                    <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
                                    <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                                        <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                                            <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Powerful APIs</p>
                                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget sem sodales gravida.</p>
                                        </div>
                                        <div class="relative min-h-[30rem] w-full grow">
                                            <div class="absolute top-10 right-0 bottom-0 left-10 overflow-hidden rounded-tl-xl bg-gray-900 shadow-2xl">
                                                <div class="flex bg-gray-800/40 ring-1 ring-white/5">
                                                    <div class="-mb-px flex text-sm/6 font-medium text-gray-400">
                                                        <div class="border-r border-b border-r-white/10 border-b-white/20 bg-white/5 px-4 py-2 text-white">NotificationSetting.jsx</div>
                                                        <div class="border-r border-gray-600/10 px-4 py-2">App.jsx</div>
                                                    </div>
                                                </div>
                                                <div class="px-6 pt-6 pb-14">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
