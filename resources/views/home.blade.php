@extends('navtemplate')

@section('content')
<div class="container mt-6">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-dark">
                <div class="card-header text-dark">{{ __('Zalogowano') }}</div>

                <div class="card-body text-dark">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Witamy w Per Capita!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
