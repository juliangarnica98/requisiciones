
@extends('layouts.head')
    <body>
        <div class="">
            <div class="wrapper" id="app">
                <generalist-component :name='{{json_encode($user_name)}}'></generalist-component>
            </div>
        </div>
    </body>

@extends('layouts.script')
