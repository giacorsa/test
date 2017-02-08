@extends('layout')

@section('content')
    <h1>All cards :</h1>


        <div>
            {{ $card->title }}
        </div>
    <div>
    <ul>
        @foreach ($card->notes as $note)
            <li>{{ $note->body }}</li>
        @endforeach
    </ul>
    </div>

@endsection