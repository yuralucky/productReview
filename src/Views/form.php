<!--<div class="container">-->
<!--    <div class="row ">-->
        <div class="col-md-8 offset-2">

            <form method="post" action="../../index.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="Name">Product Name</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Enter product name">
                </div>
<!--                <div class="form-group">-->
<!--                    <label for="image">Image</label>-->
<!--                    <input type="file" class="form-check" name="image" placeholder="file">-->
<!--                </div>-->
<!---->
<!--                Or enter URL IMAGE-->

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" class="form-control" name="image" placeholder="URL IMAGE">
                </div>
                <div class="form-group">
                    <label for="Price">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Enter average price">
                </div>
                <div class="form-group">
                    <label for="Data">Date</label>
                    <input type="date" class="form-control" name="date" placeholder="Date">
                </div>
                <div class="form-group">
                    <label for="Author">Author</label>
                    <input type="text" class="form-control " name="author" placeholder="Enter your name">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
        </div>
<!--    </div>-->
<!--</div>-->