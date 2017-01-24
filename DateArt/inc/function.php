<?php

function callTemplate($file, $array = array()){
    $mustache_options =  array('extension' => EXT_MU_TPL);
      $m = new Mustache_Engine(array(
          'loader' => new Mustache_Loader_FilesystemLoader(FOLD_TEMPLATE, $mustache_options),
      ));

      $array = array_merge($array, array('URL' => URL_PORTAL));

    echo $m->render($file, $array);
}

function callTemplateReturn($file, $array = array()){
    $mustache_options =  array('extension' => EXT_MU_TPL);
      $m = new Mustache_Engine(array(
          'loader' => new Mustache_Loader_FilesystemLoader(FOLD_TEMPLATE, $mustache_options),
      ));

      $array = array_merge($array, array('URL' => URL_PORTAL));

    return $m->render($file, $array);
}
