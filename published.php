<?php
//set up mysql connection
mysql_connect("localhost", "root", "") or die(mysql_error());
//select database
mysql_select_db("ucsc_conf") or die(mysql_error());
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="author">
  <link href="" rel="shortcut icon">
 
  <title>Review Phase</title><!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
 
</head>
 
<body>
<div class="container">
<div class="row">
    <div class="col-md-12">
    <div class="well">
      <h2 class="text-center">Published Paper</h2>
      <hr width="70%">
 
 
        <table class="table table-striped">
          <thead>
            <tr>
              <th width="7%" align="left">Paper Title</th>
              <th width="7%" align="left">Catagory</th>
              <th width="7%" align="center">Paper</th>
              

              
            
 
 
            </tr>
          </thead>
          <tbody>
            <?php
              //select all records form tblmember table
              $query = 'SELECT * FROM research_paper';
              //execute the query using mysql_query
              $result = mysql_query($query);
              
              //then using while loop, it will display all the records inside the table
              while ($row = mysql_fetch_array($result)) {
                echo ' <tr> ';
                echo ' <td> ';
                echo $row['PaperTitle'];
                echo ' <td> ';
                echo $row['Catagory'];
                echo ' <td> ';
                echo $row['PathOfPaper'];
                

              }
    
              ?>
          </tbody>
        </table>
    </div>
  </div>
 
</div>
</div>
</html>