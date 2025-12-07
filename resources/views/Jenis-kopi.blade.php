@extends('layout.main')

@section('title', 'Jenis Kopi')

@section('content')
<h2>Jenis Kopi</h2>

@foreach($jenis as $j)
<div class="card">
    <h3>{{ $j->nama }}</h3>

    @if($j->gambar)
        <img src="{{ asset('storage/'.$j->gambar) }}" width="150">
    @endif

    <p>{{ $j->deskripsi }}</p>
</div>
@endforeach

@endsection
