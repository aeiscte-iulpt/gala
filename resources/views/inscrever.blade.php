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

                <form id="form-submit" class="row g-3" action="{{ url('/inscricao') }}" method="post">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#form-submit').submit(function(event) {
      event.preventDefault();

      $('#spinner-overlay').show();

      $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: $(this).serialize(),
        success: function(response) {
          $('#spinner-overlay').hide();
          // faça algo com a resposta
        }
      });
    });
  });
</script>



<style>
    #spinner-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
}



@keyframes spin {
  to { transform: rotate(360deg); }
}


.pl,
.pl__worm {
  animation-duration: 3s;
  animation-iteration-count: infinite;
}
.pl {
  animation-name: bump;
  animation-timing-function: linear;
  width: 8em;
  height: 8em;
}
.pl__ring {
  stroke: hsla(var(--hue),10%,10%,0.1);
  transition: stroke 0.3s;
}
.pl__worm {
  animation-name: worm;
  animation-timing-function: cubic-bezier(0.42,0.17,0.75,0.83);
}

/* Dark theme */
@media (prefers-color-scheme: dark) {
  :root {
    --bg: hsl(var(--hue),10%,10%);
    --fg: hsl(var(--hue),10%,90%);
  }
  .pl__ring {
    stroke: hsla(var(--hue),10%,90%,0.1);
  }
}

/* Animations */
@keyframes bump {
  from,
  42%,
  46%,
  51%,
  55%,
  59%,
  63%,
  67%,
  71%,
  74%,
  78%,
  81%,
  85%,
  88%,
  92%,
  to { transform: translate(0,0); }
  44% { transform: translate(1.33%,6.75%); }
  53% { transform: translate(-16.67%,-0.54%); }
  61% { transform: translate(3.66%,-2.46%); }
  69% { transform: translate(-0.59%,15.27%); }
  76% { transform: translate(-1.92%,-4.68%); }
  83% { transform: translate(9.38%,0.96%); }
  90% { transform: translate(-4.55%,1.98%); }
}
@keyframes worm {
  from { stroke-dashoffset: 10; }
  25% { stroke-dashoffset: 295; }
  to { stroke-dashoffset: 1165; }
}
</style>

<div id="spinner-overlay" style="display: none;">
  <div id="spinner">
  <svg class="pl" viewBox="0 0 128 128" width="128px" height="128px" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <linearGradient id="pl-grad" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0%" stop-color="hsl(193,90%,55%)" />
      <stop offset="100%" stop-color="hsl(223,90%,55%)" />
    </linearGradient>
  </defs>
  <circle class="pl__ring" r="56" cx="64" cy="64" fill="none" stroke="hsla(0,10%,10%,0.1)" stroke-width="16" stroke-linecap="round" />
  <path class="pl__worm" d="M92,15.492S78.194,4.967,66.743,16.887c-17.231,17.938-28.26,96.974-28.26,96.974L119.85,59.892l-99-31.588,57.528,89.832L97.8,19.349,13.636,88.51l89.012,16.015S81.908,38.332,66.1,22.337C50.114,6.156,36,15.492,36,15.492a56,56,0,1,0,56,0Z" fill="none" stroke="url(#pl-grad)" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="44 1111" stroke-dashoffset="10" />
</svg>
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

@endsection