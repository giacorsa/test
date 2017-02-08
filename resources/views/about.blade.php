@extends('layout')

@section('header')
    <h1>Header about section </h1>
@endsection

@section('content')
    <h1>The about page goes here</h1>
    @foreach($people as $person)
        <li>{{ $person  }}</li>
    @endforeach
@endsection

@section('footer')
    <script>
        alert('About page only');
    </script>
    <h1>The footer about section  goes here</h1>
@endsection