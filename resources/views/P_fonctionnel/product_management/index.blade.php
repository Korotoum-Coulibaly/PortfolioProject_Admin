@include('layouts.header')
@include('layouts.sidebar')

    @include('layouts.navbar')

<div class="card container">

    <div class="card-header">
        Liste des produits
        <div class="col-lg-12 ">
            <a class="btn btn-success" href="{{ route("productmanagement.create") }}">
                Créer un nouveau produit
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
                        <th>plan</th>
                        <th>price</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $key =>$product)
                    <tr data-entry-id="{{ $product["id_product"] }}" class="bg-secondary" >
                            <td>
                            </td>
                            <td >
                                {{$product["id_product"]}}
                            </td>
                            <td class="text-dark">
                                {{$product["libelle"]}}
                            </td>
                            <td>
                                {{$product["plan"]}}
                            </td>
                            <td>
                                {{$product["price"]}}
                            </td>

                            <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('productmanagement.show', $product["id_product"]) }}">
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
