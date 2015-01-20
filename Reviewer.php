<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
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

<div class="row">

    <div class="container target">
    <div class="row">
        <div class="col-sm-10">
            <br><br>
          <button type="button" class="btn btn-info">Krishan</button> <button type="button" class="btn btn-success">Log out</button>  
<br>
        </div>
        <div class="row">
        <div class="col-sm-10"><br><h3><b>International Conference on Advances in ICT for Emerging Region</b></h3></div>
        
      <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.rlsandbox.com/img/profile.jpg"></a>

        </div></div>
    </div>
</div>
</div>

<div class="row" >
    <div class="col-md-2">
    <div class="panel panel-default" >
                <div class="panel-heading">My Account</div>
                <div class="panel-body"> 
                    <a class="btn btn-info">Edit My Profile</a><br><br>
                    <a class="btn btn-info">Change Password</a><br><br>
                    <a class="btn btn-info">Upload Paper</a><br><br>
                </div>
            </div>


            <!--left col-->
            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false">Profile</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> 2.13.2014</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> Yesterday</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Real name</strong></span> Joseph
                        Doe</li>
              <li class="list-group-item text-right"><span class="pull-left"><strong class="">Role: </strong></span> Pet Sitter
               
                      </li>
            </ul>          
    <

</div>

<div class="col-md-9">

<?php
//set up mysql connection
mysql_connect("localhost", "root", "") or die(mysql_error());
//select database
mysql_select_db("ucsc_conf") or die(mysql_error());
?>


    <div class="well">
      <h2 class="text-center">Review Details</h2>
      <hr width="70%">
 
 
        <table class="table table-striped">
          <thead>
            <tr>
              <th width="6%" align="left">Paper ID</th>
              <th width="7%" align="left">Paper Title</th>
              <th width="7%" align="left">Catagory</th>
              <th width="7%" align="center">Paper</th>
              <th width="7%" align="center">Mark</th>
              <th width="7%" align="center">Sates</th>

              
            
 
 
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
                echo $row['PaperID'];
                echo ' <td> ';
                echo $row['PaperTitle'];
                echo ' <td> ';
                echo $row['Catagory'];
                echo ' <td> ';
                echo $row['PathOfPaper'];
                echo ' <td> ';
                echo $row['mark'];
                echo ' <td> ';
                    if($row['mark']==0) print "To be reviewed" ;
                    else print "Reviewed" ;

              }
    
              ?>
          </tbody>
        </table>
        <form action="addMarks.php">
<input type="submit" value="Add Mark">
</form>
    </div>
  </div>
 
</div>



</div>
</div>
</div>

  <br>

    


  

  
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>


        
       
</div>
</body>
</html>                                  		