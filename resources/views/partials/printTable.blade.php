@extends('partials.header')


<div class="text-xs font-bold text-black">
    <div class="pt-10 text-4xl font-bold text-center">BRGY. 12 ALL MEDICINES</div>

    <div class="mx-10 mt-5 overflow-x-auto">
        <table class="table w-full font-bold table-compact" id="tablePrint">
            <!-- head -->
            <thead class="text-center">
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>Expiration Date</th>
                </tr>
                <tr>
                    <hr>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($getMedicine as $placeMedicine)
                    <tr>
                        <td>{{ $placeMedicine->name }}</td>
                        <td>{{ $placeMedicine->quantity }}</td>
                        <td>{{ $placeMedicine->category_name }}</td>
                        <td>{{ date('M-d-Y', strtotime($placeMedicine->expiration)) }}</td>
                    </tr>
                    <tr>
                        <hr>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@extends('partials.footer')
