@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Modifier un utilisateur
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.users.update", [$user->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.users.index') }}">
                    Back
                </a>
            </div>
            <div class="form-group">
                <label class="required" for="name">Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">Renseignez le nom</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">Email</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $user->email) }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">Renseignez l'email</span>
            </div>
            <div class="form-group">
                <label class="required" for="groupe">Groupe</label>
                <input class="form-control {{ $errors->has('groupe') ? 'is-invalid' : '' }}" type="text" name="groupe" id="groupe" value="{{ old('groupe', $user->Groupe) }}" required>
                @if($errors->has('groupe'))
                    <div class="invalid-feedback">
                        {{ $errors->first('groupe') }}
                    </div>
                @endif
                <span class="help-block">Renseignez le groupe</span>
            </div>
            <div class="form-group">
                <label class="required" for="fonction">Fonction</label>
                <input class="form-control {{ $errors->has('fonction') ? 'is-invalid' : '' }}" type="text" name="fonction" id="fonction" value="{{ old('fonction', $user->fonction) }}" required>
                @if($errors->has('fonction'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fonction') }}
                    </div>
                @endif
                <span class="help-block">Renseignez la fonction</span>
            </div>
            <!-- <div class="form-group">
                <label class="required" for="password">{{ trans('cruds.user.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" value="{{ old('password', $user->password) }}">
                @if($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.password_helper') }}</span>
            </div> -->
            <div class="form-group">
                <label class="required" for="roles">Rôles</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">Select all</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">Deselect all</span>
                </div>
                <select class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="roles[]" id="roles" multiple required>
                    @foreach($roles as $id => $roles)
                        <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || $user->fonctions->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                    <div class="invalid-feedback">
                        {{ $errors->first('roles') }}
                    </div>
                @endif
                <span class="help-block">Renseignez le rôle</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Modifier
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
