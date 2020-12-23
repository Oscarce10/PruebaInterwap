@extends("layout")
@section("main")
    <div class="container" id="card-file-upload">
        <x-upload-file />
        <a href="{{route("show-users")}}" class="btn btn-secondary">Mostrar Usuarios</a>
    </div>



@endsection
