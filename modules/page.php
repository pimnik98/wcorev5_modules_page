<?php
$t = 'Просмотр страницы';
require_once '../wcore/core.php';
require_once '../wcore/head.php';
$auth = (isset($ank)?$ank:false);
$page = (isset($_GET['page'])?antixs($_GET['page']):'');
if (!file_exists($tpl_load.'page_special_'.$page.'.tpl')){echo msg_err('err',$lang['page_err_404']);require_once '../wcore/foot.php';exit();}

echo $twig->render('page_special_'.$page.'.tpl', array('lang' =>$lang,'auth'=>$auth));
require_once '../wcore/foot.php';
?>