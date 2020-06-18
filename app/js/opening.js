var date = new Date();
var day = date.getDay();
var hour = date.getHours();

// check if its sunday or saturday

if (day == 0) {
  document.getElementById('checkDate').innerHTML = "<strong>Currently Closed</strong> on Sunday.";

// check if its between 11am and 8pm 

} else if (hour >= 11 && hour <= 20) {
  document.getElementById('checkDate').innerHTML = "<strong>We are currently open.</strong>";
} else {
  document.getElementById("checkDate").innerHTML = '<strong>Closed!</strong> The store is open between 11:00 AM - 20:00 PM';
}
