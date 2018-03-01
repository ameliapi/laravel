<script type="text/javascript" src="js/app.js"></script>
<link rel="stylesheet" type="text/css" href="css/app.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href=""/>

<header class="bg1">

	<div class="block">
		
	</div>
	<div class="header-image">
		<img src="https://en.wikipedia.org/wiki/Rocky_Mountains#/media/File:Moraine_Lake_17092005.jpg">
	</div>
	<div class="block">
		
	</div>

</header>


<h1> Twitter </h1>

<div class="container">

    <h2>Users</h2>
    <ul>
        <?php foreach ($users as $user): ?>
            <li class="user">
            	<img class="avatar" src="<?php echo $user->image ?>" alt=""><br/>
                <?php echo $user->name; ?><br/>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2> Tweets </h2>
    <ul>
	    <?php foreach ($tweets as $tweet): ?>
	        <li class="tweet">
	        	<img class="avatar" src="<?php echo $tweet->user->image; ?>" alt=""><br/>
	        	<?php echo $tweet->user->name; ?><br/>
	            <?php echo $tweet->content; ?><br/>
	            <?php date_default_timezone_set("America/Edmonton"); 
      				  echo $tweet->time -> format("Y-m-d h:i:sa"); ?><br/><br/>
	        </li>
	    <?php endforeach; ?>
    </ul>

</div>