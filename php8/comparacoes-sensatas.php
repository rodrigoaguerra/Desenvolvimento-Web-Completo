<?php 
    echo '0 == "0": '. (0 == "0"); // true | true
    echo '<br>';
    echo '0 == "0.0": '. (0 == "0.0"); // true | true
    echo '<br>';
    echo '0 == "teste": '. (0 == "teste"); // true | false
    echo '<br>';
    echo '0 == "": '. (0 == ""); // true | false
    echo '<br>';
    echo '50 == "   50": '. (50 == "  50"); // true | true
    echo '<br>';
    echo '50 == "50teste": '. (50 == "50teste"); // true | false
    
?>