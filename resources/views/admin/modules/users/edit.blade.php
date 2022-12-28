@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><i class="fas fa-users"></i> Cadastro de Usuários</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Novo Usuário</li>
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
                                <form role="form" name="client" action="{{ route('admin.user.update', ['user' => $user->id]) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" value="{{ $user->id }}" />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Nome</label>
                                                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">E-mail</label>
                                                <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="password">Senha</label>
                                                <input type="password" name="password" class="form-control" id="password">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="status">Acesso</label>
                                                <select class="form-control select2" id="status" name="status" style="width: 100%;">
                                                    <option value="">Selecione:</option>
                                                    <option value="admin" {{ (old('status') == 'active' ? 'selected' : '') }}>Admin</option>
                                                    <option value="client" {{ (old('status') == 'inactive' ? 'selected' : '') }}>Cliente</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control select2" id="status" name="status" style="width: 100%;">
                                                    <option value="">Selecione:</option>
                                                    <option value="active" {{ (old('status') == 'active' ? 'selected' : '') }}>Ativo</option>
                                                    <option value="inactive" {{ (old('status') == 'inactive' ? 'selected' : '') }}>Inativo</option>
                                                    <option value="suspended" {{ (old('status') == 'suspended' ? 'selected' : '') }}>Suspenso</option>
                                                    <option value="cancel" {{ (old('status') == 'cancel' ? 'selected' : '') }}>Cancelado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="float-sm-right">
                                            <button type="submit" class="btn btn-primary" id="btnCreatePlan"><i class="fas fa-save"></i> Salvar</button>
                                            <a href="javascript:history.back()"  class="btn btn-warning text-white"><i class="fas fa-undo-alt text-white"></i> Voltar</a>
                                            <button type="reset" class="btn btn-danger"><i class="far fa-window-close"></i> Cancelar</button>
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
