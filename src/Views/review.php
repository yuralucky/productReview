<div class="row">
    <div class="col-8">
        <h3><?php echo $products['name'] ?></h3>

        <img class="  image-responsive"
             src="<?php echo $products['image'] ?>"
             alt="Card image cap">

        <h4> Average rating= <?php echo round($products['avg_rating'], 1) ?></h4>
    </div>


</div>

<hr>
<hr>
<div class="row">
    <div class="col-8">
        <h3>All reviews</h3>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Rating</th>
                <th scope="col">Commentery</th>
                <th scope="col">Data</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php foreach ($commentary

                as $product): ?>
                <th><?php echo $product['name'] ?></th>
                <td><?php echo $product['rating'] ?></td>
                <td><?php echo $product['commentary'] ?></td>
                <td><?php echo date('D', $product['created_at']) ?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-4">
        <h3>Add new review</h3>
        <form method="post" action="/storeReview">
            <input type="hidden" name="product_id" value="<?php echo $products['id']; ?>">
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
            </div>
            <label for="Rating">Rating</label>
            <div class="form-group">

                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="rating" value="1"> 1
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="rating" value="2"> 2
                    </label>
                </div>
                <div class="form-check-inline ">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="rating" value="3"> 3
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="rating" value="4"> 4
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="rating" value="5"> 5
                    </label>
                </div>
                <div class="form-check-inline ">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="rating" value="6"> 6
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="rating" value="7"> 7
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="rating" value="8"> 8
                    </label>
                </div>
                <div class="form-check-inline ">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="rating" value="9"> 9
                    </label>
                </div>
                <div class="form-check-inline ">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="rating" value="10"> 10
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="Commentary">Commentary</label>
                <input type="text" class="form-control" name="commentary"
                       placeholder="Write short review about this product" required>
            </div>


            <button type="submit" class="btn btn-danger btn-block">Add new review</button>
        </form>
    </div>
</div>

