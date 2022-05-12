@extends('templateBack')
@section('Contenido')

<div class="main-content app-content">

    <!-- container -->
    <div class="main-container container-fluid">

        <!-- row -->
        <div class="row row-sm">
            <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6"></div>
            <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
                <div class="card  box-shadow-0">
                    <h1>Editar Producto</h1>
                    <br>
                    <div class="card-body pt-0">
                        <form class="form-horizontal" action="{{url('/productos/'. $producto->id)}}" method="post">
                            @method('PATCH')
                            @csrf

                            <div class="form-group">
                                <span>Nombre del producto</span>    
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto-> nombre }}" required>
                            </div>
                            <div class="form-group">
                                <span>Descripcion</span>
                                <input class="form-control" type="text" placeholder="Descripcion" id="descripcion" name="descripcion" required>
                            </div>
                            <div class="form-group">
                                <span>Precio</span>
                                <input type="number" class="form-control" id="precio" name="precio" value="{{ $producto-> precio }}" required>
                            </div>
                            <div class="form group">
                                <span>Categoria</span>
                                <select class="form-control" name="categoria_id" id="categoria_id" required>
                                    @foreach($categorias as $categoria)
                                        <option value="{{$categoria -> id}}">{{$categoria -> descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <span>Descuento</span>
                                <input type="number" class="form-control" id="descuento" name="descuento" value="{{ '$ '.$producto-> descuento }}"  required>
                            </div>
                            <div class="mb-3">
                                <span>Imagen</span>
                                <input class="form-control" type="file" id="imagen" name="imagen">
                            </div>
                            <br>
                            <div class="form-group mb-0 mt-3 justify-content-end">
                                <div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <a class="btn btn-secondary ms-4" href="{{url ('productos/'. $producto -> id)}}" role="button">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection();