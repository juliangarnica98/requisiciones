
@extends('layouts.head')
    <body>
        <div class="">
            <div class="wrapper" id="app">
                <director-component :name='{{json_encode($user_name)}}'
                :last_name='{{json_encode($last_name)}}' :area='{{json_encode($area)}}'></director-component>
            </div>
        </div>
    </body>

@extends('layouts.script')
