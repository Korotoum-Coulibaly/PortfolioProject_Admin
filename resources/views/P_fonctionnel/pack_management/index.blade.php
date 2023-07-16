@include('layouts.header')
@include('layouts.sidebar')

    @include('layouts.navbar')

<div class="card container">

    <div class="card-header">
        Liste des packs
        <div class="col-lg-12 ">
            <a class="btn btn-success" href="{{ route("packmanagement.create") }}">
                Créer un nouveau pack
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
                        <th>libelle</th>
                        <th>sub_categorie</th>
                        <th>microsoft_price</th>
                        <th>sale_price</th>
                        <th>dollar_cost</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($packs as $key =>$pack)
                    <tr data-entry-id="{{ $pack["id_pack"] }}" class="bg-secondary" >
                            <td>
                            </td>
                            <td >
                                {{$pack["id_pack"]}}
                            </td>
                            <td class="text-dark">
                                {{$pack["libelle"]}}
                            </td>
                            <td>
                                {{$pack["sub_categorie_id"]}}
                            </td>
                            <td>
                                {{$pack["microsoft_price"]}}
                            </td>
                            <td>
                                {{$pack["sale_price"]}}
                            </td>
                            <td>
                                {{$pack["dollar_cost"]}}
                            </td>
                            <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('packmanagement.show', $pack["id_pack"]) }}">
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
