@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Selamat datang {{ Auth::user()->name }}</h1>
</div>
@endsection
