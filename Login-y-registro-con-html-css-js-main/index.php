
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Login-y-registro-con-html-css-js-main\styles.css">
  <link rel="stylesheet" href="Login-y-registro-con-html-css-js-main\bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <title>School App</title>
</head>
<body>

  <!-- Video de fondo -->

  <video src="/img/videoFondo.mp4" autoplay loop></video>



  <header>

  <!-- Navegador (O menú del header) -->

    <nav class="navbar navbar-expand-lg bg-light p-lg-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"></a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="Login-y-registro-con-html-css-js-main\Login.php">Iniciar sesión</a></li>
            <li class="nav-item dropdown">
          </ul>

        </div>
      </div>
    </nav>

    <!-- Anuncio del header -->

    <div class="containerHeader">
      <div class="descripcion">
        <h1>Inscirbe a tu hijo donde quiera que estés <br> y en la escuela de tu preferencia</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem soluta eveniet fuga, quod non odit nemo a animi ipsam dolor dicta velit laudantium ipsa cum quas facere illum earum? Sapiente?
        </p>

        <button>¡Empieza ya!</button>
      </div>
       <img src="/img/Estudiando.jpg" alt="">
    </div>

  </header>

  <section>
    <div class="container">
      <h2>Todo lo que necesitas para inscribir a tu hijo sin tener que hacer fila y desde la comodidad de tu hogar<h2>
        <hr>
        <i>Pasos a seguir para poder realizar el proceso de inscripción o reeinscripción</i>
    </div>

    <div class="instrucciones">

      <div class="card">
        <img src="/img/imagenPrueba.png"  alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>

      <div class="card">
        <img src="/img/imagenPrueba.png"  alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>

      <div class="card">
        <img src="/img/imagenPrueba.png"  alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>

      <div class="card">
        <img src="/img/imagenPrueba.png"  alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      
    </div>
  </section>



  <section>
    
    <div class="container2">
      <div class="contacto">
      <h3>Conctatanos</h3>
      <p>Si necesitas soporte para realizar cualquiera de los procesos de inscripción contactanos, estaremos comunicandonos con usted en la mayor brevedad prosible</p>
      <p><i>Mantenemos la confidencialidad de los datos enviados</i></p>
      <button class="botonEnviar">Enviar</button>
    </div>

    <hr class="v-line2">

      <form action="">
        <label for=""><i>Nombre completo</i></label>
        <input type="text" placeholder="Your Name">
        <label for=""><i>Telefono</i></label>
        <input type="number" placeholder="Your Name">
        <label for=""><i>Asunto</i></label>
        <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
        
      </form>
    </div>
  </section>

  <footer>
   
    <div class="redes">
      <ul class="ul">
        <hr class="line">
        <li class="li"><i class="fa-brands fa-instagram"></i></li>
        <li class="li"><i class="fa-brands fa-facebook"></i></li>
        <li class="li"><i class="fa-brands fa-whatsapp"></i></li>
        <hr class="line">
      </ul>
      
    </div>

     <div class="pieDePagina">
      <div class="nosotros">
        <h2>Nosotros</h2> 
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad atque id rerum totam quia laudantium recusandae quo dolorem veritatis esse officia magnam voluptate nihil, quibusdam ab harum alias blanditiis unde?</p> 
      </div>

      <div class="mision">
        <h2>Mision</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam ut rerum reiciendis tempore expedita nostrum, eaque fugit id ipsum sint veritatis eligendi doloremque, accusantium amet quis soluta et dolorem hic!</p>
      </div>
     </div>
  </footer>








  <script src="/bootstrap/bootstrap-5.2.1-dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/1875f1b259.js" crossorigin="anonymous"></script>
</body>
</html>