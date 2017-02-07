<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <title>PHP: Manual Quick Reference</title>

 <link rel="shortcut icon" href="http://php.net/favicon.ico">
 <link rel="search" type="application/opensearchdescription+xml" href="http://php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="http://php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="http://php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="http://php.net/quickref.php">
 <link rel="shorturl" href="http://php.net/quickref">
 <link rel="alternate" href="http://php.net/quickref" hreflang="x-default">



<link rel="stylesheet" type="text/css" href="http://php.net/cached.php?t=1421837618&amp;f=/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="http://php.net/cached.php?t=1421837618&amp;f=/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="http://php.net/cached.php?t=1478800802&amp;f=/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="http://php.net/cached.php?t=1449787206&amp;f=/styles/theme-medium.css" media="screen">

 <!--[if lte IE 7]>
 <link rel="stylesheet" type="text/css" href="http://php.net/styles/workarounds.ie7.css" media="screen">
 <![endif]-->

 <!--[if lte IE 8]>
 <script type="text/javascript">
  window.brokenIE = true;
 </script>
 <![endif]-->

 <!--[if lte IE 9]>
 <link rel="stylesheet" type="text/css" href="http://php.net/styles/workarounds.ie9.css" media="screen">
 <![endif]-->

 <!--[if IE]>
 <script type="text/javascript" src="http://php.net/js/ext/html5.js"></script>
 <![endif]-->

 <base href="http://php.net/manual-lookup.php">

</head>
<body class="help ">

<nav id="head-nav" class="navbar navbar-fixed-top">
  <div class="navbar-inner clearfix">
    <a href="/" class="brand"><img src="/images/logos/php-logo.svg" width="48" height="24" alt="php"></a>
    <div id="mainmenu-toggle-overlay"></div>
    <input type="checkbox" id="mainmenu-toggle">
    <ul class="nav">
      <li class=""><a href="/downloads">Downloads</a></li>
      <li class=""><a href="/docs.php">Documentation</a></li>
      <li class=""><a href="/get-involved" >Get Involved</a></li>
      <li class="active"><a href="/support">Help</a></li>
    </ul>
    <form class="navbar-search" id="topsearch" action="/search.php">
      <input type="hidden" name="show" value="quickref">
      <input type="search" name="pattern" class="search-query" placeholder="Search" accesskey="s">
    </form>
  </div>
  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/conferences/index.php#id2017-01-23-1'>php[tek] 2017: Atlanta</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.globals.php'>Using Register Globals</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.magicquotes.php'>Magic Quotes</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.xforms.php'>Dealing with XForms</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.safe-mode.php'>Safe Mode</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.creditcard.php'>Credit Card Processing</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>





<div id="layout" class="clearfix">
  <section id="layout-content">

<h1>PHP Function List</h1>


<p>
 <b>fonts/fira/ttf/firamono-regular.ttf</b> doesn't exist. Closest matches:
</p>

<!-- result list start -->
<ul id="quickref_functions">
<li><a href="/manual/zh/class.iteratoraggregate.php">iteratoraggregate</a></li>
<li><a href="/manual/zh/function.cairo-font-options-create.php">cairo_font_options_create</a></li>
<li><a href="/manual/zh/function.cairo-pattern-create-linear.php">cairo_pattern_create_linear</a></li>
<li><a href="/manual/zh/function.cairo-matrix-translate.php">cairo_matrix_translate</a></li>
<li><a href="/manual/zh/function.fann-train-on-data.php">fann_train_on_data</a></li>
<li><a href="/manual/zh/function.cairo-pattern-create-rgb.php">cairo_pattern_create_rgb</a></li>
<li><a href="/manual/zh/function.cairo-font-options-equal.php">cairo_font_options_equal</a></li>
<li><a href="/manual/zh/function.cairo-pattern-create-rgba.php">cairo_pattern_create_rgba</a></li>
<li><a href="/manual/zh/function.openal-buffer-create.php">openal_buffer_create</a></li>
<li><a href="/manual/zh/class.mongoresultexception.php">mongoresultexception</a></li>
<li><a href="/manual/zh/function.oci-get-implicit-resultset.php">oci_get_implicit_resultset</a></li>
<li><a href="/manual/zh/function.cairo-pattern-create-for-surface.php">cairo_pattern_create_for_surface</a></li>
<li><a href="/manual/zh/function.trader-cdlmorningstar.php">trader_cdlmorningstar</a></li>
<li><a href="/manual/zh/function.fann-set-training-algorithm.php">fann_set_training_algorithm</a></li>
<li><a href="/manual/zh/function.fann-get-training-algorithm.php">fann_get_training_algorithm</a></li>
<li><a href="/manual/zh/function.cairo-pattern-create-radial.php">cairo_pattern_create_radial</a></li>
<li><a href="/manual/zh/function.stats-stat-correlation.php">stats_stat_correlation</a></li>
<li><a href="/manual/zh/class.yaf-bootstrap-abstract.php">yaf_bootstrap_abstract</a></li>
<li><a href="/manual/zh/function.pdf-continue-text.php">pdf_continue_text</a></li>
<li><a href="/manual/zh/function.ibase-name-result.php">ibase_name_result</a></li>
<li><a href="/manual/zh/function.sqlite-create-aggregate.php">sqlite_create_aggregate</a></li>
<li><a href="/manual/zh/function.fann-shuffle-train-data.php">fann_shuffle_train_data</a></li>
<li><a href="/manual/zh/function.id3-get-frame-long-name.php">id3_get_frame_long_name</a></li>
<li><a href="/manual/zh/function.fann-set-activation-function-output.php">fann_set_activation_function_output</a></li>
<li><a href="/manual/zh/class.intliterator.php">intliterator</a></li>
<li><a href="/manual/zh/class.intltimezone.php">intltimezone</a></li>
<li><a href="/manual/zh/function.similar-text.php">similar_text</a></li>
<li><a href="/manual/zh/class.swftextfield.php">swftextfield</a></li>
<li><a href="/manual/zh/function.m-settimeout.php">m_settimeout</a></li>
<li><a href="/manual/zh/function.connection-aborted.php">connection_aborted</a></li>
</ul>
<!-- result list end -->
    </section><!-- layout-content -->
    
<aside class="tips">
    <div class="inner"><p class="panel"><a href="/search.php?show=all&amp;pattern=fonts%2Ffira%2Fttf%2Ffiramono-regular.ttf">Full website search</a></div>
</aside>

  </div><!-- layout -->
         
  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/copyright.php">Copyright &copy; 2001-2017 The PHP Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/mirrors.php">Mirror sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
 <!-- External and third party libraries. -->
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="http://php.net/cached.php?t=1421837618&amp;f=/js/ext/modernizr.js"></script>
<script type="text/javascript" src="http://php.net/cached.php?t=1421837618&amp;f=/js/ext/hogan-2.0.0.min.js"></script>
<script type="text/javascript" src="http://php.net/cached.php?t=1421837618&amp;f=/js/ext/typeahead.min.js"></script>
<script type="text/javascript" src="http://php.net/cached.php?t=1421837618&amp;f=/js/ext/mousetrap.min.js"></script>
<script type="text/javascript" src="http://php.net/cached.php?t=1421837618&amp;f=/js/search.js"></script>
<script type="text/javascript" src="http://php.net/cached.php?t=1478627406&amp;f=/js/common.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

</body>
</html>

