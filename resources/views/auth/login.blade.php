@extends('modele.master')
@section('content')

<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <section style="width:380px; margin-top:20px; margin-bottom:20px; border-radius: 10px; padding:25px; border: green solid 2px;">
            <form method="POST" action="{{ route('sendlogin') }}">
                @csrf
                <fieldset>
                    <legend style="text-align: center; font-size:25px;"><b>Connexion</b></legend>

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
                    <!-- Password -->
                    <div class="row">

                        <!-- <div class="col-xs-4 col-sm-4 col-md-12 col-lg-4 col-xl-4"></div> -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="password">{{'Password'}}</label>

                            <input id="password" class="form-control" type="password" name="password" required autocomplete="false">
                        </div>

                        <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div> -->
                    </div><br><br>
                    <!-- Remember Me -->
                    <div class="row">

                        <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div> -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                            <label for="remember_me" class="inline-flex items-center">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="btn btn-info">{{ 'Remember me' }}</span>
                                <input id="remember_me" type="checkbox" value="1" name="remember" style="width: 20px; height:20px;">
                            </label>
                        </div>
                        <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div> -->

                    </div>

                    <br><br><br><br>
                    <div class="row">

                        <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div> -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                            @if (Route::has('password.request'))
                            <a class="btn btn-danger" href="{{ route('password.request') }}">
                                {{ 'Mot de passe oublié?'}}
                            </a>
                            @endif

                            <button class="btn btn-primary">
                                {{ 'Log in' }}
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