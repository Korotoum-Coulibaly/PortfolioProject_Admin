@include('layouts.header')
@include('layouts.sidebar')

    @include('layouts.navbar')
    <div class=" card jumbotron ">
        <div class=" card-body ">
            <form method="POST" action="{{ route("rulemanagement.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <a class="btn btn-secondary" href="{{ route('rulemanagement.index') }}">Back</a>
                </div>
                <div class="form-group ">
                    <label class="required" for="libelle">Libelle</label>
                    <input class="form-control {{ $errors->has('libelle') ? 'is-invalid' : '' }}" type="text" name="libelle" id="libelle" value="{{ old('libelle', '') }}" required>
                    @if($errors->has('libelle'))
                        <div class="invalid-feedback">
                            {{ $errors->first('libelle') }}
                        </div>
                    @endif
                    <span class="help-block">Entrez le libelle</span>
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

