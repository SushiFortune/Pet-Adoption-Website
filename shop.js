setInterval(getCurrentDate,1000);
function getCurrentDate()
{
var p = document.getElementById("dem");
const day=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
const month = ["Jan","Feb","Mar","Apr","May","June","July","Aug","Sept","Oct","Nov","Dec"];

var date=new Date();
var n = date.toLocaleTimeString();
var dayname=day[date.getDay()];
var daynumber=date.getDate();
var monthname=month[date.getMonth()];
var year=date.getFullYear();

var string= dayname +", "+ monthname+ " "+daynumber+", "+year+" "+n;  
console.log(string);
p.textContent = string;

}

function myFunction() {
    alert("This is a privacy statement to assure you that your information will not be sold or misused, and the website builder protects you from falsified information.");
  }