<?php


class DepartmentsController extends BaseController
{
    public function actionIndex(){
        $departmentsList = [];
        $departmentsList = Departments::getDepartmentsList();

        require_once (ROOT . '/views/departments/index.php');
    }
    public function actionView($id){
        if($id){
            $departmentsItem = Departments::getDepartmentsItemById($id);

            require_once(ROOT . '/views/departments/view.php');
        }
    }
    public function actionEdit($id){
        $departmentsItem = Departments::getDepartmentsItemById($id);
        if($_POST){
            Departments::editDepartment($id);
            $this->redirect('/departments');
        }
        require_once(ROOT. '/views/departments/edit.php');
    }
    public function actionCreate(){
        if ($_POST){
            Departments::createDepartment();
            $this->redirect('/departments');
        }
        require_once(ROOT . '/views/departments/create.php');
    }

    public function actionDelete($id){
        if ($id){
            Departments::deleteDepartment($id);
            $this->redirect('/departments');
        }
    }

}