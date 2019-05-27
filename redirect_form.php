<?php
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$roll = $_POST['roll'];
if($roll = "21-10756")
{
//  To redirect form on a particular page
header("Location:https://www.formget.com/app/");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>