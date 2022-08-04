<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{ url('assets/images/faces/face8.jpg') }}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">{{ auth()->user()->name }}</p>
            <div class="dropdown" data-display="static">
              <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <small class="designation text-muted">Configuração</small>
                <span class="status-indicator online"></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="UsersettingsDropdown">
                <a class="dropdown-item p-0">
                  <div class="d-flex border-bottom">
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                      <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                    </div>
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                      <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                    </div>
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                      <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item mt-2"> Configuração da Conta</a>
                <a class="dropdown-item"> Alterar Senha </a>
                <a class="dropdown-item"> Mensagens </a>
                <a class="dropdown-item"> Sair </a>
              </div>
            </div>
          </div>
        </div>
        <!-- <button class="btn btn-success btn-block"> <i class="mdi mdi-plus"></i> -->
        </button>
      </div>
    </li>
    <li class="nav-item {{ active_class(['home']) }}">
      <a class="nav-link" href="{{ route('home') }}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Painel Administrativo</span>
      </a>
    </li>
    <!-- <li class="nav-item {{ active_class(['basic-ui/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">
        <i class="menu-icon mdi mdi-dna"></i>
        <span class="menu-title">Basic UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['basic-ui/*']) }}" id="basic-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['basic-ui/buttons']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/buttons') }}">Buttons</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/dropdowns') }}">Dropdowns</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/typography']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/typography') }}">Typography</a>
          </li>
        </ul>
      </div>
    </li> -->
    <li class="nav-item {{ active_class(['cad/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#cad" aria-expanded="{{ is_active_route(['cad/*']) }}" aria-controls="cad">
        <i class="menu-icon mdi mdi-chart-bubble"></i>
        <span class="menu-title">Clientes & Pets</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['cad/*']) }}" id="cad">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['cad/buttons']) }}">
            <a class="nav-link" href="{{ url('/cad/buttons') }}"><i class="mdi mdi-face"></i> &nbsp; Cliente</a>
          </li>
          <li class="nav-item {{ active_class(['cad/dropdowns']) }}">

            <a class="nav-link" href="{{ url('/cad/dropdowns') }}"><i class="mdi mdi-paw"></i> &nbsp; Pets</a>
          </li>
          <li class="nav-item {{ active_class(['cad/typography']) }}">
            <a class="nav-link" href="{{ url('/cad/typography') }}"><i class="mdi mdi-calendar-today"></i> &nbsp; Agenda</a>
          </li>
          <li class="nav-item {{ active_class(['cad/typography']) }}">
            <a class="nav-link" href="{{ url('/cad/typography') }}"><i class="mdi mdi-taxi"></i> &nbsp; Taxi Cachorro</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item {{ active_class(['basic-ui/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">
        <i class="menu-icon mdi mdi-view-quilt"></i>
        <span class="menu-title">Estoque</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['basic-ui/*']) }}" id="basic-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['basic-ui/buttons']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/buttons') }}"><i class="mdi mdi-incognito"></i> &nbsp; Fornecedor</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/dropdowns') }}"><i class="mdi mdi-cube-send"></i> &nbsp; Produtos</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/dropdowns') }}"><i class="mdi mdi-basket"></i> &nbsp; Compras</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/typography']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/typography') }}"><i class="mdi mdi-square-inc-cash"></i> &nbsp; Vendas</a>
          </li>

        </ul>
      </div>
    </li>

    <li class="nav-item {{ active_class(['financy/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#financy" aria-expanded="{{ is_active_route(['financy/*']) }}" aria-controls="financy">
        <i class="menu-icon mdi mdi-square-inc-cash"></i>
        <span class="menu-title">Financeiro</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['financy/*']) }}" id="financy">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['financy/buttons']) }}">
            <a class="nav-link" href="{{ url('/financy/buttons') }}"><i class="mdi mdi-stack-exchange"></i> &nbsp; Contas a Pagar</a>
          </li>
          <li class="nav-item {{ active_class(['financy/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/financy/dropdowns') }}"><i class="mdi mdi-stack-exchange"></i> &nbsp; Contas a receber</a>
          </li>
          <li class="nav-item {{ active_class(['financy/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/financy/dropdowns') }}"><i class="mdi mdi-stack-exchange"></i> &nbsp; Caixa</a>
          </li>

        </ul>
      </div>
    </li>

    <li class="nav-item {{ active_class(['reports/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#reports" aria-expanded="{{ is_active_route(['reports/*']) }}" aria-controls="reports">
        <i class="menu-icon mdi mdi-table-large"></i>
        <span class="menu-title">Relatórios</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['reports/*']) }}" id="reports">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['reports/buttons']) }}">
            <a class="nav-link" href="{{ url('/reports/buttons') }}"><i class="mdi mdi-stack-exchange"></i> &nbsp; Clientes</a>
          </li>
          <li class="nav-item {{ active_class(['reports/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/reports/dropdowns') }}"><i class="mdi mdi-account-settings"></i> &nbsp; Fornecedores</a>
          </li>
          <li class="nav-item {{ active_class(['reports/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/reports/dropdowns') }}"><i class="mdi mdi-cat"></i> &nbsp; Animais Cadastrados(Pets)</a>
          </li>
          <li class="nav-item {{ active_class(['reports/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/reports/dropdowns') }}"><i class="mdi mdi-eyedropper"></i> &nbsp; Animais Vacinados</a>
          </li>
          <li class="nav-item {{ active_class(['reports/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/reports/dropdowns') }}"><i class="mdi mdi-cart"></i> &nbsp; Compras</a>
          </li>
          <li class="nav-item {{ active_class(['reports/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/reports/dropdowns') }}"><i class="mdi mdi mdi-view-quilt"></i> &nbsp; Estoque</a>
          </li>
          <li class="nav-item {{ active_class(['reports/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/reports/dropdowns') }}"><i class="mdi mdi-calendar-check"></i> &nbsp; Controle de Qualidade</a>
          </li>
          <li class="nav-item {{ active_class(['reports/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/reports/dropdowns') }}"><i class="mdi mdi-slack"></i> &nbsp; Vendas</a>
          </li>
          <li class="nav-item {{ active_class(['reports/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/reports/dropdowns') }}"><i class="mdi mdi-lumx"></i> &nbsp; Lucros R$</a>
          </li>
          <li class="nav-item {{ active_class(['reports/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/reports/dropdowns') }}"><i class="mdi mdi-football-helmet"></i> &nbsp; Venda Por Cliente</a>
          </li>
          <li class="nav-item {{ active_class(['reports/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/reports/dropdowns') }}"><i class="mdi mdi-stack-exchange"></i> &nbsp; Caixa</a>
          </li>
          <li class="nav-item {{ active_class(['reports/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/reports/dropdowns') }}"><i class="mdi mdi-drawing-box"></i> &nbsp; Contas</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['config/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#config" aria-expanded="{{ is_active_route(['config/*']) }}" aria-controls="config">
        <i class="menu-icon mdi mdi-settings"></i>
        <span class="menu-title">Configurações</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['config/*']) }}" id="config">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['config/users']) }}">
            <a class="nav-link" href="{{ route('users.index') }}"><i class="mdi mdi-stack-exchange"></i> &nbsp; Usuários</a>
          </li>
          <li class="nav-item {{ active_class(['config/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/config/dropdowns') }}"><i class="mdi mdi-stack-exchange"></i> &nbsp; Parametros</a>
          </li>
          <li class="nav-item {{ active_class(['config/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/config/dropdowns') }}"><i class="mdi mdi-settings-box"></i> &nbsp; Atribuições</a>
          </li>
          <li class="nav-item {{ active_class(['config/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/config/dropdowns') }}"><i class="mdi mdi-shape-circle-plus"></i> &nbsp; Permissões</a>
          </li>

        </ul>
      </div>
    </li>
    <!-- <li class="nav-item {{ active_class(['charts/chartjs']) }}">
      <a class="nav-link" href="{{ url('/charts/chartjs') }}">
        <i class="menu-icon mdi mdi-chart-line"></i>
        <span class="menu-title">Charts</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['tables/basic-table']) }}">
      <a class="nav-link" href="{{ url('/tables/basic-table') }}">
        <i class="menu-icon mdi mdi-table-large"></i>
        <span class="menu-title">Tables</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['icons/material']) }}">
      <a class="nav-link" href="{{ url('/icons/material') }}">
        <i class="menu-icon mdi mdi-emoticon"></i>
        <span class="menu-title">Icons</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['user-pages/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-expanded="{{ is_active_route(['user-pages/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['user-pages/*']) }}" id="user-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['user-pages/login']) }}">
            <a class="nav-link" href="{{ url('/user-pages/login') }}">Login</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/register']) }}">
            <a class="nav-link" href="{{ url('/user-pages/register') }}">Register</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/lock-screen']) }}">
            <a class="nav-link" href="{{ url('/user-pages/lock-screen') }}">Lock Screen</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://www.bootstrapdash.com/demo/star-laravel-free/documentation/documentation.html" target="_blank">
        <i class="menu-icon mdi mdi-file-outline"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li> -->
  </ul>
</nav>
