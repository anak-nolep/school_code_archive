<!--
    Mengunakan PHP untuk for loop tanggal di format dalam tabel
-->
<div>
    <table width="50%">
        <tr>
            <td style="text-decoration: underline; text-align: left">Rabiul Awal 1440h</td>
            <td style="text-align: center">
                <h1 style="color: red">Januari 2022</h1>
            </td>
            <td style="text-decoration: underline;text-align: right">Bakda Mulud 1552h</td>
        </tr>
        <tr>
            <td style="text-align: left">Jumadil Awal 1440h</td>
            <td style="text-align: center">
            </td>
            <td style="text-align: right">Jumadil Mulud 1552h</td>
        </tr>
    </table>
    <table border="1" width="50%" style="text-align: center">
        <tr style="background-color: blue">
            <th style="background-color: red">Minggu</th>
            <th>Senin</th>
            <th>Selasa</th>
            <th>Rabu</th>
            <th>Kamis</th>
            <th>Jumat</th>
            <th>Sabtu</th>
        </tr>
        <?php
        $start = 30;
        $baris = 4;
        $kolom = 6;
        for ($c = 0; $c <= $baris; $c++) {
            echo "<tr>";
            for ($x = 0; $x <= $kolom; $x++) {
                echo "<td>$start</td>";
                $start += 1;
                if ($start == 32) {
                    $start = 1;
                }
            }
            echo "</tr>";
        }
        ?>