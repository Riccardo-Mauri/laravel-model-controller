@extends('layouts.app')

@section('title', 'Movies List')

@section('content')
    <div class="container">
        <div class="row">
            @include('partials.cards', ['movies' => $movies])
        </div>
    </div>
@endsection
