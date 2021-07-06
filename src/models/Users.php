<?php


class Users
{
    /**
     * Returns single user with specified id
     */

    public static function getUsersList(){
        $db = Db::getConnection();

        $usersList = [];

        $result = $db->query("SELECT id, name, department_id, (SELECT name from departments WHERE departments.id = users.department_id) AS department_name, birthday, created_at FROM users ORDER BY id");

        while($row = $result->fetch()){
            $usersList[] = $row;
        }

        return $usersList;
    }

    public static function getDepUsersList($departmentId){
        $id = intval($departmentId);

        $db = Db::getConnection();

        $usersList = [];

        $result = $db->query("SELECT id, name, birthday, created_at FROM users WHERE department_id =" . $departmentId . " ORDER BY id");

        while($row = $result->fetch()){
            $usersList[] = $row;
        }

        return $usersList;
    }

    public static function getUsersItemById($id){
        $id = intval($id);

        $db = Db::getConnection();

        $result = $db->query('SELECT id, name, (SELECT name from departments WHERE departments.id = users.department_id) AS department_name, birthday, created_at from users WHERE id = ' . $id);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $usersItem = $result->fetch();

        return $usersItem;
    }

    public static function createUser(){
        $db = Db::getConnection();

        $name = $_POST['name'];
        $department_id = $_POST['department_id'];
        $birthday = $_POST['birthday'];

        $result = $db->prepare("INSERT INTO users
            (name, department_id, birthday)
             VALUES(?, ?, ?);");
        $exc = $result->execute([$name, $department_id, $birthday]);
        return $exc;
    }

    public static function editUser($id){
        $id = intval($id);

        $db = Db::getConnection();

        $name = $_POST['name'];
        $department_id = $_POST['department_id'];
        $birthday = $_POST['birthday'];
        $created_at = $_POST['created_at'];

        $result = $db->prepare("UPDATE users 
            SET name=?, department_id=?, birthday=?, created_at=?
            WHERE id = {$id};");
        $exc = $result->execute([$name, $department_id, $birthday, $created_at]);
        return $exc;
    }

    public static function deleteUser($id){
        $id = intval($id);

        $db = Db::getConnection();

        $result = $db->query("DELETE from users WHERE id = $id;");
    }
}