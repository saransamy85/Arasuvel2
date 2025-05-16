<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="module" src="https://unpkg.com/@material/web/all.js?module"></script>


    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>

    <title>Login</title>
</head>

<body class="bg-black">
    <div class="container d-flex justify-content-center align-items-center " style="height:100vh;">
        <div class="p-3">
            <div class="login">
                <form method="post" action="{{route('loginattempt')}}">
                    @csrf
                    <div class="mb-3">
                        <h3 class="text-white text-center text-uppercase">Login</h3>
                        <md-filled-text-field label="Email Address" type="email" name="email" required>
                        </md-filled-text-field>
                        <!-- <input type="email" name="email" class="form-control" required placeholder="Email Address"> -->
                        <br>
                        <br>
                        <md-filled-text-field label="Password" type="password" name="password" required>
                        </md-filled-text-field>
                    </div>
                    <div class="mb-3">
                        <!-- <input type="submit" class="btn btn-success" value="Login"> -->
                        <md-filled-button>Login</md-filled-button>
                    </div>
                </form>

              
                @if(session('error'))
                <div class="text-danger">{{session('error')}} !</div>
                @endif
            </div>
        </div>
    </div>
</body>

</html>