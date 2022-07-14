<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table table-hover"><br>
            <h1 class="text-center">Daftar Mahasiswa</h1>
            <hr>
            <br>
            <thead>
                <tr class="table-active">
                    <th scope="col">No</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">IPK</th>
                    <th scope="col">Predikat</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                foreach ($list_mhs as $mhs) :
                ?>
                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $mhs->nim ?></td>
                        <td><?= $mhs->nama ?></td>
                        <td><?= $mhs->ipk ?></td>
                        <td><?= $mhs->predikat() ?></td>
                    </tr>
            </tbody>
        <?php
                    $no++;
                endforeach;
        ?>
        </table>
    </div>
</body>

</html>