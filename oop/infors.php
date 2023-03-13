<?php
class NhanVien {
  public $name;
  public $address;
  public $email;
  public $phone;

  function __construct($name, $address, $email, $phone) {
    $this->name = $name;
    $this->address = $address;
    $this->email = $email;
    $this->phone = $phone;
  }

  function hien_thi_thong_tin() {
    echo "Tên: " . $this->name . "<br>";
    echo "Địa chỉ: " . $this->address . "<br>";
    echo "Email: " . $this->email . "<br>";
    echo "Số điện thoại: " . $this->phone . "<br>";
  }
}

class KhachHang {
  public $name;
  public $address;
  public $email;
  public $phone;

  function __construct($name, $address, $email, $phone) {
    $this->name = $name;
    $this->address = $address;
    $this->email = $email;
    $this->phone = $phone;
  }

  function hien_thi_thong_tin() {
    echo "Tên: " . $this->name . "<br>";
    echo "Địa chỉ: " . $this->address . "<br>";
    echo "Email: " . $this->email . "<br>";
    echo "Số điện thoại: " . $this->phone . "<br>";
  }
}
$nhan_vien = new NhanVien("Nguyễn Văn A", "123 Đường A, Quận B, Thành phố C", "a@example.com", "0987654321");
$khach_hang = new KhachHang("Trần Thị B", "456 Đường D, Quận E, Thành phố F", "b@example.com", "0123456789");
$nhan_vien->hien_thi_thong_tin();
$khach_hang->hien_thi_thong_tin();

?>