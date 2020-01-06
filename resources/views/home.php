<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bibliothèque</title>
</head>
<body>
    <?php 
// echo '<pre>';
// print_r($books);
// // print_r($books[0]['title']);
// echo '<pre>';

foreach($books as $key => $value){
    echo '<h2>'.$books[$key]['title'].'</h2>';
    echo '<p>'.$books[$key]['description'].'</p>';
 }
    ?>

</body>
</html>