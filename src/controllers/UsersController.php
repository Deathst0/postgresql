<?php


class UsersController extends BaseController
{
    public function actionIndex()
    {
        $usersList = [];
        $usersList = Users::getUsersList();

        require_once(ROOT . '/views/users/index.php');
    }

    public function actionView($id)
    {
        if ($id) {
            $usersItem = Users::getUsersItemById($id);

            require_once(ROOT . '/views/users/view.php');
        }
    }

    public function actionCreate()
    {
        $departmentsList = Departments::getDepartmentsList();
        if ($_POST) {
            Users::createUser();
            $this->redirect('/users');
        }
        require_once(ROOT . '/views/users/create.php');
    }

    public function actionEdit($id)
    {
        $usersItem = Users::getUsersItemById($id);
        $departmentsList = Departments::getDepartmentsList();
        if ($_POST) {
            Users::editUser($id);
            $this->redirect('/users');
        }
        require_once(ROOT . '/views/users/edit.php');
    }

    public function actionDelete($id)
    {
        if ($id) {
            Users::deleteUser($id);
            $this->redirect('/users');
        }
    }

    public function actionFilter($id)
    {
        $departmentItem = Departments::getDepartmentsItemById($id);
        $usersList = Users::getDepUsersList($id);
        require_once(ROOT . '/views/users/filter.php');
    }

}