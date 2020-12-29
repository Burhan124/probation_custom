<footer>
<!-- My jQuery Start-->
<!-- jQuery -->
<script src="../startmin-master/js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../startmin-master/js/bootstrap.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="../startmin-master/js/metisMenu.min.js"></script>
<!-- DataTables JavaScript -->
<script src="../startmin-master/js/dataTables/jquery.dataTables.min.js"></script>
<script src="../startmin-master/js/dataTables/dataTables.bootstrap.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="../startmin-master/js/startmin.js"></script>
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
$('#dataTables-example').DataTable({
responsive: true
});
});
</script>
<script type="text/javascript">
/***************APPLY ACTIVE CLASS ON DIV***************/
/*$('input.active_login').click(function(){
$('.login_form').addclass('active');
});
$('input.active_log_reg').click(function(){
$('.registration_form').toggleClass('active');
});
*/
$(document).ready(function(){
	$('input.active_login').click(function(){
		$('.login_form').show();
			$('.registration_form').hide();
});
	$('input.active_log_reg').click(function(){
		$('.registration_form').show();
			$('.login_form').hide();
	});
});
/***************APPLY ACTIVE CLASS ON DIV***************/
$("#reg-form").submit(function(event){
event.preventDefault();
	var firstName = $('#fname').val();
	var lastName = $('#lname').val();
	var userName = $('#user_reg').val();
	var password = $('#Password').val();
	var conformPassword = $('#Conform_Password').val();
	var errors =0;
	if (firstName == "") {
		errors++;
	}
	if (lastName == "") {
		errors++;
	}
	if (userName == "") {
		errors++;
	}
	if (password != conformPassword) {
		$(".error-pass").fadeIn();
		errors++;
	}
	else{
		$(".error-pass").fadeOut();
	}
	if (errors ==0) {
		var formData = $('#reg-form').serialize();
		$.ajax({
		type: 'post',
		url: 'controller.php',
		data: formData,
		dataType: 'json',
		success:function (response) {
			alert(response.message);
		},
		error:function(errorThrown){
			console.log(errorThrown);
		alert('Oops Something went wrong');
		}
		});
	}
	else {
		$("#reg-form").submit(function(){
			$('.text').show();
		})
	}
if (conformPassword == "") {
		// alert ('Password Dose Not Match');
		$('#Conform_Password').addClass('error');
	}
});
/************* ADD DEV J QUERY ****************/
var max_fields = 10; //maximum input boxes allowed
var wrapper = $(".quiz_main"); //Fields wrapper
var html = $(".quiz_main").html();
var x = 1; //initlal text box count
$(document).on("click",".add-quiz-q",function(e) {
// e.preventDefault();
	if(x < max_fields){ //max input box allowed
//text box increment
		$('.add-quiz-q').hide();
		$(wrapper).append(html); //add input box
			$(".remove-quiz-q").show();
				x++;
	if (x == max_fields) {
		$('.add-quiz-q').hide();
		alert("Only 10 Qustion Allowed");
		}
	}
});

$(document).on("click",".remove-quiz-q", function(e){ //user click on remove text
	e.preventDefault();
		if (x>1) {
			$(this).closest('.quiz_inner').remove();
				x--;
		}
	if (x==1) {
		$('.add-quiz-q').last().show();
		$(".remove-quiz-q").hide();
	}
});
/************* ADD DEV J QUERY ****************/

/*************ADD CLASS TO DEV ***************/
var score = ""; 
var total = "";
$("#next-q").click(function(){
	$('#check_image').attr("src", "images/first.png");
	$(this).attr("disabled", true);
		if ($(".active").hasClass("passed")) {
			$(".passed").addClass("deactive passed").removeClass('active');
	}
	$(".active").addClass("deactive").addClass("passed").removeClass('active');
	$(".passed").last().next().addClass("active").removeClass("deactive");
		if ($('.active').next().hasClass('next_button')) {
		/* AGR PASSED K BAD LAST CLASS NEXT_BUTTON MIL JATO TO REDARICT TO ANOTHER PAGE */
			score = $('#incriment').val();
			total = $('#tot_qustion').val();
			$('#sbmit_qust_btn').show();
			$('#next-q').hide();
		//window.location.href = '../startmin-master/userresultpage.php?score='+score;
		//window.location.href = `../startmin-master/userresultpage.php?score=${score}&outoftotal=${total}`;
	}
// $(".next_button").find('button[type="button"]').attr("disabled", true);
});

/*************ADD CLASS TO DEV ***************/
$(".quiz_option").click(function(){
score = + $('#incriment').val(); // + sign and parsentIn function is use to convert string into integer both are same
/* STORE CORRECT ANSWER VALUE IN VARIABLE */
var hiddenvalue = $(".active").find("input[name=correct_answer]").val();
/* RADIO BUTTON IF CHECK DISABLE OTHER RADIO BUTTONS */
var selectedvalue = $(".active").find("input.quiz_option:checked").val();
/* DISABLE RADIO BUTTONS */
$(".next_button").find("input[name='qust_btn']").attr("disabled", "disabled");
	$(".active").find(":radio:not(:checked)").attr("disabled", true);
		$("#next-q").attr("disabled", false);
/**** TO CHECK IF THE ANSWER IS RIGHT OR WRONG ****/
			if (hiddenvalue == selectedvalue) {
				$('#check_image').attr("src", "images/right.jpg");
							// 1 +1
					$('#incriment').val(score+1); /* CHECK IF ANSWER IS RIGHT THEN ADD 1 AND AGAIN CHECK 2nd ANSWER IS RIGHT ADD 2 AND SOO ON */
			}
else{
	$('#check_image').attr("src", "images/wrong.jpg");
}
if ($(".active").next().hasClass("next_button")) {
	$("#sbmit_qust_btn").attr("disabled", false);
}
});

$("#qustion_form").submit(function(e){
	var scorenew = $('input[name=score]').val();
	e.preventDefault();
	// var test = $("").val();
	// console.log(test);
	// var arr = [];
	// $('input[name^=radio]:checked').each(function () {
	//     arr.push($(this).val());
 //  });
 // if ($('input[name^=radio]').is(':checked')) {
 var formData = $(this).serialize()
	$.ajax({
		dataType:'json',
		url:'../startmin-master/addquizquery.php',
		type:'POST',
		data:formData,
		success:function(response){

		//window.location.href = `../startmin-master/userresultpage.php?score=${score}&outoftotal=${total}`;
		window.location.replace('../startmin-master/userresultpage.php'+`?score=${scorenew}&outoftotal=${total}`);},
		error:function(error){
			console.log(error);
		},
	});
 // }

});

</script>
</footer>
</html>