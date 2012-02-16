<?php
if ( ( isset($_GET['uselang']) ) or ( isset( $values['uselang']) ) ) {
        $res = array_merge( $_GET, $_POST );
        $lang = $wgLang->setLang($res);
}
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6 no-js" xml:lang="<?= $lang ?>" lang="<?= $lang ?>"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 no-js" xml:lang="<?= $lang ?>" lang="<?= $lang ?>"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 no-js" xml:lang="<?= $lang ?>" lang="<?= $lang ?>"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" xml:lang="<?= $lang ?>" lang="<?= $lang ?>"><!--<![endif]-->
<head>
        <meta http-equiv="Content-language" content="<?= $lang ?>"/>
        <meta charset="utf-8"/>
	<title><?php echo $wgLang->message('header-title');?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBASE; ?>css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBASE; ?>css/review.css" />
	<link rel="shortcut icon" type="image/png" href="/favicon.png"/>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?= $TEMPLATEBASE ?>js/html5.js"></script>
	<![endif]-->
</head>
<body>
<h1><a id="banner" href="<?php echo $BASEURL; ?>" title="Wikimania 2012"><img src="<?php echo $TEMPLATEBASE;?>images/wm2012banner.png" alt="Wikimania 2012"/></a></h1>
