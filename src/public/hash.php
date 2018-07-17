<?php
echo password_hash('Password1234', PASSWORD_DEFAULT) . '<br>';
echo password_hash('Password1234!', PASSWORD_DEFAULT) . '<br>';

$a = 'string';

echo $a[1];