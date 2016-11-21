@extends('layouts.interrors')


@section('content')
    <div id="error-message">
        <h1>{{ $code }}</h1>
        <p>{{ $message }}</p>
    </div>
@endsection