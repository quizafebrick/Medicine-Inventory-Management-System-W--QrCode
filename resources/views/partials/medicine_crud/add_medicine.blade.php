<h3 class="mt-10 text-5xl font-bold text-center text-black underline">ALL MEDICINES</h3>
<div class="mx-10">
    <div>
        {{-- * THE BUTTON TO OPEN MODAL * --}}
        {{-- <label for="my-modal-3"
                class="font-bold text-black hover:ease-in btn bg-amber-500 hover:bg-amber-600 hover:duration-200">Add
                Medicine</label> --}}

        {{-- * PUT THIS PART BEFORE </BODY> TAG * --}}
        <input type="checkbox" id="my-modal-3" class="modal-toggle" />

        {{-- * CONTAINER OF MODAL * --}}
        <div class="text-white modal" data-theme="dark">
            <div class="relative modal-box">
                <label for="my-modal-3" class="absolute btn btn-sm btn-circle right-2 top-2">✕</label>
                <div class="mx-5">
                    <h3 class="text-3xl font-bold">ADD MEDICINE</h3>

                    {{-- * GRID 2 COLUMNS * --}}
                    <form action="{{ route('medicine-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-2 gap-3 mt-5">
                            <div class="form-control">
                                <span class="font-bold">Name:</span>
                                <input type="text" name="name" placeholder="Enter Name of Medicine"
                                    class="w-full max-w-sm input input-bordered"
                                    onkeyup="this.value = this.value.toUpperCase()" />
                                <span class="font-bold text-red-400">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-control">
                                <span class="font-bold">Category:</span>
                                <select class="w-full max-w-xs select select-bordered" name="category_name">
                                    <option disabled selected class="font-bold text-gray">Choose Category</option>
                                    <option class="font-bold">Han Solo</option>
                                    <option class="font-bold">Greedo</option>
                                </select>
                                <span class="font-bold text-red-400">
                                    @error('category_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-control">
                                <span class="font-bold">Quantity:</span>
                                <input type="text" name="quantity" placeholder="Enter Quantity"
                                    class="w-full max-w-sm input input-bordered"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" />
                                <span class="font-bold text-red-400">
                                    @error('quantity')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-control">
                                <span class="font-bold">Expiration:</span>
                                <input type="date" name="expiration" placeholder="Type here"
                                    class="w-full max-w-sm input input-bordered" />
                                <span class="font-bold text-red-400">
                                    @error('expiration')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-control">
                                <span class="font-bold">Strength:</span>
                                <input type="text" name="strength" placeholder="Type here"
                                    class="w-full max-w-sm input input-bordered" />
                                <span class="font-bold text-red-400">
                                    @error('strength')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-control">
                                <span class="font-bold">Ingredients:</span>
                                <textarea class="resize-none textarea textarea-bordered" placeholder="Ingredients..." name="ingredient"></textarea>
                                <span class="font-bold text-red-400">
                                    @error('ingredients')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-control">
                                <span class="font-bold">Insert Photo:</span>
                                <input type="file" name="image" id="image"
                                    class="w-full max-w-xs file-input file-input-bordered file-input-xs"
                                    onchange="loadPreview(event)"/>
                                <span class="font-bold text-red-400">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-control">
                                <span class="font-bold">Preview:</span>
                                <img id="loadPreviewImage" class="w-full max-w-xs" />
                            </div>
                        </div>

                        <input type="hidden" name="reference_no">

                        {{-- * FLEX CENTER BUTTON * --}}
                        <div class="flex items-center justify-center mt-5">
                            <button
                                class="text-black font-bold bg-amber-500 hover:bg-amber-600 hover:duration-300 rounded-lg text-lg w-full sm:w-auto px-5 py-2.5 text-center">
                                Save Medicine
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
