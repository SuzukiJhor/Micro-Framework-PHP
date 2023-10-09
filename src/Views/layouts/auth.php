<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micro Frame - auth</title>

    <style>
        *,
        body {
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }


        header nav ul {
            list-style: none;
            padding: 0;
        }

        header nav ul li {
            display: inline;
            margin-right: 20px;
        }

        header nav ul li:last-child {
            margin-right: 0;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
          
          
            margin: 15px auto;
            width: 50%;
            height: 50%;
        }

        .registration-container,
        .login-container {
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            width: 300px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .registration-container h2,
        .login-container h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group button {
            background-color: #000000;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-group button:hover {
            background-color: #008000;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 20px 0;
        }

        footer p {
            margin: 0;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            </ul>
        </nav>
    </header>
    <main>
        {{content}}
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> - JhordanS.</p>
    </footer>
</body>

</html>