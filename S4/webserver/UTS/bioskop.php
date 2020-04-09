<html>

<head>
    <style type="text/css">
        th {
            text-align: center;
        }
        
        table.center {
            margin-left: auto;
            margin-right: auto;
        }
        
        .button {
            width: 150px;
            text-align: center;
            margin: 0 auto;
        }
    </style>
    <title>Tiket Bioskop Online</title>
</head>

<body>
    <form action="tiket.php" method="post">
        <table border="0" class="center">
            <tr>
                <th colspan="3">Pemesan Tiket Bioskop AKAKOM
                    <th>
                        <tr></tr>
            </tr>

            <tr>
                <td>Nama Pemesan</td>
                <td> : </td>
                <td>
                    <input type="text" name="nama">
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td> : </td>
                <td>
                    <input type="Radio" name="jk" value="Laki-Laki">Laki-Laki
                    <input type="Radio" name="jk" value="Perempuan">Perempuan</td>
            </tr>

            <tr>
                <td>Studio</td>
                <td> : </td>
                <td>
                    <select name="studio" id="studio" onchange="pilihStudio()">
                        <option value="0">Pilih Studio</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Judul Film</td>
                <td> : </td>
                <td>
                    <input type="text" name="film" readonly id="judul_film">
                    <tr>

                        <td>Jumlah Tiket</td>
                        <td> : </td>
                        <td>
                            <select name="jumlah">
                                <option value="0">Pilih Jumlah Seat</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>

                    <td>Hari</td>
                    <td> : </td>
                    <td>
                        <select name="hari">
                            <option value="Kosong">Hari Anda Menonton</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </td>
            </tr>

            <tr>
                <td colspan="3">
                    <input type="submit" name="submit" value="Pesan" class="button">
                    <input type="Reset" name="reset" value="Batal" class="button">
    </form>
</body>
</form>

<script>

let judul_film = {
	"1": "Mahardika arya",
	"2": "Cinta bertasbih",
	"3": "Ugal ugalan",
	"4": "Yowes Ben",
	"5": "Cantik tapi palsu",
	"6": "Arwah",
	"7": "Spiderman III",
	"8": "Gwntayangan"
}

function pilihStudio() {
	let st = document.getElementById("studio");
	let studio = st.options[st.selectedIndex].value;
	document.getElementById('judul_film').value = judul_film[studio]
}

</script>