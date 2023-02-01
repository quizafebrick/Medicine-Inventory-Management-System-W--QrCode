@extends('partials.header')

{{-- * GET THE NAVBAR FILE IN PARTIALS * --}}
@extends('partials.navbar')

{{-- * GET THE USER CONTENT, YIELD IN THE HEADER FILE IN PARTIALS * --}}
@section('users-index-view')
<h3 class="mt-5 text-4xl font-bold text-center text-black">ALL MEDICINES</h3>
<div class="mx-10">
    <div>
        {{-- * THE BUTTON TO OPEN MODAL * --}}
        <label for="my-modal-3" class="font-bold text-black hover:ease-in btn bg-amber-500 hover:bg-amber-600 hover:duration-200">open modal</label>

        {{-- * PUT THIS PART BEFORE </BODY> TAG * --}}
        <input type="checkbox" id="my-modal-3" class="modal-toggle"/>
        <div class="text-white modal" data-theme="dark">
            <div class="relative modal-box">
                <label for="my-modal-3" class="absolute btn btn-sm btn-circle right-2 top-2">✕</label>
                <div class="mx-5">
                    <h3 class="text-3xl font-bold">ADD MEDICINE</h3>
                    <div class="grid grid-cols-2 gap-3 mt-5">
                        <div class="form-control">
                            <span class="font-bold">Name:</span>
                            <input type="text" placeholder="Type here" class="w-full max-w-sm input input-bordered" onkeyup="this.value = this.value.toUpperCase()"/>
                        </div>
                        <div class="form-control">
                            <span class="font-bold">Category:</span>
                            <select class="w-full max-w-xs select select-bordered">
                                <option disabled selected class="font-bold text-gray">Choose Category</option>
                                <option class="font-bold">Han Solo</option>
                                <option class="font-bold">Greedo</option>
                            </select>
                        </div>
                        <div class="form-control">
                            <span class="font-bold">Quantity:</span>
                            <input type="text" placeholder="Enter Quantity" class="w-full max-w-sm input input-bordered" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"/>
                        </div>
                        <div class="form-control">
                            <span class="font-bold">Expiration:</span>
                            <input type="date" placeholder="Type here" class="w-full max-w-sm input input-bordered"/>
                        </div>
                        <div class="form-control">
                            <span class="font-bold">Strength:</span>
                            <input type="text" placeholder="Type here" class="w-full max-w-sm input input-bordered"/>
                        </div>
                        <div class="form-control">
                            <span class="font-bold">Ingredients:</span>
                            <textarea class="resize-none textarea textarea-bordered" placeholder="Ingredients..."></textarea>
                        </div>
                        <div class="form-control">
                            <span class="font-bold">Insert Photo:</span>
                            <input type="file" class="w-full max-w-xs file-input file-input-bordered file-input-xs" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('partials.footer')
