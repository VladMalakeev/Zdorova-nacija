<?php
function showErrorMessage($errors){
    $data = "<ul class='errors'>";
    foreach ($errors as  $error){
        $data .= '<li>'.$error.'</li>';
    }
    $data .= "</ul>";
    return  $data;
}
/**
 * Обработчик формы авторизации
 * Авторизация пользователя
 */
//Если нажата кнопка то обрабатываем данные
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password = $_POST['password'];
    /*Создаем запрос на выборку из базы
    данных для проверки подлиности пользователя*/
    $sql = "SELECT * FROM admins WHERE login = '$email'";
    //Получаем данные SQL запроса
    $admin = $db->query($sql)->fetch(PDO::FETCH_LAZY);

    if(!empty($admin))
    {
        //Получаем данные из таблицы
        if(md5(md5($password).$admin->salt) == $admin->password)
        {
            $_SESSION['email'] = $email;
            $_SESSION['user'] = true;
            //Сбрасываем параметры
            header('Location:/' );
            exit;
        }
        else
            $err[] = 'Не верный логин или пароль';
        echo showErrorMessage($err);
    }else{
        $err[] = 'Не верный логин или пароль';
        echo showErrorMessage($err);
    }
}