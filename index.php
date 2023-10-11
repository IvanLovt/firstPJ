<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $sessi =$_POST["sessia1","sessia2","sessia3"]

    if(mail("kody0000@mail.ru", "Новая заявка на экскурсию от:" 
            "Имя:".$name."\n"
            "Телефон:".$phone."\n"
            "Адрес почты:".$email."\n"
            "Что заказал:".$sessi."\n")
    ){
        echo('Ваша заявка успешно отправлена, мы с вами свяжемся!!!');
    }
    else{
        echo('Что-то пошло не так...');
    }

?>



