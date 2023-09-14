<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Love Lists</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Cart Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-12 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Products</th>
                        <th>Images</th>
                        <th>Price</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                   <?php foreach ($a as $value){
                    ?>
                      <tr>
                        <td><?= $value['pro_idlove']?></td>                     
                        <td><?= $value['pro_name']?></td>
                        <td><img src="../View/img/<?= $value['pro_img']?>" alt=""></td>
                        <td><?= $value['pro_price']?></td>
                        <td><a href="index.php?act=lovedie&pro_idlove=<?=$value['pro_idlove']?>">Delete</a></td>
                      
                      </tr>

                   <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<!-- Cart End -->