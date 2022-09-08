<!--
    Penjelasan code :
    Mengunakan for loop nge print list text di array
    idk males nambahin <h3> atau <br> satu2
-->
<!DOCTYPE html>
<html lang="en">

<title>Dasa Darma</title>

<body>
    <br>
    <h1 align="center">DASA DARMA</h1><img src="https://cdn.discordapp.com/attachments/885019575484313640/1004543314747473971/unknown.png" align="right" weight="250" height="250">
    <?php
    $dasa_darma = [
        "1. Takwa kepada tuhan yang maha esa",
        "2. Cinta alam dan kasih sayang sesama manusia",
        "3. Patriot yang sopan dan kesatria",
        "4. Patuh dan suka bermusyawarah",
        "5. Rela menolong dan tabah",
        "6. Rajin, terampil, dan gembira",
        "7. hemat, cermat, dan bersahaja",
        "8. Disiplin, berani, dan setia", 
        "9. Bertanggung jawab dan dapat dipercaya",
        "10.Suci dalam pikiran, perkataan, dan perbuatan"
    ];
    foreach ($dasa_darma as $text) {
        echo "<h3> $text </h3>";
    };
    ?>

</body>

</html>