<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="/docs/favicon.ico">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="p-5 bg-gray-900 antialiased ">
    <div class="md:container md:mx-auto dark:text-white">
        <!-- NAVBAR -->
        <div class="bg-gray-800 antialiased">
            <div class="px-2 mx-auto 2xl:px-0 py-4">

                <div class="relative flex justify-between mx-2 items-center lg:gap-28">

                    {{-- logo --}}
                    <div class="shrink-0">
                        <a href="/" title="" class="flex">
                            <img class="block w-auto h-8" src="/docs/dotdev-logo.png" alt="">
                        </a>
                    </div>
                    <div class="flex gap-4">

                        {{-- button my cart --}}
                        <button id="myCartDropdownButton1" data-dropdown-toggle="myCartDropdown1" type="button"
                            class="inline-flex items-center rounded-lg justify-center gap-1 hover:bg-gray-100 dark:hover:bg-gray-700 text-xs font-sm leading-none text-gray-900 dark:text-white">
                            <svg class="w-5 h-5 lg:me-1 pointer-events-none" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
                            </svg>
                            <span class="pointer-events-none">My Cart</span>
                        </button>

                        {{-- my cart dropdown --}}
                        <div id="myCartDropdown1"
                            class="z-40 mx-auto max-w-sm space-y-4 overflow-hidden rounded-lg p-4 antialiased shadow-lg bg-gray-900 focus:outline-none transition ease-in-out duration-500 opacity-0"
                            style="position: absolute; margin: 0px; transform: translate(-50px, 45px);">
                            <div class="grid grid-cols-2">
                                <div>
                                    <a href="#"
                                        class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">Apple
                                        iPhone 15</a>
                                    <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">$599
                                    </p>
                                </div>
                                <div class="flex items-center justify-end gap-6">
                                    <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 1
                                    </p>

                                    <button data-tooltip-target="tooltipRemoveItem1a" type="button"
                                        class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                                        <span class="sr-only"> Remove </span>
                                        <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <div id="tooltipRemoveItem1a" role="tooltip"
                                        class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                        Remove item
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div>
                                    <a href="#"
                                        class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">Apple
                                        iPad Air</a>
                                    <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">$499
                                    </p>
                                </div>
                                <div class="flex items-center justify-end gap-6">
                                    <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 1
                                    </p>
                                    <button data-tooltip-target="tooltipRemoveItem2a" type="button"
                                        class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                                        <span class="sr-only"> Remove </span>
                                        <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <div id="tooltipRemoveItem2a" role="tooltip"
                                        class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                        Remove item
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div>
                                    <a href="#"
                                        class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">Apple
                                        Watch SE
                                    </a>
                                    <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">
                                        $598
                                    </p>
                                </div>

                                <div class="flex items-center justify-end gap-6">
                                    <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 2
                                    </p>

                                    <button data-tooltip-target="tooltipRemoveItem3b" type="button"
                                        class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                                        <span class="sr-only"> Remove </span>
                                        <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <div id="tooltipRemoveItem3b" role="tooltip"
                                        class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                        Remove item
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div>
                                    <a href="#"
                                        class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">Sony
                                        Playstation 5</a>
                                    <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">
                                        $799</p>
                                </div>

                                <div class="flex items-center justify-end gap-6">
                                    <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 1
                                    </p>

                                    <button data-tooltip-target="tooltipRemoveItem4b" type="button"
                                        class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                                        <span class="sr-only"> Remove </span>
                                        <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <div id="tooltipRemoveItem4b" role="tooltip"
                                        class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                        Remove item
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div>
                                    <a href="#"
                                        class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">Apple
                                        iMac 20"</a>
                                    <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">
                                        $8,997</p>
                                </div>

                                <div class="flex items-center justify-end gap-6">
                                    <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 3
                                    </p>

                                    <button data-tooltip-target="tooltipRemoveItem5b" type="button"
                                        class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                                        <span class="sr-only"> Remove </span>
                                        <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <div id="tooltipRemoveItem5b" role="tooltip"
                                        class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                        Remove item
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" title=""
                                class="mb-2 me-2 inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                role="button">
                                Proceed to Checkout
                            </a>
                        </div>

                        {{-- user menu --}}
                        <button id="userDropdownButton1" data-dropdown-toggle="userDropdown1" type="button"
                            class="inline-flex items-center px-1 rounded-lg justify-center gap-1 hover:bg-gray-100 dark:hover:bg-gray-700 text-xs font-medium text-gray-900 dark:text-white">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="20" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            @auth
                                {{ Auth::user()->name }}
                            @endauth
                            @guest
                                <a href="{{ route('auth.login') }}" class="text-white">Sign In</a>
                            @endguest
                        </button>

                        @auth
                            <form action="{{ route('auth.logout') }}" method="post" class="text-sm">
                                @method('delete')
                                @csrf
                                <button class="text-white">Sign Out</button>
                            </form>
                        @endauth

                        <!-- Github -->
                        <div class="text-white">
                            <a href="https://github.com/tomatoweb/laravel-tailwind" target="_blank"
                                class="bg-green-600 rounded-lg px-2 py-1 flex h-8 justify-center text-white">
                                <img alt='' class="" src="/docs/64px-Octicons-mark-github.svg.png" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</body>

</html>
