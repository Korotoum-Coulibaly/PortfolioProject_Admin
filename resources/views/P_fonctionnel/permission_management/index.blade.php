@include('layouts.header')
@include('layouts.sidebar')

    @include('layouts.navbar')

<div class="card container">

    <div class="card-header">
        Liste des permissions
        <div class="col-lg-12 ">
            <a class="btn btn-success" href="{{ route("permissionmanagement.create") }}">
                Créer une nouvelle permission
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
                        <th>Libelle</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($permissions as $key =>$permission)
                    <tr data-entry-id="{{ $permission["id_permission"] }}" class="bg-secondary" >
                            <td>
                            </td>
                            <td >
                                {{$permission["id_permission"]}}
                            </td>
                            <td class="text-dark">
                                {{$permission["libelle"]}}
                            </td>
                            <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('permissionmanagement.show', $permission["id_permission"]) }}">
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
