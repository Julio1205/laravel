@extends('layouts.app')

@section("estantes")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b class="text-center">Actualizar Consulta a Usuario</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="">
          <form id="c_form-h" method="POST" action="{{route('prestamos.update',$prestamo->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group row"><label class="col-2">Usuario</label>
              <div class="col-3"><select class="form-select @error('id_usuarios')is-invalid @enderror" aria-label="Default select example" id="id_usuarios" name="id_usuarios">
                  <option selected="" value="Open this select menu">Elegir nombre de usuario</option>
                  @foreach($usuarios as $usuario)
                    <option value="{{$usuario->id}}" {{$usuario->id== $prestamo->users_id ? 'selected' : ''}}>{{$usuario->name}}</option>
                  @endforeach
                </select>
                @error('id_usuarios')
                  <div class="invalid-feedback">{{$message}}</div>
                 @enderror
              </div>
            </div>
            <div class="form-group row"><label class="col-2">Libro</label>
              <div class="col-3"><select class="form-select @error('id_libros')is-invalid @enderror" aria-label="Default select example" id="id_libros" name="id_libros">
                  <option selected="" value="Open this select menu">Selecciona libro</option>
                  @foreach($libros as $libro)
                    <option value="{{$libro->id}}" {{$libro->id== $prestamo->libros_id ? 'selected' : ''}}>{{$libro->titulo}}</option>
                  @endforeach
                </select>
                @error('id_libros')
                  <div class="invalid-feedback">{{$message}}</div>
                 @enderror
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar<br></button>
          </form>
        </div>
      </div>
    </div>
@endsection
