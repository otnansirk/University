<?php


class BaseClass
{
    public $nama;
    public $alamat;

    public function beri_nama($nama)
    {
        $this->nama = $nama;
    }

    public function beri_alamat($alamat)
    {
        $this->alamat = $alamat;
    }
}

class ChildClass extends BaseClass
{
    public $email;

    public function beri_email($email)
    {
        $this->email = $email;
    }
}


$object = new ChildClass();
$object->beri_nama("Kris");
$object->beri_email("Kris@gmail.com");
echo "Nama : ".$object->nama. "<br>";
echo "Email : ".$object->email;