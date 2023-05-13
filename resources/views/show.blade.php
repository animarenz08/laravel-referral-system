@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3>User Information</h3>

        <p><strong>ID:</strong> {{ $user->id }}</p>
        <p><strong>Name:</strong> {{ $user->name }} </p>
        <p><strong>Email:</strong> {{ $user->email }} </p>
        <p><strong>Referral Code:</strong> {{ $user->referral_code }} </p>

    </div>
</div>
@endsection