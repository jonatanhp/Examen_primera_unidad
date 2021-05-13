@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar usuario</title>
    
</head>
<body>
    
@section("content")



<div class="form-inline">
    <label for="name" class="col-md-1 col-form-label-sm text-md-right">{{ __('Nombre') }}</label>

    <div class="col-md-1">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<br>

<div class="form-inline">
    <label for="name" class="col-md-1 col-form-label-sm text-md-right">{{ __('Apellido paterno') }}</label>

    <div class="col-md-1">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<br>

<div class="form-inline"  >
    <label for="name" class="col-md-1 col-form-label-sm text-md-right">{{ __('Apellido materno') }}</label>

    <div class="col-md-1">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<br>

<div class="form-inline"  >
    <label for="name" class="col-md-1 col-form-label-sm text-md-right">{{ __('DNI') }}</label>

    <div class="col-md-1">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<br>

<div class="form-inline">
    <label for="name" class="col-md-1 col-form-label-sm text-md-right">{{ __('Sexo') }}</label>
    <div class="col-md-1">
        <select class="form-control" aria-label="Default select example" aria-placeholder="Indique sexo">
            <option selected aria-placeholder="eee"></option>
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
            
        </select>
    </div>
    
        
</div>
<br>
<div class="form-inline">
    <label for="name" class="col-md-1 col-form-label-sm text-md-right">{{ __('Estado Civil') }}</label>
    <div class="col-md-1">
        <select class="form-control" aria-label="Default select example" aria-placeholder="Indique sexo">
            <option selected aria-placeholder="eee"></option>
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
            
        </select>
    </div>
    
        
</div>

<div class="form-inline" style="display: inline-block;" >
    <label style="display: inline-block;" for="name" class="col-md-1 col-form-label-sm text-md-right">{{ __('Fecha de nacimiento') }}</label>

    
        <input style="display: block;" id="name" type="date" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    
</div>
<br>

<div class="form-inline"  >
    <label for="name" class="col-md-1 col-form-label-sm text-md-right">{{ __('Grupo de votación') }}</label>

    <div class="col-md-1">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<br>

<div class="form-text"  >
    <label for="name" class="col-md-1 col-form-label-sm text-md-right">{{ __('Ciudad') }}</label>

    <div class="col-md-1">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<br>

<label style="display: block;" for="name" class="col-md-1 col-form-label-sm text-md-right">{{ __('Ciudadbb  ') }}</label>

    
        <input style="display: block;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    

@endsection

@section("footer")
@endsection


</body>
</html>