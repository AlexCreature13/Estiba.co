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
                    <h1>Usuario Nuevo</h1>
                    <br>
                    <div class="card-body pt-0">
                        <form class="form-horizontal" action="{{url('/users/')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <span>Nombre</span>    
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombres" required>
                            </div>
                            <div class="form-group">
                                <span>Apellidos</span>    
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Apellidos" required>
                            </div>
                            <div class="form group">
                                <span>Documento</span>
                                <select class="form-control" name="id_type_id" id="id_type_id" required>
                                    @foreach($idTypes as $idType)
                                        <option value="{{$idType -> id}}">{{$idType -> descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <span>Numero de Documento</span>
                                <input type="number" class="form-control" id="document" name="document" placeholder="example: 115436521" required>
                            </div>
                            <div class="form group">
                                <span>Tipo de Usuario</span>
                                <select class="form-control" name="user_type_id" id="user_type_id" required>
                                    @foreach($userTypes as $userType)
                                        <option value="{{$userType -> id}}">{{$userType -> name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <span>Email</span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="correo electronico" required>
                            </div>
                                <div class="form-group">
                                    <span>Contraseña</span>
                                    <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" required >
                                </div>
                                <div class="form-group">
                                    <span>Confirmar Contraseña</span>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" aria-describedby="helpId" required >
                                </div>
                            <div class="mb-3">
                                <span>Telefono</span>
                                <input class="form-control" type="numer" id="phone" name="phone" placeholder="312548****" required>
                            </div>
                            <div class="form-group">
                                <span>Imagen de perfil</span>
                                <input type="file" class="form-control-file" name="iamgen" id="imagen" placeholder="Seleccionar un archivo" aria-describedby="fileHelpId">
                            </div>
                            <br>
                            <div class="form-group mb-0 mt-3 justify-content-end">
                                <div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <a class="btn btn-secondary ms-4" href="{{url ('productos/')}}" role="button">Cancelar</a>
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