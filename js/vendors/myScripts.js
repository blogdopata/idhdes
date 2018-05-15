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