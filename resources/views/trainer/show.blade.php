@extends('layouts.app')

@section('title', $trainer->name)

@section('content')
@if(session('status'))
<div class="alert alert-warning" role="alert">
  {{session('status')}}
</div>
@endif
<div class="row">

        <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Acerca de {{$trainer->name}}
                      </button>
                      <a href="/trainers/{{$trainer->slug}}/edit" style="float:right" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Editar</a>
                    </h2>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        
                    <div class="card-body">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                              <div class="col-md-4">
                                <img src="/images/{{$trainer->avatar}}" class="card-img" alt="">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">{{$trainer->name}}</h5>
                                  <p class="card-text">{{$trainer->password}}</p>
                                  <p class="card-text"><small class="text-muted">{{$trainer->cargo}}</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Historias clinicas
                      </button>
                      <a href="../historys" style="float:right" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"> + crear historia nueva</a>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      @include('trainer.avance')
                    </div>
                  </div>
                </div>
                
              </div>
</div>
@endsection