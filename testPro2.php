<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
  

/*Portfolio===============================*/
#portfolio {  
    margin: 1rem 0;
    -webkit-column-count: 3; 
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 1rem;
    -moz-column-gap: 1rem;
    column-gap: 1rem;
    -webkit-column-width: 33.33333333333333%;
    -moz-column-width: 33.33333333333333%;
    column-width: 33.33333333333333%;
}
#portfolio-container .tile { 
    -webkit-transform: scale(0);
    transform: scale(0);
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;

}
#portfolio-container .tile:hover { 

}

#portfolio-container .scale-anm {
  transform: scale(1);
}


#portfolio-container p{ 
  padding:10px; 
  border-bottom: 1px #ccc dotted; 
  text-decoration: none; 
  font-family: lato; 
  text-transform:uppercase; 
  font-size: 12px; 
  color: #333; 
  display:block; 
  float:left;
}

#portfolio-container p:hover { 
  cursor:pointer; 
  background: #333; 
  color:#eee; }

#portfolio-container .tile img {
    max-width: 100%;
    width: 100%;
    height: auto;
    margin-bottom: 1rem;
  
}

#portfolio-container .btn {
    font-family: Lato;
    font-size: 18px;
    font-weight: normal;
    text-decoration: none;
    cursor: pointer;
    display: inline-block;
    line-height: normal;
    padding: 5px 10px;
    margin: 0;
    height: auto;
    border: 1px solid;
    vertical-align: middle;
    -webkit-appearance: none;
    color: #555;
    background-color: rgba(0, 0, 0, 0);
}



#portfolio-container .btn:hover {
  text-decoration: none;color:#fff;background-color:#FF1351;
}

#portfolio-container .btn:focus {
  outline: none;
  border-color: var(--darken-2);
  box-shadow: 0 0 0 3px var(--darken-3);
}
/*Portfolio===============================*/


#portfolio-container .active {
   background-color:#FF1351;color:#fff;
    outline: 0;
    box-shadow: none; 
}

#portfolio-container .active:active{
   background-color:#FF1351;color:#fff;
    outline: 0;
    box-shadow: none; 
}


</style>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
  <base href="https://www.w3schools.com/images/" target="_blank">
</head>
<body>

<section id="portfolio-container" class="padding-60" style="margin-top:100px;">
    <div class="container">
       
        <div class="row">

            <div class="text-center">
              <div class="toolbar mb2 mt2 padding-b-25">
                  <!-- <button class="btn fil-cat active" href="" data-rel="all">Todo</button> -->
                  <button class="btn fil-cat" data-rel="articulos">Articulos</button>
                  <button class="btn fil-cat" data-rel="boletin">Boletin</button>
                  <button class="btn fil-cat" data-rel="diasI">Días Internacionales</button>
                  <button class="btn fil-cat" data-rel="instrumentos">Instrumentos Internacionales</button>
                  <button class="btn fil-cat" data-rel="cuadros">Cuadros de Investigación</button>
                  

              </div> 
            </div> 

            <div style="clear:both;"></div>  

        <div id="portfolio">

          <div class="tile scale-anm articulos" style="display: block;border:1px solid red;height: 100px;width: 100%;">

            <div style="border:1px solid red;display: block;width: 100%;color:black;">
                 <p> Prueba de contenido</p>


            </div>
              

          </div>
                

          <div class="tile scale-anm boletin ">
              <div style="border:1px solid red;">
                 <p> Prueba de contenido 2</p>


          </div>

          <div class="tile scale-anm diasI ">
              


          </div>

          <div class="tile scale-anm instrumentos">
              

          </div>

          <div class="tile scale-anm  cuadros">
              


          </div>


          

        </div>


        <div style="clear:both;"></div>   
      </div>
    </div>
</section>


<script>
  

//<!--    portfolio  JS  =================    -->
       
        $(function() {
    var selectedClass = "";
    $(".fil-cat").click(function(){ 
    selectedClass = $(this).attr("data-rel"); 
     $("#portfolio").fadeTo(100, 0.1);
    $("#portfolio div").not("."+selectedClass).fadeOut().removeClass('scale-anm');
    setTimeout(function() {
      $("."+selectedClass).fadeIn().addClass('scale-anm');
      $("#portfolio").fadeTo(300, 1);
    }, 300); 
    
  });
});

</script>
</body>
