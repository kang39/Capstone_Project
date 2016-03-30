<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("thankyou_reg.html");
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
        <title> BQ Service - Sign Up </title>
        <link rel = "stylesheet" href = "css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href = "css/template_form.css">
        <link rel="stylesheet" type="text/css" href="style/fg_membersite.css" />
        <script type='text/javascript' src='scripts/gen_validatorv4.js'></script>
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
                    <form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                        <fieldset>
                            <legend>Register</legend>
                            <input type = 'hidden' name='submitted' id='submitted' value='1'/>
                            <div class = 'short_explanation'>* required fields</div>
                            <input type = 'text'  class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />
                            <div><span class = 'error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
                            <div class = 'container'>
                                <label for = 'name' >Your Full Name*: </label><br/>
                                <input type = 'text' name = 'name' id = 'name' value = '<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50" /><br/>
                                <span id='register_name_errorloc' class='error'></span>
                            </div>
                            <div class='container'>
                                <label for='email'>Email Address*:</label><br/>
                                <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
                                <span id='register_email_errorloc' class='error'></span>
                            </div>
                            <div class='container'>
                                <label for='username' >UserName*:</label><br/>
                                <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
                                <span id='register_username_errorloc' class='error'></span>
                            </div><br>
                            <div class='container' style='height:80px;'>
                                <label for='password' >Password*:</label><br/>
                                <div class='pwdwidgetdiv' id='thepwddiv'></div>
                                <noscript>
                                <input type='password' name='password' id='password' maxlength="50" />
                                </noscript>
                                <div id='register_password_errorloc' class='error' style='clear:both'></div>
                            </div>
                            <div class='container'>
                                <label for='confirm_password'>Confirm Password*:</label><br/>
                                <input type='password' name='confirm_password' id='confirm_password' maxlength="50" />
                                <div id='register_confirm_password_errorloc' class='error' style='clear:both'></div>
                            </div>
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
        <script type='text/javascript'>
            var pwdwidget = new PasswordWidget('thepwddiv','password');
            pwdwidget.MakePWDWidget();
            
            var frmvalidator  = new Validator("register");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            frmvalidator.addValidation("name","req","Please provide your name");
            frmvalidator.addValidation("email","req","Please provide your email address");
            frmvalidator.addValidation("email","email","Please provide a valid email address");
            frmvalidator.addValidation("username","req","Please provide a username");
            frmvalidator.addValidation("password","req","Please provide a password");
            frmvalidator.addValidation("password","minlen=7","Password should be minimum of 7 characters.");
            frmvalidator.addValidation("confirm_password", "req", "Please enter a confirm password");
            frmvalidator.addValidation("confirm_password", "eqelmnt=password", "The confirmed password is not same as password Submit");
        </script>
    </body>
</html>