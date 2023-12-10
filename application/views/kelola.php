<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Laporan Siswa</title>
    <style>
        .content-wrapper {
            padding: 40px;
        }
        .action_buttons {
            margin-top: 20px;
            display: flex;
            gap: 5px;
        }
        table{
            margin: 5px auto;
            border: 2px solid black;
        }

        th,td{
            border: 2px solid black;
        }

        
    </style>
</head>
<body>

    <div class="content-wrapper">
        <h1>Data Laporan Siswa</h1>
        <section class="content">
            <div class="table-responsive">
                <div style="overflow-x: auto;">
                    <table class="table table-sm" border="1" >
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Alamat</th>
                            <th>No Hp</th>
                            <th>Tanggal Kejadian</th>
                            <th>Deskripsi</th>
                            <th>Hapus</th>
                            <th>Edit</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($kelola as $kla) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $kla->nama ?></td>
                                <td><?= $kla->kelas ?></td>
                                <td><?= $kla->alamat ?></td>
                                <td><?= $kla->no_hp ?></td>
                                <td><?= $kla->tgl_kejadian ?></td>
                                <td><?= $kla->deskripsi ?></td>
                                <td onclick="javascript: return confirm('Apakah anda yakin ingin menghapus?"><?= anchor('kelola/hapus/' .$kla->id,'<div class="action_buttons">
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button> 
                                    </div>')?></td>
                                <td><?= anchor('kelola/edit/' .$kla->id, '<div class="action_buttons">
                                        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                                    </div>')?>


            
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </section>
    </div>

</body>
</html>
