 <?php   if(!isset($_POST['paperId']) ||
        !isset($_POST['mark']) ||
       !isset($_POST['comments']))  {
       died('We are sorry, but there appears to be a problem with the form you submitted.');      
  }
 ?>
<?php
//set up mysql connection
mysql_connect("localhost", "root", "") or die(mysql_error());
//select database
mysql_select_db("ucsc_conf") or die(mysql_error());

// validation expected data exists
    if(!isset($_POST['paperId']) ||
        !isset($_POST['mark']) ||
       !isset($_POST['comments']))  {
       died('We are sorry, but there appears to be a problem with the form you submitted.');      
  }

$paperId="$_POST[paperId]";
$mark="$_POST[mark]";
$comment="$_POST[comments]";

echo "$paperId,$mark,$comment";
$sql="UPDATE research_paper
SET mark='$mark', comment='$comment'
WHERE PaperID='$paperId'";

if (!mysql_query($sql))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record updated";

 




?>