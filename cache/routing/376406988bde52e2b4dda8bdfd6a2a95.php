<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-14 01:27:50
 */

$app = Yee\Yee::getInstance();

$app->map("/test", "TestController::___testAction")->via("GET")->name("test.index");

