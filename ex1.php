<?php

if( isset($_GET['hello']) ) {
    echo 'hello=' . $_GET['hello'];
} else {
    echo 'Nothing to see here!';
}
