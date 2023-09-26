<?php
$hotels = [

  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotels</title>

  <!-- STILE -->
  <link rel="stylesheet" href="./style/style.css">

  <!-- BOOTSTRAP v5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <table class="table">


    <?php
    foreach ($hotels as $information): ?>
      <thead>
        <tr class="table-primary">
          <th scope="col">Chiave</th>
          <th scope="col">Elemento</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($information as $keys => $element): ?>


          <tr>
            <?php if ($element == true): ?>
              <th scope="row">
                <?php echo $keys ?>
              </th>

              <td>
                <?php
                echo $element;
                ?>
              </td>
            <?php endif ?>
          </tr>

        <?php endforeach; ?>
      </tbody>
    <?php endforeach; ?>

  </table>
</body>

</html>