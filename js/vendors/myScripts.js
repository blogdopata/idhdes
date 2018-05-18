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
  //alert(pathname);
  var nuevo = pathname.split("/");
  //alert(nuevo[2]);


  if(nuevo[2] == "nosotros.php") {
    //alert("hola");
    $("header").addClass("header-content");
    //alert("hola");
    $("#link2").addClass("active");
   }

  if(nuevo[2] == "") {
    
    $("#link1").addClass("active");
  } 
  if(nuevo[2] == "index.php") {
    
    $("#link1").addClass("active");
  } 



});  

/* ******************  FIN SCRIPTS DEL LINK ******************** */  











