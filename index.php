<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<!-- <link rel="stylesheet" type="text/css" href="css/backinfo.css"> -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/create.js"></script>
<script type="text/javascript" src="js/check.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/date.js"></script>
<script type="text/javascript" src="js/activitysend.js"></script>
<link rel="stylesheet" href="css/style.css" type="text/css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" /> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
</head>
<body>

<div data-role="page" id="mainpage">
  <div data-role="header">
    <h1>Welcome To My Calendar</h1>
  </div>

  <div data-role="main" class="ui-content">
    <a href="#login" class="ui-btn ui-btn-inline ui-corner-all">Login</a>
    <a href="#create" class="ui-btn ui-btn-inline ui-corner-all">New User</a>
  </div>

  <div data-role="footer">
    <h1>Thank You for Using</h1>
  </div>
</div>

<div data-role="page" id="login">
  <div data-role="main" class="field-contain">
    <div class="ui-field-contain">
      <form id="loginform" method="post" action="ajax/logincheck.php" onsubmit="return check(this)">
        <!-- <form id="loginform" method="post" action="ajax/logincheck.php" onsubmit="return check(this)"> -->
        <p>Enter Your Info</p><br>
        <div id="username" data-role="field-contain">
          <label for="username">Username:</label>
          <input type="text" name="username" id="username" data-clear-btn="true" maxlength="20"/>       
        </div>
        <div id="password" data-role="field-contain">     
          <label for="password">Password:</label>
          <input type="text" name="password" id="password" data-clear-btn="true" maxlength="20"/>
        </div>
        <div id="loginButton" data-role="field-contain">
          <input type="submit" data-inline="true" value="Login" id="Login">
        </div>
      </form>
    </div>
  </div>
</div>

<div data-role="page" id="create">
  <div data-role="main" class="field-contain">
    <div class="ui-field-contain">
<!--       <form method="post" action="databasename"> -->
      <form id="createform" method="post" onsubmit="return check(this)">
        <!-- <form id="createform" action="ajax/name.php" method="post"> -->
        <p>Create Your Info</p><br>
        <div id="Cusername" data-role="field-contain">
          <label for="username">Username:</label>
          <input type="text" name="Cusername" id="Cusername" data-clear-btn="true" maxlength="20"/>       
        </div>
        <div id="Cpassword" data-role="field-contain">     
          <label for="password">Password:</label>
          <input type="text" name="Cpassword" id="Cpassword" data-clear-btn="true" maxlength="20"/>
        </div>
        <div id="loginButton" data-role="field-contain">
          <input type="submit" data-inline="true" id="Create" value="Create">
        </div>
      </form>
    </div>
  </div>
</div>

<div data-role="page" id="finalpage">
  <div>
    <h1>Saving</h1>
    <p><b font-weight="800">Saving....</b></p>
    <p>You have saved successfully!</p>
    <a href="#addactivity" class="ui-btn">Return</a>
  </div>
</div>

<div data-role="page" id="user">
  <div data-role="main" class="field-contain">
    <div class="ui-field-contain">
      <h1 data-theme="b" align="center">Main Activity List</h1>
      <div>
        <a href="#addactivity" class="ui-btn ui-corner-all ui-icon-search ui-btn-icon-left ui-btn-b">Go</a>
        
        <!-- <input type="button" value="Cloud" onclick="location.href='http://localhost/JQMone/ajax/cloud.html'"> -->
      </div>
      <!-- <button id="datepicker">Click on Me to Show Date</button> -->
      <!-- Date: <input id="datepicker" type="text" /> -->
      <input type="button" value="Click on Me to Show Activity List" onclick="location.href='http://localhost/JQMone/ajax/date.html'">
    </div>
  </div>
</div>

<div data-role="page" id="addactivity">
  <div data-role="main" class="field-contain">
    <div class="ui-field-contain">
      <h1 data-theme="b" align="center">Add Activity List</h1>
        <div class="container">

          <h2>Create New Activity</h2>
          <form id="list" method="post">
          <table class="newTasks" id="newTasks">
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>time</th>
            <th></th>
          </tr>
          <tr>
            <td>
              <input type="text" id="title-1" class="input" style="width:210px;"/></td>
              <td>
                <input type="text" id="description-1" class="input" style="width:210px;"/>
              </td>
              <td><input type="text" id="time-1" class="input" style="width:210px;"/></td>
              <td><a class="deleteButton" id="delete-1" title="Delete Task">X</a>
              </td>
            </tr>
         <!--  <tr>
            <td>
              <input type="text" id="title-2" class="input" style="width:210px;"/></td>
              <td><input type="text" id="description-2" class="input" style="width:210px;"/></td>
              <td><input type="text" id="time-2" class="input" style="width:210px;"/></td>
              <td><a class="deleteButton" id="delete-2" title="Delete Task">X</a>
              </td>
            </tr> -->
          <input type="submit" data-inline="true" id="list" value="submit" onclick="location.href='http://localhost/JQMone/index.php#finalpage'">
          </table>
          </form>
          <p><input type="button" id="addNew" value="Add" /></p>
          <p><input type="button" id="Refresh" value="Reset" onclick="location.reload()"/></p>
          <p><input type="button" id="refreshNotes" value="Refresh Sticky Notes" /></p>

          <div class="clear"></div>

          <ul class="sticky_notes">

          </ul>

          <div class="clear"></div>

          </div>
    </div>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', '<?php echo $this->config->item("google_analytics"); ?>']);
_gaq.push(['_trackPageview']);
    
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
    alert(s);
</script>
  </div>
</div>




</body>
</html>