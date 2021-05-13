@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Usuario') }}</div>

                <div class="card-body"
                        
                        <form method="POST" action="{{ url('/Onpe/users/'.$user->id.'/edit')}}" >
                    <form  action="{{url('/Onpe/users/'.$user->id)}}" method="post">
                    
                        @csrf  {{ method_field('PATCH') }}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  
                                name="name" value="{{ isset($user->name)?$user->name:old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>

                            <div class="col-md-6">
                                <input id="role_id" type="text" class="form-control @error('role_id') is-invalid @enderror"
                                 name="role_id" value="{{ isset($user->role_id)?$user->role_id:old('role_id') }}" required autocomplete="role_id" autofocus>

                                @error('role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ isset($user->email)?$user->email:old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                       

                        <div class="form-group row">
                            <label for="apPat" class="col-md-4 col-form-label text-md-right">{{ __('Apellido paterno') }}</label>

                            <div class="col-md-6">
                                <input id="apPat" type="text" class="form-control @error('apPat') is-invalid @enderror" 
                                name="apPat" value="{{ isset($user->apPat)?$user->apPat:old('apPat') }}" required autocomplete="apPat" autofocus>

                                @error('apPat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apMat" class="col-md-4 col-form-label text-md-right">{{ __('Apellido materno') }}</label>

                            <div class="col-md-6">
                                <input id="apMat" type="text" class="form-control @error('apMat') is-invalid @enderror" 
                                name="apMat" value="{{ isset($user->apMat)?$user->apMat:old('apMat') }}" required autocomplete="apMat" autofocus>

                                @error('apMat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dni" class="col-md-4 col-form-label text-md-right">{{ __('Dni') }}</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror"
                                 name="dni" value="{{ isset($user->dni)?$user->dni:old('dni') }}" required autocomplete="dni" autofocus>

                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>

                            <div class="col-md-6">
                                
                                <select id="sexo" name="sexo" class="form-control" value="{{ isset($user->sexo)?$user->sexo:old('sexo') }}" autofocus aria-label="Default select example">
                                    <option selected>Indique sexo</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                    
                                  </select>
                                @error('sexo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="estCivil" class="col-md-4 col-form-label text-md-right">{{ __('Estado Civil') }}</label>

                            <div class="col-md-6">
                                
                                <select id="estCivil" name="estCivil" class="form-control" value="{{ isset($user->estCivil)?$user->estCivil:old('estCivil') }}" autofocus aria-label="Default select example">
                                    <option selected>Indique Estado Civil</option>
                                    <option value="Soltero">Soltero</option>
                                    <option value="Casado">Casado</option>
                                    <option value="Viudo">Viudo</option>
                                    <option value="Divorciado">Divorciado</option>
                                    
                                  </select>
                                @error('sexo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fechaNac" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="fechaNac" type="date" class="form-control @error('fechaNac') is-invalid @enderror"
                                 name="fechaNac" value="{{ isset($user->fechaNac)?$user->fechaNac:old('fechaNac') }}" required autocomplete="fechaNac" autofocus>

                                @error('fechaNac')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="grupoVot" class="col-md-4 col-form-label text-md-right">{{ __('Grupo de votación') }}</label>

                            <div class="col-md-6">
                                <input id="grupoVot" type="text" class="form-control @error('grupoVot') is-invalid @enderror"
                                 name="grupoVot" value="{{ isset($user->grupoVot)?$user->grupoVot:old('grupoVot') }}" required autocomplete="grupoVot" autofocus>

                                @error('grupoVot')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="ciudad_id" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>

                            <div class="col-md-6">
                                
                                <select id="ciudad_id" name="ciudad_id" class="form-control" value="{{ isset($user->ciudad_id)?$user->ciudad_id:old('ciudad_id') }}" autofocus aria-label="Default select example">
                                    <option selected>Indique Ciudad</option>
                                    <option value="1">Puno</option>
                                    <option value="2">Juliaca</option>
                                    <option value="3">YUnguyo</option>
                                    
                                    
                                  </select>
                                @error('sexo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar') }}
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
