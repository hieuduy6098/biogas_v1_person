//get data from button reload and publish to mqtt 
$(document).ready(function () {
  $("#reload").click(function () {
    var date = new Date();
    var start = date.setHours(0,0,0,0);
    var end = date.setHours(23,59,59,999);
    var param_id =  $("#reload").val();
    var rpi = param_id.substring(0,3);
    //console.log(start, end);
    publish(rpi, param_id, start, end);
  })
})

function leapYear(year)
{
  return ((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0);
}

//get data from button chat month and publish to mqtt
$(document).ready(function () {
  $("#btnForMonth").click(function () {
    //set time start
    var start = new Date();
    start.setDate(1);
    start.setHours(0,0,0,0);
    start = start.getTime()
    //set thime end
    var end = new Date();
    var month = end.getMonth();
    if (month == 0 || month == 2 || month == 4 || month == 6 || month == 8 || month == 9 || month == 11) {
      end.setDate(31);
      end.setHours(23,59,59,999);
      end = end.getTime()
    } else if (month == 1) {            
      if (leapYear) end.setDate(29);
      else end.setDate(28);      
      end.setHours(23,59,59,999);
      end = end.getTime()
    } else {
      end.setDate(30);
      end.setHours(23,59,59,999);
      end = end.getTime()
    }
    //end.setDate(31);
    //end.setHours(23,59,59,999);
    //end = end.getTime()

    var param_id =  $("#btnForMonth").val();
    var rpi = param_id.substring(0,3);
    //console.log(start);
    publish(rpi, param_id, start, end);
  })
})

//get data from button chat month and publish to mqtt
$(document).ready(function () {
  $("#btnForYear").click(function () {
    //set time start
    var start = new Date();
    start.setMonth(0);
    start.setDate(1);
    start.setHours(0,0,0,0);
    start = start.getTime()
    //set thime end
    var end = new Date();
    end.setMonth(11);
    end.setDate(31);
    end.setHours(23,59,59,999);
    end = end.getTime()

    var param_id =  $("#btnForYear").val();
    var rpi = param_id.substring(0,3);
    //console.log(start, end);
    publish(rpi, param_id, start, end);
  })
})