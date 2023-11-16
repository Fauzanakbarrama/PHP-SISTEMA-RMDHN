<?php
$id_wali = $_GET['q'];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT MAHASISWA</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <form method="post" action="simpan.php" class="w-1/2 mx-auto mt-5 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <input type="hidden" value="<?php echo $id_wali; ?>" name="id_wali">
        <table class="w-full">
            <tr>
                <td class="px-4 py-2">NIM</td>
                <td><input type="text" onkeyup="isi_otomatis()" name="nim"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </td>
            </tr>
            <tr>
                <td class="px-4 py-2">NAMA</td>
                <td><input type="text" name="nama"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </td>
            </tr>
            <tr>
                <td class="px-4 py-2">JENIS KELAMIN</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L" class="mr-2 leading-tight">Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="P" class="mr-2 leading-tight">Perempuan
                </td>
            </tr>
            <tr>
                <td class="px-4 py-2">JURUSAN</td>
                <td>
                    <select name="jurusan"
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                        <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                        <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="px-4 py-2">ALAMAT</td>
                <td><input type="text" name="alamat"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="px-4 py-2"><button type="submit" value="simpan"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">SIMPAN</button>
                </td>
            </tr>

        </table>
    </form>
</body>

</html>