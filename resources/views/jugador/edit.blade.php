@extends("jugador.layout")

@section("titulo")
    <h2>Dar de alta nuevo jugador</h2>
@endsection

@section("opciones")
    <a href="{{route('jugador.index')}}" class="btn btn-success mb-2">Volver al listado</a>
@endsection

@section("contenido")
    <form action="{{route('jugador.update',[$alumno])}}" method="POST">
        @csrf

        @method("PUT")
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" value="{{$jugador->nombre}}" name="nombre" placeholder="Inserta nombre">

            <label for="dni">DNI</label>
            <input type="text" class="form-control" placeholder="DNI" value="{{$jugador->dni}}"name ="dni">
        </div>
        <div class="form-group form-check">
            <label for="nombre">Dirección </label>
            <input type="text" class="form-control" placeholder="Dirección" value="{{$jugador->direccion}}"name="direccion">

            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" placeholder="Teléfono" value="{{$jugador->telefono}}"name="telefono">

        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
@endsection

