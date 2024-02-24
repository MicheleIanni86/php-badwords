<!-- LOGICA PHP -->
<?php
$user_text = $_GET['inputText'];
$text_length = strlen($user_text);
$wrong_word = $_GET['wrongWord'];
$text_censured = str_replace($wrong_word, '***', $user_text);
$new_text_lenght = strlen($text_censured);
?>
<!-- ---------------------------------------------------- -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words Result</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 

</head>
<body>
    <div class="container mt-5">
        <div class="fw-bold display-5 mb-2"> Il testo da te inserito è:</div>
        <div class="fs-1"><?php echo $user_text ?></div>

        <div class="fs-4"> Il testo da te inserito ha: <span class="fw-bold fs-4"><?php echo $text_length ?> caratteri </span></div>      
    </div>

    <div class="container mt-5">
      <div class="fs-1"> La parola scelta da censurare è: <span class="fw-bold"><?php echo $wrong_word ?></span></div>
    </div>
    <div class="container my-5">
        <div class="fw-bold display-5 mb-2"> Il testo censurato ora è:</div>
        <div class="fs-1"><?php echo $text_censured ?></div>

        <div class="fs-4"> Il nuovo testo censurato ora ha: <span class="fw-bold fs-4"><?php echo $new_text_lenght ?> caratteri </span></div> 
    </div>
    
</body>
</html>