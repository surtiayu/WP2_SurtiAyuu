<html>
    <head>
        <title>DATA SISWA</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/data_siswa.css">
    </head>

    <body>
        <center>
        <h4>Terima Kasih telah mengisi data Anda :)</h4>
            <div id="data">
                <header>
                <h2>DATA SISWA</h2>
                <hr>
                </header>
            
            <section>
            <table>
                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                    <td><?= $nama; ?></td>
                </tr>

                <tr>
                    <th>NIS</th>
                    <th>:</th>
                    <td><?= $nis; ?></td>
                </tr>

                <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td><?= $kelas; ?></td>
                </tr>

                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td><?= $tmpt_lahir; ?></td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td><?= $tgl_lahir; ?></td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td><?= $alamat; ?></td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td><?= $jns_klmn; ?></td>
                </tr>

                <tr>
                    <th>Agama</th>
                    <th>:</th>
                    <td><?= $agama; ?></td>
                </tr>

                <tr>
                	<td colspan="3" align="center">
                        <a href="<?= base_url('Datasiswa');?>"><h4>Kembali</h4></a>
                    </td>
                </tr>
            </table>
            </section>
            </div class="clear">
        </center>
    </body>
</html>
