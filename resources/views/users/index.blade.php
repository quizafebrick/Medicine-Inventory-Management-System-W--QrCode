@extends('partial-front.header')

@section('users-index-view')
    ALREADY LOGGED IN
    {{ $userLoggedIn['username'] }}
@endsection

@extends('partial-front.footer')
