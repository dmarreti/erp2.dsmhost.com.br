@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Administradores</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Administradores</li>
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
                                <a href="{{ route('admin.manager.create') }}" class="btn btn-success float-sm-right"><i class="fas fa-plus-square"></i> Novo Admin</a>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Usuário</th>
                                        <th>Função Admin</th>
                                        <th>Departamentos</th>
                                        <th>Status</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($managers as $manager)
                                        <tr>
                                            <td>{{ $manager->id }}</td>
                                            <td>{{ $manager->name }} {{ $manager->lastname }}</td>
                                            <td>{{ $manager->email }}</td>
                                            <td>{{ $manager->user }}</td>
                                            <td>Administrador</td>
                                            <td>Administrativo</td>
                                            <td><span class="badge badge-success">Ativo</span></td>
                                            <td>
                                                <form action="{{ route('admin.manager.destroy', ['manager' => $manager->id]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('admin.manager.edit', ['manager' => $manager->id]) }}"><i style="color:darkorange;" class="fas fa-edit"></i></a>
                                                    <a href="{{ route('admin.manager.show', ['manager' => $manager->id]) }}"><i style="color:darkblue;" class="fas fa-eye"></i></a>
                                                    <button type="submit" style="border: none;" ><i style="color:red;" class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
