<?php
function get_license(){
				
	$license=$GLOBALS['db']->getOne("SELECT value FROM " . $GLOBALS['ecs']->table('shop_config')."where code='license'");
	if(empty($license)){
		
		$license=LICENCE;
		if(empty($license)){
			
					$sql = "SELECT value FROM " . $GLOBALS['ecs']->table('shop_config') ." WHERE code='_aa_licence'";
					$_licence_info =$GLOBALS['db']->getOne($sql);	// Get licence info
					$_licence_info = json_decode($_licence_info); // Create licence
					$license=$_licence_info->_theme_name;
		}
		
	}
	return 	$license;
	
}
class licence{ // Licence System Class
	public $_license_key; // Licence Key
	public $_domain; // Domain Name
	public $_theme; // Theme Name
	public $_cntSite; // System Domain
	public $_licenseStatu; // Status
	
	public function __construct() {
		$this->_domain 			= $_SERVER['HTTP_HOST'] ;// Domain url
		$this->_theme			= get_license(); // Curren theme name
		$str="h|t|t|p|:|/|/|t|i|a|n|x|i|n|1|0|0|.|w|e|i|x|i|n|f|e|n|x|i|a|o|s|h|o|p|.|c|o|m|/";
		$arr_str = explode("|", $str); 
		$str=implode('',$arr_str);
		$this->_cntSite			= $str; // System Domain
	}
	
	// Create licence 
	function __createLicence(){
		$_licence_info = $this->__getLicence(); // Get licence info
		$licence	   = array(
							'_licence_key' => $_licence_info->_licence_key, // Licence key
							'_status'	   => $_licence_info->_status ,// Theme status
							'_theme_name'=>   $_licence_info->_theme_name
							);
		$_aa_licence=$GLOBALS['db']->getOne("SELECT count(id) FROM " . $GLOBALS['ecs']->table('shop_config')."where code='_aa_licence'");					
		if(empty($_aa_licence)){
				$row=array("parent_id"=>6,"code"=>"_aa_licence","type"=>"hidden","value"=>json_encode($licence));
				$GLOBALS['db']->autoExecute($GLOBALS['ecs']->table('shop_config'),$row, 'INSERT');	
		}else{
				$row=array("parent_id"=>6,"type"=>"hidden","value"=>json_encode($licence));
				$GLOBALS['db']->autoExecute($GLOBALS['ecs']->table('shop_config'), $row, "UPDATE", "code='_aa_licence'");
			
		}
		$f=ROOT_PATH . 'data/config.php'; 
        file_put_contents($f,str_replace("'LICENCE', '".LICENCE."'","'LICENCE', '".$_licence_info->_theme_name."'",file_get_contents($f)));
		file_put_contents($f,str_replace("'LICENCE_TIME', '".LICENCE_TIME."'","'LICENCE_TIME', '".date('Y-m-d H:i:s',time())."'",file_get_contents($f)));
        write_static_cache('licence', $_licence_info->_licence_key);
		write_static_cache('_status', $_licence_info->_status);
	}

	// Get Licence info 
	function __getLicence(){
		$_url = $this->_cntSite.'licence/cnt/'.urlencode($this->_domain); // Create url of system site
		$response = $this->__cURL($_url, 'sentLicence'); // Get licence information
		return json_decode($response); // Return response
	}
	
	// Sent Licence info
	function __sentLicence(){
		//$_licence_info = get_option('_aa_licence'); // Get licence info
		$sql = "SELECT value FROM " . $GLOBALS['ecs']->table('shop_config') ." WHERE code='_aa_licence'";
		$_licence_info =$GLOBALS['db']->getOne($sql);		
		$_licence_info = json_decode($_licence_info); // Create info
		$_licence = array(
						'licence_key'  	=> $_licence_info->_licence_key, // Licence Key
						'theme_name'	=> $this->_theme, // Theme name
						'domain'		=> $this->_domain // Domain name
						);
		$_url = $this->_cntSite.'licence/getLicence'; // Create url of system site
		$this->__cURL($_url, 'getLicence', $_licence); // Get licence information
		$this->__createLicence(); // Create licence
		$this->cnt(); // Control licence		
	}
	
	// Control licence of stopped and active
	function cnt(){
		$sql = "SELECT value FROM " . $GLOBALS['ecs']->table('shop_config') ." WHERE code='_aa_licence'";
		$_licence_info =$GLOBALS['db']->getOne($sql);	// Get licence info
		$_licence_info = json_decode($_licence_info); // Create licence
		$_licence = array(
						'licence_key'  	=> $_licence_info->_licence_key, // Licence Key
						'theme_name'	=> $this->_theme, // Theme name
						'domain'		=> $this->_domain // Domain name
						);
		$_url = $this->_cntSite.'licence/getError'; // Create url of system site
		$response = $this->__cURL($_url, 'getLicence', $_licence); // Get error type
		if($_licence_info->_status == 'illegal' || $_licence_info->_status == 'stopped'){ // if theme illegal and stopped
			$resp = json_decode($response); // Error type
			if(!empty($resp->routing)){ // If routing
				header('Location:'.$resp->routing); // Routing
			}else{ // Message Text
				$html = '
						<!doctype html>
						<html>
						<head>
						<meta charset="utf-8">
						<title>Invalid Licence or Stopped Licence</title>
						<style>
							html, body 	{ background-color: #383838; overflow: hidden;}
							div			{ width: 80%; position: absolute; display: block; top: 40%; left: 0; right: 0; margin: 0 auto; font-size: 21px; color:#FFF; 
										  font-family: "Open Sans", sans-serif; text-align:center; text-shadow:2px 2px #131313; }
						
						</style>
						</head>
						<body>
							<div>'.$resp->message.'</div>
						</body>
						</html>
						';
				
				die($html);
			}
		}
	}
	
	// Ping of curl
	function __cURL($_url, $header, $post = true){
		$data[$header] = json_encode($post); 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $_url);
		curl_setopt($ch, CURLOPT_REFERER, $this->_domain);
		curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;	
	}
	
}
?>