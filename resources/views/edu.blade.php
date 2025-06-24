@extends('index')
@push('style')
<title>Education</title>
@endpush
@section('main-content')

<header class="header">
        <a href="#home" class="logo">
            Anika <span>Afrin </span>Moumeta
        </a>
        <i class="bi bi-menu-button-wide" id='menu-icon'></i>

        <nav class="navbar">
            <a href="{{url('/')}}">Home</a>
            <a href="{{url('/about')}}">About</a>
            <a href="{{url('/edu')}}">Education</a>
            <a href="{{url('/skills')}}">Skills</a>
            <a href="{{url('/projects')}}">Projects</a>
        </nav>
    </header>