<?php

class appsShopBackend_notification_saveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.backend_notification_save', $params, $array_keys);
    }
}
