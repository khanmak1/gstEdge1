$(document).ready(function() {
	
$("#submit").click(function() {
var year = $("#year").val();
var no_emp = $("#no_emp").val();
if (year == '' || no_emp == '') {
alert("Insertion Failed Some Fields are Blank....!!");
} else {
	
// Returns successful data submission message when the entered information is stored in database.

$.post("submit.php", {
year: year,
no_emp: no_emp
}, function(data) {
alert(data);
$('#form')[0].reset(); // To reset form fields
});
}
});

$("#reply").click(function() {

$.post("reply.php", {}, function(data) {
	$('#response').html(data);

});

});


});