<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <script data-queue-fair-client="aeiscte" src="https://files.queue-fair.net/queue-fair-adapter.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Gala Iscte 2023 | Diamonds are forever">
    <meta property="og:type" content="article" />
    <meta property="og:image" content="https://gala.aiscte-iul.pt/img/homepc.jpeg">
    <meta property="og:url" content="https://gala.aiscte-iul.pt/">
    <title>Gala Iscte</title>
    <link rel="icon" href="{{ asset('img/Logo Dourado AE.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <script defer src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js'></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css'>

    <script defer src="https://friconix.com/cdn/friconix.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<style>
body {
    font-family: 'Bebas Neue', cursive;
    font-family: 'Roboto', sans-serif;
}

.nav-item {
    margin-right: 5rem;
}

.btn:hover {
    background-color: rgba(203, 174, 115, 0.8) !important;
    color: rgb(15, 23, 72) !important;
}
</style>

<body>

    <nav class="navbar navbar-expand-lg shadow fixed-top"
        style="background-color:rgba(15,23,72,0.8);padding: 0.5rem !important;">
        <div class="container-fluid">
            <a style="margin-left:7rem;" class="navbar-brand" href="/"><img style="width:8rem;"
                    src="{{ asset('img/Logo AE horizontal dourado.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul style="margin-right:0rem !important;" class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr" style="font-weight:bold;color:#cbae73;"
                            href="/#sobre-nos">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr" style="font-weight:bold; color:#cbae73;" href="/produtos">Sobre
                            nós</a>
                    </li>

                    <li class="nav-item">
                        <button class="btn btn-sm nav-link nav-link-ltr" style="font-weight:bold; color:#cbae73;background-color: var(--bs-btn-hover-bg);
    border-color: var(--bs-btn-hover-border-color);">Inscrever</button>

                    </li>


                    <!---->
                </ul>
            </div>
        </div>



    </nav>

    <main>
        @yield('content')
    </main>

</body>

</html>