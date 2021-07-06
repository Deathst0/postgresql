<?php


class Departments
{
    public static function getDepartmentsList(){
        $db = Db::getConnection();

        $departmentsList = array();

        $result = $db->query("SELECT * FROM departments ORDER BY id");

        while($row = $result->fetch()){
            $departmentsList[] = $row;
        }

        return $departmentsList;
    }
    public static function getDepartmentsItemById($id) {
        $id = intval($id);

        $db = Db::getConnection();

        $result = $db->query('SELECT * from departments WHERE id = ' . $id);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $usersItem = $result->fetch();

        return $usersItem;
    }

    public static function editDepartment($id) {
        $id = intval($id);

        $db = Db::getConnection();

        $name = $_POST['name'];

        $result = $db->prepare("UPDATE departments SET name=? WHERE id = {$id};");
        $exc = $result->execute([$name]);
        return $exc;

    }

    public static function createDepartment() {
        $db = Db::getConnection();

        $name = $_POST['name'];

        $result = $db->prepare("INSERT INTO departments (name) VALUES(?);");
        $exc = $result->execute([$name]);
        return $exc;
    }
    public static function deleteDepartment($id) {
        $id = intval($id);

        $db = Db::getConnection();

        $result = $db->query("DELETE from departments WHERE id = {$id};");

    }
}