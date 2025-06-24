@extends('index')
@push('style')
<title>Welcome page</title>
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

    <section class="home" id="home">
        <div class="home-content">
            <div>
                <h1>Hi, It's <span>Anika</span></h1>
            <h3 class="text-animation">I'm a <span></span></h3>
            <p>web developer and designer. I'm also an undergradute student. I'm currently pursuing my bachelor's degree at Daffodil International University.</p>

            <div class="social-icons">
                <a href="#"><i class="bi bi-github"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
            </div>

            <div class="btn-group">
                <a href="#" class="btn">About Me</a>
                <a href="#contact" class="btn">Contacts</a>
            </div>
            </div>

            <div class="home-img">
                <img src="{{asset('assets/images/profile.jpg')}}" alt="Anika's Image">
            </div>
        </div>
    </section>