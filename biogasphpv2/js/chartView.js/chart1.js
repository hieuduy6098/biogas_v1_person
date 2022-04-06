$(document).ready(function () {
  $("#reload").click(function () {
    var date = new Date();
    var start = date.setHours(0,0,0,0);
    var end = date.setHours(23,59,59,999);
    //console.log(start, end);
    var is_valid_duration = true;
    if (is_valid_duration) {
      publish("g01", "g01elepah", start, end);
      //publish("g01", "g01eleemo", start, end);
      //publish("g01", "g01eleeda", start, end);
  }  
  })
})