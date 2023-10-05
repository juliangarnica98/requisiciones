@extends('layouts.head')

{{-- @section('content') --}}
    <div id="app" >     
        @if ($errors->any())
            <div class="content" >
                <login-component :mensaje="@json($errors)"></login-component>
            </div>
        @else
            <div class="content" >
                <login-component ></login-component>
            </div>
        @endif
    </div>
{{-- @endsection --}}

@extends('layouts.script')
