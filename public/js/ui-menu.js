function cmm(a) {
		    return a.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		}

	 	$( function() {
	 		var max=1000000;
	 		var min=100000;
	 		var step=100000;

	    	$( "#sl-range" ).slider({
	      		range:true,
	      		min:min,
	      		max:max,
	      		step:step,
	      		values:[min,max],
	      		slide:function(event,ui) {
	        		$("#min").val(ui.values[0]);
	        		$("#max").val(ui.values[1]);
	        		$("#min-txt").html(cmm(ui.values[0]));
	        		$("#max-txt").html(ui.values[1]==max?'ขึ้นไป':cmm(ui.values[1]));
	      		}
    		});
    		$("#min").val($("#sl-range").slider("values",0));
    		$("#min-txt").html(cmm($("#sl-range").slider("values",0)));
	        $("#max").val($("#sl-range").slider("values",1));

	        $(".open-menu").click(function(){
	        	var elem = $('.menu');
	        	if(elem.attr('data-click')==0){
	        		elem.attr('data-click',1).addClass('opens');
	        	} else {
	        		elem.attr('data-click',0).removeClass('opens');
	        	}
	        });
	  	});