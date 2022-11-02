@extends('layouts.app')

@section("tipos")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b>Actualizar Tipo de Usuario</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form method="POST" action="{{route('tipos.update',$tipo->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">Tipo</label>
              <div class="col-10">
                <input type="text" class="form-control" id="tipo" name="tipo" required="required" placeholder="Agregar tipo de usuario" value="{{$tipo->tipo}}"> </div>
            </div>
            <button type="submit" class="btn btn-primary">Agregar<br></button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
