<?php
function isActive($pagename) {
    if (basename($_SERVER["PHP_SELF"]) == "/php/".$pagename) {
        echo " class='active' ";
    }
}
?> 