<?php
class UserController implements IController {
  public function helloAction(){
    $fc = FrontController::getInstance();
    /* Инициализация модели */
    $params = $fc->getParams();
    $model = new FileModel();
    $model->name = $params["name"];

    $output = $model->render(USER_DEFAULT_FILE);
    $fc->setBody($output);
  }
}