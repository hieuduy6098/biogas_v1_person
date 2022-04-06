function updateGuiRealTimeValue(name, rpi, value, unit){
    //var doc_element = document.getElementById(rpi+"Ia");
    var doc_element = document.getElementById(rpi+name);
    //If it isn't "undefined" and it isn't "null", then it exists.
    if(typeof(doc_element) != 'undefined' && doc_element != null){
        document.getElementById(rpi+name).innerHTML = value + unit;
    }
}

// function add data electrical to html
function getDataElectrical(data, rpi) {
    data.forEach(element => {
        var temp_id = element.id;
        temp_id = temp_id.replace(rpi,'');
        //console.log(temp_id);
        switch (temp_id) {
            case "eleia":
                updateGuiRealTimeValue("Ia", rpi, element.v, " A");
                break;
            case "elevab":
                updateGuiRealTimeValue("Vab", rpi, element.v, " V");
                break;
            case "eleewh":
                var value = (element.v)/1
                value = value.toFixed(2);
                updateGuiRealTimeValue("Energy", rpi, value, " kWh");
                break;
            case "elepwt":
                var value = (element.v)/1000
                value = value.toFixed(2);
                updateGuiRealTimeValue("Power", rpi, value, " kW");
                break;
        };
    });
}

// function add data environment to html
function getDataEvironment(data, rpi) {
    data.forEach(element => {
        var temp_id = element.id;
        temp_id = temp_id.replace(rpi,'');
        switch (temp_id) {
            case "envtw":
                updateGuiRealTimeValue("tempH2o", rpi, element.v, " &#8451;");
                break;
            case "envpo":
                updateGuiRealTimeValue("pressureoil", rpi, element.v, " P");
                break;
            case "envo2":
                updateGuiRealTimeValue("concO2", rpi, element.v, " lambda");
                break;
            case "envh2s":
                updateGuiRealTimeValue("concH2s", rpi, element.v, " ppm");
                break;
        }
    });
}

// function add data environment to html
function getDataOperation(data, rpi) {
    data.forEach(element => {
        var temp_id = element.id;
        temp_id = temp_id.replace(rpi,'');
        //console.log(temp_id);
        switch (temp_id) {
            case "opevpb":
                updateGuiRealTimeValue("opevpb", rpi, element.v, "");
                break;
            case "opepb":
                updateGuiRealTimeValue("opepb", rpi, element.v, "");
                break;
            case "opevsfb":
                updateGuiRealTimeValue("opevsfb", rpi, element.v, "");
                break;
            case "opetb":
                var dateTimeStamp = new Date().getTime();
                var timeBeginTimeStamp = Number(element.v)
                var timeOperate = (dateTimeStamp - timeBeginTimeStamp)/1000>>0;
                var timeOperateH = timeOperate/3600>>0;
                var timeOperateM = (timeOperate%3600)/60>>0;
                var timeOperateS = (timeOperate%3600)%60;

                var operateTime = String(timeOperateH) +":"+ String(timeOperateM) +":"+ String(timeOperateS);
                var timeBegin = new Date(timeBeginTimeStamp);
                var timeBeginTime = timeBegin.toLocaleTimeString();
                var timeBeginDate = timeBegin.toLocaleDateString();
                //console.log(timeBeginDate);
                updateGuiRealTimeValue("daytb", rpi, timeBeginDate, "");
                updateGuiRealTimeValue("timetb", rpi, timeBeginTime, "")
                updateGuiRealTimeValue("op", rpi, operateTime, "")
                break;
        }
    });
}

// called when a message arrives
function onMessageArrived(message) {
    if(message) {
        try {
            var data = JSON.parse(message.payloadString);
            //console.log(data);
            var topic = message.destinationName;
            if (topic == "sensor_data") {
                // revise this piece of code later
                if (data.rpi == "g01") {
                    if (data.type == "electrical") {
                        getDataElectrical(data.data, data.rpi)
                    } else if (data.type == "environment") {
                        getDataEvironment(data.data, data.rpi)
                    } else if (data.type == "operation") {
                        getDataOperation(data.data, data.rpi)
                    }
                } else if (data.rpi == "g02") {
                    if (data.type == "electrical") {
                        getDataElectrical(data.data, data.rpi)
                    } else if (data.type == "environment") {
                        getDataEvironment(data.data, data.rpi)
                    } else if (data.type == "operation") {
                        getDataOperation(data.data, data.rpi)
                    }
                } else if (data.rpi == "g03") {
                    if (data.type == "electrical") {
                        getDataElectrical(data.data, data.rpi)
                    } else if (data.type == "environment") {
                        getDataEvironment(data.data, data.rpi)
                    } else if (data.type == "operation") {
                        getDataOperation(data.data, data.rpi)
                        console.log()
                    }
                } else if(data.rpi == "g04") {
                    if (data.type == "electrical") {
                        getDataElectrical(data.data, data.rpi)
                    } else if (data.type == "environment") {
                        getDataEvironment(data.data, data.rpi)
                    } else if (data.type == "operation") {
                        getDataOperation(data.data, data.rpi)
                    }
                } else if(data.rpi == "g05") {
                    if (data.type == "electrical") {
                        getDataElectrical(data.data, data.rpi)
                    } else if (data.type == "environment") {
                        getDataEvironment(data.data, data.rpi)
                    } else if (data.type == "operation") {
                        getDataOperation(data.data, data.rpi)
                    }
                } else if(data.rpi == "g06") {
                    if (data.type == "electrical") {
                        getDataElectrical(data.data, data.rpi)
                    } else if (data.type == "environment") {
                        getDataEvironment(data.data, data.rpi)
                    } else if (data.type == "operation") {
                        getDataOperation(data.data, data.rpi)
                    }
                } else if(data.rpi == "g07") {
                    if (data.type == "electrical") {
                        getDataElectrical(data.data, data.rpi)
                    } else if (data.type == "environment") {
                        getDataEvironment(data.data, data.rpi)
                    } else if (data.type == "operation") {
                        //console.log(data.data);
                        getDataOperation(data.data, data.rpi)
                    }
                } else if(data.rpi == "g08") {
                    if (data.type == "electrical") {
                        getDataElectrical(data.data, data.rpi)
                    } else if (data.type == "environment") {
                        getDataEvironment(data.data, data.rpi)
                    } else if (data.type == "operation") {
                        //console.log(data.data);
                        getDataOperation(data.data, data.rpi)
                    }
                } else if(data.rpi == "g09") {
                    if (data.type == "electrical") {
                        getDataElectrical(data.data, data.rpi)
                    } else if (data.type == "environment") {
                        getDataEvironment(data.data, data.rpi)
                    } else if (data.type == "operation") {
                        //console.log(data.data);
                        getDataOperation(data.data, data.rpi)
                    }
                } else if(data.rpi == "g10") {
                    if (data.type == "electrical") {
                        getDataElectrical(data.data, data.rpi)
                    } else if (data.type == "environment") {
                        getDataEvironment(data.data, data.rpi)
                    } else if (data.type == "operation") {
                        //console.log(data.data);
                        getDataOperation(data.data, data.rpi)
                    }
                } else if(data.rpi == "g11") {
                    if (data.type == "electrical") {
                        getDataElectrical(data.data, data.rpi)
                    } else if (data.type == "environment") {
                        getDataEvironment(data.data, data.rpi)
                    } else if (data.type == "operation") {
                        //console.log(data.data);
                        getDataOperation(data.data, data.rpi)
                    }
                } else if(data.rpi == "g12") {
                    if (data.type == "electrical") {
                        getDataElectrical(data.data, data.rpi)
                    } else if (data.type == "environment") {
                        getDataEvironment(data.data, data.rpi)
                    } else if (data.type == "operation") {
                        //console.log(data.data);
                        getDataOperation(data.data, data.rpi)
                    }
                } else if(data.rpi == "g13") {
                    if (data.type == "electrical") {
                        getDataElectrical(data.data, data.rpi)
                    } else if (data.type == "environment") {
                        getDataEvironment(data.data, data.rpi)
                    } else if (data.type == "operation") {
                        //console.log(data.data);
                        getDataOperation(data.data, data.rpi)
                    }
                } else if(data.rpi == "g14") {
                    if (data.type == "electrical") {
                        getDataElectrical(data.data, data.rpi)
                    } else if (data.type == "environment") {
                        getDataEvironment(data.data, data.rpi)
                    } else if (data.type == "operation") {
                        //console.log(data.data);
                        getDataOperation(data.data, data.rpi)
                    }
                } else if(data.rpi == "g15") {
                    if (data.type == "electrical") {
                        getDataElectrical(data.data, data.rpi)
                    } else if (data.type == "environment") {
                        getDataEvironment(data.data, data.rpi)
                    } else if (data.type == "operation") {
                        //console.log(data.data);
                        getDataOperation(data.data, data.rpi)
                    }
                } else if(data.rpi == "g16") {
                    if (data.type == "electrical") {
                        getDataElectrical(data.data, data.rpi)
                    } else if (data.type == "environment") {
                        getDataEvironment(data.data, data.rpi)
                    } else if (data.type == "operation") {
                        //console.log(data.data);
                        getDataOperation(data.data, data.rpi)
                    }
                } else if(data.rpi == "g99") {
                    if (data.type == "electrical") {
                        getDataElectrical(data.data, data.rpi)
                    } else if (data.type == "environment") {
                        getDataEvironment(data.data, data.rpi)
                    } else if (data.type == "operation") {
                        getDataOperation(data.data, data.rpi)
                    }
                }
            }
            // get data from client_response/history
            else if (topic == "client_response/history") {
                if (!Array.isArray(data.data) || !data.data.length) {
                  // array does not exist, is not an array, or is empty
                  // ⇒ do not attempt to process array
                  console.log("No data");
                }
                else {
                    //
                    if (data.rpi == "g01") {
                        getChartData(data);
                    } else if (data.rpi == "g02"){
                        getChartData(data);
                    } else if (data.rpi == "g03"){
                        getChartData(data);
                    } else if (data.rpi == "g04"){
                        getChartData(data);
                    } else if (data.rpi == "g05"){
                        getChartData(data);
                    } else if (data.rpi == "g06"){
                        getChartData(data);
                    } else if (data.rpi == "g07"){
                        getChartData(data);
                    } else if (data.rpi == "g08"){
                        getChartData(data);
                    } else if (data.rpi == "g09"){
                        getChartData(data);
                    } else if (data.rpi == "g10"){
                        getChartData(data);
                    } else if (data.rpi == "g11"){
                        getChartData(data);
                    } else if (data.rpi == "g12"){
                        getChartData(data);
                    } else if (data.rpi == "g13"){
                        getChartData(data);
                    } else if (data.rpi == "g14"){
                        getChartData(data);
                    } else if (data.rpi == "g15"){
                        getChartData(data);
                    } else if (data.rpi == "g16"){
                        getChartData(data);
                    } else if (data.rpi == "g099"){
                        getChartData(data);
                    }
                }
            }
        } catch(e) {
            console.log("no data request" + e.message); // error in the above string (in this case, yes)!
        }
    }
}

//function get chart to html
function getChart(x, y, chartId, valuaName, yAxesTitle, xAestitle) {
    var ctx = document.getElementById(chartId).getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: x,
            datasets: [{
            label: valuaName,
            data: y,
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
            }]
        },
        // options: {
        //     scales: {
        //         y: {
        //         beginAtZero: true,
        //         }
        //     },
        options : {
            scales: {
                yAxes: [{
                    scaleLabel: {
                    display: true,
                    labelString: yAxesTitle,
                    }
                }],
                xAxes: [{
                    scaleLabel: {
                    display: true,
                    labelString: xAestitle,
                    }
                }],
            }
        }
    });
}
// function get data from mqtt end push to array then call get chart function
function getChartData(data) {
    if (data.id.substring(3) == "elepah") {
        var hoursArray = new Array();
        var dataChart = new Array()

        for (var x = 0; x < 24; x++) {
            hoursArray.push(x);
            dataChart.push(0);
            data.data.forEach(element => {
                var tempDate = new Date(element.t);
                var hour = tempDate.getHours();
                if (hour == x + 1){
                    dataChart[x]=element.v;
                }
            });
        };
        var valueName = "Công suất trung bình mỗi giờ";
        getChart(hoursArray, dataChart, "chart1", valueName, data.unit, "Giờ");
    } else if (data.id.substring(3) == "eleeda"){
        var dayArray = new Array();
        var dataChart = new Array()

        // get the number of days in the current month
        numOfDays = 31;
        var now = new Date();
        numOfDays = new Date(now.getFullYear(), now.getMonth()+1, 0).getDate();

        for (var x = 0; x < numOfDays; x++) {
            dayArray.push(x+1);
            dataChart.push(0);
            data.data.forEach(element => {
                var tempDate = new Date(element.t);
                var day = tempDate.getDate(); // varries from 1 - 31
                if (day == x+1){
                    dataChart[x] = element.v;
                }
            });
        };
        var valueName = "Số điện hằng ngày trong tháng";
        getChart(dayArray, dataChart, "chart2", valueName, data.unit, "Ngày");
    } else if (data.id.substring(3) == "eleemo"){
        var monthArray = new Array();
        var dataChart = new Array()
        for (var x = 0; x < 12; x++) {
            monthArray.push(x+1);
            dataChart.push(0);
            data.data.forEach(element => {
                var tempDate = new Date(element.t);
                var month = tempDate.getMonth(); // varries from 0 - 11
                if (month == x){
                    //console.log(month);
                    dataChart[x]=element.v;
                }
            });
        };
        var valueName = "Số điện hàng tháng trong năm";
        getChart(monthArray, dataChart, "chart2", valueName, data.unit, "Tháng");
    }
}