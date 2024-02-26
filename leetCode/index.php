<!DOCTYPE html>
<html>
<head>
    <title>Index Page</title>
</head>
<body>
    <h1>Index Page</h1>
    <p>This is the index page. Below is a link to the sumoftwo.php file:</p>
    <a href="two_sums.php">Go to sum of two.php</a>
</body>
</html>

<?php
echo '<br>';
echo '<br>';
    function romanToInt($s) {
        $symbols = [
            'I'=>1, 'V'=>5, 'X'=>10, 'L'=>50, 'C'=>100, 'D'=>500, 'M'=>1000
            ];
        $number = 0;
        for($i = 0; $i < strlen($s); $i++){
            //echo $s[$i].",";
            if(array_key_exists($s[$i], $symbols)) {
                echo $s[($i+1)].",";      
            }else{
                echo "Match not found";
            }
        }
        
    }

echo romanToInt('IDL');
