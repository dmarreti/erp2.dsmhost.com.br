@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Listagem de Clientes</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Listagem de Clientes</li>
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
                                <a href="{{ route('admin.client.create') }}" class="btn btn-success float-sm-right"><i class="fas fa-plus-square"></i> Novo Cliente</a>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Endereço</th>
                                        <th>E-mail</th>
                                        <th>Status</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($clients as $client)
                                        <tr>
                                            <td>{{ $client->id }}</td>
                                            <td style="font-size: 15px;">{{ $client->name }} {{ $client->lastname }}</td>
                                            <td style="font-size: 15px;">{{ $client->address }}, {{ $client->number }} - {{ $client->neighborhood }} - {{ $client->city }}/{{ $client->state }}</td>
                                            <td style="font-size: 15px;">{{ $client->email }}</td>
                                            <td><span class="badge badge-success">Ativo</span></td>
                                            <td>
                                                <form action="{{ route('admin.client.destroy', ['client' => $client->id]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('admin.client.edit', ['client' => $client->id]) }}"><i style="color:darkorange;" class="fas fa-edit"></i></a>
                                                    <a href="{{ route('admin.client.show', ['client' => $client->id]) }}"><i style="color:darkblue;" class="fas fa-eye"></i></a>
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
