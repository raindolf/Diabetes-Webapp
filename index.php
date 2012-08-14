<?php
//output start
ob_start();

//include required files
require_once('includes/quotes.php');

//get number of quotes
$random = rand(1,$limit);

//include header
require('html/header.php');

//check if page uri is set
if(isset($_GET['step'])){
	
	//include step 1
	if($_GET['step'] == 1){ require('html/step1.php'); }

	//include step 2
	if($_GET['step'] == 2){ require('html/step2.php'); }
	
	//include step 3
	if($_GET['step'] == 3){ require('html/step3.php'); }
	
	//include step 4
	if($_GET['step'] == 4){ require('html/step4.php'); }

	//include step 5
	if($_GET['step'] == 5){ require('html/step5.php'); }
	
}else{
	header('Location: index.php?step=1');
}

//include footer
require('html/footer.php');

//output end
ob_end_flush()
?>