<?php
	include('ayar.php');
		
	$ilId = $_POST['ilId'];
	$ilceId = $_POST['ilceId'];
	$semtlerId = $_POST['semtlerId'];
	$rv = '';

	if($semtlerId != 0){
		$query = mysql_query('select * from mahalleler where semt_id = "'.$semtlerId.'"');
		while($ilce = mysql_fetch_array($query)){
			$rv .= '<option value="'. $ilce['id'].'">'.$ilce['adi'].'</option>';
	}
	echo $rv;
}

else {
	if($ilceId != 0){
		$query = mysql_query('select * from semtler where ilce_id = "'.$ilceId.'"');
		while($ilce = mysql_fetch_array($query)){
			$rv .= '<option value="'. $ilce['id'].'">'.$ilce['adi'].'</option>';
	}
	echo $rv;
}
else {
	if($ilId != 0){
		$query = mysql_query('select * from ilceler where il_id = "'.$ilId.'"');
		while($ilce = mysql_fetch_array($query)){
			$rv .= '<option value="'. $ilce['id'].'">'.$ilce['adi'].'</option>';	
			
		}
		echo $rv;
		
	}else{
		$query = mysql_query('select * from iller');
		while($il = mysql_fetch_array($query)){
			$rv .= '<option value="'. $il['id'].'">'.$il['adi'].'</option>';		
		}
	echo $rv;	

}
}
		}
?>
