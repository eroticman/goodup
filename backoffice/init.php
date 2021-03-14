<?php 
session_start();

function check_login()
{
	if(!empty($_SESSION['user']))
	{
		return true;
	}

	return false;
}

require_once '../config/database.conf.php';
$db_config  = $config['database'][$config['database']['connect_type']];
$db_connected = mysqli_connect($db_config['host'], $db_config['username'], $db_config['password'], $db_config['database_name']);

mysqli_set_charset($db_connected, $config['database']['charset']);

if ( isset( $_POST['is_login'] ) ) {

	$password = md5( $_POST['password'] );
	$sql = "
		select *
		from db_admin
		where username = '{$_POST['username']}' and password = '{$password}' and is_active = '1'
	";

	$result = query($sql);

	if (!empty($result)) {
		$_SESSION['user']['user_id']   	= $result[0]->id;
		$_SESSION['user']['username']  	= $result[0]->username;
		$_SESSION['user']['group_id']  	= $result[0]->group_id;
		$_SESSION['user']['first_name'] = $result[0]->first_name;
		$_SESSION['user']['last_name'] 	= $result[0]->last_name;
		header('location: index.php');
	}
}

function query($command_sql)
{
 GLOBAL $db_connected;

 if(!empty($db_connected) and is_object($db_connected) and (get_class($db_connected) == 'mysqli'))
 {
  $query_resource = mysqli_query($db_connected, $command_sql);
 }
 
 if(preg_match('/^\s*(select)\s*/i', $command_sql))
 {
  if(!empty($query_resource))
  {
   $i  = 0;
   $result = array();
   while($row = mysqli_fetch_object($query_resource))
   {
    $result[$i] = $row;
    $i++;
   }

   mysqli_free_result($query_resource);

   return $result;
  }
 }
 else
 {
  if(!empty($query_resource)) return true;
 }
 
 return false;
}

date_default_timezone_set("Asia/Bangkok");

function banner_list()
{
	$sql	= "SELECT *
				FROM db_banner
				WHERE is_active = '1'
				ORDER BY id ASC
				LIMIT 5";
	
	return query($sql);
}

function banner_detail($id)
{	
	$wheres[] = "id = '{$id}'";
	$where	= (!empty($wheres)) ? 'WHERE ' . implode('AND ', $wheres) : null;

	$sql	= "SELECT *
				FROM db_banner
				{$where}
				LIMIT 1";
	
	$result = query($sql);

	return (!empty($result)) ? current($result) : false;
}

function banner_add() {
	$created = date('Y-m-d H:i:s');

	$sql	 = "INSERT INTO db_banner
				(banner_name, created) 
				VALUE 
				('{$_POST['name']}', '{$created}')";
	// exit;
	$added = query($sql);

	if(!empty($added))
	{
		global $db_connected;

		$banner_id = mysqli_insert_id($db_connected);

		if(!empty($_FILES['covImg']))
		{
			$file_name		= $_FILES['covImg']["name"];
			$file_name		= preg_replace('/[^\w\._]+/', '_', $file_name);
			$filePath 		= '../img/banner/' . $banner_id . '/';
			$file_path		= $filePath . $file_name;

			if ( !is_dir($filePath) ) {
				mkdir($filePath);
			}
			
			if(file_exists($file_path))
			{
				$number			= 2;
				$file_exists	= true;
				$file_extension	= null;

				preg_match('/(\.([a-zA-Z]+))$/i', $file_name, $matchs);
				if(!empty($matchs[2]))
				{
					$file_extension = $matchs[2];
				}

				$file_name_only	= preg_replace("/(\.{$file_extension})/i", null, $file_name);

				while(file_exists($file_path))
				{
					$file_name = $file_name_only . "_{$number}.{$file_extension}";
					$file_path = $storage_path . $file_name;
					
					$number++;
				}
			}

			$moved = move_uploaded_file($_FILES['covImg']["tmp_name"], $file_path);

			if($moved)
			{
				$originalFile 	= $file_path;
				$targetFile 	= $file_path;

				$sql = "UPDATE db_banner SET img_cover = '{$file_name}' WHERE id = '{$banner_id}'";
				query($sql);
			}
		}
	}

	return $added;
}

function banner_edit() {
	$update_date 	= date('Y-m-d H:i:s');
	$banner_id 	= $_POST['banner_id'];

	$sql = "UPDATE db_banner
			SET banner_name = '{$_POST['name']}', updated = '{$update_date}'
			WHERE id = '{$banner_id}'";
	// exit;
	$updated = query($sql);

	if(!empty($updated))
	{
		global $db_connected;

		if(!empty($_FILES['covImg']))
		{
			$file_name		= $_FILES['covImg']["name"];
			$file_name		= preg_replace('/[^\w\._]+/', '_', $file_name);
			$filePath 		= '../img/banner/' . $banner_id . '/';
			$file_path		= $filePath . $file_name;

			if ( !is_dir($filePath) ) {
				mkdir($filePath);
			}
			
			if(file_exists($file_path))
			{
				$number			= 2;
				$file_exists	= true;
				$file_extension	= null;

				preg_match('/(\.([a-zA-Z]+))$/i', $file_name, $matchs);
				if(!empty($matchs[2]))
				{
					$file_extension = $matchs[2];
				}

				$file_name_only	= preg_replace("/(\.{$file_extension})/i", null, $file_name);

				while(file_exists($file_path))
				{
					$file_name = $file_name_only . "_{$number}.{$file_extension}";
					$file_path = $filePath . $file_name;
					
					$number++;
				}
			}

			$moved = move_uploaded_file($_FILES['covImg']["tmp_name"], $file_path);

			if($moved)
			{
				/*$originalFile 	= $file_path;
				$targetFile 	= $file_path;

				resizeImg( $originalFile, $targetFile, $file_extension, 1000, 1000 );*/
				$sql = "UPDATE db_banner SET img_cover = '{$file_name}' WHERE id = '{$banner_id}'";
				query($sql);
			}
		}
	}

	return $updated;
}

function about_us_list()
{
	$sql	= "SELECT *
				FROM db_about_us
				WHERE is_active = '1'
				ORDER BY id ASC";
	
	return query($sql);
}

function about_us_detail($id)
{	
	$wheres[] = "id = '{$id}'";
	$where	= (!empty($wheres)) ? 'WHERE ' . implode('AND ', $wheres) : null;

	$sql	= "SELECT *
				FROM db_about_us
				{$where}
				LIMIT 1";
	
	$result = query($sql);

	return (!empty($result)) ? current($result) : false;
}

function about_us_edit() {
	$update_date 	= date('Y-m-d H:i:s');
	$about_us_id 	= $_POST['about_us_id'];

	$sql = "UPDATE db_about_us
			SET about_name = '{$_POST['name']}', 
				history_desc = '{$_POST['history_desc']}', 
				history_desc_en = '{$_POST['history_desc_en']}', 
				mission_desc = '{$_POST['mission_desc']}', 
				mission_desc_en = '{$_POST['mission_desc_en']}', 
				policy_desc = '{$_POST['policy_desc']}', 
				policy_desc_en = '{$_POST['policy_desc_en']}', 
				updated = '{$update_date}'
			WHERE id = '{$about_us_id}'";
	// exit;
	$updated = query($sql);

	if(!empty($updated))
	{
		global $db_connected;

		if(!empty($_FILES['covImg']))
		{
			$file_name		= $_FILES['covImg']["name"];
			$file_name		= preg_replace('/[^\w\._]+/', '_', $file_name);
			$filePath 		= '../img/about_us/cover/';
			$file_path		= $filePath . $file_name;

			if ( !is_dir($filePath) ) {
				mkdir($filePath);
			}
			
			if(file_exists($file_path))
			{
				$number			= 2;
				$file_exists	= true;
				$file_extension	= null;

				preg_match('/(\.([a-zA-Z]+))$/i', $file_name, $matchs);
				if(!empty($matchs[2]))
				{
					$file_extension = $matchs[2];
				}

				$file_name_only	= preg_replace("/(\.{$file_extension})/i", null, $file_name);

				while(file_exists($file_path))
				{
					$file_name = $file_name_only . "_{$number}.{$file_extension}";
					$file_path = $filePath . $file_name;
					
					$number++;
				}
			}

			$moved = move_uploaded_file($_FILES['covImg']["tmp_name"], $file_path);

			if($moved)
			{
				/*$originalFile 	= $file_path;
				$targetFile 	= $file_path;

				resizeImg( $originalFile, $targetFile, $file_extension, 1000, 1000 );*/
				$sql = "UPDATE db_about_us SET img_cover = '{$file_name}' WHERE id = '{$about_us_id}'";
				query($sql);
			}
		}
	}

	return $updated;
}

function service_list()
{
	$sql	= "SELECT sv.*, c.category_name AS cate_name
				FROM db_service sv
				INNER JOIN db_category c ON c.id = sv.category
				WHERE sv.is_active = '1'
				ORDER BY sv.id ASC";
	
	return query($sql);
}

function service_detail($id)
{	
	$wheres[] = "id = '{$id}'";
	$where	= (!empty($wheres)) ? 'WHERE ' . implode('AND ', $wheres) : null;

	$sql	= "SELECT *
				FROM db_service
				{$where}
				LIMIT 1";
	
	$result = query($sql);

	return (!empty($result)) ? current($result) : false;
}

function service_add() {
	$created = date('Y-m-d H:i:s');

	$sql	 = "INSERT INTO db_service
				(service_name, service_name_en, category, created) 
				VALUE 
				('{$_POST['name']}', '{$_POST['name_en']}', '{$_POST['category']}', '{$created}')";
	// exit;
	$added = query($sql);

	if(!empty($added))
	{
		global $db_connected;

		$service_id = mysqli_insert_id($db_connected);

		if(!empty($_FILES['covImg']))
		{
			$file_name		= $_FILES['covImg']["name"];
			$file_name		= preg_replace('/[^\w\._]+/', '_', $file_name);
			$filePath 		= '../img/service/' . $service_id . '/';
			$file_path		= $filePath . $file_name;

			if ( !is_dir($filePath) ) {
				mkdir($filePath);
			}
			
			if(file_exists($file_path))
			{
				$number			= 2;
				$file_exists	= true;
				$file_extension	= null;

				preg_match('/(\.([a-zA-Z]+))$/i', $file_name, $matchs);
				if(!empty($matchs[2]))
				{
					$file_extension = $matchs[2];
				}

				$file_name_only	= preg_replace("/(\.{$file_extension})/i", null, $file_name);

				while(file_exists($file_path))
				{
					$file_name = $file_name_only . "_{$number}.{$file_extension}";
					$file_path = $storage_path . $file_name;
					
					$number++;
				}
			}

			$moved = move_uploaded_file($_FILES['covImg']["tmp_name"], $file_path);

			if($moved)
			{
				$originalFile 	= $file_path;
				$targetFile 	= $file_path;

				$sql = "UPDATE db_service SET img_cover = '{$file_name}' WHERE id = '{$service_id}'";
				query($sql);
			}
		}
	}

	return $added;
}

function service_edit() {
	$update_date 	= date('Y-m-d H:i:s');
	$service_id 	= $_POST['service_id'];

	$sql = "UPDATE db_service
			SET service_name = '{$_POST['name']}', service_name_en = '{$_POST['name_en']}', category = '{$_POST['category']}', updated = '{$update_date}'
			WHERE id = '{$service_id}'";
	// exit;
	$updated = query($sql);

	if(!empty($updated))
	{
		global $db_connected;

		if(!empty($_FILES['covImg']))
		{
			$file_name		= $_FILES['covImg']["name"];
			$file_name		= preg_replace('/[^\w\._]+/', '_', $file_name);
			$filePath 		= '../img/service/' . $service_id . '/';
			$file_path		= $filePath . $file_name;

			if ( !is_dir($filePath) ) {
				mkdir($filePath);
			}
			
			if(file_exists($file_path))
			{
				$number			= 2;
				$file_exists	= true;
				$file_extension	= null;

				preg_match('/(\.([a-zA-Z]+))$/i', $file_name, $matchs);
				if(!empty($matchs[2]))
				{
					$file_extension = $matchs[2];
				}

				$file_name_only	= preg_replace("/(\.{$file_extension})/i", null, $file_name);

				while(file_exists($file_path))
				{
					$file_name = $file_name_only . "_{$number}.{$file_extension}";
					$file_path = $filePath . $file_name;
					
					$number++;
				}
			}

			$moved = move_uploaded_file($_FILES['covImg']["tmp_name"], $file_path);

			if($moved)
			{
				/*$originalFile 	= $file_path;
				$targetFile 	= $file_path;

				resizeImg( $originalFile, $targetFile, $file_extension, 1000, 1000 );*/
				$sql = "UPDATE db_service SET img_cover = '{$file_name}' WHERE id = '{$service_id}'";
				query($sql);
			}
		}
	}

	return $updated;
}


function category_list()
{
	$sql	= "SELECT *
				FROM db_category
				WHERE is_active = '1'
				ORDER BY id ASC";
	
	return query($sql);
}

function category_detail($id)
{	
	$wheres[] = "id = '{$id}'";
	$where	= (!empty($wheres)) ? 'WHERE ' . implode('AND ', $wheres) : null;

	$sql	= "SELECT *
				FROM db_category
				{$where}
				LIMIT 1";
	
	$result = query($sql);

	return (!empty($result)) ? current($result) : false;
}

function category_edit() {
	$update_date 	= date('Y-m-d H:i:s');
	$category_id 	= $_POST['category_id'];

	$sql = "UPDATE db_category
			SET url_name = '{$_POST['urlname']}', keyword = '{$_POST['keyword']}', category_name = '{$_POST['name']}', category_name_en = '{$_POST['name_en']}', description = '{$_POST['description']}', description_en = '{$_POST['description_en']}', updated = '{$update_date}'
			WHERE id = '{$category_id}'";
	// exit;
	$updated = query($sql);

	if(!empty($updated))
	{
		global $db_connected;

		if(!empty($_FILES['covImg']))
		{
			$file_name		= $_FILES['covImg']["name"];
			$file_name		= preg_replace('/[^\w\._]+/', '_', $file_name);
			$filePath 		= '../img/category/' . $category_id . '/';
			$file_path		= $filePath . $file_name;

			if ( !is_dir($filePath) ) {
				mkdir($filePath);
			}
			
			if(file_exists($file_path))
			{
				$number			= 2;
				$file_exists	= true;
				$file_extension	= null;

				preg_match('/(\.([a-zA-Z]+))$/i', $file_name, $matchs);
				if(!empty($matchs[2]))
				{
					$file_extension = $matchs[2];
				}

				$file_name_only	= preg_replace("/(\.{$file_extension})/i", null, $file_name);

				while(file_exists($file_path))
				{
					$file_name = $file_name_only . "_{$number}.{$file_extension}";
					$file_path = $filePath . $file_name;
					
					$number++;
				}
			}

			$moved = move_uploaded_file($_FILES['covImg']["tmp_name"], $file_path);

			if($moved)
			{
				/*$originalFile 	= $file_path;
				$targetFile 	= $file_path;

				resizeImg( $originalFile, $targetFile, $file_extension, 1000, 1000 );*/
				$sql = "UPDATE db_category SET img_cover = '{$file_name}' WHERE id = '{$category_id}'";
				query($sql);
			}
		}
	}

	return $updated;
}

?>

