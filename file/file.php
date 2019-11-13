<?php 
	$arr=$_FILES;
	$tmpName=$arr['data']['tmp_name'];//data里的k值
	$fileName="11.jpg";//自己定义的文件名称
	$content=file_get_contents($tmpName);//将一个文件转到字符串
	file_put_contents($fileName,$content,FILE_APPEND);//将一个字符串转到文件
	$arrReturn=array(
			"error"=>0
		);
	echo json_encode($arrReturn);

 ?>