<!DOCTYPE html>
<?php include 'functions.php'; ?>

<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>Free for all</title>
 <link href="style.css" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

 <body>
   <button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
					<div class="collapse" id="navbarToggleExternalContent">
					<div class="bg-dark p-4">
            <nav>
              <a href="kontakt.html"> Kontakt </a> 
              <a href="cjenik.html">Cjenik </a> 
              <a href="katalog.html">Katalog</a> 
              <a href="usluge.html" > Usluge </a>
              <a href="index.html" class="active"> Početna </a>     
            </nav>
          </div>
       </div>
      </div>
    </div>

<div class="container">


  <div class="info" id="os_name">
     <img src="img/os.svg" alt="sl" class="info-slika"><br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalOs">OS</button>    
  </div>


  <div class="info">
   <img src="img/graph.svg" alt="sl" class="info-slika"><br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalGraphics">Graphics</button>
  </div>

  <div class="info">
     <img src="img/processor.svg" alt="sl" class="info-slika"><br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalProcessor">Processor</button>
  </div>

  <div class="info">
     <img src="img/network.svg" alt="sl" class="info-slika"><br>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalNetwork">Network</button>
  </div>
</div>


<div class="info">
     <img src="img/ram.svg" alt="sl" class="info-slika"><br>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalRam">RAM</button>
      </div>
</div>

<div class="info">
     <img src="img/disk.svg" alt="sl" class="info-slika"><br>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDisk">HARD/SSD</button>
  </div>
</div>

<div class="info" id="last">
     <img src="img/location.svg" alt="sl" class="info-slika"><br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalLocation">Location</button>
    </div>
</div>




</div>
</div>

<!--Modal: OS-->
<div class="modal fade" id="modalOs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content align-middle">
        <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                <p><?php os(); ?></p>
            </div>
        </div>
        </div>
    </div>
   </div>
<!--Modal: OS-->

<!--Modal: OS-->
<div class="modal fade" id="modalGraphics" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content align-middle">
        <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                <p class="opis"><?php graph(); ?>  </p>
            </div>
        </div>
        </div>
    </div>
   </div>
<!--Modal: OS-->

<!--Modal: OS-->
<div class="modal fade" id="modalProcessor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content align-middle">
        <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                <p class="opis"> <?php proc(); ?></p>
            </div>
        </div>
        </div>
    </div>
   </div>
<!--Modal: OS-->

<!--Modal: OS-->
<div class="modal fade" id="modalNetwork" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content align-middle">
        <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
               <p class="opis"> <?php net(); ?></p>
            </div>
        </div>
        </div>
    </div>
   </div>
<!--Modal: OS-->


<!--Modal: OS-->
<div class="modal fade" id="modalRam" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content align-middle">
        <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
               <p class="opis"> <?php ram(); ?></p>
            </div>
        </div>
        </div>
    </div>
   </div>
<!--Modal: OS-->


<!--Modal: OS-->
<div class="modal fade" id="modalDisk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content align-middle">
        <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
               <p class="opis"> <?php disk(); ?></p>
            </div>
        </div>
        </div>
    </div>
   </div>
<!--Modal: OS-->

<!--Modal: OS-->
<div class="modal fade" id="modalLocation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content align-middle">
        <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
               <p class="opis"> <?php echo get_loc(); ?></p>
            </div>
        </div>
        </div>
    </div>
   </div>
<!--Modal: OS-->

<!--
<form method="post" name="fast">
<div class="info">
  <button type="submit" name="fast" class="fast-btn"></button>
  <?php

    $fast = $_POST['fast'];

    if(isset($fast) == 1) {
      echo "yes";
    }
    else {
      echo "no";
    }
  
  ?>
</div>
</form>
-->
</div>
</body>

  <script>
function myFunction() {
    var x = document.getElementById("myIzbornik");
    if (x.className === "izbornik") {
        x.className += " responsive";
    } else {
        x.className = "izbornik";
    }
}
</script>

</html>
