<?php
    if(isset($_POST["login"]) && isset($_POST["password"]) && $_POST["login" ] != null){
        $data = $_POST['login'].'@|@|@'.$POST['password'];
        if(file_get_contents(''))
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="" class="ggg" method="POST">
                    <div class="mb-3">
                        <lable for= "login" class="form-lable">Login</lable>
                        <input type="text" class="form-control" id="login" name="login">
                    </div>


                    <div class="mb-3">
                        <lable for="password"class="form-lable">Password</lable>
                        <textarea name="password" id="password" class="form-control"></textarea>
                    </div>
                    


                    <div class="mb-3">
                        <button class="btn btn-primary">Registration</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>