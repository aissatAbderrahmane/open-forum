<?PHP
	/* * * * * * * * * * * * * * * * * * * *
	 *      Print Forum 0.1 By MR-O        *
	 * * * * * * * * * * * * * * * * * * * */
	 error_reporting(e_all);
	 
include("inc/core_tmp.php");
include("inc/db_manager.php");
	
	// try{
	 $class = new D01c();
	 $Ox = "Hello";
	 $MO = "MR-O";
	# $test = new main("tmp/test.tmp"); # test tmp file.
$var = array();
$rep = array();
$var[0] = "#\\$\('Print','([a-zA-Z]+)'\)#i";
$var[1] = "#\\$\('var','([a-zA-Z]+)'\)#i";
$var[2] = "#\\$('Evar','([a-zA-Z]+)'\)#i";
$rep[0] = ' echo("$1"); ';
$rep[1] = ' $GLOBALS["$1"]; ';
$rep[2] = ' echo($GLOBALS["$1"]); ';
	$TMP = file_get_contents("tmp/test.tmp");
		//if(preg_match($var[$i], $TMP)){
		//echo $i.preg_match($var[$i], $TMP)."<br>";
	$MP = preg_replace($var, $rep, $TMP);
		var_dump($MP);
	// }catch(Exception $err){
	//	echo $err->getMessage();
	// } 


	/*
	ajaxhost
	riad001974@live.fr
	*/
	
?>