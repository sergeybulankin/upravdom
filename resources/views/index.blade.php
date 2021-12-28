@extends('layouts.app')

@section('content')
    <div class="row container-fluid wrapper">
        @include('navigation.wrapper')

        <div class="col-10 dashboard">
            @include('navigation.header.wrapper')

            <div class="col-12 dashboard-wrapper">
                @yield('information_block')
            </div>
        </div>
    </div>
@endsection()
