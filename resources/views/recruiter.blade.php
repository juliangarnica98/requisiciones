
@extends('layouts.head')
    <body>
        <div class="">
            <div class="wrapper" id="app">
                <recruiter-component :name='{{json_encode($user_name)}}' :last_name='{{json_encode($last_name)}}'></recruiter-component>
            </div>
        </div>
    </body>

@extends('layouts.script')
