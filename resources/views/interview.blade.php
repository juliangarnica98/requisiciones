@extends('layouts.head')
<link rel="shortcut icon"  href="{{ asset('images/lili.ico') }}">
    <body style="background-color: #fff">
        <div class="">
            <div class="wrapper" id="app">
                {{-- <interview-component :document='{{json_encode($id)}}'></interview-component> --}}
                <interview-component :document='{{json_encode($id)}}' :area='{{json_encode($area)}}'></interview-component>
            </div>
        </div>
        @extends('layouts.script')
    </body>

