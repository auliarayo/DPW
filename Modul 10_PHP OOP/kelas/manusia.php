<?php
class manusia
{
    //deklarasi Variabel
    protected $name;
    protected $nik = "253307036";
    protected $umur;

    public function getNama()
    {
        return $this->name;
    }

    public function setNama($name)
    {
        $this->name = $name;
    }

    public function getNIK()
    {
        return " {$this->nik} ";
    }

    public function getUmur()
    {
        return $this->umur;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }
}

/*
kesimpulan dari ujicoba:
pada saat method getNIK() diatur sebagai private, method tersebut tidak dapat diakses dari luar kelas (misalnya dari index.php). hal ini akan menyebabkan fatal error "call to private method".
oleh karena itu, jika ingin menampilkan NIK dari luar kelas, modifier pada fungsi getNIK() harus diubah menjadi public.
penambahan variabel umur, getter, dan setter berfungsi untuk melengkapi atribut manusia agar dapat diakses (baca/tulis) dari luar secara aman dengan enkapsulasi.
*/
?>