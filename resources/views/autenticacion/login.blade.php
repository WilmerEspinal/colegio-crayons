<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/41e86e3762.js" crossorigin="anonymous"></script>
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Montserrat", sans-serif;

        }

        main {
            width: 100%;
            height: 100vh;
            background: #a08dec;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        main>form>h2 {
            color: #fff;
            font-weight: 400;
        }

        main>form {
            width: 30%;

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 10px;
            padding: 20px 0
        }

        main>form>div {
            width: 90%;
            display: flex;
            justify-content: end;
        }

        main>form>label {
            background: rgb(255, 255, 255);
            width: 90%;
            border-radius: 5px;
            padding: 0 3px;
        }

        main>form>label>i {
            font-size: 20px;
            color: #443386;
        }

        main>form>label>input {
            height: 35px;
            width: 90%;
            border: none;
            outline: none;
            background: transparent;
            font-size: 18px;
        }

        .btn_ingresar_aula {
            width: 150px;
            height: 40px;
            border-radius: 5px;
            border: none;
            font-size: 18px;
            color: #443386;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <main>
        <form action="">
            <h2>Login</h2>
            <label>
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="Usuername">
            </label>

            <label>
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="" id="" placeholder="Password">
            </label>
            <div>
                <a href="">Forgot password?</a>
            </div>
            <button class="btn_ingresar_aula">Ingresar</button>
        </form>
    </main>
</body>

</html>
