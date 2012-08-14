<?php
//check if the user answered previous questions
if(isset($_COOKIE['full_name'])){
		
	//check if current question has been answered
	if(!isset($_COOKIE['age'])){
		
		//check if the next button has been clicked
		if(isset($_POST['next'])){
			
			//get post values and store them in variables
			$age = $_POST['age'];
				
			//store values in session
			setcookie('age', $age, 0, '/');
			
			//go to the next step
			header('Location: index.php?step=3');
		}
		
	}else{
		
		//go to the previous step
		header('Location: index.php?step=3');
	}
	
}else{
		
	//go to the previous step
	header('Location: index.php?step=1');
}
?>
<div class="wrapper">
<div class="step"><?php echo $_GET['step']; ?></div>
  <h2>Welcome, <?php echo $_COOKIE['full_name']; ?></h2>
  <div class="forms">
    <form id="form" method="post" action="">
      <table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><label class="control-label"><strong>How old are you?</strong></label>
            <table width="410">
              <tr>
                <td valign="bottom"><input type="radio" name="age" value="Below 20yrs" id="age_0" checked/> Below 20yrs</td>
                <td valign="bottom"><input type="radio" name="age" value="Between 20yrs - 60yrs" id="age_1" /> Between 20yrs - 60yrs</td>
                <td valign="bottom"><input type="radio" name="age" value="Above 60yrs" id="age_2" /> Above 65yrs</td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td align="center"><br /><input type="submit" name="next" class="btn btn-success" value="Next Step"/></td>
        </tr>
      </table>
    </form>
  </div>
  <div class="tips-wrap">
    <div class="tips"><div class="quote1"></div><blockquote><?php echo $quotes[$random]; ?></blockquote><div class="quote2"></div></div>
  </div>
</div>