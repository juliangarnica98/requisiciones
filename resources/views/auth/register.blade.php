
@extends('layouts.head')
    <div id="app" >
        @if ($errors->any())
            <div class="content">
                <register-component :mensaje="@json($errors)"></register-component>
            </div>
        @else
            <div class="content">
                <register-component></register-component>
            </div>
        @endif
    </div>
@extends('layouts.script')
