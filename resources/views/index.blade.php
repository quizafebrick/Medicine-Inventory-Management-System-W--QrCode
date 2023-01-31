@extends('partial-front.header')

@section('login')
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

    <div class="flex items-center justify-center">
        <form action="{{ route('check-login') }}" method="POST">
            @csrf
            <div class="pt-10 md:pt-24 mx-20">
                <div class="p-5 px-8 bg-white rounded-lg outline outline-amber-600">
                    <div class="mb-5">
                        <div class="mt-5 text-3xl font-bold text-center text-black">BARANGAY 12 - MIMS-QR</div>
                        <div class="outline outline-2 mt-5"></div>
                        <div class="text-black text-center text-xl font-bold pt-3">LOGIN FORM:</div>
                        <label for="username" class="pt-5 block text-lg font-medium text-black">ENTER YOUR USERNAME:</label>
                        <input type="text" id="username" name="username"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 font-bold text-lg"
                            placeholder="example@gmail.com" value="{{ old('username') }}">
                        <span class="font-bold text-red-400">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-lg font-medium text-black">ENTER YOUR PASSWORD:</label>
                        <input type="password" id="password" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg block w-full p-2.5"
                            value="{{ old('password') }}"
                            placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;">
                        <span class="font-bold text-red-400">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="flex items-center justify-center gap-5">
                        <button
                            class="text-black font-bold bg-yellow-500 hover:bg-yellow-600 hover:duration-300 rounded-lg text-lg w-full sm:w-auto px-5 py-2.5 text-center">
                            Login
                        </button>
                        <a href="{{ route('register') }}"
                            class="text-black font-bold bg-yellow-500 hover:bg-yellow-600 hover:duration-300 rounded-lg text-lg w-full sm:w-auto px-5 py-2.5 text-center">
                            Register
                        </a>
                    </div>
                    <div class="outline outline-2 mt-6 mb-10"></div>
                </div>
            </div>
        </form>
    </div>
@endsection

@extends('partial-front.footer')
