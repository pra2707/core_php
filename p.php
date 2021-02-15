<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php </title>
</head>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
.container{
    max-width:80%;
    background-color:grey;
    margin:auto;
}
</style>
<body>
    <div class="container">
    <h1> Lets Learn about php<h1>
    This is container
    <?php
    $age=34;
    if($age>18){
        echo"you can go to party";
    }?>
    </div>
</body>
</html>