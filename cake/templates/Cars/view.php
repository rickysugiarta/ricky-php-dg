<h1><?= $car->license_state . ' - ' . $car->license_plate ?></h1>

<h3>Available Quotes</h3>


<div>
    <?= $this->Html->link('Get More Quotes from DG Server', '/cars/pull-data/'.$car->slug) ?>
</div>
<table>
    <tr>
        <th>ID</th>
        <th>Price</th>
        <th>Repairer</th>
        <th>Overview of Work</th>
    </tr>

    <?php foreach ($quotes as $quote): ?>
    <tr>
        <td>
            <?= $quote->id ?>
        </td>
        <td>
            <?= $quote->price ?>
        </td>
        <td>
            <?= $quote->repairer ?>
        </td>
        <td>
            <?= $quote->overview_of_work ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

