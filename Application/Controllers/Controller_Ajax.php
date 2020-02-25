<?php


namespace Application\Controllers;


class Controller_Ajax extends \Application\Core\Controller
{
    function __construct()
    {
        $this->model = new \Application\Models\Ajax_Model();
    }

    public function action_request()
    {
        $actionName = $_POST['action'];
        $params = $_POST;
        unset($params['action']);

        $result = ['success' => false, 'errors' => []];

        if (!method_exists($this->model, $actionName)) {
            $result['errors'] = ['Undefined action'];
        } else {
            $act_result = $this->model->{$actionName}($params);
            if ($act_result['success'] == true) {
                $result['success'] = true;
                $result['data'] = $act_result['data'];
            } else {
                $result['errors'] = $act_result['errors'];
            }
        }

        echo json_encode($result);
    }
}