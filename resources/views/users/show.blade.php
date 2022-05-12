@extends('templateBack')
@section('Contenido')

<div class="main-content app-content">

    <!-- container -->
    <div class="main-container container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="left-content">
                <span class="main-content-title mg-b-0 mg-b-lg-1">Perfil</span>
            </div>
        </div>
        <!-- /breadcrumb -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-body d-md-flex">
                        <div class="">
                            <span class="profile-image pos-relative">
                                <img class="br-5" alt="" src="{{asset('assets/back/img/faces/profile.jpg')}}">
                                <span class="bg-success text-white wd-1 ht-1 rounded-pill profile-online"></span>
                            </span>
                        </div>
                        <div class="my-md-auto mt-4 prof-details">
                            <h4 class="font-weight-semibold ms-md-4 ms-0 mb-1 pb-0">{{$user->name .' '. $user->lastname}}</h4>
                            <p class="tx-13 text-muted ms-md-4 ms-0 mb-2 pb-2 ">
                                <span class="me-3"><i class="far fa-address-card me-2"></i>{{$user->id_type->name}}/{{$user->document}}</span>
                            </p>
                            <p class="text-muted ms-md-4 ms-0 mb-2"><span><i
                                        class="fa fa-phone me-2"></i></span><span
                                    class="font-weight-semibold me-2">Telefono:</span><span>{{$user->phone}}</span>
                            </p>
                            <p class="text-muted ms-md-4 ms-0 mb-2"><span><i
                                        class="fa fa-envelope me-2"></i></span><span
                                    class="font-weight-semibold me-2">Email:</span><span>{{$user->email}}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="row">
                    <div class="col-9"></div>
                    <div class="col-1">
                        <div class="tx-18 mb-4">
                            <a name="UserEdit" id="UserEdit" class="btn btn-primary btn-lg px-4" href="{{ url ('/users/'.$user->id.'/edit') }}" role="button">Editar</a>
                        </div>
                    </div>
                    <div class="col-1 col-auto">
                        <div class="input-group mb-2">
                            <form action="{{ url ('/users/'.$user->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-secondary btn-lg px-4">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container closed -->
</div>

@endsection()