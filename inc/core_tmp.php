<?PHP
	/* * * * * * * * * * * * * * * * * * * *
	 *      Core of system template        *
	 * * * * * * * * * * * * * * * * * * * */
	final class MAINs{ # main class doesn't accept any extends class.
		private $file,$Regex,$Main;
		const num = 3; # constant of number of word in text, for Read More Function.
		protected function get_file($f){ # get file content function.
			if(@file_exists($f)){
				$this->file = @file_get_contents($f);
				return $this->file;
			}else{
				throw new Exception("file $f not found !");
			}
		}
		protected function regex($content){ # template system function.
			$this->Regex = preg_replace("#{var:([a-zA-Z0-9-_]+)}#i",'<?PHP echo($GLOBALS["$1"]); ?>',$content);
			$this->Regex = preg_replace("#<var:([a-zA-Z0-9-_]+)>#i",'$GLOBALS["$1"]',$this->Regex);
			$this->Regex = preg_replace("#{class:([a-zA-Z0-9-_()']+)}#i",'<?PHP new $1; ?>',$this->Regex);
			$this->Regex = preg_replace("#{class:([a-zA-Z0-9-_]+)->(.*?)}#i",'<?PHP $GLOBALS["$1"] = new $1; $GLOBALS["$1"]->$2; ?>',$this->Regex);
			$this->Regex = preg_replace("#<if condition:(.*?) >(.*?)#i",'<?PHP if($1){?> $2 ',$this->Regex);
			$this->Regex = preg_replace("#<elseif condition:(.*?) >(.*?)#i",'<?PHP }elseif($1){?> $2 ',$this->Regex);
			$this->Regex = preg_replace("#<else>(.*?)#i",'<?PHP }else{?> $1 ',$this->Regex);
			$this->Regex = preg_replace("#</end>#i",'<?PHP } ?>',$this->Regex);
			$this->Regex = preg_replace("#\\$\('var','([a-zA-Z]+)'\)#i",'<?PHP echo($GLOBALS["$1"]); ?>',$this->Regex);
			return eval("?>".$this->Regex."<?PHP ");
		}
		function __construct($f){ # construct function of the main class.
			$this->MAINS = $this->get_file($f);
			return $this->regex($this->Main);
		}
		function __call($m,$a){ # if a wrong call passed to the main class, this function will auto called...
			
		}
		function x01c($test){ # Read More Function...
			$explode = explode(" ",strip_tags($test));
				for($i = 0;$i < count($explode); $i++){
					if($i == self::num){ echo '...'; break;}
					else echo $explode[$i]." ";
				}
		}
	}
	 class D01c extends DBx00mysql{
		private $rows = "";
		private $table = "";
		private $where = "";
		private $limit = "";
		function selectx01($slt = ""){ # function of select row from table.
			if($slt) $this->rows = $slt; else $this->rows = "*";
		 return $this;
		 }
		function tablex01($tbl){ # function of declaring table name.
			if($tbl) $this->table = $tbl; else throw new Exception("are you sure that you'ved make the true table name ?! ");
		 return $this;	
		}
		function wherex01($whr){ # function of wher .
			if($whr) $this->where = "WHERE ".$whr; else $this->where = "";
		 return $this;
		}
		function limitx01($lmt){ # function of limit.
			if(intval($lmt)>0) $this->limit = "LIMIT ".$lmt; else throw new Exception("limit must be number !");
		 return $this;
		}
		function fetch_result(){ # return the informations in array form.
				 $select = $this->select($this->table,$this->rows,$this->where,$this->limit);
				 $fetch = $this->fetch($select);
				 return $fetch;
		}
		function __construct(){
		global $HOSTNAME,$HOST_USER,$HUSER_PSWD,$DATABASE;
			parent::__construct($HOSTNAME,$HOST_USER,$HUSER_PSWD,$DATABASE);
		}		
	}
	 abstract class DBx00mysql extends mysqli{
	 		private $conct,$DB;	
		function __construct($HOSTNAME,$HOST_USER,$HUSER_PSWD,$DATABASE){
			parent::__construct($HOSTNAME,$HOST_USER,$HUSER_PSWD,$DATABASE);
		}
		function query($query){ 
			return $this->query($query);
		}
		function fetch($fetch){
			return $this->fetch_array($fetch,MYSQLI_BOTH);
		}
		function num($rows){
			if($this->num_rows($rows)) throw new Exception("Database num_rows manager not valid, please verif and try again !");
			else return $this->num_rows($rows);
		}
		function mytables($db){
			if($this->list_table($db)) throw new Exception("Database list_table manager not valid, please verif and try again !");
			else return $this->list_table($db);
		}
		function create_table($table,$valeur,$primary){
		    if(!$this->query("CREATE TABLE $table ($valeur , primary key ($primary) )")) throw new Exception(" Cannot create table ".$table.", please verif database query manager and try again .");
		    else return $this->query("CREATE TABLE $table ($valeur , primary key ($primary) )");
		}
		function drop_table($table){
		    if(!$this->query("DROP TABLE $table ")) throw new Exception(" Cannot drop ".$table.", please verif database query manager and try again !");
		    else return $this->query("DROP TABLE $table ");
		}
		function create_row($table,$row,$valeur){
		    if(!$this->query("ALTER TABLE $table ADD $row $valeur NOT NULL ")) throw new Exception("Cannot create ".$row." in ".$table.", please verif database query manager and try again");
		    else return $this->query("ALTER TABLE $table ADD $row $valeur NOT NULL ");
		}
		function drop_row($table,$row,$valeur){
		    if(!$this->query("ALTER TABLE $table DROP $row ")) throw new Exception("Cannot drop ".$row." from ".$table.", please verif database query manager and try again !");
		    else return $this->query("ALTER TABLE $table DROP $row ");
		}
		function select($table,$row,$where = "",$limit = ""){
		     if(!$this->query("SELECT ".$row." FROM ".$table." ".$where." ".$limit)) throw new Exception("Cannot select ".$row." from ".$table.", please verif database query manager and try again !");
		     else return $this->query("SELECT ".$row." FROM ".$table." ".$where." ".$limit);
		}
		function insert($table,$rows,$valeurs,$limit = ""){
		     if(!$this->query("INSERT INTO $table ($rows) VALUES ($valeurs) ".$limit)) throw new Exception(" Cannot execute insert method, please verif database query manager and try again !");
		     else return $this->query("INSERT INTO $table ($rows) VALUES ($valeurs) ".$limit);
		}
		function delete($table,$where = "",$limit = ""){
		      if(!$this->query("DELETE FROM $table ".$where." ".$limit)) throw new Exception(" Cannot execute delete method, please verif query manager !");
		      else return $this->query("DELETE FROM $table ".$where." ".$limit);
		}
		function update($table,$valeurs,$where = "",$limit = ""){
		    if(!$this->query("UPDATE $table SET $valeurs ".$where." ".$limit)) throw new Exception("cannot execute update method, please verif query manager !");
		    else return $this->query("UPDATE $table SET $valeurs ".$where." ".$limit);
		}
	 }
	 class MEx01 {
		
	 }
?>