<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Register</title>
    <style>
        body {
            background-color: #f6f6f6;
        }
        section {
            padding: 50px 0;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 20px;
        }
        .form-outline {
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
            margin-top: 10px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-secondary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
            margin-top: 10px;
        }
        .btn-secondary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>

<section>
    <div class="container">
        <form method="post">
            @csrf

            <h2 class="text-center">Register</h2>

            <div class="form-outline">
                <label class="form-label" for="name">Nama</label>
                <input type="name" name="name" id="name" class="form-control" />
            </div>

            <div class="form-outline">
                <label class="form-label" for="email">Email address</label>
                <input type="email" name="email" id="email" class="form-control" />
            </div>

            <div class="form-outline">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" />
            </div>

            <button class="btn btn-primary" type="submit">Register</button>
            <a href="/" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>