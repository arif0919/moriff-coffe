@extends('layout.main')

@section('title', 'Barista')

@section('content')
<h2>Daftar Barista</h2>

@foreach($barista as $b)
<div class="card">
    <h3>{{ $b->nama }}</h3>

    @if($b->gambar)
        <img src="{{ asset('storage/'.$b->gambar) }}" width="150" style="border-radius: 10px;">
    @endif

    <p>Pengalaman: {{ $b->pengalaman }}</p>
</div>
@endforeach

@endsection
