<!DOCTYPE html>
<html>
<head>
    <title><?php echo "Cunnan Jr PHP"; ?></title>
</head>
<body>
    <h1>Cunnan Jr PHP</h1>
    <pre><?php echo str_repeat(" ", 4) . strtoupper(substr("Cunnan Jr", 0, 1)) . "    "; echo asciiArtLetter("Cunnan Jr"); ?></pre>
    <p>SHA256 hash of "Cunnan Jr" is <?php echo hash('sha256', 'Cunnan Jr'); ?></p>
</body>
</html>

<?php
function asciiArtLetter($name){
    $letter = strtoupper(substr($name, 0, 1));
    switch($letter){
        case 'C':
            return " _______\n(  __  )\n )  (  )\n(  \  )\n \___/ \n";
        case 'S':
            return " _______\n(  __  )\n )  (  )\n(    )\n )    ( \n";
        default:
            return " _______\n(  __  )\n )  (  )\n(    )\n \\____/ \n";
    }
}

echo " <a href='fail.php'>Click here to see the error setting</a>\n" . "<br>";
echo " <a href='check.php'>Click here to cause a traceback</a>\n";
