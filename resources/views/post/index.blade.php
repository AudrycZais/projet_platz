@extends('templates.index')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
@endsection
@section('content')
<div id="wrapper-container">

    <div class="container object">

        <div id="main-container-image">

            @include('post._list', ['posts'=>$posts])

        </div>

    </div>
    <div id="more">

        <div id="wrapper-oldnew">
            <div class="oldnew">
                <div class="wrapper-oldnew-prev">
                    <div id="oldnew-prev"></div>

                </div>
            </div>
        </div>
    </div>

    <div id="wrapper-thank">
        <div class="thank">
            <div class="thank-text">pl<span style="letter-spacing:-5px;">a</span>tz</div>
        </div>
    </div>

    @endsection

    @section('script')
    <script src="{{ asset('assets/js/more.js') }}"></script>
    <script src="{{ asset('assets/js/ajaxCategory.js') }}"></script>
    @endsection