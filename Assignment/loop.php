<form method="POST">
<input type="text" name="xn">
<button type="Submit">Submit</button>
</form>

<?php
if(isset($_POST['xn']))
{
$n=$_POST['xn'];
$a=1;
do{
    
    echo($n."x".$a."=".$a*$n);
    print("<br>");
    $a++;
}while($a<=10);
}


