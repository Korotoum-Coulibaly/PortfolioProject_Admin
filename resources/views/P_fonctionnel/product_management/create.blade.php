@include('layouts.header')
@include('layouts.sidebar')

    @include('layouts.navbar')
    <div class=" card jumbotron ">
        <div class=" card-body ">
            <form method="POST" action="{{ route("productmanagement.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <a class="btn btn-secondary" href="{{ route('productmanagement.index') }}">Back</a>
                </div>
                <div class="form-group ">
                    <label class="required" for="libelle">libelle</label>
                    <input class="form-control {{ $errors->has('libelle') ? 'is-invalid' : '' }}" type="text" name="libelle" id="libelle" value="{{ old('libelle', '') }}" required>
                    @if($errors->has('libelle'))
                        <div class="invalid-feedback">
                            {{ $errors->first('libelle') }}
                        </div>
                    @endif
                    <span class="help-block">Entrez le nom du produit</span>
                </div>
                <div class="form-group">
                    <label class="required" for="plan">plan</label>
                    <input class="form-control {{ $errors->has('plan') ? 'is-invalid' : '' }}" type="text" name="plan" id="plan" value="{{ old('plan') }}" >
                    @if($errors->has('plan'))
                        <div class="invalid-feedback">
                            {{ $errors->first('plan') }}
                        </div>
                    @endif
                    <span class="help-block">Renseignez le plan</span>
                </div>
                <div class="form-group">
                    <label class="required" for="price">prix</label>
                    <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="text" name="price" id="price" value="{{ old('price') }}" required>
                    @if($errors->has('price'))
                        <div class="invalid-feedback">
                            {{ $errors->first('price') }}
                        </div>
                    @endif
                    <span class="help-block">Renseignez le prix</span>
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

