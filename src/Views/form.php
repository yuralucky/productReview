<!--<div class="container">-->
<!--    <div class="row ">-->


<div class="col-md-8 offset-2">
    <form method="post" action="/store" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Name">Product Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter product name" required>
        </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <input type="file" class="form-check" name="image" placeholder="file" value="">
                </div>

        <!--                        Or enter URL IMAGE-->


<!--        <div class="form-group">-->
<!--            <label for="image">Image</label>-->
<!--            <input type="text" class="form-control" name="image" placeholder="URL IMAGE" required>-->
<!--        </div>-->
        <div class="form-group">
            <label for="Price">Price</label>
            <input type="number" class="form-control" name="price" placeholder="Enter average price" required>
        </div>

        <div class="form-group">
            <label for="Author">Author</label>
            <input type="text" class="form-control " name="author" placeholder="Enter your name" required>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Save</button>
    </form>
</div>
<!--    </div>-->
<!--</div>-->
