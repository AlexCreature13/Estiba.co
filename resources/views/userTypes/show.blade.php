@extends('templateBack')
@section('Contenido')

<div class="main-content app-content">

    <!-- container -->
    <div class="main-container container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="left-content col-8">
                <h1 class="display-5 fw-bold lh-1 mb-3">{{$userType -> name}}</h1>
                <h3 class="lead">{{$userType -> descripcion}}</h3>
            </div>
            <div class="col-2 col-auto">
                <a class="dropdown-item" href="{{url ('/user_types/'. $userType -> id .'/edit')}}"><button type="button" class="btn btn-primary btn-lg px-6 me-md-4"><i class="fe fe-edit me-2"></i>Editar</button></a>
                <div>
                    <form action="{{url ('/user_types/'. $userType->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-secondary btn-lg px-4 me-md-2"><i class="fe fe-trash me-2"></i>Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection();