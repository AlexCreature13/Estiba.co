@extends('templateBack')
@section('Contenido')

<div class="main-content app-content">

    <!-- container -->
    <div class="main-container container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="left-content col-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">{{$categoria -> descripcion}}</h1>
            </div>
            <div class="col-6 col-auto">
                <form action="{{url('categorias/'. $categoria -> id )}}" method="get">
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
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a class="dropdown-item" href="{{url ('/categorias/'. $categoria -> id .'/edit')}}"><button type="button" class="btn btn-primary btn-lg px-2 me-md-4"><i class="fe fe-edit me-2"></i>Editar</button></a>
            <div>
                <form action="{{url ('/categorias/'. $categoria->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-secondary btn-lg px-2 me-md-2"><i class="fe fe-trash me-2"></i>Eliminar</button>
                </form>
            </div>
        </div>
        <hr>
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
                                <a href="{{url ('/productos/'. $producto -> id)}}"><img src="{{asset('assets/back/img/files/folder.png')}}" alt="img" class="br-7"></a>
                            </div>
                            <h6 class="mb-1 font-weight-semibold">{{$producto -> nombre}}</h6>
                            <span class="text-muted">{{'$'. $producto -> precio}}</span>
                        </div>
                        <ul class="pagination float-end mb-4">
                            {{ $productos->links() }}    
                        </ul>
                    </div>
                </div>
                @endforeach()
            </div>
        </div>
    </div>
</div>

@endsection();