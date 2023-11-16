<?php
include 'koneksi.php';

// Periksa apakah data $_POST telah dikirim sebelum mengaksesnya
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($koneksi, $username);
    $password = mysqli_real_escape_string($koneksi, $password);
    $query = "SELECT * FROM login WHERE nama = '$username'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Pastikan hasil query tidak kosong sebelum mengambil data
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            // Pastikan password tidak null sebelum membandingkan
            if ($user['password'] && $password != $user['password']) {
                echo "<script> 
                alert('Username or password is incorrect'); 
                window.location.href = 'index.php';
                </script>";
                exit();
            }

            if ($user['status'] == 'Admin') {
                header('Location: index-admin.php');
                exit();
            } else if ($user['status'] == 'User') {
                header('Location: index-user.php');
                exit();
            }
        } else {
            echo "<script> 
            alert('Username not found'); 
            window.location.href = 'index.php';
            </script>";
            exit();
        }
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "<script> 
    alert('Please provide username and password'); 
    window.location.href = 'index.php';
    </script>";
}
?>