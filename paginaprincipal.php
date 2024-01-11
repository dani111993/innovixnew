<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>Innovix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles\cart_style.css">
    <link rel="stylesheet" href="styles\main_style.css">
    <link rel="stylesheet" href="styles\index_style.css">
    <link rel="stylesheet" href="styles\footer_style.css">


    <script src="src\main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7e91ed712c.js" crossorigin="anonymous"></script>
    <style>
        .winterSale {
    background-image: url('../imagenes/winterSaleBackground.webp');
    padding: 20px;
    margin: 20px;
    border-radius: 10px;
    border: 1px solid #ccc;
    text-align: left;
    font-size: 20px;
    font-weight: bold;
    color: #212934;
    box-shadow: 0 0 10px #ccc;
}

.winterSale h2 {
    font-family: 'Dancing Script', cursive;
    font-size: 50px;
    padding-left: 5%;
}

.winterSale h3 {
    font-family: 'Dancing Script', cursive;
    font-size: 30px;
    padding-left: 5%;
}
.winterSale button:hover {
    background-color: #212934;
}
.winterSale button {
    font-family:'Dancing Script', cursive;
    font-size: 20px;
}

.videoPromo {
    max-width: 100%; 
    max-height: 850px; 
    border-radius: 5%;
    padding: 10px;
    margin: 10px;
    overflow: hidden; 
}

.videoPromo video {
    width: 100%;
    height: 100%;
    object-fit: cover; 
    border-radius: 5%;
}

.mensaje {
    text-align: center;
    font-family: 'Dancing Script', cursive;
    font-size: 30px;
    padding-left: 5%;
    padding-top: 5%;
    padding-bottom: 5%;
    color: #212934;
}

.overlay {
    position: absolute;
    top: 100%;
    left: 8%;
    transform: translateY(-50%);
    width: 30%; 
    padding: 20px;
    box-sizing: border-box;
    background-color: rgba(0, 0, 0, 0.5); 
    color: white; 
    text-align: left;
    font-family: Georgia, 'Times New Roman', Times, serif;
}
.overlay a {
    color: white; 
}

.overlay h1 {
    font-size: 55px; 
    margin-bottom: 10px;
    
}

.overlay button:hover {
    background-color: #212934;
}

.contact-info{
  font-size: 12px;
}
.nav-links{
  font-size: 19px;
  font-weight: 500;
  color: #212934;
}
.nav-items{
  margin-right: 100px;
  padding: 5px;
}
.nav-icon{
  margin-right: 21px;
}
.cart{
  top: 1rem;
  right: 3.4rem;
  padding: 0px 6px;
  font-size: small;
  background: rgb(221, 221, 221);
}
.user{
  top: 1rem;
  right: 0.3rem;
  padding: 0px 6px;
  font-size: small;
  background: rgb(221, 221, 221);
}

li:hover{
  background-color: rgb(33,37,41);
  border-radius: 80%;
  & .nav-links{
    color: rgb(221, 221, 221);
  }

}

.nombre_compania{
  color: rgb(33,37,41);
}
a:link { 
  text-decoration: none; 
} 
a:visited { 
  text-decoration: none; 
} 
a:hover { 
  text-decoration: none; 
} 
a:active { 
  text-decoration: none; 
}

footer {
    background-color: #212934; /* Set your desired background color */
    color: white; /* Set your desired text color */
    text-align: center;
    padding: 10px;
    position: bottom;
    bottom: 0;
    width: 100%;
}

.footer-links {
    display: flex;
    justify-content: space-evenly;
    margin-bottom: 10px;
}

.footer-links a {
    color: white;
    text-decoration: none;
}

.footer-links a:hover {
    text-decoration: underline;
}

      @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
    </style>
</head>
<body>
    <header>
      <script src="cart.js"></script>
      <div>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container">
             <div class="w-100 d-flex justify-content-between">
              <div>
                <i class="fa-solid fa-envelope text-light contact-info"></i>
                <a href="https://mail.google.com" target="_blank" class="navbar-sm-brand text-light text-decoration-none
                       contact-info">Innofix@gmail.com
                </a>
                <i class="fa-solid fa-phone contact-info text-light"></i>
                <a href="" class="navbar-sm-brand text-white text-decoration-none
                       contact-info">246-159-5454</a>
              </div>
                     <div>
                       <a href="https://www.facebook.com" target="_blank" class="text-white">
                           <i class="fa-brands fa-facebook me-2"></i></a>
                       <a href="https://www.instagram.com" target="_blank" class="text-white">
                           <i class="fa-brands fa-instagram me-2"></i></a>
                       <a href="https://www.linkedin.com" target="_blank" class="text-white">
                           <i class="fa-brands fa-linkedin me-2"></i></a>
                       <a href="https://www.twitter.com" target="_blank" class="text-white">
                           <i class="fa-brands fa-twitter me-2"></i></a>
                     </div>
                   </div>
                 </div>
               </nav>
             </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container d-flex justify-content-between">
          <div>
            <a href="index.html"><h1 class="nombre_compania">Innovix</h1></a>
          </div>
          <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
                  <li class="nav-item nav-items">
                    <div class="dropdown show">
                        <a class="nav-link nav-links dropdown-toggle" href="#" role="button" id="dropdownMenuLink" 
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Tiendas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="adidas.html">Adidas</a>
                          <a class="dropdown-item" href="HandM.html">H&M</a>
                          <a class="dropdown-item" href="shein.html">Shein</a>
                        </div>
                    </div>
    
                  </li>
                  <li class="nav-item nav-items">
                    <a class="nav-link nav-links" href="#">Hombre</a>
                  </li>
                  <li class="nav-item nav-items">
                    <a class="nav-link nav-links" href="#">Mujer</a>
                  </li>
                  <li class="nav-item nav-items">
                    <a class="nav-link nav-links" href="#">Niño</a>
                  </li>
                </ul>
                <div class="position-relative">
                  <a href="favoritos.html" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-heart nav-icon"></i>
                  </a>
                  <a href="cart.html" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-cart-arrow-down nav-icon"></i>
                  </a>

                  <a href="perfil.html" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-user nav-icon"></i>
                  </a>
                </div>
                
                <script>
                  document.addEventListener('DOMContentLoaded', function () {
                    let totalQuantity = 0;
                    let iconCartSpan = document.querySelector('.icon-cart span');

                    let cart = JSON.parse(localStorage.getItem('cart'));
                    if (cart) {
                      cart.forEach(item => {
                        totalQuantity += item.quantity;
                      });
                    }
                    
                    iconCartSpan.innerText = totalQuantity;
                    console.log(totalQuantity);

                    document.getElementById('redirectHombreFirst').addEventListener('click', function() {
                      window.location.href = 'hombre.html'; 
                    });
                    document.getElementById('redirectMujerFirst').addEventListener('click', function() {
                      window.location.href = 'mujer.html'; 
                    });
                    document.getElementById('redirectHombreSecond').addEventListener('click', function() {
                      window.location.href = 'Innovix/hombre.html'; 
                    });
                    document.getElementById('redirectMujerSecond').addEventListener('click', function() {
                      window.location.href = 'mujer.html'; 
                    });
                
                  
                });
                </script>
                
                <div class="position-absolute rounded-circle icon-cart cart">
                  <span>0</span>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </nav>
    </header>
    <div class="winterSale">
      
      <h2>Winter <i>Sale</i></h2>
      
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="button" class="btn btn-outline-secondary me-md-5" id="redirectHombreFirst">Hombre</button>
        <button type="button" class="btn btn-outline-secondary me-md-5" id="redirectMujerFirst">Mujer</button>
      </div>
      <h3>Hasta 40% de descuento en estilos seleccionados</h3>
    </div>
    
    <div class="videoPromo">
      <video src="videos\homepage_video0.mp4" autoplay muted loop></video>
      <div class="overlay">
        <h1>NUEVA</h1>
        <h1>ERA DE</h1>
        <h1>DENIM</h1>
        <h3>La primavera está </h3>
        <h3>oficialmente definida</h3>
        <h3>por mezclilla holgada.</h3>
        <div class="d-grid gap-6 d-md-flex mx-auto">
          <button type="button" class="btn btn-outline-secondary me-md-5" id="redirectHombreSecond">Hombre</button>
          <button type="button" class="btn btn-outline-secondary me-md-5" id="redirectMujerSecond">Mujer</button>
        </div>
    </div>
    </div>
    
    <div class="mensaje">
      <h1>Así es Innovix hoy</h1>
        <h2>Hoy (y todos los días) lideramos con un propósito, defendemos la inclusión y creamos un sentido de pertenencia.</h2>
    </div>

    <footer >
      <div class="footer-links">
        <a href="#">Configuración de las cookies</a>
        <a href="#">Nuestros Datos</a>
        <a href="#">Términos y Condiciones</a>
        <a href="#">Uso del Sitio</a>
        <a href="#">Términos y Condiciones Promociones</a>
        <a href="#">Privacidad de Videovigilancia</a>
    </div>
      <p>&copy; 2024 Innovix Mexico S.A. de C.V.</p>
      <p>INNOVIX® es una marca registrada de Innovix Inc.</p>
  </footer>
</body>

</html>