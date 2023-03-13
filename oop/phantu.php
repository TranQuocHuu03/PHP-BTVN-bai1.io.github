<?php
class PhanSo {
    public $tu;
    public $mau;
    function __construct($tu = 1, $mau = 5) {
      $this->tu = $tu;
      $this->mau = $mau;
    }
    function __toString() {
      return "{$this->tu}/{$this->mau}";
    }
    function cong($ps) {
      $tu_moi = $this->tu * $ps->mau + $this->mau * $ps->tu;
      $mau_moi = $this->mau * $ps->mau;
      return new PhanSo($tu_moi, $mau_moi);
    }
    function tru($ps) {
      $tu_moi = $this->tu * $ps->mau - $this->mau * $ps->tu;
      $mau_moi = $this->mau * $ps->mau;
      return new PhanSo($tu_moi, $mau_moi);
    }
    function nhan($ps) {
      $tu_moi = $this->tu * $ps->tu;
      $mau_moi = $this->mau * $ps->mau;
      return new PhanSo($tu_moi, $mau_moi);
    }
    function chia($ps) {
      $tu_moi = $this->tu * $ps->mau;
      $mau_moi = $this->mau * $ps->tu;
      return new PhanSo($tu_moi, $mau_moi);
    }
  }
  // Tạo các phân số
$ps1 = new PhanSo(6, 9);
$ps2 = new PhanSo(2, 4);

// Cộng hai phân số
$ps3 = $ps1->cong($ps2);
echo "{$ps1} + {$ps2} = {$ps3}\n";

?>
<br>
<br>
<?php
// Trừ hai phân số
$ps4 = $ps1->tru($ps2);
echo "{$ps1} - {$ps2} = {$ps4}\n";
?>
<br>
<br>
<?php
// Nhân hai phân số
$ps5 = $ps1->nhan($ps2);
echo "{$ps1} * {$ps2} = {$ps5}\n";
?>
<br>
<br>
<?php
// Chia hai phân số
$ps6 = $ps1->chia($ps2);
echo "{$ps1} / {$ps2} = {$ps6}\n";

?>