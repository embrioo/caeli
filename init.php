<?php
    $ln = 'en';
    if( isset($_GET['ln']) ) {
        $ln = trim($_GET['ln']);
        if( !isset($lang[$ln]) ) {
            $ln = 'en';
        }
    }
    include 'languages.php';
    $current_lang = $lang[$ln];
    include 'head.php';
?>
    <div class="<?php echo $class_wrapper; ?> wrapper">    
    <?php include 'header.php'; ?>    
