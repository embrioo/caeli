<?php
$enc = mb_internal_encoding ( 'UTF-8' );
//echo '<pre>';var_dump( $enc );die;
define('ROOT_PATH', realpath(dirname(__FILE__)));
//    mb_internal_encoding("UTF-8");
    $page_title = 'Stand Alone';
    $class_wrapper = 'stand-alone-page';
//    require  'init.php';

    $allowed = array(
        'e19acae2e16e0503a7de23a3f2a3b0e6' => array( 'code' => 'rennie', 'user' => 'Rennie', 'lang' => 'en' ),
        'c077d74de839adcb6d37d81c3fae5fd5' => array( 'code' => 'mkdgo', 'user' => 'Mitko', 'lang' => 'bg' ),
        '0089a5a9b852d02e6e4a37af12aa7091' => array( 'code' => 'radostina', 'user' => 'Radostina', 'lang' => 'gr' ),
        'ed8635609cb77517a508a9bafcbf3389' => array( 'code' => 'sunni', 'user' => 'Sunni', 'lang' => 'ru' ),
    );
    if( isset($_GET['unset']) ) {
        unsetCookies();
    }

    $from_file_name = 'lang_bg.php';
    $cookie_name = 'allowed_code';
    $allowed_code = 0;
    $allowed_user = '';
    $allowed_lang = '';
    $to_file_name = '';
    $html = '';
if( isset($_COOKIE[$cookie_name]) ) {
    $allowed_code = $_COOKIE[$cookie_name];
    $allowed_user = 'Hi '.$allowed[$_COOKIE[$cookie_name]]['user'];
    $allowed_lang = $allowed[$_COOKIE[$cookie_name]]['lang'];
    if( isset($_POST['save']) ) {
//echo '<pre>';var_dump( $_POST['keys'] );die;
        save_file($allowed_lang, $_POST['keys']);
    }
    $html = load_file($from_file_name, $allowed_lang);

} elseif( isset($_POST['verify']) ) {
    $data = $_POST;
    $code = md5( $data['code'] );
    $cookie_value = $code;
//    $pass = array_search( $code, $allowed_codes );
    if( isset($allowed[$code]) ) {
        setcookie($cookie_name, $cookie_value, time() + 1800);
//        setcookie('allowed_code', $code, time() + 86400);
//        setcookie('allowed_lang', $user_lang, time() + (300));
        $allowed_code = $code;
        $allowed_user = 'Hi '.$allowed[$code]['user'];
        $allowed_lang = $allowed[$code]['lang'];
        $html = load_file($from_file_name, $allowed_lang);
//var_dump($_COOKIE);
    }
}

    function load_file($source, $target_lang) {
        $html = '';

        $from_file =  ROOT_PATH . '/' . $source;
        include $from_file;
        $basic_txt_language = $lang['bg'];
        unset($lang);

        $to_file_name = 'lang_'.$target_lang.'.php';
        $to_file =  ROOT_PATH . '/' . $to_file_name;

        if( !file_exists($to_file) ) {

            $content = "<?php \n\n";
            foreach($basic_txt_language as $k => $v) {
                $vt = trim($v);
                $content .= '$lang["'.$target_lang.'"]["'.$k.'"] = "";'."\n";
            }
            $content .= "?>";
            $res = file_put_contents( $to_file, $content);
        }
        include $to_file;
//echo '<pre>';var_dump( $lang );die;

        $lang_text = $lang[$target_lang];
        $html .= '<table class="table-striped" style="width: 100%">';
        foreach($basic_txt_language as $k => $v) {
            $html .= '<tr><td style="width: 50%;padding: 5px;">'.$v.'</td><td><textarea style="width: 100%" name="keys['.$k.']">'.$lang_text[$k].'</textarea></td></tr>';
        }

        $html .= '</table>';
        $html .= '<div class="row"><div style="width: 100px; margin: 50px auto;" class="col-xs-12 col-sm-3 text-center pull-right"><input type="submit" value="Save" name="save" style="padding: 5px 20px; border-radius:5px;" id="save" /></div></div>';
        return $html;
    }

    function save_file($target_lang, $keys) {

        $content = "<?php \n\n";
        foreach($keys as $k => $v) {
            $vt = trim($v);
//            $fileEndEnd = utf8_encode ( $vt );
            $content .= '$lang["'.$target_lang.'"]["'.$k.'"] = "'.$vt.'";'."\n";
        }
        $content .= "?>";

        $to_file_name = 'lang_'.$target_lang.'.php';
        $to_file =  ROOT_PATH . '/' . $to_file_name;

        if( $res = file_put_contents( $to_file, $content) ) {

        } else {
        }

    }

    function unsetCookies() {
        setcookie('allowed_code', "", time()-3600);
    }

mb_internal_encoding("UTF-8");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Translator</title>
        <link rel="icon" type="image/png" href="/images/logo.png" />
        <link rel="shortcut icon" href="/favicon.ico" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" href="./css/styles.css">
    </head>
    <body>
<main>
	<section class="">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
                    <?php if( !$allowed_code ): ?>
                    <div class="row">
                        <h1 class="page-title">Translate language version <small><?php echo $allowed_user ?></small></h1>
                        <div class="col-sm-12">
                            <form id="form_verification" name="form_verification" method="POST" action="/translator.php">
                            <p>Verifiction code required: <input type="password" name="code"> <input type="submit" name="verify" value="Verify" /></p>
                            </form>
                        </div>
                    </div>
                    <?php else: ?>

					<div class="row">
                        <h1 class="page-title"><?php echo $allowed_user ?></h1>
                        <h2>Translate to <?php echo strtoupper($allowed_lang) ?></h2>
                        <div class="col-sm-12">
                            <form id="form_langs" name="form_langs" method="POST" action="/translator.php">
                            <?php echo $html ?>
                            </form>
                        </div>
					</div>
                    <?php endif ?>
				</div>
			</div>
		</div>
	</section>
</main>
    <script type="text/javascript" src="./js/jquery.1.12.1.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>
