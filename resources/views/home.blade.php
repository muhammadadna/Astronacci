@extends('layout.main')

@section('content')
    <h1 class="mb-5">{{ $title }}</h1>
    @if ($role == 'admin')
        <h5>Untuk masuk ke menu admin Klik button kanan atas di navbar, akan ada pilihan My Dashboard dan Logout</h5>
        <h5>Untuk masuk kehalaman admin pilih <font color="blue">My Dashboard</font></h5>
        <h5>Untuk keluar pilih <font color="red">Logout</font></h5>

    @else
        <h5>Untuk Keluar Pilih <font color="red">Logout</font> di button kanan atas di navbar</h5>

    @endif
@endsection
