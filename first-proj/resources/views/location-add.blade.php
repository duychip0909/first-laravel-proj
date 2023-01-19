@extends('layouts.admin.master')
@section('content')
    <livewire:location-store />
    <livewire:location-delete />

@endsection

@section('customScript')
    <script>
        $('.status-switch').on('change', function() {
            let btn = $(this);
            $.getJSON(btn.data('action'));
        })
    </script>
@endsection
