<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th><a href=""><i class="fas fa-angle-down"></i></a><a href=""><span class="fas fa-angle-up"></span></a> Name
        </th>
        <th> Image</th>
        <th><a href=""><i class="fas fa-angle-down"></i></a><a href=""><i class="fas fa-angle-up"></i></a> Created</th>
        <th><a href=""><i class="fas fa-angle-down"></i></a> <a href=""><i class="fas fa-angle-up"></i></a>Owner</th>
        <th><a href=""><i class="fas fa-angle-down"></i></a><a href=""><i class="fas fa-angle-up"></i></a> Amount_rev
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php foreach ($products

        as $product): ?>
        <td><a href="/reviews "><?php echo $product['name'] ?></a></td>
        <td><img src="<?php $product['image'] ?>" alt=""></td>
        <td><?php echo $product['created_at'] ?></td>
        <td><?php echo $product['author'] ?></td>
        <td><?php echo $product['amount'] ?></td>
    </tr>
    <?php endforeach; ?>


    </tbody>
    <a href="/form" class="btn btn-info btn-block">Add new product </a>
</table>