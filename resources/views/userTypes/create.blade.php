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
                    <h1>Nuevo Tipo de Usuario</h1>
                    <br>
                    <div class="card-body pt-0">
                        <form class="form-horizontal" action="{{url('/user_types/')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <span>Nombre</span>    
                                <input type="text" class="form-control" placeholder="Nombre del tipo de usuario" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <span>Descripcion</span>    
                                <input type="text" class="form-control" placeholder="Descripcion del tipo de usuario" id="descripcion" name="descripcion">
                            </div>
                            <br>
                            <div class="form-group mb-0 mt-3 justify-content-end">
                                <div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <a class="btn btn-secondary ms-4" href="{{url ('user_types/')}}" role="button">Cancelar</a>
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