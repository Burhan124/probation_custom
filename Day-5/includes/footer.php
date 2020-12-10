<script type="text/javascript">
	$(".delete-post").click(function(){
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
	});
</script>
</html>