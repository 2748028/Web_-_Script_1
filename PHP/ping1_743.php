        <?php
            function ping($host,$port=80,$timeout=6) {
            // supress any error msg in php with @
            $fsock = @fsockopen($host, $port, $errno, $errstr, $timeout);
            if (!$fsock) {
                return FALSE;
            } else {
                return TRUE;
                }
            }
            
            $host = 'www.google.ca';
            //get the start time
            $start = microtime(true);
            $up = ping($host);
            $stop = microtime(true);
            
            if($up) {
                echo "UP! Ping: ".floor(($stop-$start)*1000)." ms<br>";
            } else {
                echo "DOWN!";
             }
            
        ?>
