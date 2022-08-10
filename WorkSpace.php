<?PHP
	/*
 	================================#	Mysql Tables	#=============================
	#---> MEx01 => Members Table <---#
		CREATE TABLE `MEx01` (
		`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
		`name` VARCHAR( 50 ) NOT NULL ,
		`email` VARCHAR( 100 ) NOT NULL ,
		`sex` INT( 1 ) NOT NULL ,
		`birthday` VARCHAR( 11 ) NOT NULL ,
		`country` VARCHAR( 5 ) NOT NULL ,
		`posts` INT NOT NULL ,
		`level` INT( 1 ) NOT NULL ,
		`ip` VARCHAR( 40 ) NOT NULL ,
		`dateins` VARCHAR( 11 ) NOT NULL ,
		`lastvisit` VARCHAR( 8 ) NOT NULL ,
		`image` VARCHAR( 250 ) NOT NULL ,
		`myword` TEXT NOT NULL ,
		`supernum` INT NOT NULL ,
		`medals` TEXT NOT NULL ,
		`status` INT( 1 ) NOT NULL
		)
		
	#---> CAx02 => Cats Table <---#
		CREATE TABLE `cax02` (
		`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
		`title` VARCHAR( 100 ) NOT NULL ,
		`icon` VARCHAR( 250 ) NOT NULL ,
		`position` INT NOT NULL ,
		`hide` INT( 1 ) NOT NULL ,
		`groupe` INT( 1 ) NOT NULL ,
		`status` INT( 1 ) NOT NULL
		) 
		
	#---> FCx03 => Forums & Sub Cats Table <---#	
		CREATE TABLE `fcx03` (
		`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
		`title` VARCHAR( 100 ) NOT NULL ,
		`cat` INT NOT NULL ,
		`frm` INT NOT NULL ,
		`type` INT( 1 ) NOT NULL ,
		`topics` INT NOT NULL ,
		`posts` INT NOT NULL ,
		`vesits` INT NOT NULL ,
		`icon` VARCHAR( 250 ) NOT NULL ,
		`lastpost` VARCHAR( 50 ) NOT NULL ,
		`groupe` INT( 1 ) NOT NULL ,
		`hide` INT NOT NULL ,
		`status` INT( 1 ) NOT NULL
		) 
	
	#---> TPx04 => Topics Table <---#	
		CREATE TABLE `tpx04` (
		`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
		`title` VARCHAR( 100 ) NOT NULL ,
		`contenu` TEXT NOT NULL ,
		`reli` INT NOT NULL ,
		`posts` INT NOT NULL ,
		`hide` INT( 1 ) NOT NULL ,
		`pin` INT( 1 ) NOT NULL ,
		`members` MEDIUMTEXT NOT NULL ,
		`date` VARCHAR( 11 ) NOT NULL ,
		`groupe` INT( 1 ) NOT NULL ,
		`writer` INT NOT NULL ,
		`status` INT( 1 ) NOT NULL
		) 
	
	#---> PTx05 => Posts Table <---#	
		CREATE TABLE `ptx05` (
		`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
		`contenu` TEXT NOT NULL ,
		`writer` INT NOT NULL ,
		`hide` INT( 1 ) NOT NULL ,
		`topic` INT NOT NULL ,
		`datetime` VARCHAR( 20 ) NOT NULL ,
		`status` INT( 1 ) NOT NULL
		) 	
	
	#---> MSx06 => Messages Table <---#	
		CREATE TABLE `msx06` (
		`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
		`title` VARCHAR( 100 ) NOT NULL ,
		`contenu` TEXT NOT NULL ,
		`from` INT NOT NULL ,
		`to` INT NOT NULL ,
		`datetime` VARCHAR( 20 ) NOT NULL ,
		`status` INT( 1 ) NOT NULL
		)
	
	#---> MDx07 => Medals Table <---#	
		CREATE TABLE `mdx07` (
		`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
		`title` VARCHAR( 100 ) NOT NULL ,
		`img` VARCHAR( 250 ) NOT NULL ,
		`supernum` INT( 1 ) NOT NULL ,
		`status` INT( 1 ) NOT NULL
		) 
	
	#---> TIx08 => Titles Table <---#	
		CREATE TABLE `tix08` (
		`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
		`title` VARCHAR( 100 ) NOT NULL ,
		`frm` INT NOT NULL ,
		`cat` INT NOT NULL ,
		`color` VARCHAR( 7 ) NOT NULL ,
		`status` INT( 1 ) NOT NULL
		)
	
	#---> PBx09 => Pub Table <---#	
		CREATE TABLE `pbx09` (
		`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
		`title` VARCHAR( 100 ) NOT NULL ,
		`datexpire` VARCHAR( 11 ) NOT NULL ,
		`datewrite` VARCHAR( 11 ) NOT NULL ,
		`img` VARCHAR( 250 ) NOT NULL ,
		`href` VARCHAR( 250 ) NOT NULL ,
		`status` INT( 1 ) NOT NULL
		)
	
	#---> MODx10 => Moderators Table <---#	
		CREATE TABLE `modx10` (
		`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
		`membre` INT NOT NULL ,
		`frm` INT NOT NULL ,
		`status` INT( 1 ) NOT NULL
		)
	
	*/
?>