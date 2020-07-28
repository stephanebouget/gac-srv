<?php

// https://files.000webhost.com/
$timestamp = mt_rand(0, 100);

$content = file_get_contents('https://www.programme-tv.net/programme/chaine/programme-golfplus-189.html?'.$timestamp);
// $content = str_replace('</title>','</title><base href="https://www.programme-tv.net/" />', $content);
$content = str_replace('</head>','
<link rel="stylesheet" href="https://www.programme-tv.net/telfront/desktop/assets/styles/0.19194f4c31a23f572aa9.css" />
<link rel="stylesheet" href="https://www.programme-tv.net/telfront/desktop/assets/styles/rwd-epg-channel.19194f4c31a23f572aa9.css" />
<link rel="stylesheet" href="https://delphinecoiffure.000webhostapp.com/gac-tv.css" />

</head>', $content);
echo $content;

?>