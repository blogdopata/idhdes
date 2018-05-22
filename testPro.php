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

<section id="portfolio-container" class="padding-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="text-center">
                <h1 class="padding-b-25">PORTFOLIO</h1>
              </div>
            </div>
        </div>
        <div class="row">

            <div class="text-center">
              <div class="toolbar mb2 mt2 padding-b-25">
                  <!-- <button class="btn fil-cat active" href="" data-rel="all">Todo</button> -->
                  <button class="btn fil-cat" data-rel="web">Conferencias</button>
                  <button class="btn fil-cat" data-rel="flyers">Cursos</button>
                  <button class="btn fil-cat" data-rel="bcards">Diplomados</button>
                  <button class="btn fil-cat" data-rel="advertising">Talleres</button>
                  <button class="btn fil-cat" data-rel="maestrias">Maestrias</button>
                  <button class="btn fil-cat" data-rel="academica">Labor Académmica</button>

              </div> 
            </div> 

            <div style="clear:both;"></div>  

        <div id="portfolio">

          <div class="tile scale-anm web all advertising">
              <img src="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg" alt="" />
          </div>

          <div class="tile scale-anm bcards all">
              <img src="https://lh3.googleusercontent.com/-ojLI116-Mxk/WM1ZIwdnuwI/AAAAAAAADeo/4K6VpwIPSfgsmlXJB5o0N8scuI3iW4OpwCJoC/w424-h318-n-rw/thumbnail6.jpg" alt="" />
          </div>

          <div class="tile scale-anm web all">
              <img src="https://lh3.googleusercontent.com/-TrK1csbtHRs/WM1ZI1SIUNI/AAAAAAAADeo/OkiUjuad6skWl9ugxbiIA_436OwsWKBNgCJoC/w424-h318-n-rw/thumbnail3.jpg" alt="" />
          </div>

          <div class="tile scale-anm web all">
              <img src="https://lh3.googleusercontent.com/-UKfIhJSBW9M/WM1ZI8ou34I/AAAAAAAADeo/vlLGY29147AYLaxUW29ZXJlun115BhkhgCJoC/w424-h318-n-rw/thumbnail7.jpg" alt="" />
          </div>

          <div class="tile scale-anm  advertising">
              <img src="https://lh3.googleusercontent.com/-13DR8P0-AN4/WM1ZIz1lRNI/AAAAAAAADeo/XMfJ7CM-pQg9qfRuCgSnphzqhaj3SQg6QCJoC/w424-h318-n-rw/thumbnail4.jpg" alt="" />
          </div>


          <div class="tile scale-anm bcards all">
              <img src="https://lh3.googleusercontent.com/-QlnwuVgbxus/WM1ZI1FKQiI/AAAAAAAADeo/nGSd1ExnnfIfIBF27xs8-EdBdfglqFPZgCJoC/w424-h318-n-rw/thumbnail2.jpg" alt="" />
          </div>

          <div class="tile scale-anm flyers all advertising">
              <img src="https://lh3.googleusercontent.com/-wRHL_FOH1AU/WM1ZIxQZ3DI/AAAAAAAADeo/lwJr8xndbW4MHI-lOB7CQ-14FJB5f5SWACJoC/w424-h318-n-rw/thumbnail5.jpg" alt="" />
          </div>

          <div class="tile scale-anm flyers all">
              <img src="https://lh3.googleusercontent.com/-13DR8P0-AN4/WM1ZIz1lRNI/AAAAAAAADeo/XMfJ7CM-pQg9qfRuCgSnphzqhaj3SQg6QCJoC/w424-h318-n-rw/thumbnail6.jpg" alt="" />
          </div>

          <div class="tile scale-anm web all flyers">
              <img src="https://lh3.googleusercontent.com/-HxSAl6WJSI0/WM-dbkQ1ONI/AAAAAAAADuE/-j9GwJvDOZcwTGuthBQay7XsdsPmtaC6gCL0B/w424-d-h319-p-rw/sumit.png" alt="" />
          </div>

          <div class="tile scale-anm flyers all">
              <img src="https://lh3.googleusercontent.com/-13DR8P0-AN4/WM1ZIz1lRNI/AAAAAAAADeo/XMfJ7CM-pQg9qfRuCgSnphzqhaj3SQg6QCJoC/w424-h318-n-rw/thumbnail3.jpg" alt="" />
          </div>

          <div class="tile scale-anm web all">
              <img src="https://lh3.googleusercontent.com/-QlnwuVgbxus/WM1ZI1FKQiI/AAAAAAAADeo/nGSd1ExnnfIfIBF27xs8-EdBdfglqFPZgCJoC/w424-h318-n-rw/thumbnail2.jpg" alt="" />
          </div>

          <div class="tile scale-anm bcards all">
              <img src="https://lh3.googleusercontent.com/-wRHL_FOH1AU/WM1ZIxQZ3DI/AAAAAAAADeo/lwJr8xndbW4MHI-lOB7CQ-14FJB5f5SWACJoC/w424-h318-n-rw/thumbnail5.jpg" alt="" />
          </div>

          <div class="tile scale-anm flyers all maestrias">
               <img src="http://localhost/idhdes/images/noticias/1.jpg" alt="" />
          </div>

          <div class="tile scale-anm flyers all maestrias">
               <img src="http://localhost/idhdes/images/noticias/1.jpg" alt="" />
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
