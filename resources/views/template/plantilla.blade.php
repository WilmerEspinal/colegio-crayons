<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/41e86e3762.js" crossorigin="anonymous"></script>
    <title>@yield('titulo')</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0 !important;
            padding: 0 !important;

        }

        /* OPEN HEADER */

        header {
            background: #a08dec;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 50px;
            color: #fff;
            padding: 0 20px;
            border-bottom: 1px solid black;
        }

        /* .header_nav {
            display: flex;
            align-items: center;
            row-gap: 15px;
        } */

        .header_nav>ul {
            display: flex;
            column-gap: 10px;
            list-style: none;
        }

        .header_nav>ul>a {
            text-decoration: none;
            font-size: 18px;
            color: #fff;
        }

        /* END HEADER */

        /* OPEN MAIN */
        main {
            width: 100%;
            background: #a08dec;
        }

        /* END MAIN */

        /* OPEN FOOTER */
        footer {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 25vh;
            background: #a08dec;
            border-top: 1px solid black;
        }

        .contact_info>p {
            font-size: 18px;
            padding-right: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
            color: #fff;

        }

        .section_social>h4 {
            font-size: 20px;
            color: #fff;
        }

        .contact_info>p>i,
        .section_social>i {
            font-size: 22px;
            color: #f0bb59;
        }

        .section_social>i {
            margin-bottom: 10px;
        }

        /* END FOOTER */



        /* OPEN STYLE HOME */
        .section_home {
            display: flex;
            height: 70vh;
            width: 100%;
            background: url("https://scontent.flim10-1.fna.fbcdn.net/v/t39.30808-6/413929737_867619928486930_5975625954825849029_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHk4l6w8lW45tE6iEwcUM9SvBb5Be_Eywq8FvkF78TLCp3HWdXS6crohfx3WItkPBsiLxaFYtSwZlyv9aylPJvc&_nc_ohc=7JI0ZXL2L_kAX9DSBk7&_nc_zt=23&_nc_ht=scontent.flim10-1.fna&oh=00_AfCNOeGJZ7Vd6Erlb1AaSlIBfPhj-3OkOmG2Xf5MfYElAQ&oe=65F2304C");
            background-position: left;
            background-size: cover;
        }

        .section_home>section {
            display: flex;
            width: 100%;
        }

        .name {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .name>h1 {
            font-size: 52px;
            color: #fff;
        }


        .section_home_info {
            width: 50%;
            display: flex;
            justify-content: end;
            align-items: flex-end;
        }

        .section_home_info>div>div>h3 {
            font-size: 28px;
            text-align: center;
            color: #fff;
            font-weight: 500;
        }

        .section_home_info>div>div>p {
            font-size: 18px;
            color: #fff;
            text-align: center;
        }

        .section_home_info>div>div {
            margin: 5px 0;
        }

        .section_home_info>div {
            width: 300px;
            border: 3px solid black;
            margin: 0 20px 30px 0;
        }

        .link_more_info {
            display: flex;
            justify-content: center;
            align-items: center;
            border-top: 3px solid black;

        }

        .link_more_info>a {
            text-decoration: none;
            color: #fff;
            margin: 5px 0;
            font-size: 18px;
        }

        /* EDN STYLE HOME */


        /* OPEN STYLE PREINSCRIPCION */
        .section_preinscripcion {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            height: 100vh;
            margin: 0 auto;
            padding: 20px 0;
        }

        .container_form {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(3, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
            column-gap: 7px;
            row-gap: 8px;
        }



        .title_inscripcion {
            font-size: 28px;
            color: #fff;
            font-weight: 400;
            margin-bottom: 15px;
        }

        .btn_interesado {
            width: 150px;
            height: 30px;
            border-radius: 5px 5px 0 0;
            border: none;
        }

        .btn_agregar {
            width: 205px;
            height: 40px;
            margin-top: 15px;
            font-size: 18px;
            border-radius: 5px;
            border: none;
        }



        .form_inscripcion {
            padding: 20px 10px;
            border: 3px solid #686868;
            border-radius: 3px;
        }

        .interesado {
            font-size: 28px;
            font-weight: 400;
            color: #fff;
        }

        .container_form>label {
            display: flex;
            flex-direction: column;
            color: #fff;
            font-size: 18px;

        }

        .container_form>label>select {
            height: 35px;
            border-radius: 5px;
            border: none;
            outline: none;
            font-size: 18px;
        }

        .container_form>label>input {
            height: 35px;
            border-radius: 5px;
            border: none;
            outline: none;
            font-size: 18px;
        }

        /* END STYLE PREINSCRIPCION */

        /* OPEN STYLE NOSOTROS */
        .section_nosotros {
            width: 100%;
            height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .section_nosotros>div {
            width: 55%;
        }

        .section_nosotros>div>h2 {
            font-size: 28px;
            color: #fff;
            font-weight: 400;
            text-align: center;

        }

        .section_nosotros>div>p {
            font-size: 18px;
            color: #fff;
            text-align: justify;
            margin-top: 10px;
        }

        /* END STYLE NOSOTROS */
    </style>
</head>

<body>
    <header>
        <h3>Crayosn</h3>
        <nav class="header_nav">
            <ul>
                <a href="{{ route('pages.home') }}">Inicio</a>
                <a href="{{ route('pages.preinscripcion') }}">Inscripción</a>
                <a href="{{ route('pages.nosotros') }}">Nosotros</a>
                <a href="#">Niveles</a>
                <a href="{{ route('autenticacion.login') }}">Aula</a>
            </ul>
        </nav>
    </header>
    <main>
        @yield('contenido')
    </main>
    <footer>
        <div>
            <h3>LOGO</h3>
        </div>
        <div class="contact_info">
            <p><i class="fa-solid fa-location-dot"></i>Jr. Pachacútec 2169 Lince, Lima 15073 | A dos cuadras de la
                Universidad del Pacífico</p>
            <p><i class="fa-brands fa-whatsapp"></i>WhatsApp 944 957 528</p>
            <p><i class="fa-solid fa-envelope"></i>mcauliffelima@chma.edu.pe</p>
        </div>
        <div class="section_social">
            <h4>Siguenos</h4>
            <i class="fa-brands fa-facebook"></i>
        </div>
    </footer>
</body>

</html>
