@extends('layouts.admin_layout')
@section('title', 'Panel de administración')
@section('content')




    <h1 style="font-size: 100px">BENVENUTI</h1>

    <form action="{{route('cleanCarts')}}" method="get">
        <button type="submit" class="btn">Limpiar carritos inactivos</button>
    </form>


@endsection