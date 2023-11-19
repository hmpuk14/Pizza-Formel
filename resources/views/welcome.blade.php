@extends('layouts.app') <!-- erweitert inhaltlich app.blade.php -->

@section('content') <!-- hier beginnt der Inhalt mit dem Video -->
<div class="section section-1">
    <video autoplay muted id="background-video">
        <source src="{{ asset('images/video_hp_final.mp4') }}" type="video/mp4">
        Dein Browser unterstützt Video nicht - Gerne nehmen wir Deine Bestellung an!
    </video>
</div>
<a id="belegen"></a>
@include('belegen')
@endsection
