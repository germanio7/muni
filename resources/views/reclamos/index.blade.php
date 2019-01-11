@extends('home')

@section('contenido')

<br><br>

<div class="container">
    <div class="row">
        <div class="col s12">

            <div class="col s12 m6 l4">
                <div class="card small sticky-action">
                    <div class="card-image">
                        <img src="{{'/img/horizontal.jpg'}}" class="materialboxed">
                        <!-- <a class="center btn-floating halfway-fab red"><i class="fas fa-exclamation-circle fa-lg"></i></a> -->
                    </div>
                    <div class="card-content">
                        <span class="card-title activator">Titulo del Reclamo<i class="right activator fas fa-caret-up"></i></span>
                    </div>
                    <div class="card-action">
                        <a href="#" class="light-blue-text">Detalles</a>
                        <a href="#" class="light-blue-text">Editar</a>
                    </div>
                    <div class="card-reveal scrollbar">
                        <span class="card-title">Titulo del Reclamo<i class="right activator fas fa-caret-down"></i></span>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet aliquid, asperiores hic illum, qui repellendus at fugiat porro dolorum nesciunt praesentium! Porro beatae incidunt officia explicabo repellat, dicta eligendi pariatur.</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l4">
                <div class="card small sticky-action">
                    <div class="card-image">
                        <img src="{{'/img/vertical.png'}}" class="materialboxed"> 
                        <!-- <a class="center btn-floating halfway-fab red"><i class="fas fa-exclamation-circle fa-lg"></i></a> -->
                    </div>
                    <div class="card-content">
                    <span class="card-title activator">Titulo del Reclamo<i class="right activator fas fa-caret-up"></i></span>
                    </div>
                    <div class="card-action">
                        <a href="#" class="light-blue-text">Detalles</a>
                        <a href="#" class="light-blue-text">Editar</a>
                    </div>
                    <div class="card-reveal scrollbar">
                        <span class="card-title">Titulo del Reclamo<i class="right activator fas fa-caret-down"></i></span>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet aliquid, asperiores hic illum, qui repellendus at fugiat porro dolorum nesciunt praesentium! Porro beatae incidunt officia explicabo repellat, dicta eligendi pariatur.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection