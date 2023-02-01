<div class="navbar bg-amber-500">
    <div class="flex-1 mx-6">
        <a href="{{ route('users-index') }}"
            class="btn btn-ghost normal-case text-xl font-bold text-black hover:duration-100 hover:ease-in">
            MEDICINE INVENTORY MANAGEMENT SYSTEM - QR CODE
        </a>
    </div>
    <div class="flex-none mx-6">
        <ul class="menu menu-horizontal px-1 text-black font-semibold">
            <li class="hover:duration-100 hover:ease-in">
                <a>Item 1</a>
            </li>
            <li class="hover:duration-100 hover:ease-in">
                <a>Item 3</a>
            </li>
            <li tabindex="0">
                <a>
                    {{ $userLoggedIn['username'] }}
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 24 24">
                        <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                    </svg>
                </a>
                <ul class="p-2 bg-slate-800 text-white font-bold">
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
</div>
