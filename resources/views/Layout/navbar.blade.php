<header
    x-data="
   {
   navbarOpen: false
   }
   "
    class="flex items-center w-full bg-white dark:bg-dark"
>
    <div class="container mx-auto">
        <div class="relative flex items-center justify-between -mx-4">
            <div class="max-w-full px-4 w-60">
                <a href="javascript:void(0)" class="block w-full py-5">
                    <img
                        src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-primary.svg"
                        alt="logo"
                        class="dark:hidden"
                    />
                    <img
                        src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-white.svg"
                        alt="logo"
                        class="hidden dark:block"
                    />
                </a>
            </div>
            <div class="flex items-center justify-between w-full px-4">
                <div>
                    <x-navbar-humburger  @click="navbarOpen = !navbarOpen"
                                         x-bind:class="navbarOpen && 'navbarTogglerActive'" />
                    <nav
                        :class="!navbarOpen && 'hidden' "
                        id="navbarCollapse"
                        class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none dark:bg-dark-2 lg:dark:bg-transparent"
                    >

                        <ul class="block lg:flex">
                            @foreach($navigation_item as $item)
                                <x-navbar-item :item="$item" />
                            @endforeach()
                        </ul>
                    </nav>
                </div>
                <div class="justify-end hidden pr-16 sm:flex lg:pr-0">
                    <a
                        href="javascript:void(0)"
                        class="py-3 text-base font-medium px-7 text-dark dark:text-white hover:text-primary"
                    >
                        Login
                    </a>
                    <a
                        href="javascript:void(0)"
                        class="py-3 text-base font-medium text-white rounded-md bg-primary px-7 hover:bg-primary/90"
                    >
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
