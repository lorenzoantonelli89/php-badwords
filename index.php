<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LVC php</title>
</head>
<body>

    <h1>
        <?php
            
            $sentence = 'Lorem ipsum dolor, sit amet consecutor ini farld, ipsum dolor.';
            echo strlen($sentence);
            echo ' ';
            echo str_replace($_GET['badword'], '***', $sentence);

        ?>     
    </h1>

    
    
</body>
</html>