@extends('layouts.admin.master')
@section('content')
    <livewire:location-filter />
    <livewire:location-card />

    @livewireScripts
@endsection
