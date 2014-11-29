<html>
    <head></head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <table width="350" border="0" cellpadding="1"
                   cellspacing="1" class="box">
                <tr>
                    <td>please select a file</td></tr>
                <tr>
                    <td>
                        <input type="hidden" name="MAX_FILE_SIZE"
                               value="16000000">
                        <input name="userfile" type="file" id="userfile"> 
                    </td>
                    <td width="80"><input name="upload"
                                          type="submit" class="box" id="upload" value=" Upload "></td>
                </tr>
            </table>
        </form>
		
    </body>
</html>

<?php
if (isset($_POST['upload']) && $_FILES['userfile']['size'] > 0) {
    $fileName = $_FILES['userfile']['name'];
    $tmpName = $_FILES['userfile']['tmp_name'];
    $fileSize = $_FILES['userfile']['size'];
    $fileType = $_FILES['userfile']['type'];
    $fileType = (get_magic_quotes_gpc() == 0 ? mysql_real_escape_string(
                            $_FILES['userfile']['type']) : mysql_real_escape_string(
                            stripslashes($_FILES['userfile'])));
							
		
    $fp = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);
    if (!get_magic_quotes_gpc()) {
        $fileName = addslashes($fileName);
    }
	
    $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
    $db = mysql_select_db('UCSC_conf', $con);
    if ($db) {
        $query = "INSERT INTO upload (name, size, type, content ) " .
                "VALUES ('$fileName', '$fileSize', '$fileType', '$content')";
        mysql_query($query) or die('Error, query failed');
        mysql_close();
        echo "<br>File $fileName uploaded<br>";
    } else {
        echo "file upload failed";
    }
	
}

?>