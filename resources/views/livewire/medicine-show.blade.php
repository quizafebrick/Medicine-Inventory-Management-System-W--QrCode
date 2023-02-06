{{-- * A GOOD TRAVELER HAS NO FIXED PLANS AND HAS NO INTENT UPON ARRIVING. * --}}

{{-- <div class="mt-10 text-black"> --}}
{{-- * CONTAINER OF MODAL * --}}

<div class="p-10 text-black bg-amber-500">
    <div class="p-10 rounded-lg outline outline-2 bg-amber-600">
        <h3 class="p-2 text-3xl font-bold text-center">DETAILS</h3>

        {{-- * GRID 2 COLUMNS * --}}
        <div class="grid grid-cols-2 gap-3 mx-5">
            <div>
                <span class="font-bold">Name:</span>
                <input type="text" class="w-full max-w-sm font-semibold input" value="{{ $getMedicine->name }}"
                    readonly />
                <span class="font-bold text-red-400">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div>
                <span class="font-bold">Category:</span>
                <input type="text" class="w-full max-w-sm font-semibold input"
                    value="{{ $getMedicine->category_name }}" readonly />
                <span class="font-bold text-red-400">
                    @error('category_name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div>
                <span class="font-bold">Quantity:</span>
                <input type="text" name="quantity" class="w-full max-w-sm font-semibold input"
                    value="{{ $getMedicine->quantity }}" readonly />
                <span class="font-bold text-red-400">
                    @error('quantity')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div>
                <span class="font-bold">Expiration:</span>
                <input type="text" class="w-full max-w-sm font-semibold input" value="{{ $getMedicine->expiration }}"
                    readonly />
                <span class="font-bold text-red-400">
                    @error('expiration')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div>
                <span class="font-bold">Strength:</span>
                <input type="text" class="w-full max-w-sm font-semibold input" value="{{ $getMedicine->strength }}"
                    readonly />
                <span class="font-bold text-red-400">
                    @error('strength')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div>
                <span class="font-bold">Description:</span>
                <textarea class="w-full max-w-sm font-semibold resize-none textarea" placeholder="Ingredients..." name="ingredient"
                    readonly />{{ $getMedicine->description }}</textarea>
                <span class="font-bold text-red-400">
                    @error('ingredient')
                        {{ $message }}
                    @enderror
                </span>
            </div>
        </div>
        <div class="flex items-center justify-center gap-5 mt-5">
            <div>
                <span class="font-bold">Preview:</span>
                <img class="w-full max-w-xs rounded-md" src="{{ asset('storage/image/' . $getMedicine->image) }}">
            </div>
            <div>
                <span class="font-bold">QR Code:</span>
                <br>
                <div class="mt-1 text-sm font-bold">Reference No.:</div>
                {!! QrCode::size(120)->generate($getMedicine->reference_no) !!}
            </div>
        </div>
    </div>
</div>
