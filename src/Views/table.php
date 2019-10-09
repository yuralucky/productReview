<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Created</th>
        <th scope="col">Owner</th>
        <th scope="col">Amount_review</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php foreach ($products

        as $product): ?>
        <td><a href="show.php/<?php echo $product['id']?>"><?php echo $product['name'] ?></a></td>
        <td><img src="<?php $product['image']?>" alt=""></td>
        <td><?php echo $product['created_at'] ?></td>
        <td><?php echo $product['author'] ?></td>
        <td><?php echo $product['amount_review'] ?></td>
    </tr>
    <?php endforeach; ?>


    </tbody>
    <a href="/form_product.php" class="btn btn-info btn-block">Add new product </a>
</table>