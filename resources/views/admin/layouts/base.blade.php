<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
     <link rel="stylesheet" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="module" src="https://unpkg.com/@material/web/all.js?module"></script>
    <!--Material icon----->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL@20..48,100..700,0..1" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL@20..48,100..700,0..1"  rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL@20..48,100..700,0..1" rel="stylesheet">
     <script type="importmap">
      {
        "imports": {
          "@material/web/": "https://esm.run/@material/web/"
        }
      }
    </script>
    <!-- Import Material Web Components -->
    <script type="module">
        import '@material/web/all.js';
    </script>
    <!--EndMaterial icon----->

      <!--chart.js cdn--->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <!--chart.js cdn--->
    
    <link rel="stylesheet" href="{{asset('css/admin/main.css')}}">
    <title>Admin panel</title>
</head>

<body>
    <div class="p-3">
        <div class="row g-2">
            <div class="col-lg-2">
                <div class="menu">
                    @yield('menu')
                </div>
            </div>
            <div class="col-lg-10">
                <div class="cont">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
</body>

</html>