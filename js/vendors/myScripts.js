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
// $(document).ready(function(){
// 	$("#member1").click(function(event){
// 			 event.preventDefault();
// 			$("#showMember1" ).toggle("slow");
// 	})
// });

// $(document).ready(function(){
// 	$("#member2").click(function(event){
// 			 event.preventDefault();
// 			$("#showMember2" ).toggle("slow");
// 	});
// });
// $(document).ready(function(){
// 	$("#member3").click(function(event){
// 			 event.preventDefault();
// 			$("#showMember3" ).toggle("slow");
// 	});
// });
// $(document).ready(function(){
// 	$("#member4").click(function(event){
// 			 event.preventDefault();
// 			$("#showMember4" ).toggle("slow");
// 	});
// });
// $(document).ready(function(){
// 	$("#member5").click(function(event){
// 			 event.preventDefault();
// 			$("#showMember5" ).toggle("slow");
// 	});
// });
// $(document).ready(function(){
// 	$("#member6").click(function(event){
// 			 event.preventDefault();
// 			$("#showMember6" ).toggle("slow");
// 	});
// });
// $(document).ready(function(){
// 	$("#member7").click(function(event){
// 			 event.preventDefault();
// 			$("#showMember7" ).toggle("slow");
// 	});
// });
// $(document).ready(function(){
// 	$("#member8").click(function(event){
// 			 event.preventDefault();
// 			$("#showMember8" ).toggle("slow");
// 	});
// });

// $(document).ready(function(){
// 	$("#member9").click(function(event){
// 			 event.preventDefault();
// 			$("#showMember9" ).toggle("slow");
// 	});
// });


$(document).ready(function() {
				$("#member1").click(function(event) {
					event.preventDefault();
		
					$("#showMe").load('parts/member/member1.html');
				});
});







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











