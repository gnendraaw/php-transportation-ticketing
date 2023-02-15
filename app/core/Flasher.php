<?php

class Flasher {
    public static function setFlash($msg, $type='danger')
    {
        $_SESSION['flash'] = [
            'msg' => $msg,
            'type' => $type,
        ];
    }

    public static function flash()
    {
        if(isset($_SESSION['flash']))
        {
            echo '<div class="card shadow mb-4 bg-'.$_SESSION['flash']['type'].'">
                    <div class="card-body">
                        <p class="m-0 text-white">'.$_SESSION['flash']['msg'].'</p>
                    </div>
                </div>';


            unset($_SESSION['flash']);
        }
    }
}