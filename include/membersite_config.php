<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('BQ Service');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('kang39@indiana.edu');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'db.soic.indiana.edu',
                      /*username*/'caps16_team11',
                      /*password*/'my+sql=caps16_team11',
                      /*database name*/'caps16_team11',
                      /*table name*/'uers_info');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>