<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--metatextblock-->
	<title>Umfit</title>
	<meta property="og:url" content="https://umfit.org" />
	<meta property="og:title" content="Umfit" />
	<meta property="og:description" content="" />
	<meta property="og:type" content="website" />
	<meta
	property="og:image"
	content="/home/images/tild3238-3432-4734-a432-393632643936__frame_70.png"
	/>
	<link rel="canonical" href="https://umfit.org" />
	<!--/metatextblock-->
	<meta name="format-detection" content="telephone=no" />
	<meta http-equiv="x-dns-prefetch-control" content="on" />
	<link rel="dns-prefetch" href="https://ws.tildacdn.com" />
	
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
<!-- Assets -->

    <script src="https://neo.tildacdn.com/js/tilda-fallback-1.0.min.js" async charset="utf-8"></script>
    <link rel="stylesheet" href="/home/css/tilda-grid-3.0.min.css" type="text/css" media="all"
        onerror="this.loaderr='y';" />
    <link rel="stylesheet"
        href="https://static.tildacdn.com/ws/project9554701/tilda-blocks-page48859225.min.css?t=1715958648"
        type="text/css" media="all" onerror="this.loaderr='y';" />
    <link rel="stylesheet" href="/home/css/tilda-animation-2.0.min.css" type="text/css" media="all"
        onerror="this.loaderr='y';" />
    <link rel="stylesheet" href="/home/css/fonts-tildasans.css" type="text/css" media="all" onerror="this.loaderr='y';" />

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-4NK35XS5EE"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-4NK35XS5EE');
	</script>

    <script nomodule src="/home/js/tilda-polyfill-1.0.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        function t_onReady(func) {
            if (document.readyState != 'loading') {
                func();
            } else {
                document.addEventListener('DOMContentLoaded', func);
            }
        }

        function t_onFuncLoad(funcName, okFunc, time) {
            if (typeof window[funcName] === 'function') {
                okFunc();
            } else {
                setTimeout(function() {
                    t_onFuncLoad(funcName, okFunc, time);
                }, (time || 100));
            }
        }

        function t_throttle(fn, threshhold, scope) {
            return function() {
                fn.apply(scope || this, arguments);
            };
        }

        function t396_initialScale(t) {
            t = document.getElementById("rec" + t);
            if (t) {
                t = t.querySelector(".t396__artboard");
                if (t) {
                    var e, r = document.documentElement.clientWidth,
                        a = [];
                    if (l = t.getAttribute("data-artboard-screens"))
                        for (var l = l.split(","), i = 0; i < l.length; i++) a[i] = parseInt(l[i], 10);
                    else a = [320, 480, 640, 960, 1200];
                    for (i = 0; i < a.length; i++) {
                        var o = a[i];
                        o <= r && (e = o)
                    }
                    var n = "edit" === window.allrecords.getAttribute("data-tilda-mode"),
                        d = "center" === t396_getFieldValue(t, "valign", e, a),
                        u = "grid" === t396_getFieldValue(t, "upscale", e, a),
                        c = t396_getFieldValue(t, "height_vh", e, a),
                        g = t396_getFieldValue(t, "height", e, a),
                        s = !!window.opr && !!window.opr.addons || !!window.opera || -1 !== navigator.userAgent.indexOf(
                            " OPR/");
                    if (!n && d && !u && !c && g && !s) {
                        for (var _ = parseFloat((r / e).toFixed(3)), f = [t, t.querySelector(".t396__carrier"), t
                                .querySelector(".t396__filter")
                            ], i = 0; i < f.length; i++) f[i].style.height = Math.floor(parseInt(g, 10) * _) + "px";
                        t396_scaleInitial__getElementsToScale(t).forEach(function(t) {
                            t.style.zoom = _
                        })
                    }
                }
            }
        }

        function t396_scaleInitial__getElementsToScale(t) {
            t = Array.prototype.slice.call(t.querySelectorAll(".t396__elem"));
            if (!t.length) return [];
            var e = [];
            return (t = t.filter(function(t) {
                t = t.closest('.t396__group[data-group-type-value="physical"]');
                return !t || (-1 === e.indexOf(t) && e.push(t), !1)
            })).concat(e)
        }

        function t396_getFieldValue(t, e, r, a) {
            var l = a[a.length - 1],
                i = r === l ? t.getAttribute("data-artboard-" + e) : t.getAttribute("data-artboard-" + e + "-res-" + r);
            if (!i)
                for (var o = 0; o < a.length; o++) {
                    var n = a[o];
                    if (!(n <= r) && (i = n === l ? t.getAttribute("data-artboard-" + e) : t.getAttribute("data-artboard-" +
                            e + "-res-" + n))) break
                }
            return i
        }
    </script>
    <script src="/home/js/tilda-scripts-3.0.min.js" charset="utf-8" defer onerror="this.loaderr='y';"></script>
    <script src="https://static.tildacdn.com/ws/project9554701/tilda-blocks-page48859225.min.js?t=1715958648"
        charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="/home/js/lazyload-1.3.min.export.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="/home/js/tilda-animation-2.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="/home/js/tilda-menu-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="/home/js/tilda-zero-1.1.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="/home/js/tilda-animation-ext-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="/home/js/tilda-zero-scale-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="/home/js/tilda-skiplink-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="/home/js/tilda-events-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
    </script>
    <script type="text/javascript">
        (function() {
            if ((/bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i
                    .test(navigator.userAgent)) === false && typeof(sessionStorage) != 'undefined' && sessionStorage
                .getItem('visited') !== 'y' && document.visibilityState) {
                var style = document.createElement('style');
                style.type = 'text/css';
                style.innerHTML =
                    '@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;-o-transition: opacity ease-in-out .2s;transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}';
                document.getElementsByTagName('head')[0].appendChild(style);

                function t_setvisRecs() {
                    var alr = document.querySelectorAll('.t-records');
                    Array.prototype.forEach.call(alr, function(el) {
                        el.classList.add("t-records_animated");
                    });
                    setTimeout(function() {
                        Array.prototype.forEach.call(alr, function(el) {
                            el.classList.add("t-records_visible");
                        });
                        sessionStorage.setItem("visited", "y");
                    }, 400);
                }
                document.addEventListener('DOMContentLoaded', t_setvisRecs);
            }
        })();
    </script>

	@vite(['resources/js/telegram-lib.js'])
	<script defer>
		document.addEventListener('DOMContentLoaded', () => {
			try {
				const { initDataRaw } = retrieveLaunchParams();
                sessionStorage.setItem("telegramInitData", initDataRaw);
                postEvent("web_app_expand");
                // postEvent("web_app_setup_closing_behavior", {
                //     need_confirmation: true,
                // });
			} catch (error) {
				console.log(error);
			}
		})
	</script>
</head>

<body class="t-body" style="margin:0;"><!--allrecords-->
    <div id="allrecords" data-tilda-export="yes" class="t-records" data-hook="blocks-collection-content-node"
        data-tilda-project-id="9554701" data-tilda-page-id="48859225"
        data-tilda-formskey="919227098f03d4fe0a6f8ef5a9554701" data-tilda-cookie="no" data-tilda-lazy="yes"
        data-tilda-root-zone="com">
        <div id="rec748332520" class="r t-rec t-screenmin-980px" style=" " data-animationappear="off"
            data-record-type="456" data-screen-min="980px"><!-- T456 -->
            <div id="nav748332520marker"></div>
            <div class="tmenu-mobile">
                <div class="tmenu-mobile__container">
                    <div class="tmenu-mobile__burgerlogo"><a href="/"><img
                                src="/home/images/tild6435-3738-4130-b836-643833363333__group_70.png"
                                class="tmenu-mobile__imglogo" imgfield="img" style="max-width: 90px; width: 90px;"
                                alt="UMFit"></a></div><button type="button" class="t-menuburger t-menuburger_first"
                        aria-label="Навигационное меню" aria-expanded="false"><span
                            style="background-color:#daf73a;"></span><span
                            style="background-color:#daf73a;"></span><span
                            style="background-color:#daf73a;"></span><span
                            style="background-color:#daf73a;"></span></button>
                    <script>
                        function t_menuburger_init(recid) {
                            var rec = document.querySelector('#rec' + recid);
                            if (!rec) return;
                            var burger = rec.querySelector('.t-menuburger');
                            if (!burger) return;
                            var isSecondStyle = burger.classList.contains('t-menuburger_second');
                            if (isSecondStyle && !window.isMobile && !('ontouchend' in document)) {
                                burger.addEventListener('mouseenter', function() {
                                    if (burger.classList.contains('t-menuburger-opened')) return;
                                    burger.classList.remove('t-menuburger-unhovered');
                                    burger.classList.add('t-menuburger-hovered');
                                });
                                burger.addEventListener('mouseleave', function() {
                                    if (burger.classList.contains('t-menuburger-opened')) return;
                                    burger.classList.remove('t-menuburger-hovered');
                                    burger.classList.add('t-menuburger-unhovered');
                                    setTimeout(function() {
                                        burger.classList.remove('t-menuburger-unhovered');
                                    }, 300);
                                });
                            }
                            burger.addEventListener('click', function() {
                                if (!burger.closest('.tmenu-mobile') &&
                                    !burger.closest('.t450__burger_container') &&
                                    !burger.closest('.t466__container') &&
                                    !burger.closest('.t204__burger') &&
                                    !burger.closest('.t199__js__menu-toggler')) {
                                    burger.classList.toggle('t-menuburger-opened');
                                    burger.classList.remove('t-menuburger-unhovered');
                                }
                            });
                            var menu = rec.querySelector('[data-menu="yes"]');
                            if (!menu) return;
                            var menuLinks = menu.querySelectorAll('.t-menu__link-item');
                            var submenuClassList = ['t978__menu-link_hook', 't978__tm-link', 't966__tm-link', 't794__tm-link',
                                't-menusub__target-link'
                            ];
                            Array.prototype.forEach.call(menuLinks, function(link) {
                                link.addEventListener('click', function() {
                                    var isSubmenuHook = submenuClassList.some(function(submenuClass) {
                                        return link.classList.contains(submenuClass);
                                    });
                                    if (isSubmenuHook) return;
                                    burger.classList.remove('t-menuburger-opened');
                                });
                            });
                            menu.addEventListener('clickedAnchorInTooltipMenu', function() {
                                burger.classList.remove('t-menuburger-opened');
                            });
                        }
                        t_onReady(function() {
                            t_onFuncLoad('t_menuburger_init', function() {
                                t_menuburger_init('748332520');
                            });
                        });
                    </script>
                    <style>
                        .t-menuburger {
                            position: relative;
                            flex-shrink: 0;
                            width: 28px;
                            height: 20px;
                            padding: 0;
                            border: none;
                            background-color: transparent;
                            outline: none;
                            -webkit-transform: rotate(0deg);
                            transform: rotate(0deg);
                            transition: transform .5s ease-in-out;
                            cursor: pointer;
                            z-index: 999;
                        }

                        /*---menu burger lines---*/
                        .t-menuburger span {
                            display: block;
                            position: absolute;
                            width: 100%;
                            opacity: 1;
                            left: 0;
                            -webkit-transform: rotate(0deg);
                            transform: rotate(0deg);
                            transition: .25s ease-in-out;
                            height: 3px;
                            background-color: #000;
                        }

                        .t-menuburger span:nth-child(1) {
                            top: 0px;
                        }

                        .t-menuburger span:nth-child(2),
                        .t-menuburger span:nth-child(3) {
                            top: 8px;
                        }

                        .t-menuburger span:nth-child(4) {
                            top: 16px;
                        }

                        /*menu burger big*/
                        .t-menuburger__big {
                            width: 42px;
                            height: 32px;
                        }

                        .t-menuburger__big span {
                            height: 5px;
                        }

                        .t-menuburger__big span:nth-child(2),
                        .t-menuburger__big span:nth-child(3) {
                            top: 13px;
                        }

                        .t-menuburger__big span:nth-child(4) {
                            top: 26px;
                        }

                        /*menu burger small*/
                        .t-menuburger__small {
                            width: 22px;
                            height: 14px;
                        }

                        .t-menuburger__small span {
                            height: 2px;
                        }

                        .t-menuburger__small span:nth-child(2),
                        .t-menuburger__small span:nth-child(3) {
                            top: 6px;
                        }

                        .t-menuburger__small span:nth-child(4) {
                            top: 12px;
                        }

                        /*menu burger opened*/
                        .t-menuburger-opened span:nth-child(1) {
                            top: 8px;
                            width: 0%;
                            left: 50%;
                        }

                        .t-menuburger-opened span:nth-child(2) {
                            -webkit-transform: rotate(45deg);
                            transform: rotate(45deg);
                        }

                        .t-menuburger-opened span:nth-child(3) {
                            -webkit-transform: rotate(-45deg);
                            transform: rotate(-45deg);
                        }

                        .t-menuburger-opened span:nth-child(4) {
                            top: 8px;
                            width: 0%;
                            left: 50%;
                        }

                        .t-menuburger-opened.t-menuburger__big span:nth-child(1) {
                            top: 6px;
                        }

                        .t-menuburger-opened.t-menuburger__big span:nth-child(4) {
                            top: 18px;
                        }

                        .t-menuburger-opened.t-menuburger__small span:nth-child(1),
                        .t-menuburger-opened.t-menuburger__small span:nth-child(4) {
                            top: 6px;
                        }

                        /*---menu burger first style---*/
                        @media (hover),
                        (min-width:0\0) {
                            .t-menuburger_first:hover span:nth-child(1) {
                                transform: translateY(1px);
                            }

                            .t-menuburger_first:hover span:nth-child(4) {
                                transform: translateY(-1px);
                            }

                            .t-menuburger_first.t-menuburger__big:hover span:nth-child(1) {
                                transform: translateY(3px);
                            }

                            .t-menuburger_first.t-menuburger__big:hover span:nth-child(4) {
                                transform: translateY(-3px);
                            }
                        }

                        /*---menu burger second style---*/
                        .t-menuburger_second span:nth-child(2),
                        .t-menuburger_second span:nth-child(3) {
                            width: 80%;
                            left: 20%;
                            right: 0;
                        }

                        @media (hover),
                        (min-width:0\0) {

                            .t-menuburger_second.t-menuburger-hovered span:nth-child(2),
                            .t-menuburger_second.t-menuburger-hovered span:nth-child(3) {
                                animation: t-menuburger-anim 0.3s ease-out normal forwards;
                            }

                            .t-menuburger_second.t-menuburger-unhovered span:nth-child(2),
                            .t-menuburger_second.t-menuburger-unhovered span:nth-child(3) {
                                animation: t-menuburger-anim2 0.3s ease-out normal forwards;
                            }
                        }

                        .t-menuburger_second.t-menuburger-opened span:nth-child(2),
                        .t-menuburger_second.t-menuburger-opened span:nth-child(3) {
                            left: 0;
                            right: 0;
                            width: 100% !important;
                        }

                        /*---menu burger third style---*/
                        .t-menuburger_third span:nth-child(4) {
                            width: 70%;
                            left: unset;
                            right: 0;
                        }

                        @media (hover),
                        (min-width:0\0) {
                            .t-menuburger_third:not(.t-menuburger-opened):hover span:nth-child(4) {
                                width: 100%;
                            }
                        }

                        .t-menuburger_third.t-menuburger-opened span:nth-child(4) {
                            width: 0 !important;
                            right: 50%;
                        }

                        /*---menu burger fourth style---*/
                        .t-menuburger_fourth {
                            height: 12px;
                        }

                        .t-menuburger_fourth.t-menuburger__small {
                            height: 8px;
                        }

                        .t-menuburger_fourth.t-menuburger__big {
                            height: 18px;
                        }

                        .t-menuburger_fourth span:nth-child(2),
                        .t-menuburger_fourth span:nth-child(3) {
                            top: 4px;
                            opacity: 0;
                        }

                        .t-menuburger_fourth span:nth-child(4) {
                            top: 8px;
                        }

                        .t-menuburger_fourth.t-menuburger__small span:nth-child(2),
                        .t-menuburger_fourth.t-menuburger__small span:nth-child(3) {
                            top: 3px;
                        }

                        .t-menuburger_fourth.t-menuburger__small span:nth-child(4) {
                            top: 6px;
                        }

                        .t-menuburger_fourth.t-menuburger__small span:nth-child(2),
                        .t-menuburger_fourth.t-menuburger__small span:nth-child(3) {
                            top: 3px;
                        }

                        .t-menuburger_fourth.t-menuburger__small span:nth-child(4) {
                            top: 6px;
                        }

                        .t-menuburger_fourth.t-menuburger__big span:nth-child(2),
                        .t-menuburger_fourth.t-menuburger__big span:nth-child(3) {
                            top: 6px;
                        }

                        .t-menuburger_fourth.t-menuburger__big span:nth-child(4) {
                            top: 12px;
                        }

                        @media (hover),
                        (min-width:0\0) {
                            .t-menuburger_fourth:not(.t-menuburger-opened):hover span:nth-child(1) {
                                transform: translateY(1px);
                            }

                            .t-menuburger_fourth:not(.t-menuburger-opened):hover span:nth-child(4) {
                                transform: translateY(-1px);
                            }

                            .t-menuburger_fourth.t-menuburger__big:not(.t-menuburger-opened):hover span:nth-child(1) {
                                transform: translateY(3px);
                            }

                            .t-menuburger_fourth.t-menuburger__big:not(.t-menuburger-opened):hover span:nth-child(4) {
                                transform: translateY(-3px);
                            }
                        }

                        .t-menuburger_fourth.t-menuburger-opened span:nth-child(1),
                        .t-menuburger_fourth.t-menuburger-opened span:nth-child(4) {
                            top: 4px;
                        }

                        .t-menuburger_fourth.t-menuburger-opened span:nth-child(2),
                        .t-menuburger_fourth.t-menuburger-opened span:nth-child(3) {
                            opacity: 1;
                        }

                        /*---menu burger animations---*/
                        @keyframes t-menuburger-anim {
                            0% {
                                width: 80%;
                                left: 20%;
                                right: 0;
                            }

                            50% {
                                width: 100%;
                                left: 0;
                                right: 0;
                            }

                            100% {
                                width: 80%;
                                left: 0;
                                right: 20%;
                            }
                        }

                        @keyframes t-menuburger-anim2 {
                            0% {
                                width: 80%;
                                left: 0;
                            }

                            50% {
                                width: 100%;
                                right: 0;
                                left: 0;
                            }

                            100% {
                                width: 80%;
                                left: 20%;
                                right: 0;
                            }
                        }
                    </style>
                </div>
            </div>
            <style>
                .tmenu-mobile {
                    background-color: #111;
                    display: none;
                    width: 100%;
                    top: 0;
                    z-index: 990;
                }

                .tmenu-mobile_positionfixed {
                    position: fixed;
                }

                .tmenu-mobile__text {
                    color: #fff;
                }

                .tmenu-mobile__container {
                    min-height: 64px;
                    padding: 20px;
                    position: relative;
                    box-sizing: border-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-align-items: center;
                    -ms-flex-align: center;
                    align-items: center;
                    -webkit-justify-content: space-between;
                    -ms-flex-pack: justify;
                    justify-content: space-between;
                }

                .tmenu-mobile__list {
                    display: block;
                }

                .tmenu-mobile__burgerlogo {
                    display: inline-block;
                    font-size: 24px;
                    font-weight: 400;
                    white-space: nowrap;
                    vertical-align: middle;
                }

                .tmenu-mobile__imglogo {
                    height: auto;
                    display: block;
                    max-width: 300px !important;
                    box-sizing: border-box;
                    padding: 0;
                    margin: 0 auto;
                }

                @media screen and (max-width: 980px) {
                    .tmenu-mobile__menucontent_hidden {
                        display: none;
                        height: 100%;
                    }

                    .tmenu-mobile {
                        display: block;
                    }
                }

                @media screen and (max-width: 980px) {
                    #rec748332520 .tmenu-mobile {
                        background-color: #262626;
                    }

                    #rec748332520 .t-menuburger {
                        -webkit-order: 1;
                        -ms-flex-order: 1;
                        order: 1;
                    }
                }
            </style>
            <style>
                #rec748332520 .tmenu-mobile__burgerlogo a {
                    color: #ffffff;
                }
            </style>
            <style>
                #rec748332520 .tmenu-mobile__burgerlogo__title {
                    color: #ffffff;
                }
            </style>
            <div id="nav748332520" class="t456 t456__positionfixed tmenu-mobile__menucontent_hidden"
                style="background-color: rgba(31,31,31,0.80); " data-bgcolor-hex="#1f1f1f"
                data-bgcolor-rgba="rgba(31,31,31,0.80)" data-navmarker="nav748332520marker" data-appearoffset=""
                data-bgopacity-two="100" data-menushadow="" data-menushadow-css="" data-bgopacity="0.80"
                data-bgcolor-rgba-afterscroll="rgba(31,31,31,1)" data-menu-items-align="right" data-menu="yes">
                <div class="t456__maincontainer t456__c12collumns" style="">
                    <div class="t456__leftwrapper" style="padding-left:20px;min-width:90px;width:90px;">
                        <div class="t456__logowrapper" style="display: block;"><a href="/"><img
                                    class="t456__imglogo t456__imglogomobile"
                                    src="/home/images/tild6435-3738-4130-b836-643833363333__group_70.png" imgfield="img"
                                    style="max-width: 90px; width: 90px;" alt="UMFit"></a></div>
                    </div>
                    <nav class="t456__rightwrapper t456__menualign_right" style="padding-right:20px;">
                        <ul role="list" class="t456__list t-menu__list">
                            <li class="t456__list_item" style="padding:0 25px 0 0;"><a class="t-menu__link-item"
                                    href="#rec747718392" data-menu-submenu-hook=""
                                    data-menu-item-number="1">Функции</a></li>
                            <li class="t456__list_item" style="padding:0 25px;"><a class="t-menu__link-item"
                                    href="#rec747719374" data-menu-submenu-hook=""
                                    data-menu-item-number="2">Экосистема</a></li>
                            <li class="t456__list_item" style="padding:0 0 0 25px;"><a class="t-menu__link-item"
                                    href="{{ route('stub') }}" data-menu-submenu-hook="" data-menu-item-number="3">Войти в ЛК</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <style>
                @media screen and (max-width: 980px) {
                    #rec748332520 .t456__logowrapper {
                        display: none !important;
                    }

                    #rec748332520 .t456__mobile-text {
                        display: none;
                    }

                    #rec748332520 .t456__imglogo {
                        padding: 0;
                    }
                }
            </style>
            <style>
                @media screen and (max-width: 980px) {
                    #rec748332520 .t456__leftcontainer {
                        padding: 20px;
                    }
                }

                @media screen and (max-width: 980px) {
                    #rec748332520 .t456__imglogo {
                        padding: 20px 0;
                    }
                }
            </style>
            <script type="text/javascript">
                t_onReady(function() {
                    t_onFuncLoad('t_menu__highlightActiveLinks', function() {
                        t_menu__highlightActiveLinks('.t456__list_item a');
                    });
                    t_onFuncLoad('t_menu__findAnchorLinks', function() {
                        t_menu__findAnchorLinks('748332520', '.t456__list_item a');
                    });
                });
                t_onReady(function() {
                    t_onFuncLoad('t_menu__setBGcolor', function() {
                        t_menu__setBGcolor('748332520', '.t456');
                        window.addEventListener('resize', function() {
                            t_menu__setBGcolor('748332520', '.t456');
                        });
                    });
                    t_onFuncLoad('t_menu__interactFromKeyboard', function() {
                        t_menu__interactFromKeyboard('748332520');
                    });
                });
                t_onReady(function() {
                    t_onFuncLoad('t_menu__changeBgOpacity', function() {
                        t_menu__changeBgOpacity('748332520', '.t456');
                        window.addEventListener('scroll', t_throttle(function() {
                            t_menu__changeBgOpacity('748332520', '.t456');
                        }));
                    });
                });
            </script>
            <script type="text/javascript">
                t_onReady(function() {
                    t_onFuncLoad('t_menu__createMobileMenu', function() {
                        t_menu__createMobileMenu('748332520', '.t456');
                    });
                });
            </script>
            <style>
                #rec748332520 .t-menu__link-item {}

                @supports (overflow:-webkit-marquee) and (justify-content:inherit) {

                    #rec748332520 .t-menu__link-item,
                    #rec748332520 .t-menu__link-item.t-active {
                        opacity: 1 !important;
                    }
                }
            </style>
            <style>
                #rec748332520 .t456__logowrapper a {
                    color: #ffffff;
                }

                #rec748332520 a.t-menu__link-item {
                    font-size: 16px;
                    color: #daf73a;
                    font-weight: 600;
                    font-family: 'TildaSans';
                }
            </style>
            <style>
                #rec748332520 .t456__logo {
                    color: #ffffff;
                }
            </style><!--[if IE 8]><style>#rec748332520 .t456 {
filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D91f1f1f', endColorstr='#D91f1f1f');
}</style><![endif]-->
        </div>
        <div id="rec748335847" class="r t-rec t-screenmax-480px" style=" " data-animationappear="off"
            data-record-type="456" data-screen-max="480px"><!-- T456 -->
            <div id="nav748335847marker"></div>
            <div class="tmenu-mobile tmenu-mobile_positionfixed">
                <div class="tmenu-mobile__container">
                    <div class="tmenu-mobile__burgerlogo"><a href="/"><img
                                src="/home/images/tild6435-3738-4130-b836-643833363333__group_70.png"
                                class="tmenu-mobile__imglogo" imgfield="img" style="max-width: 90px; width: 90px;"
                                alt="UMFit"></a></div><button type="button"
                        class="t-menuburger t-menuburger_first" aria-label="Навигационное меню"
                        aria-expanded="false"><span style="background-color:#daf73a;"></span><span
                            style="background-color:#daf73a;"></span><span
                            style="background-color:#daf73a;"></span><span
                            style="background-color:#daf73a;"></span></button>
                    <script>
                        function t_menuburger_init(recid) {
                            var rec = document.querySelector('#rec' + recid);
                            if (!rec) return;
                            var burger = rec.querySelector('.t-menuburger');
                            if (!burger) return;
                            var isSecondStyle = burger.classList.contains('t-menuburger_second');
                            if (isSecondStyle && !window.isMobile && !('ontouchend' in document)) {
                                burger.addEventListener('mouseenter', function() {
                                    if (burger.classList.contains('t-menuburger-opened')) return;
                                    burger.classList.remove('t-menuburger-unhovered');
                                    burger.classList.add('t-menuburger-hovered');
                                });
                                burger.addEventListener('mouseleave', function() {
                                    if (burger.classList.contains('t-menuburger-opened')) return;
                                    burger.classList.remove('t-menuburger-hovered');
                                    burger.classList.add('t-menuburger-unhovered');
                                    setTimeout(function() {
                                        burger.classList.remove('t-menuburger-unhovered');
                                    }, 300);
                                });
                            }
                            burger.addEventListener('click', function() {
                                if (!burger.closest('.tmenu-mobile') &&
                                    !burger.closest('.t450__burger_container') &&
                                    !burger.closest('.t466__container') &&
                                    !burger.closest('.t204__burger') &&
                                    !burger.closest('.t199__js__menu-toggler')) {
                                    burger.classList.toggle('t-menuburger-opened');
                                    burger.classList.remove('t-menuburger-unhovered');
                                }
                            });
                            var menu = rec.querySelector('[data-menu="yes"]');
                            if (!menu) return;
                            var menuLinks = menu.querySelectorAll('.t-menu__link-item');
                            var submenuClassList = ['t978__menu-link_hook', 't978__tm-link', 't966__tm-link', 't794__tm-link',
                                't-menusub__target-link'
                            ];
                            Array.prototype.forEach.call(menuLinks, function(link) {
                                link.addEventListener('click', function() {
                                    var isSubmenuHook = submenuClassList.some(function(submenuClass) {
                                        return link.classList.contains(submenuClass);
                                    });
                                    if (isSubmenuHook) return;
                                    burger.classList.remove('t-menuburger-opened');
                                });
                            });
                            menu.addEventListener('clickedAnchorInTooltipMenu', function() {
                                burger.classList.remove('t-menuburger-opened');
                            });
                        }
                        t_onReady(function() {
                            t_onFuncLoad('t_menuburger_init', function() {
                                t_menuburger_init('748335847');
                            });
                        });
                    </script>
                    <style>
                        .t-menuburger {
                            position: relative;
                            flex-shrink: 0;
                            width: 28px;
                            height: 20px;
                            padding: 0;
                            border: none;
                            background-color: transparent;
                            outline: none;
                            -webkit-transform: rotate(0deg);
                            transform: rotate(0deg);
                            transition: transform .5s ease-in-out;
                            cursor: pointer;
                            z-index: 999;
                        }

                        /*---menu burger lines---*/
                        .t-menuburger span {
                            display: block;
                            position: absolute;
                            width: 100%;
                            opacity: 1;
                            left: 0;
                            -webkit-transform: rotate(0deg);
                            transform: rotate(0deg);
                            transition: .25s ease-in-out;
                            height: 3px;
                            background-color: #000;
                        }

                        .t-menuburger span:nth-child(1) {
                            top: 0px;
                        }

                        .t-menuburger span:nth-child(2),
                        .t-menuburger span:nth-child(3) {
                            top: 8px;
                        }

                        .t-menuburger span:nth-child(4) {
                            top: 16px;
                        }

                        /*menu burger big*/
                        .t-menuburger__big {
                            width: 42px;
                            height: 32px;
                        }

                        .t-menuburger__big span {
                            height: 5px;
                        }

                        .t-menuburger__big span:nth-child(2),
                        .t-menuburger__big span:nth-child(3) {
                            top: 13px;
                        }

                        .t-menuburger__big span:nth-child(4) {
                            top: 26px;
                        }

                        /*menu burger small*/
                        .t-menuburger__small {
                            width: 22px;
                            height: 14px;
                        }

                        .t-menuburger__small span {
                            height: 2px;
                        }

                        .t-menuburger__small span:nth-child(2),
                        .t-menuburger__small span:nth-child(3) {
                            top: 6px;
                        }

                        .t-menuburger__small span:nth-child(4) {
                            top: 12px;
                        }

                        /*menu burger opened*/
                        .t-menuburger-opened span:nth-child(1) {
                            top: 8px;
                            width: 0%;
                            left: 50%;
                        }

                        .t-menuburger-opened span:nth-child(2) {
                            -webkit-transform: rotate(45deg);
                            transform: rotate(45deg);
                        }

                        .t-menuburger-opened span:nth-child(3) {
                            -webkit-transform: rotate(-45deg);
                            transform: rotate(-45deg);
                        }

                        .t-menuburger-opened span:nth-child(4) {
                            top: 8px;
                            width: 0%;
                            left: 50%;
                        }

                        .t-menuburger-opened.t-menuburger__big span:nth-child(1) {
                            top: 6px;
                        }

                        .t-menuburger-opened.t-menuburger__big span:nth-child(4) {
                            top: 18px;
                        }

                        .t-menuburger-opened.t-menuburger__small span:nth-child(1),
                        .t-menuburger-opened.t-menuburger__small span:nth-child(4) {
                            top: 6px;
                        }

                        /*---menu burger first style---*/
                        @media (hover),
                        (min-width:0\0) {
                            .t-menuburger_first:hover span:nth-child(1) {
                                transform: translateY(1px);
                            }

                            .t-menuburger_first:hover span:nth-child(4) {
                                transform: translateY(-1px);
                            }

                            .t-menuburger_first.t-menuburger__big:hover span:nth-child(1) {
                                transform: translateY(3px);
                            }

                            .t-menuburger_first.t-menuburger__big:hover span:nth-child(4) {
                                transform: translateY(-3px);
                            }
                        }

                        /*---menu burger second style---*/
                        .t-menuburger_second span:nth-child(2),
                        .t-menuburger_second span:nth-child(3) {
                            width: 80%;
                            left: 20%;
                            right: 0;
                        }

                        @media (hover),
                        (min-width:0\0) {

                            .t-menuburger_second.t-menuburger-hovered span:nth-child(2),
                            .t-menuburger_second.t-menuburger-hovered span:nth-child(3) {
                                animation: t-menuburger-anim 0.3s ease-out normal forwards;
                            }

                            .t-menuburger_second.t-menuburger-unhovered span:nth-child(2),
                            .t-menuburger_second.t-menuburger-unhovered span:nth-child(3) {
                                animation: t-menuburger-anim2 0.3s ease-out normal forwards;
                            }
                        }

                        .t-menuburger_second.t-menuburger-opened span:nth-child(2),
                        .t-menuburger_second.t-menuburger-opened span:nth-child(3) {
                            left: 0;
                            right: 0;
                            width: 100% !important;
                        }

                        /*---menu burger third style---*/
                        .t-menuburger_third span:nth-child(4) {
                            width: 70%;
                            left: unset;
                            right: 0;
                        }

                        @media (hover),
                        (min-width:0\0) {
                            .t-menuburger_third:not(.t-menuburger-opened):hover span:nth-child(4) {
                                width: 100%;
                            }
                        }

                        .t-menuburger_third.t-menuburger-opened span:nth-child(4) {
                            width: 0 !important;
                            right: 50%;
                        }

                        /*---menu burger fourth style---*/
                        .t-menuburger_fourth {
                            height: 12px;
                        }

                        .t-menuburger_fourth.t-menuburger__small {
                            height: 8px;
                        }

                        .t-menuburger_fourth.t-menuburger__big {
                            height: 18px;
                        }

                        .t-menuburger_fourth span:nth-child(2),
                        .t-menuburger_fourth span:nth-child(3) {
                            top: 4px;
                            opacity: 0;
                        }

                        .t-menuburger_fourth span:nth-child(4) {
                            top: 8px;
                        }

                        .t-menuburger_fourth.t-menuburger__small span:nth-child(2),
                        .t-menuburger_fourth.t-menuburger__small span:nth-child(3) {
                            top: 3px;
                        }

                        .t-menuburger_fourth.t-menuburger__small span:nth-child(4) {
                            top: 6px;
                        }

                        .t-menuburger_fourth.t-menuburger__small span:nth-child(2),
                        .t-menuburger_fourth.t-menuburger__small span:nth-child(3) {
                            top: 3px;
                        }

                        .t-menuburger_fourth.t-menuburger__small span:nth-child(4) {
                            top: 6px;
                        }

                        .t-menuburger_fourth.t-menuburger__big span:nth-child(2),
                        .t-menuburger_fourth.t-menuburger__big span:nth-child(3) {
                            top: 6px;
                        }

                        .t-menuburger_fourth.t-menuburger__big span:nth-child(4) {
                            top: 12px;
                        }

                        @media (hover),
                        (min-width:0\0) {
                            .t-menuburger_fourth:not(.t-menuburger-opened):hover span:nth-child(1) {
                                transform: translateY(1px);
                            }

                            .t-menuburger_fourth:not(.t-menuburger-opened):hover span:nth-child(4) {
                                transform: translateY(-1px);
                            }

                            .t-menuburger_fourth.t-menuburger__big:not(.t-menuburger-opened):hover span:nth-child(1) {
                                transform: translateY(3px);
                            }

                            .t-menuburger_fourth.t-menuburger__big:not(.t-menuburger-opened):hover span:nth-child(4) {
                                transform: translateY(-3px);
                            }
                        }

                        .t-menuburger_fourth.t-menuburger-opened span:nth-child(1),
                        .t-menuburger_fourth.t-menuburger-opened span:nth-child(4) {
                            top: 4px;
                        }

                        .t-menuburger_fourth.t-menuburger-opened span:nth-child(2),
                        .t-menuburger_fourth.t-menuburger-opened span:nth-child(3) {
                            opacity: 1;
                        }

                        /*---menu burger animations---*/
                        @keyframes t-menuburger-anim {
                            0% {
                                width: 80%;
                                left: 20%;
                                right: 0;
                            }

                            50% {
                                width: 100%;
                                left: 0;
                                right: 0;
                            }

                            100% {
                                width: 80%;
                                left: 0;
                                right: 20%;
                            }
                        }

                        @keyframes t-menuburger-anim2 {
                            0% {
                                width: 80%;
                                left: 0;
                            }

                            50% {
                                width: 100%;
                                right: 0;
                                left: 0;
                            }

                            100% {
                                width: 80%;
                                left: 20%;
                                right: 0;
                            }
                        }
                    </style>
                </div>
            </div>
            <style>
                .tmenu-mobile {
                    background-color: #111;
                    display: none;
                    width: 100%;
                    top: 0;
                    z-index: 990;
                }

                .tmenu-mobile_positionfixed {
                    position: fixed;
                }

                .tmenu-mobile__text {
                    color: #fff;
                }

                .tmenu-mobile__container {
                    min-height: 64px;
                    padding: 20px;
                    position: relative;
                    box-sizing: border-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-align-items: center;
                    -ms-flex-align: center;
                    align-items: center;
                    -webkit-justify-content: space-between;
                    -ms-flex-pack: justify;
                    justify-content: space-between;
                }

                .tmenu-mobile__list {
                    display: block;
                }

                .tmenu-mobile__burgerlogo {
                    display: inline-block;
                    font-size: 24px;
                    font-weight: 400;
                    white-space: nowrap;
                    vertical-align: middle;
                }

                .tmenu-mobile__imglogo {
                    height: auto;
                    display: block;
                    max-width: 300px !important;
                    box-sizing: border-box;
                    padding: 0;
                    margin: 0 auto;
                }

                @media screen and (max-width: 980px) {
                    .tmenu-mobile__menucontent_hidden {
                        display: none;
                        height: 100%;
                    }

                    .tmenu-mobile {
                        display: block;
                    }
                }

                @media screen and (max-width: 980px) {
                    #rec748335847 .tmenu-mobile {
                        background-color: #262626;
                    }

                    #rec748335847 .tmenu-mobile__menucontent_fixed {
                        position: fixed;
                        top: 64px;
                    }

                    #rec748335847 .t-menuburger {
                        -webkit-order: 1;
                        -ms-flex-order: 1;
                        order: 1;
                    }
                }
            </style>
            <style>
                #rec748335847 .tmenu-mobile__burgerlogo a {
                    color: #ffffff;
                }
            </style>
            <style>
                #rec748335847 .tmenu-mobile__burgerlogo__title {
                    color: #ffffff;
                }
            </style>
            <div id="nav748335847"
                class="t456 t456__positionfixed tmenu-mobile__menucontent_hidden tmenu-mobile__menucontent_fixed"
                style="background-color: rgba(31,31,31,0.80); " data-bgcolor-hex="#1f1f1f"
                data-bgcolor-rgba="rgba(31,31,31,0.80)" data-navmarker="nav748335847marker" data-appearoffset=""
                data-bgopacity-two="100" data-menushadow="" data-menushadow-css="" data-bgopacity="0.80"
                data-bgcolor-rgba-afterscroll="rgba(31,31,31,1)" data-menu-items-align="right" data-menu="yes">
                <div class="t456__maincontainer t456__c12collumns" style="">
                    <div class="t456__leftwrapper" style="padding-left:20px;min-width:90px;width:90px;">
                        <div class="t456__logowrapper" style="display: block;"><a href="/"><img
                                    class="t456__imglogo t456__imglogomobile"
                                    src="/home/images/tild6435-3738-4130-b836-643833363333__group_70.png" imgfield="img"
                                    style="max-width: 90px; width: 90px;" alt="UMFit"></a></div>
                    </div>
                    <nav class="t456__rightwrapper t456__menualign_right" style="padding-right:20px;">
                        <ul role="list" class="t456__list t-menu__list">
                            <li class="t456__list_item" style="padding:0 25px 0 0;"><a class="t-menu__link-item"
                                    href="#rec748305097" data-menu-submenu-hook=""
                                    data-menu-item-number="1">Функции</a></li>
                            <li class="t456__list_item" style="padding:0 25px;"><a class="t-menu__link-item"
                                    href="#rec748319095" data-menu-submenu-hook=""
                                    data-menu-item-number="2">Экосистема</a></li>
                            <li class="t456__list_item" style="padding:0 0 0 25px;"><a class="t-menu__link-item"
                                    href="{{ route('stub') }}" data-menu-submenu-hook="" data-menu-item-number="3">Войти в ЛК</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <style>
                @media screen and (max-width: 980px) {
                    #rec748335847 .t456__logowrapper {
                        display: none !important;
                    }

                    #rec748335847 .t456__mobile-text {
                        display: none;
                    }

                    #rec748335847 .t456__imglogo {
                        padding: 0;
                    }
                }
            </style>
            <style>
                @media screen and (max-width: 980px) {
                    #rec748335847 .t456__leftcontainer {
                        padding: 20px;
                    }
                }

                @media screen and (max-width: 980px) {
                    #rec748335847 .t456__imglogo {
                        padding: 20px 0;
                    }
                }
            </style>
            <script type="text/javascript">
                t_onReady(function() {
                    t_onFuncLoad('t_menu__highlightActiveLinks', function() {
                        t_menu__highlightActiveLinks('.t456__list_item a');
                    });
                    t_onFuncLoad('t_menu__findAnchorLinks', function() {
                        t_menu__findAnchorLinks('748335847', '.t456__list_item a');
                    });
                });
                t_onReady(function() {
                    t_onFuncLoad('t_menu__setBGcolor', function() {
                        t_menu__setBGcolor('748335847', '.t456');
                        window.addEventListener('resize', function() {
                            t_menu__setBGcolor('748335847', '.t456');
                        });
                    });
                    t_onFuncLoad('t_menu__interactFromKeyboard', function() {
                        t_menu__interactFromKeyboard('748335847');
                    });
                });
                t_onReady(function() {
                    t_onFuncLoad('t_menu__changeBgOpacity', function() {
                        t_menu__changeBgOpacity('748335847', '.t456');
                        window.addEventListener('scroll', t_throttle(function() {
                            t_menu__changeBgOpacity('748335847', '.t456');
                        }));
                    });
                });
            </script>
            <script type="text/javascript">
                t_onReady(function() {
                    t_onFuncLoad('t_menu__createMobileMenu', function() {
                        t_menu__createMobileMenu('748335847', '.t456');
                    });
                });
            </script>
            <style>
                #rec748335847 .t-menu__link-item {}

                @supports (overflow:-webkit-marquee) and (justify-content:inherit) {

                    #rec748335847 .t-menu__link-item,
                    #rec748335847 .t-menu__link-item.t-active {
                        opacity: 1 !important;
                    }
                }
            </style>
            <style>
                #rec748335847 .t456__logowrapper a {
                    color: #ffffff;
                }

                #rec748335847 a.t-menu__link-item {
                    font-size: 16px;
                    color: #daf73a;
                    font-weight: 600;
                    font-family: 'TildaSans';
                }
            </style>
            <style>
                #rec748335847 .t456__logo {
                    color: #ffffff;
                }
            </style><!--[if IE 8]><style>#rec748335847 .t456 {
filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D91f1f1f', endColorstr='#D91f1f1f');
}</style><![endif]-->
        </div>
        <div id="rec747722823" class="r t-rec t-rec_pt_0 t-screenmin-980px" style="padding-top:0px; "
            data-animationappear="off" data-record-type="396" data-screen-min="980px"><!-- T396 -->
            <style>
                #rec747722823 .t396__artboard {
                    height: 700px;
                    background-color: #1f1f1f;
                }

                #rec747722823 .t396__filter {
                    height: 700px;
                }

                #rec747722823 .t396__carrier {
                    height: 700px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {

                    #rec747722823 .t396__artboard,
                    #rec747722823 .t396__filter,
                    #rec747722823 .t396__carrier {}

                    #rec747722823 .t396__filter {}

                    #rec747722823 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec747722823 .tn-elem[data-elem-id="1715614022215"] {
                    z-index: 2;
                    top: 0px;
                    left: calc(50% - 600px + 0px);
                    width: 1200px;
                    height: 700px;
                }

                #rec747722823 .tn-elem[data-elem-id="1715614022215"] .tn-atom {
                    background-color: #1f1f1f;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                #rec747722823 .tn-elem[data-elem-id="1715614022219"] {
                    z-index: 3;
                    top: 0px;
                    left: calc(50% - 600px + 0px);
                    width: 1200px;
                    height: 700px;
                }

                #rec747722823 .tn-elem[data-elem-id="1715614022219"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                #rec747722823 .tn-elem[data-elem-id="1715615128776"] {
                    z-index: 4;
                    top: 0px;
                    left: calc(50% - 600px + -100px);
                    width: 1400px;
                    height: 700px;
                }

                #rec747722823 .tn-elem[data-elem-id="1715615128776"] .tn-atom {
                    background-image: linear-gradient(0turn, rgba(31, 31, 31, 1) 0%, rgba(31, 31, 31, 0) 100%);
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                #rec747722823 .tn-elem[data-elem-id="1715614022224"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 5;
                    top: 300px;
                    left: calc(50% - 600px + 130px);
                    width: 846px;
                }

                #rec747722823 .tn-elem[data-elem-id="1715614022224"] .tn-atom {
                    color: #ffffff;
                    font-size: 52px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                #rec747722823 .tn-elem[data-elem-id="1715614022228"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 6;
                    top: 448px;
                    left: calc(50% - 600px + 130px);
                    width: 563px;
                }

                #rec747722823 .tn-elem[data-elem-id="1715614022228"] .tn-atom {
                    color: #ffffff;
                    font-size: 24px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                #rec747722823 .tn-elem[data-elem-id="1715614158697"] {
                    color: #000000;
                    text-align: center;
                    z-index: 7;
                    top: 547px;
                    left: calc(50% - 600px + 131px);
                    width: 280px;
                    height: 50px;
                }

                #rec747722823 .tn-elem[data-elem-id="1715614158697"] .tn-atom {
                    color: #000000;
                    font-size: 24px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    border-radius: 3px;
                    background-color: #daf73a;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                    box-shadow: 4px 4px 30px 0px rgba(218, 247, 58, 0.3);
                }

                @media (hover),
                (min-width:0\0) {
                    #rec747722823 .tn-elem[data-elem-id="1715614158697"] .tn-atom:hover {
                        background-color: #1f1f1f;
                        background-image: none;
                    }

                    #rec747722823 .tn-elem[data-elem-id="1715614158697"] .tn-atom:hover {
                        color: #daf73a;
                    }
                }

                @media screen and (max-width: 1199px) {}
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="747722823" data-artboard-screens="960,1200"
                    data-artboard-height="700" data-artboard-valign="center" data-artboard-upscale="grid">
                    <div class="t396__carrier" data-artboard-recid="747722823"></div>
                    <div class="t396__filter" data-artboard-recid="747722823"></div>
                    <div class='t396__elem tn-elem tn-elem__7477228231715614022215' data-elem-id='1715614022215'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="0"
                        data-field-height-value="700" data-field-width-value="1200" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477228231715614022219' data-elem-id='1715614022219'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="0"
                        data-field-height-value="700" data-field-width-value="1200" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild6465-3834-4764-b239-306431643761__photo.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477228231715615128776' data-elem-id='1715615128776'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="-100"
                        data-field-height-value="700" data-field-width-value="1400" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477228231715614022224' data-elem-id='1715614022224'
                        data-elem-type='text' data-field-top-value="300" data-field-left-value="130"
                        data-field-width-value="846" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715614022224'>Превращай свои цели в реальность с UMFit
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477228231715614022228' data-elem-id='1715614022228'
                        data-elem-type='text' data-field-top-value="448" data-field-left-value="130"
                        data-field-width-value="563" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715614022228'>Приложение, которое делает спорт доступным
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477228231715614158697' data-elem-id='1715614158697'
                        data-elem-type='button' data-field-top-value="547" data-field-left-value="131"
                        data-field-height-value="50" data-field-width-value="280" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px">
                        <a href="{{ route('quiz') }}" class='tn-atom'>Зарегистрироваться</a>
                    </div>
                </div>
            </div>
            <script>
                t_onReady(function() {
                    t_onFuncLoad('t396_init', function() {
                        t396_init('747722823');
                    });
                });
            </script><!-- /T396 -->
        </div>
        <div id="rec748303945" class="r t-rec t-screenmax-480px" style=" " data-animationappear="off"
            data-record-type="396" data-screen-max="480px"><!-- T396 -->
            <style>
                #rec748303945 .t396__artboard {
                    height: 904px;
                    background-color: #1f1f1f;
                }

                #rec748303945 .t396__filter {
                    height: 904px;
                }

                #rec748303945 .t396__carrier {
                    height: 904px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 479px) {

                    #rec748303945 .t396__artboard,
                    #rec748303945 .t396__filter,
                    #rec748303945 .t396__carrier {
                        height: 662px;
                    }

                    #rec748303945 .t396__filter {}

                    #rec748303945 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec748303945 .tn-elem[data-elem-id="1715700839575"] {
                    z-index: 2;
                    top: -33px;
                    left: calc(50% - 240px + -18px);
                    width: 517px;
                }

                #rec748303945 .tn-elem[data-elem-id="1715700839575"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748303945 .tn-elem[data-elem-id="1715700839575"] {
                        top: 0px;
                        left: calc(50% - 160px + -25px);
                        width: 370px;
                    }
                }

                #rec748303945 .tn-elem[data-elem-id="1715700897687"] {
                    z-index: 3;
                    top: -34px;
                    left: calc(50% - 240px + -21px);
                    width: 520px;
                    height: 938px;
                }

                #rec748303945 .tn-elem[data-elem-id="1715700897687"] .tn-atom {
                    background-image: linear-gradient(0turn, rgba(31, 31, 31, 1) 12%, rgba(31, 31, 31, 0) 100%);
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748303945 .tn-elem[data-elem-id="1715700897687"] {
                        top: 0px;
                        left: calc(50% - 160px + -25px);
                        width: 370px;
                        height: 664px;
                    }

                    #rec748303945 .tn-elem[data-elem-id="1715700897687"] .tn-atom {
                        background-image: linear-gradient(0turn, rgba(31, 31, 31, 1) 14%, rgba(31, 31, 31, 0) 100%);
                    }
                }

                #rec748303945 .tn-elem[data-elem-id="1715700939347"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 4;
                    top: 583px;
                    left: calc(50% - 240px + 32px);
                    width: 408px;
                }

                #rec748303945 .tn-elem[data-elem-id="1715700939347"] .tn-atom {
                    color: #ffffff;
                    font-size: 24px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748303945 .tn-elem[data-elem-id="1715700939347"] {
                        top: 348px;
                        left: calc(50% - 160px + -11px);
                        width: 336px;
                    }

                    #rec748303945 .tn-elem[data-elem-id="1715700939347"] {
                        color: #ffffff;
                        text-align: center;
                    }

                    #rec748303945 .tn-elem[data-elem-id="1715700939347"] .tn-atom {
                        color: #ffffff;
                        font-size: 28px;
                    }
                }

                #rec748303945 .tn-elem[data-elem-id="1715701003112"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 5;
                    top: 459px;
                    left: calc(50% - 240px + 10px);
                    width: 452px;
                }

                #rec748303945 .tn-elem[data-elem-id="1715701003112"] .tn-atom {
                    color: #ffffff;
                    font-size: 40px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748303945 .tn-elem[data-elem-id="1715701003112"] {
                        top: 454px;
                        left: calc(50% - 160px + 22px);
                        width: 277px;
                    }

                    #rec748303945 .tn-elem[data-elem-id="1715701003112"] {
                        color: #ffffff;
                        text-align: center;
                    }

                    #rec748303945 .tn-elem[data-elem-id="1715701003112"] .tn-atom {
                        color: #ffffff;
                        font-size: 16px;
                    }
                }

                #rec748303945 .tn-elem[data-elem-id="1715701052321"] {
                    color: #000000;
                    text-align: center;
                    z-index: 6;
                    top: 701px;
                    left: calc(50% - 240px + 126px);
                    width: 220px;
                    height: 50px;
                }

                #rec748303945 .tn-elem[data-elem-id="1715701052321"] .tn-atom {
                    color: #000000;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    border-radius: 3px;
                    background-color: #daf73a;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                    box-shadow: 4px 4px 30px 0px rgba(218, 247, 58, 0.3);
                }

                @media screen and (max-width: 479px) {
                    #rec748303945 .tn-elem[data-elem-id="1715701052321"] {
                        top: 524px;
                        left: calc(50% - 160px + 50px);
                    }

                    #rec748303945 .tn-elem[data-elem-id="1715701052321"] .tn-atom {
                        background-color: #daf73a;
                        box-shadow: 4px 4px 30px 0px rgba(218, 247, 58, 0.3);
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="748303945" data-artboard-screens="320,480"
                    data-artboard-height="904" data-artboard-valign="center" data-artboard-upscale="grid"
                    data-artboard-height-res-320="662">
                    <div class="t396__carrier" data-artboard-recid="748303945"></div>
                    <div class="t396__filter" data-artboard-recid="748303945"></div>
                    <div class='t396__elem tn-elem tn-elem__7483039451715700839575' data-elem-id='1715700839575'
                        data-elem-type='image' data-field-top-value="-33" data-field-left-value="-18"
                        data-field-width-value="517" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-filewidth-value="390"
                        data-field-fileheight-value="700" data-field-top-res-320-value="0"
                        data-field-left-res-320-value="-25" data-field-width-res-320-value="370">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='/home/images/tild6634-6335-4466-b431-363938643139___1.png' alt=''
                                imgfield='tn_img_1715700839575' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483039451715700897687' data-elem-id='1715700897687'
                        data-elem-type='shape' data-field-top-value="-34" data-field-left-value="-21"
                        data-field-height-value="938" data-field-width-value="520" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="0" data-field-left-res-320-value="-25"
                        data-field-height-res-320-value="664" data-field-width-res-320-value="370">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483039451715700939347' data-elem-id='1715700939347'
                        data-elem-type='text' data-field-top-value="583" data-field-left-value="32"
                        data-field-width-value="408" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="348"
                        data-field-left-res-320-value="-11" data-field-width-res-320-value="336">
                        <div class='tn-atom'field='tn_text_1715700939347'>Превращай свои цели<br>в реальность с UMFit
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483039451715701003112' data-elem-id='1715701003112'
                        data-elem-type='text' data-field-top-value="459" data-field-left-value="10"
                        data-field-width-value="452" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="454"
                        data-field-left-res-320-value="22" data-field-width-res-320-value="277">
                        <div class='tn-atom'field='tn_text_1715701003112'>Приложение, которое делает спорт доступным
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483039451715701052321' data-elem-id='1715701052321'
                        data-elem-type='button' data-field-top-value="701" data-field-left-value="126"
                        data-field-height-value="50" data-field-width-value="220" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="524" data-field-left-res-320-value="50">
                        <a href="{{ route('quiz') }}" class='tn-atom'>Зарегистрироваться</a>
                    </div>
                </div>
            </div>
            <script>
                t_onReady(function() {
                    t_onFuncLoad('t396_init', function() {
                        t396_init('748303945');
                    });
                });
            </script><!-- /T396 -->
        </div>
        <div id="rec747715751" class="r t-rec t-screenmin-980px" style=" " data-animationappear="off"
            data-record-type="396" data-screen-min="980px"><!-- T396 -->
            <style>
                #rec747715751 .t396__artboard {
                    height: 545px;
                    background-color: #1f1f1f;
                }

                #rec747715751 .t396__filter {
                    height: 545px;
                }

                #rec747715751 .t396__carrier {
                    height: 545px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {

                    #rec747715751 .t396__artboard,
                    #rec747715751 .t396__filter,
                    #rec747715751 .t396__carrier {}

                    #rec747715751 .t396__filter {}

                    #rec747715751 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 959px) {

                    #rec747715751 .t396__artboard,
                    #rec747715751 .t396__filter,
                    #rec747715751 .t396__carrier {}

                    #rec747715751 .t396__filter {}

                    #rec747715751 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec747715751 .t396__artboard,
                    #rec747715751 .t396__filter,
                    #rec747715751 .t396__carrier {}

                    #rec747715751 .t396__filter {}

                    #rec747715751 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 479px) {

                    #rec747715751 .t396__artboard,
                    #rec747715751 .t396__filter,
                    #rec747715751 .t396__carrier {}

                    #rec747715751 .t396__filter {}

                    #rec747715751 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec747715751 .tn-elem[data-elem-id="1715613156342"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 2;
                    top: 100px;
                    left: calc(50% - 600px + 130px);
                    width: 797px;
                }

                #rec747715751 .tn-elem[data-elem-id="1715613156342"] .tn-atom {
                    color: #ffffff;
                    font-size: 40px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747715751 .tn-elem[data-elem-id="1715696599320"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 3;
                    top: 171px;
                    left: calc(50% - 600px + 130px);
                    width: 460px;
                    height: 120px;
                }

                #rec747715751 .tn-elem[data-elem-id="1715696599320"] .tn-atom {
                    color: #ffffff;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    border-width: 1px;
                    border-radius: 6px;
                    background-color: #262626;
                    background-position: center center;
                    border-color: #daf73a;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                }

                @media (hover),
                (min-width:0\0) {
                    #rec747715751 .tn-elem[data-elem-id="1715696599320"] .tn-atom:hover {
                        background-color: #daf73a;
                        background-image: none;
                    }

                    #rec747715751 .tn-elem[data-elem-id="1715696599320"] .tn-atom:hover {
                        color: #000000;
                    }
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747715751 .tn-elem[data-elem-id="1715696787310"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 4;
                    top: 171px;
                    left: calc(50% - 600px + 610px);
                    width: 460px;
                    height: 200px;
                }

                #rec747715751 .tn-elem[data-elem-id="1715696787310"] .tn-atom {
                    color: #ffffff;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    border-width: 1px;
                    border-radius: 6px;
                    background-color: #262626;
                    background-position: center center;
                    border-color: #daf73a;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                }

                @media (hover),
                (min-width:0\0) {
                    #rec747715751 .tn-elem[data-elem-id="1715696787310"] .tn-atom:hover {
                        background-color: #daf73a;
                        background-image: none;
                    }

                    #rec747715751 .tn-elem[data-elem-id="1715696787310"] .tn-atom:hover {
                        color: #000000;
                    }
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747715751 .tn-elem[data-elem-id="1715696832592"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 5;
                    top: 321px;
                    left: calc(50% - 600px + 130px);
                    width: 460px;
                    height: 199px;
                }

                #rec747715751 .tn-elem[data-elem-id="1715696832592"] .tn-atom {
                    color: #ffffff;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    border-width: 1px;
                    border-radius: 6px;
                    background-color: #262626;
                    background-position: center center;
                    border-color: #daf73a;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                }

                @media (hover),
                (min-width:0\0) {
                    #rec747715751 .tn-elem[data-elem-id="1715696832592"] .tn-atom:hover {
                        background-color: #daf73a;
                        background-image: none;
                    }

                    #rec747715751 .tn-elem[data-elem-id="1715696832592"] .tn-atom:hover {
                        color: #000000;
                    }
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747715751 .tn-elem[data-elem-id="1715696890246"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 6;
                    top: 401px;
                    left: calc(50% - 600px + 610px);
                    width: 460px;
                    height: 120px;
                }

                #rec747715751 .tn-elem[data-elem-id="1715696890246"] .tn-atom {
                    color: #ffffff;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.5;
                    font-weight: 600;
                    border-width: 1px;
                    border-radius: 6px;
                    background-color: #262626;
                    background-position: center center;
                    border-color: #daf73a;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                }

                @media (hover),
                (min-width:0\0) {
                    #rec747715751 .tn-elem[data-elem-id="1715696890246"] .tn-atom:hover {
                        background-color: #daf73a;
                        background-image: none;
                    }

                    #rec747715751 .tn-elem[data-elem-id="1715696890246"] .tn-atom:hover {
                        color: #000000;
                    }
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="747715751"
                    data-artboard-screens="320,480,640,960,1200" data-artboard-height="545"
                    data-artboard-valign="center" data-artboard-upscale="grid">
                    <div class="t396__carrier" data-artboard-recid="747715751"></div>
                    <div class="t396__filter" data-artboard-recid="747715751"></div>
                    <div class='t396__elem tn-elem tn-elem__7477157511715613156342' data-elem-id='1715613156342'
                        data-elem-type='text' data-field-top-value="100" data-field-left-value="130"
                        data-field-width-value="797" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613156342'>UMFit это не просто приложение, это:</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477157511715696599320' data-elem-id='1715696599320'
                        data-elem-type='button' data-field-top-value="171" data-field-left-value="130"
                        data-field-height-value="120" data-field-width-value="460" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px">
                        <div class='tn-atom'>Контент от известных спортсменов и тренеров, много режимов тренировок
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477157511715696787310' data-elem-id='1715696787310'
                        data-elem-type='button' data-field-top-value="171" data-field-left-value="610"
                        data-field-height-value="200" data-field-width-value="460" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px">
                        <div class='tn-atom'>Возможность получить награды за свою физическую активность и грандиозное
                            путешествие к счастливому и здоровому себе</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477157511715696832592' data-elem-id='1715696832592'
                        data-elem-type='button' data-field-top-value="321" data-field-left-value="130"
                        data-field-height-value="199" data-field-width-value="460" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px">
                        <div class='tn-atom'>Персональные рекомендации, основанные на данных о твоем физическом
                            состоянии: блоки тренировок адаптируются по мере прогресса, физической подготовки и целей.
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477157511715696890246' data-elem-id='1715696890246'
                        data-elem-type='button' data-field-top-value="401" data-field-left-value="610"
                        data-field-height-value="120" data-field-width-value="460" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px">
                        <div class='tn-atom'>Возможность пользоваться другими продуктами экосистемы</div>
                    </div>
                </div>
            </div>
            <script>
                t_onReady(function() {
                    t_onFuncLoad('t396_init', function() {
                        t396_init('747715751');
                    });
                });
            </script><!-- /T396 -->
        </div>
        <div id="rec747716240" class="r t-rec t-screenmin-980px" style=" " data-animationappear="off"
            data-record-type="396" data-screen-min="980px"><!-- T396 -->
            <style>
                #rec747716240 .t396__artboard {
                    height: 250px;
                    background-color: #1f1f1f;
                }

                #rec747716240 .t396__filter {
                    height: 250px;
                }

                #rec747716240 .t396__carrier {
                    height: 250px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {

                    #rec747716240 .t396__artboard,
                    #rec747716240 .t396__filter,
                    #rec747716240 .t396__carrier {}

                    #rec747716240 .t396__filter {}

                    #rec747716240 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 959px) {

                    #rec747716240 .t396__artboard,
                    #rec747716240 .t396__filter,
                    #rec747716240 .t396__carrier {}

                    #rec747716240 .t396__filter {}

                    #rec747716240 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec747716240 .t396__artboard,
                    #rec747716240 .t396__filter,
                    #rec747716240 .t396__carrier {}

                    #rec747716240 .t396__filter {}

                    #rec747716240 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 479px) {

                    #rec747716240 .t396__artboard,
                    #rec747716240 .t396__filter,
                    #rec747716240 .t396__carrier {}

                    #rec747716240 .t396__filter {}

                    #rec747716240 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec747716240 .tn-elem[data-elem-id="1715613212160"] {
                    color: #ffffff;
                    z-index: 2;
                    top: 40px;
                    left: calc(50% - 600px + 130px);
                    width: 166px;
                }

                #rec747716240 .tn-elem[data-elem-id="1715613212160"] .tn-atom {
                    color: #ffffff;
                    font-size: 24px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747716240 .tn-elem[data-elem-id="1715613262505"] {
                    color: #ffffff;
                    z-index: 3;
                    top: 97px;
                    left: calc(50% - 600px + 130px);
                    width: 560px;
                }

                #rec747716240 .tn-elem[data-elem-id="1715613262505"] .tn-atom {
                    color: #ffffff;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747716240 .tn-elem[data-elem-id="1715613298778"] {
                    color: #000000;
                    text-align: center;
                    z-index: 4;
                    top: 103px;
                    left: calc(50% - 600px + 801px);
                    width: 220px;
                    height: 50px;
                }

                #rec747716240 .tn-elem[data-elem-id="1715613298778"] .tn-atom {
                    color: #000000;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    border-radius: 3px;
                    background-color: #daf73a;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                    box-shadow: 4px 4px 30px 0px rgba(218, 247, 58, 0.3);
                }

                @media (hover),
                (min-width:0\0) {
                    #rec747716240 .tn-elem[data-elem-id="1715613298778"] .tn-atom:hover {
                        background-color: #1f1f1f;
                        background-image: none;
                    }

                    #rec747716240 .tn-elem[data-elem-id="1715613298778"] .tn-atom:hover {
                        color: #daf73a;
                    }
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="747716240"
                    data-artboard-screens="320,480,640,960,1200" data-artboard-height="250"
                    data-artboard-valign="center" data-artboard-upscale="grid">
                    <div class="t396__carrier" data-artboard-recid="747716240"></div>
                    <div class="t396__filter" data-artboard-recid="747716240"></div>
                    <div class='t396__elem tn-elem tn-elem__7477162401715613212160' data-elem-id='1715613212160'
                        data-elem-type='text' data-field-top-value="40" data-field-left-value="130"
                        data-field-width-value="166" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613212160'>🔥 Начнем? 🔥</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477162401715613262505' data-elem-id='1715613262505'
                        data-elem-type='text' data-field-top-value="97" data-field-left-value="130"
                        data-field-width-value="560" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613262505'>Всего несколько шагов до старта. Заполни гайд
                            и получи персональный план.</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477162401715613298778' data-elem-id='1715613298778'
                        data-elem-type='button' data-field-top-value="103" data-field-left-value="801"
                        data-field-height-value="50" data-field-width-value="220" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px">
                        <a href="{{ route('quiz') }}" class='tn-atom'>Зарегистрироваться</a>
                    </div>
                </div>
            </div>
            <script>
                t_onReady(function() {
                    t_onFuncLoad('t396_init', function() {
                        t396_init('747716240');
                    });
                });
            </script><!-- /T396 -->
        </div>
        <div id="rec748304754" class="r t-rec t-screenmax-480px" style=" " data-animationappear="off"
            data-record-type="396" data-screen-max="480px"><!-- T396 -->
            <style>
                #rec748304754 .t396__artboard {
                    height: 804px;
                    background-color: #1f1f1f;
                }

                #rec748304754 .t396__filter {
                    height: 804px;
                }

                #rec748304754 .t396__carrier {
                    height: 804px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 479px) {

                    #rec748304754 .t396__artboard,
                    #rec748304754 .t396__filter,
                    #rec748304754 .t396__carrier {}

                    #rec748304754 .t396__filter {}

                    #rec748304754 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec748304754 .tn-elem[data-elem-id="1715701672918"] {
                    color: #ffffff;
                    z-index: 2;
                    top: 20px;
                    left: calc(50% - 240px + 20px);
                    width: 409px;
                }

                #rec748304754 .tn-elem[data-elem-id="1715701672918"] .tn-atom {
                    color: #ffffff;
                    font-size: 24px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.2;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748304754 .tn-elem[data-elem-id="1715701672918"] {
                        left: calc(50% - 160px + 16px);
                        width: 238px;
                    }
                }

                #rec748304754 .tn-elem[data-elem-id="1715701740448"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 3;
                    top: 67px;
                    left: calc(50% - 240px + 20px);
                    width: 438px;
                    height: 101px;
                }

                #rec748304754 .tn-elem[data-elem-id="1715701740448"] .tn-atom {
                    color: #ffffff;
                    font-size: 14px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    border-width: 1px;
                    border-radius: 6px;
                    background-color: #262626;
                    background-position: center center;
                    border-color: #daf73a;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                }

                @media screen and (max-width: 479px) {
                    #rec748304754 .tn-elem[data-elem-id="1715701740448"] {
                        top: 98px;
                        left: calc(50% - 160px + 16px);
                        width: 288px;
                        height: 80px;
                    }
                }

                #rec748304754 .tn-elem[data-elem-id="1715701874011"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 4;
                    top: 188px;
                    left: calc(50% - 240px + 21px);
                    width: 438px;
                    height: 101px;
                }

                #rec748304754 .tn-elem[data-elem-id="1715701874011"] .tn-atom {
                    color: #ffffff;
                    font-size: 14px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    border-width: 1px;
                    border-radius: 6px;
                    background-color: #262626;
                    background-position: center center;
                    border-color: #daf73a;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                }

                @media screen and (max-width: 479px) {
                    #rec748304754 .tn-elem[data-elem-id="1715701874011"] {
                        top: 194px;
                        left: calc(50% - 160px + 16px);
                        width: 288px;
                        height: 119px;
                    }
                }

                #rec748304754 .tn-elem[data-elem-id="1715701890127"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 5;
                    top: 309px;
                    left: calc(50% - 240px + 21px);
                    width: 438px;
                    height: 101px;
                }

                #rec748304754 .tn-elem[data-elem-id="1715701890127"] .tn-atom {
                    color: #ffffff;
                    font-size: 14px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    border-width: 1px;
                    border-radius: 6px;
                    background-color: #262626;
                    background-position: center center;
                    border-color: #daf73a;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                }

                @media screen and (max-width: 479px) {
                    #rec748304754 .tn-elem[data-elem-id="1715701890127"] {
                        top: 330px;
                        left: calc(50% - 160px + 16px);
                        width: 288px;
                        height: 120px;
                    }
                }

                #rec748304754 .tn-elem[data-elem-id="1715701912567"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 6;
                    top: 430px;
                    left: calc(50% - 240px + 21px);
                    width: 438px;
                    height: 101px;
                }

                #rec748304754 .tn-elem[data-elem-id="1715701912567"] .tn-atom {
                    color: #ffffff;
                    font-size: 14px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    border-width: 1px;
                    border-radius: 6px;
                    background-color: #262626;
                    background-position: center center;
                    border-color: #daf73a;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                }

                @media screen and (max-width: 479px) {
                    #rec748304754 .tn-elem[data-elem-id="1715701912567"] {
                        top: 466px;
                        left: calc(50% - 160px + 16px);
                        width: 288px;
                        height: 80px;
                    }
                }

                #rec748304754 .tn-elem[data-elem-id="1715701961030"] {
                    color: #ffffff;
                    z-index: 7;
                    top: 555px;
                    left: calc(50% - 240px + 20px);
                    width: 163px;
                }

                #rec748304754 .tn-elem[data-elem-id="1715701961030"] .tn-atom {
                    color: #ffffff;
                    font-size: 24px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748304754 .tn-elem[data-elem-id="1715701961030"] {
                        top: 570px;
                        left: calc(50% - 160px + 16px);
                    }
                }

                #rec748304754 .tn-elem[data-elem-id="1715701992310"] {
                    color: #ffffff;
                    z-index: 8;
                    top: 612px;
                    left: calc(50% - 240px + 20px);
                    width: 423px;
                }

                #rec748304754 .tn-elem[data-elem-id="1715701992310"] .tn-atom {
                    color: #ffffff;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748304754 .tn-elem[data-elem-id="1715701992310"] {
                        top: 627px;
                        left: calc(50% - 160px + 16px);
                        width: 288px;
                    }

                    #rec748304754 .tn-elem[data-elem-id="1715701992310"] .tn-atom {
                        font-size: 16px;
                    }
                }

                #rec748304754 .tn-elem[data-elem-id="1715702054126"] {
                    color: #000000;
                    text-align: center;
                    z-index: 9;
                    top: 694px;
                    left: calc(50% - 240px + 130px);
                    width: 220px;
                    height: 50px;
                }

                #rec748304754 .tn-elem[data-elem-id="1715702054126"] .tn-atom {
                    color: #000000;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    border-radius: 6px;
                    background-color: #daf73a;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                    box-shadow: 4px 4px 30px 0px rgba(218, 247, 58, 0.3);
                }

                @media screen and (max-width: 479px) {
                    #rec748304754 .tn-elem[data-elem-id="1715702054126"] {
                        top: 722px;
                        left: calc(50% - 160px + 60px);
                        width: 200px;
                        height: 44px;
                    }

                    #rec748304754 .tn-elem[data-elem-id="1715702054126"] .tn-atom {
                        font-size: 16px;
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="748304754" data-artboard-screens="320,480"
                    data-artboard-height="804" data-artboard-valign="center" data-artboard-upscale="window">
                    <div class="t396__carrier" data-artboard-recid="748304754"></div>
                    <div class="t396__filter" data-artboard-recid="748304754"></div>
                    <div class='t396__elem tn-elem tn-elem__7483047541715701672918' data-elem-id='1715701672918'
                        data-elem-type='text' data-field-top-value="20" data-field-left-value="20"
                        data-field-width-value="409" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-left-res-320-value="16"
                        data-field-width-res-320-value="238">
                        <div class='tn-atom'field='tn_text_1715701672918'>UMFit это не просто приложение, это:</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483047541715701740448' data-elem-id='1715701740448'
                        data-elem-type='button' data-field-top-value="67" data-field-left-value="20"
                        data-field-height-value="101" data-field-width-value="438" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="98" data-field-left-res-320-value="16"
                        data-field-height-res-320-value="80" data-field-width-res-320-value="288">
                        <div class='tn-atom'>Контент от известных спортсменов и тренеров, много режимов тренировок
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483047541715701874011' data-elem-id='1715701874011'
                        data-elem-type='button' data-field-top-value="188" data-field-left-value="21"
                        data-field-height-value="101" data-field-width-value="438" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="194" data-field-left-res-320-value="16"
                        data-field-height-res-320-value="119" data-field-width-res-320-value="288">
                        <div class='tn-atom'>Персональные рекомендации, основанные на данных о твоем физическом
                            состоянии: блоки тренировок адаптируются по мере прогресса, физической подготовки и целей.
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483047541715701890127' data-elem-id='1715701890127'
                        data-elem-type='button' data-field-top-value="309" data-field-left-value="21"
                        data-field-height-value="101" data-field-width-value="438" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="330" data-field-left-res-320-value="16"
                        data-field-height-res-320-value="120" data-field-width-res-320-value="288">
                        <div class='tn-atom'>Возможность получить награды за свою физическую активность и грандиозное
                            путешествие к счастливому и здоровому себе</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483047541715701912567' data-elem-id='1715701912567'
                        data-elem-type='button' data-field-top-value="430" data-field-left-value="21"
                        data-field-height-value="101" data-field-width-value="438" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="466" data-field-left-res-320-value="16"
                        data-field-height-res-320-value="80" data-field-width-res-320-value="288">
                        <div class='tn-atom'>Возможность пользоваться другими продуктами экосистемы</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483047541715701961030' data-elem-id='1715701961030'
                        data-elem-type='text' data-field-top-value="555" data-field-left-value="20"
                        data-field-width-value="163" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="570"
                        data-field-left-res-320-value="16">
                        <div class='tn-atom'field='tn_text_1715701961030'>🔥 Начнем? 🔥</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483047541715701992310' data-elem-id='1715701992310'
                        data-elem-type='text' data-field-top-value="612" data-field-left-value="20"
                        data-field-width-value="423" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="627"
                        data-field-left-res-320-value="16" data-field-width-res-320-value="288">
                        <div class='tn-atom'field='tn_text_1715701992310'>Всего несколько шагов до старта. Заполни гайд
                            и получи персональный план.</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483047541715702054126' data-elem-id='1715702054126'
                        data-elem-type='button' data-field-top-value="694" data-field-left-value="130"
                        data-field-height-value="50" data-field-width-value="220" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="722" data-field-left-res-320-value="60"
                        data-field-height-res-320-value="44" data-field-width-res-320-value="200">
                        <a href="{{ route('quiz') }}" class='tn-atom'>Зарегистрироваться</a>
                    </div>
                </div>
            </div>
            <script>
                t_onFuncLoad('t396_initialScale', function() {
                    t396_initialScale('748304754');
                });
                t_onReady(function() {
                    t_onFuncLoad('t396_init', function() {
                        t396_init('748304754');
                    });
                });
            </script><!-- /T396 -->
        </div>
        <div id="rec747718392" class="r t-rec t-screenmin-980px" style=" " data-animationappear="off"
            data-record-type="396" data-screen-min="980px"><!-- T396 -->
            <style>
                #rec747718392 .t396__artboard {
                    height: 672px;
                    background-color: #1f1f1f;
                }

                #rec747718392 .t396__filter {
                    height: 672px;
                }

                #rec747718392 .t396__carrier {
                    height: 672px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {

                    #rec747718392 .t396__artboard,
                    #rec747718392 .t396__filter,
                    #rec747718392 .t396__carrier {}

                    #rec747718392 .t396__filter {}

                    #rec747718392 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 959px) {

                    #rec747718392 .t396__artboard,
                    #rec747718392 .t396__filter,
                    #rec747718392 .t396__carrier {}

                    #rec747718392 .t396__filter {}

                    #rec747718392 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec747718392 .t396__artboard,
                    #rec747718392 .t396__filter,
                    #rec747718392 .t396__carrier {}

                    #rec747718392 .t396__filter {}

                    #rec747718392 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 479px) {

                    #rec747718392 .t396__artboard,
                    #rec747718392 .t396__filter,
                    #rec747718392 .t396__carrier {}

                    #rec747718392 .t396__filter {}

                    #rec747718392 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec747718392 .tn-elem[data-elem-id="1715613431683"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 2;
                    top: 190px;
                    left: calc(50% - 600px + 130px);
                    width: 460px;
                }

                #rec747718392 .tn-elem[data-elem-id="1715613431683"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747718392 .tn-elem[data-elem-id="1715613431687"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 3;
                    top: 517px;
                    left: calc(50% - 600px + 610px);
                    width: 460px;
                }

                #rec747718392 .tn-elem[data-elem-id="1715613431687"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747718392 .tn-elem[data-elem-id="1715613431690"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 4;
                    top: 252px;
                    left: calc(50% - 600px + 162px);
                    width: 234px;
                }

                #rec747718392 .tn-elem[data-elem-id="1715613431690"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747718392 .tn-elem[data-elem-id="1715613431693"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 5;
                    top: 287px;
                    left: calc(50% - 600px + 162px);
                    width: 379px;
                }

                #rec747718392 .tn-elem[data-elem-id="1715613431693"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747718392 .tn-elem[data-elem-id="1715613431695"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 6;
                    top: 322px;
                    left: calc(50% - 600px + 162px);
                    width: 291px;
                }

                #rec747718392 .tn-elem[data-elem-id="1715613431695"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747718392 .tn-elem[data-elem-id="1715613431697"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 7;
                    top: 290px;
                    left: calc(50% - 600px + 130px);
                    width: 16px;
                }

                #rec747718392 .tn-elem[data-elem-id="1715613431697"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747718392 .tn-elem[data-elem-id="1715613431699"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 8;
                    top: 324px;
                    left: calc(50% - 600px + 130px);
                    width: 16px;
                }

                #rec747718392 .tn-elem[data-elem-id="1715613431699"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747718392 .tn-elem[data-elem-id="1715613431701"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 9;
                    top: 254px;
                    left: calc(50% - 600px + 130px);
                    width: 16px;
                }

                #rec747718392 .tn-elem[data-elem-id="1715613431701"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747718392 .tn-elem[data-elem-id="1715613431703"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 10;
                    top: 134px;
                    left: calc(50% - 600px + 130px);
                    width: 405px;
                }

                #rec747718392 .tn-elem[data-elem-id="1715613431703"] .tn-atom {
                    color: #ffffff;
                    font-size: 30px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747718392 .tn-elem[data-elem-id="1715613431708"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 11;
                    top: 461px;
                    left: calc(50% - 600px + 610px);
                    width: 262px;
                }

                #rec747718392 .tn-elem[data-elem-id="1715613431708"] .tn-atom {
                    color: #ffffff;
                    font-size: 30px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747718392 .tn-elem[data-elem-id="1715613431710"] {
                    z-index: 12;
                    top: 421px;
                    left: calc(50% - 600px + 130px);
                    width: 380px;
                    height: 231px;
                }

                #rec747718392 .tn-elem[data-elem-id="1715613431710"] .tn-atom {
                    border-width: 1px;
                    border-radius: 10px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #daf73a;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747718392 .tn-elem[data-elem-id="1715613431713"] {
                    z-index: 13;
                    top: 100px;
                    left: calc(50% - 600px + 641px);
                    width: 369px;
                    height: 240px;
                }

                #rec747718392 .tn-elem[data-elem-id="1715613431713"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="747718392"
                    data-artboard-screens="320,480,640,960,1200" data-artboard-height="672"
                    data-artboard-valign="center" data-artboard-upscale="grid">
                    <div class="t396__carrier" data-artboard-recid="747718392"></div>
                    <div class="t396__filter" data-artboard-recid="747718392"></div>
                    <div class='t396__elem tn-elem tn-elem__7477183921715613431683' data-elem-id='1715613431683'
                        data-elem-type='text' data-field-top-value="190" data-field-left-value="130"
                        data-field-width-value="460" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613431683'>Следите за вашими достижениями по количеству
                            пройденных шагов и сожженных калорий</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477183921715613431687' data-elem-id='1715613431687'
                        data-elem-type='text' data-field-top-value="517" data-field-left-value="610"
                        data-field-width-value="460" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613431687'>Создавайте свой индивидуальный план
                            тренировок и адаптируйте их под свой график вместе с UMFit. <br>Наше приложение позволит вам
                            строить график достижения ваших целей, улучшая физическую форму и укрепляя здоровье.</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477183921715613431690' data-elem-id='1715613431690'
                        data-elem-type='text' data-field-top-value="252" data-field-left-value="162"
                        data-field-width-value="234" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613431690'>визуализирует ваш результат</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477183921715613431693' data-elem-id='1715613431693'
                        data-elem-type='text' data-field-top-value="287" data-field-left-value="162"
                        data-field-width-value="379" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613431693'>вы сами регулируете вашу дневную активность
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477183921715613431695' data-elem-id='1715613431695'
                        data-elem-type='text' data-field-top-value="322" data-field-left-value="162"
                        data-field-width-value="291" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613431695'>мотивирует продолжать заниматься</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477183921715613431697' data-elem-id='1715613431697'
                        data-elem-type='text' data-field-top-value="290" data-field-left-value="130"
                        data-field-width-value="16" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613431697'>🔥</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477183921715613431699' data-elem-id='1715613431699'
                        data-elem-type='text' data-field-top-value="324" data-field-left-value="130"
                        data-field-width-value="16" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613431699'>👍🏻</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477183921715613431701' data-elem-id='1715613431701'
                        data-elem-type='text' data-field-top-value="254" data-field-left-value="130"
                        data-field-width-value="16" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613431701'>💪🏻</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477183921715613431703' data-elem-id='1715613431703'
                        data-elem-type='text' data-field-top-value="134" data-field-left-value="130"
                        data-field-width-value="405" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613431703'>Отслеживание активности</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477183921715613431708' data-elem-id='1715613431708'
                        data-elem-type='text' data-field-top-value="461" data-field-left-value="610"
                        data-field-width-value="262" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613431708'>План тренировок</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477183921715613431710' data-elem-id='1715613431710'
                        data-elem-type='shape' data-field-top-value="421" data-field-left-value="130"
                        data-field-height-value="231" data-field-width-value="380" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild6132-3436-4465-b630-666663663133__rectangle_33.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477183921715613431713' data-elem-id='1715613431713'
                        data-elem-type='shape' data-field-top-value="100" data-field-left-value="641"
                        data-field-height-value="240" data-field-width-value="369" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild6430-3865-4365-b930-616463383932__group_88.png"></div>
                    </div>
                </div>
            </div>
            <script>
                t_onReady(function() {
                    t_onFuncLoad('t396_init', function() {
                        t396_init('747718392');
                    });
                });
            </script><!-- /T396 -->
        </div>
        <div id="rec748305097" class="r t-rec t-screenmax-480px" style=" " data-animationappear="off"
            data-record-type="396" data-screen-max="480px"><!-- T396 -->
            <style>
                #rec748305097 .t396__artboard {
                    height: 1000px;
                    background-color: #1f1f1f;
                }

                #rec748305097 .t396__filter {
                    height: 1000px;
                }

                #rec748305097 .t396__carrier {
                    height: 1000px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 479px) {

                    #rec748305097 .t396__artboard,
                    #rec748305097 .t396__filter,
                    #rec748305097 .t396__carrier {
                        height: 870px;
                    }

                    #rec748305097 .t396__filter {}

                    #rec748305097 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431683"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 2;
                    top: 80px;
                    left: calc(50% - 240px + 20px);
                    width: 440px;
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431683"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748305097 .tn-elem[data-elem-id="1715613431683"] {
                        top: 55px;
                        left: calc(50% - 160px + 16px);
                        width: 287px;
                    }
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431687"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 3;
                    top: 596px;
                    left: calc(50% - 240px + 20px);
                    width: 460px;
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431687"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748305097 .tn-elem[data-elem-id="1715613431687"] {
                        top: 517px;
                        left: calc(50% - 160px + 15px);
                        width: 289px;
                    }
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431693"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 4;
                    top: 166px;
                    left: calc(50% - 240px + 50px);
                    width: 379px;
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431693"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748305097 .tn-elem[data-elem-id="1715613431693"] {
                        top: 160px;
                        left: calc(50% - 160px + 45px);
                        width: 250px;
                    }
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431695"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 5;
                    top: 197px;
                    left: calc(50% - 240px + 52px);
                    width: 291px;
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431695"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748305097 .tn-elem[data-elem-id="1715613431695"] {
                        top: 209px;
                        left: calc(50% - 160px + 47px);
                    }
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431697"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 6;
                    top: 165px;
                    left: calc(50% - 240px + 20px);
                    width: 16px;
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431697"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748305097 .tn-elem[data-elem-id="1715613431697"] {
                        top: 159px;
                        left: calc(50% - 160px + 15px);
                    }
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431699"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 7;
                    top: 196px;
                    left: calc(50% - 240px + 20px);
                    width: 16px;
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431699"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748305097 .tn-elem[data-elem-id="1715613431699"] {
                        top: 208px;
                        left: calc(50% - 160px + 15px);
                    }
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431690"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 8;
                    top: 135px;
                    left: calc(50% - 240px + 50px);
                    width: 234px;
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431690"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748305097 .tn-elem[data-elem-id="1715613431690"] {
                        top: 129px;
                        left: calc(50% - 160px + 45px);
                    }
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431703"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 9;
                    top: 20px;
                    left: calc(50% - 240px + 20px);
                    width: 360px;
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431703"] .tn-atom {
                    color: #ffffff;
                    font-size: 30px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748305097 .tn-elem[data-elem-id="1715613431703"] {
                        top: 16px;
                        left: calc(50% - 160px + 16px);
                        width: 288px;
                    }

                    #rec748305097 .tn-elem[data-elem-id="1715613431703"] .tn-atom {
                        font-size: 24px;
                    }
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431701"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 10;
                    top: 134px;
                    left: calc(50% - 240px + 20px);
                    width: 16px;
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431701"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748305097 .tn-elem[data-elem-id="1715613431701"] {
                        top: 128px;
                        left: calc(50% - 160px + 15px);
                    }
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431708"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 11;
                    top: 536px;
                    left: calc(50% - 240px + 20px);
                    width: 262px;
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431708"] .tn-atom {
                    color: #ffffff;
                    font-size: 30px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748305097 .tn-elem[data-elem-id="1715613431708"] {
                        top: 478px;
                        left: calc(50% - 160px + 14px);
                        width: 195px;
                    }

                    #rec748305097 .tn-elem[data-elem-id="1715613431708"] .tn-atom {
                        font-size: 24px;
                    }
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431713"] {
                    z-index: 12;
                    top: 236px;
                    left: calc(50% - 240px + 56px);
                    width: 369px;
                    height: 240px;
                }

                #rec748305097 .tn-elem[data-elem-id="1715613431713"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748305097 .tn-elem[data-elem-id="1715613431713"] {
                        top: 248px;
                        left: calc(50% - 160px + 16px);
                        width: 288px;
                        height: 189px;
                    }
                }

                #rec748305097 .tn-elem[data-elem-id="1715954937809"] {
                    z-index: 13;
                    top: 692px;
                    left: calc(50% - 240px + 20px);
                    width: 440px;
                    height: 273px;
                }

                #rec748305097 .tn-elem[data-elem-id="1715954937809"] .tn-atom {
                    border-width: 1px;
                    border-radius: 10px;
                    background-color: #fff705;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #daf73a;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748305097 .tn-elem[data-elem-id="1715954937809"] {
                        top: 669px;
                        left: calc(50% - 160px + 15px);
                        width: 289px;
                        height: 184px;
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="748305097" data-artboard-screens="320,480"
                    data-artboard-height="1000" data-artboard-valign="center" data-artboard-upscale="grid"
                    data-artboard-height-res-320="870">
                    <div class="t396__carrier" data-artboard-recid="748305097"></div>
                    <div class="t396__filter" data-artboard-recid="748305097"></div>
                    <div class='t396__elem tn-elem tn-elem__7483050971715613431683' data-elem-id='1715613431683'
                        data-elem-type='text' data-field-top-value="80" data-field-left-value="20"
                        data-field-width-value="440" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="55"
                        data-field-left-res-320-value="16" data-field-width-res-320-value="287">
                        <div class='tn-atom'field='tn_text_1715613431683'>Следите за вашими достижениями по количеству
                            пройденных шагов и сожженных калорий</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483050971715613431687' data-elem-id='1715613431687'
                        data-elem-type='text' data-field-top-value="596" data-field-left-value="20"
                        data-field-width-value="460" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="517"
                        data-field-left-res-320-value="15" data-field-width-res-320-value="289">
                        <div class='tn-atom'field='tn_text_1715613431687'>Создавайте свой индивидуальный план
                            тренировок и адаптируйте их под свой график вместе с UMFit. <br>Наше приложение позволит вам
                            строить график достижения ваших целей, улучшая физическую форму и укрепляя здоровье.</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483050971715613431693' data-elem-id='1715613431693'
                        data-elem-type='text' data-field-top-value="166" data-field-left-value="50"
                        data-field-width-value="379" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="160"
                        data-field-left-res-320-value="45" data-field-width-res-320-value="250">
                        <div class='tn-atom'field='tn_text_1715613431693'>вы сами регулируете вашу дневную активность
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483050971715613431695' data-elem-id='1715613431695'
                        data-elem-type='text' data-field-top-value="197" data-field-left-value="52"
                        data-field-width-value="291" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="209"
                        data-field-left-res-320-value="47">
                        <div class='tn-atom'field='tn_text_1715613431695'>мотивирует продолжать заниматься</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483050971715613431697' data-elem-id='1715613431697'
                        data-elem-type='text' data-field-top-value="165" data-field-left-value="20"
                        data-field-width-value="16" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="159"
                        data-field-left-res-320-value="15">
                        <div class='tn-atom'field='tn_text_1715613431697'>🔥</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483050971715613431699' data-elem-id='1715613431699'
                        data-elem-type='text' data-field-top-value="196" data-field-left-value="20"
                        data-field-width-value="16" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="208"
                        data-field-left-res-320-value="15">
                        <div class='tn-atom'field='tn_text_1715613431699'>👍🏻</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483050971715613431690' data-elem-id='1715613431690'
                        data-elem-type='text' data-field-top-value="135" data-field-left-value="50"
                        data-field-width-value="234" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="129"
                        data-field-left-res-320-value="45">
                        <div class='tn-atom'field='tn_text_1715613431690'>визуализирует ваш результат</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483050971715613431703' data-elem-id='1715613431703'
                        data-elem-type='text' data-field-top-value="20" data-field-left-value="20"
                        data-field-width-value="360" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="16"
                        data-field-left-res-320-value="16" data-field-width-res-320-value="288">
                        <div class='tn-atom'field='tn_text_1715613431703'>Отслеживание активности</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483050971715613431701' data-elem-id='1715613431701'
                        data-elem-type='text' data-field-top-value="134" data-field-left-value="20"
                        data-field-width-value="16" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="128"
                        data-field-left-res-320-value="15">
                        <div class='tn-atom'field='tn_text_1715613431701'>💪🏻</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483050971715613431708' data-elem-id='1715613431708'
                        data-elem-type='text' data-field-top-value="536" data-field-left-value="20"
                        data-field-width-value="262" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="478"
                        data-field-left-res-320-value="14" data-field-width-res-320-value="195">
                        <div class='tn-atom'field='tn_text_1715613431708'>План тренировок</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483050971715613431713' data-elem-id='1715613431713'
                        data-elem-type='shape' data-field-top-value="236" data-field-left-value="56"
                        data-field-height-value="240" data-field-width-value="369" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="248" data-field-left-res-320-value="16"
                        data-field-height-res-320-value="189" data-field-width-res-320-value="288">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild6263-3933-4730-b266-633038663532__group_88.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483050971715954937809' data-elem-id='1715954937809'
                        data-elem-type='shape' data-field-top-value="692" data-field-left-value="20"
                        data-field-height-value="273" data-field-width-value="440" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="669" data-field-left-res-320-value="15"
                        data-field-height-res-320-value="184" data-field-width-res-320-value="289">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild3530-3465-4239-b166-326634386365__rectangle_33.png"></div>
                    </div>
                </div>
            </div>
            <script>
                t_onReady(function() {
                    t_onFuncLoad('t396_init', function() {
                        t396_init('748305097');
                    });
                });
            </script><!-- /T396 -->
        </div>
        <div id="rec747718919" class="r t-rec t-screenmin-980px" style=" " data-animationappear="off"
            data-record-type="396" data-screen-min="980px"><!-- T396 -->
            <style>
                #rec747718919 .t396__artboard {
                    height: 700px;
                    background-color: #1f1f1f;
                }

                #rec747718919 .t396__filter {
                    height: 700px;
                }

                #rec747718919 .t396__carrier {
                    height: 700px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {

                    #rec747718919 .t396__artboard,
                    #rec747718919 .t396__filter,
                    #rec747718919 .t396__carrier {}

                    #rec747718919 .t396__filter {}

                    #rec747718919 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 959px) {

                    #rec747718919 .t396__artboard,
                    #rec747718919 .t396__filter,
                    #rec747718919 .t396__carrier {}

                    #rec747718919 .t396__filter {}

                    #rec747718919 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec747718919 .t396__artboard,
                    #rec747718919 .t396__filter,
                    #rec747718919 .t396__carrier {}

                    #rec747718919 .t396__filter {}

                    #rec747718919 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 479px) {

                    #rec747718919 .t396__artboard,
                    #rec747718919 .t396__filter,
                    #rec747718919 .t396__carrier {}

                    #rec747718919 .t396__filter {}

                    #rec747718919 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec747718919 .tn-elem[data-elem-id="1715613481554"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 2;
                    top: 190px;
                    left: calc(50% - 600px + 130px);
                    width: 400px;
                }

                #rec747718919 .tn-elem[data-elem-id="1715613481554"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747718919 .tn-elem[data-elem-id="1715613481558"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 3;
                    top: 521px;
                    left: calc(50% - 600px + 610px);
                    width: 419px;
                }

                #rec747718919 .tn-elem[data-elem-id="1715613481558"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747718919 .tn-elem[data-elem-id="1715613481561"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 4;
                    top: 134px;
                    left: calc(50% - 600px + 130px);
                    width: 204px;
                }

                #rec747718919 .tn-elem[data-elem-id="1715613481561"] .tn-atom {
                    color: #ffffff;
                    font-size: 30px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747718919 .tn-elem[data-elem-id="1715613481564"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 5;
                    top: 465px;
                    left: calc(50% - 600px + 610px);
                    width: 305px;
                }

                #rec747718919 .tn-elem[data-elem-id="1715613481564"] .tn-atom {
                    color: #ffffff;
                    font-size: 30px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747718919 .tn-elem[data-elem-id="1715613481568"] {
                    z-index: 6;
                    top: 80px;
                    left: calc(50% - 600px + 610px);
                    width: 460px;
                    height: 260px;
                }

                #rec747718919 .tn-elem[data-elem-id="1715613481568"] .tn-atom {
                    border-width: 1px;
                    border-radius: 10px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #daf73a;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747718919 .tn-elem[data-elem-id="1715613481571"] {
                    z-index: 7;
                    top: 420px;
                    left: calc(50% - 600px + 130px);
                    width: 380px;
                    height: 260px;
                }

                #rec747718919 .tn-elem[data-elem-id="1715613481571"] .tn-atom {
                    border-width: 1px;
                    border-radius: 10px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #daf73a;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="747718919"
                    data-artboard-screens="320,480,640,960,1200" data-artboard-height="700"
                    data-artboard-valign="center" data-artboard-upscale="grid">
                    <div class="t396__carrier" data-artboard-recid="747718919"></div>
                    <div class="t396__filter" data-artboard-recid="747718919"></div>
                    <div class='t396__elem tn-elem tn-elem__7477189191715613481554' data-elem-id='1715613481554'
                        data-elem-type='text' data-field-top-value="190" data-field-left-value="130"
                        data-field-width-value="400" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613481554'>Фиксируйте потребление калорий, планируйте
                            дневной рацион, питайтесь без переедания и включайте в рацион полезные и вкусные продукты.
                            Узнайте вашу дневную норму калорий для достижения целей.</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477189191715613481558' data-elem-id='1715613481558'
                        data-elem-type='text' data-field-top-value="521" data-field-left-value="610"
                        data-field-width-value="419" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613481558'>Полноценная работа с тренером через UMFit
                            мотивирует вас к росту, направляет к целям, предоставляет профессиональное сопровождение
                            даже на расстоянии, осуществляет корректировку вашей активности и питания, обеспечивает
                            сопровождение к здоровому образу жизни.</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477189191715613481561' data-elem-id='1715613481561'
                        data-elem-type='text' data-field-top-value="134" data-field-left-value="130"
                        data-field-width-value="204" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613481561'>План питания</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477189191715613481564' data-elem-id='1715613481564'
                        data-elem-type='text' data-field-top-value="465" data-field-left-value="610"
                        data-field-width-value="305" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613481564'>Connect с тренером</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477189191715613481568' data-elem-id='1715613481568'
                        data-elem-type='shape' data-field-top-value="80" data-field-left-value="610"
                        data-field-height-value="260" data-field-width-value="460" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild6461-3864-4165-a364-336433396636__rectangle_34.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477189191715613481571' data-elem-id='1715613481571'
                        data-elem-type='shape' data-field-top-value="420" data-field-left-value="130"
                        data-field-height-value="260" data-field-width-value="380" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild3835-6366-4661-b331-336563613265__rectangle_61.png"></div>
                    </div>
                </div>
            </div>
            <script>
                t_onReady(function() {
                    t_onFuncLoad('t396_init', function() {
                        t396_init('747718919');
                    });
                });
            </script><!-- /T396 -->
        </div>
        <div id="rec748309881" class="r t-rec t-screenmax-480px" style=" " data-animationappear="off"
            data-record-type="396" data-screen-max="480px"><!-- T396 -->
            <style>
                #rec748309881 .t396__artboard {
                    height: 1000px;
                    background-color: #1f1f1f;
                }

                #rec748309881 .t396__filter {
                    height: 1000px;
                }

                #rec748309881 .t396__carrier {
                    height: 1000px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 479px) {

                    #rec748309881 .t396__artboard,
                    #rec748309881 .t396__filter,
                    #rec748309881 .t396__carrier {
                        height: 800px;
                    }

                    #rec748309881 .t396__filter {}

                    #rec748309881 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec748309881 .tn-elem[data-elem-id="1715613481558"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 2;
                    top: 555px;
                    left: calc(50% - 240px + 20px);
                    width: 440px;
                }

                #rec748309881 .tn-elem[data-elem-id="1715613481558"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748309881 .tn-elem[data-elem-id="1715613481558"] {
                        top: 426px;
                        left: calc(50% - 160px + 16px);
                        width: 288px;
                    }
                }

                #rec748309881 .tn-elem[data-elem-id="1715613481564"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 3;
                    top: 499px;
                    left: calc(50% - 240px + 20px);
                    width: 305px;
                }

                #rec748309881 .tn-elem[data-elem-id="1715613481564"] .tn-atom {
                    color: #ffffff;
                    font-size: 30px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748309881 .tn-elem[data-elem-id="1715613481564"] {
                        top: 387px;
                        left: calc(50% - 160px + 15px);
                        width: 288px;
                    }

                    #rec748309881 .tn-elem[data-elem-id="1715613481564"] .tn-atom {
                        font-size: 24px;
                    }
                }

                #rec748309881 .tn-elem[data-elem-id="1715613481568"] {
                    z-index: 4;
                    top: 179px;
                    left: calc(50% - 240px + 20px);
                    width: 440px;
                    height: 260px;
                }

                #rec748309881 .tn-elem[data-elem-id="1715613481568"] .tn-atom {
                    border-width: 1px;
                    border-radius: 6px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #daf73a;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748309881 .tn-elem[data-elem-id="1715613481568"] {
                        top: 187px;
                        left: calc(50% - 160px + 16px);
                        width: 288px;
                        height: 160px;
                    }
                }

                #rec748309881 .tn-elem[data-elem-id="1715613481571"] {
                    z-index: 5;
                    top: 689px;
                    left: calc(50% - 240px + 20px);
                    width: 440px;
                    height: 297px;
                }

                #rec748309881 .tn-elem[data-elem-id="1715613481571"] .tn-atom {
                    border-width: 1px;
                    border-radius: 6px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #daf73a;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748309881 .tn-elem[data-elem-id="1715613481571"] {
                        top: 594px;
                        left: calc(50% - 160px + 16px);
                        width: 288px;
                        height: 160px;
                    }
                }

                #rec748309881 .tn-elem[data-elem-id="1715704555601"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 6;
                    top: 83px;
                    left: calc(50% - 240px + 20px);
                    width: 400px;
                }

                #rec748309881 .tn-elem[data-elem-id="1715704555601"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748309881 .tn-elem[data-elem-id="1715704555601"] {
                        top: 57px;
                        left: calc(50% - 160px + 16px);
                        width: 288px;
                    }
                }

                #rec748309881 .tn-elem[data-elem-id="1715704555606"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 7;
                    top: 27px;
                    left: calc(50% - 240px + 20px);
                    width: 204px;
                }

                #rec748309881 .tn-elem[data-elem-id="1715704555606"] .tn-atom {
                    color: #ffffff;
                    font-size: 30px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748309881 .tn-elem[data-elem-id="1715704555606"] {
                        top: 18px;
                        left: calc(50% - 160px + 16px);
                    }

                    #rec748309881 .tn-elem[data-elem-id="1715704555606"] .tn-atom {
                        font-size: 24px;
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="748309881" data-artboard-screens="320,480"
                    data-artboard-height="1000" data-artboard-valign="center" data-artboard-upscale="grid"
                    data-artboard-height-res-320="800">
                    <div class="t396__carrier" data-artboard-recid="748309881"></div>
                    <div class="t396__filter" data-artboard-recid="748309881"></div>
                    <div class='t396__elem tn-elem tn-elem__7483098811715613481558' data-elem-id='1715613481558'
                        data-elem-type='text' data-field-top-value="555" data-field-left-value="20"
                        data-field-width-value="440" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="426"
                        data-field-left-res-320-value="16" data-field-width-res-320-value="288">
                        <div class='tn-atom'field='tn_text_1715613481558'>Полноценная работа с тренером через UMFit
                            мотивирует вас к росту, направляет к целям, предоставляет профессиональное сопровождение
                            даже на расстоянии, осуществляет корректировку вашей активности и питания, обеспечивает
                            сопровождение<br>к здоровому образу жизни.</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483098811715613481564' data-elem-id='1715613481564'
                        data-elem-type='text' data-field-top-value="499" data-field-left-value="20"
                        data-field-width-value="305" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="387"
                        data-field-left-res-320-value="15" data-field-width-res-320-value="288">
                        <div class='tn-atom'field='tn_text_1715613481564'>Connect с тренером</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483098811715613481568' data-elem-id='1715613481568'
                        data-elem-type='shape' data-field-top-value="179" data-field-left-value="20"
                        data-field-height-value="260" data-field-width-value="440" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="187" data-field-left-res-320-value="16"
                        data-field-height-res-320-value="160" data-field-width-res-320-value="288">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild3064-3439-4335-b861-373261356236__rectangle_34.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483098811715613481571' data-elem-id='1715613481571'
                        data-elem-type='shape' data-field-top-value="689" data-field-left-value="20"
                        data-field-height-value="297" data-field-width-value="440" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="594" data-field-left-res-320-value="16"
                        data-field-height-res-320-value="160" data-field-width-res-320-value="288">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild6334-6537-4036-b136-306166353933__rectangle_61.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483098811715704555601' data-elem-id='1715704555601'
                        data-elem-type='text' data-field-top-value="83" data-field-left-value="20"
                        data-field-width-value="400" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="57"
                        data-field-left-res-320-value="16" data-field-width-res-320-value="288">
                        <div class='tn-atom'field='tn_text_1715704555601'>Фиксируйте потребление калорий, планируйте
                            дневной рацион, питайтесь без переедания и включайте в рацион полезные и вкусные продукты.
                            Узнайте вашу дневную норму калорий для достижения целей.</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483098811715704555606' data-elem-id='1715704555606'
                        data-elem-type='text' data-field-top-value="27" data-field-left-value="20"
                        data-field-width-value="204" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="18"
                        data-field-left-res-320-value="16">
                        <div class='tn-atom'field='tn_text_1715704555606'>План питания</div>
                    </div>
                </div>
            </div>
            <script>
                t_onReady(function() {
                    t_onFuncLoad('t396_init', function() {
                        t396_init('748309881');
                    });
                });
            </script><!-- /T396 -->
        </div>
        <div id="rec747719374" class="r t-rec t-screenmin-980px" style=" " data-animationappear="off"
            data-record-type="396" data-screen-min="980px"><!-- T396 -->
            <style>
                #rec747719374 .t396__artboard {
                    height: 1092px;
                    background-color: #1f1f1f;
                }

                #rec747719374 .t396__filter {
                    height: 1092px;
                }

                #rec747719374 .t396__carrier {
                    height: 1092px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {

                    #rec747719374 .t396__artboard,
                    #rec747719374 .t396__filter,
                    #rec747719374 .t396__carrier {}

                    #rec747719374 .t396__filter {}

                    #rec747719374 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 959px) {

                    #rec747719374 .t396__artboard,
                    #rec747719374 .t396__filter,
                    #rec747719374 .t396__carrier {}

                    #rec747719374 .t396__filter {}

                    #rec747719374 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec747719374 .t396__artboard,
                    #rec747719374 .t396__filter,
                    #rec747719374 .t396__carrier {}

                    #rec747719374 .t396__filter {}

                    #rec747719374 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 479px) {

                    #rec747719374 .t396__artboard,
                    #rec747719374 .t396__filter,
                    #rec747719374 .t396__carrier {}

                    #rec747719374 .t396__filter {}

                    #rec747719374 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec747719374 .tn-elem[data-elem-id="1715613534369"] {
                    z-index: 2;
                    top: 100px;
                    left: calc(50% - 600px + 130px);
                    width: 940px;
                    height: 100px;
                }

                #rec747719374 .tn-elem[data-elem-id="1715613534369"] .tn-atom {
                    border-radius: 10px;
                    background-color: #daf73a;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747719374 .tn-elem[data-elem-id="1715613534371"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 3;
                    top: 126px;
                    left: calc(50% - 600px + 319px);
                    width: 562px;
                }

                #rec747719374 .tn-elem[data-elem-id="1715613534371"] .tn-atom {
                    color: #000000;
                    font-size: 40px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747719374 .tn-elem[data-elem-id="1715613534382"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 4;
                    top: 390px;
                    left: calc(50% - 600px + 130px);
                    width: 440px;
                }

                #rec747719374 .tn-elem[data-elem-id="1715613534382"] .tn-atom {
                    color: #ffffff;
                    font-size: 30px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747719374 .tn-elem[data-elem-id="1715613534387"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 5;
                    top: 446px;
                    left: calc(50% - 600px + 130px);
                    width: 800px;
                }

                #rec747719374 .tn-elem[data-elem-id="1715613534387"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747719374 .tn-elem[data-elem-id="1715613534392"] {
                    z-index: 6;
                    top: 581px;
                    left: calc(50% - 600px + 130px);
                    width: 940px;
                    height: 511px;
                }

                #rec747719374 .tn-elem[data-elem-id="1715613534392"] .tn-atom {
                    border-radius: 16px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747719374 .tn-elem[data-elem-id="1715613550761"] {
                    color: #000000;
                    text-align: center;
                    z-index: 7;
                    top: 234px;
                    left: calc(50% - 600px + 479px);
                    width: 280px;
                    height: 50px;
                }

                #rec747719374 .tn-elem[data-elem-id="1715613550761"] .tn-atom {
                    color: #000000;
                    font-size: 24px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    border-radius: 3px;
                    background-color: #daf73a;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                    box-shadow: 4px 4px 30px 0px rgba(218, 247, 58, 0.3);
                }

                @media (hover),
                (min-width:0\0) {
                    #rec747719374 .tn-elem[data-elem-id="1715613550761"] .tn-atom:hover {
                        background-color: #1f1f1f;
                        background-image: none;
                    }

                    #rec747719374 .tn-elem[data-elem-id="1715613550761"] .tn-atom:hover {
                        color: #daf73a;
                    }
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="747719374"
                    data-artboard-screens="320,480,640,960,1200" data-artboard-height="1092"
                    data-artboard-valign="center" data-artboard-upscale="grid">
                    <div class="t396__carrier" data-artboard-recid="747719374"></div>
                    <div class="t396__filter" data-artboard-recid="747719374"></div>
                    <div class='t396__elem tn-elem tn-elem__7477193741715613534369' data-elem-id='1715613534369'
                        data-elem-type='shape' data-field-top-value="100" data-field-left-value="130"
                        data-field-height-value="100" data-field-width-value="940" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477193741715613534371' data-elem-id='1715613534371'
                        data-elem-type='text' data-field-top-value="126" data-field-left-value="319"
                        data-field-width-value="562" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613534371'>Будь первым и присоединяйся! </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477193741715613534382' data-elem-id='1715613534382'
                        data-elem-type='text' data-field-top-value="390" data-field-left-value="130"
                        data-field-width-value="440" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613534382'>Технология будущего WEB3.0</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477193741715613534387' data-elem-id='1715613534387'
                        data-elem-type='text' data-field-top-value="446" data-field-left-value="130"
                        data-field-width-value="800" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <div class='tn-atom'field='tn_text_1715613534387'>UMFit -это приложение, которое вознаграждает
                            вас за вашу физическую активность валютой нового поколения, которую вы можете потратить на
                            интересные продукты внутри нашей экосистемы.<br><br>Почему? Потому что мы верим, что спорт
                            улучшает жизнь людей и приносит пользу обществу. </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477193741715613534392' data-elem-id='1715613534392'
                        data-elem-type='shape' data-field-top-value="581" data-field-left-value="130"
                        data-field-height-value="511" data-field-width-value="940" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild6561-3063-4236-a466-623538643337__rectangle_58.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477193741715613550761' data-elem-id='1715613550761'
                        data-elem-type='button' data-field-top-value="234" data-field-left-value="479"
                        data-field-height-value="50" data-field-width-value="280" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px">
                        <a href="{{ route('quiz') }}" class='tn-atom'>Зарегистрироваться</a>
                    </div>
                </div>
            </div>
            <script>
                t_onReady(function() {
                    t_onFuncLoad('t396_init', function() {
                        t396_init('747719374');
                    });
                });
            </script><!-- /T396 -->
        </div>
        <div id="rec748319095" class="r t-rec t-screenmax-480px" style=" " data-animationappear="off"
            data-record-type="396" data-screen-max="480px"><!-- T396 -->
            <style>
                #rec748319095 .t396__artboard {
                    height: 700px;
                    background-color: #1f1f1f;
                }

                #rec748319095 .t396__filter {
                    height: 700px;
                }

                #rec748319095 .t396__carrier {
                    height: 700px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 479px) {

                    #rec748319095 .t396__artboard,
                    #rec748319095 .t396__filter,
                    #rec748319095 .t396__carrier {}

                    #rec748319095 .t396__filter {}

                    #rec748319095 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec748319095 .tn-elem[data-elem-id="1715613534369"] {
                    z-index: 2;
                    top: 20px;
                    left: calc(50% - 240px + 20px);
                    width: 440px;
                    height: 80px;
                }

                #rec748319095 .tn-elem[data-elem-id="1715613534369"] .tn-atom {
                    border-radius: 10px;
                    background-color: #daf73a;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748319095 .tn-elem[data-elem-id="1715613534369"] {
                        top: 20px;
                        left: calc(50% - 160px + 16px);
                        width: 288px;
                        height: 80px;
                        border-radius: 6px;
                    }

                    #rec748319095 .tn-elem[data-elem-id="1715613534369"] .tn-atom {
                        border-radius: 6px;
                    }
                }

                #rec748319095 .tn-elem[data-elem-id="1715613534371"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 3;
                    top: 43px;
                    left: calc(50% - 240px + 40px);
                    width: 399px;
                }

                #rec748319095 .tn-elem[data-elem-id="1715613534371"] .tn-atom {
                    color: #000000;
                    font-size: 28px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748319095 .tn-elem[data-elem-id="1715613534371"] {
                        top: 31px;
                        left: calc(50% - 160px + 61px);
                        width: 201px;
                    }

                    #rec748319095 .tn-elem[data-elem-id="1715613534371"] {
                        text-align: center;
                    }

                    #rec748319095 .tn-elem[data-elem-id="1715613534371"] .tn-atom {
                        font-size: 24px;
                    }
                }

                #rec748319095 .tn-elem[data-elem-id="1715613534382"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 4;
                    top: 230px;
                    left: calc(50% - 240px + 21px);
                    width: 440px;
                }

                #rec748319095 .tn-elem[data-elem-id="1715613534382"] .tn-atom {
                    color: #ffffff;
                    font-size: 30px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748319095 .tn-elem[data-elem-id="1715613534382"] {
                        top: 220px;
                        left: calc(50% - 160px + 16px);
                        width: 288px;
                    }

                    #rec748319095 .tn-elem[data-elem-id="1715613534382"] .tn-atom {
                        font-size: 24px;
                    }
                }

                #rec748319095 .tn-elem[data-elem-id="1715613534387"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 5;
                    top: 286px;
                    left: calc(50% - 240px + 20px);
                    width: 440px;
                }

                #rec748319095 .tn-elem[data-elem-id="1715613534387"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748319095 .tn-elem[data-elem-id="1715613534387"] {
                        top: 288px;
                        left: calc(50% - 160px + 16px);
                        width: 288px;
                    }
                }

                #rec748319095 .tn-elem[data-elem-id="1715613534392"] {
                    z-index: 6;
                    top: 439px;
                    left: calc(50% - 240px + 20px);
                    width: 440px;
                    height: 230px;
                }

                #rec748319095 .tn-elem[data-elem-id="1715613534392"] .tn-atom {
                    border-radius: 10px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748319095 .tn-elem[data-elem-id="1715613534392"] {
                        top: 494px;
                        left: calc(50% - 160px + 16px);
                        width: 287px;
                        height: 171px;
                        border-radius: 6px;
                    }

                    #rec748319095 .tn-elem[data-elem-id="1715613534392"] .tn-atom {
                        border-radius: 6px;
                    }
                }

                #rec748319095 .tn-elem[data-elem-id="1715613550761"] {
                    color: #000000;
                    text-align: center;
                    z-index: 7;
                    top: 120px;
                    left: calc(50% - 240px + 103px);
                    width: 280px;
                    height: 50px;
                }

                #rec748319095 .tn-elem[data-elem-id="1715613550761"] .tn-atom {
                    color: #000000;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    border-radius: 3px;
                    background-color: #daf73a;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                    box-shadow: 4px 4px 30px 0px rgba(218, 247, 58, 0.3);
                }

                @media (hover),
                (min-width:0\0) {
                    #rec748319095 .tn-elem[data-elem-id="1715613550761"] .tn-atom:hover {
                        background-color: #1f1f1f;
                        background-image: none;
                    }

                    #rec748319095 .tn-elem[data-elem-id="1715613550761"] .tn-atom:hover {
                        color: #daf73a;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec748319095 .tn-elem[data-elem-id="1715613550761"] {
                        top: 120px;
                        left: calc(50% - 160px + 60px);
                        width: 200px;
                        height: 40px;
                    }

                    #rec748319095 .tn-elem[data-elem-id="1715613550761"] .tn-atom {
                        font-size: 16px;
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="748319095" data-artboard-screens="320,480"
                    data-artboard-height="700" data-artboard-valign="center" data-artboard-upscale="grid">
                    <div class="t396__carrier" data-artboard-recid="748319095"></div>
                    <div class="t396__filter" data-artboard-recid="748319095"></div>
                    <div class='t396__elem tn-elem tn-elem__7483190951715613534369' data-elem-id='1715613534369'
                        data-elem-type='shape' data-field-top-value="20" data-field-left-value="20"
                        data-field-height-value="80" data-field-width-value="440" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="20" data-field-left-res-320-value="16"
                        data-field-height-res-320-value="80" data-field-width-res-320-value="288">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483190951715613534371' data-elem-id='1715613534371'
                        data-elem-type='text' data-field-top-value="43" data-field-left-value="40"
                        data-field-width-value="399" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="31"
                        data-field-left-res-320-value="61" data-field-width-res-320-value="201">
                        <div class='tn-atom'field='tn_text_1715613534371'>Будь первым и присоединяйся!</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483190951715613534382' data-elem-id='1715613534382'
                        data-elem-type='text' data-field-top-value="230" data-field-left-value="21"
                        data-field-width-value="440" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="220"
                        data-field-left-res-320-value="16" data-field-width-res-320-value="288">
                        <div class='tn-atom'field='tn_text_1715613534382'>Технология будущего WEB3.0</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483190951715613534387' data-elem-id='1715613534387'
                        data-elem-type='text' data-field-top-value="286" data-field-left-value="20"
                        data-field-width-value="440" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="288"
                        data-field-left-res-320-value="16" data-field-width-res-320-value="288">
                        <div class='tn-atom'field='tn_text_1715613534387'>UMFit -это приложение, которое вознаграждает
                            вас за вашу физическую активность валютой нового поколения, которую вы можете потратить на
                            интересные продукты внутри нашей экосистемы.<br><br>Почему? Потому что мы верим, что спорт
                            улучшает жизнь людей и приносит пользу обществу. </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483190951715613534392' data-elem-id='1715613534392'
                        data-elem-type='shape' data-field-top-value="439" data-field-left-value="20"
                        data-field-height-value="230" data-field-width-value="440" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="494" data-field-left-res-320-value="16"
                        data-field-height-res-320-value="171" data-field-width-res-320-value="287">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild3530-6564-4631-b937-643834613461__rectangle_58_1.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483190951715613550761' data-elem-id='1715613550761'
                        data-elem-type='button' data-field-top-value="120" data-field-left-value="103"
                        data-field-height-value="50" data-field-width-value="280" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="120" data-field-left-res-320-value="60"
                        data-field-height-res-320-value="40" data-field-width-res-320-value="200">
                        <a href="{{ route('quiz') }}" class='tn-atom'>Зарегистрироваться</a>
                    </div>
                </div>
            </div>
            <script>
                t_onReady(function() {
                    t_onFuncLoad('t396_init', function() {
                        t396_init('748319095');
                    });
                });
            </script><!-- /T396 -->
        </div>
        <div id="rec747739227" class="r t-rec t-screenmin-980px" style=" " data-animationappear="off"
            data-record-type="396" data-screen-min="980px"><!-- T396 -->
            <style>
                #rec747739227 .t396__artboard {
                    height: 216px;
                    background-color: #1f1f1f;
                }

                #rec747739227 .t396__filter {
                    height: 216px;
                }

                #rec747739227 .t396__carrier {
                    height: 216px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {

                    #rec747739227 .t396__artboard,
                    #rec747739227 .t396__filter,
                    #rec747739227 .t396__carrier {
                        height: 1050px;
                    }

                    #rec747739227 .t396__filter {}

                    #rec747739227 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 959px) {

                    #rec747739227 .t396__artboard,
                    #rec747739227 .t396__filter,
                    #rec747739227 .t396__carrier {
                        height: 1170px;
                    }

                    #rec747739227 .t396__filter {}

                    #rec747739227 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec747739227 .t396__artboard,
                    #rec747739227 .t396__filter,
                    #rec747739227 .t396__carrier {}

                    #rec747739227 .t396__filter {}

                    #rec747739227 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 479px) {

                    #rec747739227 .t396__artboard,
                    #rec747739227 .t396__filter,
                    #rec747739227 .t396__carrier {
                        height: 1370px;
                    }

                    #rec747739227 .t396__filter {}

                    #rec747739227 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec747739227 .tn-elem[data-elem-id="1647277026900"] {
                    color: #ffffff;
                    z-index: 2;
                    top: 41px;
                    left: calc(50% - 600px + 179px);
                    width: 510px;
                }

                #rec747739227 .tn-elem[data-elem-id="1647277026900"] .tn-atom {
                    color: #ffffff;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.35;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747739227 .tn-elem[data-elem-id="1647277026900"] {
                        top: 392px;
                        left: calc(50% - 480px + 59px);
                        width: 410px;
                    }

                    #rec747739227 .tn-elem[data-elem-id="1647277026900"] .tn-atom {
                        font-size: 18px;
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec747739227 .tn-elem[data-elem-id="1647277026900"] {
                        top: 308px;
                        left: calc(50% - 320px + 70px);
                        width: 550px;
                    }

                    #rec747739227 .tn-elem[data-elem-id="1647277026900"] .tn-atom {
                        font-size: 16px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec747739227 .tn-elem[data-elem-id="1647277026900"] {
                        top: 248px;
                        left: calc(50% - 240px + 69px);
                        width: 390px;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec747739227 .tn-elem[data-elem-id="1647277026900"] {
                        top: 276px;
                        left: calc(50% - 160px + 69px);
                        width: 230px;
                    }
                }

                #rec747739227 .tn-elem[data-elem-id="1647369046226"] {
                    z-index: 3;
                    top: 40px;
                    left: calc(50% - 600px + 130px);
                    width: 29px;
                    height: 29px;
                }

                #rec747739227 .tn-elem[data-elem-id="1647369046226"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747739227 .tn-elem[data-elem-id="1647369046226"] {
                        top: 392px;
                        left: calc(50% - 480px + 10px);
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec747739227 .tn-elem[data-elem-id="1647369046226"] {
                        top: 308px;
                        left: calc(50% - 320px + 20px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec747739227 .tn-elem[data-elem-id="1647369046226"] {
                        top: 248px;
                        left: calc(50% - 240px + 20px);
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec747739227 .tn-elem[data-elem-id="1647369046226"] {
                        top: 276px;
                        left: calc(50% - 160px + 20px);
                    }
                }

                #rec747739227 .tn-elem[data-elem-id="1647369208827"] {
                    z-index: 4;
                    top: 89px;
                    left: calc(50% - 600px + 130px);
                    width: 29px;
                    height: 29px;
                }

                #rec747739227 .tn-elem[data-elem-id="1647369208827"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747739227 .tn-elem[data-elem-id="1647369208827"] {
                        top: 559px;
                        left: calc(50% - 480px + 10px);
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec747739227 .tn-elem[data-elem-id="1647369208827"] {
                        top: 553px;
                        left: calc(50% - 320px + 20px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec747739227 .tn-elem[data-elem-id="1647369208827"] {
                        top: 523px;
                        left: calc(50% - 240px + 20px);
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec747739227 .tn-elem[data-elem-id="1647369208827"] {
                        top: 611px;
                        left: calc(50% - 160px + 20px);
                    }
                }

                #rec747739227 .tn-elem[data-elem-id="1715616249623"] {
                    color: #ffffff;
                    z-index: 5;
                    top: 90px;
                    left: calc(50% - 600px + 179px);
                    width: 510px;
                }

                #rec747739227 .tn-elem[data-elem-id="1715616249623"] .tn-atom {
                    color: #ffffff;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.35;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747739227 .tn-elem[data-elem-id="1715616249623"] {
                        top: 392px;
                        left: calc(50% - 480px + 59px);
                        width: 410px;
                    }

                    #rec747739227 .tn-elem[data-elem-id="1715616249623"] .tn-atom {
                        font-size: 18px;
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec747739227 .tn-elem[data-elem-id="1715616249623"] {
                        top: 308px;
                        left: calc(50% - 320px + 70px);
                        width: 550px;
                    }

                    #rec747739227 .tn-elem[data-elem-id="1715616249623"] .tn-atom {
                        font-size: 16px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec747739227 .tn-elem[data-elem-id="1715616249623"] {
                        top: 248px;
                        left: calc(50% - 240px + 69px);
                        width: 390px;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec747739227 .tn-elem[data-elem-id="1715616249623"] {
                        top: 276px;
                        left: calc(50% - 160px + 69px);
                        width: 230px;
                    }
                }

                #rec747739227 .tn-elem[data-elem-id="1647369209730"] {
                    z-index: 6;
                    top: 138px;
                    left: calc(50% - 600px + 130px);
                    width: 29px;
                    height: 29px;
                }

                #rec747739227 .tn-elem[data-elem-id="1647369209730"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747739227 .tn-elem[data-elem-id="1647369209730"] {
                        top: 729px;
                        left: calc(50% - 480px + 10px);
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec747739227 .tn-elem[data-elem-id="1647369209730"] {
                        top: 799px;
                        left: calc(50% - 320px + 20px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec747739227 .tn-elem[data-elem-id="1647369209730"] {
                        top: 797px;
                        left: calc(50% - 240px + 20px);
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec747739227 .tn-elem[data-elem-id="1647369209730"] {
                        top: 967px;
                        left: calc(50% - 160px + 20px);
                    }
                }

                #rec747739227 .tn-elem[data-elem-id="1715616260331"] {
                    color: #ffffff;
                    z-index: 7;
                    top: 139px;
                    left: calc(50% - 600px + 179px);
                    width: 510px;
                }

                #rec747739227 .tn-elem[data-elem-id="1715616260331"] .tn-atom {
                    color: #ffffff;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.35;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747739227 .tn-elem[data-elem-id="1715616260331"] {
                        top: 392px;
                        left: calc(50% - 480px + 59px);
                        width: 410px;
                    }

                    #rec747739227 .tn-elem[data-elem-id="1715616260331"] .tn-atom {
                        font-size: 18px;
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec747739227 .tn-elem[data-elem-id="1715616260331"] {
                        top: 308px;
                        left: calc(50% - 320px + 70px);
                        width: 550px;
                    }

                    #rec747739227 .tn-elem[data-elem-id="1715616260331"] .tn-atom {
                        font-size: 16px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec747739227 .tn-elem[data-elem-id="1715616260331"] {
                        top: 248px;
                        left: calc(50% - 240px + 69px);
                        width: 390px;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec747739227 .tn-elem[data-elem-id="1715616260331"] {
                        top: 276px;
                        left: calc(50% - 160px + 69px);
                        width: 230px;
                    }
                }

                #rec747739227 .tn-elem[data-elem-id="1715616282471"] {
                    z-index: 8;
                    top: 187px;
                    left: calc(50% - 600px + 130px);
                    width: 29px;
                    height: 29px;
                }

                #rec747739227 .tn-elem[data-elem-id="1715616282471"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747739227 .tn-elem[data-elem-id="1715616282471"] {
                        top: 729px;
                        left: calc(50% - 480px + 10px);
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec747739227 .tn-elem[data-elem-id="1715616282471"] {
                        top: 799px;
                        left: calc(50% - 320px + 20px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec747739227 .tn-elem[data-elem-id="1715616282471"] {
                        top: 797px;
                        left: calc(50% - 240px + 20px);
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec747739227 .tn-elem[data-elem-id="1715616282471"] {
                        top: 967px;
                        left: calc(50% - 160px + 20px);
                    }
                }

                #rec747739227 .tn-elem[data-elem-id="1715616313784"] {
                    color: #ffffff;
                    z-index: 9;
                    top: 188px;
                    left: calc(50% - 600px + 179px);
                    width: 728px;
                }

                #rec747739227 .tn-elem[data-elem-id="1715616313784"] .tn-atom {
                    color: #ffffff;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.35;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747739227 .tn-elem[data-elem-id="1715616313784"] {
                        top: 392px;
                        left: calc(50% - 480px + 59px);
                        width: 410px;
                    }

                    #rec747739227 .tn-elem[data-elem-id="1715616313784"] .tn-atom {
                        font-size: 18px;
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec747739227 .tn-elem[data-elem-id="1715616313784"] {
                        top: 308px;
                        left: calc(50% - 320px + 70px);
                        width: 550px;
                    }

                    #rec747739227 .tn-elem[data-elem-id="1715616313784"] .tn-atom {
                        font-size: 16px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec747739227 .tn-elem[data-elem-id="1715616313784"] {
                        top: 248px;
                        left: calc(50% - 240px + 69px);
                        width: 390px;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec747739227 .tn-elem[data-elem-id="1715616313784"] {
                        top: 276px;
                        left: calc(50% - 160px + 69px);
                        width: 230px;
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="747739227"
                    data-artboard-screens="320,480,640,960,1200" data-artboard-height="216"
                    data-artboard-valign="center" data-artboard-upscale="grid" data-artboard-height-res-320="1370"
                    data-artboard-height-res-640="1170" data-artboard-height-res-960="1050">
                    <div class="t396__carrier" data-artboard-recid="747739227"></div>
                    <div class="t396__filter" data-artboard-recid="747739227"></div>
                    <div class='t396__elem tn-elem tn-elem__7477392271647277026900 t-animate'
                        data-elem-id='1647277026900' data-elem-type='text' data-field-top-value="41"
                        data-field-left-value="179" data-field-width-value="510" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-style="fadein" data-animate-duration="1" data-animate-prx="scroll"
                        data-field-top-res-320-value="276" data-field-left-res-320-value="69"
                        data-field-width-res-320-value="230" data-field-top-res-480-value="248"
                        data-field-left-res-480-value="69" data-field-width-res-480-value="390"
                        data-field-top-res-640-value="308" data-field-left-res-640-value="70"
                        data-field-width-res-640-value="550" data-field-top-res-960-value="392"
                        data-field-left-res-960-value="59" data-field-width-res-960-value="410">
                        <div class='tn-atom'field='tn_text_1647277026900'>превратите свою активность в цифровой актив
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477392271647369046226 t-animate'
                        data-elem-id='1647369046226' data-elem-type='shape' data-field-top-value="40"
                        data-field-left-value="130" data-field-height-value="29" data-field-width-value="29"
                        data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-style="fadein" data-animate-duration="1"
                        data-animate-prx="scroll" data-field-top-res-320-value="276"
                        data-field-left-res-320-value="20" data-field-top-res-480-value="248"
                        data-field-left-res-480-value="20" data-field-top-res-640-value="308"
                        data-field-left-res-640-value="20" data-field-top-res-960-value="392"
                        data-field-left-res-960-value="10">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild3831-6138-4435-a462-363232356335__check.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477392271647369208827 t-animate'
                        data-elem-id='1647369208827' data-elem-type='shape' data-field-top-value="89"
                        data-field-left-value="130" data-field-height-value="29" data-field-width-value="29"
                        data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-style="fadein" data-animate-duration="1.3"
                        data-animate-prx="scroll" data-field-top-res-320-value="611"
                        data-field-left-res-320-value="20" data-field-top-res-480-value="523"
                        data-field-left-res-480-value="20" data-field-top-res-640-value="553"
                        data-field-left-res-640-value="20" data-field-top-res-960-value="559"
                        data-field-left-res-960-value="10">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild6331-6362-4737-b136-323633356638__check.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477392271715616249623 t-animate'
                        data-elem-id='1715616249623' data-elem-type='text' data-field-top-value="90"
                        data-field-left-value="179" data-field-width-value="510" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-style="fadein" data-animate-duration="1.3" data-animate-prx="scroll"
                        data-field-top-res-320-value="276" data-field-left-res-320-value="69"
                        data-field-width-res-320-value="230" data-field-top-res-480-value="248"
                        data-field-left-res-480-value="69" data-field-width-res-480-value="390"
                        data-field-top-res-640-value="308" data-field-left-res-640-value="70"
                        data-field-width-res-640-value="550" data-field-top-res-960-value="392"
                        data-field-left-res-960-value="59" data-field-width-res-960-value="410">
                        <div class='tn-atom'field='tn_text_1715616249623'>разные виды тренировок в отдельных блоках
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477392271647369209730 t-animate'
                        data-elem-id='1647369209730' data-elem-type='shape' data-field-top-value="138"
                        data-field-left-value="130" data-field-height-value="29" data-field-width-value="29"
                        data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-style="fadein" data-animate-duration="1.6"
                        data-animate-prx="scroll" data-field-top-res-320-value="967"
                        data-field-left-res-320-value="20" data-field-top-res-480-value="797"
                        data-field-left-res-480-value="20" data-field-top-res-640-value="799"
                        data-field-left-res-640-value="20" data-field-top-res-960-value="729"
                        data-field-left-res-960-value="10">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild6633-6164-4266-b861-393938356437__check.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477392271715616260331 t-animate'
                        data-elem-id='1715616260331' data-elem-type='text' data-field-top-value="139"
                        data-field-left-value="179" data-field-width-value="510" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-style="fadein" data-animate-duration="1.6" data-animate-prx="scroll"
                        data-field-top-res-320-value="276" data-field-left-res-320-value="69"
                        data-field-width-res-320-value="230" data-field-top-res-480-value="248"
                        data-field-left-res-480-value="69" data-field-width-res-480-value="390"
                        data-field-top-res-640-value="308" data-field-left-res-640-value="70"
                        data-field-width-res-640-value="550" data-field-top-res-960-value="392"
                        data-field-left-res-960-value="59" data-field-width-res-960-value="410">
                        <div class='tn-atom'field='tn_text_1715616260331'>доступ к IT-продуктам компании</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477392271715616282471 t-animate'
                        data-elem-id='1715616282471' data-elem-type='shape' data-field-top-value="187"
                        data-field-left-value="130" data-field-height-value="29" data-field-width-value="29"
                        data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-style="fadein" data-animate-duration="1.9"
                        data-animate-prx="scroll" data-field-top-res-320-value="967"
                        data-field-left-res-320-value="20" data-field-top-res-480-value="797"
                        data-field-left-res-480-value="20" data-field-top-res-640-value="799"
                        data-field-left-res-640-value="20" data-field-top-res-960-value="729"
                        data-field-left-res-960-value="10">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild6633-6164-4266-b861-393938356437__check.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477392271715616313784 t-animate'
                        data-elem-id='1715616313784' data-elem-type='text' data-field-top-value="188"
                        data-field-left-value="179" data-field-width-value="728" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-style="fadein" data-animate-duration="1.9" data-animate-prx="scroll"
                        data-field-top-res-320-value="276" data-field-left-res-320-value="69"
                        data-field-width-res-320-value="230" data-field-top-res-480-value="248"
                        data-field-left-res-480-value="69" data-field-width-res-480-value="390"
                        data-field-top-res-640-value="308" data-field-left-res-640-value="70"
                        data-field-width-res-640-value="550" data-field-top-res-960-value="392"
                        data-field-left-res-960-value="59" data-field-width-res-960-value="410">
                        <div class='tn-atom'field='tn_text_1715616313784'>наращивайте ваш рейтинг внутри приложения и
                            становитесь лучшим спортсменом</div>
                    </div>
                </div>
            </div>
            <script>
                t_onReady(function() {
                    t_onFuncLoad('t396_init', function() {
                        t396_init('747739227');
                    });
                });
            </script><!-- /T396 -->
        </div>
        <div id="rec748324053" class="r t-rec t-screenmax-480px" style=" " data-animationappear="off"
            data-record-type="396" data-screen-max="480px"><!-- T396 -->
            <style>
                #rec748324053 .t396__artboard {
                    height: 350px;
                    background-color: #1f1f1f;
                }

                #rec748324053 .t396__filter {
                    height: 350px;
                }

                #rec748324053 .t396__carrier {
                    height: 350px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 479px) {

                    #rec748324053 .t396__artboard,
                    #rec748324053 .t396__filter,
                    #rec748324053 .t396__carrier {
                        height: 250px;
                    }

                    #rec748324053 .t396__filter {}

                    #rec748324053 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec748324053 .tn-elem[data-elem-id="1647277026900"] {
                    color: #ffffff;
                    z-index: 2;
                    top: 17px;
                    left: calc(50% - 240px + 69px);
                    width: 390px;
                }

                #rec748324053 .tn-elem[data-elem-id="1647277026900"] .tn-atom {
                    color: #ffffff;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.35;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748324053 .tn-elem[data-elem-id="1647277026900"] {
                        top: 20px;
                        left: calc(50% - 160px + 48px);
                        width: 256px;
                    }

                    #rec748324053 .tn-elem[data-elem-id="1647277026900"] .tn-atom {
                        font-size: 16px;
                    }
                }

                #rec748324053 .tn-elem[data-elem-id="1647369046226"] {
                    z-index: 3;
                    top: 17px;
                    left: calc(50% - 240px + 20px);
                    width: 29px;
                    height: 29px;
                }

                #rec748324053 .tn-elem[data-elem-id="1647369046226"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748324053 .tn-elem[data-elem-id="1647369046226"] {
                        top: 32px;
                        left: calc(50% - 160px + 16px);
                        width: 20px;
                        height: 20px;
                    }
                }

                #rec748324053 .tn-elem[data-elem-id="1647369208827"] {
                    z-index: 4;
                    top: 91px;
                    left: calc(50% - 240px + 20px);
                    width: 29px;
                    height: 29px;
                }

                #rec748324053 .tn-elem[data-elem-id="1647369208827"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748324053 .tn-elem[data-elem-id="1647369208827"] {
                        top: 86px;
                        left: calc(50% - 160px + 16px);
                        width: 20px;
                        height: 20px;
                    }
                }

                #rec748324053 .tn-elem[data-elem-id="1715616249623"] {
                    color: #ffffff;
                    z-index: 5;
                    top: 91px;
                    left: calc(50% - 240px + 69px);
                    width: 390px;
                }

                #rec748324053 .tn-elem[data-elem-id="1715616249623"] .tn-atom {
                    color: #ffffff;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.35;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748324053 .tn-elem[data-elem-id="1715616249623"] {
                        top: 74px;
                        left: calc(50% - 160px + 48px);
                        width: 256px;
                    }

                    #rec748324053 .tn-elem[data-elem-id="1715616249623"] .tn-atom {
                        font-size: 16px;
                    }
                }

                #rec748324053 .tn-elem[data-elem-id="1647369209730"] {
                    z-index: 6;
                    top: 165px;
                    left: calc(50% - 240px + 20px);
                    width: 29px;
                    height: 29px;
                }

                #rec748324053 .tn-elem[data-elem-id="1647369209730"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748324053 .tn-elem[data-elem-id="1647369209730"] {
                        top: 129px;
                        left: calc(50% - 160px + 16px);
                        width: 20px;
                        height: 20px;
                    }
                }

                #rec748324053 .tn-elem[data-elem-id="1715616260331"] {
                    color: #ffffff;
                    z-index: 7;
                    top: 165px;
                    left: calc(50% - 240px + 69px);
                    width: 390px;
                }

                #rec748324053 .tn-elem[data-elem-id="1715616260331"] .tn-atom {
                    color: #ffffff;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.35;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748324053 .tn-elem[data-elem-id="1715616260331"] {
                        top: 128px;
                        left: calc(50% - 160px + 48px);
                        width: 230px;
                    }

                    #rec748324053 .tn-elem[data-elem-id="1715616260331"] .tn-atom {
                        font-size: 16px;
                    }
                }

                #rec748324053 .tn-elem[data-elem-id="1715616282471"] {
                    z-index: 8;
                    top: 214px;
                    left: calc(50% - 240px + 20px);
                    width: 29px;
                    height: 29px;
                }

                #rec748324053 .tn-elem[data-elem-id="1715616282471"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748324053 .tn-elem[data-elem-id="1715616282471"] {
                        top: 183px;
                        left: calc(50% - 160px + 16px);
                        width: 20px;
                        height: 20px;
                    }
                }

                #rec748324053 .tn-elem[data-elem-id="1715616313784"] {
                    color: #ffffff;
                    z-index: 9;
                    top: 214px;
                    left: calc(50% - 240px + 69px);
                    width: 390px;
                }

                #rec748324053 .tn-elem[data-elem-id="1715616313784"] .tn-atom {
                    color: #ffffff;
                    font-size: 20px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.35;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748324053 .tn-elem[data-elem-id="1715616313784"] {
                        top: 160px;
                        left: calc(50% - 160px + 48px);
                        width: 255px;
                    }

                    #rec748324053 .tn-elem[data-elem-id="1715616313784"] .tn-atom {
                        font-size: 16px;
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="748324053" data-artboard-screens="320,480"
                    data-artboard-height="350" data-artboard-valign="center" data-artboard-upscale="grid"
                    data-artboard-height-res-320="250">
                    <div class="t396__carrier" data-artboard-recid="748324053"></div>
                    <div class="t396__filter" data-artboard-recid="748324053"></div>
                    <div class='t396__elem tn-elem tn-elem__7483240531647277026900 t-animate'
                        data-elem-id='1647277026900' data-elem-type='text' data-field-top-value="17"
                        data-field-left-value="69" data-field-width-value="390" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-style="fadein" data-animate-duration="1" data-animate-prx="scroll"
                        data-field-top-res-320-value="20" data-field-left-res-320-value="48"
                        data-field-width-res-320-value="256">
                        <div class='tn-atom'field='tn_text_1647277026900'>превратите свою активность<br>в цифровой
                            актив</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483240531647369046226 t-animate'
                        data-elem-id='1647369046226' data-elem-type='shape' data-field-top-value="17"
                        data-field-left-value="20" data-field-height-value="29" data-field-width-value="29"
                        data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-style="fadein" data-animate-duration="1"
                        data-animate-prx="scroll" data-field-top-res-320-value="32"
                        data-field-left-res-320-value="16" data-field-height-res-320-value="20"
                        data-field-width-res-320-value="20">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild3831-6138-4435-a462-363232356335__check.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483240531647369208827 t-animate'
                        data-elem-id='1647369208827' data-elem-type='shape' data-field-top-value="91"
                        data-field-left-value="20" data-field-height-value="29" data-field-width-value="29"
                        data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-style="fadein" data-animate-duration="1.3"
                        data-animate-prx="scroll" data-field-top-res-320-value="86"
                        data-field-left-res-320-value="16" data-field-height-res-320-value="20"
                        data-field-width-res-320-value="20">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild6331-6362-4737-b136-323633356638__check.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483240531715616249623 t-animate'
                        data-elem-id='1715616249623' data-elem-type='text' data-field-top-value="91"
                        data-field-left-value="69" data-field-width-value="390" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-style="fadein" data-animate-duration="1.3" data-animate-prx="scroll"
                        data-field-top-res-320-value="74" data-field-left-res-320-value="48"
                        data-field-width-res-320-value="256">
                        <div class='tn-atom'field='tn_text_1715616249623'>разные виды тренировок в отдельных блоках
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483240531647369209730 t-animate'
                        data-elem-id='1647369209730' data-elem-type='shape' data-field-top-value="165"
                        data-field-left-value="20" data-field-height-value="29" data-field-width-value="29"
                        data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-style="fadein" data-animate-duration="1.6"
                        data-animate-prx="scroll" data-field-top-res-320-value="129"
                        data-field-left-res-320-value="16" data-field-height-res-320-value="20"
                        data-field-width-res-320-value="20">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild6633-6164-4266-b861-393938356437__check.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483240531715616260331 t-animate'
                        data-elem-id='1715616260331' data-elem-type='text' data-field-top-value="165"
                        data-field-left-value="69" data-field-width-value="390" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-style="fadein" data-animate-duration="1.6" data-animate-prx="scroll"
                        data-field-top-res-320-value="128" data-field-left-res-320-value="48"
                        data-field-width-res-320-value="230">
                        <div class='tn-atom'field='tn_text_1715616260331'>доступ к IT-продуктам компании</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483240531715616282471 t-animate'
                        data-elem-id='1715616282471' data-elem-type='shape' data-field-top-value="214"
                        data-field-left-value="20" data-field-height-value="29" data-field-width-value="29"
                        data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-style="fadein" data-animate-duration="1.9"
                        data-animate-prx="scroll" data-field-top-res-320-value="183"
                        data-field-left-res-320-value="16" data-field-height-res-320-value="20"
                        data-field-width-res-320-value="20">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild6633-6164-4266-b861-393938356437__check.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483240531715616313784 t-animate'
                        data-elem-id='1715616313784' data-elem-type='text' data-field-top-value="214"
                        data-field-left-value="69" data-field-width-value="390" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-style="fadein" data-animate-duration="1.9" data-animate-prx="scroll"
                        data-field-top-res-320-value="160" data-field-left-res-320-value="48"
                        data-field-width-res-320-value="255">
                        <div class='tn-atom'field='tn_text_1715616313784'>наращивайте ваш рейтинг внутри приложения и
                            становитесь лучшим спортсменом</div>
                    </div>
                </div>
            </div>
            <script>
                t_onReady(function() {
                    t_onFuncLoad('t396_init', function() {
                        t396_init('748324053');
                    });
                });
            </script><!-- /T396 -->
        </div>
        <div id="rec747720477" class="r t-rec t-screenmin-980px" style=" " data-animationappear="off"
            data-record-type="396" data-screen-min="980px"><!-- T396 -->
            <style>
                #rec747720477 .t396__artboard {
                    height: 683px;
                    background-color: #1f1f1f;
                }

                #rec747720477 .t396__filter {
                    height: 683px;
                }

                #rec747720477 .t396__carrier {
                    height: 683px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {

                    #rec747720477 .t396__artboard,
                    #rec747720477 .t396__filter,
                    #rec747720477 .t396__carrier {}

                    #rec747720477 .t396__filter {}

                    #rec747720477 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 959px) {

                    #rec747720477 .t396__artboard,
                    #rec747720477 .t396__filter,
                    #rec747720477 .t396__carrier {}

                    #rec747720477 .t396__filter {}

                    #rec747720477 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec747720477 .t396__artboard,
                    #rec747720477 .t396__filter,
                    #rec747720477 .t396__carrier {}

                    #rec747720477 .t396__filter {}

                    #rec747720477 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 479px) {

                    #rec747720477 .t396__artboard,
                    #rec747720477 .t396__filter,
                    #rec747720477 .t396__carrier {}

                    #rec747720477 .t396__filter {}

                    #rec747720477 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec747720477 .tn-elem[data-elem-id="1715613694493"] {
                    z-index: 2;
                    top: 376px;
                    left: calc(50% - 600px + 690px);
                    width: 380px;
                    height: 257px;
                }

                #rec747720477 .tn-elem[data-elem-id="1715613694493"] .tn-atom {
                    border-radius: 10px;
                    background-color: #daf73a;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747720477 .tn-elem[data-elem-id="1715613694493"] {
                        top: 376px;
                        left: calc(50% - 480px + 570px);
                    }
                }

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747720477 .tn-elem[data-elem-id="1715613694496"] {
                    z-index: 3;
                    top: 420px;
                    left: calc(50% - 600px + 973px);
                    width: 61px;
                    height: 61px;
                }

                #rec747720477 .tn-elem[data-elem-id="1715613694496"] .tn-atom {
                    border-width: 1px;
                    border-radius: 3000px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #000000;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747720477 .tn-elem[data-elem-id="1715613694496"] {
                        top: 420px;
                        left: calc(50% - 480px + 853px);
                    }
                }

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747720477 .tn-elem[data-elem-id="1715613694498"] {
                    z-index: 4;
                    top: 420px;
                    left: calc(50% - 600px + 725px);
                    width: 61px;
                    height: 61px;
                }

                #rec747720477 .tn-elem[data-elem-id="1715613694498"] .tn-atom {
                    border-width: 1px;
                    border-radius: 3000px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #000000;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747720477 .tn-elem[data-elem-id="1715613694498"] {
                        top: 420px;
                        left: calc(50% - 480px + 605px);
                    }
                }

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747720477 .tn-elem[data-elem-id="1715613694500"] {
                    z-index: 5;
                    top: 415px;
                    left: calc(50% - 600px + 776px);
                    width: 72px;
                    height: 72px;
                }

                #rec747720477 .tn-elem[data-elem-id="1715613694500"] .tn-atom {
                    border-width: 1px;
                    border-radius: 3000px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #000000;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747720477 .tn-elem[data-elem-id="1715613694500"] {
                        top: 415px;
                        left: calc(50% - 480px + 656px);
                    }
                }

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747720477 .tn-elem[data-elem-id="1715613694502"] {
                    z-index: 6;
                    top: 415px;
                    left: calc(50% - 600px + 908px);
                    width: 72px;
                    height: 72px;
                }

                #rec747720477 .tn-elem[data-elem-id="1715613694502"] .tn-atom {
                    border-width: 1px;
                    border-radius: 3000px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #000000;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747720477 .tn-elem[data-elem-id="1715613694502"] {
                        top: 415px;
                        left: calc(50% - 480px + 788px);
                    }
                }

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747720477 .tn-elem[data-elem-id="1715613694503"] {
                    z-index: 7;
                    top: 406px;
                    left: calc(50% - 600px + 834px);
                    width: 90px;
                    height: 90px;
                }

                #rec747720477 .tn-elem[data-elem-id="1715613694503"] .tn-atom {
                    border-width: 1px;
                    border-radius: 3000px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #000000;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747720477 .tn-elem[data-elem-id="1715613694503"] {
                        top: 406px;
                        left: calc(50% - 480px + 714px);
                    }
                }

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747720477 .tn-elem[data-elem-id="1715613694505"] {
                    color: #000000;
                    text-align: CENTER;
                    z-index: 8;
                    top: 516px;
                    left: calc(50% - 600px + 708px);
                    width: 344px;
                }

                #rec747720477 .tn-elem[data-elem-id="1715613694505"] .tn-atom {
                    color: #000000;
                    font-size: 24px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747720477 .tn-elem[data-elem-id="1715613694505"] {
                        top: 516px;
                        left: calc(50% - 480px + 588px);
                    }
                }

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747720477 .tn-elem[data-elem-id="1715613694517"] {
                    z-index: 9;
                    top: 100px;
                    left: calc(50% - 600px + 690px);
                    width: 380px;
                    height: 256px;
                }

                #rec747720477 .tn-elem[data-elem-id="1715613694517"] .tn-atom {
                    border-width: 1px;
                    border-radius: 10px;
                    background-color: #262626;
                    background-position: center center;
                    border-color: #daf73a;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747720477 .tn-elem[data-elem-id="1715613694517"] {
                        top: 100px;
                        left: calc(50% - 480px + 570px);
                    }
                }

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747720477 .tn-elem[data-elem-id="1715613694519"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 10;
                    top: 157px;
                    left: calc(50% - 600px + 694px);
                    width: 372px;
                }

                #rec747720477 .tn-elem[data-elem-id="1715613694519"] .tn-atom {
                    color: #ffffff;
                    font-size: 24px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747720477 .tn-elem[data-elem-id="1715613694519"] {
                        top: 157px;
                        left: calc(50% - 480px + 574px);
                    }
                }

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747720477 .tn-elem[data-elem-id="1715695597207"] {
                    color: #000000;
                    text-align: center;
                    z-index: 11;
                    top: 255px;
                    left: calc(50% - 600px + 740px);
                    width: 280px;
                    height: 50px;
                }

                #rec747720477 .tn-elem[data-elem-id="1715695597207"] .tn-atom {
                    color: #000000;
                    font-size: 24px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    border-radius: 3px;
                    background-color: #daf73a;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                    box-shadow: 4px 4px 30px 0px rgba(218, 247, 58, 0.3);
                }

                @media (hover),
                (min-width:0\0) {
                    #rec747720477 .tn-elem[data-elem-id="1715695597207"] .tn-atom:hover {
                        background-color: #262626;
                        background-image: none;
                    }

                    #rec747720477 .tn-elem[data-elem-id="1715695597207"] .tn-atom:hover {
                        color: #daf73a;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec747720477 .tn-elem[data-elem-id="1715695597207"] {
                        left: calc(50% - 480px + 620px);
                    }
                }

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747720477 .tn-elem[data-elem-id="1715613694533"] {
                    z-index: 12;
                    top: 100px;
                    left: calc(50% - 600px + 130px);
                    width: 540px;
                    height: 533px;
                }

                #rec747720477 .tn-elem[data-elem-id="1715613694533"] .tn-atom {
                    border-width: 1px;
                    border-radius: 10px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #daf73a;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747720477 .tn-elem[data-elem-id="1715613694533"] {
                        top: 100px;
                        left: calc(50% - 480px + 10px);
                    }
                }

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec747720477 .tn-elem[data-elem-id="1715955465386"] {
                    color: #daf73a;
                    z-index: 13;
                    top: 150px;
                    left: calc(50% - 600px + 180px);
                    width: 290px;
                }

                #rec747720477 .tn-elem[data-elem-id="1715955465386"] .tn-atom {
                    color: #daf73a;
                    font-size: 36px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec747720477 .tn-elem[data-elem-id="1715955465386"] {
                        top: 150px;
                        left: calc(50% - 480px + 60px);
                    }
                }

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="747720477"
                    data-artboard-screens="320,480,640,960,1200" data-artboard-height="683"
                    data-artboard-valign="center" data-artboard-upscale="grid">
                    <div class="t396__carrier" data-artboard-recid="747720477"></div>
                    <div class="t396__filter" data-artboard-recid="747720477"></div>
                    <div class='t396__elem tn-elem tn-elem__7477204771715613694493' data-elem-id='1715613694493'
                        data-elem-type='shape' data-field-top-value="376" data-field-left-value="690"
                        data-field-height-value="257" data-field-width-value="380" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-960-value="376" data-field-left-res-960-value="570">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477204771715613694496' data-elem-id='1715613694496'
                        data-elem-type='shape' data-field-top-value="420" data-field-left-value="973"
                        data-field-height-value="61" data-field-width-value="61" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-960-value="420" data-field-left-res-960-value="853">
                        <div class='tn-atom t-bgimg'
                            data-original="https://figma-alpha-api.s3.us-west-2.amazonaws.com/images/653ac82b-dfee-4749-936d-a9598de62aa6">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477204771715613694498' data-elem-id='1715613694498'
                        data-elem-type='shape' data-field-top-value="420" data-field-left-value="725"
                        data-field-height-value="61" data-field-width-value="61" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-960-value="420" data-field-left-res-960-value="605">
                        <div class='tn-atom t-bgimg'
                            data-original="https://figma-alpha-api.s3.us-west-2.amazonaws.com/images/17be8073-98ed-4973-b112-e878a429cbf7">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477204771715613694500' data-elem-id='1715613694500'
                        data-elem-type='shape' data-field-top-value="415" data-field-left-value="776"
                        data-field-height-value="72" data-field-width-value="72" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-960-value="415" data-field-left-res-960-value="656">
                        <div class='tn-atom t-bgimg'
                            data-original="https://figma-alpha-api.s3.us-west-2.amazonaws.com/images/7731237e-741d-40f4-8299-7ff1b40d55b8">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477204771715613694502' data-elem-id='1715613694502'
                        data-elem-type='shape' data-field-top-value="415" data-field-left-value="908"
                        data-field-height-value="72" data-field-width-value="72" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-960-value="415" data-field-left-res-960-value="788">
                        <div class='tn-atom t-bgimg'
                            data-original="https://figma-alpha-api.s3.us-west-2.amazonaws.com/images/d643dc46-ee3f-489d-acfd-56b20d7ebf3d">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477204771715613694503' data-elem-id='1715613694503'
                        data-elem-type='shape' data-field-top-value="406" data-field-left-value="834"
                        data-field-height-value="90" data-field-width-value="90" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-960-value="406" data-field-left-res-960-value="714">
                        <div class='tn-atom t-bgimg'
                            data-original="https://figma-alpha-api.s3.us-west-2.amazonaws.com/images/d3a0047e-b98b-419a-a9b4-f848776cf129">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477204771715613694505' data-elem-id='1715613694505'
                        data-elem-type='text' data-field-top-value="516" data-field-left-value="708"
                        data-field-width-value="344" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-960-value="516"
                        data-field-left-res-960-value="588">
                        <div class='tn-atom'field='tn_text_1715613694505'>Зарабатывай больше с каждым приглашенным
                            другом</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477204771715613694517' data-elem-id='1715613694517'
                        data-elem-type='shape' data-field-top-value="100" data-field-left-value="690"
                        data-field-height-value="256" data-field-width-value="380" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-960-value="100" data-field-left-res-960-value="570">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477204771715613694519' data-elem-id='1715613694519'
                        data-elem-type='text' data-field-top-value="157" data-field-left-value="694"
                        data-field-width-value="372" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-960-value="157"
                        data-field-left-res-960-value="574">
                        <div class='tn-atom'field='tn_text_1715613694519'>Мы подготовили для вас подробную программу
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477204771715695597207' data-elem-id='1715695597207'
                        data-elem-type='button' data-field-top-value="255" data-field-left-value="740"
                        data-field-height-value="50" data-field-width-value="280" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-left-res-960-value="620">
                        <a href="{{ route('quiz') }}" class='tn-atom'>Зарегистрироваться</a>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477204771715613694533' data-elem-id='1715613694533'
                        data-elem-type='shape' data-field-top-value="100" data-field-left-value="130"
                        data-field-height-value="533" data-field-width-value="540" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-960-value="100" data-field-left-res-960-value="10">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild6465-3737-4662-b463-313930666665__frame_34_1.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7477204771715955465386' data-elem-id='1715955465386'
                        data-elem-type='text' data-field-top-value="150" data-field-left-value="180"
                        data-field-width-value="290" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-960-value="150"
                        data-field-left-res-960-value="60">
                        <div class='tn-atom'field='tn_text_1715955465386'>БЫСТРЫЙ СТАРТ</div>
                    </div>
                </div>
            </div>
            <script>
                t_onReady(function() {
                    t_onFuncLoad('t396_init', function() {
                        t396_init('747720477');
                    });
                });
            </script><!-- /T396 -->
        </div>
        <div id="rec748327269" class="r t-rec t-screenmax-480px" style=" " data-animationappear="off"
            data-record-type="396" data-screen-max="480px"><!-- T396 -->
            <style>
                #rec748327269 .t396__artboard {
                    height: 1050px;
                    background-color: #1f1f1f;
                }

                #rec748327269 .t396__filter {
                    height: 1050px;
                }

                #rec748327269 .t396__carrier {
                    height: 1050px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 479px) {

                    #rec748327269 .t396__artboard,
                    #rec748327269 .t396__filter,
                    #rec748327269 .t396__carrier {
                        height: 700px;
                    }

                    #rec748327269 .t396__filter {}

                    #rec748327269 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694493"] {
                    z-index: 2;
                    top: 734px;
                    left: calc(50% - 240px + 20px);
                    width: 440px;
                    height: 298px;
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694493"] .tn-atom {
                    border-radius: 6px;
                    background-color: #daf73a;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748327269 .tn-elem[data-elem-id="1715613694493"] {
                        top: 503px;
                        left: calc(50% - 160px + 16px);
                        width: 288px;
                        height: 167px;
                    }
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694496"] {
                    z-index: 3;
                    top: 785px;
                    left: calc(50% - 240px + 348px);
                    width: 70px;
                    height: 70px;
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694496"] .tn-atom {
                    border-width: 1px;
                    border-radius: 3000px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #000000;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748327269 .tn-elem[data-elem-id="1715613694496"] {
                        top: 536px;
                        left: calc(50% - 160px + 231px);
                        width: 45px;
                        height: 45px;
                    }
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694498"] {
                    z-index: 4;
                    top: 785px;
                    left: calc(50% - 240px + 61px);
                    width: 70px;
                    height: 70px;
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694498"] .tn-atom {
                    border-width: 1px;
                    border-radius: 3000px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #000000;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748327269 .tn-elem[data-elem-id="1715613694498"] {
                        top: 536px;
                        left: calc(50% - 160px + 43px);
                        width: 45px;
                        height: 45px;
                    }
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694500"] {
                    z-index: 5;
                    top: 779px;
                    left: calc(50% - 240px + 120px);
                    width: 83px;
                    height: 83px;
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694500"] .tn-atom {
                    border-width: 1px;
                    border-radius: 3000px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #000000;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748327269 .tn-elem[data-elem-id="1715613694500"] {
                        top: 532px;
                        left: calc(50% - 160px + 81px);
                        width: 54px;
                        height: 54px;
                    }
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694502"] {
                    z-index: 6;
                    top: 779px;
                    left: calc(50% - 240px + 272px);
                    width: 83px;
                    height: 83px;
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694502"] .tn-atom {
                    border-width: 1px;
                    border-radius: 3000px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #000000;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748327269 .tn-elem[data-elem-id="1715613694502"] {
                        top: 532px;
                        left: calc(50% - 160px + 181px);
                        width: 54px;
                        height: 54px;
                    }
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694503"] {
                    z-index: 7;
                    top: 769px;
                    left: calc(50% - 240px + 187px);
                    width: 104px;
                    height: 104px;
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694503"] .tn-atom {
                    border-width: 1px;
                    border-radius: 3000px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #000000;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748327269 .tn-elem[data-elem-id="1715613694503"] {
                        top: 526px;
                        left: calc(50% - 160px + 125px);
                        width: 68px;
                        height: 67px;
                    }
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694505"] {
                    color: #000000;
                    text-align: CENTER;
                    z-index: 8;
                    top: 897px;
                    left: calc(50% - 240px + 41px);
                    width: 398px;
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694505"] .tn-atom {
                    color: #000000;
                    font-size: 24px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748327269 .tn-elem[data-elem-id="1715613694505"] {
                        top: 609px;
                        left: calc(50% - 160px + 30px);
                        width: 260px;
                    }

                    #rec748327269 .tn-elem[data-elem-id="1715613694505"] .tn-atom {
                        font-size: 16px;
                    }
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694517"] {
                    z-index: 9;
                    top: 458px;
                    left: calc(50% - 240px + 20px);
                    width: 440px;
                    height: 256px;
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694517"] .tn-atom {
                    border-width: 1px;
                    border-radius: 6px;
                    background-color: #262626;
                    background-position: center center;
                    border-color: #daf73a;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748327269 .tn-elem[data-elem-id="1715613694517"] {
                        top: 299px;
                        left: calc(50% - 160px + 16px);
                        width: 288px;
                        height: 184px;
                    }
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694519"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 10;
                    top: 517px;
                    left: calc(50% - 240px + 25px);
                    width: 430px;
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694519"] .tn-atom {
                    color: #ffffff;
                    font-size: 24px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748327269 .tn-elem[data-elem-id="1715613694519"] {
                        top: 337px;
                        left: calc(50% - 160px + 19px);
                        width: 281px;
                    }

                    #rec748327269 .tn-elem[data-elem-id="1715613694519"] .tn-atom {
                        font-size: 20px;
                    }
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694533"] {
                    z-index: 11;
                    top: 20px;
                    left: calc(50% - 240px + 20px);
                    width: 440px;
                    height: 418px;
                }

                #rec748327269 .tn-elem[data-elem-id="1715613694533"] .tn-atom {
                    border-width: 1px;
                    border-radius: 6px;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: #daf73a;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748327269 .tn-elem[data-elem-id="1715613694533"] {
                        top: 10px;
                        left: calc(50% - 160px + 16px);
                        width: 288px;
                        height: 269px;
                    }
                }

                #rec748327269 .tn-elem[data-elem-id="1715695597207"] {
                    color: #000000;
                    text-align: center;
                    z-index: 12;
                    top: 605px;
                    left: calc(50% - 240px + 100px);
                    width: 280px;
                    height: 50px;
                }

                #rec748327269 .tn-elem[data-elem-id="1715695597207"] .tn-atom {
                    color: #000000;
                    font-size: 24px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    border-radius: 3px;
                    background-color: #daf73a;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                    box-shadow: 4px 4px 30px 0px rgba(218, 247, 58, 0.3);
                }

                @media (hover),
                (min-width:0\0) {
                    #rec748327269 .tn-elem[data-elem-id="1715695597207"] .tn-atom:hover {
                        background-color: #262626;
                        background-image: none;
                    }

                    #rec748327269 .tn-elem[data-elem-id="1715695597207"] .tn-atom:hover {
                        color: #daf73a;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec748327269 .tn-elem[data-elem-id="1715695597207"] {
                        top: 405px;
                        left: calc(50% - 160px + 51px);
                        width: 220px;
                        height: 40px;
                    }

                    #rec748327269 .tn-elem[data-elem-id="1715695597207"] .tn-atom {
                        font-size: 20px;
                    }
                }

                #rec748327269 .tn-elem[data-elem-id="1715955600274"] {
                    color: #daf73a;
                    z-index: 13;
                    top: 60px;
                    left: calc(50% - 240px + 60px);
                    width: 246px;
                }

                #rec748327269 .tn-elem[data-elem-id="1715955600274"] .tn-atom {
                    color: #daf73a;
                    font-size: 30px;
                    font-family: 'TildaSans', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 479px) {
                    #rec748327269 .tn-elem[data-elem-id="1715955600274"] {
                        top: 40px;
                        left: calc(50% - 160px + 46px);
                    }

                    #rec748327269 .tn-elem[data-elem-id="1715955600274"] .tn-atom {
                        font-size: 24px;
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="748327269" data-artboard-screens="320,480"
                    data-artboard-height="1050" data-artboard-valign="center" data-artboard-upscale="grid"
                    data-artboard-height-res-320="700">
                    <div class="t396__carrier" data-artboard-recid="748327269"></div>
                    <div class="t396__filter" data-artboard-recid="748327269"></div>
                    <div class='t396__elem tn-elem tn-elem__7483272691715613694493' data-elem-id='1715613694493'
                        data-elem-type='shape' data-field-top-value="734" data-field-left-value="20"
                        data-field-height-value="298" data-field-width-value="440" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="503" data-field-left-res-320-value="16"
                        data-field-height-res-320-value="167" data-field-width-res-320-value="288">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483272691715613694496' data-elem-id='1715613694496'
                        data-elem-type='shape' data-field-top-value="785" data-field-left-value="348"
                        data-field-height-value="70" data-field-width-value="70" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="536" data-field-left-res-320-value="231"
                        data-field-height-res-320-value="45" data-field-width-res-320-value="45">
                        <div class='tn-atom t-bgimg'
                            data-original="https://figma-alpha-api.s3.us-west-2.amazonaws.com/images/653ac82b-dfee-4749-936d-a9598de62aa6">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483272691715613694498' data-elem-id='1715613694498'
                        data-elem-type='shape' data-field-top-value="785" data-field-left-value="61"
                        data-field-height-value="70" data-field-width-value="70" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="536" data-field-left-res-320-value="43"
                        data-field-height-res-320-value="45" data-field-width-res-320-value="45">
                        <div class='tn-atom t-bgimg'
                            data-original="https://figma-alpha-api.s3.us-west-2.amazonaws.com/images/17be8073-98ed-4973-b112-e878a429cbf7">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483272691715613694500' data-elem-id='1715613694500'
                        data-elem-type='shape' data-field-top-value="779" data-field-left-value="120"
                        data-field-height-value="83" data-field-width-value="83" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="532" data-field-left-res-320-value="81"
                        data-field-height-res-320-value="54" data-field-width-res-320-value="54">
                        <div class='tn-atom t-bgimg'
                            data-original="https://figma-alpha-api.s3.us-west-2.amazonaws.com/images/7731237e-741d-40f4-8299-7ff1b40d55b8">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483272691715613694502' data-elem-id='1715613694502'
                        data-elem-type='shape' data-field-top-value="779" data-field-left-value="272"
                        data-field-height-value="83" data-field-width-value="83" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="532" data-field-left-res-320-value="181"
                        data-field-height-res-320-value="54" data-field-width-res-320-value="54">
                        <div class='tn-atom t-bgimg'
                            data-original="https://figma-alpha-api.s3.us-west-2.amazonaws.com/images/d643dc46-ee3f-489d-acfd-56b20d7ebf3d">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483272691715613694503' data-elem-id='1715613694503'
                        data-elem-type='shape' data-field-top-value="769" data-field-left-value="187"
                        data-field-height-value="104" data-field-width-value="104" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="526" data-field-left-res-320-value="125"
                        data-field-height-res-320-value="67" data-field-width-res-320-value="68">
                        <div class='tn-atom t-bgimg'
                            data-original="https://figma-alpha-api.s3.us-west-2.amazonaws.com/images/d3a0047e-b98b-419a-a9b4-f848776cf129">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483272691715613694505' data-elem-id='1715613694505'
                        data-elem-type='text' data-field-top-value="897" data-field-left-value="41"
                        data-field-width-value="398" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="609"
                        data-field-left-res-320-value="30" data-field-width-res-320-value="260">
                        <div class='tn-atom'field='tn_text_1715613694505'>Зарабатывай больше с каждым приглашенным
                            другом</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483272691715613694517' data-elem-id='1715613694517'
                        data-elem-type='shape' data-field-top-value="458" data-field-left-value="20"
                        data-field-height-value="256" data-field-width-value="440" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="299" data-field-left-res-320-value="16"
                        data-field-height-res-320-value="184" data-field-width-res-320-value="288">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483272691715613694519' data-elem-id='1715613694519'
                        data-elem-type='text' data-field-top-value="517" data-field-left-value="25"
                        data-field-width-value="430" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="337"
                        data-field-left-res-320-value="19" data-field-width-res-320-value="281">
                        <div class='tn-atom'field='tn_text_1715613694519'>Мы подготовили для вас подробную программу
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483272691715613694533' data-elem-id='1715613694533'
                        data-elem-type='shape' data-field-top-value="20" data-field-left-value="20"
                        data-field-height-value="418" data-field-width-value="440" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="10" data-field-left-res-320-value="16"
                        data-field-height-res-320-value="269" data-field-width-res-320-value="288">
                        <div class='tn-atom t-bgimg'
                            data-original="/home/images/tild6232-3066-4631-b030-613933373462__frame_34_1.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483272691715695597207' data-elem-id='1715695597207'
                        data-elem-type='button' data-field-top-value="605" data-field-left-value="100"
                        data-field-height-value="50" data-field-width-value="280" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="px" data-field-widthunits-value="px"
                        data-field-top-res-320-value="405" data-field-left-res-320-value="51"
                        data-field-height-res-320-value="40" data-field-width-res-320-value="220">
                        <a href="{{ route('quiz') }}" class='tn-atom'>Зарегистрироваться</a>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7483272691715955600274' data-elem-id='1715955600274'
                        data-elem-type='text' data-field-top-value="60" data-field-left-value="60"
                        data-field-width-value="246" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-field-top-res-320-value="40"
                        data-field-left-res-320-value="46">
                        <div class='tn-atom'field='tn_text_1715955600274'>БЫСТРЫЙ СТАРТ</div>
                    </div>
                </div>
            </div>
            <script>
                t_onReady(function() {
                    t_onFuncLoad('t396_init', function() {
                        t396_init('748327269');
                    });
                });
            </script><!-- /T396 -->
        </div>
        <div id="rec748334673" class="r t-rec t-screenmin-980px" style="background-color:#111111; "
            data-animationappear="off" data-record-type="981" data-screen-min="980px" data-bg-color="#111111">
            <!-- t981 -->
            <div class="t981">
                <div class="t981__wrapper t-container">
                    <div class="t981__col t981__col_left">
                        <div class="t981__logo-wrapper"><img class="t981__logo t-img"
                                src="/home/images/tild6439-3666-4564-b731-383431633630__-__empty__group_70.png"
                                data-original="/home/images/tild6439-3666-4564-b731-383431633630__group_70.png"
                                imgfield="img" style="max-width: 170px;" alt=""></div>
                    </div>
                    <div class="t981__col t981__col_right" style="width: auto;">
                        <div class="t981__menu t981__main-menu">
                            <div class="t981__menu-item"><a class="t981__menu-link" href="#rec747718392"
                                    data-menu-submenu-hook="">Функции</a></div>
                            <div class="t981__menu-item"><a class="t981__menu-link" href="#rec747719374"
                                    data-menu-submenu-hook="">Экосистема</a></div>
                            <div class="t981__menu-item"><a class="t981__menu-link" href="{{ route('stub') }}"
                                    data-menu-submenu-hook="">Войти в ЛК</a></div>
                        </div>
                        <div class="t981__menu t981__secondary-menu" field="text">
                            <ul>
                                <li style="color: rgb(131, 131, 131);"><a href="/"
                                        style="color: rgb(131, 131, 131);">Политика конфиденциальности</a></li>
                                <li style="color: rgb(131, 131, 131);"><a href="/"
                                        style="color: rgb(131, 131, 131);">Условия использования</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #rec748334673 .t981__menu-item,
                #rec748334673 .t981__secondary-menu li,
                #rec748334673 .t981__secondary-menu a {
                    margin-right: 20px;
                }

                @media screen and (max-width: 980px) {

                    #rec748334673 .t981__secondary-menu li,
                    #rec748334673 .t981__secondary-menu a,
                    #rec748334673 .t981__menu-item {
                        margin-right: 15px !important;
                    }

                    #rec748334673 .t981__secondary-menu li>a {
                        margin-right: 0 !important;
                    }
                }
            </style>
            <style>
                #rec748334673 .t981__menu-link {
                    font-size: 16px;
                    color: #daf73a;
                    font-weight: 600;
                    font-family: 'TildaSans';
                }

                #rec748334673 .t981__secondary-menu {
                    color: #7d7d7d;
                    font-weight: 400;
                    font-family: 'TildaSans';
                }
            </style>
        </div>
        <div id="rec748336191" class="r t-rec t-screenmax-480px" style="background-color:#111111; "
            data-animationappear="off" data-record-type="981" data-screen-max="480px" data-bg-color="#111111">
            <!-- t981 -->
            <div class="t981">
                <div class="t981__wrapper t-container">
                    <div class="t981__col t981__col_left">
                        <div class="t981__logo-wrapper"><img class="t981__logo t-img"
                                src="/home/images/tild6439-3666-4564-b731-383431633630__-__empty__group_70.png"
                                data-original="/home/images/tild6439-3666-4564-b731-383431633630__group_70.png"
                                imgfield="img" style="max-width: 170px;" alt=""></div>
                    </div>
                    <div class="t981__col t981__col_right" style="width: auto;">
                        <div class="t981__menu t981__main-menu">
                            <div class="t981__menu-item"><a class="t981__menu-link" href="#rec748305097"
                                    data-menu-submenu-hook="">Функции</a></div>
                            <div class="t981__menu-item"><a class="t981__menu-link" href="#rec748319095"
                                    data-menu-submenu-hook="">Экосистема</a></div>
                            <div class="t981__menu-item"><a class="t981__menu-link" href="{{ route('stub') }}"
                                    data-menu-submenu-hook="">Войти в ЛК</a></div>
                        </div>
                        <div class="t981__menu t981__secondary-menu" field="text">
                            <ul>
                                <li style="color: rgb(131, 131, 131);"><a href="/"
                                        style="color: rgb(131, 131, 131);">Политика конфиденциальности</a></li>
                                <li style="color: rgb(131, 131, 131);"><a href="/"
                                        style="color: rgb(131, 131, 131);">Условия использования</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #rec748336191 .t981__menu-item,
                #rec748336191 .t981__secondary-menu li,
                #rec748336191 .t981__secondary-menu a {
                    margin-right: 20px;
                }

                @media screen and (max-width: 980px) {

                    #rec748336191 .t981__secondary-menu li,
                    #rec748336191 .t981__secondary-menu a,
                    #rec748336191 .t981__menu-item {
                        margin-right: 15px !important;
                    }

                    #rec748336191 .t981__secondary-menu li>a {
                        margin-right: 0 !important;
                    }
                }
            </style>
            <style>
                #rec748336191 .t981__menu-link {
                    font-size: 16px;
                    color: #daf73a;
                    font-weight: 600;
                    font-family: 'TildaSans';
                }

                #rec748336191 .t981__secondary-menu {
                    color: #7d7d7d;
                    font-weight: 400;
                    font-family: 'TildaSans';
                }
            </style>
        </div>
        <div id="rec749918112" class="r t-rec" style=" " data-record-type="270">
            <div class="t270"></div>
            <script>
                t_onReady(function() {
                    var hash = window.location.hash;
                    t_onFuncLoad('t270_scroll', function() {
                        t270_scroll(hash, -3);
                    });
                    setTimeout(function() {
                        var curPath = window.location.pathname;
                        var curFullPath = window.location.origin + curPath;
                        var recs = document.querySelectorAll('.r');
                        Array.prototype.forEach.call(recs, function(rec) {
                            var selects =
                                'a[href^="#"]\
            :not([href="#"])\
            :not(.carousel-control)\
            :not(.t-carousel__control)\
            :not([href^="#price"])\
            :not([href^="#submenu"])\
            :not([href^="#popup"])\
            :not([href*="#zeropopup"])\
            :not([href*="#closepopup"])\
            :not([href*="#closeallpopup"])\
            :not([href^="#prodpopup"])\
            :not([href^="#order"])\
            :not([href^="#!"])\
            :not([target="_blank"]),' +
                                'a[href^="' + curPath + '#"]\
            :not([href*="#!/tfeeds/"])\
            :not([href*="#!/tproduct/"])\
            :not([href*="#!/tab/"])\
            :not([href*="#popup"])\
            :not([href*="#zeropopup"])\
            :not([href*="#closepopup"])\
            :not([href*="#closeallpopup"])\
            :not([target="_blank"]),' +
                                'a[href^="' + curFullPath + '#"]\
            :not([href*="#!/tfeeds/"])\
            :not([href*="#!/tproduct/"])\
            :not([href*="#!/tab/"])\
            :not([href*="#popup"])\
            :not([href*="#zeropopup"])\
            :not([href*="#closepopup"])\
            :not([href*="#closeallpopup"])\
            :not([target="_blank"])';
                            var elements = rec.querySelectorAll(selects);
                            Array.prototype.forEach.call(elements, function(element) {
                                element.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    var hash = this.hash.trim();
                                    t_onFuncLoad('t270_scroll', function() {
                                        t270_scroll(hash, -3);
                                    });
                                });
                            });

							document.querySelectorAll('[href="#rec747718392"]').forEach(function(element) {
								element.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    var hash = this.hash.trim();
                                    t_onFuncLoad('t270_scroll', function() {
                                        t270_scroll(hash, -3);
                                    });
                                });
							})
							document.querySelectorAll('[href="#rec747719374"]').forEach(function(element) {
								element.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    var hash = this.hash.trim();
                                    t_onFuncLoad('t270_scroll', function() {
                                        t270_scroll(hash, -3);
                                    });
                                });
							})



                        });
                        if (document.querySelectorAll('.js-store').length > 0 || document.querySelectorAll(
                                '.js-feed').length > 0) {
                            t_onFuncLoad('t270_scroll', function() {
                                t270_scroll(hash, -3, 1);
                            });
                        }
                    }, 500);
                    setTimeout(function() {
                        var hash = window.location.hash;
                        if (hash && document.querySelectorAll('a[name="' + hash.slice(1) + '"]').length > 0) {
                            if (window.isMobile) {
                                t_onFuncLoad('t270_scroll', function() {
                                    t270_scroll(hash, 0);
                                });
                            } else {
                                t_onFuncLoad('t270_scroll', function() {
                                    t270_scroll(hash, 0);
                                });
                            }
                        }
                    }, 1000);
                    window.addEventListener('popstate', function() {
                        var hash = window.location.hash;
                        if (hash && document.querySelectorAll('a[name="' + hash.slice(1) + '"]').length > 0) {
                            if (window.isMobile) {
                                t_onFuncLoad('t270_scroll', function() {
                                    t270_scroll(hash, 0);
                                });
                            } else {
                                t_onFuncLoad('t270_scroll', function() {
                                    t270_scroll(hash, 0);
                                });
                            }
                        }
                    });
                });
            </script>
        </div>
    </div>
	<!--/allrecords-->
	<script>
		let queryParams = new URLSearchParams(window.location.search);

		if(queryParams.has('ref')) {
			let ref = queryParams.get('ref');
			
			localStorage.setItem('referral', ref);
		}
	</script>
</body>

</html>
