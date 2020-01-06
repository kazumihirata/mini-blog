<?php

class UserRepositry extends DbRepository {

    /**
     * @param string $user_name
     * @param string $password
     * @throws Exception
     */
    public function insert($user_name, $password)
    {
        $password = $this->hashPassword($password);
        $now = new DateTime();

        $sql = "INSERT INTO user (user_name, password, created_at) VALUES(:user_name, :password, :created_at)";

        $stmt = $this->execute($sql, array(
            ':user_name'  => $user_name,
            ':password'   => $password,
            ':created_at' => $now,
        ));
    }

    /**
     * @param string $password
     * @return string
     */
    public function hashPassword($password)
    {
        return sha1($password, 'NoMusicNoLife');
    }

    /**
     * @param string $user_name
     * @return bool
     */
    public function fetchByUserName($user_name)
    {
        $sql = "SELECT COUNT(id) AS count FROM user WHERE user_name = :user_name";

        $row = $this->fetch($sql, array(':user_name' => $user_name));
        if (0 == $row['count']) {
            return true;
        }
        return false;
    }
}
