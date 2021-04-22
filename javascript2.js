<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#username').keyup(function() {
	var usercheck = $(this).val();
		    $('#usercheck').html('<img src="loading.gif" width="150" />');
			$.post("check.php", {user_name: usercheck} , function(data)
			{
			if (data.status == true)
			{
			$('#usercheck').parent('div').removeClass('has-error').addClass('has-success');
			
			} else {
			$('#usercheck').parent('div').removeClass('has-success').addClass('has-error');
			}
			$('#usercheck').html(data.msg);
			},'json');
	});
});
</script>