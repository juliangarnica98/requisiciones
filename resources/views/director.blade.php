
@extends('layouts.head')
    <body>
        <div class="">
            <div class="wrapper" id="app">
                <director-component :name='{{json_encode($user_name)}}'></director-component>
            </div>
        </div>
    </body>

@extends('layouts.script')
