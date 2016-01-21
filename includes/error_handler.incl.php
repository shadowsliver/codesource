<?php
function handle_errors ($error, $message, $filename, $line) {
   ob_end_clean( );
   echo '<b>'.$message.'</b> in line '.$line.' of <i>'.$filename.'</i></body></html>';
   exit;
 }
 set_error_handler('handle_errors');
 ob_start( );