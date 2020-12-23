<div class="card text-center bg-transparent mw-70">
    <div class="card-header bg-primary text-center text-white font-weight-bolder">
        GEMA SAS
    </div>
    <div class="card-body ">

        <h4 class="card-title">Formulario de carga de información</h4>
        <x-validation-errors />
        @if (session('danger'))
            <div class="alert alert-danger" role="alert" style="margin-bottom: 20px; margin-top: 20px;">
                {{session('danger')}}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" role="alert" style="margin-bottom: 20px; margin-top: 20px;">
                {{session('success')}}
            </div>
        @endif
        <form action="{{route("upload-file")}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3 row d-flex justify-content-center">
                <div class="input-group-append">
                    <i class="col-2 fas fa-file-alt fa-3x"></i>
                </div>
                <div class="custom-file col-5">
                    <input type="file" class="custom-file-input" id="inputGroup" name="file">
                    <label class="custom-file-label" for="inputGroup" aria-describedby="inputGroupFileAddon02">Seleccionar...</label>
                </div>



                <script>
                    // https://stackoverflow.com/questions/48613992/bootstrap-4-file-input-doesnt-show-the-file-name/51928387
                    $('.custom-file input').change(function (e) {
                        var files = [];
                        for (var i = 0; i < $(this)[0].files.length; i++) {
                            files.push($(this)[0].files[i].name);
                        }
                        $(this).next('.custom-file-label').html(files.join(', '));
                    });
                </script>

            </div>
            <button type="submit" class="btn btn-primary">Enviar Formulario</button>
        </form>
    </div>
</div>
