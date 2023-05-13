@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ __('You are logged in!') }}</p>

                    <h5><strong>Your Personal Savings:</strong> {{ number_format(Auth::user()->referral_count * 250) }} </h5>

                    <p><strong>Your Referral Link:</strong> <a href="{{ url('/referral/') }}/{{ Auth::user()->referral_code }}">Link</a></p>
                    <p><strong>Your Referral Code:</strong> {{ Auth::user()->referral_code }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
