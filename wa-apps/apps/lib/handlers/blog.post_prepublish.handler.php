<?php

class appsBlogPost_prepublishHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.post_prepublish', $params, $array_keys);
    }
}
