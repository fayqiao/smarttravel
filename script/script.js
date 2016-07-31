$( document ).ready(function() {
    $('#datetimepicker1').datetimepicker();
});


$(document).ready(function(){
	
        $(".various").fancybox({
          maxWidth  : 850,
          maxHeight : 700,
          fitToView : false,
          width   : '60%',
          height    : '55%',
          autoSize  : false,
          closeClick  : false,
          openEffect  : 'none',
          closeEffect : 'none'
        });
        
});

function planJourney(){
	
	$("#fakeLoader").fakeLoader({

		timeToHide:1200, //Time in milliseconds for fakeLoader disappear
		zIndex:"999",//Default zIndex
		spinner:"spinner1",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
		bgColor:"#ff6915", //Hex, RGB or RGBA colors

	});
	
	$('#searchArea').hide();
	$('#mapArea').hide();
	$('#resultArea').slideToggle();
	$('#resultMap').slideToggle();
}

function route(mapID){
	
	if($('#map_1').is(":visible")){
		$('#map_1').hide();
	}
	
	if($('#route_1').is(":visible")){
		$('#route_1').hide();
		$('#routeDetail_1').hide();
		$('#tips').hide();
		$('#suggestionDetail').hide();
	}
	
	if($('#route_2').is(":visible")){
		$('#route_2').hide();
		$('#routeDetail_2').hide();
		$('#tips').hide();
		$('#suggestionDetail').hide();
	}
	
	if($('#route_3').is(":visible")){
		$('#route_3').hide();
		$('#routeDetail_3').hide();
		$('#tips').hide();
		$('#suggestionDetail').hide();
	}
	
	if(mapID === 1){
		$('#route_1').show();
		$('#routeDetail_1').slideToggle('slow');
		$('#tips').slideToggle('slow');
		$('#suggestionDetail').slideToggle('slow');
	}else if(mapID === 2){
		$('#route_2').show();
		$('#routeDetail_2').slideToggle('slow');
		$('#tips').slideToggle('slow');
		$('#suggestionDetail').slideToggle('slow');
	}else if(mapID === 3){
		$('#route_3').show();
		$('#routeDetail_3').slideToggle('slow');
		$('#tips').slideToggle('slow');
		$('#suggestionDetail').slideToggle('slow');
	}else{
		//do nothing
	}
}