<?php

include('./saver/connection.php');


?>

<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from askit.dextheme.net/equip/template-kit/contact/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2024 10:18:36 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>details &#8211; Equip</title>
	<meta name='robots' content='max-image-preview:large' />
	<style>
		img:is([sizes="auto" i], [sizes^="auto," i]) {
			contain-intrinsic-size: 3000px 1500px
		}
	</style>
	<link rel="alternate" type="application/rss+xml" title="Equip &raquo; Feed" href="feed/index.html" />
	<link rel="alternate" type="application/rss+xml" title="Equip &raquo; Comments Feed" href="comments/feed/index.html" />
	<script>
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
			"ext": ".png",
			"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
			"svgExt": ".svg",
			"source": {
				"concatemoji": "https:\/\/askit.dextheme.net\/equip\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.1"
			}
		};
		/*! This file is auto-generated */
		! function(i, n) {
			var o, s, e;

			function c(e) {
				try {
					var t = {
						supportTests: e,
						timestamp: (new Date).valueOf()
					};
					sessionStorage.setItem(o, JSON.stringify(t))
				} catch (e) {}
			}

			function p(e, t, n) {
				e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
				var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
					r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
				return t.every(function(e, t) {
					return e === r[t]
				})
			}

			function u(e, t, n) {
				switch (t) {
					case "flag":
						return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
					case "emoji":
						return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
				}
				return !1
			}

			function f(e, t, n) {
				var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
					a = r.getContext("2d", {
						willReadFrequently: !0
					}),
					o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
				return e.forEach(function(e) {
					o[e] = t(a, e, n)
				}), o
			}

			function t(e) {
				var t = i.createElement("script");
				t.src = e, t.defer = !0, i.head.appendChild(t)
			}
			"undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
				everything: !0,
				everythingExceptFlag: !0
			}, e = new Promise(function(e) {
				i.addEventListener("DOMContentLoaded", e, {
					once: !0
				})
			}), new Promise(function(t) {
				var n = function() {
					try {
						var e = JSON.parse(sessionStorage.getItem(o));
						if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
					} catch (e) {}
					return null
				}();
				if (!n) {
					if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
						var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
							r = new Blob([e], {
								type: "text/javascript"
							}),
							a = new Worker(URL.createObjectURL(r), {
								name: "wpTestEmojiSupports"
							});
						return void(a.onmessage = function(e) {
							c(n = e.data), a.terminate(), t(n)
						})
					} catch (e) {}
					c(n = f(s, u, p))
				}
				t(n)
			}).then(function(e) {
				for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
				n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
					n.DOMReady = !0
				}
			}).then(function() {
				return e
			}).then(function() {
				var e;
				n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
			}))
		}((window, document), window._wpemojiSettings);
	</script>
	<link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='elementor-post-457-css' href='wp-content/uploads/sites/20/elementor/css/post-4575520.css?ver=1726190920' media='all' />
	<link rel='stylesheet' id='elementor-post-491-css' href='wp-content/uploads/sites/20/elementor/css/post-4915520.css?ver=1726190920' media='all' />
	<style id='wp-emoji-styles-inline-css'>
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<style id='classic-theme-styles-inline-css'>
		/*! This file is auto-generated */
		.wp-block-button__link {
			color: #fff;
			background-color: #32373c;
			border-radius: 9999px;
			box-shadow: none;
			text-decoration: none;
			padding: calc(.667em + 2px) calc(1.333em + 2px);
			font-size: 1.125em
		}

		.wp-block-file__button {
			background: #32373c;
			color: #fff;
			text-decoration: none
		}
	</style>
	<style id='global-styles-inline-css'>
		:root {
			--wp--preset--aspect-ratio--square: 1;
			--wp--preset--aspect-ratio--4-3: 4/3;
			--wp--preset--aspect-ratio--3-4: 3/4;
			--wp--preset--aspect-ratio--3-2: 3/2;
			--wp--preset--aspect-ratio--2-3: 2/3;
			--wp--preset--aspect-ratio--16-9: 16/9;
			--wp--preset--aspect-ratio--9-16: 9/16;
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
			--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
		}

		:where(.is-layout-flex) {
			gap: 0.5em;
		}

		:where(.is-layout-grid) {
			gap: 0.5em;
		}

		body .is-layout-flex {
			display: flex;
		}

		.is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		.is-layout-flex> :is(*, div) {
			margin: 0;
		}

		body .is-layout-grid {
			display: grid;
		}

		.is-layout-grid> :is(*, div) {
			margin: 0;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		:root :where(.wp-block-pullquote) {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link rel='stylesheet' id='template-kit-export-css' href='wp-content/plugins/template-kit-export/assets/public/template-kit-export-public982a.css?ver=1.0.23' media='all' />
	<link rel='stylesheet' id='cute-alert-css' href='wp-content/plugins/metform/public/assets/lib/cute-alert/stylea560.css?ver=3.9.1' media='all' />
	<link rel='stylesheet' id='text-editor-style-css' href='wp-content/plugins/metform/public/assets/css/text-editora560.css?ver=3.9.1' media='all' />
	<link rel='stylesheet' id='hello-elementor-css' href='wp-content/themes/hello-elementor/style.minb12b.css?ver=3.1.1' media='all' />
	<link rel='stylesheet' id='hello-elementor-theme-style-css' href='wp-content/themes/hello-elementor/theme.minb12b.css?ver=3.1.1' media='all' />
	<link rel='stylesheet' id='hello-elementor-header-footer-css' href='wp-content/themes/hello-elementor/header-footer.minb12b.css?ver=3.1.1' media='all' />
	<link rel='stylesheet' id='elementor-post-3-css' href='wp-content/uploads/sites/20/elementor/css/post-35520.css?ver=1726190920' media='all' />
	<link rel='stylesheet' id='elementor-icons-ekiticons-css' href='wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons6765.css?ver=3.3.3' media='all' />
	<link rel='stylesheet' id='swiper-css' href='wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' media='all' />
	<link rel='stylesheet' id='e-swiper-css' href='wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='widget-heading-css' href='wp-content/plugins/elementor/assets/css/widget-heading.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='widget-text-editor-css' href='wp-content/plugins/elementor/assets/css/widget-text-editor.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='widget-icon-list-css' href='wp-content/plugins/elementor/assets/css/widget-icon-list.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='e-animation-fadeInUp-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/fadeInUp.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='widget-google_maps-css' href='wp-content/plugins/elementor/assets/css/widget-google_maps.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='metform-ui-css' href='wp-content/plugins/metform/public/assets/css/metform-uia560.css?ver=3.9.1' media='all' />
	<link rel='stylesheet' id='metform-style-css' href='wp-content/plugins/metform/public/assets/css/stylea560.css?ver=3.9.1' media='all' />
	<link rel='stylesheet' id='e-animation-float-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-float.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='e-animation-fadeInRight-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/fadeInRight.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='widget-image-css' href='wp-content/plugins/elementor/assets/css/widget-image.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='elementor-post-906-css' href='wp-content/uploads/sites/20/elementor/css/post-906f403.css?ver=1726256132' media='all' />
	<link rel='stylesheet' id='ekit-widget-styles-css' href='wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles6765.css?ver=3.3.3' media='all' />
	<link rel='stylesheet' id='ekit-responsive-css' href='wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive6765.css?ver=3.3.3' media='all' />
	<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Inter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.7.1' media='all' />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<script src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
	<script src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
	<script src="wp-content/plugins/template-kit-export/assets/public/template-kit-export-public982a.js?ver=1.0.23" id="template-kit-export-js"></script>
	<link rel="https://api.w.org/" href="wp-json/index.html" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
	<meta name="generator" content="WordPress 6.7.1" />
	<link rel="canonical" href="index.html" />
	<link rel='shortlink' href='indexea3e.html?p=906' />
	<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="wp-json/oembed/1.0/embede28f.json?url=https%3A%2F%2Faskit.dextheme.net%2Fequip%2Ftemplate-kit%2Fcontact%2F" />
	<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="wp-json/oembed/1.0/embed3327?url=https%3A%2F%2Faskit.dextheme.net%2Fequip%2Ftemplate-kit%2Fcontact%2F&amp;format=xml" />
	<meta name="generator" content="Elementor 3.25.11; features: e_font_icon_svg, additional_custom_breakpoints, e_optimized_control_loading, e_element_cache; settings: css_print_method-external, google_font-enabled, font_display-auto">
	<style>
		.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
		.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
			background-image: none !important;
		}

		@media screen and (max-height: 1024px) {

			.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
			.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
				background-image: none !important;
			}
		}

		@media screen and (max-height: 640px) {

			.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
			.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
				background-image: none !important;
			}
		}
	</style>
</head>

<body class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-906 elementor-default elementor-template-full-width elementor-kit-3 elementor-page elementor-page-906">
	<?php include('components/nav.php')  ?>
	<div data-elementor-type="wp-post" data-elementor-id="906" class="elementor elementor-906">

		<div class="elementor-element elementor-element-46f03c1 e-flex e-con-boxed e-con e-parent" data-id="46f03c1" data-element_type="container">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-b9fbb6d e-con-full e-flex e-con e-child" data-id="b9fbb6d" data-element_type="container">
					<div class="elementor-element elementor-element-26c19fc elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="26c19fc" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<!-- <span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="icon icon-minus"></i> </span>
									<span class="elementor-icon-list-text">Get in Touch</span> -->
								</li>
							</ul>
						</div>
					</div>
					<div class="elementor-element elementor-element-0ac528f elementor-invisible elementor-widget elementor-widget-heading" data-id="0ac528f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Receiver  information.</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-904739a elementor-widget elementor-widget-text-editor" data-id="904739a" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<p>Please ensure that all shipping information is entered correctly. Double-check your address, contact details, and other required fields to avoid any delays or issues with your shipment. Thank you!</p>

						</div>
					</div>
					<!-- <div class="elementor-element elementor-element-5859890 elementor-widget elementor-widget-google_maps" data-id="5859890" data-element_type="widget" data-widget_type="google_maps.default">
						<div class="elementor-widget-container">
							<div class="elementor-custom-embed">
								<iframe loading="lazy"
									src="https://maps.app.goo.gl/oQxHGHUyuuUwT16u9"
									title="Ahmad Yani, Medan"
									aria-label="Ahmad Yani, Medan"></iframe>
							</div>
						</div>
					</div> -->
				</div>
				<div class="elementor-element elementor-element-739959f e-con-full e-flex e-con e-child" data-id="739959f" data-element_type="container">
					<div class="elementor-element elementor-element-dd4b7e7 elementor-widget elementor-widget-metform" data-id="dd4b7e7" data-element_type="widget" data-widget_type="metform.default">
						<div class="elementor-widget-container">
							<div id="mf-response-props-id-951" data-previous-steps-style="" data-editswitchopen="" data-response_type="alert" data-erroricon="fas fa-exclamation-triangle" data-successicon="fas fa-check" data-messageposition="top" class="   mf-scroll-top-no">
								<div class="formpicker_warper formpicker_warper_editable" data-metform-formpicker-key="951">


									<form class="metform-form-content" method="post">
										<div class="metform-form-main-wrapper" key="hide-form-after-submit">
											<div data-elementor-type="wp-post" data-elementor-id="951" class="elementor elementor-951">
												<!-- Full Name Input -->
												<div class="form-group">
													<label class="mf-input-label" for="mf-input-text-22e376b">
														Full Name <span class="mf-input-required-indicator">*</span>
													</label>
													<input type="text" class="mf-input" id="mf-input-text-22e376b" name="name" placeholder="Full Name"  required />
												</div>

												<!-- Email Input -->
												<div class="form-group">
													<label class="mf-input-label" for="mf-input-email-f726834">
														Email <span class="mf-input-required-indicator">*</span>
													</label>
													<input type="email" class="mf-input" id="mf-input-email-f726834" name="email" placeholder="Email"  required/>
												</div>

												<!-- Phone Input -->
												<div class="form-group">
													<label class="mf-input-label" for="mf-input-telephone-92f9af3">
														Phone <span class="mf-input-required-indicator">*</span>
													</label>
													<input type="tel" class="mf-input" id="mf-input-telephone-92f9af3" name="phone" placeholder="Phone"  required/>
												</div>

												<!-- Address Input -->
												<div class="form-group">
													<label class="mf-input-label" for="mf-input-text-7002fac">
														Address
													</label>
													<input type="text" class="mf-input" id="mf-input-text-7002fac" name="address" placeholder="Address" required />
												</div>

												<!-- Note Textarea -->
												<div class="form-group">
													<label class="mf-input-label" for="mf-input-text-area-4d4eb84">
														Postal code 
													</label>
													<input type="text" class="mf-input" id="mf-input-text-7002fac" name="note" placeholder="Address" required />

												</div>

												<!-- Submit Button -->
												<div class="form-group submit-btn-wrapper">
													<button type="submit" name="summit" class="metform-btn metform-submit-btn" style="background-color: #000000;">
														<span>summit</span>
													</button>
												</div>
											</div>
										</div>

										<!-- Response Section (optional) -->
										<div id="response-message"></div>
									</form>


									<!-- Add some CSS for responsiveness -->
									<style>
										/* Global Styles */
										.form-group {
											margin-bottom: 15px;
										}

										input{

											margin-bottom:10px;
											margin-top:15px;
										}

										.mf-input {
											width: 100%;
											padding: 10px;
											margin-top: 5px;
											border: 1px solid #ccc;
											border-radius: 5px;
											font-size: 16px;
										}

										.mf-input-label {
											font-weight: bold;
											display: block;
										}

										.metform-btn {
											background-color:black;
											color: white;
											border: none;
											padding: 15px 32px;
											text-align: center;
											font-size: 16px;
											cursor: pointer;
											width: 100%;
											border-radius: 5px;
											transition: background-color 0.3s ease;
										}

										.metform-btn:hover {
											background-color: black;
										}

										.mf-textarea {
											resize: vertical;
										}

										/* Responsiveness */
										@media screen and (min-width: 768px) {
											.form-group {
												max-width: 400px;
												margin: 0 auto;
											}

											.submit-btn-wrapper {
												text-align: center;
											}
										}

										/* On small screens, stack the form elements */
										@media screen and (max-width: 767px) {
											.form-group {
												width: 100%;
											}

											.submit-btn-wrapper {
												text-align: center;
											}
										}
									</style>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-6c71b7f e-flex e-con-boxed e-con e-parent" data-id="6c71b7f" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-752c23a e-con-full e-flex e-con e-child" data-id="752c23a" data-element_type="container">
					<div class="elementor-element elementor-element-35d3965 animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="35d3965" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Choose Quality, Choose Us!</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-a6702bc elementor-widget elementor-widget-text-editor" data-id="a6702bc" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<p>When you choose us, you're selecting a commitment to excellence. Our top-quality equipment and exceptional service ensure your projects are completed with precision, reliability, and unmatched performance every time.</p>
						</div>
					</div>
					<div class="elementor-element elementor-element-ebc1daf elementor-tablet-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="ebc1daf" data-element_type="widget" data-widget_type="button.default">
						<div class="elementor-widget-container">
							<div class="elementor-button-wrapper">
								<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="#">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-icon">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-file-pdf" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
												<path d="M181.9 256.1c-5-16-4.9-46.9-2-46.9 8.4 0 7.6 36.9 2 46.9zm-1.7 47.2c-7.7 20.2-17.3 43.3-28.4 62.7 18.3-7 39-17.2 62.9-21.9-12.7-9.6-24.9-23.4-34.5-40.8zM86.1 428.1c0 .8 13.2-5.4 34.9-40.2-6.7 6.3-29.1 24.5-34.9 40.2zM248 160h136v328c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V24C0 10.7 10.7 0 24 0h200v136c0 13.2 10.8 24 24 24zm-8 171.8c-20-12.2-33.3-29-42.7-53.8 4.5-18.5 11.6-46.6 6.2-64.2-4.7-29.4-42.4-26.5-47.8-6.8-5 18.3-.4 44.1 8.1 77-11.6 27.6-28.7 64.6-40.8 85.8-.1 0-.1.1-.2.1-27.1 13.9-73.6 44.5-54.5 68 5.6 6.9 16 10 21.5 10 17.9 0 35.7-18 61.1-61.8 25.8-8.5 54.1-19.1 79-23.2 21.7 11.8 47.1 19.5 64 19.5 29.2 0 31.2-32 19.7-43.4-13.9-13.6-54.3-9.7-73.6-7.2zM377 105L279 7c-4.5-4.5-10.6-7-17-7h-6v128h128v-6.1c0-6.3-2.5-12.4-7-16.9zm-74.1 255.3c4.1-2.7-2.5-11.9-42.8-9 37.1 15.8 42.8 9 42.8 9z"></path>
											</svg> </span>
										<span class="elementor-button-text">Get Brochures</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-9d088ba e-con-full e-flex e-con e-child" data-id="9d088ba" data-element_type="container">
					<div class="elementor-element elementor-element-fccecd1 elementor-invisible elementor-widget elementor-widget-image" data-id="fccecd1" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img fetchpriority="high" decoding="async" width="650" height="493" src="wp-content/uploads/sites/20/2024/07/YTFMGZ3d.png" class="attachment-full size-full wp-image-155" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/YTFMGZ3d.png 650w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/YTFMGZ3d-300x228.png 300w" sizes="(max-width: 650px) 100vw, 650px" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('components/footer.php')  ?>
	<script type='text/javascript'>
		const lazyloadRunObserver = () => {
			const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
			const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						let lazyloadBackground = entry.target;
						if (lazyloadBackground) {
							lazyloadBackground.classList.add('e-lazyloaded');
						}
						lazyloadBackgroundObserver.unobserve(entry.target);
					}
				});
			}, {
				rootMargin: '200px 0px 200px 0px'
			});
			lazyloadBackgrounds.forEach((lazyloadBackground) => {
				lazyloadBackgroundObserver.observe(lazyloadBackground);
			});
		};
		const events = [
			'DOMContentLoaded',
			'elementor/lazyload/observe',
		];
		events.forEach((event) => {
			document.addEventListener(event, lazyloadRunObserver);
		});
	</script>
	<link rel='stylesheet' id='widget-social-icons-css' href='wp-content/plugins/elementor/assets/css/widget-social-icons.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='e-apple-webkit-css' href='wp-content/plugins/elementor/assets/css/conditionals/apple-webkit.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='font-awesome-5-all-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='font-awesome-4-shim-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='elementor-post-951-css' href='wp-content/uploads/sites/20/elementor/css/post-951f403.css?ver=1726256132' media='all' />
	<script src="wp-content/plugins/metform/public/assets/lib/cute-alert/cute-alerta560.js?ver=3.9.1" id="cute-alert-js"></script>
	<script src="wp-content/themes/hello-elementor/assets/js/hello-frontend.minb12b.js?ver=3.1.1" id="hello-theme-frontend-js"></script>
	<script src="wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script6765.js?ver=3.3.3" id="elementskit-framework-js-frontend-js"></script>
	<script id="elementskit-framework-js-frontend-js-after">
		var elementskit = {
			resturl: 'https://askit.dextheme.net/equip/wp-json/elementskit/v1/',
		}
	</script>
	<script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts6765.js?ver=3.3.3" id="ekit-widget-scripts-js"></script>
	<script src="wp-content/plugins/metform/public/assets/js/htma560.js?ver=3.9.1" id="htm-js"></script>
	<script src="wp-includes/js/dist/vendor/react.mincb06.js?ver=18.3.1" id="react-js"></script>
	<script src="wp-includes/js/dist/vendor/react-dom.mincb06.js?ver=18.3.1" id="react-dom-js"></script>
	<script src="wp-includes/js/dist/escape-html.min3a9d.js?ver=6561a406d2d232a6fbd2" id="wp-escape-html-js"></script>
	<script src="wp-includes/js/dist/element.min1596.js?ver=cb762d190aebbec25b27" id="wp-element-js"></script>
	<script id="metform-app-js-extra">
		var mf = {
			"postType": "envato_tk_templates",
			"restURI": "https:\/\/askit.dextheme.net\/equip\/wp-json\/metform\/v1\/forms\/views\/",
			"minMsg1": "Minimum length should be ",
			"Msg2": " character long.",
			"maxMsg1": "Maximum length should be ",
			"maxNum": "Maximum number should be ",
			"minNum": "Minimum number should be "
		};
	</script>
	<script src="wp-content/plugins/metform/public/assets/js/appa560.js?ver=3.9.1" id="metform-app-js"></script>
	<script src="wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min1ffb.js?ver=3.25.11" id="font-awesome-4-shim-js"></script>
	<script src="wp-content/plugins/elementor/assets/js/webpack.runtime.min1ffb.js?ver=3.25.11" id="elementor-webpack-runtime-js"></script>
	<script src="wp-content/plugins/elementor/assets/js/frontend-modules.min1ffb.js?ver=3.25.11" id="elementor-frontend-modules-js"></script>
	<script src="wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3" id="jquery-ui-core-js"></script>
	<script id="elementor-frontend-js-before">
		var elementorFrontendConfig = {
			"environmentMode": {
				"edit": false,
				"wpPreview": false,
				"isScriptDebug": false
			},
			"i18n": {
				"shareOnFacebook": "Share on Facebook",
				"shareOnTwitter": "Share on Twitter",
				"pinIt": "Pin it",
				"download": "Download",
				"downloadImage": "Download image",
				"fullscreen": "Fullscreen",
				"zoom": "Zoom",
				"share": "Share",
				"playVideo": "Play Video",
				"previous": "Previous",
				"next": "Next",
				"close": "Close",
				"a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
				"a11yCarouselPrevSlideMessage": "Previous slide",
				"a11yCarouselNextSlideMessage": "Next slide",
				"a11yCarouselFirstSlideMessage": "This is the first slide",
				"a11yCarouselLastSlideMessage": "This is the last slide",
				"a11yCarouselPaginationBulletMessage": "Go to slide"
			},
			"is_rtl": false,
			"breakpoints": {
				"xs": 0,
				"sm": 480,
				"md": 768,
				"lg": 1025,
				"xl": 1440,
				"xxl": 1600
			},
			"responsive": {
				"breakpoints": {
					"mobile": {
						"label": "Mobile Portrait",
						"value": 767,
						"default_value": 767,
						"direction": "max",
						"is_enabled": true
					},
					"mobile_extra": {
						"label": "Mobile Landscape",
						"value": 880,
						"default_value": 880,
						"direction": "max",
						"is_enabled": false
					},
					"tablet": {
						"label": "Tablet Portrait",
						"value": 1024,
						"default_value": 1024,
						"direction": "max",
						"is_enabled": true
					},
					"tablet_extra": {
						"label": "Tablet Landscape",
						"value": 1200,
						"default_value": 1200,
						"direction": "max",
						"is_enabled": false
					},
					"laptop": {
						"label": "Laptop",
						"value": 1366,
						"default_value": 1366,
						"direction": "max",
						"is_enabled": false
					},
					"widescreen": {
						"label": "Widescreen",
						"value": 2400,
						"default_value": 2400,
						"direction": "min",
						"is_enabled": false
					}
				},
				"hasCustomBreakpoints": false
			},
			"version": "3.25.11",
			"is_static": false,
			"experimentalFeatures": {
				"e_font_icon_svg": true,
				"additional_custom_breakpoints": true,
				"container": true,
				"e_swiper_latest": true,
				"e_nested_atomic_repeaters": true,
				"e_optimized_control_loading": true,
				"e_onboarding": true,
				"e_css_smooth_scroll": true,
				"hello-theme-header-footer": true,
				"home_screen": true,
				"nested-elements": true,
				"editor_v2": true,
				"e_element_cache": true,
				"link-in-bio": true,
				"floating-buttons": true
			},
			"urls": {
				"assets": "https:\/\/askit.dextheme.net\/equip\/wp-content\/plugins\/elementor\/assets\/",
				"ajaxurl": "https:\/\/askit.dextheme.net\/equip\/wp-admin\/admin-ajax.php",
				"uploadUrl": "https:\/\/askit.dextheme.net\/equip\/wp-content\/uploads\/sites\/20"
			},
			"nonces": {
				"floatingButtonsClickTracking": "d779c76a9a"
			},
			"swiperClass": "swiper",
			"settings": {
				"page": [],
				"editorPreferences": []
			},
			"kit": {
				"active_breakpoints": ["viewport_mobile", "viewport_tablet"],
				"global_image_lightbox": "yes",
				"lightbox_enable_counter": "yes",
				"lightbox_enable_fullscreen": "yes",
				"lightbox_enable_zoom": "yes",
				"lightbox_enable_share": "yes",
				"lightbox_title_src": "title",
				"lightbox_description_src": "description",
				"hello_header_logo_type": "title",
				"hello_header_menu_layout": "horizontal",
				"hello_footer_logo_type": "logo"
			},
			"post": {
				"id": 906,
				"title": "Contact%20%E2%80%93%20Equip",
				"excerpt": "",
				"featuredImage": "https:\/\/askit.dextheme.net\/equip\/wp-content\/uploads\/sites\/20\/2024\/08\/13-Contact-863x1024.jpg"
			}
		};
	</script>
	<script src="wp-content/plugins/elementor/assets/js/frontend.min1ffb.js?ver=3.25.11" id="elementor-frontend-js"></script>
	<script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.min6765.js?ver=3.3.3" id="animate-circle-js"></script>
	<script id="elementskit-elementor-js-extra">
		var ekit_config = {
			"ajaxurl": "https:\/\/askit.dextheme.net\/equip\/wp-admin\/admin-ajax.php",
			"nonce": "4c46620ed3"
		};
	</script>
	<script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor6765.js?ver=3.3.3" id="elementskit-elementor-js"></script>

</body>

<!-- Mirrored from askit.dextheme.net/equip/template-kit/contact/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2024 10:18:42 GMT -->

</html>

<?php


if (isset($_POST['summit'])) {

	$product = base64_decode($_GET["product"]);
	$user = base64_decode($_GET["user"]);
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$address = $_POST['address'];
	$note = $_POST['note'];
	$date = date('Y-m-d');
	
	$query = mysqli_query($connection,"INSERT INTO `history`(`product_id`, `status`, `quality`, `rec_name`, `rec_email`, `rec_phone`, `rec_address`, `postal` , `user`,`date`) VALUES ('$product','pending','1','$name','$email','$phone','$address','$note','$user','$date')");

	if ($query) {

		echo "<script> location.href='dashboard.php' </script>";

	}


}



?>