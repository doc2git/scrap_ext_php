/* Code tidied up by ScrapBook */
.clearfix {  }
.clearfix::before, .clearfix::after { display: table; content: ""; line-height: 0; }
.clearfix::after { clear: both; }
article, aside, details, figcaption, figure, footer, header, hgroup, nav, section { display: block; }
html { font-size: 100%; }
a { border-bottom: 1px solid; }
a:focus { outline: thin dotted rgb(51, 51, 51); outline-offset: -2px; }
a:hover, a:active { outline: 0px none; }
button::-moz-focus-inner, input::-moz-focus-inner { padding: 0px; border: 0px none; }
button, html input[type="button"], input[type="reset"], input[type="submit"] { cursor: pointer; }
label, select, button, input[type="button"], input[type="reset"], input[type="submit"], input[type="radio"], input[type="checkbox"] { cursor: pointer; }
@media print {
  * { text-shadow: none ! important; color: rgb(0, 0, 0) ! important; background: transparent none repeat scroll 0% 0% ! important; box-shadow: none ! important; }
  a, a:visited { text-decoration: underline; }
  a[href]::after { content: " (" attr(href) ")"; }
  .ir a::after, a[href^="javascript:"]::after, a[href^="#"]::after { content: ""; }
  pre, blockquote { border: 1px solid rgb(153, 153, 153); page-break-inside: avoid; }
  thead { display: table-header-group; }
  tr, img { page-break-inside: avoid; }
  img { max-width: 100% ! important; }
  @page { margin: 0.5cm; }
  p, h2, h3 { orphans: 3; widows: 3; }
  h2, h3 { page-break-after: avoid; }
}
.navbar .brand { margin-right: 0.75rem; float: left; display: block; height: 1.5rem; padding: 0.75rem 0.75rem 0.75rem 1.5rem; }
.navbar .brand:hover, .navbar .brand:focus { text-decoration: none; }
.navbar-search { position: relative; float: left; margin-top: 0.625rem; margin-bottom: 0px; width: 100%; box-sizing: border-box; }
.navbar-search .search-query { margin-bottom: 0px; padding: 0.125rem 0.5rem; box-sizing: border-box; width: 100%; }
.navbar-fixed-top .navbar-inner { margin: 0px auto; }
.navbar .nav { position: relative; left: 0px; display: block; float: left; margin: 0px 10px 0px 0px; }
.navbar .nav > li { float: left; }
.navbar .nav > li > a { float: none; padding: 0.75rem; }
@media (max-width: 480px) {
}
@media (min-width: 768px) and (max-width: 979px) {
}
@media (max-width: 767px) {
}
@media (max-width: 979px) {
}
@media (min-width: 980px) {
}
@media (min-width: 1200px) {
}
@media (min-width: 1500px) {
}
body, input, textarea { font-family: "Fira Sans","Source Sans Pro",Helvetica,Arial,sans-serif; font-weight: 400; }
code, pre.info, .docs .classsynopsis, .docs .classsynopsis code { font: 0.875rem/1.5rem "Fira Mono","Source Code Pro",monospace; word-wrap: break-word; }
body { font-size: 1rem; line-height: 1.5rem; padding-left: 0px; padding-right: 0px; padding-bottom: 0px; margin: 0px; }
button, input, select, textarea { font-family: inherit; font-size: 100%; margin: 0px; }
button, input { line-height: normal; }
input[type="search"] { box-sizing: content-box; }
h1, h2, h3, h4, h5, h6 { line-height: 3rem; margin: 0px 0px 1.5rem; overflow: hidden; text-rendering: optimizelegibility; }
h1 { font-size: 1.75rem; }
h3 { font-size: 1.25rem; }
p { margin: 0px 0px 1.5rem; }
ul, ol { margin: 0px 0px 1.5rem 1.5rem; padding: 0px; }
p:empty { margin: 0px; height: 0px; display: none; }
small { font-size: 0.75rem; }
blockquote { margin: 0.75rem 0px 0.75rem 0.75rem; }
a { text-decoration: none; }
.navbar .brand img { padding: 0px; opacity: 0.75; border: 0px none; }
.navbar a { border: 0px none; }
.navbar { border-bottom: 0.25rem solid; overflow: visible; }
.page-tools { text-align: right; }
.page-tools #changelang-langs, .page-tools .edit-bug { font-size: 0.75rem; }
.page-tools .edit-bug a { border: 0px none; margin-left: 1rem; }
#usernotes { position: relative; margin-top: 1.5rem; }
#usernotes .count { display: inline-block; vertical-align: text-top; padding: 0.25rem 0.375rem; font-size: 0.75rem; line-height: 1rem; }
#usernotes .action { display: block; top: 8px; right: 12px; position: absolute; text-align: right; z-index: 1; }
#usernotes .foot { text-align: right; margin-bottom: 1rem; }
#usernotes .note { margin: 1.5rem 0px; position: relative; }
#usernotes .note .votes { float: left; }
#usernotes .note .name { border-bottom: 0px none; margin-left: 1rem; font-size: 1.125rem; }
#usernotes .note .name em { font-style: normal; font-weight: normal; }
#usernotes .note .date { float: right; text-align: right; }
#usernotes .note .date strong { font-weight: normal; }
#usernotes .note .text { padding: 0.75rem; border-radius: 0px 0px 2px 2px; }
#usernotes .note .votes > div:first-child { float: left; }
#usernotes .note .votes > div { float: right; }
#usernotes .note .votes a { display: block; height: 0px; width: 0px; overflow: hidden; margin: 8px 0px 0px; border-left: 8px solid transparent; border-right: 8px solid transparent; border-bottom: 0px none; }
#usernotes .note .votes .usernotes-voteu { border-bottom: 10px solid rgb(153, 153, 153); }
#usernotes .note .votes .usernotes-voted { border-top: 10px solid rgb(153, 153, 153); }
#usernotes .note .votes .usernotes-voteu:hover, #usernotes .note .votes .usernotes-voteu:focus { border-bottom: 10px solid rgb(0, 17, 85); }
#usernotes .note .votes .usernotes-voted:hover, #usernotes .note .votes .usernotes-voted:focus { border-top: 10px solid rgb(0, 17, 85); }
#usernotes .note .votes .tally { padding: 0px 0.3rem; }
dl dd { margin: 0px 0px 1.5rem; padding: 0px 1.5rem; }
.phpcode, div.classsynopsis { text-align: left; }
#layout { margin: 0px auto 1.5rem; clear: both; }
.layout-menu { padding: 0.75rem 1.5rem 1.5rem; box-sizing: border-box; }
#layout-content { padding: 1.5rem; box-sizing: border-box; }
#layout-content:only-child { width: 100%; }
body > footer { clear: both; overflow: auto; line-height: 3rem; }
body > footer .footer-content { margin: 1.5rem auto 0px; padding: 0px 1.5rem; box-sizing: border-box; }
body > footer ul { margin: 0px; padding: 0px; }
body > footer .footmenu li { display: inline-block; margin: 0px 0.75rem; }
body > footer a { display: inline-block; border-bottom: 0px none; }
table { border-collapse: collapse; border-spacing: 0px; margin: 0px 0px 1.5rem; }
table td { vertical-align: top; }
strong, em { text-rendering: optimizelegibility; }
em { font-weight: normal; font-style: italic; }
strong { font-weight: bolder; font-style: normal; }
article strong, #layout-content ol strong, #layout-content ul strong, #layout-content p strong { font-weight: 500; }
#toTop { display: none; text-decoration: none; position: fixed; bottom: 0.75rem; right: 0.75rem; overflow: hidden; width: 43px; height: 43px; border: medium none; z-index: 100; }
#toTopHover { display: block; overflow: hidden; float: left; }
#toTop:active, #toTop:focus { outline: medium none; }
fieldset { margin: 0px; padding: 0px; border: 0px none; }
.navbar ul { list-style: outside none none; }
.navbar a { display: inline-block; }
.twitter-typeahead { width: 100%; }
.navbar .navbar-search .tt-hint.search-query { color: silver; }
.search-query { z-index: 2 ! important; }
.tt-dropdown-menu { background: rgb(226, 228, 239) none repeat scroll 0px 0px; border-bottom: 1px solid rgb(196, 201, 223); border-radius: 0px 0px 2px 2px; box-shadow: 1px 0px 1px -1px rgb(196, 201, 223) inset, -1px 0px 1px -1px rgb(196, 201, 223) inset, 0px 0px 1px rgb(79, 91, 147); color: rgb(51, 51, 51); padding-top: 3px; margin-top: -3px; min-width: 100%; }
@media screen and (max-height: 480px) {
}
@media screen and (max-height: 400px) {
}
@media (max-width: 465px) {
}
.title { position: relative; clear: both; }
.title a { border: 0px none; }
.refentry .refsect1 { margin-bottom: 3rem; }
div.tip, div.warning, div.caution, blockquote.note { padding: 0.75rem; margin: 1.5rem 0px; overflow: hidden; }
blockquote.note strong.note { font-size: 1.125rem; }
blockquote.note p, div.caution p, div.warning p, div.tip p { margin: 1.5rem 0px 0px; }
blockquote.note :first-child + p, div.caution :first-child + p, div.warning :first-child + p, div.tip :first-child + p, blockquote.note p:first-child, div.caution p:first-child, div.warning p:first-child, div.tip p:first-child { margin: 0px; }
.docs .phpcode code { display: block; }
.docs th { text-align: left; }
.docs td, .docs th { padding: 0.25rem 0.5rem; }
.doctable, .segmentedlist { width: 100%; margin: 0px 0px 1.5rem; }
.doctable thead tr, .segmentedlist thead tr { border: 1px solid; }
.doctable tr, .segmentedlist tr { border: 1px solid; }
ul.simplelist { list-style-type: disc; }
.docs .refnamediv { position: relative; }
#changelang { border: 0px none; }
.docs .layout-menu ul.parent-menu-list { list-style: outside none none; margin: 0px; padding: 0px; }
.docs .layout-menu ul.parent-menu-list > li { margin-top: 0px; margin-bottom: 0px; }
.docs .layout-menu ul.parent-menu-list > li > a { border: 0px none; font-size: 1.125rem; margin-bottom: 0.75rem; display: block; }
.docs .layout-menu ul.child-menu-list { margin: 0px; }
.layout-menu ul.child-menu-list li { list-style-type: none; margin: 0px; }
.layout-menu ul.child-menu-list li:first-child a { border-top: 1px dotted; margin-top: -1px; }
.layout-menu ul.child-menu-list a { font-size: 0.875rem; border-bottom: 1px dotted; margin-bottom: -1px; display: block; padding-left: 0.75rem; position: relative; }
.layout-menu ul.child-menu-list .current { font-weight: bolder; }
.layout-menu ul.child-menu-list a:hover::before, .layout-menu ul.child-menu-list a:focus::before, .layout-menu ul.child-menu-list .current a::before { content: "» "; position: absolute; left: 0px; }
#breadcrumbs { box-sizing: border-box; padding: 0.75rem 0px; font-size: 0.875rem; display: none; }
#breadcrumbs #breadcrumbs-inner { margin: 0px auto; }
#breadcrumbs ul { margin: 0px; padding: 0px 0.5rem 0px 1.5rem; overflow: hidden; }
#breadcrumbs-inner div { padding: 0px 1.5rem; }
#breadcrumbs li { display: inline-block; }
#breadcrumbs li + li::before { padding: 0px 0.5rem; content: "›"; }
#breadcrumbs a:link, #breadcrumbs a:visited { border-width: 0px; }
#breadcrumbs .next, #breadcrumbs .prev { float: right; }
@media (min-width: 768px) {
  .navbar-fixed-top { top: 0px; transform: translateZ(0px); }
  body { margin: 3.25rem 0px 0px; }
  #breadcrumbs { display: block; }
  .navbar-search, #intro .download, #intro .background, aside.tips, .layout-menu { width: 25%; float: left; }
  #intro .blurb, #layout-content { float: left; width: 75%; }
  .navbar-fixed-top { position: fixed; right: 0px; left: 0px; z-index: 1030; margin-bottom: 0px; }
}
@media (min-width: 768px) and (max-width: 979px) {
  #intro .download, aside.tips, .navbar-search { width: 30% ! important; }
  #intro .blurb, #layout-content { width: 70% ! important; }
}
@media (min-width: 1200px) {
  #intro .container, .navbar-inner, #breadcrumbs-inner, #goto div, #trick div, #layout, body > footer .footer-content { width: 1170px; }
}
@media (min-width: 1500px) {
  #intro .container, .navbar-inner, #breadcrumbs-inner, #goto div, #trick div, #layout, body > footer .footer-content { width: 1440px; }
}
#mainmenu-toggle-overlay, #mainmenu-toggle { display: none; }
@media (max-width: 767px) {
  .navbar-search { float: left; clear: both; margin-top: 0px; padding: 0px 10px 10px; }
  .navbar .nav { margin-right: 0px; }
  #mainmenu-toggle-overlay { background: rgb(79, 91, 147) url("mobile-menu.png") no-repeat scroll center center; float: right; display: block; height: 32px; width: 34px; margin-top: 10px; margin-right: 10px; border-radius: 5px; }
  #mainmenu-toggle { height: 32px; width: 34px; line-height: 32px; margin-top: 10px; margin-right: -34px; float: right; border-bottom: 0px none; display: inline-block; opacity: 0; }
  .navbar .brand { float: left; margin-bottom: 0.5rem; }
  .navbar-search { margin-top: 0px; padding: 0px 10px 10px; }
  .navbar .brand img { display: block; margin-left: 12px; }
  .navbar .nav { clear: both; float: none; max-height: 0px; overflow: hidden; transition: max-height 400ms ease 0s; }
  .navbar .nav > li, .footmenu > li { float: none; display: block; text-align: center; }
  .navbar .nav > li a, .footmenu > li > a { width: 100%; display: block; padding-left: 0px; }
  #mainmenu-toggle:checked + .nav { max-height: 50rem; }
  #flash-message { margin-top: 0px ! important; top: 0px; }
}
@media (min-width: 768px) {
  #topsearch { float: right; }
  .navbar-search .search-query { width: 100%; }
}
@media (max-width: 979px) and (min-width: 768px) {
}
@media (min-width: 980px) {
}
@media (min-width: 1200px) {
}
@media (min-width: 1548px) {
  #layout { padding-right: 0px; }
}
#goto { display: none; background-color: rgb(51, 51, 51); height: 100%; width: 100%; opacity: 0.9; position: fixed; top: 50px; z-index: 5000; color: rgb(230, 230, 230); }
#goto .search .results { text-shadow: 0px 2px 3px rgb(85, 85, 85); font-size: 2rem; line-height: 1; }
#goto .search .results :focus { font-size: 2rem; line-height: 1.2; }
#goto .search .text { color: rgb(34, 34, 34); text-shadow: 0px 2px 3px rgb(85, 85, 85); font-size: 10rem; line-height: 0.7; }
#trick { display: none; background-color: rgba(51, 51, 51, 0.95); height: 100%; width: 100%; position: fixed; top: 50px; z-index: 5000; }
#goto div, #trick div { margin: 0px auto; }
#trick dt, #trick dl { color: rgb(230, 230, 230); }
#trick dl { display: inline-block; vertical-align: top; }
#trick a { color: rgb(230, 230, 230); display: block; border-bottom: medium none; padding: 1px; }
#flash-message { height: auto; margin-top: 4px; position: fixed; width: 100%; z-index: 95; text-align: center; box-shadow: 0px 0.25rem 0.25rem rgba(0, 0, 0, 0.1); }
