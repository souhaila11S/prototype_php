<?php
$r=""; $e=""; $t="";

if(isset($_POST['c'])){
$n1=$_POST['n1']; $n2=$_POST['n2']; $op=$_POST['op'];

if(!is_numeric($n1)||!is_numeric($n2)) $e="Entrer des nombres valides";
else switch($op){
 case '+': $r=$n1+$n2; $t="Addition"; break;
 case '-': $r=$n1-$n2; $t="Soustraction"; break;
 case '*': $r=$n1*$n2; $t="Multiplication"; break;
 case '/': 
   if($n2==0) $e="Division par zéro";
   else {$r=$n1/$n2; $t="Division";}
}
}
?>

<form method="POST">
<input name="n1" placeholder="N1">
<input name="n2" placeholder="N2">
<select name="op"><option>+</option><option>-</option><option>*</option><option>/</option></select>
<input value="<?= $r ?>" readonly>
<button name="c">OK</button>
</form>

<?= $e ? "<p style='color:red'>$e</p>" : ($r!=="" ? "Opération : $t" : "") ?>
