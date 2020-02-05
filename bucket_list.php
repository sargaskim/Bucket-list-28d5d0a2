<?PHP


$computter1 = 'Hoe veel activiteiten wil je toevoegen?'.PHP_EOL;
$computter2 = 'Wat wil je toevoegen aan jouw bucket list?'.PHP_EOL;

print ($computter1);
$n = readline("");


if (is_numeric($n)){
    for($i = 0; $i < $n; $i++){
        print ($computter2);
        $a = readline("").PHP_EOL;
        $bucket_list .= $a;
    }
    echo 'Op jouw bucket list staat: '.PHP_EOL .$bucket_list;
}

else if (!is_numeric($n)){
    echo $n.' is geen getal, probeer het opnieuw';
    exit;
}



?>