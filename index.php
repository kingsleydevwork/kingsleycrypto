<?php   include('./saver/connection.php');  ?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from askit.dextheme.net/Equip/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2024 10:14:39 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Equip</title>
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
				"concatemoji": "https:\/\/askit.dextheme.net\/Equip\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.1"
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
	<link rel='stylesheet' id='widget-icon-list-css' href='wp-content/plugins/elementor/assets/css/widget-icon-list.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='widget-heading-css' href='wp-content/plugins/elementor/assets/css/widget-heading.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='widget-text-editor-css' href='wp-content/plugins/elementor/assets/css/widget-text-editor.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='e-animation-float-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-float.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='e-animation-fadeInUp-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/fadeInUp.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='e-animation-fadeInRight-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/fadeInRight.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='widget-image-css' href='wp-content/plugins/elementor/assets/css/widget-image.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='e-animation-fadeInLeft-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/fadeInLeft.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='mediaelement-css' href='wp-includes/js/mediaelement/mediaelementplayer-legacy.min1f61.css?ver=4.2.17' media='all' />
	<link rel='stylesheet' id='wp-mediaelement-css' href='wp-includes/js/mediaelement/wp-mediaelement.min9704.css?ver=6.7.1' media='all' />
	<link rel='stylesheet' id='widget-counter-css' href='wp-content/plugins/elementor/assets/css/widget-counter.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='widget-image-box-css' href='wp-content/plugins/elementor/assets/css/widget-image-box.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='widget-divider-css' href='wp-content/plugins/elementor/assets/css/widget-divider.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='widget-rating-css' href='wp-content/plugins/elementor/assets/css/widget-rating.min1ffb.css?ver=3.25.11' media='all' />
	<link rel='stylesheet' id='elementor-post-996-css' href='wp-content/uploads/sites/20/elementor/css/post-99699d0.css?ver=1726190921' media='all' />
	<link rel='stylesheet' id='ekit-widget-styles-css' href='wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles6765.css?ver=3.3.3' media='all' />
	<link rel='stylesheet' id='ekit-responsive-css' href='wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive6765.css?ver=3.3.3' media='all' />
	<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Inter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.7.1' media='all' />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<script src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
	<script src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
	<script src="wp-content/plugins/template-kit-export/assets/public/template-kit-export-public982a.js?ver=1.0.23" id="template-kit-export-js"></script>
	<link rel="https://api.w.org/" href="wp-json/index.html" />
	<link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/996.json" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
	<meta name="generator" content="WordPress 6.7.1" />
	<link rel="canonical" href="index.html" />
	<link rel='shortlink' href='index.html' />
	<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="wp-json/oembed/1.0/embed950e.json?url=https%3A%2F%2Faskit.dextheme.net%2FEquip%2F" />
	<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="wp-json/oembed/1.0/embedbddd?url=https%3A%2F%2Faskit.dextheme.net%2FEquip%2F&amp;format=xml" />
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

<body class="home page-template page-template-elementor_header_footer page page-id-996 elementor-default elementor-template-full-width elementor-kit-3 elementor-page elementor-page-996">
        <div id="google_translate_element" style='padding:10px;margin-bottom:5px'></div> 
		<?php  include('components/nav.php');  ?>
	<div data-elementor-type="wp-page" data-elementor-id="996" class="elementor elementor-996">
		<div class="elementor-element elementor-element-fe533e4 e-flex e-con-boxed e-con e-parent" data-id="fe533e4" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-c0b83f6 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="c0b83f6" data-element_type="widget" data-widget_type="icon-list.default">
					<div class="elementor-widget-container">
						<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
								<span class="elementor-icon-list-icon">
									
								<span class="elementor-icon-list-text">Welcome to heavyquips</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="elementor-element elementor-element-e8694fa e-con-full animated-fast e-flex elementor-invisible e-con e-child" data-id="e8694fa" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
					<div class="elementor-element elementor-element-8f5fd74 e-con-full e-flex e-con e-child" data-id="8f5fd74" data-element_type="container">
						<div class="elementor-element elementor-element-e156250 elementor-widget elementor-widget-heading" data-id="e156250" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h3 class="elementor-heading-title elementor-size-default">Premium Caterpillars and Expert Lumberjack.</h3>
							</div>
						</div>
						<div class="elementor-element elementor-element-ab69638 elementor-widget elementor-widget-heading" data-id="ab69638" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h1 class="elementor-heading-title elementor-size-default">No Compromise.</h1>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-97a4cbb elementor-widget elementor-widget-text-editor" data-id="97a4cbb" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<p>Explore our high-quality caterpillars and durable lumberjack tools, designed for precision, performance, and reliability in every task</p>
						</div>
					</div>
					<div class="elementor-element elementor-element-98657d4 elementor-widget elementor-widget-button" data-id="98657d4" data-element_type="widget" data-widget_type="button.default">
						<div class="elementor-widget-container">
							<div class="elementor-button-wrapper">
								<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="<?php  echo $host."/auth/"  ?>">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-icon">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
												<path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
											</svg> </span>
										<span class="elementor-button-text">Access your account</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-e625a60 e-con-full e-flex e-con e-parent" data-id="e625a60" data-element_type="container">
			<div class="elementor-element elementor-element-6ae449a e-con-full e-flex e-con e-child" data-id="6ae449a" data-element_type="container">
				<div class="elementor-element elementor-element-2a2f994 elementor-invisible elementor-widget elementor-widget-image" data-id="2a2f994" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="image.default">
					<div class="elementor-widget-container">
						<img fetchpriority="high" decoding="async" width="1216" height="581" src="wp-content/uploads/sites/20/2024/07/3RN4F45d.png" class="attachment-full size-full wp-image-330" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/3RN4F45d.png 1216w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/3RN4F45d-300x143.png 300w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/3RN4F45d-1024x489.png 1024w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/3RN4F45d-768x367.png 768w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/3RN4F45d-800x382.png 800w" sizes="(max-width: 1216px) 100vw, 1216px" />
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-e690133 e-flex e-con-boxed e-con e-parent" data-id="e690133" data-element_type="container">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-6fc425b e-con-full e-flex e-con e-child" data-id="6fc425b" data-element_type="container">
					<div class="elementor-element elementor-element-cfb6a28 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="cfb6a28" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="icon icon-minus"></i> </span>
									<span class="elementor-icon-list-text">Why Choose Us</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="elementor-element elementor-element-193fb57 elementor-widget__width-initial animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="193fb57" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Unmatched Reliability for Every Project.</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-1758578 elementor-widget elementor-widget-text-editor" data-id="1758578" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<p>Our products are built to withstand the toughest conditions, ensuring exceptional performance and durability. Whether you're tackling heavy-duty tasks or intricate work, you can trust our caterpillars and lumberjack tools to deliver consistent, reliable results every time.</p>
						</div>
					</div>
					<div class="elementor-element elementor-element-cf41178 e-con-full e-flex e-con e-child" data-id="cf41178" data-element_type="container">
						<div class="elementor-element elementor-element-d7fa981 e-con-full e-flex e-con e-child" data-id="d7fa981" data-element_type="container">
							<div class="elementor-element elementor-element-e738abf ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="e738abf" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
								<div class="elementor-widget-container">
									<div class="ekit-wid-con"> <!-- link opening -->
										<a href="#" class="ekit_global_links">
											<!-- end link opening -->

											<div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_left">
												<div class="elementskit-box-header elementor-animation-">
													<div class="elementskit-info-box-icon  ">
														<i aria-hidden="true" class="elementkit-infobox-icon icon icon-star"></i>
													</div>
												</div>
												<div class="box-body">
													<h3 class="elementskit-info-box-title">
														Outstanding Service Excellence Award </h3>
												</div>


											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-45884ce e-con-full e-flex e-con e-child" data-id="45884ce" data-element_type="container">
							<div class="elementor-element elementor-element-7b26a7b elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="7b26a7b" data-element_type="widget" data-widget_type="icon-list.default">
								<div class="elementor-widget-container">
									<ul class="elementor-icon-list-items">
										<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
												</svg> </span>
											<span class="elementor-icon-list-text">Rent & Manage Equipment</span>
										</li>
										<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
												</svg> </span>
											<span class="elementor-icon-list-text">View Accurate Rates</span>
										</li>
										<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
												</svg> </span>
											<span class="elementor-icon-list-text">Full Satisfaction Guaranteed</span>
										</li>
										<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
												</svg> </span>
											<span class="elementor-icon-list-text">Full Satisfaction Guaranteed</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="elementor-element elementor-element-1274d25 elementor-widget elementor-widget-button" data-id="1274d25" data-element_type="widget" data-widget_type="button.default">
								<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
										<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="#">
											<span class="elementor-button-content-wrapper">
												<span class="elementor-button-icon">
													<svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
														<path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
													</svg> </span>
												<span class="elementor-button-text">Learn More</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-d8f8bd6 e-con-full e-flex e-con e-child" data-id="d8f8bd6" data-element_type="container">
					<div class="elementor-element elementor-element-5464553 e-con-full e-flex e-con e-child" data-id="5464553" data-element_type="container">
						<div class="elementor-element elementor-element-cd73068 e-con-full animated-fast e-flex elementor-invisible e-con e-child" data-id="cd73068" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
							<div class="elementor-element elementor-element-515e099 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-image-box" data-id="515e099" data-element_type="widget" data-widget_type="elementskit-image-box.default">
								<div class="elementor-widget-container">
									<div class="ekit-wid-con">
										<div class="elementskit-info-image-box ekit-image-box text-left simple-card">


											<div class="elementskit-box-header image-box-img-left">

												<img decoding="async" width="650" height="493" src="wp-content/uploads/sites/20/2024/07/YTFMGZ3d.png" class="attachment-full size-full wp-image-155" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/YTFMGZ3d.png 650w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/YTFMGZ3d-300x228.png 300w" sizes="(max-width: 650px) 100vw, 650px" />
											</div>

											<div class="elementskit-box-body ekit-image-box-body">
												<div class="elementskit-box-content ekit-image-box-body-inner">
													<h4 class="elementskit-info-box-title">

														Excavator

													</h4>
													<div class="elementskit-box-style-content">
														Powerful and efficient excavators designed to tackle the most demanding construction and landscaping projects with ease and precision</div>
												</div>

												<div class="elementskit-box-footer">
													<div class="box-footer">
														<div class="btn-wraper">
															<a href="#" class="elementskit-btn whitespace--normal">
																Learn More
																<i aria-hidden="true" class="icon icon-right-arrow"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-b29afa5 e-con-full e-flex elementor-invisible e-con e-child" data-id="b29afa5" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
							<div class="elementor-element elementor-element-c98e705 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-image-box" data-id="c98e705" data-element_type="widget" data-widget_type="elementskit-image-box.default">
								<div class="elementor-widget-container">
									<div class="ekit-wid-con">
										<div class="elementskit-info-image-box ekit-image-box text-left simple-card">


											<div class="elementskit-box-header image-box-img-left">

												<img loading="lazy" decoding="async" width="650" height="493" src="wp-content/uploads/sites/20/2024/07/JD4Y5GD.png" class="attachment-full size-full wp-image-152" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/JD4Y5GD.png 650w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/JD4Y5GD-300x228.png 300w" sizes="(max-width: 650px) 100vw, 650px" />
											</div>

											<div class="elementskit-box-body ekit-image-box-body">
												<div class="elementskit-box-content ekit-image-box-body-inner">
													<h4 class="elementskit-info-box-title">

														Bulldozer

													</h4>
													<div class="elementskit-box-style-content">
														Robust bulldozers built for strength and reliability, ideal for moving large quantities of material and handling tough terrains. </div>
												</div>

												<div class="elementskit-box-footer">
													<div class="box-footer">
														<div class="btn-wraper">
															<a href="#" class="elementskit-btn whitespace--normal">
																Learn More
																<i aria-hidden="true" class="icon icon-right-arrow"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-134b5cd e-con-full e-flex e-con e-child" data-id="134b5cd" data-element_type="container">
						<div class="elementor-element elementor-element-36990bd e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="36990bd" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:0}">
							<div class="elementor-element elementor-element-53a83ee ekit-equal-height-disable elementor-widget elementor-widget-elementskit-image-box" data-id="53a83ee" data-element_type="widget" data-widget_type="elementskit-image-box.default">
								<div class="elementor-widget-container">
									<div class="ekit-wid-con">
										<div class="elementskit-info-image-box ekit-image-box text-left simple-card">


											<div class="elementskit-box-header image-box-img-left">

												<img loading="lazy" decoding="async" width="650" height="493" src="wp-content/uploads/sites/20/2024/07/JJWL9HP.png" class="attachment-full size-full wp-image-153" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/JJWL9HP.png 650w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/JJWL9HP-300x228.png 300w" sizes="(max-width: 650px) 100vw, 650px" />
											</div>

											<div class="elementskit-box-body ekit-image-box-body">
												<div class="elementskit-box-content ekit-image-box-body-inner">
													<h4 class="elementskit-info-box-title">

														Dusmpster

													</h4>
													<div class="elementskit-box-style-content">
														Heavy-duty dumpsters designed for efficient waste disposal, offering durability and capacity to handle large volumes of debris </div>
												</div>

												<div class="elementskit-box-footer">
													<div class="box-footer">
														<div class="btn-wraper">
															<a href="#" class="elementskit-btn whitespace--normal">
																Learn More
																<i aria-hidden="true" class="icon icon-right-arrow"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-ce115f5 e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="ce115f5" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:200}">
							<div class="elementor-element elementor-element-81f0b23 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-image-box" data-id="81f0b23" data-element_type="widget" data-widget_type="elementskit-image-box.default">
								<div class="elementor-widget-container">
									<div class="ekit-wid-con">
										<div class="elementskit-info-image-box ekit-image-box text-left simple-card">


											<div class="elementskit-box-header image-box-img-left">

												<img loading="lazy" decoding="async" width="650" height="493" src="wp-content/uploads/sites/20/2024/07/CPDVSW.png" class="attachment-full size-full wp-image-666" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/CPDVSW.png 650w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/CPDVSW-300x228.png 300w" sizes="(max-width: 650px) 100vw, 650px" />
											</div>

											<div class="elementskit-box-body ekit-image-box-body">
												<div class="elementskit-box-content ekit-image-box-body-inner">
													<h4 class="elementskit-info-box-title">

														Mobile Crane

													</h4>
													<div class="elementskit-box-style-content">
														Versatile mobile cranes offering exceptional lifting power and mobility, perfect for a wide range of construction and industrial applications.</div>
												</div>

												<div class="elementskit-box-footer">
													<div class="box-footer">
														<div class="btn-wraper">
															<a href="#" class="elementskit-btn whitespace--normal">
																Learn More
																<i aria-hidden="true" class="icon icon-right-arrow"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-6bb1f60 e-flex e-con-boxed e-con e-parent" data-id="6bb1f60" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-f4d9ff3 e-con-full e-flex e-con e-child" data-id="f4d9ff3" data-element_type="container">
					<div class="elementor-element elementor-element-3c597b4 elementor-invisible elementor-widget elementor-widget-image" data-id="3c597b4" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img loading="lazy" decoding="async" width="1920" height="1280" src="wp-content/uploads/sites/20/2024/07/LYF2KKW.jpg" class="attachment-full size-full wp-image-1157" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/LYF2KKW.jpg 1920w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/LYF2KKW-300x200.jpg 300w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/LYF2KKW-1024x683.jpg 1024w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/LYF2KKW-768x512.jpg 768w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/LYF2KKW-1536x1024.jpg 1536w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/LYF2KKW-800x533.jpg 800w" sizes="(max-width: 1920px) 100vw, 1920px" />
						</div>
					</div>
					<div class="elementor-element elementor-element-e91e3e4 e-con-full e-flex e-con e-child" data-id="e91e3e4" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-element elementor-element-a9c36cf elementor-widget elementor-widget-elementskit-video" data-id="a9c36cf" data-element_type="widget" data-widget_type="elementskit-video.default">
							<div class="elementor-widget-container">
								<div class="ekit-wid-con">
									<div class="video-content" data-video-player="[]" data-video-setting="{&quot;videoVolume&quot;:&quot;horizontal&quot;,&quot;startVolume&quot;:0.8,&quot;videoType&quot;:&quot;iframe&quot;,&quot;videoClass&quot;:&quot;mfp-fade&quot;}">

										<a class="ekit_icon_button glow-btn ekit-video-popup ekit-video-popup-btn" href="https://www.youtube.com/embed/VhBl3dHT5SY?feature=oembed?playlist=VhBl3dHT5SY&amp;mute=0&amp;autoplay=0&amp;loop=no&amp;controls=0&amp;start=0&amp;end=" aria-label="video-popup">
											<i aria-hidden="true" class="icon icon-play1"></i> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-a4ee3dc e-con-full e-flex e-con e-child" data-id="a4ee3dc" data-element_type="container">
					<div class="elementor-element elementor-element-e090bfd elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="e090bfd" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="icon icon-minus"></i> </span>
									<span class="elementor-icon-list-text" id="about">About Us</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="elementor-element elementor-element-8f5f159 elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-heading" data-id="8f5f159" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Excellence in Equipment Rentals.</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-3ddbc0a e-con-full e-flex e-con e-child" data-id="3ddbc0a" data-element_type="container">
						<div class="elementor-element elementor-element-3b99c31 e-con-full e-flex e-con e-child" data-id="3b99c31" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-element elementor-element-652cccc elementor-widget elementor-widget-text-editor" data-id="652cccc" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<p>At heavyquips, we are dedicated to providing top-tier equipment rentals that meet the diverse needs of our clients. With a focus on quality, reliability, and customer satisfaction, we ensure that each piece of equipment is well-maintained and ready to perform at its best, supporting your projects from start to finish.</p>
									<!-- <p>Donec nec sem at eros porta finibus eu et felis. Cras quis libero eu ex euismod tempor. Aliquam eu justo quis nisleud. Etiam quis mattis ante.</p> -->
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-a7ed1ff e-con-full e-flex e-con e-child" data-id="a7ed1ff" data-element_type="container">
							<div class="elementor-element elementor-element-37ec7de e-con-full animated-fast e-flex elementor-invisible e-con e-child" data-id="37ec7de" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
								<div class="elementor-element elementor-element-8d94d03 elementor-widget elementor-widget-counter" data-id="8d94d03" data-element_type="widget" data-widget_type="counter.default">
									<div class="elementor-widget-container">
										<div class="elementor-counter">
											<div class="elementor-counter-number-wrapper">
												<span class="elementor-counter-number-prefix"></span>
												<span class="elementor-counter-number" data-duration="2000" data-to-value="23" data-from-value="0" data-delimiter=",">100</span>
												<span class="elementor-counter-number-suffix">+</span>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-cf86ece elementor-widget elementor-widget-heading" data-id="cf86ece" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h6 class="elementor-heading-title elementor-size-default">Years of excellence.</h6>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-3b3e5cf e-con-full e-flex e-con e-child" data-id="3b3e5cf" data-element_type="container">
								<div class="elementor-element elementor-element-e123ce2 animated-slow elementor-invisible elementor-widget elementor-widget-image-box" data-id="e123ce2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="image-box.default">
									<div class="elementor-widget-container">
										<div class="elementor-image-box-wrapper">
											<div class="elementor-image-box-content">
												<h5 class="elementor-image-box-title">Our Vision</h5>
												<p class="elementor-image-box-description">Our latest version of equipment offers enhanced performance, advanced technology, and improved efficiency, ensuring that every project is completed with precision and ease</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-885fb8a elementor-widget elementor-widget-button" data-id="885fb8a" data-element_type="widget" data-widget_type="button.default">
						<div class="elementor-widget-container">
							<div class="elementor-button-wrapper">
								<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="#">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-icon">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
												<path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
											</svg> </span>
										<span class="elementor-button-text">Read More</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-04fc5f4 e-flex e-con-boxed e-con e-parent" data-id="04fc5f4" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-f816afb e-con-full e-flex e-con e-child" data-id="f816afb" data-element_type="container">
					<div class="elementor-element elementor-element-d3d1585 elementor-tablet-align-center elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="d3d1585" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="icon icon-minus"></i> </span>
									<span class="elementor-icon-list-text">Who We Are</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="elementor-element elementor-element-3e7ffa2 elementor-invisible elementor-widget elementor-widget-heading" data-id="3e7ffa2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Experts in Heavy Equipment Solutions.</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-dae68e6 elementor-widget elementor-widget-text-editor" data-id="dae68e6" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<p>With years of industry experience, we specialize in providing innovative heavy equipment solutions tailored to meet the unique demands of your projects. Our team of experts is committed to delivering exceptional service, ensuring you have the right tools and machinery to get the job done safely and efficiently..</p>
						</div>
					</div>
					<div class="elementor-element elementor-element-8e91dad elementor-tablet-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="8e91dad" data-element_type="widget" data-widget_type="button.default">
						<div class="elementor-widget-container">
							<div class="elementor-button-wrapper">
								<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="#">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-icon">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
												<path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
											</svg> </span>
										<span class="elementor-button-text">Learn More</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-ef6aab7 e-con-full e-flex e-con e-child" data-id="ef6aab7" data-element_type="container">
					<div class="elementor-element elementor-element-7104842 e-con-full e-flex e-con e-child" data-id="7104842" data-element_type="container">
						<div class="elementor-element elementor-element-3c0bff4 elementor-widget elementor-widget-counter" data-id="3c0bff4" data-element_type="widget" data-widget_type="counter.default">
							<div class="elementor-widget-container">
								<div class="elementor-counter">
									<div class="elementor-counter-number-wrapper">
										<span class="elementor-counter-number-prefix"></span>
										<span class="elementor-counter-number" data-duration="2000" data-to-value="98" data-from-value="0" data-delimiter=",">100</span>
										<span class="elementor-counter-number-suffix">%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-c270c31 elementor-widget elementor-widget-heading" data-id="c270c31" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h6 class="elementor-heading-title elementor-size-default">Satisfied Client</h6>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-60af8f3 e-con-full e-flex e-con e-child" data-id="60af8f3" data-element_type="container">
						<div class="elementor-element elementor-element-29e22b1 elementor-widget elementor-widget-counter" data-id="29e22b1" data-element_type="widget" data-widget_type="counter.default">
							<div class="elementor-widget-container">
								<div class="elementor-counter">
									<div class="elementor-counter-number-wrapper">
										<span class="elementor-counter-number-prefix"></span>
										<span class="elementor-counter-number" data-duration="2000" data-to-value="100" data-from-value="0" data-delimiter=",">100</span>
										<span class="elementor-counter-number-suffix">%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-42ecde1 elementor-widget elementor-widget-heading" data-id="42ecde1" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h6 class="elementor-heading-title elementor-size-default">Saisfied Client</h6>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-742e963 e-con-full e-flex e-con e-child" data-id="742e963" data-element_type="container">
						<div class="elementor-element elementor-element-47f0dce elementor-widget elementor-widget-counter" data-id="47f0dce" data-element_type="widget" data-widget_type="counter.default">
							<div class="elementor-widget-container">
								<div class="elementor-counter">
									<div class="elementor-counter-number-wrapper">
										<span class="elementor-counter-number-prefix"></span>
										<span class="elementor-counter-number" data-duration="2000" data-to-value="100" data-from-value="0" data-delimiter=",">100</span>
										<span class="elementor-counter-number-suffix">%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-bd71991 elementor-widget elementor-widget-heading" data-id="bd71991" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h6 class="elementor-heading-title elementor-size-default">Quality Services</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="elementor-element elementor-element-60ca328 e-flex e-con-boxed e-con e-parent" data-id="60ca328" data-element_type="container">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-f9aed32 e-con-full e-flex e-con e-child" data-id="f9aed32" data-element_type="container">
					<div class="elementor-element elementor-element-164ce91 elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="164ce91" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="icon icon-minus"></i> </span>
									<span class="elementor-icon-list-text">Rent or Buy</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="elementor-element elementor-element-b18c36b elementor-widget elementor-widget-heading" data-id="b18c36b" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Flexible Options, Maximum Power.</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-8819ae5 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="8819ae5" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis gravida ante, quis pulvinar odio commodo efficitur. Donec nec sem at eros porta finibus eu et felis. Cras quis libero eu ex euismod tempor. Aliquam eu justo quis nisl euismod vestibulum non quis odio.</p>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-0b392a6 e-con-full e-flex e-con e-child" data-id="0b392a6" data-element_type="container">
					<div class="elementor-element elementor-element-d65206a e-con-full animated-fast e-flex elementor-invisible e-con e-child" data-id="d65206a" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-element elementor-element-d706fc1 elementor-widget elementor-widget-image" data-id="d706fc1" data-element_type="widget" data-widget_type="image.default">
							<div class="elementor-widget-container">
								<img loading="lazy" decoding="async" width="650" height="493" src="wp-content/uploads/sites/20/2024/07/3RN4F45b.png" class="attachment-full size-full wp-image-149" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/3RN4F45b.png 650w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/3RN4F45b-300x228.png 300w" sizes="(max-width: 650px) 100vw, 650px" />
							</div>
						</div>
						<div class="elementor-element elementor-element-4c6ad09 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="4c6ad09" data-element_type="widget" data-widget_type="divider.default">
							<div class="elementor-widget-container">
								<div class="elementor-divider">
									<span class="elementor-divider-separator">
									</span>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-06fa253 e-con-full e-flex e-con e-child" data-id="06fa253" data-element_type="container">
							<div class="elementor-element elementor-element-280ac0c elementor-widget elementor-widget-rating" data-id="280ac0c" data-element_type="widget" data-widget_type="rating.default">
								<div class="elementor-widget-container">
									<div class="e-rating" itemtype="https://schema.org/Rating" itemscope="" itemprop="reviewRating">
										<meta itemprop="worstRating" content="0">
										<meta itemprop="bestRating" content="5">
										<div class="e-rating-wrapper" itemprop="ratingValue" content="5" role="img" aria-label="Rated 5 out of 5">
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-f6701db elementor-widget elementor-widget-heading" data-id="f6701db" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h4 class="elementor-heading-title elementor-size-default">DX-T830 Wheel Loader</h4>
								</div>
							</div>
							<div class="elementor-element elementor-element-2962d3e elementor-widget elementor-widget-text-editor" data-id="2962d3e" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-db14820 e-con-full e-flex e-con e-child" data-id="db14820" data-element_type="container">
							<div class="elementor-element elementor-element-fdc0801 e-con-full e-flex e-con e-child" data-id="fdc0801" data-element_type="container">
								<div class="elementor-element elementor-element-55461ae elementor-widget elementor-widget-heading" data-id="55461ae" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h3 class="elementor-heading-title elementor-size-default">$299</h3>
									</div>
								</div>
								<div class="elementor-element elementor-element-36e7053 elementor-widget elementor-widget-heading" data-id="36e7053" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h6 class="elementor-heading-title elementor-size-default">/Day</h6>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-4b6f0a8 e-con-full e-flex e-con e-child" data-id="4b6f0a8" data-element_type="container">
								<div class="elementor-element elementor-element-586ab03 elementor-align-justify elementor-widget elementor-widget-button" data-id="586ab03" data-element_type="widget" data-widget_type="button.default">
									<div class="elementor-widget-container">
										<div class="elementor-button-wrapper">
											<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="#">
												<span class="elementor-button-content-wrapper">
													<span class="elementor-button-text">Rental Now</span>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-3cd6c25 e-con-full e-flex elementor-invisible e-con e-child" data-id="3cd6c25" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-element elementor-element-ce52d15 elementor-widget elementor-widget-image" data-id="ce52d15" data-element_type="widget" data-widget_type="image.default">
							<div class="elementor-widget-container">
								<img decoding="async" width="650" height="493" src="wp-content/uploads/sites/20/2024/07/YTFMGZ3d.png" class="attachment-full size-full wp-image-155" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/YTFMGZ3d.png 650w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/YTFMGZ3d-300x228.png 300w" sizes="(max-width: 650px) 100vw, 650px" />
							</div>
						</div>
						<div class="elementor-element elementor-element-ad1aceb elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="ad1aceb" data-element_type="widget" data-widget_type="divider.default">
							<div class="elementor-widget-container">
								<div class="elementor-divider">
									<span class="elementor-divider-separator">
									</span>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-dab39b7 e-con-full e-flex e-con e-child" data-id="dab39b7" data-element_type="container">
							<div class="elementor-element elementor-element-e494472 elementor-widget elementor-widget-rating" data-id="e494472" data-element_type="widget" data-widget_type="rating.default">
								<div class="elementor-widget-container">
									<div class="e-rating" itemtype="https://schema.org/Rating" itemscope="" itemprop="reviewRating">
										<meta itemprop="worstRating" content="0">
										<meta itemprop="bestRating" content="5">
										<div class="e-rating-wrapper" itemprop="ratingValue" content="5" role="img" aria-label="Rated 5 out of 5">
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-15a0c85 elementor-widget elementor-widget-heading" data-id="15a0c85" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h4 class="elementor-heading-title elementor-size-default">DX-PC400 Excavator</h4>
								</div>
							</div>
							<div class="elementor-element elementor-element-5ff1f75 elementor-widget elementor-widget-text-editor" data-id="5ff1f75" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-5608223 e-con-full e-flex e-con e-child" data-id="5608223" data-element_type="container">
							<div class="elementor-element elementor-element-39590e6 e-con-full e-flex e-con e-child" data-id="39590e6" data-element_type="container">
								<div class="elementor-element elementor-element-63f5621 elementor-widget elementor-widget-heading" data-id="63f5621" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h3 class="elementor-heading-title elementor-size-default">$399</h3>
									</div>
								</div>
								<div class="elementor-element elementor-element-3f7a86c elementor-widget elementor-widget-heading" data-id="3f7a86c" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h6 class="elementor-heading-title elementor-size-default">/Day</h6>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-2b0482e e-con-full e-flex e-con e-child" data-id="2b0482e" data-element_type="container">
								<div class="elementor-element elementor-element-d9cf959 elementor-align-justify elementor-widget elementor-widget-button" data-id="d9cf959" data-element_type="widget" data-widget_type="button.default">
									<div class="elementor-widget-container">
										<div class="elementor-button-wrapper">
											<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="#">
												<span class="elementor-button-content-wrapper">
													<span class="elementor-button-text">Rental Now</span>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-b164c68 e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="b164c68" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-element elementor-element-9d9155e elementor-widget elementor-widget-image" data-id="9d9155e" data-element_type="widget" data-widget_type="image.default">
							<div class="elementor-widget-container">
								<img loading="lazy" decoding="async" width="650" height="493" src="wp-content/uploads/sites/20/2024/07/ZLVDYC.png" class="attachment-full size-full wp-image-154" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/ZLVDYC.png 650w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/ZLVDYC-300x228.png 300w" sizes="(max-width: 650px) 100vw, 650px" />
							</div>
						</div>
						<div class="elementor-element elementor-element-ec0d798 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="ec0d798" data-element_type="widget" data-widget_type="divider.default">
							<div class="elementor-widget-container">
								<div class="elementor-divider">
									<span class="elementor-divider-separator">
									</span>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-683b923 e-con-full e-flex e-con e-child" data-id="683b923" data-element_type="container">
							<div class="elementor-element elementor-element-0c36cd1 elementor-widget elementor-widget-rating" data-id="0c36cd1" data-element_type="widget" data-widget_type="rating.default">
								<div class="elementor-widget-container">
									<div class="e-rating" itemtype="https://schema.org/Rating" itemscope="" itemprop="reviewRating">
										<meta itemprop="worstRating" content="0">
										<meta itemprop="bestRating" content="5">
										<div class="e-rating-wrapper" itemprop="ratingValue" content="5" role="img" aria-label="Rated 5 out of 5">
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-fff85f3 elementor-widget elementor-widget-heading" data-id="fff85f3" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h4 class="elementor-heading-title elementor-size-default">DX-G705 Power Grader</h4>
								</div>
							</div>
							<div class="elementor-element elementor-element-4a55097 elementor-widget elementor-widget-text-editor" data-id="4a55097" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-35895d0 e-con-full e-flex e-con e-child" data-id="35895d0" data-element_type="container">
							<div class="elementor-element elementor-element-e4bbd73 e-con-full e-flex e-con e-child" data-id="e4bbd73" data-element_type="container">
								<div class="elementor-element elementor-element-a10e50e elementor-widget elementor-widget-heading" data-id="a10e50e" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h3 class="elementor-heading-title elementor-size-default">$459</h3>
									</div>
								</div>
								<div class="elementor-element elementor-element-3561a8e elementor-widget elementor-widget-heading" data-id="3561a8e" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h6 class="elementor-heading-title elementor-size-default">/Day</h6>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-b44b364 e-con-full e-flex e-con e-child" data-id="b44b364" data-element_type="container">
								<div class="elementor-element elementor-element-0531770 elementor-align-justify elementor-widget elementor-widget-button" data-id="0531770" data-element_type="widget" data-widget_type="button.default">
									<div class="elementor-widget-container">
										<div class="elementor-button-wrapper">
											<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="#">
												<span class="elementor-button-content-wrapper">
													<span class="elementor-button-text">Rental Now</span>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-0960e77 e-con-full e-flex e-con e-child" data-id="0960e77" data-element_type="container">
					<div class="elementor-element elementor-element-cafd898 e-con-full animated-fast e-flex elementor-invisible e-con e-child" data-id="cafd898" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-element elementor-element-5ca75f3 elementor-widget elementor-widget-image" data-id="5ca75f3" data-element_type="widget" data-widget_type="image.default">
							<div class="elementor-widget-container">
								<img loading="lazy" decoding="async" width="650" height="493" src="wp-content/uploads/sites/20/2024/07/5YJNDAG.png" class="attachment-full size-full wp-image-150" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/5YJNDAG.png 650w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/5YJNDAG-300x228.png 300w" sizes="(max-width: 650px) 100vw, 650px" />
							</div>
						</div>
						<div class="elementor-element elementor-element-781d9bd elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="781d9bd" data-element_type="widget" data-widget_type="divider.default">
							<div class="elementor-widget-container">
								<div class="elementor-divider">
									<span class="elementor-divider-separator">
									</span>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-ce181bd e-con-full e-flex e-con e-child" data-id="ce181bd" data-element_type="container">
							<div class="elementor-element elementor-element-138b5d4 elementor-widget elementor-widget-rating" data-id="138b5d4" data-element_type="widget" data-widget_type="rating.default">
								<div class="elementor-widget-container">
									<div class="e-rating" itemtype="https://schema.org/Rating" itemscope="" itemprop="reviewRating">
										<meta itemprop="worstRating" content="0">
										<meta itemprop="bestRating" content="5">
										<div class="e-rating-wrapper" itemprop="ratingValue" content="5" role="img" aria-label="Rated 5 out of 5">
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-c6cfdc3 elementor-widget elementor-widget-heading" data-id="c6cfdc3" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h4 class="elementor-heading-title elementor-size-default">DX-SX200 Drum Roller</h4>
								</div>
							</div>
							<div class="elementor-element elementor-element-2657d9e elementor-widget elementor-widget-text-editor" data-id="2657d9e" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-249ded8 e-con-full e-flex e-con e-child" data-id="249ded8" data-element_type="container">
							<div class="elementor-element elementor-element-13e8a22 e-con-full e-flex e-con e-child" data-id="13e8a22" data-element_type="container">
								<div class="elementor-element elementor-element-022e8a6 elementor-widget elementor-widget-heading" data-id="022e8a6" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h3 class="elementor-heading-title elementor-size-default">$359</h3>
									</div>
								</div>
								<div class="elementor-element elementor-element-208b526 elementor-widget elementor-widget-heading" data-id="208b526" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h6 class="elementor-heading-title elementor-size-default">/Day</h6>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-ab305b1 e-con-full e-flex e-con e-child" data-id="ab305b1" data-element_type="container">
								<div class="elementor-element elementor-element-e68f46d elementor-align-justify elementor-widget elementor-widget-button" data-id="e68f46d" data-element_type="widget" data-widget_type="button.default">
									<div class="elementor-widget-container">
										<div class="elementor-button-wrapper">
											<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="#">
												<span class="elementor-button-content-wrapper">
													<span class="elementor-button-text">Rental Now</span>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-56b0003 e-con-full e-flex elementor-invisible e-con e-child" data-id="56b0003" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-element elementor-element-a83e163 elementor-widget elementor-widget-image" data-id="a83e163" data-element_type="widget" data-widget_type="image.default">
							<div class="elementor-widget-container">
								<img loading="lazy" decoding="async" width="650" height="493" src="wp-content/uploads/sites/20/2024/07/MDUHDBU.png" class="attachment-full size-full wp-image-662" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/MDUHDBU.png 650w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/MDUHDBU-300x228.png 300w" sizes="(max-width: 650px) 100vw, 650px" />
							</div>
						</div>
						<div class="elementor-element elementor-element-ab6d02a elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="ab6d02a" data-element_type="widget" data-widget_type="divider.default">
							<div class="elementor-widget-container">
								<div class="elementor-divider">
									<span class="elementor-divider-separator">
									</span>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-3c5fd07 e-con-full e-flex e-con e-child" data-id="3c5fd07" data-element_type="container">
							<div class="elementor-element elementor-element-12a69d0 elementor-widget elementor-widget-rating" data-id="12a69d0" data-element_type="widget" data-widget_type="rating.default">
								<div class="elementor-widget-container">
									<div class="e-rating" itemtype="https://schema.org/Rating" itemscope="" itemprop="reviewRating">
										<meta itemprop="worstRating" content="0">
										<meta itemprop="bestRating" content="5">
										<div class="e-rating-wrapper" itemprop="ratingValue" content="5" role="img" aria-label="Rated 5 out of 5">
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-c9654bc elementor-widget elementor-widget-heading" data-id="c9654bc" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h4 class="elementor-heading-title elementor-size-default">DX-90DT Forklift</h4>
								</div>
							</div>
							<div class="elementor-element elementor-element-db34820 elementor-widget elementor-widget-text-editor" data-id="db34820" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-2f6a4c7 e-con-full e-flex e-con e-child" data-id="2f6a4c7" data-element_type="container">
							<div class="elementor-element elementor-element-21349fa e-con-full e-flex e-con e-child" data-id="21349fa" data-element_type="container">
								<div class="elementor-element elementor-element-d0131db elementor-widget elementor-widget-heading" data-id="d0131db" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h3 class="elementor-heading-title elementor-size-default">$379</h3>
									</div>
								</div>
								<div class="elementor-element elementor-element-1b9717d elementor-widget elementor-widget-heading" data-id="1b9717d" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h6 class="elementor-heading-title elementor-size-default">/Day</h6>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-d2a9023 e-con-full e-flex e-con e-child" data-id="d2a9023" data-element_type="container">
								<div class="elementor-element elementor-element-a4a142d elementor-align-justify elementor-widget elementor-widget-button" data-id="a4a142d" data-element_type="widget" data-widget_type="button.default">
									<div class="elementor-widget-container">
										<div class="elementor-button-wrapper">
											<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="#">
												<span class="elementor-button-content-wrapper">
													<span class="elementor-button-text">Rental Now</span>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-33d07c8 e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="33d07c8" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-element elementor-element-5991f79 elementor-widget elementor-widget-image" data-id="5991f79" data-element_type="widget" data-widget_type="image.default">
							<div class="elementor-widget-container">
								<img loading="lazy" decoding="async" width="650" height="493" src="wp-content/uploads/sites/20/2024/07/JJWL9HP.png" class="attachment-full size-full wp-image-153" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/JJWL9HP.png 650w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/JJWL9HP-300x228.png 300w" sizes="(max-width: 650px) 100vw, 650px" />
							</div>
						</div>
						<div class="elementor-element elementor-element-81d40dd elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="81d40dd" data-element_type="widget" data-widget_type="divider.default">
							<div class="elementor-widget-container">
								<div class="elementor-divider">
									<span class="elementor-divider-separator">
									</span>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-ece5f46 e-con-full e-flex e-con e-child" data-id="ece5f46" data-element_type="container">
							<div class="elementor-element elementor-element-f8afa72 elementor-widget elementor-widget-rating" data-id="f8afa72" data-element_type="widget" data-widget_type="rating.default">
								<div class="elementor-widget-container">
									<div class="e-rating" itemtype="https://schema.org/Rating" itemscope="" itemprop="reviewRating">
										<meta itemprop="worstRating" content="0">
										<meta itemprop="bestRating" content="5">
										<div class="e-rating-wrapper" itemprop="ratingValue" content="5" role="img" aria-label="Rated 5 out of 5">
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
											<div class="e-icon">
												<div class="e-icon-wrapper e-icon-marked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
												<div class="e-icon-wrapper e-icon-unmarked">
													<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
														<path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path>
													</svg>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-eee0b1f elementor-widget elementor-widget-heading" data-id="eee0b1f" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h4 class="elementor-heading-title elementor-size-default">DX-HD900 Haul Truck</h4>
								</div>
							</div>
							<div class="elementor-element elementor-element-ee9fbbf elementor-widget elementor-widget-text-editor" data-id="ee9fbbf" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-ea2873d e-con-full e-flex e-con e-child" data-id="ea2873d" data-element_type="container">
							<div class="elementor-element elementor-element-641e4ac e-con-full e-flex e-con e-child" data-id="641e4ac" data-element_type="container">
								<div class="elementor-element elementor-element-64497cc elementor-widget elementor-widget-heading" data-id="64497cc" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h3 class="elementor-heading-title elementor-size-default">$1200</h3>
									</div>
								</div>
								<div class="elementor-element elementor-element-4d26425 elementor-widget elementor-widget-heading" data-id="4d26425" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h6 class="elementor-heading-title elementor-size-default">/Day</h6>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-b6a49b3 e-con-full e-flex e-con e-child" data-id="b6a49b3" data-element_type="container">
								<div class="elementor-element elementor-element-42c22b7 elementor-align-justify elementor-widget elementor-widget-button" data-id="42c22b7" data-element_type="widget" data-widget_type="button.default">
									<div class="elementor-widget-container">
										<div class="elementor-button-wrapper">
											<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="#">
												<span class="elementor-button-content-wrapper">
													<span class="elementor-button-text">Rental Now</span>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="elementor-element elementor-element-566638e e-flex e-con-boxed e-con e-parent" data-id="566638e" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-7a598db e-con-full e-flex e-con e-child" data-id="7a598db" data-element_type="container">
					<div class="elementor-element elementor-element-9666237 e-con-full e-flex e-con e-child" data-id="9666237" data-element_type="container">
						<div class="elementor-element elementor-element-398c7ba elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="398c7ba" data-element_type="widget" data-widget_type="icon-list.default">
							<div class="elementor-widget-container">
								<ul class="elementor-icon-list-items">
									<li class="elementor-icon-list-item">
										<span class="elementor-icon-list-icon">
											<i aria-hidden="true" class="icon icon-minus"></i> </span>
										<span class="elementor-icon-list-text" id="Testimonals">Testimonials</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="elementor-element elementor-element-aa196a0 elementor-invisible elementor-widget elementor-widget-heading" data-id="aa196a0" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default">Client Confidence Speaks.</h2>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-3fe1635 e-con-full e-flex e-con e-child" data-id="3fe1635" data-element_type="container">
						<div class="elementor-element elementor-element-717119c elementor-widget elementor-widget-text-editor" data-id="717119c" data-element_type="widget" data-widget_type="text-editor.default">
							<div class="elementor-widget-container">
								<p>Our clients’ satisfaction is a testament to the quality and reliability of our equipment and services. Hear directly from those who trust us to support their projects with unmatched expertise and dependable solutions.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-390aaee elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="390aaee" data-element_type="widget" data-widget_type="divider.default">
					<div class="elementor-widget-container">
						<div class="elementor-divider">
							<span class="elementor-divider-separator">
							</span>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-386caae elementor-widget elementor-widget-elementskit-testimonial" data-id="386caae" data-element_type="widget" data-widget_type="elementskit-testimonial.default">
					<div class="elementor-widget-container">
						<div class="ekit-wid-con">
							<div class="elementskit-testimonial-slider ekit_testimonial_style_5 arrow_inside slider-dotted" data-config="{&quot;rtl&quot;:false,&quot;arrows&quot;:false,&quot;dots&quot;:true,&quot;pauseOnHover&quot;:true,&quot;autoplay&quot;:true,&quot;speed&quot;:1000,&quot;slidesPerGroup&quot;:1,&quot;slidesPerView&quot;:3,&quot;loop&quot;:true,&quot;spaceBetween&quot;:0,&quot;breakpoints&quot;:{&quot;320&quot;:{&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1,&quot;spaceBetween&quot;:10},&quot;768&quot;:{&quot;slidesPerView&quot;:2,&quot;slidesPerGroup&quot;:1,&quot;spaceBetween&quot;:10},&quot;1024&quot;:{&quot;slidesPerView&quot;:3,&quot;slidesPerGroup&quot;:1,&quot;spaceBetween&quot;:15}}}">
								<div class="ekit-main-swiper swiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="swiper-slide-inner">
												<div class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-67e45e4">
													<div class="elementskit-commentor-header">
														<ul class="elementskit-stars">
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
														</ul>

														<div class="elementskit-icon-content elementskit-watermark-icon ">

															<i aria-hidden="true" class="icon icon-quote"></i>
														</div>
													</div>

													<div class="elementskit-commentor-content">
														<p>The equipment quality and service are unmatched. Our projects run smoothly every time. Highly recommend!</p>
													</div>

													<div class="elementskit-commentor-bio">
														<div class="elementkit-commentor-details ">
															<div class="elementskit-commentor-image ekit-testimonial--avatar">
																<img loading="lazy" decoding="async" width="650" height="650" src="wp-content/uploads/sites/20/2024/07/PK5KQLB.jpg" class="attachment-full size-full" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/PK5KQLB.jpg 650w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/PK5KQLB-300x300.jpg 300w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/PK5KQLB-150x150.jpg 150w" sizes="(max-width: 650px) 100vw, 650px" />
															</div>
															<div class="elementskit-profile-info">
																<strong class="elementskit-author-name">John Anderson</strong>
																<span class="elementskit-author-des">Construction Manager</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="swiper-slide-inner">
												<div class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-03d524c">
													<div class="elementskit-commentor-header">
														<ul class="elementskit-stars">
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
														</ul>

														<div class="elementskit-icon-content elementskit-watermark-icon ">

															<i aria-hidden="true" class="icon icon-quote"></i>
														</div>
													</div>

													<div class="elementskit-commentor-content">
														<p>Reliable and efficient machinery that consistently meets all our needs. Exceptional flexibility!</p>
													</div>

													<div class="elementskit-commentor-bio">
														<div class="elementkit-commentor-details ">
															<div class="elementskit-commentor-image ekit-testimonial--avatar">
																<img loading="lazy" decoding="async" width="650" height="650" src="wp-content/uploads/sites/20/2024/07/CYTF9C9.jpg" class="attachment-full size-full" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/CYTF9C9.jpg 650w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/CYTF9C9-300x300.jpg 300w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/CYTF9C9-150x150.jpg 150w" sizes="(max-width: 650px) 100vw, 650px" />
															</div>
															<div class="elementskit-profile-info">
																<strong class="elementskit-author-name">Emily Roberts</strong>
																<span class="elementskit-author-des">Site Supervisor</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="swiper-slide-inner">
												<div class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-8030bfc">
													<div class="elementskit-commentor-header">
														<ul class="elementskit-stars">
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
														</ul>

														<div class="elementskit-icon-content elementskit-watermark-icon ">

															<i aria-hidden="true" class="icon icon-quote"></i>
														</div>
													</div>

													<div class="elementskit-commentor-content">
														<p>Their equipment never disappoints. From rental to purchase, everything is seamless and professional.</p>
													</div>

													<div class="elementskit-commentor-bio">
														<div class="elementkit-commentor-details ">
															<div class="elementskit-commentor-image ekit-testimonial--avatar">
																<img loading="lazy" decoding="async" width="650" height="650" src="wp-content/uploads/sites/20/2024/07/LETT9QN.jpg" class="attachment-full size-full" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/LETT9QN.jpg 650w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/LETT9QN-300x300.jpg 300w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/LETT9QN-150x150.jpg 150w" sizes="(max-width: 650px) 100vw, 650px" />
															</div>
															<div class="elementskit-profile-info">
																<strong class="elementskit-author-name">Michael Thompson</strong>
																<span class="elementskit-author-des">Project Director</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="swiper-slide-inner">
												<div class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-48bfdda">
													<div class="elementskit-commentor-header">
														<ul class="elementskit-stars">
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
															<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
																		<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
																	</svg></a></li>
														</ul>

														<div class="elementskit-icon-content elementskit-watermark-icon ">

															<i aria-hidden="true" class="icon icon-quote"></i>
														</div>
													</div>

													<div class="elementskit-commentor-content">
														<p>Top-notch service and powerful equipment. They truly understand our business needs perfectly.</p>
													</div>

													<div class="elementskit-commentor-bio">
														<div class="elementkit-commentor-details ">
															<div class="elementskit-commentor-image ekit-testimonial--avatar">
																<img loading="lazy" decoding="async" width="650" height="650" src="wp-content/uploads/sites/20/2024/07/DLN9GFV.jpg" class="attachment-full size-full" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/DLN9GFV.jpg 650w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/DLN9GFV-300x300.jpg 300w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/DLN9GFV-150x150.jpg 150w" sizes="(max-width: 650px) 100vw, 650px" />
															</div>
															<div class="elementskit-profile-info">
																<strong class="elementskit-author-name">Sarah Mitchell</strong>
																<span class="elementskit-author-des">Operations Manager</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="swiper-pagination"></div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-ca304cd e-flex e-con-boxed e-con e-parent" data-id="ca304cd" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-92006c4 e-con-full e-flex e-con e-child" data-id="92006c4" data-element_type="container">
					<div class="elementor-element elementor-element-bd0179c elementor-widget elementor-widget-image" data-id="bd0179c" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img loading="lazy" decoding="async" width="300" height="100" src="wp-content/uploads/sites/20/2024/07/3.png" class="attachment-full size-full wp-image-303" alt="" />
						</div>
					</div>
					<div class="elementor-element elementor-element-eed7b98 elementor-widget elementor-widget-image" data-id="eed7b98" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img loading="lazy" decoding="async" width="300" height="100" src="wp-content/uploads/sites/20/2024/07/2.png" class="attachment-full size-full wp-image-304" alt="" />
						</div>
					</div>
					<div class="elementor-element elementor-element-43fab62 elementor-widget elementor-widget-image" data-id="43fab62" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img loading="lazy" decoding="async" width="300" height="100" src="wp-content/uploads/sites/20/2024/07/5.png" class="attachment-full size-full wp-image-305" alt="" />
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-e03c629 e-con-full e-flex e-con e-child" data-id="e03c629" data-element_type="container">
					<div class="elementor-element elementor-element-1f7af57 elementor-widget elementor-widget-image" data-id="1f7af57" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img loading="lazy" decoding="async" width="300" height="100" src="wp-content/uploads/sites/20/2024/07/4.png" class="attachment-full size-full wp-image-306" alt="" />
						</div>
					</div>
					<div class="elementor-element elementor-element-a6cd6cb elementor-widget elementor-widget-image" data-id="a6cd6cb" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img loading="lazy" decoding="async" width="300" height="100" src="wp-content/uploads/sites/20/2024/07/8.png" class="attachment-full size-full wp-image-307" alt="" />
						</div>
					</div>
					<div class="elementor-element elementor-element-9f08124 elementor-widget elementor-widget-image" data-id="9f08124" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img loading="lazy" decoding="async" width="300" height="100" src="wp-content/uploads/sites/20/2024/07/1.png" class="attachment-full size-full wp-image-308" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-40fc94f e-flex e-con-boxed e-con e-parent" data-id="40fc94f" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-16c93fe e-con-full e-flex e-con e-child" data-id="16c93fe" data-element_type="container">
					<div class="elementor-element elementor-element-0206e6a animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="0206e6a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Choose Quality, Choose Us!</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-f63887c elementor-widget elementor-widget-text-editor" data-id="f63887c" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<p>When you choose us, you're selecting a commitment to excellence. Our top-quality equipment and exceptional service ensure your projects are completed with precision, reliability, and unmatched performance every time.</p>
						</div>
					</div>
					<div class="elementor-element elementor-element-ecac6a3 elementor-tablet-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="ecac6a3" data-element_type="widget" data-widget_type="button.default">
						<div class="elementor-widget-container">
							<div class="elementor-button-wrapper">
								<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="#">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-icon">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
												<path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
											</svg> </span>
										<span class="elementor-button-text">Contact Us Now</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-8605e93 e-con-full e-flex e-con e-child" data-id="8605e93" data-element_type="container">
					<div class="elementor-element elementor-element-0d4d6cc elementor-invisible elementor-widget elementor-widget-image" data-id="0d4d6cc" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img decoding="async" width="650" height="493" src="wp-content/uploads/sites/20/2024/07/YTFMGZ3d.png" class="attachment-full size-full wp-image-155" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/YTFMGZ3d.png 650w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/YTFMGZ3d-300x228.png 300w" sizes="(max-width: 650px) 100vw, 650px" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-9c8c9e3 e-flex e-con-boxed e-con e-parent" data-id="9c8c9e3" data-element_type="container">
			<div class="e-con-inner">
				<div class="elementor-element elementor-element-6156b75 e-con-full e-flex e-con e-child" data-id="6156b75" data-element_type="container">
					<div class="elementor-element elementor-element-74a59f1 elementor-widget elementor-widget-image" data-id="74a59f1" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img loading="lazy" decoding="async" width="1920" height="1280" src="wp-content/uploads/sites/20/2024/07/PXWM2U3.jpg" class="attachment-full size-full wp-image-96" alt="" srcset="https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/PXWM2U3.jpg 1920w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/PXWM2U3-300x200.jpg 300w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/PXWM2U3-1024x683.jpg 1024w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/PXWM2U3-768x512.jpg 768w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/PXWM2U3-1536x1024.jpg 1536w, https://askit.dextheme.net/equip/wp-content/uploads/sites/20/2024/07/PXWM2U3-800x533.jpg 800w" sizes="(max-width: 1920px) 100vw, 1920px" />
						</div>
					</div>
					<div class="elementor-element elementor-element-413140a e-con-full e-flex elementor-invisible e-con e-child" data-id="413140a" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-element elementor-element-e7841fa e-con-full e-flex e-con e-child" data-id="e7841fa" data-element_type="container">
							<div class="elementor-element elementor-element-d2372ce elementor-widget elementor-widget-elementskit-video" data-id="d2372ce" data-element_type="widget" data-widget_type="elementskit-video.default">
								<div class="elementor-widget-container">
									<div class="ekit-wid-con">
										<div class="video-content" data-video-player="[]" data-video-setting="{&quot;videoVolume&quot;:&quot;horizontal&quot;,&quot;startVolume&quot;:0.8,&quot;videoType&quot;:&quot;iframe&quot;,&quot;videoClass&quot;:&quot;mfp-fade&quot;}">

											<a class="ekit_icon_button glow-btn ekit-video-popup ekit-video-popup-btn" href="" aria-label="video-popup">
												<i aria-hidden="true" class="icon icon-play-button"></i> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-0df9de7 e-con-full e-flex e-con e-child" data-id="0df9de7" data-element_type="container">
							<div class="elementor-element elementor-element-54fb174 elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="54fb174" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h5 class="elementor-heading-title elementor-size-default">See Our Machines at Work</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-09f2433 e-con-full e-flex e-con e-child" data-id="09f2433" data-element_type="container">
					<div class="elementor-element elementor-element-2f66057 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="2f66057" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="icon icon-minus"></i> </span>
									<span class="elementor-icon-list-text">Frequently Asked Questions</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="elementor-element elementor-element-fd3dcdb elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-heading" data-id="fd3dcdb" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default" id="FAQs">Quick Answers, Quick Solutions.</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-b8e896d elementor-widget elementor-widget-text-editor" data-id="b8e896d" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<p>We understand the importance of timely information and efficient solutions. Our FAQs provide clear, concise answers to help you make informed decisions quickly, ensuring your projects stay on track with minimal downtime.</p>
						</div>
					</div>
					<div class="elementor-element elementor-element-f32d6d6 elementor-widget elementor-widget-elementskit-accordion" data-id="f32d6d6" data-element_type="widget" data-widget_type="elementskit-accordion.default">
						<div class="elementor-widget-container">
							<div class="ekit-wid-con">
								<div class="elementskit-accordion accoedion-primary" id="accordion-675aa4c7660ca">


									<div class="elementskit-card active">
										<div class="elementskit-card-header" id="primaryHeading-0-f32d6d6">
											<a href="#collapse-48380d6675aa4c7660ca" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-48380d6675aa4c7660ca" aria-expanded="true" aria-controls="Collapse-48380d6675aa4c7660ca">

												<span class="ekit-accordion-title">What types of heavy equipment do you offer for rent?</span>


												<div class="ekit_accordion_icon_group">
													<div class="ekit_accordion_normal_icon">
														<!-- Normal Icon -->
														<i aria-hidden="true" class="icon-open icon-right icon icon-plus"></i>
													</div>

													<div class="ekit_accordion_active_icon">
														<!-- Active Icon -->
														<i aria-hidden="true" class="icon-closed icon-right icon icon-minus"></i>
													</div>

												</div>


											</a>
										</div>

										<div id="Collapse-48380d6675aa4c7660ca" class=" show collapse" aria-labelledby="primaryHeading-0-f32d6d6" data-parent="#accordion-675aa4c7660ca">

											<div class="elementskit-card-body ekit-accordion--content">
											We offer a wide range of heavy equipment for rent, including caterpillars, bulldozers, mobile cranes, excavators, dumpsters, and more. Our equipment is designed to meet the needs of construction, landscaping, and industrial projects. </div>

										</div>

									</div><!-- .elementskit-card END -->


									<div class="elementskit-card ">
										<div class="elementskit-card-header" id="primaryHeading-1-f32d6d6">
											<a href="#collapse-270b9cd675aa4c7660ca" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-270b9cd675aa4c7660ca" aria-expanded="false" aria-controls="Collapse-270b9cd675aa4c7660ca">

												<span class="ekit-accordion-title">How do I reserve equipment for rental?</span>


												<div class="ekit_accordion_icon_group">
													<div class="ekit_accordion_normal_icon">
														<!-- Normal Icon -->
														<i aria-hidden="true" class="icon-open icon-right icon icon-plus"></i>
													</div>

													<div class="ekit_accordion_active_icon">
														<!-- Active Icon -->
														<i aria-hidden="true" class="icon-closed icon-right icon icon-minus"></i>
													</div>

												</div>


											</a>
										</div>

										<div id="Collapse-270b9cd675aa4c7660ca" class=" collapse" aria-labelledby="primaryHeading-1-f32d6d6" data-parent="#accordion-675aa4c7660ca">

											<div class="elementskit-card-body ekit-accordion--content">
											You can easily reserve equipment through our website or by contacting our customer service team. Simply let us know the type of equipment you need, the duration of the rental, and we will handle the rest. </div>

										</div>

									</div><!-- .elementskit-card END -->


									<div class="elementskit-card ">
										<div class="elementskit-card-header" id="primaryHeading-2-f32d6d6">
											<a href="#collapse-b3fcbfb675aa4c7660ca" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-b3fcbfb675aa4c7660ca" aria-expanded="false" aria-controls="Collapse-b3fcbfb675aa4c7660ca">

												<span class="ekit-accordion-title">Are your rental prices competitive?</span>


												<div class="ekit_accordion_icon_group">
													<div class="ekit_accordion_normal_icon">
														<!-- Normal Icon -->
														<i aria-hidden="true" class="icon-open icon-right icon icon-plus"></i>
													</div>

													<div class="ekit_accordion_active_icon">
														<!-- Active Icon -->
														<i aria-hidden="true" class="icon-closed icon-right icon icon-minus"></i>
													</div>

												</div>


											</a>
										</div>

										<div id="Collapse-b3fcbfb675aa4c7660ca" class=" collapse" aria-labelledby="primaryHeading-2-f32d6d6" data-parent="#accordion-675aa4c7660ca">

											<div class="elementskit-card-body ekit-accordion--content">
											Yes, we pride ourselves on offering competitive pricing for all our rental equipment. We ensure our rates are fair and reflect the quality and reliability of the equipment we provide. </div>

										</div>

									</div><!-- .elementskit-card END -->


									<div class="elementskit-card ">
										<div class="elementskit-card-header" id="primaryHeading-3-f32d6d6">
											<a href="#collapse-191097b675aa4c7660ca" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-191097b675aa4c7660ca" aria-expanded="false" aria-controls="Collapse-191097b675aa4c7660ca">

												<span class="ekit-accordion-title">What maintenance or support is provided with the rental equipment?</span>


												<div class="ekit_accordion_icon_group">
													<div class="ekit_accordion_normal_icon">
														<!-- Normal Icon -->
														<i aria-hidden="true" class="icon-open icon-right icon icon-plus"></i>
													</div>

													<div class="ekit_accordion_active_icon">
														<!-- Active Icon -->
														<i aria-hidden="true" class="icon-closed icon-right icon icon-minus"></i>
													</div>

												</div>


											</a>
										</div>

										<div id="Collapse-191097b675aa4c7660ca" class=" collapse" aria-labelledby="primaryHeading-3-f32d6d6" data-parent="#accordion-675aa4c7660ca">

											<div class="elementskit-card-body ekit-accordion--content">
											All our rental equipment is thoroughly inspected and maintained to ensure optimal performance. In the rare case that an issue arises, we offer 24/7 customer support and can arrange for repairs or replacements as needed.</div>

										</div>

									</div><!-- .elementskit-card END -->

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-2ce0e93 e-flex e-con-boxed e-con e-parent" data-id="2ce0e93" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="e-con-inner">
        <div class="elementor-element elementor-element-e25237c elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="e25237c" data-element_type="widget" data-widget_type="icon-list.default">
            <div class="elementor-widget-container">
                <ul class="elementor-icon-list-items">
                    <li class="elementor-icon-list-item">
                        <span class="elementor-icon-list-icon">
                            <i aria-hidden="true" class="icon icon-minus"></i> </span>
                        <span class="elementor-icon-list-text">Industry News & Updates</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="elementor-element elementor-element-de493e2 elementor-invisible elementor-widget elementor-widget-heading" data-id="de493e2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">Unlock Industry Knowledge</h2>
            </div>
        </div>
        <div class="elementor-element elementor-element-385dde0 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="385dde0" data-element_type="widget" data-widget_type="text-editor.default">
            <div class="elementor-widget-container">
                <p>Stay updated with the latest industry trends, insights, and news. Our team continuously monitors the market to bring you valuable information to make informed decisions on your equipment rentals and project planning.</p>
            </div>
        </div>
        <div class="elementor-element elementor-element-05ea6dc elementor-widget-mobile__width-initial elementor-widget elementor-widget-elementskit-blog-posts" data-id="05ea6dc" data-element_type="widget" data-widget_type="elementskit-blog-posts.default">
            <div class="elementor-widget-container">
                <div class="ekit-wid-con">
                    <div id="post-items--05ea6dc" class="row post-items">
                        <div class="col-lg-4 col-md-6">

                            <div class="elementskit-post-image-card">
                                <div class="elementskit-entry-header">
                                    <a href="2024/08/05/the-benefits-of-renting-heavy-equipment-today/index.html" class="elementskit-entry-thumb">
                                        <img decoding="async" src="wp-content/uploads/sites/20/2024/07/9YBGKERa.jpg" alt="The Benefits of Renting Heavy Equipment Today">
                                    </a><!-- .elementskit-entry-thumb END -->
                                </div><!-- .elementskit-entry-header END -->

                                <div class="elementskit-post-body ">

                                    <div class="post-meta-list">
                                        <span class="meta-date">
                                            <i aria-hidden="true" class="icon icon-calendar3"></i>
                                            <span class="meta-date-text">
                                                August 5, 2024 </span>
                                        </span>
                                        <span class="post-comment">
                                            <i aria-hidden="true" class="icon icon-comment"></i>
                                            <a href="2024/08/05/the-benefits-of-renting-heavy-equipment-today/index.html#respond">0</a>
                                        </span>
                                    </div>

                                    <h2 class="entry-title">
                                        <a href="2024/08/05/the-benefits-of-renting-heavy-equipment-today/index.html">
                                            The Benefits of Renting Heavy Equipment Today </a>
                                    </h2>
                                    <p>Discover why renting heavy equipment is an increasingly popular option for businesses, offering flexibility, cost savings, and access to top-tier machinery without the long-term commitment.</p>
                                    <div class="btn-wraper">
                                        <a class="elementskit-btn whitespace--normal" id="" href="2024/08/05/the-benefits-of-renting-heavy-equipment-today/index.html">
                                            Learn More <i aria-hidden="true" class="icon icon-right-arrow"></i> </a>
                                    </div>
                                </div><!-- .elementskit-post-body END -->
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6">

                            <div class="elementskit-post-image-card">
                                <div class="elementskit-entry-header">
                                    <a href="2024/08/05/best-practices-for-maintaining-heavy-rental-equipment/index.html" class="elementskit-entry-thumb">
                                        <img decoding="async" src="wp-content/uploads/sites/20/2024/08/6MR2LDV.jpg" alt="Best Practices for Maintaining Heavy Rental Equipment">
                                    </a><!-- .elementskit-entry-thumb END -->
                                </div><!-- .elementskit-entry-header END -->

                                <div class="elementskit-post-body ">

                                    <div class="post-meta-list">
                                        <span class="meta-date">
                                            <i aria-hidden="true" class="icon icon-calendar3"></i>
                                            <span class="meta-date-text">
                                                August 5, 2024 </span>
                                        </span>
                                        <span class="post-comment">
                                            <i aria-hidden="true" class="icon icon-comment"></i>
                                            <a href="2024/08/05/best-practices-for-maintaining-heavy-rental-equipment/index.html#respond">0</a>
                                        </span>
                                    </div>

                                    <h2 class="entry-title">
                                        <a href="2024/08/05/best-practices-for-maintaining-heavy-rental-equipment/index.html">
                                            Best Practices for Maintaining Heavy Rental Equipment </a>
                                    </h2>
                                    <p>Proper maintenance is key to extending the lifespan of rental equipment. Learn about the best practices for keeping your machinery in top condition for every job.</p>
                                    <div class="btn-wraper">
                                        <a class="elementskit-btn whitespace--normal" id="" href="2024/08/05/best-practices-for-maintaining-heavy-rental-equipment/index.html">
                                            Learn More <i aria-hidden="true" class="icon icon-right-arrow"></i> </a>
                                    </div>
                                </div><!-- .elementskit-post-body END -->
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6">

                            <div class="elementskit-post-image-card">
                                <div class="elementskit-entry-header">
                                    <a href="2024/08/05/safety-tips-for-operating-heavy-machinery-safely/index.html" class="elementskit-entry-thumb">
                                        <img decoding="async" src="wp-content/uploads/sites/20/2024/07/LYF2KKW.jpg" alt="Safety Tips for Operating Heavy Machinery Safely">
                                    </a><!-- .elementskit-entry-thumb END -->
                                </div><!-- .elementskit-entry-header END -->

                                <div class="elementskit-post-body ">

                                    <div class="post-meta-list">
                                        <span class="meta-date">
                                            <i aria-hidden="true" class="icon icon-calendar3"></i>
                                            <span class="meta-date-text">
                                                August 5, 2024 </span>
                                        </span>
                                        <span class="post-comment">
                                            <i aria-hidden="true" class="icon icon-comment"></i>
                                            <a href="2024/08/05/safety-tips-for-operating-heavy-machinery-safely/index.html#respond">0</a>
                                        </span>
                                    </div>

                                    <h2 class="entry-title">
                                        <a href="2024/08/05/safety-tips-for-operating-heavy-machinery-safely/index.html">
                                            Safety Tips for Operating Heavy Machinery Safely </a>
                                    </h2>
                                    <p>Safety is paramount in operating heavy machinery. Explore our top tips for ensuring safe handling of equipment to protect operators and improve job site safety.</p>
                                    <div class="btn-wraper">
                                        <a class="elementskit-btn whitespace--normal" id="" href="2024/08/05/safety-tips-for-operating-heavy-machinery-safely/index.html">
                                            Learn More <i aria-hidden="true" class="icon icon-right-arrow"></i> </a>
                                    </div>
                                </div><!-- .elementskit-post-body END -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

	</div>
			<!-- footer  -->

			<?php  include('./components/footer.php');  ?>
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
	<script src="wp-content/plugins/metform/public/assets/lib/cute-alert/cute-alerta560.js?ver=3.9.1" id="cute-alert-js"></script>
	<script src="wp-content/themes/hello-elementor/assets/js/hello-frontend.minb12b.js?ver=3.1.1" id="hello-theme-frontend-js"></script>
	<script src="wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script6765.js?ver=3.3.3" id="elementskit-framework-js-frontend-js"></script>
	<script id="elementskit-framework-js-frontend-js-after">
		var elementskit = {
			resturl: 'https://askit.dextheme.net/equip/wp-json/elementskit/v1/',
		}
	</script>
	<script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts6765.js?ver=3.3.3" id="ekit-widget-scripts-js"></script>
	<script id="mediaelement-core-js-before">
		var mejsL10n = {
			"language": "en",
			"strings": {
				"mejs.download-file": "Download File",
				"mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
				"mejs.fullscreen": "Fullscreen",
				"mejs.play": "Play",
				"mejs.pause": "Pause",
				"mejs.time-slider": "Time Slider",
				"mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
				"mejs.live-broadcast": "Live Broadcast",
				"mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
				"mejs.unmute": "Unmute",
				"mejs.mute": "Mute",
				"mejs.volume-slider": "Volume Slider",
				"mejs.video-player": "Video Player",
				"mejs.audio-player": "Audio Player",
				"mejs.captions-subtitles": "Captions\/Subtitles",
				"mejs.captions-chapters": "Chapters",
				"mejs.none": "None",
				"mejs.afrikaans": "Afrikaans",
				"mejs.albanian": "Albanian",
				"mejs.arabic": "Arabic",
				"mejs.belarusian": "Belarusian",
				"mejs.bulgarian": "Bulgarian",
				"mejs.catalan": "Catalan",
				"mejs.chinese": "Chinese",
				"mejs.chinese-simplified": "Chinese (Simplified)",
				"mejs.chinese-traditional": "Chinese (Traditional)",
				"mejs.croatian": "Croatian",
				"mejs.czech": "Czech",
				"mejs.danish": "Danish",
				"mejs.dutch": "Dutch",
				"mejs.english": "English",
				"mejs.estonian": "Estonian",
				"mejs.filipino": "Filipino",
				"mejs.finnish": "Finnish",
				"mejs.french": "French",
				"mejs.galician": "Galician",
				"mejs.german": "German",
				"mejs.greek": "Greek",
				"mejs.haitian-creole": "Haitian Creole",
				"mejs.hebrew": "Hebrew",
				"mejs.hindi": "Hindi",
				"mejs.hungarian": "Hungarian",
				"mejs.icelandic": "Icelandic",
				"mejs.indonesian": "Indonesian",
				"mejs.irish": "Irish",
				"mejs.italian": "Italian",
				"mejs.japanese": "Japanese",
				"mejs.korean": "Korean",
				"mejs.latvian": "Latvian",
				"mejs.lithuanian": "Lithuanian",
				"mejs.macedonian": "Macedonian",
				"mejs.malay": "Malay",
				"mejs.maltese": "Maltese",
				"mejs.norwegian": "Norwegian",
				"mejs.persian": "Persian",
				"mejs.polish": "Polish",
				"mejs.portuguese": "Portuguese",
				"mejs.romanian": "Romanian",
				"mejs.russian": "Russian",
				"mejs.serbian": "Serbian",
				"mejs.slovak": "Slovak",
				"mejs.slovenian": "Slovenian",
				"mejs.spanish": "Spanish",
				"mejs.swahili": "Swahili",
				"mejs.swedish": "Swedish",
				"mejs.tagalog": "Tagalog",
				"mejs.thai": "Thai",
				"mejs.turkish": "Turkish",
				"mejs.ukrainian": "Ukrainian",
				"mejs.vietnamese": "Vietnamese",
				"mejs.welsh": "Welsh",
				"mejs.yiddish": "Yiddish"
			}
		};
	</script>
	<script src="wp-includes/js/mediaelement/mediaelement-and-player.min1f61.js?ver=4.2.17" id="mediaelement-core-js"></script>
	<script src="wp-includes/js/mediaelement/mediaelement-migrate.min9704.js?ver=6.7.1" id="mediaelement-migrate-js"></script>
	<script id="mediaelement-js-extra">
		var _wpmejsSettings = {
			"pluginPath": "\/equip\/wp-includes\/js\/mediaelement\/",
			"classPrefix": "mejs-",
			"stretching": "responsive",
			"audioShortcodeLibrary": "mediaelement",
			"videoShortcodeLibrary": "mediaelement"
		};
	</script>
	<script src="wp-includes/js/mediaelement/wp-mediaelement.min9704.js?ver=6.7.1" id="wp-mediaelement-js"></script>
	<script src="wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min3958.js?ver=0.2.1" id="jquery-numerator-js"></script>
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
				"id": 996,
				"title": "Equip",
				"excerpt": "",
				"featuredImage": false
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
	     <script src="script.js"></script>
          <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        } 
  </script>
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

<!-- Mirrored from askit.dextheme.net/equip/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2024 10:16:46 GMT -->

</html>