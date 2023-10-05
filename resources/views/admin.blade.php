
@extends('layouts.head')

    <body style="background-color: #ffffff">
        <div class="">
            <div class="wrapper" id="app">
                <admin-component :name='{{json_encode($user_name)}}'></admin-component>
            </div>
        </div>
    </body>

@extends('layouts.script')
