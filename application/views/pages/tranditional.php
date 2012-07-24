<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">
	<style>
	  .pagelet {
	    border-style: solid;
		border-width: 1px;
	  }
	</style>
  </head>

  <body>

    <div class="container">

	  <div class="row">
	    <div class="span12">
	  	  <h1>Bigpipe</h1>
		</div>
	  </div>

	  <div class="row">
	    <div class="span12">
		  <div class="navbar">
		    <div class="navbar-inner">
			  <div class="container">
			    <a class="brand">Bigpipe</a>
			    <ul class="nav">
				  <li><a>Home</a></li>
				  <li><a>Anime</a></li>
				  <li><a>Bangumi</a></li>
				  <li><a>Music</a></li>
				  <li><a>Game</a></li>
				  <li><a>Science-Tech</a></li>
				  <li><a>Enterainment</a></li>
				</ul>
				<form class="navbar-search pull-right">
				  <input type="text" class="search-query span2" placeholder="Search">
				</form>
			  </div>
			</div>
		  </div>
		</div>
	  </div>

	  <div class="row">
	    <div class="span9">
		  <div class="row">
		    <div class="span3">
			  <div class="pagelet">
		        <div class="pagelet-header">News</div>
			    <div class="pagelet-body" id="news">
<ul>
<?php foreach ($news as $item): ?>
<li><a><?php echo $item ?></a></li>
<?php endforeach ?>
</ul></div>
			  </div>
			</div>
		    <div class="span6">
			  <div class="pagelet">
		        <div class="pagelet-header">Recommands</div>
			    <div class="pagelet-body" id="recommands">
<ul>
<?php foreach ($recommands as $item): ?>
<li><a><?php echo $item ?></a></li>
<?php endforeach ?>
</ul></div>
			  </div>
			</div>
		  </div>
		  <div class="row">
		    <div class="span9">
			  <div class="pagelet">
		        <div class="pagelet-header">Special</div>
			    <div class="pagelet-body" id="special">
<ul>
<?php foreach ($special as $item): ?>
<li><a><?php echo $item ?></a></li>
<?php endforeach ?>
</ul></div>
			  </div>
			</div>
		  </div>
		  <div class="row">
		    <div class="span6">
			  <div class="pagelet">
		        <div class="pagelet-header">Anime</div>
			    <div class="pagelet-body" id="anime">
<ul>
<?php foreach ($anime as $item): ?>
<li><a><?php echo $item ?></a></li>
<?php endforeach ?>
</ul></div>
			  </div>
			</div>
		    <div class="span3">
			  <div class="pagelet">
		        <div class="pagelet-header">New</div>
			    <div class="pagelet-body" id="anime-new">
<ul>
<?php foreach ($anime_new as $item): ?>
<li><a><?php echo $item ?></a></li>
<?php endforeach ?>
</ul></div>
			  </div>
			</div>
		  </div>
		  <div class="row">
		    <div class="span6">
			  <div class="pagelet">
		        <div class="pagelet-header">Bangumi</div>
			    <div class="pagelet-body" id="bangumi">
<ul>
<?php foreach ($bangumi as $item): ?>
<li><a><?php echo $item ?></a></li>
<?php endforeach ?>
</ul></div>
			  </div>
			</div>
		    <div class="span3">
			  <div class="pagelet">
		        <div class="pagelet-header">New</div>
			    <div class="pagelet-body" id="bangumi-new">
<ul>
<?php foreach ($bangumi_new as $item): ?>
<li><a><?php echo $item ?></a></li>
<?php endforeach ?>
</ul></div>
			  </div>
			</div>
		  </div>
		  <div class="row">
		    <div class="span6">
			  <div class="pagelet">
		        <div class="pagelet-header">Music</div>
			    <div class="pagelet-body" id="music">
<ul>
<?php foreach ($music as $item): ?>
<li><a><?php echo $item ?></a></li>
<?php endforeach ?>
</ul></div>
			  </div>
			</div>
		    <div class="span3">
			  <div class="pagelet">
		        <div class="pagelet-header">New</div>
			    <div class="pagelet-body" id="music-new">
<ul>
<?php foreach ($music_new as $item): ?>
<li><a><?php echo $item ?></a></li>
<?php endforeach ?>
</ul></div>
			  </div>
			</div>
		  </div>
		  <div class="row">
		    <div class="span6">
			  <div class="pagelet">
		        <div class="pagelet-header">Game</div>
			    <div class="pagelet-body" id="game">
<ul>
<?php foreach ($game as $item): ?>
<li><a><?php echo $item ?></a></li>
<?php endforeach ?>
</ul></div>
			  </div>
			</div>
		    <div class="span3">
			  <div class="pagelet">
		        <div class="pagelet-header">New</div>
			    <div class="pagelet-body" id="game-new">
<ul>
<?php foreach ($game_new as $item): ?>
<li><a><?php echo $item ?></a></li>
<?php endforeach ?>
</ul></div>
			  </div>
			</div>
		  </div>
		  <div class="row">
		    <div class="span6">
			  <div class="pagelet">
		        <div class="pagelet-header">Science Technology</div>
			    <div class="pagelet-body" id="science">
<ul>
<?php foreach ($science as $item): ?>
<li><a><?php echo $item ?></a></li>
<?php endforeach ?>
</ul></div>
			  </div>
			</div>
		    <div class="span3">
			  <div class="pagelet">
		        <div class="pagelet-header">New</div>
			    <div class="pagelet-body" id="science-new">
<ul>
<?php foreach ($science_new as $item): ?>
<li><a><?php echo $item ?></a></li>
<?php endforeach ?>
</ul></div>
			  </div>
			</div>
		  </div>
		  <div class="row">
		    <div class="span6">
			  <div class="pagelet">
		        <div class="pagelet-header">Entertainment</div>
			    <div class="pagelet-body" id="entertainment">
<ul>
<?php foreach ($entertainment as $item): ?>
<li><a><?php echo $item ?></a></li>
<?php endforeach ?>
</ul></div>
			  </div>
			</div>
		    <div class="span3">
			  <div class="pagelet">
		        <div class="pagelet-header">New</div>
			    <div class="pagelet-body" id="entertainment-new">
<ul>
<?php foreach ($entertainment_new as $item): ?>
<li><a><?php echo $item ?></a></li>
<?php endforeach ?>
</ul></div>
			  </div>
			</div>
		  </div>
		</div>

		<div class="span3">
		  <div class="row">
		    <div class="span3">
			  <div class="pagelet">
		        <div class="pagelet-header">Hot</div>
			    <div class="pagelet-body" id="hot">
<ul>
<?php foreach ($hot as $item): ?>
<li><a><?php echo $item ?></a></li>
<?php endforeach ?>
</ul></div>
			  </div>
			</div>
		  </div>
		  <div class="row">
		    <div class="span3">
			  <div class="pagelet">
		        <div class="pagelet-header">Tags</div>
			    <div class="pagelet-body" id="tags">
<ul>
<?php foreach ($tags as $item): ?>
<li><a><?php echo $item ?></a></li>
<?php endforeach ?>
</ul></div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap-transition.js"></script>
    <script src="/assets/js/bootstrap-alert.js"></script>
    <script src="/assets/js/bootstrap-modal.js"></script>
    <script src="/assets/js/bootstrap-dropdown.js"></script>
    <script src="/assets/js/bootstrap-scrollspy.js"></script>
    <script src="/assets/js/bootstrap-tab.js"></script>
    <script src="/assets/js/bootstrap-tooltip.js"></script>
    <script src="/assets/js/bootstrap-popover.js"></script>
    <script src="/assets/js/bootstrap-button.js"></script>
    <script src="/assets/js/bootstrap-collapse.js"></script>
    <script src="/assets/js/bootstrap-carousel.js"></script>
    <script src="/assets/js/bootstrap-typeahead.js"></script>
  </body>
</html>
