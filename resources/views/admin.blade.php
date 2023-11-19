@extends('layouts.app')

@section('content')
    <div class="container my-container">
        <div class="row justify-content-center">
            <!-- Nutzer können als Admin aufgestuft werden, oder auch wieder ein "downgrade" als user erfahren -->
            <div class="ueberschrift">
                <h1>Admin Status ändern</h1>
           </div>
            <form method="GET" action="{{ route('admin.searchUsers') }}">
                <div class="d-flex justify-content-center mb-2">
                    <input type="text" class="form-control my-style" name="query" placeholder="suche Familienname">
                </div>
                <button type="submit"class="btn btn-primary mt-2 mein-button-stil-secondary">Suchen</button><p>
            </form>
            @if(isset($users) && $users->isNotEmpty())
                @foreach($users as $user)
                    <form method="POST" action="{{ route('user.updateAdminStatus', $user) }}">
                        @csrf
                        @method('PATCH')
                        <!-- Anzeige der gefundenen user aus der Datenbank -->
                        <div class="my-flex-container">
                            <label for="is_admin_{{ $user->id }}" class="my-label">Ist {{ $user->first_name }} {{ $user->last_name }} ({{ $user->street }}, {{ $user->postal_code }} {{ $user->city }}) Admin?</label>
                            <div class="custom-dropdown">
                                <input type="hidden" name="is_admin" id="is_admin_{{ $user->id }}" value="{{ $user->is_admin ? '1' : '0' }}">
                                <div class="selected-option" id="selected_option_{{ $user->id }}">
                                    {{ $user->is_admin ? 'Ja' : 'Nein' }}
                                </div>
                                <div class="options">
                                    <div class="option" data-value="1" data-user-id="{{ $user->id }}">Ja</div>
                                    <div class="option" data-value="0" data-user-id="{{ $user->id }}">Nein</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3 mb-lg-5">
                            <button type="submit" class="btn btn-primary mein-button-stil-secondary">Aktualisieren</button>
                        </div>
                    </form>
                @endforeach
            @else
                <p>Kein Benutzer gefunden.</p>
            @endif
        </div>
    </div>
    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
@endsection
