<!doctype html>
<html class="no-js" lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Grafimedia" />
<meta name="description" content="Editorial IDHDES, se muetran las últimas editorilaes de Instituto de Derechos Humanos y Desarrollo de la USMP " >
<meta charset="UTF-8">
<!-- Document Title -->
<title>IDHDES</title>


<?php require_once("parts/src-css.php") ?>

</head>

<style>
  .chaos .active{
    /*background-color: green;*/
    border:1px solid #829845;
  }
 
  .chaos>li.active>a,
  .chaos>li.active>a:focus,
  .chaos>li.active>a:hover {
      
    border: 0px solid red;
    color: #829845;
  }
 
</style>

<body>

<div class="container-fluid">
   <br> <br> <br>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
            <ul class="nav nav-tabs chaos text-center" style="padding-left: 15%;">
                <li class="active"><a href="#home">Articulos</a></li>
                <li><a href= "#menu1">Boletin</a></li>
                <li><a href="#menu2">Dias Internacionales</a></li>
                <li><a href="#menu3">Instrumentos Internacionales</a></li>
                <li><a href="#menu4">Cuadros de Investigación</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <ul class="list-editorial">
                        <li>
                          <a href="contenido/editorial/editorial1.php">
                            ¡Nuestros derechos siempre! <span class="ion-arrow-right-c"></span>
                          </a>
                        </li>
                        <li><a href="contenido/editorial/editorial2.php">“Elijo no poner “dis” en mi capacidad” <span class="ion-arrow-right-c"></span></a></li>

                        <li><a href="contenido/editorial/editorial3.php">Un breve pasaje por la perspectiva de los pueblos indígenas <span class="ion-arrow-right-c"></span></a></li>

                        <li><a href="contenido/editorial/editorial4.php">DÍA MUNDIAL DE LOS DOCENTES <span class="ion-arrow-right-c"></span></a></li>

                        <li><a href="contenido/editorial/editorial5.php">Entrevista del IDHDES <span class="ion-arrow-right-c"></span></a></li>

                        <li><a href="contenido/editorial/editorial6.php">DÍA INTERNACIONAL DE TOLERANCIA CERO CON LA MUTILACIÓN GENITAL FEMENINA <span class="ion-arrow-right-c"></span></a></li>

                        <li><a href="contenido/editorial/editorial7.php">REFLEXIONES: RECORDANDO A PIERINA: ¡NO AL MALTRATO INFANTIL! <span class="ion-arrow-right-c"></span></a></li>
                    </ul>    
                </div>

                <div id="menu1" class="tab-pane fade">
                  <h3>Menu 1</h3>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                  <h3>Menu 2</h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="menu3" class="tab-pane fade">
                  <h3>Menu 3</h3>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
                 <div id="menu4" class="tab-pane fade">
                  <h3>Menu 3</h3>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>

                
            </div>
      </div>  
    </div>  
</div>
<?php include("parts/src-js.php") ?>
<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>

</body>
</html>