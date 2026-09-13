<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini Blog</title>

    <style>
        /* ===== PAGE ===== */
        body {
            margin: 0;
            padding: 0;

            background: linear-gradient(to right,
                    #0b001a 0%,
                    #281145 40%,
                    #150034 100%);

            color: white;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* Animated Title Gradient */
            .t1 {
                width: auto;
                max-width: 300px;

                margin: 0;

                font-size: 40px;
                font-weight: normal;

                display: flex;
                align-items: center;

                font-family:
                    system-ui,
                    -apple-system,
                    BlinkMacSystemFont,
                    'Segoe UI',
                    Roboto,
                    Oxygen,
                    Ubuntu,
                    Cantarell,
                    'Open Sans',
                    'Helvetica Neue',
                    sans-serif;

                /* Gradient */
                background: linear-gradient(90deg,
                        #8b5cf6,
                        #ec4899,
                        #06b6d4,
                        #8b5cf6);

                /* Makes the gradient move */
                background-size: 300% 100%;

                /* Shows gradient only inside the text */
                background-clip: text;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;

                /* Animation */
                animation: gradient-flow 4s ease infinite;
            }

            @keyframes gradient-flow {
                0% {
                    background-position: 0% 50%;
                }

                50% {
                    background-position: 100% 50%;
                }

                100% {
                    background-position: 0% 50%;
                }
            }


        /* ===== NAVIGATION BAR ===== */
        .b {
            width: 100%;
            height: 80px;

            margin: 0;
            padding: 1rem 5%;

            display: flex;
            align-items: center;

            background: rgb(71, 71, 71);

            box-shadow:
                0px 0px 15px 0px rgb(175, 175, 175);

            box-sizing: border-box;
        }

        /* ===== NAVIGATION LINKS CONTAINER ===== */
        .nav-links {
            display: flex;
            align-items: center;

            /* Push navigation toward the right */
            margin-left: auto;

            /* Space between Contact and menu */
            margin-right: 60px;

            /* Space between each link */
            gap: 70px;
        }


        /* ===== NAVIGATION LINKS ===== */
        a {
            color: white;
            text-decoration: none;

            display: flex;
            align-items: center;

            padding-top: 0;

            font-weight: 600;

            position: relative;
            width: max-content;
        }


        /* ===== HOVER UNDERLINE ===== */
        a::after {
            content: '';

            background: repeating-linear-gradient(to right,
                    #8b5cf6,
                    #ec4899,
                    #06b6d4,
                    #8b5cf6);

            border-radius: 100px;

            width: 0;
            height: 2px;

            position: absolute;

            bottom: -5px;
            left: 0;

            transition: 100ms;
        }


        a:hover::after {
            width: 100%;
        }


        /* ===== MENU ICON ===== */
        .menu-icon {
            width: 35px;
            height: 40px;

            margin-top: 3px;
            margin-right: 0;

            object-fit: contain;
        }


        /* ==================================================
           MOBILE
           ================================================== */

        @media (max-width: 600px) {

            .b {
                height: 65px;

                padding: 1rem 3%;
            }


            /* Smaller title */
            .t1 {
                font-size: 20px;
            }


            /* Navigation links */
            .nav-links {
                gap: 15px;

                margin-right: 15px;
            }


            a {
                font-size: 14px;
            }


            /* Smaller menu */
            .menu-icon {
                width: 30px;
                height: 35px;
            }
        }


        /* ==================================================
           SMALL PHONES
           ================================================== */

        @media (max-width: 500px) {

            .b {
                padding: 1rem 2%;
            }


            .t1 {
                font-size: 20px;
            }


            .nav-links {
                gap: 10px;
                margin-right: 8px;
            }


            a {
                font-size: 12px;
            }


            .menu-icon {
                width: 27px;
                height: 32px;
            }
        }

            
    </style>
</head>


<body>

    <!-- ===== NAVIGATION ===== -->
    <div class="b">

        <!-- Logo / Title -->
        <p class="t1">
            Mini Blog
        </p>


        <!-- Navigation Links -->
        <div class="nav-links">

            <a class="link1" href="{{ route('home') }}">
                Home
            </a>

            <a class="link4" href="{{ route('posts.index') }}">
                Blog
            </a>

            <a class="link5" href="{{ route('posts.create') }}">
                Create
            </a>

            <a class="link2" href="{{ route('about') }}">
                About
            </a>

            <a class="link3" href="{{ route('contact') }}">
                Contact
            </a>

        </div>


        <!-- Menu Icon -->
        <img class="menu-icon" src="{{ asset('images/Menu.png') }}" alt="Menu">

    </div>


    <!-- ===== PAGE CONTENT ===== -->
    <main>
        @yield('content')
    </main>

</body>

</html>
