<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-18 12:52:17
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax/login", "AjaxController::___ajaxLogin")->via("POST")->name("ajaxlogin.index");

