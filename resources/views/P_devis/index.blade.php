@include('layouts.header')
@include('layouts.sidebar')

    @include('layouts.navbar')

<div class="card container">

    <div class="card-header">
        Liste des devis
        <div class="col-lg-12 ">
            <a class="btn btn-success" href="{{ route("quotemanagement.create") }}">
                Paramétrer une nouveau devis
            </a>
        </div>
    </div>

</div>



@include('layouts.footer')
