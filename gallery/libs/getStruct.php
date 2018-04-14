<?php
$Directory = new RecursiveDirectoryIterator('/gallery/photos');
$Iterator = new RecursiveIteratorIterator($Directory);
$Regex = new RegexIterator($Iterator, '/^.+(.jpe?g|.png)$/i', RecursiveRegexIterator::GET_MATCH);

foreach($Regex as $name => $Regex){
    echo "$name ";
}
?>