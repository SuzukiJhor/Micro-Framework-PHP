<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micro Frame</title>

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

        header h1 {
            margin: 0;
            font-size: 36px;
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
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            width: 50%;
            height: 50%;
        }

        main h1 {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;

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
        <h1>Micro Frame</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        {{content}}
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> - Jhord</p>
    </footer>
</body>

</html>