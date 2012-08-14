<?php
//check if the user already exist and continue
if(isset($_COOKIE['full_name'])){
	
	//go to the next step
	header('Location: index.php?step=2');
	
}else{
	//error
	$inputerror = '';
	
	//check if the begin test button has been clicked
	if(isset($_POST['begin'])){
		
		//get post values and store them in variables
		$full_name = ucwords($_POST['full_name']);
		
		if($full_name != ''){
			
			//set cookie of values
			setcookie('full_name', $full_name, 0, '/');
			
			//go to the next step
			header('Location: index.php?step=2');
		}else{
			$inputerror = 'class="input_error" placeholder="Enter your full name first"';
		}
	}
}
?>
<div class="wrapper">
<div class="step"><?php echo $_GET['step']; ?></div>
  <h2>Please enter your full name below.</h2>
  <div class="forms">
    <form id="form" method="post" action="">
      <table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><input type="text" name="full_name" style="width:400px" <?php echo $inputerror; ?>/></td>
        </tr>
        <tr>
          <td align="center"><input type="submit" name="begin" class="btn btn-success" value="Begin Test"/></td>
        </tr>
      </table>
    </form>
  </div>
  <div class="tips-wrap">
    <div class="tips"><div class="quote1"></div><blockquote><?php echo $quotes[$random]; ?></blockquote><div class="quote2"></div></div>
  </div>
</div>