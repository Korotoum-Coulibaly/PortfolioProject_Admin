@include('layouts.header')
@include('layouts.sidebar')

    @include('layouts.navbar')

<div class="card container">

    <div class="card-header">
        Liste des roles
        <div class="col-lg-12 ">
            <a class="btn btn-success" href="{{ route("rulemanagement.create") }}">
                Créer un nouveau role
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
                    @foreach($rules as $key =>$rule)
                    <tr data-entry-id="{{ $rule["id_role"] }}" class="bg-secondary" >
                            <td>
                            </td>
                            <td >
                                {{$rule["id_role"]}}
                            </td>
                            <td class="text-dark">
                                {{$rule["libelle"]}}
                            </td>
                            <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('rulemanagement.show', $rule["id_role"]) }}">
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
