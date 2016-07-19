<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-18 09:02:22
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax/login", "ajax_Controller::___ajaxLogin")->via("GET")->name("ajaxlogin.index");

