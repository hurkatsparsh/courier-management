<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <title>Courier / Cargo Tracking Script in PHP - Ver 0.97</title>
  <link href="css/mystyle.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link href="new.css" rel="stylesheet">

  <script type="text/JavaScript">
    <!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
  </script>
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
            <a class="nav-link" href="#connect">Connect</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
    <tbody>
      <tr>
        <td bgcolor="#FFFFFF">
          <table border="0" cellpadding="1" cellspacing="1" align="center" width="98%">
            <tbody>
              <tr>
                <td class="Partext1">&nbsp;</td>
              </tr>

              <tr>
                <td class="Partext1">
                  <div align="center">
                    <table cellpadding="4" cellspacing="0" align="center" width="70%">
                      <script language="javascript">
                        function validate() {
                          if (form.Consignment.value == "") {
                            alert("Consignment No is required.");
                            form.track.focus();
                            return false;
                          }
                        }
                      </script>

                      <tbody>
                        <tr>
                          <td class="TrackTitle" valign="top">
                            <div class="newtext h1" align="center"><strong> Track and Trace your Cargo/Courier <br>
                              </strong></div>
                          </td>
                        </tr>
                        <tr>
                          <td class="bottom" valign="middle">&nbsp;</td>
                        </tr>
                        <tr bgcolor="">
                          <td class="aalpha h3" valign="top">
                            <div align="center">Enter the Consignment no </div>
                          </td>
                        </tr>
                        <tr bgcolor="">
                          <td valign="top">
                            <div align="center">
                              <form action="track-result.php" method="post" name="form" id="form">
                                <input name="Consignment" class="gentxt form-control" placeholder="Ex: IXM53533553" id="Consignment" maxlength="50" type="text">
                                <input name="Submit" type="submit" class="gentxt btn btn-secondary" onClick="MM_validateForm('Consignment','','R');return document.MM_returnValue" value="Track now" style="margin-top:10px;">
                              </form>
                            </div>
                          </td>
                        </tr>
                        <tr bgcolor="">
                          <td valign="top">&nbsp;</td>
                        </tr>
                        <tr bgcolor="">
                          <td class="TrackNormalBlue" bgcolor="#FFFFFF" valign="top">&nbsp;</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="Partext1">&nbsp;</td>
              </tr>


              <tr>
                <td>&nbsp;</td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>

  <br>
  <br>
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

</body>

</html>