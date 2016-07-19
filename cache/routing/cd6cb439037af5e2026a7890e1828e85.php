<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-15 11:41:16
 */

$app = Yee\Yee::getInstance();

$app->map("/activation/:accode", "activationController::___activationAction")->via("GET")->name("activation.index");

