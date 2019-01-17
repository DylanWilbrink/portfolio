<?php
$username = new getname;

Class getname
{
    public function dbConnect()
    {
        return new PDO("mysql:host=localhost; dbname=hhh", "root", "");
    }

    public function getUsername($user_id)
    {
        $query = $this->dbConnect()->prepare('SELECT * FROM users WHERE user_id = :user_id');
        $query->execute(array(
            ':user_id' => $user_id
        ));
        $result = $query->fetchAll();

        foreach ($result as $usernames) {
            $username = $usernames['first_name'] . " " . $usernames['surname'];
        }
        return $username;
    }
}

?>