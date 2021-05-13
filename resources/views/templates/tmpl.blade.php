<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .encabezado {
            text-align: center;
            font-size: x-large;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            width: 50px;
            margin-bottom: 50px;
            
        }

        .pie{
            position: fixed;
            bottom: 0px;
            width: 100%;
            font-size: 0.7em;
            margin-bottom: 15px;
        }
    </style>

</head>
<body>
    <div class="encabezado">
        @yield("encabezado") 

        
    </div>

    <div class="contenido">
        @yield("contenido") 
        
        
        <!--<link rel="stylesheet" href="../../../public/assets/testt/css/styles.css">-->

        <!--<link rel="stylesheet" href="../../../public/Temas/node_modules/bootstrap/scss/forms/_form-control.scss">-->

        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="../../../public/css/app.css">

    </div>
    
    <div class="pie">
        @yield("pie") 

        prueba del pie de pagina
        
    </div>
</body>
</html>