@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><i class="fas fa-user"></i> Visualizar Cliente</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Editar Cliente</li>
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
                            <form role="form" name="client" action="{{ route('admin.client.update', ['client' => $client->id]) }}" method="post">
                                @csrf
                                @method('PUT')

                                <input type="hidden" name="id" value="{{ $client->id }}" />
                                <input type="hidden" name="admin" value="0" />
                                <input type="hidden" name="client" value="1" />
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nome</label>
                                            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') ?? $client->name }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">Sobrenome</label>
                                            <input type="text" name="lastname" class="form-control" id="lastname" value="{{ old('lastname') ?? $client->lastname }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company">Empresa</label>
                                            <input type="text" name="company" class="form-control" id="company" value="{{ old('company') ?? $client->company }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="document">CPF/CNPJ</label>
                                            <input type="text" name="document" class="form-control" id="document" value="{{ old('document') ?? $client->document }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="document_secondary">RG/IE</label>
                                            <input type="text" name="document_secondary" class="form-control" id="document_secondary" value="{{ old('document_secondary') ?? $client->document_secondary }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="address">Endereço</label>
                                            <input type="text" name="address" class="form-control" id="address" value="{{ old('address') ?? $client->address }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="number">numero</label>
                                            <input type="text" name="number" class="form-control" id="number" value="{{ old('number') ?? $client->number }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="neighborhood">Bairro</label>
                                            <input type="text" name="neighborhood" class="form-control" id="neighborhood" value="{{ old('neighborhood') ?? $client->neighborhood }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="city">Cidade</label>
                                            <input type="text" name="city" class="form-control" id="city" value="{{ old('city') ?? $client->city }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="zipcode">CEP</label>
                                            <input type="text" name="zipcode" class="form-control" id="zipcode" value="{{ old('zipcode') ?? $client->zipcode }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="state">Estado</label>
                                            <input type="text" name="state" class="form-control" id="state" value="{{ old('state') ?? $client->state }}" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="complement">Complemento</label>
                                            <input type="text" name="complement" class="form-control" id="complement" value="{{ old('complement') ?? $client->complement }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="telephone">Telefone</label>
                                            <input type="text" name="telephone" class="form-control" id="telephone" value="{{ old('telephone') ?? $client->telephone }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="cellphone">Celular</label>
                                            <input type="text" name="cellphone" class="form-control" id="cellphone" value="{{ old('cellphone') ?? $client->cellphone }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="email">E-mail</label>
                                            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') ?? $client->email }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="password">Senha</label>
                                            <input type="password" name="password" class="form-control" id="password" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control select2" id="status" name="status" style="width: 100%;" disabled>
                                                <option value="">Selecione:</option>
                                                <option value="active" {{ (old('status') == 'active' ? 'selected' : ($client->name) == 'active' ? 'selected' : '') }}>Ativo</option>
                                                <option value="inactive" {{ (old('status') == 'inactive' ? 'selected' : ($client->name) == 'inactive' ? 'selected' : '') }}>Inativo</option>
                                                <option value="suspended" {{ (old('status') == 'suspended' ? 'selected' : ($client->name) == 'suspended' ? 'selected' : '') }}>Suspenso</option>
                                                <option value="cancel" {{ (old('status') == 'cancel' ? 'selected' : ($client->name) == 'active' ? 'cancel' : '') }}>Cancelado</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="payment_method">Forma de Pagamento</label>
                                            <select class="form-control select2" id="payment_method" name="payment_method" style="width: 100%;" disabled>
                                                <option value="pagseguro" {{ (old('payment_method') == 'pagseguro' ? 'selected' : ($client->payment_method == 'pagseguro' ? 'selected' : '')) }}>Pagseguro</option>
                                                <option value="pix" {{ (old('payment_method') == 'pix' ? 'selected' : ($client->payment_method == 'pix' ? 'selected' : '')) }}>PIX</option>
                                                <option value="credit_card" {{ (old('payment_method') == 'credit_card' ? 'selected' : ($client->payment_method == 'credit_card' ? 'selected' : '')) }}>Cartão de crédito</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="float-sm-right">
                                        <a href="{{ route('admin.client.edit', ['client' => $client->id]) }}" class="btn btn-primary" id="btnCreatePlan"><i class="fas fa-save"></i> Editar</a>
                                        <a  href="javascript:history.back()"  class="btn btn-warning text-white"><i class="fas fa-undo-alt text-white"></i> Voltar</a>
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
