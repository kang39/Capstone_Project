<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("index_con.php");
   }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width= device-width, initial-scale = 1">
        <meta name = "description" content = "Informatics Capstone Project: Template for Team Core">
        <title> BQ Service - Log In </title>
        <link rel = "stylesheet" href = "css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href = "css/template_form.css">
        <link rel="stylesheet" type="text/css" href="style/fg_membersite.css" />
        <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
        <link rel="stylesheet" type="text/css" href="style/pwdwidget.css" />
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
                        <li><a href="store.html"> Store </a></li>
                        <li><a href = "register.php"><span class = "glyphicon glyphicon-user"></span> &nbspSign-Up </a></li>
                        <li><a href="login.php"><span class = "glyphicon glyphicon-log-in"></span> &nbspLogin </a></li>  
                    </ul>
                </div>
            </div>
        </nav>
        <div class = "container" id = "form1">
            <div class = "row">
                <div id='fg_membersite'>
                    <form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                        <fieldset >
                        <legend>Login</legend>
                        <input type='hidden' name='submitted' id='submitted' value='1'/>
                        <div class='short_explanation'>* required fields</div>
                        <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
                        <div class='container'>
                            <label for='username' >UserName*:</label><br/>
                            <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
                            <span id='login_username_errorloc' class='error'></span>
                        </div>
                        <div class='container'>
                            <label for='password' >Password*:</label><br/>
                            <input type='password' name='password' id='password' maxlength="50" /><br/>
                            <span id='login_password_errorloc' class='error'></span>
                        </div>
                        <div class='container'>
                            <input type='submit' name='Submit' value='Submit' />
                        </div>
                        <div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
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
        <script type='text/javascript'>
            var frmvalidator  = new Validator("login");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();

            frmvalidator.addValidation("username","req","Please provide your username");

            frmvalidator.addValidation("password","req","Please provide the password");
        </script>
    </body>
</html>