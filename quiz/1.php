
<?php

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $protocol = "https";
} else {
    $protocol = "http";
}
echo "Протокол URL: " . $protocol;
