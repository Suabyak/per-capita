@extends('navtemplate')

@section('content')

    <div class="container light-style flex-grow-1 container-p-y mt-6">

        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="">Dane do wysyłki</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="">

                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-3" placeholder="Imię">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control mb-3" placeholder="Nazwisko">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control mb-3" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control mb-3" placeholder="Miejscowość">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control mb-3" placeholder="Ulica / nr domu">
                                </div>
                                <div class="form-group">
                                <input  type="text" class="form-control mb-3" placeholder="Kod pocztowy">
                                </div>

                            </div>
                        </div>

                </div>
            </div>
        </div>

        <div class="text-right mt-3">
            <button type="button" class="btn">Zapisz</button>
        </div>

    </div>

@endsection
