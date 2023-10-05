
@extends('layouts.head')
    <body>
        <div class="">
            <div class="wrapper" id="app">
                <boss-component :name='{{json_encode($user_name)}}'></boss-component>
            </div>
        </div>
    </body>

@extends('layouts.script')
