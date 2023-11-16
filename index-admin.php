<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200 font-sans leading-normal tracking-normal">
    <header class="bg-blue-500 p-4 text-white text-center">
        <h1 class="font-bold text-2xl">SISTEM INFORMASI MAHASISWA</h1>
    </header>
    <nav class="bg-blue-100 p-4 mt-2 rounded">
    <div class="flex justify-between items-center">
        <span class="font-bold text-blue-500">ADMIN</span>
        <a href="index.php" class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">LOG OUT</a>
    </div>
</nav>
    <form action="form-input-wali.php" class="w-1/2 mx-auto mt-5 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <table class="w-full">
            <td colspan="2" class="px-4 py-2"><button type="submit" onclick="window.location.href='form-wali.php';"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">MASUKKAN
                    DATA</button></td>
            </tr>

        </table>
    </form>
    <h2 class="text-2xl font-bold p-5 text-blue-600">List Mahasiswa</h2>
    <table class="table-auto w-3/4 mx-auto mb-5 border-collapse border-2 border-blue-500 rounded-lg">
        <thead>
            <tr class="bg-blue-200">
                <th class="px-4 py-2 border-2 border-blue-500">NO</th>
                <th class="px-4 py-2 border-2 border-blue-500">NIM</th>
                <th class="px-4 py-2 border-2 border-blue-500">NAMA</th>
                <th class="px-4 py-2 border-2 border-blue-500">GENDER</th>
                <th class="px-4 py-2 border-2 border-blue-500">JURUSAN</th>
                <th class="px-4 py-2 border-2 border-blue-500">NAMA WALI</th>
                <th class="px-4 py-2 border-2 border-blue-500">ALAMAT</th>
                <th class="px-4 py-2 border-2 border-blue-500">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $query = "SELECT mahasiswa.*, wali.nama_wali FROM mahasiswa JOIN wali ON mahasiswa.id_wali = wali.id_wali";
            $mahasiswa = mysqli_query($koneksi, $query);
            $no = 1;
            foreach ($mahasiswa as $row) {
                $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-Laki';
                echo "<tr class='text-center'>
                <td class='border-2 border-blue-500 px-4 py-2'>$no</td>
                <td class='border-2 border-blue-500 px-4 py-2'>" . $row['nim'] . "</td>
                <td class='border-2 border-blue-500 px-4 py-2'>" . $row['nama'] . "</td>
                <td class='border-2 border-blue-500 px-4 py-2'>" . $jenis_kelamin . "</td>
                <td class='border-2 border-blue-500 px-4 py-2'>" . $row['jurusan'] . "</td>
                <td class='border-2 border-blue-500 px-4 py-2'>" . $row['nama_wali'] . "</td>
                <td class='border-2 border-blue-500 px-4 py-2'>" . $row['alamat'] . "</td>
                <td class='border-2 border-blue-500 px-4 py-2'>
                <a href='form-edit.php?id_mhs=$row[id_mhs]' class='inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded'>EDIT</a>
                <a href='delete.php?id_mhs=$row[id_mhs]' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")' class='inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded'>DELETE</a>
                </td>
                </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>

    <h2 class="text-2xl font-bold p-5 text-blue-600">List Wali</h2>
    <table class="table-auto w-3/4 mx-auto mb-5 border-collapse border-2 border-blue-500 rounded-lg">
        <thead>
            <tr class="bg-blue-200">
                <th class="px-4 py-2 border-2 border-blue-500">NO</th>
                <th class="px-4 py-2 border-2 border-blue-500">NAMA</th>
                <th class="px-4 py-2 border-2 border-blue-500">GENDER</th>
                <th class="px-4 py-2 border-2 border-blue-500">ALAMAT</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $wali = mysqli_query($koneksi, "SELECT * from wali");
            $no = 1;
            foreach ($wali as $row) {
                $jenis_kelamin = $row['jenis_kelamin'] == 'Perempuan' ? 'Perempuan' : 'Laki-Laki';
                echo "<tr class='text-center'>
                <td class='border-2 border-blue-500 px-4 py-2'>$no</td>
                <td class='border-2 border-blue-500 px-4 py-2'>" . $row['nama_wali'] . "</td>
                <td class='border-2 border-blue-500 px-4 py-2'>" . $jenis_kelamin . "</td>
                <td class='border-2 border-blue-500 px-4 py-2'>" . $row['alamat_wali'] . "</td>
                
                </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>