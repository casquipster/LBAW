<!DOCTYPE html>
<html>
<head>
	<title>STOCKR</title>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> <!-- for jquery-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />-->
  <script src="{$BASE_URL}javascript/main.js"></script>
  <link rel="stylesheet" href="/css/style.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
  <meta charset = "UTF-8">

</head>

<body>
<header>
<div class = "navbar navbar-inverse navbar-static-top">
    <div class= "container">
			<a href="{$BASE_URL}" class="navbar-brand">
				<div class="img" ><img style="margin-top:-25px" src="../../images/logo.png" width="90" height="70"></div></a>
      <button class ="navbar-toggle" data-toggle ="collapse" data-target =".navHeaderCollapse">
        <span class ="icon-bar"></span>
        <span class ="icon-bar"></span>
        <span class ="icon-bar"></span>
      </button>
			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class ="nav navbar-nav navbar-right">
					<li>
						<form class="navbar-form navbar-left" role="search">
							<li class="dropdown-list">
								<a class="dropdown" id="dropdown">
									<div id="search_data_div">
										<input id="searchData" type="text" placeholder="Search">
									</div>
								</a>
								<ul class="dropdown-menu">
									<div id = "results">
									</div>
								</ul>
							</li>
						</form>
					</li>
					</ul>
    	
    	{if $USERNAME}
        {include file='common/menu_logged_in.tpl'}
      {else}
        {include file='common/menu_logged_out.tpl'}
      {/if}
</div>
  	</div>
	</div>
	</header>
	 <div id="error_messages">
    {foreach $ERROR_MESSAGES as $error}
      <div class="error">{$error}<a class="close" href="#">X</a></div>
    {/foreach}
    </div>
    <div id="success_messages">
    {foreach $SUCCESS_MESSAGES as $success}
      <div class="success">{$success}<a class="close" href="#">X</a></div>
    {/foreach}
    </div>
