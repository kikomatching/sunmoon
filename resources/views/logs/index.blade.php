@extends('layouts.master')

@section('content')
    <div class="d-md-flex" data-page="logs">
        <div class="col-md-4">
            <stopwatch v-on:start="store('start')" v-on:stop="store('stop')"></stopwatch>
        </div>
        
        @include('logs.partials.list')
    </div>
@endsection