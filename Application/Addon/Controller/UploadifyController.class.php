<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

// Define a destination
namespace Api\Controller;
use Think\Controller;
class UploadifyController extends Controller 
{
	
	public function index()
	{
		$html = <<<EOT
			<script src="__JS__/js/jquery.min.js" type="text/javascript"></script>
			<script src="__ROOT__/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
			<link rel="stylesheet" type="text/css" href="__ROOT__/uploadify/uploadify.css">
			<script type="text/javascript">
					<?php $timestamp = time();?>
					$(function() {
						$('#file_upload').uploadify({
							'formData'     : {
								'timestamp' : '<?php echo $timestamp;?>',
								'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
							},
							'swf'      : 'uploadify.swf',
							'uploader' : 'uploadify.php'
						});
					});
				</script>
EOT;
		return $html;
	}
	public function upload()
	{
		$targetFolder = '/uploads'; // Relative to the root
		
		$verifyToken = md5('unique_salt' . $_POST['timestamp']);
		
		if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
			$tempFile = $_FILES['Filedata']['tmp_name'];
			$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
			$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
			
			// Validate the file type
			$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
			$fileParts = pathinfo($_FILES['Filedata']['name']);
			
			if (in_array($fileParts['extension'],$fileTypes)) {
				move_uploaded_file($tempFile,$targetFile);
				echo '1';
			} else {
				echo 'Invalid file type.';
			}
		}
	}
}
?>