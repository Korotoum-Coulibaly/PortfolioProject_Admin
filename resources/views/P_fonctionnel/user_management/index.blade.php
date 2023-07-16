@include('layouts.header')
@include('layouts.sidebar')

    @include('layouts.navbar')

<div class="card container">

    <div class="card-header">
        Liste des utilisateurs
        <div class="col-lg-12 ">
            <a class="btn btn-success" href="{{ route("usermanagement.create") }}">
                Créer un nouvel utilisateur
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class=" table  datatable datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Sexe</th>
                        <th>Fonction</th>
                        <th>Email</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key =>$user)
                    <tr data-entry-id="{{ $user["id_user"] }}" class="bg-secondary" >
                            <td>
                            </td>
                            <td >
                                {{$user["id_user"]}}
                            </td>
                            <td class="text-dark">
                                {{$user["name"]}}
                            </td>
                            <td>
                                {{$user["sexe"]}}
                            </td>
                            <td>
                                {{$user["function"]}}
                            </td>
                            <td>
                                {{$user["email"]}}
                            </td>
                            <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('usermanagement.show', $user["id_user"]) }}">
                                        Voir
                                    </a>

                                    <a class="btn btn-xs btn-info" href="">
                                        Modifier
                                    </a>

                                    <form action="" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="Supprimer">
                                    </form>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@include('layouts.footer')
