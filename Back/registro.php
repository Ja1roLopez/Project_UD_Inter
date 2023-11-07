<?php

    if(isset($_POST['register_btn'])){
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $birth = $_POST['birthday'];
    $mail = $_POST['mail'];
    $pass = $_POST['password'];
    
    echo '
        <ul>
            <li>
                <i>
                '.$name.'
                </i>
            </li>
        </ul>
        <ul>
            <li>
                <i>
                '.$lastname.'
                </i>
            </li>
        </ul>
        <ul>
            <li>
                <i>
                '.$birth.'
                </i>
            </li>
        </ul>
        <ul>
            <li>
                <i>
                '.$mail.'
                </i>
            </li>
        </ul>
        <ul>
            <li>
                <i>
                '.$pass.'
                </i>
            </li>
        </ul>
    
    ';
}
?>