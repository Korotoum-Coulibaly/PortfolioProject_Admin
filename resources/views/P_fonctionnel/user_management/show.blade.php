@include('layouts.header')
@include('layouts.sidebar')

    @include('layouts.navbar')
<div class="card">
    <div class="card-header">
        Détails de {{ $user["name"] }}
    </div>

    <div class="card-body container">
        <div class="form-group">
            <table class="table ">
                <tbody class="bg-secondary ">
                    <tr  >
                        <th>ID</th>
                        <td>
                            {{ $user["id_user"] }}
                        </td>
                    </tr>
                    <tr >
                        <th>Name</th>
                        <td>
                            {{ $user["name"] }}
                        </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>
                            {{ $user["email"] }}
                        </td>
                    </tr>
                    <tr>
                        <th>Fonction</th>
                        <td>
                            {{ $user["function"] }}
                        </td>
                    </tr>

                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-secondary" href="{{ route('usermanagement.index') }}">
                    Back
                </a>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')


