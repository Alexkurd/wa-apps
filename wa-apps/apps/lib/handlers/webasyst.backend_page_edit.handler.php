<?php

class appsWebasystBackend_page_editHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('webasyst.backend_page_edit', $params, $array_keys);
        return ifempty($event);
    }
}
