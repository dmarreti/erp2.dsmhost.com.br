@extends('admin.layout')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="fas fa-file-alt"></i> Gerenciar Planos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a class="text-dark" href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><i class="fas fa-dollar-sign"></i>  Serviços</li>
                            <li class="breadcrumb-item active"><i class="fas fa-file-alt"></i> Gerenciar Planos</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div id="divInfo"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="info-box bg-success">
                        <span class="info-box-icon"><i class="fas fa-thumbs-up"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Planos Ativos</span>
                            <span class="info-box-number">
                                10
                            </span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">Total de Planos Ativos</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box bg-secondary">
                        <span class="info-box-icon"><i class="fas fa-window-close"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">planos Suspensos</span>
                            <span class="info-box-number">
                                0
                            </span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                            <span class="progress-description">Total de Planos Suspensos</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-success">
                        <div class="card-header with-border">
                            <h3 class="card-title mt-2">Todas os Planos (50)</h3>
                            <a class="btn btn-success float-right text-light" id="btnNewPlan">
                                <i class="far fa-plus-square"></i> Novo Plano
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example3" class="table table-striped">
                                <thead>
                                <tr>
                                    <th width="20">ID</th>
                                    <th width="200">Plano</th>
                                    <th>Categoria</th>
                                    <th>Subcategoria</th>
                                    <th width="50">Custo</th>
                                    <th width="50">Valor</th>
                                    <th>Exibe</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
{{--                                {% for plan in plans %}--}}

{{--                                {% if plan.tb_plano_exibe == 1 %}--}}
{{--                                {% set exibe = 'Exibindo' %}--}}
{{--                                {% set exibeColor = "success" %}--}}
{{--                                {% else %}--}}
{{--                                {% set exibe = 'Oculto' %}--}}
{{--                                {% set exibeColor = "secondary" %}--}}
{{--                                {% endif %}--}}

{{--                                {% if plan.tb_plano_status == 1 %}--}}
{{--                                {% set status = "Ativo" %}--}}
{{--                                {% set statusColor = "success" %}--}}
{{--                                {% else %}--}}
{{--                                {% set status = "Suspenso" %}--}}
{{--                                {% set statusColor = "secondary" %}--}}
{{--                                {% endif %}--}}

                                <tr>
                                    <td>1</td>
                                    <td>SVR VPS - I</td>
                                    <td>
{{--                                        {% for categoria in categorias %}--}}
{{--                                        {% if categoria.id == plan.tb_plano_categoria_id %}--}}
{{--                                        {{ categoria.tb_categoria }}--}}
{{--                                        {% endif %}--}}
{{--                                        {% endfor %}--}}
                                        Servidor VPS
                                    </td>
                                    <td>
{{--                                        {% for subcategoria in subcategorias %}--}}
{{--                                        {% if subcategoria.id == plan.tb_plano_subcategoria_id %}--}}
{{--                                        {{ subcategoria.tb_subcategoria }}--}}
{{--                                        {% endif %}--}}
{{--                                        {% endfor %}--}}
                                        SERVIDOR
                                    </td>
                                    <td>R$ {{ plan.tb_plano_custo | number_format(2,',','.') }}</td>
                                    <td>R$ {{ plan.tb_plano_valor | number_format(2,',','.')}}</td>
                                    <td><span class="badge badge-{{ exibeColor }}">{{ exibe }}</span></td>
                                    <td><span class="badge badge-{{ statusColor }}">{{ status }}</span></td>
                                    <td>
                                        <button class="btn btn-success btn-xs btnUpdatePlan" id="btnUpdatePlan" title="Editar Plano" data-id="{{ plan.id }}"><i class="fas fa-pencil-alt fa-xs"></i></button>
                                        <a href="javascript:if(confirm('Deseja excluir esse registro ?')){location='/plano/delete/{{plan.id}}';}" class="btnDeletePlan" data-id="{{ plan.id }}" title="Deletar Plano">
                                            <span class="btn btn-xs btn-danger"><i class="fas fa-trash-alt fa-xs"></i></span>
                                        </a>
                                        <a href="/tickets/reply/{{ticket.tb_ticket_rand_id}}" title="Ver Plano">
                                                <span class="btn btn-xs btn-primary">
                                                    <i class="fas fa-eye fa-xs"></i>
                                                </span>
                                        </a>
                                    </td>
                                </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

@endsection
