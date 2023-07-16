@include('layouts.header')
@include('layouts.sidebar')

    @include('layouts.navbar')

<div class="card container">

    <div class="card-header">
        Liste des reponses
        <div class="col-lg-12 ">
            <a class="btn btn-success" href="{{ route("officemanagement.create") }}">
                Paramétre du siège
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
                        <th>siège</th>
                        <th>Addresse</th>
                        <th>Sujet à renseigner sur le devis </th>
                        <th>Remarque à renseigner sur les devis</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($offices as $key =>$office)
                    <tr data-entry-id="{{ $office["id_office"] }}" class="bg-secondary" >
                            <td>
                            </td>
                            <td >
                                {{$office["id_office"]}}
                            </td>
                            <td class="text-dark">
                                {{$office["office_name"]}}
                            </td>
                            <td class="text-dark">
                                {{$office["location"]}}
                            </td>
                            <td class="text-dark">
                                {{$office["subject_quotation_form"]}}
                            </td>
                            <td class="text-dark">
                                {{$office["remark_subject_quotation"]}}
                            </td>
                            <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('officemanagement.show', $office["id_office"]) }}">
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
