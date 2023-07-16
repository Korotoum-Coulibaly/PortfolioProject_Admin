@include('layouts.header')
@include('layouts.sidebar')

    @include('layouts.navbar')

<div class="card container">

    <div class="card-header">
        Liste des catégories
        <div class="col-lg-12 ">
            <a class="btn btn-success" href="{{ route("subcategorymanagement.create") }}">
                Créer une nouvelle sous catégorie
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
                        <th>categorie_id</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($subcategories as $key =>$subcategorie)
                    <tr data-entry-id="{{ $subcategorie["id_sub_categorie"] }}" class="bg-secondary" >
                            <td>
                            </td>
                            <td >
                                {{$subcategorie["id_sub_categorie"]}}
                            </td>
                            <td class="text-dark">
                                {{$subcategorie["libelle"]}}
                            </td>
                            <td class="text-dark">
                                {{$subcategorie["categorie_id"]}}
                            </td>
                            <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('subcategorymanagement.show', $subcategorie["id_sub_categorie"]) }}">
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
