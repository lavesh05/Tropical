@extends('backend.layout')

@section('menu')
        <!-- Static navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="{{ url('admin') }}">
                <img src="{{ asset('assets/common/img/tropical.png') }}" alt="Tropical Mauritius Holiday">
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li {{--{!! activeMenu('admin') !!}--}}>
                    <a href="{{ url('admin') }}">Accueil</a>
                </li>
                <li {{--{!! activeMenu('admin/tenants') !!}--}}>
                    <a href="{{ url('admin/tenants') }}">Clients</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Le Cabinet <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li {{--{!! activeMenu('admin/employees')  !!}--}}>
                            <a href="{{ url('admin/employees') }}">Collaborateurs</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Paramétrage<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li {{--{!! activeMenu('admin/file-structure') !!}--}}>
                            <a href="{{ url('admin/file-structure') }}">Nomenclature</a>
                        </li>
                        <li {{--{!! activeMenu('admin/file-structure') !!}--}}>
                            <a href="{{ url('admin/third-applications') }}">Applications tierces</a>
                        </li>
                    </ul>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (!Auth::guest())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/admin/deconnexion') }}">
                                    <i class="fa fa-btn fa-sign-out"></i>Déconnexion
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

@stop