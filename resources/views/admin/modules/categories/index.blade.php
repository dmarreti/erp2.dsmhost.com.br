@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Gerenciar Categorias</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Listagem de Categorias</li>
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
                                <a href="{{ route('admin.categories.create') }}" class="btn btn-success float-sm-right"><i class="fas fa-plus-square"></i> Nova Categoria</a>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td><span class="badge badge-success">Ativo</span></td>
                                            <td>
                                                <form action="{{ route('admin.categories.destroy', ['category' => $category->id]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}"><i style="color:darkorange;" class="fas fa-edit"></i></a>
                                                    <a href="{{ route('admin.categories.show', ['category' => $category->id]) }}"><i style="color:darkblue;" class="fas fa-eye"></i></a>
                                                    <button type="submit" style="border: none; background: transparent;" ><i style="color:red;" class="fas fa-trash"></i></button>
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
