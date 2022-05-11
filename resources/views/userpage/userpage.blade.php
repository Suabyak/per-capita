@extends('navtemplate')

@section('content')

    <div class="container light-style flex-grow-1 container-p-y mt-6">

        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action" href="">Dane do wysyłki</a>
                    </div>
                    <div class="list-group list-group-flush account-settings-links">
                        <form action="{{ route('edit_store') }}" method="POST" role="form">
                          @csrf
                          <input type="hidden" name="type" value="delete">
                          <input type="hidden" name="id" value="{{ $user->id }}">
                          <button type="submit" class="btn text-left ps-4">Usuń konto</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show">
                            <form action="{{ route('edit_store') }}" method="POST" role="form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="type" value="store">
                                <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="card-body">


                                <label for="email" class="col-form-label pb-0 text-md-end text-dark">{{ __('Imię i nazwisko') }}</label>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control mb-3 mt-1" value="{{ $user->name }}">
                                </div>

                                <label for="email" class="col-form-label pb-0 text-md-end text-dark">{{ __('E-mail') }}</label>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control mb-3 mt-1" value="{{ $user->email }}" readonly>
                                </div>

                                <label for="email" class="col-form-label pb-0 text-md-end text-dark">{{ __('Miejscowość') }}</label>
                                <div class="form-group">
                                    <input type="text" name="city" class="form-control mb-3 mt-1" value="{{ $user->city }}">
                                </div>

                                <label for="email" class="col-form-label pb-0 text-md-end text-dark">{{ __('Ulica / nr domu') }}</label>
                                <div class="form-group">
                                    <input type="text" name="street" class="form-control mb-3 mt-1" value="{{ $user->street }}">
                                </div>

                                <label for="email" class="col-form-label pb-0 text-md-end text-dark">{{ __('Kod pocztowy') }}</label>
                                <div class="form-group">
                                <input  type="text" name="zip" class="form-control mb-3 mt-1" value="{{ $user->zip }}">
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
