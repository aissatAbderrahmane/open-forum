<?PHP
	/* * * * * * * * * * * * * * * * * * * *
	 *        AL Forum 0.1 By MR-O         *
	 * * * * * * * * * * * * * * * * * * * */

	 
	include("inc/core_tmp.php");
	include("inc/db_manager.php");
	 try{
	 $class = new D01c();
	 $header = new MAINs("tmp/header.tmp"); # header tmp file.
	 $lastTopic = new MAINs("tmp/lastTopic.tmp"); # slideToggle tmp file.
	 $forums = new MAINs("tmp/Forums.tmp"); # forums & cats tmp file.
	 $footer = new MAINs("tmp/footer.tmp"); # footer tmp file.
	 }catch(Exception $err){
		echo $err->getMessage();
	 } 

	/*
	ajaxhost
	riad001974@live.fr
	*/
	
?>