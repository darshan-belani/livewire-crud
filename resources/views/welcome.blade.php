<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    @livewireStyles
    <style type="text/css">
        .logo {
            font-size: 18px;
            color: #fff;
            text-decoration: none;
        }
        .logo:hover{
            color: #fff;
            text-decoration: none;
        }
        p {
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="container-fluid bg-dark">
    <p align="center">
        <a class="logo" href="/">Livewire CRUD</a>
    </p>
</div>
<div class="container">
    <div class="row justify-content-center mt-3">
        @livewire('post')
    </div>
</div>
@livewireScripts
</body>
</html>
