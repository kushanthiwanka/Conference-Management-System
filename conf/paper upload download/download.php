<html>
    <head>
        <title>Download File From MySQL Database</title>
        <meta http-equiv="Content-Type" content="text/html; 
              charset=iso-8859-1">
    </head>
    <body>
        <?php
        $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
        $db = mysql_select_db('UCSC_conf', $con);
        $query = "SELECT id, name FROM upload";
        $result = mysql_query($query) or die('Error, query failed');
        if (mysql_num_rows($result) == 0) {
            echo "Database is empty <br>";
        } else {
            while (list($id, $name) = mysql_fetch_array($result)) {
                ?>
                <a href="download.php?id=<?php echo urlencode($id); ?>"
                   ><?php echo urlencode($name); ?></a> <br>
                <?php
            }
        }
        mysql_close();
        ?>
    </body>
</html>
           <?php
           if (isset($_GET['id'])) {
               $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
               $db = mysql_select_db('UCSC_conf', $con);
               $id = $_GET['id'];
               $query = "SELECT name, type, size, content " .
                       "FROM upload WHERE id = '$id'";
               $result = mysql_query($query) or die('Error, query failed');
               list($name, $type, $size, $content) = mysql_fetch_array($result);
               header("Content-length: $size");
               header("Content-type: $type");
               header("Content-Disposition: attachment; filename=$name");
               ob_clean();
               flush();
               echo $content;
               mysql_close();
               exit;
           }
           ?>