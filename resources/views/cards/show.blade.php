@extends('layout')

@section('content')
    <h1>All notes of the card with ID : [{{$card->id }}] :</h1>

    <div class="row">
        <div class="col-md-6 col-md-offest-3">
            <div>
                <h2>{{ $card->title }}</h2>
            </div>

            <div>
                <ul class="list-group">
                    @foreach ($card->notes as $note)
                        <li class="list-group-item">
                            {{ $note->body }}
                            <a href="" style="pull-right">{{$note->user->username}}</a>
                        </li>
                    @endforeach
                </ul>
                <hr>
                <h3>Add a New Note</h3>

                <form method="post" action="/cards/{{ $card->id }}/notes">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="user_id" value="1">

                    <div class="form-group">
                        <textarea name="body" class="form-control">{{ old('body') }}</textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Note</button>
                    </div>
                </form>

                @if (count($errors))
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>

@endsection