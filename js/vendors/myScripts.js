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

/* ********************** EQUIPO DE TRABAJO       ******************************  */




$(document).ready(function() {
				$("#member1").click(function(event) {
					event.preventDefault();
					$("#showMe").load('parts/members.html',function(){
							$("#showMember1").hide().fadeIn();	
					});
				});

				$("#member2").click(function(event) {
					event.preventDefault();
					$("#showMe").load('parts/members.html',function(){
							$("#showMember2").hide().fadeIn();	
					});
				});
					$("#member3").click(function(event) {
					event.preventDefault();
					$("#showMe").load('parts/members.html',function(){
							$("#showMember3").hide().fadeIn();	
					});
				});
				$("#member4").click(function(event) {
					event.preventDefault();
					$("#showMe").load('parts/members.html',function(){
							$("#showMember3").hide().fadeIn();	
					});
				});
				$("#member4").click(function(event) {
					event.preventDefault();
					$("#showMe").load('parts/members.html',function(){
							$("#showMember4").hide().fadeIn();	
					});
				});
				$("#member5").click(function(event) {
					event.preventDefault();
					$("#showMe").load('parts/members.html',function(){
							$("#showMember5").hide().fadeIn();	
					});
				});
				$("#member6").click(function(event) {
					event.preventDefault();
					$("#showMe").load('parts/members.html',function(){
							$("#showMember6").hide().fadeIn();	
					});
				});
				$("#member7").click(function(event) {
					event.preventDefault();
					$("#showMe").load('parts/members.html',function(){
							$("#showMember7").hide().fadeIn();	
					});
				});
				$("#member8").click(function(event) {
					event.preventDefault();
					$("#showMe").load('parts/members.html',function(){
							$("#showMember8").hide().fadeIn();	
					});
				});
				$("#member9").click(function(event) {
					event.preventDefault();
					$("#showMe").load('parts/members.html',function(){
							$("#showMember9").hide().fadeIn();	
					});
				});


});






// $(document).ready(function() {
// 				$("#member2").click(function(event) {
// 					event.preventDefault();
// 					 Se crearía una  llamada  x html
// 					$("#showMe").load('parts/member/member2.html').hide().fadeIn('slow');
// 				});
// });





/* ********************** FIN EQUIPO DE TRABAJO       ******************************  */


/* ************** NOSOTROS  / DERECHOS / DESARROLLO / CUESTIONES SOCIALES **************** */

$(document).ready(function(){
	$("#derHum").click(function(event){
			 event.preventDefault();
			$("#showDer" ).toggle("slow");
	});
})

$(document).ready(function(){
	$("#desahu").click(function(event){
			 event.preventDefault();
			$("#showDesa" ).toggle("slow");
	});
})

$(document).ready(function(){
	$("#cuesti").click(function(event){
			 event.preventDefault();
			$("#showCuesti" ).toggle("slow");
	});
})

/* ************** FIN  NOSOTROS  DDC  **************** */





$(document).ready(function(){
	$("#infoCartilla").click(function(event){
			 event.preventDefault();
			$("#showCartilla" ).toggle("slow");
	})


})











/* ****************** SCRIPTS DEL LINK ******************** */  

  
$(document).ready(function(){
  var pathname = window.location.pathname;

  /*alert(pathname);-- /IDHDES/editorial.php */

  var nuevo = pathname.split("/");
  /*alert(nuevo);  -- [,IDHDES,editorial.php]  */
  /*alert(nuevo[2]);-- editorial.php*/


  if(nuevo[2] == "nosotros.php") {
    /*$("header").addClass("header-content");*/ 
    $("#link2").addClass("active");
   }

 	if(nuevo[2] == "formacion-academica.php"){
 		$("#link3").addClass("active");
 		/*$("#footer").addClass("footer-stky");*/
 	}
 	if(nuevo[2] == "convenios.php"){
 		$("#link4").addClass("active");
 		/*$("#footer").addClass("footer-stky");*/
 	}
 	if(nuevo[2] == "editorial.php"){
 		$("#link5").addClass("active");
 		/*$("#footer").addClass("footer-stky");*/
 	}  
 	if(nuevo[2] == "publicaciones.php"){
 		$("#link6").addClass("active");
 		/*$("#footer").addClass("footer-stky");*/
	 }
	if(nuevo[2] == "concursos.php"){
		$("#link7").addClass("active");
		/*$("#footer").addClass("footer-stky");*/
	}


  if(nuevo[2] == "") {
    
    $("#link1").addClass("active");
  } 

  if(nuevo[2] == "index.php") {
    
    $("#link1").addClass("active");
  } 

  if( nuevo[2] != "index.php" && nuevo[2] != "" ) {
   
    $("header").addClass("header-content");
   }


   /*  PARA NOTICIAS STICKY FOOTER */

   if(nuevo[4] == "noticia8.php") {
     
    $("#footer").addClass("footer-stky");
     /*console.log(nuevo);*/
  } 
   if(nuevo[4] == "noticia3.php") {
     
    $("#footer").addClass("footer-stky");
     /*console.log(nuevo);*/
  } 
  	/*  FIN  NOTICIAS STICKY FOOTER */
 
 
});  

/* ******************  FIN SCRIPTS DEL LINK ******************** */  


/* ***************** Publicaciones TABS ******************** */ 

$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});

/* *****************  FIN Publicaciones TABS ******************** */ 

 
/* **************   PARA FORMACION ACADEMICA ******************** */
$(document).ready(function(){

	$("#more-info").click(function(event){
		event.preventDefault();
			$("#showInfo").toggle("slow");
	});

	$("#more-info2").click(function(event){
		event.preventDefault();
			$("#showInfo2").toggle("slow");
	});
})


/* *************--*   FINFORMACION ACADEMICA ******************** */











