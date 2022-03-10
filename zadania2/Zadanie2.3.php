<?php
$text="Oh my gosh this poo";
function filterwords($text){
    $filterWords = array('gosh', 'darn', 'poo');
    $filterCount = sizeof($filterWords);
    for($i=0; $i < $filterCount; $i++) {
        $text = preg_replace('/\b'.$filterWords[$i].'\b/ie',"str_repeat('*',strlen('$0'))",$text);
    }
    echo "$text";
}
filterwords($text);
