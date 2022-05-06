<?php
	$url = "http://animesbrazil.club";
	$siteName = "AnimesBrazil";
	$config = array(
		"{url}" => "http://animesbrazil.com",
		"{siteName}" => "AnimesBrazil",

		// Data Base

		"{dbServer}" => "",
		"{dbUser}" => "root",
		"{dbPassword}" => "",
		"{dbName}" => "webradio",

		// Meta Configs
		"{lang}" => "pt-br",
		"{metaTitle}" => "AnimesBrazil | ",
		"{metaDescription}" => "O seu clube de animes e cultura japonesa. Assista animes em qualquer hora e em qualquer lugar e de graça.", //Try to use in maximum a 155 characters
		"{metaAuthor}" => "Lucas Ferreira - www.lucas-ferreira.com", // Please, don't change the author's credit. Allow my work be known by your fans.
		"{metaCopyright}" => "Copyright 2017 - Todos os direitos reservados",
		"{metaKeywords}" => "anime, animes, japao, cultura japonesa, naruto, dragon ball, one piece, bleach, fairy tail", //
			// Meta tags for Facebook
			"{meta_og_name}" => $siteName, // WebSite's name
			"{meta_og_title}" => "AnimesBrazil - Seu clube de animes e cultura japonesa",
			"{meta_og_type}" => "website", // Can be blog, website or article. More formats look at https://developers.facebook.com/docs/sharing/opengraph
			"{meta_og_image}" => "logo_facebook.png", // Any image or banner (recommended ratio 16:9)
			"{meta_og_url}" => $url, // URL/Link from your website.
			"{meta_og_description}" => "O seu clube de animes e cultura japonesa. Assista animes em qualquer hora e em qualquer lugar e de graça.",
			// Meta Tags for Twitter
			"{meta_twitter_url}" => $url,
			"{meta_twitter_title}" => "AnimesBrazil - Seu clube de animes e cultura japonesa",
			"{meta_twitter_description}" => "O seu clube de animes e cultura japonesa. Assista animes em qualquer hora e em qualquer lugar e de graça.",
			"{meta_twitter_image}" => "twitter_card_image.png", // Should be a square image no smaller than 60×60 pixels
		);

	$content = get_include_contents("index.php");
	$content = strtr($content, $config);
	echo $content;
	die();

	function get_include_contents($filename) {
	    if (is_file($filename)) {
	        ob_start();
	        include $filename;
	        return ob_get_clean();
	    }
	    return false;
	}
?>