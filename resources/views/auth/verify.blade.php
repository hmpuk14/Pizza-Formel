@extends('layouts.app')

@section('content')
<div class="container my-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('E-mail Addresse verifizieren') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Gerade wurde ein verifizieren-link an Deine E-Mail Adresse geschickt.') }}
                        </div>
                    @endif

                    {{ __('Bitte suche den verifizieren-Link auch in Deinem Spam Ordner.') }}
                    {{ __('verifizieren-Link erneut senden') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline ein-button-stil-secondary">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
