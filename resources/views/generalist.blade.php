
@extends('layouts.head')
<link rel="shortcut icon"  href="{{ asset('images/lili.ico') }}">
    <body>
        <div class="">
            <div class="wrapper" id="app">
                <generalist-component :name='{{json_encode($user_name)}}' :last_name='{{json_encode($last_name)}}'></generalist-component>
            </div>
        </div>
        @extends('layouts.script')
    </body>

