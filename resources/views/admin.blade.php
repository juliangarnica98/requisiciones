
    @extends('layouts.head')
    <link rel="shortcut icon"  href="{{ asset('images/lili.ico') }}">
    <body style="background-color: #ffffff">
        <div class="">
            <div class="wrapper" id="app">
                <admin-component :name='{{json_encode($user_name)}}' :last_name='{{json_encode($last_name)}}'></admin-component>
            </div>
        </div>
        @extends('layouts.script')
    </body>
