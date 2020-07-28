<?php

// https://files.000webhost.com/
$timestamp = mt_rand(0, 100);

$content = file_get_contents('https://www.programme-tv.net/programme/chaine/programme-golfplus-189.html?'.$timestamp);
// $content = str_replace('</title>','</title><base href="https://www.programme-tv.net/" />', $content);
$content = str_replace('</head>','
<link rel="stylesheet" href="https://gac-srv.herokuapp.com/epg-1.css" />
<link rel="stylesheet" href="https://gac-srv.herokuapp.com/epg-2.css" />
<link rel="stylesheet" href="https://gac-srv.herokuapp.com/epg-3.css" />
<link rel="stylesheet" href="https://gac-srv.herokuapp.com/gac-tv.css" />

</head>', $content);
echo $content;

?>