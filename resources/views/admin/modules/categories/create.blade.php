@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><i class="far fa-box-open"></i> Cadastro de Categoria</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Nova Categoria</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-success card-outline">
                            <div class="card-body">
                                <form role="form" name="categories" action="{{ route('admin.categories.store') }}" method="post">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Nome</label>
                                                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="float-sm-right">
                                            <button type="submit" class="btn btn-primary" id="btnCreatePlan"><i class="fas fa-save"></i> Salvar</button>
                                            <a href="javascript:history.back()" class="btn btn-danger"><i class="far fa-window-close"></i> Cancelar</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

