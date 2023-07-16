@include('layouts.header')
@include('layouts.sidebar')

    @include('layouts.navbar')

<div class="card container">

    <div class="card-header">
        Liste des reponses
        <div class="col-lg-12 ">
            <a class="btn btn-success" href="{{ route("answermanagement.create") }}">
                Paramétrer une nouvelle reponse
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
                        <th>reponse</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($answers as $key =>$answer)
                    <tr data-entry-id="{{ $answer["id_answer"] }}" class="bg-secondary" >
                            <td>
                            </td>
                            <td >
                                {{$answer["id_answer"]}}
                            </td>
                            <td class="text-dark">
                                {{$answer["answer"]}}
                            </td>

                            <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('answermanagement.show', $answer["id_answer"]) }}">
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
