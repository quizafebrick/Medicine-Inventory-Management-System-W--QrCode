@extends('partials.header')

@section('registration')
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

    <div class="flex items-center justify-center">
        <form action="{{ route('save-register') }}" method="POST">
            @csrf
            <div class="pt-20 md:pt-32 mx-20">
                <div class="p-5 px-8 bg-white rounded-lg outline outline-amber-600">
                    <div class="mt-5 text-3xl font-bold text-center text-black">BARANGAY 12 - MIMS-QR</div>
                    <div class="outline outline-2 mt-5"></div>
                    <div class="text-black text-center text-xl font-bold pt-3">REGISTRATION FORM:</div>
                    <div class="grid grid-cols-2 mb-5 gap-3">
                        <div>
                            <label for="fullname" class="pt-5 block text-lg font-medium text-black">
                                ENTER YOUR FULLNAME:
                            </label>
                            <input type="text" id="fullname" name="fullname"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 font-bold text-lg"
                                placeholder="ex. Juan Dela Cruz" value="{{ old('fullname') }}"
                                onkeyup="this.value = this.value.toUpperCase()">
                            <span class="font-bold text-red-400">
                                @error('fullname')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div>
                            <label for="contact_no" class="pt-5 block text-lg font-medium text-black">
                                ENTER YOUR CONTACT NO.:
                            </label>
                            <input type="text" id="contact_no" name="contact_no"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 font-bold text-lg"
                                placeholder="ex. 09123456789" value="{{ old('contact_no') }}" maxlength="11"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                            <span class="font-bold text-red-400">
                                @error('contact_no')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div>
                            <label for="username" class="pt-5 block text-lg font-medium text-black">
                                ENTER YOUR USERNAME:
                            </label>
                            <input type="text" id="username" name="username"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 font-bold text-lg"
                                placeholder="ex. 09123456789" value="{{ old('username') }}">
                            <span class="font-bold text-red-400">
                                @error('username')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div>
                            <label for="password" class="pt-5 block text-lg font-medium text-black">
                                ENTER YOUR PASSWORD:
                            </label>
                            <input type="password" id="password" name="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 font-bold text-lg"
                                placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;">
                            <span class="font-bold text-red-400">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                    </div>
                    <div class="flex items-center justify-center gap-5">
                        <button
                            class="text-black font-bold bg-amber-500 hover:bg-amber-600 hover:duration-300 rounded-lg text-lg w-full sm:w-auto px-5 py-2.5 text-center">
                            Save Registration
                        </button>
                        <a href="{{ route('login') }}"
                            class="text-black font-bold bg-amber-500 hover:bg-amber-600 hover:duration-300 rounded-lg text-lg w-full sm:w-auto px-5 py-2.5 text-center">
                            Sign In
                        </a>
                    </div>
                    <div class="outline outline-2 mt-6 mb-10"></div>
                </div>
            </div>
        </form>
    </div>
@endsection

@extends('partials.footer')
