<?php
include 'koneksi.php';
$id = $_GET['id_mhs'];
$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa where id_mhs='$id'");
$row = mysqli_fetch_array($mahasiswa);


$jurusan = array('TEKNIK INFORMATIKA', 'TEKNIK MESIN', 'TEKNIK KIMIA');

function active_radio_button($value, $input)
{
    $result = $value == $input ? 'checked' : '';
    return $result;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200 font-sans leading-normal tracking-normal">
    <form method="post" action="edit.php" class="w-1/2 mx-auto mt-5 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <input type="hidden" value="<?php echo $row['id_mhs']; ?>" name="id_mhs">
        <table class="w-full">
            <tr>
                <td class="px-4 py-2">NIM</td>
                <td><input type="text" value="<?php echo $row['nim']; ?>" name="nim"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </td>
            </tr>
            <tr>
                <td class="px-4 py-2">NAMA</td>
                <td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </td>
            </tr>
            <tr>
                <td class="px-4 py-2">JENIS KELAMIN</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin']) ?> class="mr-2 leading-tight">Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin']) ?> class="mr-2 leading-tight">Perempuan
                </td>
            </tr>
            <tr>
                <td class="px-4 py-2">JURUSAN</td>
                <td>
                    <select name="jurusan"
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <?php
                        foreach ($jurusan as $j) {
                            echo "<option value='$j'";
                            echo $row['jurusan'] == $j ? 'selected="selected"' : '';
                            echo ">$j</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="px-4 py-2">ALAMAT</td>
                <td><input value="<?php echo $row['alamat']; ?>" type="text" name="alamat"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="px-4 py-2"><button type="submit" value="simpan"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">SIMPAN
                        PERUBAHAN</button></td>
            </tr>
        </table>
    </form>
</body>

</html>