@extends('backend.layout')

@section('menu')
        <!-- Static navbar -->
<div class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="#">Fidecorex</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Accueil</a></li>
                <li><a href="#">Clients</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Le Cabinet <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Collaborateurs</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Paramétrage<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Nomenclature</a></li>
                        <li><a href="#">Applications tièrces</a></li>
                    </ul>
                </li>

            </ul>
            {{--   <ul class="nav navbar-nav navbar-right">
                   <li><a href="../navbar/">Default</a></li>
                   <li class="active"><a href="./">Static top</a></li>
                   <li><a href="../navbar-fixed-top/">Fixed top</a></li>
               </ul>--}}
        </div><!--/.nav-collapse -->
    </div>
</div>

@stop
@section('footer')
