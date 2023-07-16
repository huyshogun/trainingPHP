<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {


    echo "Thong tin cua ban la: "; echo '<br>';

    echo 'Ho va ten: ' . $_POST['name'];
    echo '<br>';
    echo 'Ngay sinh: ' . $_POST['time'];
    echo '<br>';
    echo 'So dien thoai: ' . $_POST['SĐT'];
    echo '<br>';
    echo 'Email: ' . $_POST['mail'];
    echo '<br>';
    echo 'Gioi tinh: ' . $_POST['gt'];
    echo '<br>';
    echo 'Thong tin mo ta ban than: ' . $_POST['mota'];
}

