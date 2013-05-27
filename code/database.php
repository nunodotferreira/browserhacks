<?php

  $hack_types = array (
    'selector' => array (
      'title' => 'Selector Hacks',
      'icon' => 'fontawesome-link'
    ),
    'media' => array (
      'title' => 'Media Query Hacks',
      'icon' => 'fontawesome-resize-small'
    ),
    'javascript' => array (
      'title' => 'JavaScript Hacks',
      'icon' => 'fontawesome-fire'
    ),
    'propertyValue' => array (
      'title' => 'Property/Value Hacks',
      'icon' => 'fontawesome-paper-clip'
    ),
    'misc' => array (
      'title' => 'Miscellaneous',
      'icon' => 'fontawesome-beaker'
    ),
    'html' => array (
      'title' => 'Conditional comments',
      'icon' => 'fontawesome-th-large'
    )
  );

  $browsers = array(
    'ch' => array(
      'name' => 'chrome',
    ),
    'fx' => array(
      'name' => 'firefox',
    ),
    'ie' => array(
      'name' => 'internet explorer',
    ),
    'sa' => array(
      'name' => 'safari',
    ),
    'op' => array(
      'name' => 'opera',
    )
  );

  $hacks = array(
    array(
      'type' => 'selector',
      'browser' => array('ch','sa','ie'),
      'data-version' => array('24-','6','7'),
      'label' => '',
      'language' => 'css',
      'code' => "::made-up-pseudo-element, .selector {}"
    ),
    array(
      'type' => 'media',
      'browser' => array('ch','sa'),
      'data-version' => array('','3+'),
      'label' => '',
      'language' => 'css',
      'code' => "@media screen and (-webkit-min-device-pixel-ratio:0) {}"
    ),
    array(
      'type' => 'propertyValue',
      'browser' => array('ch','sa'),
      'data-version' => array('28-','6-'),
      'label' => '',
      'language' => 'css',
      'code' => ".selector { (;color: blue;); } \n.selector { [;color: blue;]; }"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('ch'),
      'data-version' => array(''),
      'label' => '',
      'language' => 'javascript',
      'code' => "var isChrome = !!window.chrome;"
    ),
    array(
      'type' => 'selector',
      'browser' => array('fx'),
      'data-version' => array('1.5|2'),
      'label' => '',
      'language' => 'css',
      'code' => "body:empty .selector {}"
    ),
    array(
      'type' => 'selector',
      'browser' => array('fx','ie'),
      'data-version' => array('2+','7'),
      'label' => '',
      'language' => 'css',
      'code' => ".selector, x:-moz-any-link {}"
    ),
    array(
      'type' => 'selector',
      'browser' => array('fx','ie'),
      'data-version' => array('3+','7'),
      'label' => '',
      'language' => 'css',
      'code' => ".selector, x:-moz-any-link, x:default {}"
    ),
    array(
      'type' => 'selector',
      'browser' => array('fx'),
      'data-version' => array('3.5+'),
      'label' => '',
      'language' => 'css',
      'code' => "body:not(:-moz-handler-blocked) .selector {}"
    ), 
    array(
      'type' => 'media',
      'browser' => array('fx','ie','op'),
      'data-version' => array('3.5+','9+',''),
      'label' => '',
      'language' => 'css',
      'code' => "@media screen and (min-resolution: +72dpi) {}"
    ),
    array(
      'type' => 'media',
      'browser' => array('fx'),
      'data-version' => array('3.6+'),
      'label' => '',
      'language' => 'css',
      'code' => "@media screen and (-moz-images-in-menus:0) {}"
    ),
    array(
      'type' => 'media',
      'browser' => array('fx'),
      'data-version' => array('4+'),
      'label' => '',
      'language' => 'css',
      'code' => "@media screen and (min--moz-device-pixel-ratio:0) {}"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('fx'),
      'data-version' => array(''),
      'label' => '',
      'language' => 'javascript',
      'code' => "var isFF = !!window.sidebar"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('fx'),
      'data-version' => array(''),
      'label' => '',
      'language' => 'javascript',
      'code' => "var isFF = !!navigator.userAgent.match(/firefox/i);"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('fx'),
      'data-version' => array('2|3|4|5|6|7|8|9|10|11|12|13'),
      'label' => 'Firefox 2-13',
      'language' => 'javascript',
      'code' => "var isFF = !!window.globalStorage;"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('fx'),
      'data-version' => array('2|3'),
      'label' => '',
      'language' => 'javascript',
      'code' => "var isFF = /a/[-1]=='a';"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('fx'),
      'data-version' => array('3'),
      'label' => '',
      'language' => 'javascript',
      'code' => "var isFF = (function x(){})[-5]=='x';"
    ),
    array(
      'type' => 'misc',
      'browser' => array('fx'),
      'data-version' => array('3+'),
      'label' => '',
      'language' => 'css',
      'code' => "@-moz-document url-prefix() {}"
    ),
    array(
      'type' => 'selector',
      'browser' => array('ie'),
      'data-version' => array('6-'),
      'label' => '',
      'language' => 'css',
      'code' => "* html .selector  {} \n.suckyie6.selector {} /* .suckyie6 can be any unused class */"
    ),
    array(
      'type' => 'selector',
      'browser' => array('ie'),
      'data-version' => array('7-'),
      'label' => '',
      'language' => 'css',
      'code' => ".selector, {}"
    ),
    array(
      'type' => 'selector',
      'browser' => array('ie'),
      'data-version' => array('7'),
      'label' => '',
      'language' => 'css',
      'code' => "*:first-child+html .selector {} \n.selector, x:-IE7 {} \n*+html .selector {} \nbody*.selector {} \n.selector\ {}"
    ),
    array(
      'type' => 'selector',
      'browser' => array('ie'),
      'data-version' => array('6'),
      'label' => 'Everything but Internet Explorer 6',
      'language' => 'css',
      'code' => "html > body .selector {}"
    ),
    array(
      'type' => 'selector',
      'browser' => array('ie'),
      'data-version' => array('6|7'),
      'label' => 'Everything but Internet Explorer 6/7',
      'language' => 'css',
      'code' => "html > /**/ body .selector {}\nhead ~ /**/ body .selector {}"
    ),
    array(
      'type' => 'selector',
      'browser' => array('ie'),
      'data-version' => array('6|7|8'),
      'label' => 'Everything but Internet Explorer 6/7/8',
      'language' => 'css',
      'code' => ":root *> .selector {} \nbody:last-child .selector {} \nbody:nth-of-type(1) .selector {} \nbody:first-of-type .selector {}"
    ),
    array(
      'type' => 'propertyValue',
      'browser' => array('ie'),
      'data-version' => array('6'),
      'label' => "",
      'language' => 'css',
      'code' => ".selector { _color: blue; } \n.selector { -color: blue; }"
    ),
    array(
      'type' => 'propertyValue',
      'browser' => array('ie'),
      'data-version' => array('7-'),
      'label' => "Internet Explorer 7-, any combination of these characters: \n ! $ & * ( ) = % + @ , . / ` [ ] # ~ ? : < > |",
      'language' => 'css',
      'code' => ".selector { !color: blue; } \n.selector { \$color: blue; } \n.selector { &color: blue; } \n.selector { *color: blue; } \n/* ... */"
        /*.selector { )color: blue; } \n.selector { =color: blue; } \n.selector { %color: blue; } \n.selector { +color: blue; } \n.selector { @color: blue; } \n.selector { ,color: blue; } \n.selector { .color: blue; } \n.selector { /color: blue; } \n.selector { `color: blue; } \n.selector { [color: blue; } \n.selector { ]color: blue; } \n.selector { #color: blue; } \n.selector { ~color: blue; } \n.selector { ?color: blue; } \n.selector { :color: blue; } \n.selector { <color: blue; } \n.selector { >color: blue; } \n.selector { |color: blue; }*/
    ),
    array(
      'type' => 'propertyValue',
      'browser' => array('ie'),
      'data-version' => array('7-'),
      'label' => 'Internet Explorer 7-, acts as an !important',
      'language' => 'css',
      'code' => ".selector { color: blue !ie; } \n/* string after ! can be anything */"
    ),
    array(
      'type' => 'propertyValue',
      'browser' => array('ie'),
      'data-version' => array('6+'),
      'label' => '',
      'language' => 'css',
      'code' => ".selector { color: blue\9; } \n.selector { color/*\**/: blue\9; }"
    ),
    array(
      'type' => 'propertyValue',
      'browser' => array('ie','op'),
      'data-version' => array('8+','10'),
      'label' => '',
      'language' => 'css',
      'code' => ".selector { color: blue\\0/; } \n/* must go at the END of all rules */"
    ),
    array(
      'type' => 'propertyValue',
      'browser' => array('ie'),
      'data-version' => array('9+'),
      'label' => '',
      'language' => 'css',
      'code' => ".selector:nth-of-type(1n) { color: blue\9; }"
    ),
    array(
      'type' => 'propertyValue',
      'browser' => array('ie'),
      'data-version' => array('6'),
      'label' => 'Everything but Internet Explorer 6',
      'language' => 'css',
      'code' => ".selector { color/**/: blue; }"
    ),
    array(
      'type' => 'media',
      'browser' => array('ie'),
      'data-version' => array('7-'),
      'label' => '',
      'language' => 'css',
      'code' => "@media screen\9 {}"
    ),
    array(
      'type' => 'media',
      'browser' => array('ie'),
      'data-version' => array('8-'),
      'label' => '',
      'language' => 'css',
      'code' => "@media \\0screen\,screen\9 {}"
    ),
    array(
      'type' => 'media',
      'browser' => array('ie'),
      'data-version' => array('8'),
      'label' => '',
      'language' => 'css',
      'code' => "@media \\0screen {}"
    ),
    array(
      'type' => 'media',
      'browser' => array('ie','op'),
      'data-version' => array('8+',''),
      'label' => '',
      'language' => 'css',
      'code' => "@media screen\\0 {}"
    ),
    array(
      'type' => 'media',
      'browser' => array('ie','sa'),
      'data-version' => array('9+','4'),
      'label' => '',
      'language' => 'css',
      'code' => "@media screen and (min-width:0\\0) {}"
    ),
    array(
      'type' => 'media',
      'browser' => array('ie'),
      'data-version' => array('10+'),
      'label' => '',
      'language' => 'css',
      'code' => "@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {}"
    ),
    array(
      'type' => 'media',
      'browser' => array('ie'),
      'data-version' => array('6|7|8'),
      'label' => 'Everything but Internet Explorer 6/7/8',
      'language' => 'css',
      'code' => "@media screen and (min-width: 400px) {}"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('ie'),
      "data-version" => array(""),
      'label' => "",
      "language" => "javascript",
      "code" => "var isIE = /*@cc_on!@*/false;"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('ie'),
      "data-version" => array("3|4|5|6|7|8|9|10"),
      'label' => "Check for Internet Explorer version",
      "language" => "javascript",
      "code" => "var ieVersion = /*@cc_on (function() {switch(@_jscript_version) {case 1.0: return 3; case 3.0: return 4; case 5.0: return 5; case 5.1: return 5; case 5.5: return 5.5; case 5.6: return 6; case 5.7: return 7; case 5.8: return 8; case 9: return 9; case 10: return 10;}})() || @*/ 0;"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('ie'),
      "data-version" => array(""),
      'label' => "Check for Internet Explorer version",
      "language" => "javascript",
      "code" => "var ieVersion = (function() { if (new RegExp(\"MSIE ([0-9]{1,}[\.0-9]{0,})\").exec(navigator.userAgent) != null) { return parseFloat( RegExp.$1 ); } else { return -1; } })();"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('ie'),
      'data-version' => array('7-'),
      'label' => '',
      'language' => 'javascript',
      'code' => 'var isIE = document.all && !document.querySelector;'
    ),
    array(
      'type' => 'javascript',
      'browser' => array('ie'),
      'data-version' => array('6|7|8|9'),
      'label' => 'IE X (6, 7, 8, 9)',
      'language' => 'javascript',
      'code' => "(checkIE = document.createElement(\"b\")).innerHTML = \"&lt;!--[if IE X]>&lt;i>&lt;/i>&lt;![endif]-->\"; \nvar isIE = checkIE.getElementsByTagName(\"i\").length == 1;"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('ie'),
      'data-version' => array('7'),
      'label' => '',
      'language' => 'javascript',
      'code' => "var isIE = navigator.appVersion.indexOf(\"MSIE 7.\")!=-1;"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('ie'),
      'data-version' => array('8-'),
      'label' => '',
      'language' => 'javascript',
      'code' => "var isIE = '\\v'=='v';"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('ie'),
      'data-version' => array('8-'),
      'label' => '',
      'language' => 'javascript',
      'code' => "var isIE = !+'\\v1';"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('ie'),
      'data-version' => array('8'),
      'label' => '',
      'language' => 'javascript',
      'code' => 'var isIE = document.all && document.querySelector && !document.addEventListener;'
    ),
    array(
      'type' => 'javascript',
      'browser' => array('ie'),
      'data-version' => array('10'),
      'label' => '',
      'language' => 'javascript',
      'code' => "var isIE = eval(\"/*@cc_on!@*/false\") && document.documentMode === 10;"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('ie'),
      'data-version' => array('10'),
      'label' => '',
      'language' => 'javascript',
      'code' => "var isIE = document.body.style.msTouchAction != undefined;"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('ie'),
      'data-version' => array('10'),
      'label' => '',
      'language' => 'javascript',
      'code' => 'var isIE = window.navigator.msPointerEnabled;'
    ),
    array(
      'type' => 'html',
      'browser' => array('ie'),
      'data-version' => array(''),
      'label' => '',
      'language' => 'markup',
      'code' => '&lt;!--[if IE]> Internet Explorer &lt;![endif]-->'
    ),
    array(
      'type' => 'html',
      'browser' => array('ie'),
      'data-version' => array(''),
      'label' => 'Not Internet Explorer',
      'language' => 'markup',
      'code' => '&lt;!--[if !IE]> Not Internet Explorer &lt;![endif]-->'
    ),
    array(
      'type' => 'html',
      'browser' => array('ie'),
      'data-version' => array('6|7|8|9'),
      'label' => 'Internet Explorer X (6, 7, 8, 9)',
      'language' => 'markup',
      'code' => '&lt;!--[if IE X]> Internet Explorer X &lt;![endif]-->'
    ),
    array(
      'type' => 'html',
      'browser' => array('ie'),
      'data-version' => array('6|7|8|9'),
      'label' => 'Internet Explorer X- (6, 7, 8, 9)',
      'language' => 'markup',
      'code' => '&lt;!--[if IE lte X]> Internet Explorer X or less &lt;![endif]-->'
    ),
    array(
      'type' => 'html',
      'browser' => array('ie'),
      'data-version' => array('6|7|8|9'),
      'label' => 'Internet Explorer X+ (6, 7, 8, 9)',
      'language' => 'markup',
      'code' => '&lt;!--[if IE gte X]> Internet Explorer X or greater &lt;![endif]-->'
    ),
    array(
      'type' => 'html',
      'browser' => array('ie'),
      'data-version' => array('6|7|8|9'),
      'label' => 'Internet Explorer X or Y (6, 7, 8, 9)',
      'language' => 'markup',
      'code' => '&lt;!--[if (IE X)|(IE Y)]> Internet Explorer X or Internet Explorer Y &lt;![endif]-->'
    ),
    array(
      'type' => 'html',
      'browser' => array('ie'),
      'data-version' => array('6|7|8|9'),
      'label' => 'Internet Explorer X+ but Y- (6, 7, 8, 9)',
      'language' => 'markup',
      'code' => '&lt;!--[if (gte IE X)&(lte IE Y)]> Internet Explorer between X and Y (included)&lt;![endif]-->'
    ),
    array(
      'type' => 'html',
      'browser' => array('ie'),
      'data-version' => array('6|7|8|9'),
      'label' => 'Conditional classes',
      'language' => 'markup',
      'code' => "&lt;!--[if lt IE 7]&gt;  &lt;html class='ie ie6 lte9 lte8 lte7'&gt; &lt;![endif]--&gt; \n&lt;!--[if IE 7]&gt;     &lt;html class='ie ie7 lte9 lte8 lte7'&gt; &lt;![endif]--&gt; \n&lt;!--[if IE 8]&gt;     &lt;html class='ie ie8 lte9 lte8'&gt; &lt;![endif]--&gt; \n&lt;!--[if IE 9]&gt;     &lt;html class='ie ie9 lte9'&gt; &lt;![endif]--&gt; \n&lt;!--[if gt IE 9]&gt;  &lt;html&gt; &lt;![endif]--&gt; \n&lt;!--[if !IE]&gt;&lt;!--&gt; &lt;html&gt;             &lt;!--&lt;![endif]--&gt;"
    ),
    array(
      'type' => 'selector',
      'browser' => array('op','sa'),
      'data-version' => array('9.27-','2'),
      'label' => '',
      'language' => 'css',
      'code' => "html:first-child .selector {}"
    ),
    array(
      'type' => 'selector',
      'browser' => array('op','ie'),
      'data-version' => array('9.5+','7'),
      'label' => '',
      'language' => 'css',
      'code' => "noindex:-o-prefocus, .selector {}"
    ),
    array(
      'type' => 'selector',
      'browser' => array('op'),
      'data-version' => array('7'),
      'label' => '',
      'language' => 'css',
      'code' => "@media all and (min-width: 0px) {}"
    ),
    array(
      'type' => 'selector',
      'browser' => array('op'),
      'data-version' => array('11-'),
      'label' => '',
      'language' => 'css',
      'code' => "@media all and (-webkit-min-device-pixel-ratio:10000), not all and (-webkit-min-device-pixel-ratio:0) {}"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('op'),
      'data-version' => array('9.64-'),
      'label' => '',
      'language' => 'javascript',
      'code' => "var isOpera = /^function \(/.test([].sort);"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('op'),
      'data-version' => array('12-'),
      'label' => '',
      'language' => 'javascript',
      'code' => "var isOpera = !!window.opera;"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('op'),
      'data-version' => array(''),
      'label' => 'Opera X',
      'language' => 'javascript',
      'code' => 'var isOpera = window.opera && window.opera.version() == X;'
    ),
    array(
      'type' => 'selector',
      'browser' => array('sa'),
      'data-version' => array('2|3'),
      'label' => '',
      'language' => 'css',
      'code' => "html[xmlns*=\"\"] body:last-child .selector {} \nhtml[xmlns*=\"\"]:root .selector  {}"
    ),
    array(
      'type' => 'selector',
      'browser' => array('sa','op'),
      'data-version' => array('2|3.1','9.25'),
      'label' => '',
      'language' => 'css',
      'code' => "*|html[xmlns*=\"\"] .selector {}"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('sa'),
      'data-version' => array('5-'),
      'label' => '',
      'language' => 'javascript',
      'code' => "var isSafari = /a/.__proto__=='//';"
    ),
    array(
      'type' => 'javascript',
      'browser' => array('sa'),
      'data-version' => array(''),
      'label' => '',
      'language' => 'javascript',
      'code' => 'var isSafari = /Constructor/.test(window.HTMLElement);'
    )
  );
?>


