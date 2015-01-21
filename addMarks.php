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

  <script language="JavaScript">

function CheckForm() {
if(document.htmlform.paperId.value=='') 
{
    alert("Enter Paper ID to continue");
    document.htmlform.paperId.focus();
    return false; 
}
if(document.htmlform.mark.value=='') 
{
    alert("Enter Mark to continue");
    document.htmlform.mark.focus();
    return false; 
} 
if(document.htmlform.comments.value == '')
{
    alert("Enter Comments to continue");
    document.htmlform.comments.focus();
    return false; 
}
}
</script>

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

<div class="container col-lg-7" >
<div class="row">
    <div class="col-md-12">
    <div class="well">
      <h2 class="text-center">Add Mark</h2>
      <hr width="20%">

<form name="htmlform" method="post" action="html_form_send.php" onsubmit="return CheckForm();" role="form">
<table width="450px">
</tr>
<tr>
 <td valign="top">
  <label for="paper">Paper ID*</label>
 </td>
 <td valign="top">
  <input  type="text" name="paperId" maxlength="50" size="30">
 </td>
</tr>
 
<tr>
 <td valign="top"">
  <label for="mark">Mark*</label>
 </td>
 <td valign="top">
  <input  type="text" name="mark" maxlength="50" size="30">
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
 
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" name="Submit"value="Submit"> 
 </td>
</tr>
</table>
</form>

</div>
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