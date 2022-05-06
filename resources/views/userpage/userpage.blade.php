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
                        <div class="tab-pane fade active show">
                            <form action="{{ route('edit_store') }}" method="POST" role="form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control mb-3" placeholder="Imię i nazwisko">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control mb-3" placeholder="E-mail" value="{{ $user->email }}">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="city" class="form-control mb-3" placeholder="Miejscowość">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="street" class="form-control mb-3" placeholder="Ulica / nr domu">
                                </div>
                                <div class="form-group">
                                <input  type="text" name="zip" class="form-control mb-3" placeholder="Kod pocztowy">
                                </div>

                                <button type="submit" class="btn">Zapisz</button>
                            </div>

                            </form>
                        </div>

                </div>
            </div>
        </div>
    </div>

@endsection
