<div class="navbar bg-amber-500">
    <div class="flex-1 mx-2 md:mx-10">
        <img class="h-10 md:h-16" src="{{ asset('img/LOGO.png') }}" alt="LOGO">
        <a href="{{ route('users-index') }}"
            class="hidden font-bold text-black normal-case text-md md:text-xl btn btn-ghost hover:duration-100 hover:ease-in md:flex">
            MEDICINE INVENTORY MANAGEMENT SYSTEM - QR CODE
        </a>
        <a href="{{ route('users-index') }}"
            class="flex font-bold text-black normal-case text-md md:text-xl btn btn-ghost hover:duration-100 hover:ease-in md:hidden">
            MEDICINE INVENTORY MANAGEMENT SYSTEM - QR
        </a>
    </div>
    <div class="hidden mx-6 lg:block lg:w-auto">
        <ul class="px-1 font-semibold text-black menu menu-horizontal">
            <li class="hover:duration-100 hover:ease-in">
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6">
                        <path
                            d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                    </svg>
                    Patients
                </a>
            </li>
            <li class="hover:duration-100 hover:ease-in">
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6">
                        <path fill-rule="evenodd"
                            d="M2.625 6.75a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875 0A.75.75 0 018.25 6h12a.75.75 0 010 1.5h-12a.75.75 0 01-.75-.75zM2.625 12a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zM7.5 12a.75.75 0 01.75-.75h12a.75.75 0 010 1.5h-12A.75.75 0 017.5 12zm-4.875 5.25a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875 0a.75.75 0 01.75-.75h12a.75.75 0 010 1.5h-12a.75.75 0 01-.75-.75z"
                            clip-rule="evenodd" />
                    </svg>
                    Categories
                </a>
            </li>
            <li tabindex="0">
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" className="w-6 h-10"
                        class="h-6">
                        <path fillRule="evenodd"
                            d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                            clipRule="evenodd" />
                    </svg>

                    {{ $userLoggedIn['username'] }}

                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 24 24">
                        <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                    </svg>
                </a>
                <ul class="p-2 font-bold text-white bg-slate-800">
                    <li class="hover:bg-amber-500 hover:text-black hover:duration-100 hover:ease-in">
                        <a>Submenu 1</a>
                    </li>
                    <hr>
                    <li class="hover:bg-amber-500 hover:text-black hover:duration-100 hover:ease-in">
                        <a href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    {{-- * BURGER ICON FOR SMALL FLEX * --}}
    <div class="flex items-center lg:hidden">
        <button class="btn btn-square btn-ghost navbar-menu-button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                class="inline-block h-6 text-black stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>
</div>
<div class="hidden p-2 py-2 text-lg font-semibold text-center lg:hidden navbar-menu bg-amber-500">
    <ul class="flex items-center px-1 text-sm font-semibold text-black md:text-lg menu menu-vertical">
        <li class="hover:duration-100 hover:ease-in">
            <a>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6">
                    <path
                        d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                </svg>
                Patients
            </a>
        </li>
        <li class="hover:duration-100 hover:ease-in">
            <a>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6">
                    <path fill-rule="evenodd"
                        d="M2.625 6.75a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875 0A.75.75 0 018.25 6h12a.75.75 0 010 1.5h-12a.75.75 0 01-.75-.75zM2.625 12a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zM7.5 12a.75.75 0 01.75-.75h12a.75.75 0 010 1.5h-12A.75.75 0 017.5 12zm-4.875 5.25a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875 0a.75.75 0 01.75-.75h12a.75.75 0 010 1.5h-12a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd" />
                </svg>
                Categories
            </a>
        </li>
        <li tabindex="0">
            <a>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" className="w-6 h-10"
                    class="h-6">
                    <path fillRule="evenodd"
                        d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                        clipRule="evenodd" />
                </svg>

                {{ $userLoggedIn['username'] }}

                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 24 24">
                    <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                </svg>
            </a>
            <ul class="p-2 font-bold text-white bg-slate-800">
                <li class="hover:bg-amber-500 hover:text-black hover:duration-100 hover:ease-in">
                    <a>Submenu 1</a>
                </li>
                <hr>
                <li class="hover:bg-amber-500 hover:text-black hover:duration-100 hover:ease-in">
                    <a href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
