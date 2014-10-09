<html><body background="background4.png"><center>
// source : http://www.howtofixtutorial.com/en/2012-10-12-07-20-28/smart-search/2014-10-09-09-27-41/stop-start-check-saldo-on-gammu
// Created by : andr3
// E-mail : andre@howtofixtutorial.com
// Website : http://www.howtofixtutorial.com
<?php
$str = $_GET['str'];

if(!$str) {
print "
<form method=GET>
<input type=hidden name=str value=off>
<input type=submit value='Stop Service'>
</form>
<form method=GET>
<input type=hidden name=str value=pulsa>
<input type=submit value='Check Saldo'>
</form>
<form method=GET>
<input type=hidden name=str value=start>
<input type=submit value='Start Service'>
</form>
";
} else if ($str==off) {
exec('sudo service gammusmsd stop');
print "Service Gammu Sudah Stop";
}else if ($str==pulsa) {
$hasil = exec('sudo gammu getussd *888#');
print "$hasil";
}else if ($str==start) {
exec('sudo service gammusmsd start');
print "Service Gammu Sudah Start";
}
$output = shell_exec('whoami');
echo "<prev>...$output  <a href='../index.php'>Back ^</a></prev>";
?>
</html></body></center>
