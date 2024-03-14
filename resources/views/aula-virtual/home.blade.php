<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/41e86e3762.js" crossorigin="anonymous"></script>
    <title>Aula virtual</title>
    <style>
        * {
            margin: 0 !important;
            padding: 0 !important;
            box-sizing: border-box;
        }

        header {
            display: flex;
            justify-content: space-between;
            padding: 7px 5px !important;
            background: rgb(200, 0, 255);

        }

        header>div {
            display: flex;
            align-items: center;
        }

        main {
            display: flex;
            background: lime;
            width: 100%;
            height: 97vh;
        }


        .nav_aula {
            background: rgb(200, 0, 255);
            width: 200px;
            padding-top: 30px !important;
        }

        .nav_aula>ul {
            display: flex;
            flex-direction: column;
        }

        .nav_aula>ul>a {
            text-decoration: none;
            font-size: 18px;
            padding: 0 5px !important;
            color: #fff;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            margin: 7px 3px !important;
        }
    </style>
</head>

<body>
    <header>
        <h2>LOGO</h2>
        <div>
            <div>
                <i class="fa-solid fa-user"></i>
                <p>Wilmer</p>
            </div>
            <div>
                <button>Salir</button>
            </div>
        </div>
    </header>
    <main>
        <nav class="nav_aula">
            <ul>
                <a href="">Horario</a>
                <a href="">Mis cursos</a>
                <a href="">Evaluaciones</a>
                <a href="">Asistencia</a>
            </ul>
        </nav>
        <section>
            <p>contenido</p>
        </section>
    </main>
</body>

</html>
