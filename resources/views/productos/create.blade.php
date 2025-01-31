@extends('template')
@section('title', 'Registrar Producto')

@push('css')
@endpush

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h1 class="fw-bold mb-0.2">Productos</h1>
            <ul class="breadcrumbs mb-0.3">
                <li class="nav-home">
                    <a href="{{route('panel')}}">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('productos.index')}}">Productos</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="breadcrumb-item active">
                    <a href="">Crear Porductos</a>
                </li>
            </ul>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-title">Datos de Presentación</div>
            </div>
            <div class="card-body">
                <!-- Aquí se llama al store para poder registrar o enviar la información del formulario  -->
                <form action="#" method="post">
                    @csrf

                    <div class="row g-3">
                        <label for="codigo" class="form-label">Código</label>
                        <input type="text" name="codigo" id="codigo" class="form-control" value="{{old('codigo')}}">
                        @error('codigo')
                        <small class="text-danger">{{'*'.message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}"
                                placeholder="Ingrese presentación" />
                            <!-- error muestra en pantalla en caso de que no haya ingresado el nombre de la presentaciones ya -->
                            <!-- que es requerido -->
                            @error('nombre')
                            <small class="text-danger">{{'*'.$message}}</small>
                            @enderror()
                        </div>
                        <div class="form-group">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion"
                                rows="3">{{old('descripcion')}}</textarea>
                            <!-- Muestra en pantalla un error si la descripción es superior a 255caracteres -->
                            @error('descripcion')
                            <small class="text-danger">{{'*'.$message}}</small>
                            @enderror()
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <div class="card-action">
                            <button type="reset" class="btn btn-danger">Cancelar</button>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection

@push('js');
@endpush