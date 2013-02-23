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
        echo $this->Html->css('common');
        echo $this->Html->css('skins/tn3/tn3.css');
        echo $this->Html->css('dpopup');
        echo $this->Javascript->link('http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js');
        echo $this->Javascript->link('jquery.tn3lite.min');
        echo $this->Javascript->link('jquery.dpopup');
        echo $this->element('init/tn3lite_js');
        echo $scripts_for_layout;
        ?>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-27354084-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
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
        <div id="dpopup">
            <div id="dpopup-container">
                <div id="dpopup-header"></div>
                <div id="dpopup-content"></div>                
                <div id="dpopup-buttons-container">
                    <div id="dpopup-buttons">
                        <div id="dpopup-button-confirm"></div>
                        <div id="dpopup-button-cancel"></div>
                    </div>
                </div>                
            </div>
        </div>
        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>
