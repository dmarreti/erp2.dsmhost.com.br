<aside class="main-sidebar elevation-4 sidebar-dark-green">
    <!-- Brand Logo -->
    <a href="{{ route('admin.home') }}" class="brand-link bg-green">
        <img src="{{ url(asset('backend/dist/img/logos/logo_dsmhost_branco.png')) }}" alt="DSM Host - Datacenter" class="brand-image" style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-overflow-x">
        <!-- Sidebar user panel (optional) -->
{{--        <div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
{{--            <div class="image">--}}
{{--                <img src="{{ url(asset('backend/dist/img/user2-160x160.jpg')) }}" class="img-circle elevation-2" alt="User Image">--}}
{{--            </div>--}}
{{--            <div class="info">--}}
{{--                <a href="" class="d-block">{{ '' ?? $user }}</a>--}}
{{--                <div class="text-white">Administrador</div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <br/>

        <!-- SidebarSearch Form -->
{{--        <div class="form-inline">--}}
{{--            <div class="input-group" data-widget="sidebar-search">--}}
{{--                <input class="form-control form-control-sidebar" type="search" placeholder="Pesquisar" aria-label="Search">--}}
{{--                <div class="input-group-append">--}}
{{--                    <button class="btn btn-sidebar">--}}
{{--                        <i class="fas fa-search fa-fw"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-compact nav-child-indent text-sm" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="{{ route('admin.home') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-archive"></i>
                        <p>Cadastros <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.client.index') }}" class="nav-link">
                                <i class="fas fa-user-tie nav-icon"></i>
                                <p>Cadastro de Clientes</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.manager.index') }}" class="nav-link">
                                <i class="fas fa-user-cog nav-icon"></i>
                                <p>Cadastro de Admins</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.user.index') }}" class="nav-link">
                                <i class="fas fa-users-cog nav-icon"></i>
                                <p>Gerenciar Usuários</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>
                            Vendas
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/order" class="nav-link">
                                <i class="nav-icon fas fa-file-contract"></i>
                                <p>Pedidos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-money-bill"></i>
                        <p>
                            Financeiro
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/examples/project-detail.html" class="nav-link">
                                <i class="fas fa-wallet nav-icon"></i>
                                <p>Fluxo de Caixa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-detail.html" class="nav-link">
                                <i class="fas fa-coins nav-icon"></i>
                                <p>Contas a pagar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-detail.html" class="nav-link">
                                <i class="fas fa-funnel-dollar nav-icon"></i>
                                <p>Contas a receber</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-detail.html" class="nav-link">
                                <i class="fas fa-file-invoice nav-icon"></i>
                                <p>Faturas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-detail.html" class="nav-link">
                                <i class="fas fa-file-invoice-dollar nav-icon"></i>
                                <p>Orçamentos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-detail.html" class="nav-link">
                                <i class="fas fa-credit-card nav-icon"></i>
                                <p>Transações</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/invoice" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice-dollar"></i>
                                <p>Faturas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/subscription" class="nav-link">
                                <i class="nav-icon fas fa-file-contract"></i>
                                <p>Assinatura</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Transações
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/support/ticket" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Cartão de Crédito</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon text-success"></i>
                                        <p>PagSeguro</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon text-info"></i>
                                        <p>Boleto</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon text-warning"></i>
                                        <p>Transaferência Bancária</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Serviços
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/plano" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>Planos</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-cog nav-icon"></i>
                                <p>
                                    Recursos do Plano
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/resource" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Grupo dos Recursos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/resourceConfiguration" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon text-success"></i>
                                        <p>Recursos Configuráveis</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Projetos
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/examples/projects.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Desenvolvimento</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-add.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Concluído</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-edit.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Controle de Versão</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Utilitários
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/examples/project-detail.html" class="nav-link">
                                <i class="fas fa-bookmark nav-icon"></i>
                                <p>Itens a fazer</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-pdf"></i>
                        <p>
                            Relatorios
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/examples/project-detail.html" class="nav-link">
                                <i class="fas fa-bookmark nav-icon"></i>
                                <p>Itens a fazer</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-desktop"></i>
                        <p>
                            Suporte
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Atendimento</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ordem de Serviço</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Tickets de Suporte
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/support/ticket" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Tickets Ativos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon text-success"></i>
                                        <p>Abertos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon text-info"></i>
                                        <p>Respondido</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon text-warning"></i>
                                        <p>Resposta do Cliente</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon text-primary"></i>
                                        <p>Em Espera</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon text-danger"></i>
                                        <p>Em processamento</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon text-secondary"></i>
                                        <p>Fechado</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ocorrências Interna</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Departamentos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Usuários
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="nav-icon fas fa-user-shield"></i>
                                <p>Administradores</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-wrench"></i>
                        <p>
                            Ajustes
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Configurações Gerais</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-desktop"></i>
                                <p>
                                    Suporte
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/configuration/departments_ticket" class="nav-link">
                                        <i class="fas fa-check-double nav-icon"></i>
                                        <p>Departamentos de Suporte</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/configuration/status_ticket" class="nav-link">
                                        <i class="fas fa-check-double nav-icon"></i>
                                        <p>Status dos Tickets</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-globe"></i>
                        <p>
                            Portal
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/banners" class="nav-link">
                                <i class="fab fa-shirtsinbulk nav-icon"></i>
                                <p>Banners</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/pages" class="nav-link">
                                <i class="far fa-file nav-icon"></i>
                                <p>Paginas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/blog" class="nav-link">
                                <i class="fas fa-blog nav-icon"></i>
                                <p>Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/networkissues" class="nav-link">
                                <i class="fas fa-network-wired nav-icon"></i>
                                <p>Notificações de Rede</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.logout') }}" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Sair</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
