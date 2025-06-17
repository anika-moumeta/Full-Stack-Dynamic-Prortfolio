<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anika's Portfolio</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <a href="#home" class="logo">
            Anika <span>Afrin </span><span>Moumeta</span>
        </a>
        <i class='bx bx-menu' id='menu-icon'></i>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#education">Education</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h1>Hi, It's <span>Anika</span></h1>
            <h3 class="text-animation">I'm a <span></span></h3>
            <p>I'm a web developer and designer. I'm also an undergradute student. I'm currently pursuing my bachelor's degree at Daffodil International University.</p>

            <div class="social-icons">
                <a href="#"><i class='bx bxl-github'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#"><i class='bx bxl-facebook'></i></a>
            </div>

            <div class="btn-group">
                <a href="#" class="btn">About Me</a>
                <a href="#contact" class="btn">Contacts</a>
            </div>

            <div class="home-img">
                <img src="{{asset('assets/images/profile.jpg')}}" alt="Anika's Image">
            </div>


    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>