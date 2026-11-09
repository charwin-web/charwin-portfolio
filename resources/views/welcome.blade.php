<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Charwin Profile | Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Georgia, serif;
            background: #101820;
            color: white;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 8%;
            background: #101820;
        }

        .logo {
            color: #d4af70;
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            transition: .3s;
        }

        nav a:hover {
            color: #d4af70;
        }

        .hero {
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 60px 12%;
            gap: 40px;
        }

        .hero-content {
            max-width: 650px;
        }

        .hero h3 {
            color: #d4af70;
            letter-spacing: 4px;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: clamp(42px, 7vw, 75px);
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #d4af70;
        }

        .hero p {
            color: #c5c5c5;
            font-size: 18px;
            line-height: 1.8;
        }

        .btn {
            display: inline-block;
            margin-top: 30px;
            padding: 14px 30px;
            border: 1px solid #d4af70;
            color: #d4af70;
            text-decoration: none;
            transition: .3s;
        }

        .btn:hover {
            background: #d4af70;
            color: #101820;
        }

        /* PROFILE PICTURE */
        .profile {
            width: 280px;
            height: 350px;
            border: 3px solid #d4af70;
            border-radius: 140px 140px 20px 20px;
            overflow: hidden;
            flex-shrink: 0;
            box-shadow: 0 0 25px rgba(212,175,112,.2);
        }

        .profile img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        section {
            padding: 90px 12%;
        }

        section h2 {
            color: #d4af70;
            font-size: 38px;
            margin-bottom: 25px;
        }

        section p {
            color: #c5c5c5;
            line-height: 1.9;
            max-width: 750px;
            font-size: 17px;
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 25px;
        }

        .skill {
            border: 1px solid #d4af70;
            padding: 15px 25px;
            color: #d4af70;
            transition: .3s;
        }

        .skill:hover {
            background: #d4af70;
            color: #101820;
            transform: translateY(-5px);
        }

        footer {
            text-align: center;
            padding: 30px;
            border-top: 1px solid #333;
            color: #aaa;
        }

        @media (max-width: 750px) {
            nav {
                flex-direction: column;
                gap: 20px;
            }

            nav a {
                margin: 0 7px;
                font-size: 13px;
            }

            .hero {
                flex-direction: column-reverse;
                text-align: center;
            }

            .profile {
                width: 220px;
                height: 270px;
            }

            section {
                padding: 65px 8%;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">CHARWIN.</div>

        <div>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

    <div class="hero" id="home">

        <div class="hero-content">

            <h3>WELCOME TO MY PORTFOLIO</h3>

            <h1>Hello, I'm <span>Charwin.</span></h1>

            <p>
                A passionate individual interested in
                technology, creativity, and web development.
                I love learning new things and building
                meaningful digital experiences.
            </p>

            <a href="#about" class="btn">
                EXPLORE MY PROFILE
            </a>

        </div>

        <!-- YOUR PROFILE PICTURE -->
        <div class="profile">
            <img src="{{ asset('images/charwin.jpg') }}"
                 alt="Charwin Profile Picture">
        </div>

    </div>

    <section id="about">

        <h2>About Me</h2>

        <p>
            Hello! My name is Charwin. I am passionate
            about technology and personal development.
            I enjoy exploring new ideas, learning
            programming, and creating modern websites.
            My goal is to continuously improve my skills
            and become a successful web developer.
        </p>

    </section>

    <section id="skills">

        <h2>My Skills</h2>

        <p>
            Here are some of the technologies and skills
            I am currently learning and developing.
        </p>

        <div class="skills">
            <div class="skill">HTML</div>
            <div class="skill">CSS</div>
            <div class="skill">PHP</div>
            <div class="skill">Laravel</div>
            <div class="skill">Web Development</div>
        </div>

    </section>

    <section id="contact">

        <h2>Get In Touch</h2>

        <p>
            I am open to opportunities, collaborations,
            and new connections. Feel free to reach out!
        </p>

    </section>

    <footer>
        © 2026 Charwin Profile. All Rights Reserved.
    </footer>

</body>
</html>
