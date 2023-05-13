// document.write("Hello World");

function setDate() {

    let date = new Date();
    let hour = date.getHours();
    let min = date.getMinutes();
    let sec = date.getSeconds();
    let session = "AM";
    let d = date.getDate();
    let m = date.getMonth();
    let y = date.getFullYear();
    let day = date.getDay();

    let dayList = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];

    let DateResult = document.getElementById('hour');
    
    if (hour > 12) {
        session = "PM";
    }

    hour = (hour < 10) ? "0" + hour : hour;
    min = (min < 10) ? "0" + min : min;
    sec = (sec < 10) ? "0" + sec : sec;

    let time = hour + ":" + min + ":" + sec // + " " + session;
    DateResult.innerText = time;
    let t = setTimeout(function() {setDate()},1000);

    d = (d < 10) ? "0" + d : d;
    m = (m < 10) ? "0" + m : m;
    
    document.getElementById('date').innerText = d + "-" + m + "-" + y;
    document.getElementById('day').innerText = dayList[day];
}

setDate();


