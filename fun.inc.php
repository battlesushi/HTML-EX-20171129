<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 10:09
 */
function navbar($flag){
?>
    <ul class="nav navbar-nav">
    <li <?php if($flag==1) echo "class='active'";?>><a href="index.php">首頁</a></li>
<li <?php if($flag==2) echo "class='active'";?>><a href="vita.php">簡歷</a></li>
<li <?php if($flag==3) echo "class='active'";?>><a href="academic.html">學術</a></li>
<li><a href="#">著作</a></li>
<li><a href="#">學生</a></li>
<li><a href="#">常用連結</a></li>
</ul>
<?php}
?>

