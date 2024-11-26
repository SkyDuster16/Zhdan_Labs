<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Home"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Home"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Home"); ?>" />
			
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Home"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Home"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Site.pro Website builder" />
			<script src="js/common-bundle.js?ts=20241111151728" type="text/javascript"></script>
	<script src="js/a188dd9c959000a4e2033e87b6d42e69-bundle.js?ts=20241111151728" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20241111151728" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a188dd9c959000a4e2033e87b6d42e69-bundle.css?ts=20241111151728" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/>
	<script type="text/javascript">
	window.useTrailingSlashes = true;
	window.disableRightClick = false;
	window.currLang = 'en';
</script>
		
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		$(function () {
<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
<?php if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
	<?php if (($wb_form_popup_mode = popSessionOrGlobalVar("wb_form_popup_mode")) && (isset($wbPopupMode) && $wbPopupMode)) { ?>
		if (window !== window.parent && window.parent.postMessage) {
			var data = {
				event: "wb_contact_form_sent",
				data: {
					state: "<?php echo str_replace('"', '\"', $wb_form_send_state); ?>",
					type: "<?php echo $wb_form_send_success ? "success" : "danger"; ?>"
				}
			};
			window.parent.postMessage(data, "<?php echo str_replace('"', '\"', popSessionOrGlobalVar("wb_target_origin")); ?>");
		}
	<?php $wb_form_send_success = false; $wb_form_send_state = null; $wb_form_popup_mode = false; ?>
	<?php } else { ?>
		wb_show_alert("<?php echo str_replace(array('"', "\r", "\n"), array('\"', "", "<br/>"), $wb_form_send_state); ?>", "<?php echo $wb_form_send_success ? "success" : "danger"; ?>");
	<?php } ?>
<?php } ?>
});    </script>
</head>


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><?php wbspadtopFunc(\SiteModule::getInjectAdsData()); ?><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a188dd9c959000a4e2033e87b6d42e69" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="center" data-v-align="top"><div class="wb_content wb-layout-vertical"><div id="a1931b3c97b600c2c76ee5bc63941793" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div><div id="a1931b3d18cf0072cd7cdef403e62d8a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div></div></div><div id="wb_main_a188dd9c959000a4e2033e87b6d42e69" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b58f7c5007b1e4d58d356481901" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b5954b80040bc4136d2238cc776" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h5 class="wb-stl-custom5" style="text-align: center;">Це хедер. Висота 150 рх</h5>
</div></div></div><div id="a1931b3ebeda009b7d1b213fbfaa05de" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b3f1493006b8bb2114ef0f9fdb7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4>Це місце для футера. Висота 550 px</h4>
</div></div></div><div id="a188dd9c8506067c1cd55ac892e127ca" class="wb_element AI wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b426a1a009772f31dac902126ec" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1931b426a1a01028cbd1e75aba484b9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b467be500ee1561ff0928e61249" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom4" style="text-align: right;"><span style="color:#inherit;">Наше</span></h4>
</div><div id="a1931b426a1a0205a2a5e267c36bc06d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b4fee1a0004d3cce307152ea550" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h5 class="wb-stl-custom5" style="text-align: center;">Зображення 515*225 рх</h5>
</div></div></div><div id="a1931b426a1a0360cff1bb806a4aa85a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b4fc9f70039fdd906a81f81bb02" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h5 class="wb-stl-custom5" style="text-align: center;">Зображення 515*225 рх</h5>
</div></div></div></div></div><div id="a1931b426a1a045cfd3952310d9d0d89" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b44f46500f1796c78b8c4a33e8f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom4" style="text-align: left;"><span style="color:#inherit;"> </span><span style="color:#inherit;">портфоліо</span></h4>
</div><div id="a1931b426a1a051e45330f872b4e9012" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b4fec28007d65cb2594442c448f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h5 class="wb-stl-custom5" style="text-align: center;">Зображення 515*225 рх</h5>
</div></div></div><div id="a1931b426a1a066f0a0b5a00265f1d0a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b4fe7e300d106bc3d96733a7b36" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h5 class="wb-stl-custom5" style="text-align: center;">Зображення 515*225 рх</h5>
</div></div></div></div></div></div></div></div></div><div id="a1931b4c7b60006dc09aa7f68667f7f6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b4d90f6004979705b7d6288324b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1931b4d90f60100c5ae86a272ab47ef" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b4f234500bdead09718a77f4ad0" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h5 class="wb-stl-custom5" style="text-align: center;">Зображення 360*350 рх</h5>
</div></div></div><div id="a1931b4d90f6027ba6288a593195a81e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b4fa42e007ee9d6117cd2f74744" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h5 class="wb-stl-custom5" style="text-align: center;">Зображення 360*350 рх</h5>
</div></div></div><div id="a1931b4da5ab007ae67ba2a65cc85bf0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b4fa845006a03d4254cb00d286e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h5 class="wb-stl-custom5" style="text-align: center;">Зображення 360*350 рх</h5>
</div></div></div><div id="a1931b4d90f6036295c7d91f437e0065" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b4faa2100f858507a877faeaa20" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h5 class="wb-stl-custom5" style="text-align: center;">Зображення 360*350 рх</h5>
</div></div></div></div></div></div></div><div id="a1931b516ae200c3ece177460f6b7198" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b52ca7900c326f01352412407b9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1931b526e420038762ef25353751191" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p>Природа — це те, що оточує нас щодня, хочемо ми цього чи ні. Вона — джерело всього живого, що існує на нашій планеті. Люди настільки звикли до того, що природа завжди поруч, що іноді починають її не помічати, або навіть забувати про неї. Проте природа має величезний вплив на наші життя, і цей вплив помітно відчувається у кожній сфері життя людини.</p>

<p>Природа – це не тільки дерева, річки, гори чи океани. Це також повітря, яким ми дихаємо, їжа, яку ми вживаємо, і вода, яку ми п’ємо. Всі ці елементи необхідні для підтримання нашого життя. Без чистої води чи повітря людина просто не зможе існувати. Тому захист природи — це не тільки про захист якихось абстрактних лісів або далеких островів. Це про турботу про своє життя та життя майбутніх поколінь.</p>
</div></div></div><div id="a1931b520a87005ec69a99c6c12f5f84" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b560fb100db2163589128057f9e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p>Людина здатна впливати на природу як позитивно, так і негативно. І, на жаль, за останні століття люди часто вносять більше шкоди, ніж користі. Забруднення повітря та води, вирубка лісів, глобальне потепління — всі ці проблеми пов’язані саме з діяльністю людини. Часом здається, що люди забувають, наскільки вони залежать від природи. Багато людей сприймають природу як даність, не думаючи про те, що природні ресурси не є нескінченними.</p>

<p>Однак є і зворотній бік медалі. За останні десятиліття людство почало усвідомлювати, наскільки важливо берегти природу. З'явилися численні екологічні рухи, які нагадують про важливість збереження природи. Екоактивісти виступають за скорочення шкідливих викидів, захист вимирання видів та очищення планети від пластику та інших забруднень. Все більше людей переходять на екологічний стиль життя, надаючи перевагу переробці відходів, зменшенню споживання пластику та використанню ресурсів більш обережно. </p>

<p>Важливо пам’ятати, що кожен з нас може зробити свій внесок у збереження природи. Маленькі дії, як-от сортування сміття, економія води та електроенергії, або навіть просто прогулянки на природі з повагою до неї, можуть стати великим кроком до збереження довкілля. Ми можемо навчитися жити в гармонії з природою, не завдаючи їй шкоди. Природа щедро дає нам все необхідне для життя, і ми маємо відповідати їй вдячністю та турботою.</p>

<p>Природа також є джерелом натхнення для людини. Вона впливає на наше емоційне і духовне благополуччя. Вчені довели, що прогулянки на свіжому повітрі і спілкування з природою знижують рівень стресу, покращують настрій і сприяють загальному зміцненню здоров’я. Багато художників, письменників та поетів черпають своє натхнення саме з природних пейзажів, а архітектори та дизайнери все частіше звертаються до природних форм і кольорів у своїх роботах.</p>
</div></div></div></div></div><div id="a1931b541cc100f9150c71d8330aab80" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b56c8d300244cef7275322fc20f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h5 class="wb-stl-custom5" style="text-align: center;"><span style="color:#ffffff;">Місце для футера</span></h5>
</div></div></div></div></div><div id="wb_footer_a188dd9c959000a4e2033e87b6d42e69" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1931b546615009cc5aaa73a7a5ff5be" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9c850724eb7a80914baa8b5796" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9c85072560c5f6f94dfdcd5c12" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c8507272a1575b9a15b0e58f8" class="wb_element wb-prevent-layout-click" data-plugin="LinkExchangeBadge"><div class="wb-stl-footer">Powered by <i class="icon-wb-logo"></i><a href="https://site.pro/" target="_blank" title="Site.pro Website builder">Site.pro</a></div></div></div></div></div></div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div></div>{{hr_out}}</body>
</html>
