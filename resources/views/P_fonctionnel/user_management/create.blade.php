@include('layouts.header')
@include('layouts.sidebar')

    @include('layouts.navbar')
    <div class=" card jumbotron ">
        <div class=" card-body ">
            <form method="POST" action="{{ route("usermanagement.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <a class="btn btn-secondary" href="{{ route('usermanagement.index') }}">Back</a>
                </div>
                <div class="form-group ">
                    <label class="required" for="name">Nom</label>
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                    @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                    <span class="help-block">Entrez le nom</span>
                </div>
                <div class="form-group">
                    <label class="required" for="email">Email</label>
                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email') }}" required>
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                    <span class="help-block">Renseignez l'email</span>
                </div>
                <div class="form-group">
                    <label class="required" for="sexe">Sexe</label>
                    <input class="form-control {{ $errors->has('sexe') ? 'is-invalid' : '' }}" type="text" name="sexe" id="sexe" value="{{ old('sexe') }}" required>
                    @if($errors->has('sexe'))
                        <div class="invalid-feedback">
                            {{ $errors->first('sexe') }}
                        </div>
                    @endif
                    <span class="help-block">Renseignez le sexe</span>
                </div>
                <div class="form-group">
                    <label class="required" for="fonction">Fonction</label>
                    <input class="form-control {{ $errors->has('fonction') ? 'is-invalid' : '' }}" type="text" name="fonction" id="fonction" value="{{ old('fonction') }}" required>

                    @if($errors->has('fonction'))
                        <div class="invalid-feedback">
                            {{ $errors->first('fonction') }}
                        </div>
                    @endif
                    <span class="help-block">Renseignez la fonction</span>
                </div>
                <div class="form-group">
                    <label class="required" for="password">Mot de passe</label>
                    <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" required>
                    @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                    <span class="help-block">Entrez le mot de passe</span>
                </div>

                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>



@include('layouts.footer')

