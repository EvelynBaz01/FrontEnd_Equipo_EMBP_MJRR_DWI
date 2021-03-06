<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Pizzas Rossely</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="{{ route('inicio') }}"><span class="flaticon-pizza-1 mr-1"></span>Pizzas<br><small>Rossely</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menú
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="{{ route('inicio') }}" class="nav-link">Inicio</a></li>
	          	<li class="nav-item"><a href="{{ route('quienes_somos') }}" class="nav-link">¿Quiénes Somos?</a></li>
			    <li class="nav-item active"><a href="{{ route('servicios') }}" class="nav-link">Servicios</a></li>
	          	<li class="nav-item"><a href="{{ route('contacto') }}" class="nav-link">Contacto</a></li>
			    <li class="nav-item"><a href="{{ route('iniciar_sesion') }}" class="nav-link">Iniciar Sesión</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel img" style="background-image: url(assets/images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(assets/images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-7 col-sm-12 text-center ftco-animate"><h1 class="mb-3 mt-5 bread">Entérate de nuestros servicios</h1></div>
          </div>
        </div>
      </div>
    </section>
    

    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Nuestros servicios</h2>
            <p>Queremos que te sientas cómodo desde la comodidad de tu casa o acudiendo a nuestras diferentes sucursales</p>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Nuestros sabores</h3>
                <p>Son originales e inigualables, en sus diferentes cobinaciones.
                  Puedes adquirir nuestras pizzas con más de un sabor.
                </p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Servicio a domicilio</h3>
                <p>Al realizar tu pedido desde nuestras diferentes redes sociales, alguno de nuestros repartidores te llevara tu paquete 
                  hasta la puerta de tu casa.
                </p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading">Nuestros paquetes</h3>
                <p>Contamos con dieferentes paquetes, el cual se adapta a lo que desees, tales como:
                  Pizza grande, 2 pizzas grandes y pizza familiar, más un refresco de 2lts
                </p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Sabores</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Nuestros deliciosos y ricos sabores los puedes disfrutar de muchas maneras.</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-3 text-center ftco-animate">
      			<div class="menu-wrap">
      				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/Pizza.png);"></a>
      				<div class="text">
      					<h3><a href="#">Pizza ROSSELY</a></h3>
      					<p>Champiñones, salami, jalapeños, pepperoni y tocino</p>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-3 text-center ftco-animate">
      			<div class="menu-wrap">
      				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/pepperoni.jpg);"></a>
      				<div class="text">
      					<h3><a href="#">Pizza Pepperoni</a></h3>
      					<p>Pepperoni y queso</p>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-3 text-center ftco-animate">
      			<div class="menu-wrap">
      				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/vegetariana.jpg);"></a>
      				<div class="text">
      					<h3><a href="#">Pizza Vegetariana</a></h3>
      					<p>Champiñones, elote, pimiento y jitomate</p>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-3 text-center ftco-animate">
      			<div class="menu-wrap">
      				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/HawaianaEsp.jpg);"></a>
      				<div class="text">
      					<h3><a href="#">Pizza Hawaiana Especial</a></h3>
      					<p>Jamón, piña, durazno y cerezas</p>
      				</div>
      			</div>
      		</div>
    		</div>
        <div class="row">
    			<div class="col-md-3 text-center ftco-animate">
      			<div class="menu-wrap">
      				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/napolitana.jpg);"></a>
      				<div class="text">
      					<h3><a href="#">Pizza Napolitana</a></h3>
      					<p>Salchicha, jamón, salami, chorizo y tocino</p>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-3 text-center ftco-animate">
      			<div class="menu-wrap">
      				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/tresquesos.png);"></a>
      				<div class="text">
      					<h3><a href="#">Pizza Tres quesos</a></h3>
      					<p>Mezcla de tres quesos</p>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-3 text-center ftco-animate">
      			<div class="menu-wrap">
      				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/choriqueso.png);"></a>
      				<div class="text">
      					<h3><a href="#">Pizza Choriqueso</a></h3>
      					<p>Chorizo y extra queso</p>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-3 text-center ftco-animate">
      			<div class="menu-wrap">
      				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/BBQ.jpg);"></a>
      				<div class="text">
      					<h3><a href="#">Pizza Pollo BBQ</a></h3>
      					<p>Pollo, piña, tocino y salsa BBQ</p>
      				</div>
      			</div>
      		</div>
    		</div>
        <div class="row">
    			<div class="col-md-3 text-center ftco-animate">
      			<div class="menu-wrap">
      				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/ranchera.jpg);"></a>
      				<div class="text">
      					<h3><a href="#">Pizza Ranchera</a></h3>
      					<p>Frijoles refritos, jalapeños y chorizo</p>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-3 text-center ftco-animate">
      			<div class="menu-wrap">
      				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/clasica.jpg);"></a>
      				<div class="text">
      					<h3><a href="#">Pizza Clásica</a></h3>
      					<p>Aceitunas, pepperoni, pimiento y champiñones</p>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-3 text-center ftco-animate">
      			<div class="menu-wrap">
      				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/mexicana.jpg);"></a>
      				<div class="text">
      					<h3><a href="#">Pizza Mexicana</a></h3>
      					<p>Pierna, polllo y jalapeños</p>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-3 text-center ftco-animate">
      			<div class="menu-wrap">
      				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/Hawaiana.jpg);"></a>
      				<div class="text">
      					<h3><a href="#">Pizza Hawaiana</a></h3>
      					<p>Jamón, piña y tocino</p>
      				</div>
      			</div>
      		</div>
    		</div>
    	</div>

      <div class="container">
    		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Tamaños y Precios</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Pizza Familiar con 10 rebanasas(40cm), pizza Grande con 8 rebanadas(35cm) y pizza Mediana con 8 rebanadas(30cm)</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-1.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Una pizza familiar</span></h3>
	        				<span class="price">$195.00</span>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-2.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Dos Pizzas Familiares</span></h3>
	        				<span class="price">$335.00</span>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-3.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza Familiar con Orilla de queso</span></h3>
	        				<span class="price">+ $30.00</span>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-4.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza Familiar con queso extra</span></h3>
	        				<span class="price">+ $35.00</span>
	        			</div>
	        		</div>
        		</div>
            <div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-5.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Una pizza Grande</span></h3>
	        				<span class="price">$175.00</span>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-6.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Dos pizzas Grandes</span></h3>
	        				<span class="price">$295.00</span>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-7.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza Grande con Orilla rellena</span></h3>
	        				<span class="price">+ $25.00</span>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-8.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
                  <h3><span>Pizza Grande con queso extra</span></h3>
	        				<span class="price">+ $30.00</span>
	        			</div>
	        		</div>
        		</div>
            <div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-5.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Una pizza Mediana</span></h3>
	        				<span class="price">$155.00</span>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-6.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Dos pizzas Medianas</span></h3>
	        				<span class="price">$255.00</span>
	        			</div>
	        		</div>
        		</div>
            <div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-7.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza Mediana con Orilla rellena</span></h3>
	        				<span class="price">+ $20.00</span>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-8.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
                  <h3><span>Pizza Mediana con queso extra</span></h3>
	        				<span class="price">+ $25.00</span>
	        			</div>
	        		</div>
        		</div>
        	</div>


        </div>
    	</div>
    </section>
    
    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>TECAMALUCAN</h3>
								<h3>272 176 80 20</h3>
	    						<p>Comunícate con nosotros</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>ACULTZINGO</h3>
								<h3>272 169 04 83</h3>
	    						<p>Estamos para servirte</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Abierto todos los días</h3>
	    						<p>12:00pm - 22:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
					<div class="grid-cols-3">

						<div class="grid-col-item">
						  <div class="icon">
							<a href="https://www.facebook.com/Rosselypizza" target="_blank">
							  <svg viewBox="0 0 72 72" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g id="Social-Icons---Circle" transform="translate(-152.000000, -43.000000)">
										<g id="Facebook" transform="translate(152.000000, 43.000000)">
											<rect id="Oval" fill="#4460A0" x="0" y="0" width="72" height="72" rx="8"></rect>
											<path d="M60.4641463,13.4173171 L60.4641463,22.7278049 L54.9382927,22.7421951 C50.6068293,22.7421951 49.7721951,24.8 49.7721951,27.807561 L49.7721951,34.4702439 L60.09,34.4702439 L58.7517073,44.8887805 L49.7721951,44.8887805 L49.7721951,72 L39.0097317,72 L39.0097317,44.8887805 L30,44.8887805 L30,34.4702439 L39.0097317,34.4702439 L39.0097317,26.7858537 C39.0097317,17.8639024 44.4478049,13 52.42,13 C56.2204634,13 59.5,13.2878049 60.4641463,13.4173171 Z" fill="#FFFFFF"></path>
										</g>
									</g>
								</g>
							  </svg>
							</a>
						  </div>
						</div>
			  
						<div class="grid-col-item">
						  <div class="icon">
							<a href="https://api.whatsapp.com/send?phone=522721768020&app=facebook&entry_point=page_cta&fbclid=IwAR0MzYpq-mMxA4AM0sUm1XqFCjomKxWrHwhGRukEXQHeYvKD-Rfir1x5OP8" target="_blank">
							  <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M24 48C37.2548 48 48 37.2548 48 24C48 10.7452 37.2548 0 24 0C10.7452 0 0 10.7452 0 24C0 37.2548 10.7452 48 24 48Z" fill="#25D366"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M24.7911 37.3526H24.7852C22.3967 37.3517 20.0498 36.7525 17.9653 35.6155L10.4 37.6L12.4246 30.2049C11.1757 28.0406 10.5186 25.5855 10.5196 23.0703C10.5228 15.2017 16.9248 8.80005 24.7909 8.80005C28.6086 8.8017 32.1918 10.2879 34.8862 12.9855C37.5806 15.6829 39.0636 19.2684 39.0621 23.0816C39.059 30.9483 32.6595 37.3494 24.7911 37.3526ZM18.3159 33.0319L18.749 33.289C20.5702 34.3697 22.6578 34.9416 24.7863 34.9424H24.7911C31.3288 34.9424 36.6499 29.6212 36.6525 23.0807C36.6538 19.9113 35.4212 16.9311 33.1817 14.689C30.9422 12.4469 27.964 11.2116 24.7957 11.2105C18.2529 11.2105 12.9318 16.5312 12.9292 23.0711C12.9283 25.3124 13.5554 27.4952 14.7427 29.3837L15.0248 29.8325L13.8265 34.2096L18.3159 33.0319ZM31.4924 26.1541C31.7411 26.2743 31.9091 26.3555 31.9808 26.4752C32.0699 26.6239 32.0699 27.3378 31.7729 28.1709C31.4756 29.0038 30.051 29.764 29.3659 29.8664C28.7516 29.9582 27.9741 29.9965 27.1199 29.7251C26.602 29.5608 25.9379 29.3414 25.0871 28.9739C21.7442 27.5305 19.485 24.2904 19.058 23.6781C19.0281 23.6352 19.0072 23.6052 18.9955 23.5896L18.9927 23.5858C18.804 23.334 17.5395 21.6469 17.5395 19.9008C17.5395 18.2583 18.3463 17.3974 18.7177 17.0011C18.7432 16.9739 18.7666 16.9489 18.7875 16.9261C19.1144 16.5691 19.5007 16.4798 19.7384 16.4798C19.9761 16.4798 20.2141 16.482 20.4219 16.4924C20.4475 16.4937 20.4742 16.4936 20.5017 16.4934C20.7095 16.4922 20.9686 16.4907 21.2242 17.1046C21.3225 17.3408 21.4664 17.6911 21.6181 18.0605C21.9249 18.8075 22.264 19.6328 22.3236 19.7523C22.4128 19.9308 22.4722 20.1389 22.3533 20.377C22.3355 20.4127 22.319 20.4464 22.3032 20.4786C22.2139 20.6608 22.1483 20.7949 21.9967 20.9718C21.9372 21.0414 21.8756 21.1164 21.814 21.1914C21.6913 21.3408 21.5687 21.4902 21.4619 21.5966C21.2833 21.7744 21.0975 21.9673 21.3055 22.3243C21.5135 22.6813 22.2292 23.849 23.2892 24.7945C24.4288 25.8109 25.4192 26.2405 25.9212 26.4583C26.0192 26.5008 26.0986 26.5353 26.1569 26.5644C26.5133 26.743 26.7213 26.7131 26.9294 26.4752C27.1374 26.2372 27.8208 25.4339 28.0584 25.077C28.2961 24.7201 28.5339 24.7796 28.8607 24.8985C29.1877 25.0176 30.9408 25.8802 31.2974 26.0586C31.367 26.0935 31.4321 26.125 31.4924 26.1541Z" fill="#FDFDFD"/>
							  </svg>
							</a>
						  </div>
						</div>
			  
						<div class="grid-col-item">
						  <div class="icon">
							<a href="mailto:rosselypizza@gmail.com?Subject=Pedido" target="_blank">
							  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							  viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
								<rect x="64" y="64" style="fill:#ECEFF1;" width="384" height="384"/>
								<polygon style="fill:#CFD8DC;" points="256,296.384 448,448 448,148.672 "/>
								<path style="fill:#F44336;" d="M464,64h-16L256,215.616L64,64H48C21.504,64,0,85.504,0,112v288c0,26.496,21.504,48,48,48h16V148.672
								  l192,147.68L448,148.64V448h16c26.496,0,48-21.504,48-48V112C512,85.504,490.496,64,464,64z"/>
							  </svg>
							</a>
						  </div>
						</div>
					  </div>
	    		</div>
    		</div>
    	</div>
    </section>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('assets/js/google-map.js') }}"></script>
    
  </body>
</html>