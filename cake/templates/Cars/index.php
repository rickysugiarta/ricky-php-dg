<h1>Cars</h1>
<table>
    <tr>
        <th>License Plate</th>
        <th>License State</th>
        <th>Vin</th>
        <th>Year</th>
        <th>Color</th>
        <th>Make</th>
        <th>Model</th>
        <th>Created</th>
        <th>Modified</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($cars as $car): ?>
    <tr>
        <td>
            <?= $car->license_plate ?>
        </td>
        <td>
            <?= $car->license_state ?>
        </td>
        <td>
            <?= $car->vin ?>
        </td>
        <td>
            <?= $car->year ?>
        </td>
        <td>
            <?= $car->colour ?>
        </td>
        <td>
            <?= $car->make ?>
        </td>
        <td>
            <?= $car->model ?>
        </td>
        <td>
            <?= $car->created ?>
        </td>
        <td>
            <?= $car->modified ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>