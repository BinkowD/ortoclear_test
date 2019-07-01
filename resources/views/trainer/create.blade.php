@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <!--<div class="container">
        <form class="form-group" action="/trainers" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group row">
                <label for="cargo" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                <div class="col-md-6">
                    <input type="Radio" Name="cargo" value="odontologo" required> Doctor(a) &nbsp;
                    <input type="Radio" Name="cargo" value="root" required> Root &nbsp;
                    <input type="Radio" Name="cargo" value="paciente" required> Paciente
                </div>
            </div>
            <div class="form-group">
                    <label for="">E-Mail</label>
                    <input type="mail" name="mail" class="form-control">
            </div>
            <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="text" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" name="avatar" >
            </div>
            <button type="submit" class="btn btn-primary"> Guardar </button>
        </form>
        
    </div>-->


    
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Registrate') }}</div>
        
                        <div class="card-body">
                            {!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'file' => true ]) !!}
                            <!-- Campos del formulario -->
                            {!! Form::label('nombre', 'Nombre:', array('class' => 'negrita')) !!}
                            {!! Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Escribe tu nombre', 'required' => 'required']) !!}
                            {!! Form::close() !!}
                            <br>
                            <form method="POST" action="/trainers" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                        <label for="cargo" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>
            
                                        <div class="col-md-6">
                                            <input type="Radio" Name="cargo" value="odontologo" required> Doctor(a) &nbsp;
                                            <input type="Radio" Name="cargo" value="root" required> Root &nbsp;
                                            <input type="Radio" Name="cargo" value="paciente" required> Paciente
                                            @error('cargo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>
            
                                        <div class="col-md-6">
                                            <input type="file" name="avatar" >
                                        </div>
                                        @error('avatar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
        
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Registrate') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection