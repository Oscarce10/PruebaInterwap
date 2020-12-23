@extends("layout")
@section("main")
    <div class="container">
        <div class="card text-center bg-transparent mw-70">
            <div class="card-header bg-primary text-center text-white font-weight-bolder">
                Editar Usuario
            </div>

            <div class="card-body ">
                <form action="{{route("user-update")}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre"value="{{$user->nombre}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellido" class="form-control" placeholder="apellido" value="{{$user->apellido}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Cedula" required="required" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="codigo" class="form-control" placeholder="Cedula" required="required" value="{{$user->codigo}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar Datos</button>
                    <a class="btn btn-secondary" href="{{route("show-users")}}">Volver</a>

                </form>
            </div>

        </div>
    </div>
@endsection
