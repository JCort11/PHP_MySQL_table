<?php
    include_once 'conexion.php';
?>
<?php
    $cantidad = 0;
    $query = "SELECT * FROM usuarios";
    $stmt= $conn->prepare($query);
    $stmt->execute();
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Listado de personas</title>
</head>
<body>
    <h1 style="text-align: center; margin-top:5%;">Listado de personas</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($registros as $fila) : 
                        ?>
                        <?php $cantidad = $cantidad +1?>
                        <tr>
                        <th scope="row"><?php echo $cantidad; ?></th>
                        <td><?php echo $fila-> nombres; ?></td>
                        <td><?php echo $fila-> dni; ?></td>
                        <td><?php echo $fila-> direccion; ?></td>
                        <td><?php echo $fila-> fecha; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>    
    </div>
    </body>
    <script>
        // $(document).ready(function(){
        //     $('#registros').DataTable({
        //         responsive.true
        //     });
        // });
    </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>