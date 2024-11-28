<?php
include '../../include/einbinden.html';
include ('/vagrant/include/einbinden.html');
echo __DIR__;
include __DIR__.'/../../include/einbinden.html';
include __DIR__.'/../../include/einbinden.html';
echo __DIR__;
echo '<br>';
echo dirname(__DIR__);
echo '<br>';
include dirname(__DIR__,2).'/include/einbinden.html';

echo __FILE__;
echo '<br>';
echo dirname(__FILE__,2);
