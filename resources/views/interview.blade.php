@extends('layouts.head')
    <body style="background-color: #fff">
        <div class="">
            <div class="wrapper" id="app">
                <interview-component :document='{{json_encode($id)}}'></interview-component>
            </div>
        </div>
    </body>

@extends('layouts.script')
