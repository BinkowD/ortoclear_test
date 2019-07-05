@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    
    <div class="row">
        @foreach ($trainer as $itemtreiner)
        <div class="col-sm">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img style="heigth: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;" src="images/{{$itemtreiner->avatar}}" class="card-img-top rounded-circle mx-auto d-block" alt="">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{$itemtreiner->name}} ({{$itemtreiner->cargo}})</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted"><a href="/trainers/{{$itemtreiner->slug}}">Ver más...</a></small></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection