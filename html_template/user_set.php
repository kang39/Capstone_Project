<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

if(isset($_POST['submitted']))
{
   if($fgmembersite->ChangePassword())
   {
        $fgmembersite->RedirectToURL("changed-pwd.html");
   }
}

?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width= device-width, initial-scale = 1">
        <meta name = "description" content = "Informatics Capstone Project: Template for Team Core">
        <title> BeQuick: Account Settings </title>
        <link rel = "stylesheet" href = "css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href = "css/template_form.css">
        <link rel = "stylesheet" type="text/css" href="style/fg_membersite.css" />
        <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
        <link rel = "stylesheet" type="text/css" href="style/pwdwidget.css" />
        <script src="scripts/pwdwidget.js" type="text/javascript"></script> 
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"> BQ Service: Drink your Happiness! </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="pickup_con.php"> Pick-Up </a></li>
                        <li><a href="delivery_con.php">Delivery</a></li>
                        <li><a href = "user_set.php"><span class = "glyphicon glyphicon-cog"></span> &nbsp<?= $fgmembersite->UserFullName(); ?>&nbsp Settings </a></li>
                        <li><a href="logout.php"><span class = "glyphicon glyphicon-log-out"></span> &nbspLog-Out </a></li> 
                    </ul>
                </div>
            </div>
        </nav>
        <div class = "container">
            
            <h2><br><?= $fgmembersite->UserFullName(); ?>'s Account Setting </h2>
        </div>
        <div class = "container" id = "form1">
            <div class = "row">
                <div id='fg_membersite'>
                    <form id='changepwd' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                        <fieldset>
                            <legend>Change Password</legend>
                            <input type='hidden' name='submitted' id='submitted' value='1'/>
                            <div class='short_explanation'>* required fields</div>
                            <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
                            <div class='container'>
                                <label for='oldpwd' >Old Password*:</label><br/>
                                <div class='pwdwidgetdiv' id='oldpwddiv' ></div><br/>
                                <noscript>
                                    <input type='password' name='oldpwd' id='oldpwd' maxlength="50" />
                                </noscript>    
                                <span id='changepwd_oldpwd_errorloc' class='error'></span>
                            </div>
                            <div class='container'>
                                <label for='newpwd' >New Password*:</label><br/>
                                <div class='pwdwidgetdiv' id='newpwddiv' ></div>
                                <noscript>
                                    <input type='password' name='newpwd' id='newpwd' maxlength="50" /><br/>
                                </noscript>
                                <span id='changepwd_newpwd_errorloc' class='error'></span>
                            </div><br/><br/><br/>
                            <div class='container'>
                                <input type='submit' name='Submit' value='Submit' />
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class = "container">
            <hr>
            <footer>
                <div class = "row">
                    <div class = "col-lg-12" align = "center">
                        <p> Copyright & Copy; Team Core 2016 </p>                    
                    </div>
                </div>
            </footer>
        </div>
        <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src = "js/bootstrap.js"></script>
        <script src = "js/offcanvas.js"></script>    
        <!-- client-side Form Validations:
        Uses the excellent form validation script from JavaScript-coder.com-->
        <script type='text/javascript'>
            var pwdwidget = new PasswordWidget('oldpwddiv','oldpwd');
            pwdwidget.enableGenerate = false;
            pwdwidget.enableShowStrength=false;
            pwdwidget.enableShowStrengthStr =false;
            pwdwidget.MakePWDWidget();
            var pwdwidget = new PasswordWidget('newpwddiv','newpwd');
            pwdwidget.MakePWDWidget();
            var frmvalidator  = new Validator("changepwd");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            frmvalidator.addValidation("oldpwd","req","Please provide your old password");
            frmvalidator.addValidation("newpwd","req","Please provide your new password");
        </script>
    </body>
</html>
