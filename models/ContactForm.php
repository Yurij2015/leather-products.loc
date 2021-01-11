<?php


class ContactForm
{
    /**
     * @param string $userName
     * @param string $userEmail
     * @param string $question
     * @return bool
     */
    public static function addQuestion($userName, $userEmail, $question)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO contactForm (userName, userEmail, question) '
            . 'VALUES (:userName, :userEmail, :question)';
        $result = $db->prepare($sql);
        $result->bindParam(':userName', $userName, PDO::PARAM_STR);
        $result->bindParam(':userEmail', $userEmail, PDO::PARAM_STR);
        $result->bindParam(':question', $question, PDO::PARAM_STR);
        return $result->execute();
    }
}