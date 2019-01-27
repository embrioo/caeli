<?php
define('ROOT_PATH', realpath(dirname(__FILE__)));
define('PUBLIC_PATH', '/');
//echo ROOT_PATH;die;
$ln = 'en';
$file_name = 'lang_en.php';
$lang_file =  ROOT_PATH . '/' . $file_name;
$cookie_name = "lang";
$cookie_value = "en";
$fb_home_link = 'https://www.facebook.com/caeli.engineering/';
$fb_shop_link = 'https://www.facebook.com/pg/caeli.engineering/shop/?ref=page_internal';
if( isset($_GET['lang']) ) {
    $ln = trim($_GET['lang']);
    $file_name = 'lang_'.$ln.'.php';
    if( is_file( ROOT_PATH . '/' . $file_name ) ) {
        $lang_file =  ROOT_PATH . '/' . $file_name;
        $cookie_value = $ln;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30));
    } elseif( isset($_COOKIE[$cookie_name]) ) {
        $ln = $_COOKIE[$cookie_name];
        $lang_file =  ROOT_PATH . '/' . $cookie_name . '_' . $ln . '.php';
    } else {
        $ln = 'en';
    }
} elseif( isset($_COOKIE[$cookie_name]) ) {
    $ln = $_COOKIE[$cookie_name];
    $lang_file =  ROOT_PATH . '/' . $cookie_name . '_' . $ln . '.php';
}
if( $ln == 'bg' ) {
    $fb_shop_link = 'https://www.facebook.com/pg/filtrationsystem/shop/?ref=page_internal';
    $fb_home_link = 'https://www.facebook.com/filtrationsystem/';
}
include $lang_file;
$current_lang = $lang[$ln];
include 'head.php';
?>
    <div class="<?php echo $class_wrapper; ?> wrapper">
    <?php include 'header.php'; ?>
