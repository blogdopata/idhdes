// Carousel Auto-Cycle
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 6000
    })
  });


$(document).ready(function(){
	$("#moreText").click(function(){

			$("#showText" ).toggle("slow");
	})
});

$(document).ready(function(){
	$("#member").click(function(event){
			 event.preventDefault();
			$("#showMember" ).toggle("slow");
	})
});

$(document).ready(function(){
	$("#derHum").click(function(event){
			 event.preventDefault();
			$("#showDer" ).toggle("slow");
	})


})


/* ****************** SCRIPTS DEL LINK ******************** */  

  
$(document).ready(function(){
  var pathname = window.location.pathname;
  //alert(pathname);
  var nuevo = pathname.split("/");
  //alert(nuevo[2]);

  if(nuevo[2] == "nosotros.php") {
    //alert("hola");
    $("header").addClass("header-content");
    //alert("hola");
    }
});  

/* ******************  FIN SCRIPTS DEL LINK ******************** */  











