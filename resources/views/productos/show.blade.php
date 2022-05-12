@extends('templateBack')
@section('Contenido')

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{asset('assets/img/estiba.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="400" height="300" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">{{$producto -> nombre}}</h1>
        <p class="lead">{{$producto -> descripcion}}</p>
        <h3><strong class="d-inline-block mb-4 text-success">{{'$'.$producto -> precio}}</strong></h3>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a class="dropdown-item" href="{{url ('/productos/'. $producto -> id .'/edit')}}"><button type="button" class="btn btn-outline-primary btn-lg px-4 me-md-2"><i class="fe fe-edit me-2"></i>Editar</button></a>
            <div>
                <form action="{{ url ('/productos/'.$producto->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-outline-secondary btn-lg px-4"><i class="fe fe-trash me-2"></i>Eliminar</button>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>

@endsection();