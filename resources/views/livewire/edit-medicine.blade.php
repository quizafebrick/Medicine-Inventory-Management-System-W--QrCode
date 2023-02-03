{{-- * TO ATTAIN KNOWLEDGE, ADD THINGS EVERY DAY; TO ATTAIN WISDOM, SUBTRACT THINGS EVERY DAY. * --}}

<div class="mx-10 mt-10 text-black">
    {{-- * CONTAINER OF MODAL * --}}
    <h3 class="text-3xl font-bold text-center">UPDATE MEDICINE</h3>

    {{-- * GRID 2 COLUMNS * --}}
    <form action="{{ route('medicine-update', $getMedicine->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="grid grid-cols-2 gap-3 mt-3">
            <div class="form-control">
                <span class="font-bold">Name:</span>
                <input type="text" name="name" placeholder="Enter Name of Medicine"
                    class="w-full max-w-sm input input-bordered" onkeyup="this.value = this.value.toUpperCase()"
                    value="{{ $getMedicine->name }}" />
                <span class="font-bold text-red-400">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-control">
                <span class="font-bold">Category:</span>
                <select class="w-full max-w-xs select select-bordered" name="category_name">
                    <option disabled selected class="font-bold text-gray" value="{{ $getMedicine->category_name }}">
                        {{ $getMedicine->category_name }}</option>
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
                    oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"
                    value="{{ $getMedicine->quantity }}" />
                <span class="font-bold text-red-400">
                    @error('quantity')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-control">
                <span class="font-bold">Expiration:</span>
                <input type="date" name="expiration" placeholder="Type here"
                    class="w-full max-w-sm input input-bordered" value="{{ $getMedicine->expiration }}" />
                <span class="font-bold text-red-400">
                    @error('expiration')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-control">
                <span class="font-bold">Strength:</span>
                <input type="text" name="strength" placeholder="Type here"
                    class="w-full max-w-sm input input-bordered" value="{{ $getMedicine->strength }}" />
                <span class="font-bold text-red-400">
                    @error('strength')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-control">
                <span class="font-bold">Ingredients:</span>
                <textarea class="resize-none textarea textarea-bordered" placeholder="Ingredients..." name="ingredient">{{ $getMedicine->ingredient }}</textarea>
                <span class="font-bold text-red-400">
                    @error('ingredient')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-control">
                <span class="font-bold">Insert Photo:</span>
                <input type="file" name="image" id="image"
                    class="w-full max-w-xs file-input file-input-bordered file-input-xs"
                    onchange="loadPreview2(event)" />
                <span class="font-bold text-red-400">
                    @error('image')
                        {{ $message }}
                    @enderror
                </span>
                <br>
                <div>
                    <span class="font-bold">New Preview:</span>
                    <img class="w-full max-w-xs" id="loadPreviewImage2" />
                </div>
            </div>
            <div class="form-control">
                <span class="font-bold">Old Preview:</span>
                <img class="w-full max-w-xs" src="{{ asset('storage/image/' . $getMedicine->image) }}" />
            </div>
        </div>

        <input type="hidden" name="id" value="{{ $getMedicine->id }}">

        {{-- * FLEX CENTER BUTTON * --}}
        <div class="flex items-center justify-center mt-10">
            <button
                class="text-black font-bold bg-amber-500 hover:bg-amber-600 hover:duration-300 rounded-lg text-lg w-full sm:w-auto px-5 py-2.5 text-center">
                Update Medicine
            </button>
        </div>
    </form>
</div>
