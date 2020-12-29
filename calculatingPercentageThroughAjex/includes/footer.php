<footer>
	<script type="text/javascript">

// CALCULATING PERCENTAGE OF SUBJECT //

/*		$(".customButton").click(function(){
			var postID = $(this).attr('id');
			var $this = this;
			$.ajax({
				data:{"post_id":postID},
				dataType:'json',
				url:'functions.php',
				type:'POST',
				success:function(response){
					if (response) {
						$($this).parent().parent().fadeOut();
					}
					else{
						alert('Oops Something went wrong');
					}
				},
				error:function(error){
						alert('Oops Something went wrong');
				},
			});
		});*/


/*  $('#written_marks, #grom_marks, #viva_marks').change(function() {
    var written_marks = parseFloat($('#written_marks').val()) || 0;
    var grom_marks = parseFloat($('#grom_marks').val()) || 0;
    var viva_marks = parseFloat($('#viva_marks').val()) || 0;

    $('#obt_marks').val(written_marks + viva_marks + grom_marks);
    $("#obt_marks").trigger("change");
  });

  $('#total_marks, #subjectMarksObtained').change(function() {
    var total_marks = parseFloat($('#total_marks').val());
    var obt_marks = parseFloat($('#subjectMarksObtained').val());
    //var viva_marks = parseFloat($('#viva_marks').val()) || 0;

    $('#PERCENTAGE').val((obt_marks * 100) / total_marks);
  });*/

// CALCULATING PERCENTAGE OF SUBJECT //

// ADDING INPUT FIELDS //

	    function UIPopulate() {
	        var noOfSubjects = $('#noOfSubjects').val();

	        var h = '';
	        for (i = 0; i < noOfSubjects; i++) {
	            h += '<tr>';

	            h += '<td>';
	            h += '<span>Subject ' + (i + 1) + ' -> </span>';
	            h += '</td>';

	            h += '<td>';
	            h += '<span>Name :</span>';
	            h += '</td>';

	            h += '<td>';
	            h += '<input type="text" class="subjectName" id="subjectName' + i + '"/>';
	            h += '</td>';

	            h += '<td>';
	            h += '<span>Marks Obtained :</span>';
	            h += '</td>';

	            h += '<td>';
	            h += '<input type="number" min="0" max="100" class="subjectMarks" id="subjectMarksObtained' + i + '"/>';
	            h += '</td>';

	            h += '</tr>';
	        }

	        $('#inputTable').html(h);
	    }

		$(".customButton").click(function() {
			var subName = $(".subjectName");
			var subMarks = $(".subjectMarks");
			var obtmark = 0;
			var test = subMarks[0].value;
			for ( i = 0; i < subName.length; i++ ) {
				
				if (test <= subMarks[i].value) {
					$("#maxMarksSubject").val(subName[i].value); 
					$("#maxMarks").val(subMarks[i].value);
				}

				if (test >= subMarks[i].value) {
					$("#minMarksSubject").val(subName[i].value);
					$("#minMarks").val(subMarks[i].value);
				}

				obtmark += parseInt(subMarks[i].value);
			}

			var totalmarks = i+'00';
			var percent = (obtmark/totalmarks)*'100'+"%";
			$("#percentage").val(percent); 
		});



// ADDING INPUT FIELDS //

	</script>
</footer>
</html>