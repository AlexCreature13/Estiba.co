@extends('templateBack')
@section('Contenido')

<div class="main-content app-content">

    <!-- container -->
    <div class="main-container container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="left-content">
                <span class="main-content-title mg-b-0 mg-b-lg-1">Categorias()</span>
            </div>
        </div>
        <!-- /breadcrumb -->
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="row">
                    <div class="col-6">
                        <div class="tx-18 mb-4">
                            <a name="añadirCategoria" id="añadirCategoria" class="btn btn-primary" href="{{ url ('/categorias/create') }}" role="button">Añadir Categoria</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            @foreach($categorias as $categoria)
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <a href="{{url('/categorias/'.$categoria->id)}}">
                            <div class="card-body">
                                <div class="tx-16 mb-1">
                                    <svg class="file-manager-icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect width="9" height="9" x="2" y="2" fill="#f74f75" rx="1"/><rect width="9" height="9" x="2" y="13" fill="#fa95ac" rx="1"/><rect width="9" height="9" x="13" y="2" fill="#fa95ac" rx="1"/><rect width="9" height="9" x="13" y="13" fill="#fa95ac" rx="1"/></svg>
                                    {{$categoria -> descripcion}}
                                    <div class="float-end tx-13 text-muted mt-1">cantidad</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- End Row -->
    </div>
    <!-- Container closed -->
</div>
<!-- main-content closed -->

@endsection()