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

    {{-- * ADD BUTTON AND THE TABLE OF ALL MEDICINES * --}}
    <div class="w-full p-5 rounded-lg md:p-10">
        <div class="p-3 mx-4 mb-5 rounded-lg shadow-lg outline outline-dotted">
            <div class="hidden p-1 mx-5 md:flex">
                <label for="my-modal-3"
                    class="font-bold text-black hover:ease-in btn bg-amber-500 hover:bg-amber-600 hover:duration-200">Add
                    Medicine
                </label>
            </div>
            <div class="flex items-center justify-center md:hidden">
                <label for="my-modal-3"
                    class="mt-5 font-bold text-center text-black hover:ease-in btn bg-amber-500 hover:bg-amber-600 hover:duration-200">Add
                    Medicine
                </label>
            </div>
            <div class="py-5 mx-5">
                <livewire:medicine-table />
            </div>
        </div>
    </div>
@endsection

{{-- * FOR PREVIEWING OF PICTURE * --}}
<script>
    var loadPreview = function(event) {
        var preview = document.getElementById('loadPreviewImage');
        preview.src = URL.createObjectURL(event.target.files[0]);
    };

    var loadPreview2 = function(event) {
        var preview2 = document.getElementById('loadPreviewImage2');
        preview2.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

@extends('partials.footer')
