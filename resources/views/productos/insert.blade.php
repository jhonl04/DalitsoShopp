@extends('layouts.main')

@section('titulo', 'Nuevo producto')

@section('content')
<form action="{{ route('productos.store') }}" method="post" class="needs-validation" novalidate class="text-bg-dark" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3 ">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
            <label for="nombre">Nombre</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion" required>
            <label for="descripcion">Descripcion</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="precio" name="precio" placeholder="precio" required>
            <label for="precio">Precio</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="unidades" name="unidades" placeholder="unidades" required>
            <label for="unidades">Unidades</label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" class="form-control" id="imagen" name="imagen" placeholder="imagen" required>
            <label for="imagen">Imagen</label>
        </div>
        <a href="{{ route('productos.index') }}" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-secondary">Guardar</button>
    </form>
@endsection

@section('scripts')
    <script>
        (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>
@endsection