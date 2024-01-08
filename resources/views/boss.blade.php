
@extends('layouts.head')
    <body>
        <div class="">
            <div class="wrapper" id="app">
                <boss-component :name='{{json_encode($user_name)}}' :last_name='{{json_encode($last_name)}}'></boss-component>
            </div>
        </div>
    </body>

@extends('layouts.script')
