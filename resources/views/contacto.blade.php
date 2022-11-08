<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/contact/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/contact//css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/contact/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="/contact/css/style.css">

    <title>Contacto</title>
</head>

<body>


    <div class="content">

        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-10">

                    <div class="row align-items-center">
                        <div class="col-lg-7 mb-5 mb-lg-0">

                            <h2 class="mb-5">Contacto</h2>

                            <form class="border-right pr-5 mb-5" action="/contacto" method="POST" id="contactForm" name="contactForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" value="{{ old('nombre') ?? ($nombre ?? '') }}" name="nombre" id="nombre" placeholder="Nombre" >
                                        @error('nombre')
                                        <i>{{$message}}</i>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="correo">Correo</label>
                                        <input type="email" class="form-control" value="{{ old('correo') ?? ($correo ?? '') }}" name="correo" id="correo" placeholder="Correo" >
                                        @error('correo')
                                        <i>{{$message}}</i>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="comentario">Comentario</label>
                                        <textarea class="form-control" name="comentario" id="comentario" cols="30" rows="7" placeholder="Comentarios" >{{ old('comentario') ?? ($comentario ?? '')}}</textarea>
                                        @error('comentario')
                                        <i>{{$message}}</i>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="Enviar mensaje" class="btn btn-primary rounded-0 py-2 px-4">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4 ml-auto">
                            <h3 class="mb-4">Genial</h3>
                            <p>Ya está a solo un paso para contactarme y muy pronto podremos trabjar juntos. Gracias por tu preferencia</p>
                            <a href="/landingpage">Regresar al inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>