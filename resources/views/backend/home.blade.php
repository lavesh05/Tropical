@extends('backend.menu')

@section('content')
    <div class="jumbotron">
        <h1>Console d'administration</h1>
        <p class="lead">
            La console d'administration vous permet de gérer les documents mis à disposition des clients.
        </p>
        <ul>
            <li>
                Le menu <strong>Clients</strong> vous permet de gérer les dossiers des clients :
                <ul>
                    <li>Liste des clients</li>
                    <li>Liste des dossiers par client</li>
                    <li>Liste des contacts par client</li>
                </ul>
            </li>
            <li>Le menu <strong>Le Cabinet</strong> vous permet de gérer les comptes utilisateurs des collaborateurs.
            </li>
            <li>Le menu <strong>Paramétrage</strong> vous permet de configurer les différents paramètres de
                l'application
            </li>
        </ul>
    </div>
@stop