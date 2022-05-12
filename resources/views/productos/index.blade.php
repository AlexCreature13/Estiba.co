@extends('templateBack')
@section('Contenido')

<div class="main-content app-content">

    <!-- container -->
    <div class="main-container container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="left-content">
                <span class="main-content-title mg-b-0 mg-b-lg-1">Productos()</span>
            </div>
        </div>
        <!-- /breadcrumb -->

        <!-- row -->
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="row">
                    <div class="col-6">
                        <div class="tx-18 mb-4">
                            <a name="añadirProducto" id="añadirProducto" class="btn btn-primary" href="{{ url ('/productos/create') }}" role="button">Añadir producto</a>
                        </div>
                    </div>
                    <div class="col-6 col-auto">
                        <form action="{{url('productos/')}}" method="get">
                            @csrf
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="search" id="search" placeholder="nombre del producto">
                                <span class="input-group-append">
                                    <button class="btn ripple btn-primary" type="submit">Buscar</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                    <div class="row">
                        @foreach($productos as $producto)
                            <div class="col-xl-4 col-md-8 col-sm-12">
                                <div class="card p-0 ">
                                    <div class="d-flex align-items-center px-3 pt-3">
                                        <div class="float-end ms-auto">
                                            <a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{url ('/productos/'. $producto -> id .'/edit')}}"><i class="fe fe-edit me-2"></i> Editar</a>
                                                <div>
                                                    <form action="{{ url ('/productos/'.$producto->id) }}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="dropdown-item option-dots" btn-group-lg"><i class="fe fe-trash me-2"></i>Eliminar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 text-center">
                                        <div class="file-manger-icon">
                                            <a href="{{url ('/productos/'. $producto -> id)}}"><img src="{{url ('/productos/'. $producto -> imagen)}}" alt="img" class="br-7"></a>
                                        </div>
                                        <h6 class="mb-1 font-weight-semibold">{{$producto -> nombre}}</h6>
                                        <span class="text-muted">{{'$'. $producto -> precio}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach();
                </div>
                
                <ul class="pagination float-end mb-4">
                    {{ $productos->links() }}    
                </ul>
            </div>
        </div>
        <!-- End Row -->
        
    </div>
    <!-- Container closed -->
</div>
<!-- main-content closed -->

@endsection()