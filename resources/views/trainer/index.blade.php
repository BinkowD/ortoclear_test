@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <p>Listado de usuarios</p>
    <div class="row">
        @foreach ($trainer as $itemtreiner)
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                <img src="images/{{$itemtreiner->avatar}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$itemtreiner->name}}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection