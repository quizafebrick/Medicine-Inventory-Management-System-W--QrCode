@extends('partials.header')

{{-- * GET THE NAVBAR FILE IN PARTIALS * --}}
@extends('partials.navbar')

{{-- * GET THE USER CONTENT, YIELD IN THE HEADER FILE IN PARTIALS * --}}
@section('users-index-view')
    {{-- ! ERROR MESSAGE ! --}}
    @if ($errors->any())
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000,
                background: '#f64341',
                color: '#ffff',
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.resumeTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: "There's something wrong..."
            })
        </script>
    @endif

    @if (Session::has('error'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000,
                background: '#f64341',
                color: '#ffff',
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.resumeTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: "{{ Session::get('error') }}"
            })
        </script>
    @endif

    {{-- * SUCCESS MESSAGE * --}}
    @if (Session::has('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000,
                background: '#59b259',
                color: '#ffff',
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.resumeTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: "{{ session()->get('success') }}"
            })
        </script>
    @endif

    {{-- * GET THE ACTION MODAL INSIDE THE MEDICINE CRUD FOLDER * --}}
    @include('partials.medicine_crud.add_medicine')
    {{-- @include('livewire.edit-medicine') --}}

    {{-- * ADD BUTTON AND THE TABLE OF ALL MEDICINES * --}}
    <div class="w-full p-5 rounded-lg md:p-10">
        <div class="p-3 mx-4 mb-5 rounded-lg shadow-lg outline outline-dotted">

            {{-- * ADD & PRINT BUTTON MEDIUM FLEX * --}}
            <div class="hidden gap-2 p-1 mx-5 md:flex">
                {{-- * ADD BUTTON MEDIUM FLEX * --}}
                <label for="my-modal-3" class=" hover:ease-in btn bg-amber-500 hover:bg-amber-600 hover:duration-200">
                    {{-- * ADD ICON * --}}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-8 text-black">
                        <path fill-rule="evenodd"
                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z"
                            clip-rule="evenodd" />
                    </svg>
                </label>

                {{-- * PRINT BUTTON MEDIUM FLEX * --}}
                <a href="{{ route('medicine-print') }}"
                    class=" hover:ease-in btn bg-amber-500 hover:bg-amber-600 hover:duration-200" id="btnPrint">
                    {{-- * PRINT ICON * --}}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-8 text-black">
                        <path fill-rule="evenodd"
                            d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            {{-- * ADD & PRINT BUTTON SMALL FLEX * --}}
            <div class="flex items-center justify-center gap-2 p-1 mx-5 md:hidden">
                {{-- * ADD BUTTON SMALL FLEX * --}}
                <label for="my-modal-3"
                    class="mt-5 font-bold text-center text-black hover:ease-in btn bg-amber-500 hover:bg-amber-600 hover:duration-200">
                    {{-- * ADD ICON * --}}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-8 text-black">
                        <path fill-rule="evenodd"
                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z"
                            clip-rule="evenodd" />
                    </svg>
                </label>

                {{-- * PRINT BUTTON SMALL FLEX * --}}
                <label for="my-modal-3"
                    class="mt-5 font-bold text-center text-black hover:ease-in btn bg-amber-500 hover:bg-amber-600 hover:duration-200">
                    {{-- * PRINT ICON * --}}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-8 text-black">
                        <path fill-rule="evenodd"
                            d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                            clip-rule="evenodd" />
                    </svg>
                </label>
            </div>
            <div class="py-5 mx-5 z-">
                <livewire:medicine-table />
                {{-- <livewire:power-grid-demo-table /> --}}

                {{-- <div class="mx-10 mt-5 overflow-x-auto">
                    <table class="table w-full font-bold table-compact" id="tablePrint">
                        <!-- head -->
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Category</th>
                                <th>Expiration Date</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <hr>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($getMedicine as $placeMedicine)
                                <tr>
                                    <td>{{ $placeMedicine->id }}</td>
                                    <td>{{ $placeMedicine->name }}</td>
                                    <td>{{ $placeMedicine->quantity }}</td>
                                    <td>{{ $placeMedicine->category_name }}</td>
                                    <td>{{ date('M-d-Y', strtotime($placeMedicine->expiration)) }}</td>
                                    <td>
                                        <button
                                            onclick='Livewire.emit("openModal", "edit-medicine", {{ json_encode(['id' => $placeMedicine->id]) }})'>Edit
                                            User</button>
                                    </td>
                                </tr>
                                <tr>
                                    <hr>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> --}}
            </div>
        </div>
    </div>
@endsection

@extends('partials.footer')
