<?php

namespace Drupal\qixiaojun\Controller;
use Drupal\Core\Controller\ControllerBase;

class QixiaojunController extends ControllerBase
{

  public function index()
  {
    return [
      '#markup' => t('自定义模块自定义页面'),
    ];
  }
}
