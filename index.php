<?php
/*
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

    $string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum maxime dolor nihil omnis vero fuga vel reprehenderit placeat incidunt explicabo voluptates quos quaerat temporibus, voluptas corrupti molestiae sapiente illo esse ad ipsam iure cupiditate ipsum itaque amet. Velit dolore, in facere nemo laudantium obcaecati incidunt dolorum possimus rem. Nostrum dolore ullam inventore sequi iusto eum blanditiis maiores deserunt fugit voluptate?";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Paragrafo originale</h2>
    <p><?php echo $string; ?></p>
    <small>Lunghezza paragrafo: <?php echo strlen($string); ?></small>
    <hr>
    <h2>Paragrafo censurato</h2>
    <p><?php
        if(empty( $_GET["badword"]) == false){
            $word = $_GET["badword"];
            var_dump(empty($word));
            $modifiedString = str_replace($word, "***", $string);
            
        } else {
            $modifiedString = $string;
        }
        echo $modifiedString;
    ?></p>
    <small>Lunghezza paragrafo: <?php echo strlen($modifiedString); ?></small>
</body>
</html>
