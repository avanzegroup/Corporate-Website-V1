$(function(){


        $('.stat-count').counterUp({
            delay: 10,
            time: 1000
        });

function prog()
{

                $('#circle1').circleProgress({
                 value: 1,
                 size: 130,
                 fill: {
                   gradient: ["#e96656", "#e96656"]
                 },
                 //startAngle: 0,
                 thickness: 10,
                 emptyFill: "#ececec",
                 animation: {
                        duration: 2000,
                        easing: 'circleProgressEasing'
                    }
                 });


                $('#circle2').circleProgress({
                 value: 1,
                 size: 130,
                 fill: {
                   gradient: ["#34d293", "#34d293"]
                 },
                 //startAngle: 0,
                 thickness: 10,
                 emptyFill: "#ececec",
                    animation: {
                        duration: 2000,
                        easing: 'circleProgressEasing'
                    }
                 });



              $('#circle3').circleProgress({
                 value: 1,
                 size: 130,
                 fill: {
                   gradient: ["#eab0e2", "#eab0e2"]
                 },
                 //startAngle: 0,
                 thickness: 10,
                  emptyFill: "#ececec",
                    animation: {
                        duration: 2000,
                        easing: 'circleProgressEasing'
                    }
                 });



              $('#circle4').circleProgress({
                 value: 1,
                 size: 130,
                 fill: {
                   gradient: ["#8ecde8", "#8ecde8"]
                 },
                 //startAngle: 0,
                 thickness: 10,
                  emptyFill: "#ececec",
                    animation: {
                        duration: 2000,
                        easing: 'circleProgressEasing'
                    }
                 });



                $('#circle5').circleProgress({
                 value: 1,
                 size: 130,
                 fill: {
                   gradient: ["#f7d861", "#f7d861"]
                 },
                 //startAngle: 0,
                 thickness: 10,
                  emptyFill: "#ececec",
                    animation: {
                        duration: 2000,
                        easing: 'circleProgressEasing'
                    }
                 });

}

        
        $('#whatwedo').waypoint(function(direction) {
  
             prog();
  
        }, { triggerOnce: true });

        $('#whatwedo1').waypoint(function(direction) {
  
             //prog();
  
        }, {  });        
        
//triggerOnce: true

});
	

