<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1"/>
    <link href="{{ asset('assets/backend/css/vendor.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/app.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body>

<header>
    @yield('menu')
</header>

<article>
    <div class="container">
        @yield('content')
    </div>
</article>

<script src="{{ asset('assets/backend/vendor/vendor.js') }}"></script>
<script src="{{ asset('assets/backend/js/app.js') }}"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
//        $('table.paginate').dataTable({
//            info: false,
//            lengthChange: false,
//            language: {
//                url: '/assets/backend/lang/French.lang',
//                /*info: "Page _PAGE_ de _PAGES_",*/
//                infoEmpty: "Liste vide",
//                lengthMenu: "Afficher _MENU_ entrées",
//                paginate: {
//                    next: "Suivant",
//                    previous: "Précédent"
//                },
//                search: "Rechercher:",
//                emptyTable: "Aucun élément"
//
//            }
//        });
//
//        $('table.no-paginate').dataTable({
//            pageLength: 50,
//            paging: false,
//            info: false,
//            searching: false,
//            language: {
//
//                url: '/assets/backend/lang/French.lang',
//                infoEmpty: "Liste vide",
//                search: "Rechercher:",
//                emptyTable: "Aucun élément"
//
//            }
//        });
    });
</script>
@yield('footer')
</body>
</html>