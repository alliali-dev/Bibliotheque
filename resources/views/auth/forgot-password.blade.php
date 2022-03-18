@extends('modele.master')
@section('content')

<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <section style="width:380px; margin-top:20px; margin-bottom:20px; border-radius: 10px; padding:25px; border: green solid 2px;">
            <form method="POST" action="{{ route('password.email') }}" onsubmit="info()">
                @csrf
                <fieldset>
                    <legend style="text-align: center; font-size:25px;"><b>Entrer votre email pour recevoir le lien</b></legend>

                    <br><br>
                    <div class="row">

                        <!-- Email Address -->
                        <!-- <div class="col-md-4"></div> -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="email">{{'Email'}}</label>

                            <input id="email" class="form-control" type="email" name="email" value="{{old('email')}}" required autofocus>
                        </div>

                        <!-- <div class="col-md-4"></div> -->
                    </div>
                    <!-- separation -->
                    <br><br>
                    <div class="row">

                        <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div> -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                            <button type="submit" class="btn btn-primary" >
                                {{ 'Recevoir le lien' }}
                            </button>

                            <a class="btn btn-warning" href="{{ '/' }}">
                                {{ 'Retour' }}
                            </a>

                        </div>
                        <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div> -->

                    </div>


                </fieldset>
            </form>
        </section>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
</div>
@stop
<script  type="text/javascript">
  function info(){
        alert('Nous avons envoyé le lien sur votre adresse email');
    }
</script>