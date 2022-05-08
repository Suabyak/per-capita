@extends('navtemplate')

@section('title')
    {{ $title }}
@endsection

@section('content')
<header class="page-header">
    <div class="bg-img-order">
        <div class="bg-img-shadow-order">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-3 text-center">
                        <h1 class="fancy">Menu</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4>Podstawą naszej pizzy jest <strong>ciasto</strong>, które wyrasta przez 24 godziny.</h4>
                    </div>
                </div>

                <section class="order">

                    <div class="row">
                        <div class="col-lg-6 fancy">
                            <h1 class="menu-h1">Pizza</h1>
                        </div>
                    </div>

                    @livewire('pizza-order')

                </section>
            </div>
        </div>
    </div>
</header>

@endsection
