
@extends('layouts.app')

@section('title', 'Inicio')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Historia basica del paciente') }}</div>

                <div class="card-body">
                    <form method="POST" action="/historys" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombres completos del paciente:') }}</label>

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
                            <label for="process" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del procedimiento:') }}</label>

                            <div class="col-md-6">
                                <input id="process" type="text" class="form-control @error('process') is-invalid @enderror" name="process" value="{{ old('process') }}" required autocomplete="process" autofocus>

                                @error('process')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="doc" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del doctor quien atiende:') }}</label>

                            <div class="col-md-6">
                                <input id="doc" type="text" class="form-control @error('doc') is-invalid @enderror" name="doc" value="{{ old('doc') }}" required autocomplete="doc" autofocus>

                                @error('doc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Aparatología a emplear:</label>
                                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                    <option selected>Seleccione uno...</option>
                                    <option Name="product" value="Retenedor_invisible">Retenedor invisible</option>
                                    <option Name="product" value="Placa_Hawley">Placa Hawley</option>
                                    <option Name="product" value="Placa_Hilgers">Placa Hilgers</option>
                                    <option Name="product" value="Quad_Helix">Quad Helix</option>
                                    <option Name="product" value="Bihelix">Bihelix</option>
                                    <option Name="product" value="otro">Otro</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción de la condicion del paciente:') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control" class="form-control @error('description') is-invalid @enderror" id="exampleFormControlTextarea1" rows="5"></textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Resultados de la condicion del paciente:') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control" class="form-control @error('result') is-invalid @enderror" id="exampleFormControlTextarea1" rows="5"></textarea>

                                @error('result')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="view" class="col-md-4 col-form-label text-md-right">{{ __('Evidencia:') }}</label>
    
                                <div class="col-md-6">
                                    <input type="file" name="view" >
                                </div>
                                @error('view')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Incluir historia') }}
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