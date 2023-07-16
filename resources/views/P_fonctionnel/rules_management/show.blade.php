@include('layouts.header')
@include('layouts.sidebar')

    @include('layouts.navbar')
<div class="card">
    <div class="card-header">
        Détails du role
    </div>

    <div class="card-body container">
        <div class="form-group">
            <table class="table ">
                <tbody class="bg-secondary ">
                    <tr  >
                        <th>ID</th>
                        <td>
                            {{ $rules["id_role"] }}
                        </td>
                    </tr>
                    <tr >
                        <th>Libelle</th>
                        <td>
                            {{ $rules["libelle"] }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-secondary" href="{{ route('rulemanagement.index') }}">
                    Back
                </a>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')


