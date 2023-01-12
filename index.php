<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>todolist</title>
</head>
<body>
   <header><h1>my to do list</h1></header>
    
</body>
</html>

<?php
session_start();
$tasks = array();
if(isset($_POST['task'])) {

    $tasks[] = $_POST['task'];
}
foreach($tasks as $task) {
    echo $task . "<br>";
}
//tous ce qui va permettre d'afficher la valeur que on ecrit dans 'ajouter une tache' (input type=text)
echo '<form action="" method="post">';
echo '<label for="task">Ajouter une tâche :</label>';
echo '<input type="text" id="task" name="task">';
echo '<input type="submit" value="Ajouter">';
echo '</form>';
?>
