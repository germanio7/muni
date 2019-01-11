<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper light-blue">
            <a class="button-sidenav hide-on-med-and-down" onclick="sidenav();"><i class="fas fa-bars fa-lg"></i></a>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="fas fa-bars fa-2x"></i></a>
            <a href="#" class="brand-logo"><img src="{{'/img/logo.png'}}" width="162" height="auto" alt="Logo"></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ route('logout') }}" class="tooltipped" 
                        data-position="left" data-tooltip="Cerrar Sesión" 
                        onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-power-off fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>

<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
        <div class="background">
            <img src="{{'/img/fondo.jpg'}}">
        </div>
        <a href="#"><img class="circle" src="{{'/img/boy.png'}}"></a>
        <a href="#"><span class="white-text name"><b>User</b></span></a>
        <a href="#"><span class="white-text email">user@mail.com</span></a>
    </div></li>
    <li><a href="#" class="black-text">Reclamos</a></li>
    <li><a href="#" class="black-text">Categorias</a></li>
    <li><a href="#" class="black-text">Usuarios</a></li>
    <li><a href="{{ route('logout') }}" class="black-text" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a></li>
</ul>

<div id="push-sidenav" class="light-blue push-sidenav hide-on-med-and-down">
    <br><br>
    <div class="center">
        <img src="{{'/img/boy.png'}}" alt="Perfil" height="128" width="auto" class="circle">
        <p class="white-text"><b>User</b></p>
    </div>
    <br>
    <ul class="collapsible">
        <li>
            <div class="collapsible-header white-text">Reclamos</div>
            <div class="collapsible-body light-blue">
                <ul>
                    <li><a href="#" class="white-text"><i class="far fa-check-circle fa-lg"></i> Resueltos</a></li>
                    <li><a href="#" class="white-text"><i class="far fa-clock fa-lg"></i> Pendientes</a></li>
                    <li><a href="#" class="white-text"><i class="fas fa-exclamation-circle fa-lg"></i> Cerrados</a></li>
                </ul>
            </div>
        </li>
    </ul>
    <li><a href="#" class="white-text">Categorias</a></li>
    <li><a href="#" class="white-text">Usuarios</a></li>
</div>