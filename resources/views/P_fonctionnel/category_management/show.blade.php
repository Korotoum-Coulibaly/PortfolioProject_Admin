@include('layouts.header')
@include('layouts.sidebar')

    @include('layouts.navbar')
<div class="card">
    <div class="card-header">
        Détails de la catégorie
    </div>

    <div class="card-body container">
        <div class="form-group">
            <table class="table ">
                <tbody class="bg-secondary ">
                    <tr  >
                        <th>ID</th>
                        <td>
                            {{ $categories["id_categorie"] }}
                        </td>
                    </tr>
                    <tr >
                        <th>Libelle</th>
                        <td>
                            {{ $categories["libelle"] }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-secondary" href="{{ route('categorymanagement.index') }}">
                    Back
                </a>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')


