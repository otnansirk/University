<?php


class BaseClass
{
    public $nama;
    protected $email;
    private $phone;

    public function beri_nama($nama)
    {
        $this->nama = $nama;
    }

    protected function beri_email($email)
    {
        $this->email = $email;
    }

    /**
     * private method hanya bisa di panggil di class ini sendiri tidak seperi protected yang bisa di panggil di class turunannya
     *
     */
    private function beri_phone($phone)
    {
        $this->phone = $phone;
    }
}

class ChildClass extends BaseClass
{
    //
    public function get_email($email)
    {
        $this->beri_email($email);
        return $this->email;
    }
}


$object = new ChildClass();
$object->beri_nama("Kris");

// saya biarkan error untuk melihat fungsi enkapsulasi
$object->beri_email("Kris@gmail.com"); // akan terjadi error karena protected method bisa dipanggil hanya didalam turunan class nya
// sebagai gantinya agar tidak error kita panggil dalam class child yang diberi akses public dan comment $object->beri_email("Kris@gmail.com")
echo "Email : ". $object->get_email("Kris@gmail.com");
echo "Nama : ".$object->nama. "<br>";
echo "Email : ".$object->email;