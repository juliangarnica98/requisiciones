
@extends('layouts.head')

    <body style="background-color: #ffffff">
        <div class="">
            <div class="wrapper" id="app">
                <admin-component :name='{{json_encode($user_name)}}' :last_name='{{json_encode($last_name)}}'></admin-component>
            </div>
        </div>
    </body>

@extends('layouts.script')
