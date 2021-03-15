@extends("jugador.layout")

@section("titulo")
    <h2>Listado de jugadores</h2>
@endsection

@section("opciones")
    <div class="col-12">
        <a href="{{route("jugador.create")}}" class="btn btn-success mb-2">Agregar</a>
        @endsection
        @isset($msj)
        @section("mensaje")
            <h2 class="alert-info">{{$msj}}</h2>
        @endsection
        @endisset
        @section("contenido")
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dni</th>
                    <th>Direccion</th>
                    <th>Teléfono</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($jugadore as $jugador)
                    <tr>
                        <td>{{$jugador->nombre}}</td>
                        <td>{{$jugador->dni}}</td>
                        <td>{{$jugador->direccion}}</td>
                        <td>{{$jugador->telefono}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route("jugador.edit",[$jugador])}}">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{route('jugador.destroy', [$jugador])}}" method="post">
                                @method("delete")
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>

                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
@endsection

