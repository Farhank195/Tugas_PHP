<?php 
//variabel
class Mahasiswa{
    public $nama;
    public $nim;
    public $kuliah;
    public $matkul;
    public $nilai;

    //constructor
public function __construct($nama, $nim, $kuliah, $matkul, $nilai){
    $this->nama = $nama;
    $this->nim = $nim;
    $this->kuliah = $kuliah;
    $this->matkul = $matkul;
    $this->nilai = $nilai;
    }
    
    //function
    public function getHasil() {
        return ($this->nilai >= 65) ? "lulus": "tidak lulus";
    }
    public function getGrade() {
        if ($this->nilai >= 0 && $this->nilai <= 35)  $grade = 'E';
        else if ($this->nilai >= 35 && $this->nilai < 60)  $grade = 'D';
        else if ($this->nilai >= 60 && $this->nilai <= 75)  $grade = 'C';
        else if ($this->nilai >= 75 && $this->nilai <= 85)  $grade = 'B';
        else if ($this->nilai >= 85 && $this->nilai <= 100) $grade = 'A';
        return $grade;
    }
    
    public function getPredikat() {
    switch ($this->getGrade()) {
        case "A": $predikat = "sangat memuaskan"; break;
        case "B": $predikat = "memuaskan"; break;   
        case "C": $predikat = "cukup"; break;
        case "D": $predikat = "kurang"; break;
        case "E": $predikat = "sangat Kurang"; break;
    }
    return $predikat;
    }
}
?>