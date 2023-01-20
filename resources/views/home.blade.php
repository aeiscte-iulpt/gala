@extends('layout')

@section('content')
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
        top: 20%;
        left: 4%;
    }
}
</style>

<div class=" versa1 landing-hero" style="background-image: url('img/homepc.jpeg');">
    <div class="title111 navbar-nav mx-auto">
    </div>
</div>


@endsection