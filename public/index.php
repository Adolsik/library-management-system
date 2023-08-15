<?php
require('home.html');

if(isset($_GET['registerSuccess'])){
    echo <<< notif
        <div class='notification'>
            <label>Account created!</label>
        </div>

    notif;
}



?>