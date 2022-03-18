@extends('modele.master')
@section('content')

<!-- Validation Errors -->
<div class="row">
    <div class="col-10" style=" margin: 15px 70px 15px 70px;">
        <form method="POST" action="{{ route('saveuser') }}" enctype="multipart/form-data">
            @csrf

            @if(Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            <!-- si echec -->
            @if(Session::get('fail'))
            <div class="alert alert-success">{{ Session::get('fail') }}</div>
            @endif
            <div class="col-md-6">
                <!-- Name -->
                <div>
                    <label for="name">Name</label>

                    <input id="name" type="text" name="name" class="form-control col-sm-6 col-md-8 col-lg-10 offsset-2"  value="{{old('name')}}" required autofocus placeholder="Nom & Prenoms" />
                    <span class="text text-danger">@error('name'){{$message}}@enderror</span>
                </div><br><br><br>

                <!-- Email Address -->
                <div class="mt-4">
                    <label for="email">Email</label>

                    <input id="email" type="email" name="email" class="form-control col-sm-6 col-md-8 col-lg-10 offsset-2"  value="{{old('email')}}" required placeholder="Email" />
                    <span class="text text-danger">@error('email'){{$message}}@enderror</span>
                </div><br><br><br>

                <!-- telephone -->
                <div class="mt-4">
                    <label for="telephone">Telephone</label>

                    <input id="telephone" type="tel" name="telephone" class="form-control col-sm-6 col-md-8 col-lg-10 offsset-2"  value="{{old('telephone')}}" required placeholder="Telephone" />
                    <span class="text text-danger">@error('telephone'){{$message}}@enderror</span>
                </div><br><br><br>
            </div>
            <div class="col-md-6">
                <!-- Password -->
                <div class="mt-4">
                    <label for="password">Password</label>

                    <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control col-sm-6 col-md-8 col-lg-10 offsset-2"  value="{{ old('password') }}" placeholder="password" />
                    <span class="text text-danger">@error('password'){{$message}}@enderror</span>
                </div><br><br><br>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label for="password_confirmation">Confirm Password</label>

                    <input id="password_confirmation"  type="password" name="password_confirmation" class="form-control col-sm-6 col-md-8 col-lg-10 offsset-2" value="{{ old('password_confirmation') }}" required placeholder="password confirmation" />
                    <span class="text text-danger">@error('password_confirmation'){{$message}}@enderror</span>
                </div><br><br><br>

                <!-- avatar -->
                <div class="mt-4">
                    <label for="photo">Photo de profile</label>

                    <input id="photo" type="file" name="photo" accept="image/*" value="{{old('photo')}}" class="form-control col-sm-6 col-md-8 col-lg-10 offsset-2" />
                    <span class="text text-danger">@error('photo'){{$message}}@enderror</span>
                </div><br><br><br>

            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="btn btn-success underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ 'Déja inscris? Connetez-vous' }}
                </a>
                <a class="btn btn-warning underline text-sm text-gray-600 hover:text-gray-900" href="{{ '/' }}">
                    {{ 'Retour' }}
                </a>
                <input type="checkbox" value="1" name="st" checked required hidden>
                <input type="submit" class="btn btn-primary col-lg-6" value=" {{ 'Enregistrer' }}">
                   
               
            </div>
        </form><br>
    </div>
</div>

@stop