@extends("layout")
@section("main")
    <div class="container">
        <h3>Usuarios Activos</h3>
        <div id="user-info-table">
            <div class="card" id="table">
                <div class="card-header bg-primary text-white text-center">Consultar Usuario</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col" class="text-center" >Email</th>
                            <th scope="col" class="text-center" >Nombre</th>
                            <th scope="col" class="text-center ">Apellido</th>
                            <th scope="col" class="text-center" >Opciones</th>
                            <th scope="col" class="text-center" >Email</th>
                        </tr>
                        </thead>
                        <tbody id="user-info-table-body">
                        @forelse($activos as $user)
                            <tr id="{{$user->id}}">
                                <th class="text-center" class="user-id">{{$user->id}}</th>
                                <th class="form-user editable name text-center" tabindex="0" data-attr="name" id="name{{$user->id}}">{{$user->nombre}}</th>
                                <td class="form-user editable text-center" data-attr="lastname" id="lastname{{$user->id}}">{{$user->apellido}}</td>
                                <td class="form-user editable d-none d-md-table-cell text-center" data-attr="email" id="email{{$user->id}}">{{$user->email}}</td>
                                <td class="form-user text-center">
                                    <a class="opc" href='{{route("user-edit", $user->id)}}'>
                                        <span class='fas fa-pencil-alt tooltipLink' style="color: dodgerblue;" data-toggle='tooltip'
                                              data-placement='left'
                                              data-original-title='Editar'></span>
                                    </a>

                                    <a class="opc" href='{{route("user-del", $user->id)}}'>
                                        <span class='fas fa-user-times tooltipLink' style="color: red;" data-toggle='tooltip'
                                              data-placement='right'
                                              data-original-title='Eliminar Usuario'></span>
                                    </a>
                            </tr>
                        @empty
                            <tr><td colspan='7' class="center-block text-center">No hay registros encontrados</td></tr>"
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <h3>Usuarios Inactivos</h3>
        <div id="user-info-table">
            <div class="card" id="table">
                <div class="card-header bg-primary text-white text-center">Consultar Usuario</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col" class="text-center" >Email</th>
                            <th scope="col" class="text-center" >Nombre</th>
                            <th scope="col" class="text-center ">Apellido</th>
                            <th scope="col" class="text-center" >Email</th>
                            <th scope="col" class="text-center" >Opciones</th>
                        </tr>
                        </thead>
                        <tbody id="user-info-table-body">
                        @forelse($inactivos as $user)
                            <tr id="{{$user->id}}">
                                <th class="text-center" class="user-id">{{$user->id}}</th>
                                <th class="form-user editable name text-center" tabindex="0" data-attr="name" id="name{{$user->id}}">{{$user->nombre}}</th>
                                <td class="form-user editable text-center" data-attr="lastname" id="lastname{{$user->id}}">{{$user->apellido}}</td>
                                <td class="form-user editable d-none d-md-table-cell text-center" data-attr="email" id="email{{$user->id}}">{{$user->email}}</td>
                                <td class="form-user text-center">
                                    <a class="opc" href='{{route("user-edit", $user->id)}}'>
                                        <span class='fas fa-pencil-alt tooltipLink' style="color: dodgerblue;" data-toggle='tooltip'
                                              data-placement='left'
                                              data-original-title='Editar'></span>
                                    </a>

                                    <a class="opc" href='{{route("user-del", $user->id)}}'>
                                        <span class='fas fa-user-times tooltipLink' style="color: red;" data-toggle='tooltip'
                                              data-placement='right'
                                              data-original-title='Eliminar Usuario'></span>
                                    </a>
                            </tr>
                        @empty
                            <tr><td colspan='7' class="center-block text-center">No hay registros encontrados</td></tr>"
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <h3>Usuarios en espera</h3>
        <div id="user-info-table">
            <div class="card" id="table">
                <div class="card-header bg-primary text-white text-center">Consultar Usuario</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col" class="text-center" >Email</th>
                            <th scope="col" class="text-center" >Nombre</th>
                            <th scope="col" class="text-center ">Apellido</th>
                            <th scope="col" class="text-center" >Email</th>
                            <th scope="col" class="text-center" >Opciones</th>
                        </tr>
                        </thead>
                        <tbody id="user-info-table-body">
                        @forelse($espera as $user)
                            <tr id="{{$user->id}}">
                                <th class="text-center" class="user-id">{{$user->id}}</th>
                                <th class="form-user editable name text-center" tabindex="0" data-attr="name" id="name{{$user->id}}">{{$user->nombre}}</th>
                                <td class="form-user editable text-center" data-attr="lastname" id="lastname{{$user->id}}">{{$user->apellido}}</td>
                                <td class="form-user editable d-none d-md-table-cell text-center" data-attr="email" id="email{{$user->id}}">{{$user->email}}</td>
                                <td class="form-user text-center">
                                    <a class="opc" href='{{route("user-edit", $user->id)}}'>
                                        <span class='fas fa-pencil-alt tooltipLink' style="color: dodgerblue;" data-toggle='tooltip'
                                              data-placement='left'
                                              data-original-title='Editar'></span>
                                    </a>

                                    <a class="opc" href='{{route("user-del", $user->id)}}'>
                                        <span class='fas fa-user-times tooltipLink' style="color: red;" data-toggle='tooltip'
                                              data-placement='right'
                                              data-original-title='Eliminar Usuario'></span>
                                    </a>
                            </tr>
                        @empty
                            <tr><td colspan='7' class="center-block text-center">No hay registros encontrados</td></tr>"
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>

    <script>
        $('[data-toggle="tooltip"]').tooltip();
    </script>

    <a href="{{route("/")}}" class="btn btn-secondary">Volver</a>
@endsection
