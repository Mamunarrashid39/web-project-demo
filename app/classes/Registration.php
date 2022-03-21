<?php

namespace App\classes;

class Registration
{
    protected $email;
    protected $password;
    protected $userName;
    public function createUser($post)
    {

        $this->email =$post['email'];
        $this->password =sha1($post['password']);
        $this->userName =$post['userName'];

        $filePath = 'db/registration.txt';
        $file = fopen($filePath, 'a');
        $data = "$this->email,$this->password,$this->userName**";
        fwrite($file, $data);
        fclose($file);

    }


}