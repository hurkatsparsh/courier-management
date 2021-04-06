<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style_002.htm" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="new.css" rel="stylesheet">

<style type="text/css">

</style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="http://localhost/index.php#"><img src="images/logo.png"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="http://localhost/index.php#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php">Admin Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<?php include("header.php"); ?>
<script language="javascript">
function validate()
  {
 if (document.form1.track.value == "" )
		 {
			alert("Consignment No is required.");
			document.form1.track.focus( );
			return false;
		}
	}
</script>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td width="780">
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table border="0" cellpadding="1" cellspacing="1" align="center" width="100%">
      <tbody><tr>
        <td class="Partext1">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">

</style></td>
      </tr>
      <tr>
        <td class="Partext1"><div align="center">
          <table cellpadding="4" cellspacing="0" align="center" width="70%">
            <form action="new_track_submit.php" method="post" name="form1" id="form1" onsubmit="return validate()"></form>
              <tbody><tr>
                <td colspan="2" class="TrackTitle" valign="top"><div class="newtext" align="center"><strong class="h4"> <br>
                  <br>
                  Enter Consignment Number <br>
                              </strong></div></td>
              </tr>
              <tr>
                <td colspan="2" class="bottom" valign="middle">&nbsp;</td>
              </tr>
              
              <tr bgcolor="EFEFEF">
                <td colspan="2" class="aalpha" bgcolor="#FFFFFF" height="34" valign="top"><div class="gentxt" align="center"><strong class="alert alert-secondary">This is helpful if you have made spelling errors while adding the shipment.</strong><br>
                  <br>
                </div></td>
              </tr>
              <tr bgcolor="EFEFEF">
                
              </tr>
              <tr bgcolor="">
			  <form action="search-courier.php" method="post">
                <td valign="bottom"><div align="right" class="h6">Enter Consignment number  :  </div></td>
                <td valign="top"><div align="left">
                  <input name="Consignment" class="gentxt form-control" id="track" maxlength="50" type="text">
                </div></td>
              </tr>
              <tr bgcolor="">
                <td height="41" valign="top">&nbsp;</td>
                <td valign="top"><div align="left">
                  <input name="Submit" class="gentxt btn btn-info" value="Submit" type="submit">
                </div></td>
              </form>
			  </tr>
              <tr bgcolor="EFEFEF">
                <td colspan="2" class="TrackNormalBlue" bgcolor="#FFFFFF" valign="top">&nbsp;</td>
              </tr>
            
          </tbody></table>
        </div></td>
      </tr>
      <tr>
        <td class="Partext1">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </tbody></table></td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="" height="40" width="476">&nbsp;</td>
    <td bgcolor="" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>

<!--- Connect -->
<footer id="connect">
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-md-4">
					<a class="navbar-brand" href="#"><img src="images/logo.png"></a>
					<hr class="light">
					<p>999-999-9999</p>
					<p>email@gmail.com</p>
					<p>Dtreet name</p>
					<p>City, State, 00000</p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5>Our hours</h5>
					<hr class="light">
					<p>Monday: 9am to 5pm</p>
					<p>Saturday: 10am to 6pm</p>
					<p>Sunday closed</p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5>Service Area</h5>
					<hr class="light">
					<p>City, State, 00000</p>
					<p>City, State, 00000</p>
					<p>City, State, 00000</p>
					<p>City, State, 00000</p>
				</div>
			</div>
		</div>
	</footer>

</body></html>