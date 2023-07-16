@include('layouts.header')
@include('layouts.sidebar')

    @include('layouts.navbar')

<div class="card container">

    <div class="card-header">
        Liste des prospects
        <div class="col-lg-12 ">
            <a class="btn btn-success" href="{{ route("prospectmanagement.create") }}">
                Ajouter un prospect
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
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Sexe </th>
                        <th>Entreprise</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($prospects as $key =>$prospect)
                    <tr data-entry-id="{{ $prospect["id_prospect"] }}" class="bg-secondary" >
                            <td>
                            </td>
                            <td >
                                {{$prospect["id_prospect"]}}
                            </td>
                            <td class="text-dark">
                                {{$prospect["name_prospect"]}}
                            </td>
                            <td class="text-dark">
                                {{$prospect["firstName_prospect"]}}
                            </td>
                            <td class="text-dark">
                                {{$prospect["sexe"]}}
                            </td>
                            <td class="text-dark">
                                {{$prospect["allied_enterprise"]}}
                            </td>
                            <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('prospectmanagement.show', $prospect["id_prospect"]) }}">
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
