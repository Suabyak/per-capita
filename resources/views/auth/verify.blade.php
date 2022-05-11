@extends('navtemplate')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-6 ">
            <div class="card text-dark">
                <div class="card-header">{{ __('Zweryfikuj swój adres e-mail!') }}</div>



                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link z weryfikacją został wysłany na Twój adres e-mail.') }}
                        </div>
                    @endif

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Kliknij, aby wysłać e-mail z weryfikacją') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
