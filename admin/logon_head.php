<?php 
function is_session_started()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}
if(! is_session_started()){
	session_start();
}
if (isset($_SESSION["account"])){
	echo '<div style="text-align:right; font-size:15px"><a href="../admin/manage.php" style="text-align:right">管理</a>&nbsp;&nbsp;
		<a href="../admin/logout.php" style="text-align:right">注销</a></div>
		<hr style="height:5px;border:none;border-top:3px ridge grey;" />';       
}
?>



