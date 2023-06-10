<?php

$string = "this is a common string, also a statement Soccer, Elon love Soccer, Rambo, Rambo Rambo Rambo Elon Elon Elon Elon base base rose";

$keyWords = ['betray', 'sad', 'trauma', 'rose', 'Pikachu', 'Rambo', 'base', 'Elon', 'Soccer'];

foreach($keyWords as $word){
    $count = substr_count($string, $word);

    if($count == 2) {
        $result = [];
        $result['flagged_word'] = $word;
        $result['threat_level']  = 'Critical';

        var_dump($result);

    }elseif($count == 3 || $count > 3) {
        $result = [];
        $result['flagged_word'] = $word;
        $result['threat_level']  = 'Demon';
        
        var_dump($result);
    }   
}









?>