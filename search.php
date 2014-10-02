



<?php

$words_list = array('apple', 'banana', 'cat', 'dog', 'error', 'failure', 'good','hero');

$string = $_POST['searchfield'];

foreach ($words_list as &$word) {

	$word = preg_quote($word, '/');
	$string = preg_replace ("/" . preg_quote($word) . "/",
                          "<span class='found'>" . $word . "</span>",
                          $string);
}

$num_found = preg_match_all('/('.join('|', $words_list).')/i', $string, $matches);
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- LIBS-->
    <link rel="stylesheet" href="search.css">

  </head>
  <body>
    <h1>RESULTS<h1>

    <div id="text-display" >
    	<p>	<?php echo $string;?></p>
    </div>

    <div id="results-display">
    	<p>
    	<?php
        echo 'Found '.$num_found;
    	 ?>
      </p>
    </div>


  </body>

