<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT WALI</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <form method="post" action="simpan-wali.php"
        class="w-1/2 mx-auto mt-5 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <table class="w-full">
            <tr>
                <td class="px-4 py-2">NAMA WALI</td>
                <td><input type="text" name="nama"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </td>
            </tr>
            <tr>
                <td class="px-4 py-2">JENIS KELAMIN</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-Laki" class="mr-2 leading-tight">Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan" class="mr-2 leading-tight">Perempuan
                </td>
            </tr>
            <tr>
                <td class="px-4 py-2">ALAMAT WALI</td>
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