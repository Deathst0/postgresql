<?php


class BaseController
{
    public function redirect($route)
    {
        header('Location: '.$route);
    }

//    public function renderView($folder, $view, $items)
//    {
//        $viewPath = ROOT . '/views/' . $folder . '/' . $view . '.php';
//        var_dump($viewPath);
//        require_once (ROOT . '/views/' . $folder . '/' . $view . '.php');
//
//    }
}