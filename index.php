<?php 
if(isset($_POST['submit'])){
    $to = "antonio.delcid@camasfacenco.net"; // this is your Email address
    $from = $_POST['formemail1']; // this is the sender's Email address
    $formname1 = $_POST['formname1'];
    $formphone1 = $_POST['formphone1'];
    $formmsg1 = $_POST['formmsg1'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $formname1 . " " . $formphone1 . " wrote the following:" . "\n\n" . $_POST['formmsg1'];
    $message2 = "Here is a copy of your message " . $formname1 . "\n\n" . $_POST['formmsg1'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Confort Life</title>

  <link rel="stylesheet" href="CSS/styles.css">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.typekit.net/kro1arl.css">

  <link  rel="shortcut icon" href="IMG/tortoise.ico" />

</head>
<body>

  <script language="Javascript">
    document.oncontextmenu = function() {
       return false
    }
    function right(e) {
       var msg = "Comfort Life, todos los derechos reservados.";
       if (navigator.appName == 'Netscape' && e.which == 3) {
          alert(msg); //- Si no quieres asustar a tu usuario entonces quita esta linea...
          return false;
       }
       else if (navigator.appName == 'Microsoft Internet Explorer' && event.button==2) {
          alert(msg); //- Si no quieres asustar al usuario que utiliza IE,  entonces quita esta linea...
                         //- Aunque realmente se lo merezca...
       return false;
       }
    return true;
 }
 document.onmousedown = right;
 </script>
  
  <!--Navbar -->
  <nav id="navbar1" class="mb-4 navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#"><img id="img1" src="IMG/Logo Comfort LIfe B.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item text-nowrap active">
                <a class="nav-link" href=""></i> Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="productos"></i> Productos</a>
            </li>
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="covers"></i> Covers</a>
            </li>
            <li class="nav-item text-nowrap">
              <a id="NuevaColeccion" class="nav-link" href="nueva_coleccion"></i> Nueva Colección</a>
          </li>
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="galeria"></i> Galeria</a>
          </li>
          <li class="nav-item text-nowrap">
            <a class="nav-link" href="garantias"></i> Servicio al cliente</a>
        </li>
    
        </ul>
    </div>
  </nav> 
  

  <div class="container">

    <p class="texto1">Camas con tecnología americana</p>
    <a  id="productosbtn10" href="productos.html" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Catálogo  <i class="fas fa-arrow-alt-circle-right"></i></a>
    <a  id="productosbtn5" href="productos.html" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Catálogo  <i class="fas fa-arrow-alt-circle-right"></i></a>
    <div class="row">
    <img id="img2" src="IMG/Chica.jpg">
    <p class="texto1-1">Camas con tecnología americana</p>
    <a  id="productosbtn2" href="productos.html" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Catálogo  <i class="fas fa-arrow-alt-circle-right"></i></a>
    </div>
  
  </div>


 <div class="container">

  <p   class="texto3">Inspirados en las olas del mar</p>
  <a  id="productosbtn1" href="productos.html" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Productos  <i class="fas fa-arrow-alt-circle-right"></i></a>
  <a  id="productosbtn6" href="productos.html" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Productos  <i class="fas fa-arrow-alt-circle-right"></i></a>
  <img id="img6" src="IMG/Nueva Colección Comfort Life.jpg">
  <div class="row">
      <p class="texto3-1">Inspirados en las olas del mar</p>
      </div>
      <div class="row">
      <a  id="productosbtn" href="productos.html" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Nueva Colección  <i class="fas fa-arrow-alt-circle-right"></i></a>
      </div>
  </div>

  <div class="container">

    <div class="row">
    <!-- <img id="img9" src="IMG/Logo Comfort LIfe (A).png">
    <img id="img9-1" src="IMG/Logo Comfort LIfe (A).png">
    <img id="img9-2" src="IMG/Logo Comfort LIfe (A).png">-->
    <img id="img8" src="IMG/Chico.jpg"> 

    
    <form id="formularioc" name="formularioc" method="post" action="">
      <h1>Contacto</h1>
      <h5>¿Quieres vender Camas Comfort Life? Llena este formulario con tus datos y pronto nos estaremos comunicando contigo.</h5>
      <hr color="white" size="5">
      <div class="form-group">
        <label for="formname">Nombre:</label>
        <input id="formname" name="formname" type="text" class="form-control">
      </div>

      <div class="row" >
        <div class="col">
      <div class="form-group">
        <label for="formphone">Teléfono:</label>
        <input id="formphone" name="formphone" type="number" class="form-control">
      </div>
      </div>
      <div class="col">
      <div class="form-group">
        <label for="formemail">Correo electrónico:</label>
        <input id="formemail" name="formemail" type="email" class="form-control">
      </div>
      </div>
      
      </div>

      <div class="form-group">
        <label for="formmsg">Mensaje:</label>
        <textarea id="formmsg" name="formmsg" cols="30" rows="10"></textarea>
      </div>
      <button id="enviar" type="submit" class="btn btn-default">Enviar</button>
    </form>


    <form id="formularioc1" name="formularioc1" method="post" action="" >
      <h3>Contacto</h3>
      <h6>Llena el formulario y pronto nos comunicaremos contigo</h6>
      <hr color="white" size="5">
      <div class="form-group">
        <label for="formname1">Nombre:</label>
        <input name="formname1" type="text" id="formname1" class="form-control" value="">
      </div>
      <div class="form-group">
        <label for="formphone1">Teléfono:</label>
        <input id="formphone1" name="formphone1" type="number" class="form-control" value="">
      </div>
      <div class="form-group">
        <label for="formemail1">Correo:</label>
        <input id="formemail1" name="formemail1" type="email" class="form-control" value="">
      </div>
      <div class="form-group">
        <label for="formmsg1">Mensaje:</label>
        <textarea id="formmsg1" name="formmsg1" cols="30" rows="10" value=""></textarea>
      </div>
      <button id="enviar1" type="submit" class="btn btn-default">Enviar</button>
    </form>

    </div>
  </div>

  <br>
  <br>
  
  <section class="py-5 bg-voilet text-white">
    <div class="container">
        <div class="row">
          <div class="col-md-1">

          </div>
            <div class="col-md-7">
                <h3><b>Contactanos</b></h3>
                <ul class="list-unstyled mt-3">
                  <p></p>
                    <div class="mb-2"></div>
                    <li><i class="fas fa-home"></i><a class="text-white">  18 Av. 39-24 Zona 12, Guatemala, Guatemala C.A.</a></li>
                    <p></p>
                    <div class="mb-2"></div>
                    <li><i class="fas fa-envelope"></i><a class="text-white"> infor@camasfcomfortlife.com</a></li>
                    <p></p>
                    <div class="mb-2"></div>
                    <li><i class="fas fa-mobile-alt"></i><a class="text-white">  PBX: 2310-6500</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                    <ul class="list-unstyled mt-0">
                    <li><a href="#" class="text-white">Inicio</a></li>
                    <li><a href="productos.html" class="text-white">Productos</a></li>
                    <li><a href="materiales.html" class="text-white">Materiales</a></li>
                    <li><a href="garantias.html" class="text-white">Garantía</a></li>
                    <li><a href="contacto.html" class="text-white">Contacto</a></li>
                    <li><i id="facebooksquare" class="fab fa-facebook-square fa-2x"></i><a href="#" class="text-white"></a>
                    <i id="instagramsquare" class="fab fa-instagram fa-2x"></i><a href="#" class="text-white"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

</html> 