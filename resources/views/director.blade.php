
@extends('layouts.head')
<link rel="shortcut icon"  href="{{ asset('images/lili.ico') }}">
    <body>
        <div class="">
            <div class="wrapper" id="app">
                <director-component :name='{{json_encode($user_name)}}'
                :last_name='{{json_encode($last_name)}}' :area='{{json_encode($area)}}'></director-component>
            </div>
        </div>
        @extends('layouts.script')
    </body>

