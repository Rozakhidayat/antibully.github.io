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
        <h1>Data kontak user</h1>
        <section class="content">
            <div class="table-responsive">
                <div style="overflow-x: auto;">
                    <table class="table table-sm" border="1" >
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Hp</th>
                            <th>Pesan</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($kontak as $kntk) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $kntk->nama ?></td>
                                <td><?= $kntk->email ?></td>
                                <td><?= $kntk->no_hp ?></td>
                                <td><?= $kntk->pesan ?></td>
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
