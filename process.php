<form action="" method="POST">
    <?php
    if (isset($_POST["jumlah_siswa"])) {
        $jumlah_siswa = $_POST["jumlah_siswa"];
        for ($i = 0; $i < $jumlah_siswa; $i++) {
    ?>
            <label for="">Nama siswa ke <?php echo $i + 1 ?> : </label>
            <input type="text" name="nama_siswa[]">
            <br>
        <?php
        }
        ?>
        <input type="submit" value="Simpan">
</form>
<?php
    }
    if (isset($_POST["nama_siswa"])) {
?>
    <table border="1px">
        <tr>
            <th>No.</th>
            <th>Nama siswa</th>
        </tr>
        <?php
        foreach ($_POST["nama_siswa"] as $index => $siswa) {
        ?>
            <tr>
                <td><?php echo $index + 1 ?></td>
                <td><?php echo $siswa ?></td>
            </tr>
        <?php
        }

        ?>
    </table>
<?php
    }
?>