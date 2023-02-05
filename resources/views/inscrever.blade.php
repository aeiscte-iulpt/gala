@extends('layout')

@section('content')

<style>
.navbar {
    background-color: rgba(15, 23, 72, 1) !important;
}

.breadcrumbs-custom {
    position: relative;
    overflow: hidden;
}

[class*='bg-overlay-'] {
    position: relative;
}

[class*='bg-'] {
    background-size: cover;
    background-position: center center;
}

.context-dark,
.bg-gray-dark,
.bg-primary,
.context-dark h1,
.bg-gray-dark h1,
.bg-primary h1,
.context-dark h2,
.bg-gray-dark h2,
.bg-primary h2,
.context-dark h3,
.bg-gray-dark h3,
.bg-primary h3,
.context-dark h4,
.bg-gray-dark h4,
.bg-primary h4,
.context-dark h5,
.bg-gray-dark h5,
.bg-primary h5,
.context-dark h6,
.bg-gray-dark h6,
.bg-primary h6,
.context-dark [class*='heading-'],
.bg-gray-dark [class*='heading-'],
.bg-primary [class*='heading-'] {
    color: #ffffff;
}

.box-position {
    position: absolute;
    left: 0;
    top: 5%;
    width: calc(100% + 150px);
    height: calc(100% + 250px);
    will-change: transform;
    animation: bgPos 100s linear infinite;
    transform: translate3d(-75px, -75px, 0) rotate(0.001deg);
    background-position: 50% 50%;
    background-size: cover;
    z-index: -1;
}

.breadcrumbs-custom {
    position: relative;
    overflow: hidden;
    padding: 70px 0;
    text-align: center;
    background-color: #cccccc;
    z-index: 1;
}

@media screen and (min-width: 1025px) {

    .card {
        margin-left: 4rem;
        margin-right: 4rem;
    }
}
</style>
<!-- Breadcrumbs -->
<section class="breadcrumbs-custom-inset" style="margin-top:3rem;">
    <div class="breadcrumbs-custom context-dark bg-overlay-60">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Inscrições</h2>
        </div>
        <div class="box-position" style="background-color:rgba(15,23,72,0.9);"></div>
    </div>
</section>
<!-- Why choose us-->

<section class="container" style="margin-top:3rem;margin-bottom:3rem;">
    <div class="container">
        <div class="card shadow " style="--bs-card-border-width:0px !important;">
            <div class="card-header text-center">
                <h4>Formulário de inscrição</h4>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (Session::get('erro'))
                <div class="alert alert-danger">
                    <strong>{{Session::get('erro')}}</strong>
                </div>
                @endif
                @if (Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{Session::get('success')}}</strong>
                </div>
                @endif

                <form class="row g-3" action="{{ url('/inscricao') }}" method="post">
                    @csrf
                    <div class="col-md-3"></div>

                    <div class="col-md-6 text-center">
                        <label for="inputEmail4" class="form-label">Nome da mesa</label>
                        <input type="text" name="nome_mesa" class="form-control" id="inputEmail4">
                    </div>

                    <!------------------------------------------------------------------->

                    <div class="col-md-3"></div>
                    <h5 class="card-title text-center">Responsável da mesa</h5>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nome</label>
                        <input type="text" required name="nome1" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Email</label>
                        <input type="email" required name="email1" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-2">
                        <label for="inputCity" class="form-label">Nº Telemóvel</label>
                        <input type="text" required name="phone1" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">Tens alguma intoleância alimentar?</label>
                        <input type="text" required name="intolerante1" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">És Vegetariano?</label>
                        <select name="is_vegan1" required id="inputState" class="form-select">
                            <option value="" disabled selected>Seleciona uma opção..</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Nº Aluno</label>
                        <input name="aluno1" required type="text" class="form-control" id="inputZip">
                    </div>
                    <hr>

                    <!------------------------------------------------------------------->

                    <h5 class="card-title text-center">Membro 2</h5>

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nome</label>
                        <input type="text" required name="nome2" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Email</label>
                        <input type="email" required name="email2" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-2">
                        <label for="inputCity" class="form-label">Nº Telemóvel</label>
                        <input type="text" required name="phone2" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">Tens alguma intoleância alimentar?</label>
                        <input type="text" required name="intolerante2" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">És Vegetariano?</label>
                        <select required name="is_vegan2" id="inputState" class="form-select">
                            <option value="" disabled selected>Seleciona uma opção..</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Nº Aluno</label>
                        <input required name="aluno2" type="text" class="form-control" id="inputZip">
                    </div>
                    <hr>

                    <!------------------------------------------------------------------->

                    <h5 class="card-title text-center">Membro 3</h5>

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nome</label>
                        <input required type="text" name="nome3" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Email</label>
                        <input required type="email" name="email3" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-2">
                        <label for="inputCity" class="form-label">Nº Telemóvel</label>
                        <input required type="text" name="phone3" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">Tens alguma intoleância alimentar?</label>
                        <input required type="text" name="intolerante3" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">És Vegetariano?</label>
                        <select required name="is_vegan3" id="inputState" class="form-select">
                            <option value="" disabled selected>Seleciona uma opção..</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Nº Aluno</label>
                        <input required name="aluno3" type="text" class="form-control" id="inputZip">
                    </div>
                    <hr>

                    <!------------------------------------------------------------------->

                    <h5 class="card-title text-center">Membro 4</h5>

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nome</label>
                        <input required type="text" name="nome4" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Email</label>
                        <input required type="email" name="email4" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-2">
                        <label for="inputCity" class="form-label">Nº Telemóvel</label>
                        <input required type="text" name="phone4" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">Tens alguma intoleância alimentar?</label>
                        <input required type="text" name="intolerante4" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">És Vegetariano?</label>
                        <select required name="is_vegan4" id="inputState" class="form-select">
                            <option value="" disabled selected>Seleciona uma opção..</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Nº Aluno</label>
                        <input required name="aluno4" type="text" class="form-control" id="inputZip">
                    </div>
                    <hr>

                    <!------------------------------------------------------------------->

                    <h5 class="card-title text-center">Membro 5</h5>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nome</label>
                        <input required type="text" name="nome5" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Email</label>
                        <input required type="email" name="email5" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-2">
                        <label for="inputCity" class="form-label">Nº Telemóvel</label>
                        <input required type="text" name="phone5" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">Tens alguma intoleância alimentar?</label>
                        <input required type="text" name="intolerante10" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">És Vegetariano?</label>
                        <select required name="is_vegan5" id="inputState" class="form-select">
                            <option value="" disabled selected>Seleciona uma opção..</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Nº Aluno</label>
                        <input required name="aluno5" type="text" class="form-control" id="inputZip">
                    </div>
                    <hr>


                    <!------------------------------------------------------------------->


                    <h5 class="card-title text-center">Membro 6</h5>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nome</label>
                        <input required type="text" name="nome6" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Email</label>
                        <input required type="email" name="email6" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-2">
                        <label for="inputCity" class="form-label">Nº Telemóvel</label>
                        <input required type="text" name="phone6" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">Tens alguma intoleância alimentar?</label>
                        <input required type="text" name="intolerante6" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">És Vegetariano?</label>
                        <select required name="is_vegan6" id="inputState" class="form-select">
                            <option value="" disabled selected>Seleciona uma opção..</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Nº Aluno</label>
                        <input required name="aluno6" type="text" class="form-control" id="inputZip">
                    </div>
                    <hr>

                    <!------------------------------------------------------------------->


                    <h5 class="card-title text-center">Membro 7</h5>

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nome</label>
                        <input required type="text" name="nome7" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Email</label>
                        <input required type="email" name="email7" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-2">
                        <label for="inputCity" class="form-label">Nº Telemóvel</label>
                        <input required type="text" name="phone7" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">Tens alguma intoleância alimentar?</label>
                        <input required type="text" name="intolerante7" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">És Vegetariano?</label>
                        <select required name="is_vegan7" id="inputState" class="form-select">
                            <option value="" disabled selected>Seleciona uma opção..</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Nº Aluno</label>
                        <input required name="aluno7" type="text" class="form-control" id="inputZip">
                    </div>
                    <hr>

                    <!------------------------------------------------------------------->



                    <h5 class="card-title text-center">Membro 8</h5>

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nome</label>
                        <input required type="text" name="nome8" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Email</label>
                        <input required type="email" name="email8" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-2">
                        <label for="inputCity" class="form-label">Nº Telemóvel</label>
                        <input required type="text" name="phone8" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">Tens alguma intoleância alimentar?</label>
                        <input required type="text" name="intolerante8" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">És Vegetariano?</label>
                        <select required name="is_vegan8" id="inputState" class="form-select">
                            <option value="" disabled selected>Seleciona uma opção..</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Nº Aluno</label>
                        <input required name="aluno8" type="text" class="form-control" id="inputZip">
                    </div>
                    <hr>

                    <!------------------------------------------------------------------->

                    <h5 class="card-title text-center">Membro 9</h5>

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nome</label>
                        <input required type="text" name="nome9" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Email</label>
                        <input required type="email" name="email9" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-2">
                        <label for="inputCity" class="form-label">Nº Telemóvel</label>
                        <input required type="text" name="phone9" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">Tens alguma intoleância alimentar?</label>
                        <input required type="text" name="intolerante9" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">És Vegetariano?</label>
                        <select required name="is_vegan9" id="inputState" class="form-select">
                            <option value="" disabled selected>Seleciona uma opção..</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Nº Aluno</label>
                        <input required name="aluno9" type="text" class="form-control" id="inputZip">
                    </div>
                    <hr>
                    <!------------------------------------------------------------------->


                    <h5 class="card-title text-center">Membro 10</h5>

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nome</label>
                        <input required type="text" name="nome10" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Email</label>
                        <input required type="email" name="email10" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-2">
                        <label for="inputCity" class="form-label">Nº Telemóvel</label>
                        <input required type="text" name="phone10" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">Tens alguma intoleância alimentar?</label>
                        <input required type="text" name="intolerante10" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">És Vegetariano?</label>
                        <select required name="is_vegan10" id="inputState" class="form-select">
                            <option value="" disabled selected>Seleciona uma opção..</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Nº Aluno</label>
                        <input required name="aluno10" type="text" class="form-control" id="inputZip">
                    </div>


                    <div class="col-md-12">
                        <button type="submit" class="btn btn-sm nav-link nav-link-ltr" style="margin-top:2rem;padding:0.8rem;width:100%;font-weight:bold; color:#cbae73;background-color:rgba(15,23,72,0.9); ;
    border-color: var(--bs-btn-hover-border-color);">Inscrever</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</section>





<footer class="text-center text-lg-start text-white footer-16371 shadow" style="background-color: #fffff;">
    <!-- Copyright -->
    <div class="text-center text-black p-3">
        © 2023 Copyright
        <a class="text-black" href="https://aeiscte-iul.pt">AEISCTE-Iul</a>
    </div>
    <!-- Copyright -->
</footer>
@endsection