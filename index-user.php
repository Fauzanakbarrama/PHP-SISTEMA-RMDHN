<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200 font-sans leading-normal tracking-normal">
    <header class="bg-blue-500 p-4 text-white text-center">
        <h1 class="font-bold text-2xl">SISTEM INFORMASI MAHASISWA</h1>
    </header>
    <nav class="bg-blue-100 p-4 mt-2 rounded">
    <div class="flex justify-between items-center">
        <span class="font-bold text-blue-500">USER</span>
        <a href="index.php" class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">LOG OUT</a>
    </div>
</nav>
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