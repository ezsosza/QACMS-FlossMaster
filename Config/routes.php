<?php
Router::connect(
    '/converter',
    array('plugin'=>'floss_master', 'controller' => 'converter', 'action' => 'converter')
);