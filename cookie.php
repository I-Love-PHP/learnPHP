<?php header('Content-type:text/html; charset=GBK'); ?>

<?php
session_start();

if(isset($_SESSION['views']))
{
	$_SESSION['views']=$_SESSION['views']+1;
}
else
{
	$_SESSION['views']=1;
}
echo "ä¯ÀÀÁ¿£º". $_SESSION['views'];
?>


<?php
echo "<pre>";
print_r(filter_list());
echo "</pre>";
?>


<?php
    $expire=time()+60*60*24*30;
    setcookie("user","jackie",$expire);

?>

<html>
    <?php
        if(isset($_COOKIE["user"])){
            echo "Hello,".$_COOKIE["user"];

        }else{
            echo "»¶Ó­Äã£¬ÓÎ¿Í£¡";

        }
    ?>

</html>