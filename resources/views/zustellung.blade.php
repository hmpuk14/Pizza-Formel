<!-- Rand links und rechts für Video entfernen -->
@php
    $mainClass = 'no-padding';
@endphp
@extends('layouts.app')

@section('content')
    <div class="video-zustellung">
        <video autoplay muted id="meinstyle-video">
            <source src="{{ asset('images/video_zustellung_final.mp4') }}" type="video/mp4">
            Dein Browser unterstützt Video nicht - Die Lieferung ist unterwegs!
        </video>
        <button onclick="openInvoicePrintWindow('{{ route('invoice.pdf', $orderId) }}');" class="btn btn-primary mein-button-stil-transp">Rechnung PDF</button>
    </div>

    <script>
        function openInvoicePrintWindow(url) {
            window.open(url, '_blank');
        }
    </script>
@endsection
