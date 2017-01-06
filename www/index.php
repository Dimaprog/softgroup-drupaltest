<?php
function validateEmail($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return "<p class='wrong'>некоректно введені данні</p>";
    }
    return "<p>Вдячні за реєстрацію</p>";
}

function numberArray($array){
    $newArray = [];
    foreach($array as $value){
        $newArray[] = $value * count($array);
    }
    return $newArray;
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Soft-Group Test Drupal</title>
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
<div class="content">
    <div class="form">
        <div class="form-button">
            Приховати/показати
        </div>
        <form id="form1" action="/" method="post">
           <p>
               Ваше імя:<br>
               <input type="text" name="name" value="">
           </p>
            <p>
                Ваш email:<br>
                <input type="text" name="email" value="" required>
            </p>
            <p>
                <input type="submit" value="Відправити">
            </p>
        </form>
        <div class="alert-message">
            <?php if(!empty($_POST['email'])){
                print validateEmail($_POST['email']);
            }?>
        </div>
    </div>
    <div class="numberArray">
        <h3>множення кожного числа на кількість елементів масиву:</h3>
        <?php
            $arrayNumber  = [1,2,3,4,5,6,7,8,9,0];
            print(implode(",",numberArray($arrayNumber)));
        ?>
    </div>
    <div class="green-block">

    </div>
</div>
</body>
<script type='text/javascript' src='/js/jquery-3.1.1.min.js'></script>
<script type='text/javascript' src='/js/main.js'></script>
</html>