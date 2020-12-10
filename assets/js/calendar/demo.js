$(document).ready( function(){
  var cTime = new Date(), month = cTime.getMonth()+1, year = cTime.getFullYear();

	theMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

	theDays = ["S", "M", "T", "W", "T", "F", "S"];

  //date now
  var d = new Date();
  var day = d.getDate();
   
  //even
    events = [
      [
        day+"/"+month+"/"+year,  
        'now', 
        '#', 
        '', 
        ''
      ]
    ];
    //end even

    $('#calendar').calendar({
        months: theMonths,
        days: theDays,
        events: events,
        popover_options:{
            placement: 'top',
            html: true
        }
    });
});