@extends('partials.header')

{{-- * GET THE NAVBAR FILE IN PARTIALS * --}}
@extends('partials.navbar')

<script type="text/javascript">
    function DisableBackButton() {
        window.history.forward()
    }
    DisableBackButton();
    window.onload = DisableBackButton;
    window.onpageshow = function(evt) {
        if (evt.persisted) DisableBackButton()
    }
    window.onunload = function() {
        void(0)
    }
</script>

{{-- * GET THE USER CONTENT, YIELD IN THE HEADER FILE IN PARTIALS * --}}
@section('users-index-view')
    ALREADY LOGGED IN!
@endsection

@extends('partials.footer')
