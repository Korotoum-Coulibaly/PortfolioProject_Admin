@include('layouts.header')
@include('layouts.sidebar')

    @include('layouts.navbar')
<div class="card">
    <div class="card-header">
        Détails de la permission
    </div>

    <div class="card-body container">
        <div class="form-group">
            <table class="table ">
                <tbody class="bg-secondary ">
                    <tr  >
                        <th>ID</th>
                        <td>
                            {{ $permissions["id_permission"] }}
                        </td>
                    </tr>
                    <tr >
                        <th>Libelle</th>
                        <td>
                            {{ $permissions["libelle"] }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-secondary" href="{{ route('permissionmanagement.index') }}">
                    Back
                </a>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')


