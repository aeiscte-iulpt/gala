@extends('layout')

@section('content')
<link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
<script defer src="https://friconix.com/cdn/friconix.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
<style>
.landing-hero {
    background-size: 100% 100vh;
    height: 100vh;
    background-repeat: no-repeat;
}

.title111 {
    position: absolute;
    font-family: 'Bebas Neue', cursive;
    font-family: 'Roboto', sans-serif;
    top: 50%;
    left: 6%;
}

@media(max-width: 449px) {
    .oh {
        font-size: 2rem !important;
    }

    .versa1 {
        background-image: url('img/homete.jpeg') !important;
        background-size: cover;
    }




    .landing-hero {
        background-size: 100% 100vh !important;
        height: 100vh !important;
        background-repeat: no-repeat;
    }



    .title111 {
        position: absolute;
        font-family: 'Adam-Medium';
        top: 20%;
        left: 4%;
    }
    .butoes{
        padding-top: 7rem;
    }
    .vamos2{
        display:none !important;
    }
    .vamos{
        display:none !important;
    }
    /*.al {margin-left:7rem;margin-right:7rem;}*/
}

@media(min-width:450px) and (max-width: 730px) {


    .versa1 {
        background-image: url('img/homete.jpeg') !important;
        background-size: cover;
    }



    .landing-hero {
        background-size: 100% 100vh !important;
        height: 100vh !important;
        background-repeat: no-repeat;

        /*.al {margin-left:7rem;margin-right:7rem;}*/
    }

    .title111 {
        position: absolute;
        font-family: 'Adam-Medium';
       /* top: 50%;
        left: 50%;*/
    }
    .vamos2{
        display:none !important;
    }
    .vamos{
        display:none !important;
    }
    .butoes{
        padding-top: 7rem !important;
    }
}
</style>
<div class=" versa1 landing-hero" style="background-image: url('img/banner gala.png');">
<div class=" versa1 landing-hero" style="background-image: url('img/banner cima.png');">
<div class="col-md-12 text-center vamos2">
  <img src="img/Logo AEArtboard 1@4x-8.png" style="padding-top: 15vh;width: 35rem;" alt="Example image" class="img-responsive" />
</div>
<div class="col-md-12 text-center d-flex justify-content-center butoes " >
    <button onclick="location.href='https://www.gala.aeiscte-iul.pt/inscrever'" class="btn btn-sm nav-link nav-link-ltr" style="font-weight:bold; color:#cbae73;background-color: var(--bs-btn-hover-bg);
    border-color: var(--bs-btn-hover-border-color);padding:0.5rem;">Inscrever</button>
    
    <button formtarget="_blank" onclick="location.href='https://www.gala.aeiscte-iul.pt/pdf/Guia de Inscrição - Gala 23.pdf'" class="btn btn-sm nav-link nav-link-ltr" style="margin-left:2rem;font-weight:bold; color:#cbae73;background-color: var(--bs-btn-hover-bg);
    border-color: var(--bs-btn-hover-border-color);padding:0.5rem;">Guia de Inscrições</button>
</div>
<div class="col-md-12 text-center vamos" >
  <img src="img/Logo Dourado AE.png" style="padding-top: 11vh;width: 5rem;" alt="Example image" class="img-responsive" />
</div>
   
</div>
</div>





<section id="sobre" class="section section-sm section-first bg-default text-md-left">
    <div class="container">
        <div class="row row-50 justify-content-center align-items-xl-center">
            <div class="col-md-10 col-lg-5 col-xl-6"><img style="border-radius:15px;" class="shadow"
                    src="img/todos/1.jpeg" alt="" height="334" />
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6">

                <!-- Bootstrap tabs-->
                <div class="box-width-lg-470">
                    <!-- Bootstrap tabs-->
                    <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-md-left"
                        id="tabs-7">
                        <!-- Nav tabs-->
                        <ul class="nav nav-tabs" style="border-bottom: 0px ;">
                            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab">
                                    <h4 style="color:#0f1748cc !important">SOBRE NÓS</h4>
                                </a></li>

                        </ul>
                        <!-- Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-7-1">
                                <p>A AEISCTE é uma das mais importantes Associações a nível nacional, representando mais de 11.000 alunos. <br>É nos reconhecido o prestígio, notoriedade e a capacidade na promoção de eventos junto da nossa comunidade e na luta dos seus interesses.
                                </p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 100vh;
    padding: 30px 50px;
}

.gallery-container h1 {
    text-align: center;
    margin-top: 50px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    margin: 25px auto;
    font-size: 18px;
    color: #999;
}

.tz-gallery {
    padding: 40px;
}

/* Override bootstrap column paddings */
.tz-gallery .row>div {
    padding: 2px;
}

.tz-gallery .lightbox img {
    width: 100%;
    border-radius: 0;
    position: relative;
}


.tz-gallery .lightbox:hover:after,
.tz-gallery .lightbox:hover:before {
    opacity: 1;
}

.baguetteBox-button {
    background-color: transparent !important;
}

@media(max-width: 768px) {
    body {
        padding: 0;
    }
}
</style>
<div class="container">
    <h4 style="color:#0f1748cc !important;margin-bottom:2rem;text-align:center;">👀 Edição anterior...</h4>

    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/todos/1.jpeg">
                    <img style="border-radius: 15px;" class="shadow" src="img/todos/1.jpeg">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/todos/2.jpeg">
                    <img style="border-radius: 15px;" class="shadow" src="img/todos/2.jpeg">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/todos/3.jpeg">
                    <img style="border-radius: 15px;" class="shadow" src="img/todos/3.jpeg">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/todos/4.jpeg">
                    <img style="border-radius: 15px;" class="shadow" src="img/todos/4.jpeg">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/todos/5.jpeg">
                    <img style="border-radius: 15px;" class="shadow" src="img/todos/5.jpeg">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/todos/6.jpeg">
                    <img style="border-radius: 15px;" class="shadow" src="img/todos/6.jpeg">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/todos/7.jpeg">
                    <img style="border-radius: 15px;" class="shadow" src="img/todos/7.jpeg">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/todos/8.jpeg">
                    <img style="border-radius: 15px;" class="shadow" src="img/todos/8.jpeg">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/todos/9.jpeg">
                    <img style="border-radius: 15px;" src="img/todos/9.jpeg">
                </a>
            </div>

        </div>

    </div>

</div>

<footer class="text-center text-lg-start text-white footer-16371 shadow" style="background-color: #fffff;">
    <!-- Copyright -->
    <div class="text-center text-black p-3">
        © 2023 Copyright
        <a class="text-black" href="https://aeiscte-iul.pt">AEISCTE-Iul</a>
    </div>
    <!-- Copyright -->
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
baguetteBox.run('.tz-gallery');
</script>


@endsection