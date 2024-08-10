<?php
//koneksi
$koneksi = mysqli_connect('localhost', 'root', '', 'customer');

//daftar
if(isset($_POST['register'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $username = $_POST['username'];
    $pw = $_POST['pw'];

    // Enkripsi
    $epw = password_hash($pw, PASSWORD_DEFAULT);

    // Periksa apakah email sudah terdaftar
    $cekEmail = mysqli_query($koneksi, "SELECT * FROM reg WHERE email = '$email'");
    $jumlahEmail = mysqli_num_rows($cekEmail);

    if ($jumlahEmail > 0) {
        // Jika email sudah terdaftar, tampilkan pesan kesalahan
        echo '<script>
                alert("Email sudah terdaftar. Silakan gunakan email lain.");
                window.location.href="signup.php";
              </script>';
    } else {
        // Jika email belum terdaftar, lakukan registrasi
        $insert = mysqli_query($koneksi, "INSERT INTO reg VALUES (' ', '$fullname', '$email', '$no_hp', '$username', '$epw')");
        
        if ($insert){
            // Jika berhasil
            echo '<script>alert("Registrasi berhasil!");
            window.location.href="signin.php";</script>';
        } else {
            echo '<script>
                    alert("Registrasi Gagal")
                    window.location.href="signup.php";
                  </script>';
        }
    }
}

// login
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pw = $_POST['pw'];

    $cekdb = mysqli_query($koneksi, "SELECT * FROM reg WHERE email = '$email'");
    $hitung = mysqli_num_rows($cekdb);

    if ($hitung > 0){
        $pass = mysqli_fetch_array($cekdb);
        $pswskrg = $pass['pw'];

        // Memeriksa apakah password cocok dengan yang diinputkan
        if(password_verify($pw, $pswskrg)){

            // Memeriksa apakah pengguna adalah admin
            if($email == 'admin@gmail.com'){
                // Jika admin, arahkan ke halaman admin
                header('location:admin/index.php');
            } else {
                // Jika bukan admin, arahkan ke halaman lain sesuai kebutuhan
                header('location:index2.php');
            }

        } else {
            echo '<script>
                    alert("Password salah")
                    window.location.href="signin.php";
                  </script>';
        }

    } else {
        echo '<script>
                alert("Email tidak ditemukan")
                window.location.href="signin.php";
              </script>';
    }
}

//kirim pesan
if(isset($_POST['send'])){
$nama = $_POST ['nama'];
    $telp = $_POST ['telp'];
    $psn = $_POST ['psn'];
    

    $insertp = mysqli_query($koneksi, "INSERT INTO pesan VALUES (' ', '$nama', '$telp', '$psn')");
    
    if ($insertp){
        // jika berhasil
        echo '<script>alert("Pesan berhasil dikirim!");</script>';
        header('location:index.php#contact'); 

    }else{
           echo '<script>
                    alert("Pesan gagal dikirim")
                    window.location.href="index.php#contact";
              </script>';
        }
}

if(isset($_POST['send2'])){
$nama = $_POST ['nama'];
    $telp = $_POST ['telp'];
    $psn = $_POST ['psn'];
    

    $insertp2 = mysqli_query($koneksi, "INSERT INTO pesan VALUES (' ', '$nama', '$telp', '$psn')");
    
    if ($insertp2){
        // jika berhasil
        echo '<script>alert("Pesan berhasil dikirim!");
                window.location.href="index2.php#contact";    
        </script>';

    }else{
           echo '<script>
                    alert("Pesan gagal dikirim")
                    window.location.href="index2.php#contact";
              </script>';
        }
}

//payment
if(isset($_POST['order'])){ 
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $product = $_POST['product'];
    $pm = $_POST['pm'];

    $hargaproduk = 0; // Inisialisasi harga awal

    switch ($product) {
        case 'Your Mine A':
            $hargaproduk = 26000;
            break;
        case 'Your Mine B':
            $hargaproduk = 32000;
            break;
        case 'Your Mine C':
            $hargaproduk = 40000;
            break;
        case 'Your Mine D':
            $hargaproduk = 45000;
            break;
        default:
            // Handle jika produk tidak valid
            echo '<script>alert("Produk tidak valid");</script>';
            exit;
    }

    $byr = mysqli_query($koneksi, "INSERT INTO payment VALUES (' ', '$fullname', '$email', '$product', '$pm', '$hargaproduk')");

    if ($byr){
        // jika berhasil
        echo '<script>alert("Pembayaran berhasil. Total pembayaran: ' . number_format($hargaproduk, 0, ',', '.') . '");
        window.location.href="index2.php"</script>';
    } else {
        echo '<script>
                alert("Pembayaran gagal");
                window.location.href="payment.php";
              </script>';
    }
}


?>