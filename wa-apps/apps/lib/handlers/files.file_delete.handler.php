<?php

class appsFilesFile_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('files.file_delete', $params, $array_keys);
    }
}
