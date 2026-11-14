<?php
header('content-type:text/plain');
//$this->result=true;
print_r([
  new class{
    public $damn='666';
  },
  'last_update'=>date('Y-m-d H:i:s',@filemtime(__FILE__)),
  'spent_time'=>microtime(true)-$_SERVER['REQUEST_TIME_FLOAT'],
  'null'=>null,
  'data'=>(object)[
    'test'=>'testing',
    'tos'=>'tossing',
    'tis'=>'rose',
  ],
  'files'=>get_included_files(),
  'constants'=>get_defined_constants(true)['user']??[],
  'GLOBALS'=>$GLOBALS,
]);
exit;
// return 0;


// phpinfo();
