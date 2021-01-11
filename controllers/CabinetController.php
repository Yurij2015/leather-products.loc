<?php


class CabinetController
{
    public function actionIndex()
    {
        $userId = User::checkLogged();
//        echo $userId;
        $user = User::getUserById($userId);
        require_once(ROOT . '/views/cabinet/index.php');
        return true;
    }

    public function actionContactForm()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        if (isset($_POST['submit'])) {
            $userName = $_POST['userName'];
            $userEmail = $_POST['userEmail'];
            $question = $_POST['question'];

            $errors = false;

            if (!isset($userName) || empty($userName)) {
                $errors[] = 'Заполните поле "Ваше имя" ';
            }
            if (!isset($userEmail) || empty($userEmail)) {
                $errors[] = 'Заполните поле "Электронный адрес" ';
            }
            if (!isset($question) || empty($question)) {
                $errors[] = 'Заполните поле "Вопрос" ';
            }
            if ($errors == false) {
                if (ContactForm::addQuestion($userName, $userEmail, $question) === true) {
                    $msg = "Вопрос отправлен!";
                }
            }
        }

        require_once(ROOT . '/views/cabinet/contact-form.php');
        return true;
    }


    public function actionEdit()
    {
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();

        // Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);

        $name = $user['name'];
        $password = $user['password'];

        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            if ($errors == false) {
                $result = User::edit($userId, $name, $password);
            }

        }

        require_once(ROOT . '/views/cabinet/edit.php');

        return true;
    }


}