<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th><a href="/sort/<?php echo array_keys($products[1])[1] ?>"><i class="fas fa-angle-down"></i></a><a
                    href="/sortDesc/<?php echo array_keys($products[1])[1] ?>"><span class="fas fa-angle-up"></span></a>
            Name
        </th>
        <th> Image
        </th>
        <th><a href="/sort/<?php echo array_keys($products[1])[3] ?>"><i class="fas fa-angle-down"></i></a><a
                    href="/sortDesc/<?php echo array_keys($products[1])[3] ?>"><i
                        class="fas fa-angle-up"></i></a> <?php echo $products['name'] ?>Created_at
        </th>
        <th><a href="/sort/<?php echo array_keys($products[1])[4] ?>"><i class="fas fa-angle-down"></i></a> <a
                    href="/sortDesc/<?php echo array_keys($products[1])[4] ?>"><i class="fas fa-angle-up"></i></a>Owner
        </th>
        <th><a href="/sort/<?php echo array_keys($products[1])[5] ?>"><i class="fas fa-angle-down"></i></a><a
                    href="/sortDesc/<?php echo array_keys($products[1])[5] ?>"><i class="fas fa-angle-up"></i></a>
            Amount_rev
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>

        <?php foreach ($products

        as $product): ?>
        <td><a href="/show/<?php print $product['id'] ?> "><?php echo $product['name']; ?></a></td>
        <td><img src="<?php echo 'img/'.$product['image'] ?>" style="width: 60px ;height: 40px" alt="no image"></td>
        <td><?php echo $product['created_at'] ?></td>
        <td><?php echo $product['author'] ?></td>
        <td><?php echo $product['amount'] ?></td>
    </tr>
    <?php endforeach; ?>


    </tbody>
    <a href="/form" class="btn btn-info btn-block">Add new product </a>
</table>
