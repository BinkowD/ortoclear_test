@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Registrate') }}</div>
        
                        <div class="card-body">
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
                                        <label for="slug" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="slug" type="text" class="form-control @error('name') is-invalid @enderror" name="slug" value="{{ old('slug') }}" required autocomplete="slug" autofocus>
            
                                            @error('slug')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
        
                                <div class="form-group row">
                                        <label for="cargo" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>
            
                                        <div class="col-md-6">
                                            <input type="Radio" Name="cargo" value="Doctor(a)" required> Doctor(a) &nbsp;
                                            <input type="Radio" Name="cargo" value="Administrador" required> Root &nbsp;
                                            <!--<input type="Radio" Name="cargo" value="Paciente" required> Paciente-->
                                            @error('cargo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>
            
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
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="textarea" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection