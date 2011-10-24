<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <meta name="description" content="<?php echo $description_for_layout; ?>" />
    <meta name="keywords" content="<?php echo $keywords_for_layout; ?>" />
    <?php
        echo $scripts_for_layout;
        echo $this->Html->css('common');
        echo $this->Html->css('skins/tn3/tn3.css');
        echo $this->Javascript->link('http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js');
        echo $this->Javascript->link('jquery.tn3lite.min');
        echo $this->element('init/tn3lite_js');
    ?>
</head>
<body>
    <div id="container">
        <div id="header">
            <?php echo $this->element('header'); ?>
        </div>
        <div id="content">
            <?php echo $content_for_layout; ?>
        </div>
        <div id="footer">
            <?php echo $this->element('footer'); ?>
        </div>
    </div>
    <?php echo $this->element('sql_dump'); ?>
</body>
</html>