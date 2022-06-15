<header class="container mx-auto">
    <nav class="flex flex-wrap justify-between items-center py-2.5">
        {{-- Logo + site name --}}
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="/images/logo.jpg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap">Flowbite</span>
        </a>

        <div class="flex items-center md:order-2">
            <button type="button" class="flex text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" type="button" data-dropdown-toggle="dropdown">
                <img class="w-8 h-8 rounded-full" src="/images/logo.jpg" alt="">
            </button>
            <!-- Dropdown menu -->
            <!--<div
                class="z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown">
                <ul class="py-1" aria-labelledby="dropdown">
                    @foreach($menu as $menuItem)
                        <li>
                            <a
                                href="{{ route($menuItem['route']) }}"
                                class="{{ request()->route()->getName() === $menuItem['route'] ? 'md:text-blue-700' : 'md:text-green-700' }} block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200"
                                aria-current="page"
                            >
                                {{ $menuItem['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>-->

            {{-- TODO Button mobile menu open --}}
            <button data-collapse-toggle="mobile-menu" type="button" class="" aria-controls="mobile-menu" aria-expanded="false"></button>
        </div>

        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="desktop-menu">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                    @foreach($menu as $menuItem)
                        <li>
                            <a
                                href="{{ route($menuItem['route']) }}"
                                class="{{ request()->route()->getName() === $menuItem['route'] ? 'md:text-blue-700' : 'md:text-green-700' }} block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:p-0"
                                aria-current="page"
                            >
                                {{ $menuItem['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
    </nav>
</header>
