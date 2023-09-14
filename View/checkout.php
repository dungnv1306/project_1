<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Checkout</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- 
 Checkout Start 
<form action="index.php?act=checkout" method="post">
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing
                        Address</span></h5>

                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" placeholder="John" name="bill_name">
                        </div>

                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="email" placeholder="example@email.com" name="bill_email">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" placeholder="+123 456 789" name="bill_phone">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Address Line 1</label>
                            <input class="form-control" type="text" placeholder="123 Street" name="bill_address">
                        </div>


                        <div class="col-md-12">
                            <p id="show" class="font-weight-bold text-success"></p>
                        </div>


                    </div>

                </div>

            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order
                        Total</span></h5>
                 < ?php if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                    $total = 0;
                    $amount = 0;
                    $i = 0;
                    //  echo var_dump($_SESSION['giohang'][1]);
                    //     echo var_dump($_SESSION['giohang']).'<br>';
                    //     //echo var_dump($_SESSION['giohang'][1][0]).'<br>';
                    //    // $a = array($_SESSION['giohang'][0][0],$_SESSION['giohang'][1][0]);
                    //    // echo var_dump($a).'<br>';
                    //      for($j = 0;$j < count($_SESSION['giohang']);$j++){
                    //         $b = array($_SESSION['giohang'][$j][0]);
                    //      }
                    //     echo var_dump($b).'<br>';
                
                    ?>
                    < ?php foreach ($_SESSION['giohang'] as $item) {
                        $calculate = (int) $item[2] * (int) $item[3];
                        $total += $calculate;

                        // echo var_dump($item[3]);
                        ?>
                        <div class="bg-light p-30 mb-5">
                            <div class="border-bottom">
                                <h6 class="mb-3">Products</h6>
                                <div class="d-flex justify-content-between">
                                    <p>
                                        < ?= $item[0] ?>
                                    </p>
                                    <p>
                                        < ?php echo number_format($item[2]) ?>
                                    </p>
                                </div>
                            </div>
                             <div class="d-flex justify-content-between">
                            <p>Product Name 2</p>
                            <p>$150</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Product Name 3</p>
                            <p>$150</p>
                        </div

                            < ?php
                            $amount += $item[3];
                            $i++;
                    }
                } ?>
                </div>
                <div class="border-bottom pt-3 pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        <h6>
                            < ?= number_format($total) ?>
                        </h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Amount</h6>
                        <h6 class="font-weight-medium">
                            < ?php
                            echo $amount ?>
                        </h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <h5>
                            < ?= number_format($total) ?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <h5 class="section-title position-relative text-uppercase mb-3"><span
                        class="bg-secondary pr-3">Payment</span></h5>
                <div class="bg-light p-30">
                    <label class="" for="paypal">Paypal</label>
                    <select name="" id="select1" class="custom-select mb-2" onchange="paymentChange()">
                        <option value="0"></option>
                        <option value="paypal">Paypal</option>
                        <option value="directcheck">Direct Check</option>
                        <option value="banktransfer">Bank Transfer</option>
                    </select>
                  <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="payment" id="payment" value="paypal" onclick="paymentChange()">
                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="payment" id="payment" value="directcheck" onclick="paymentChange()">
                                    <label class="custom-control-label" for="directcheck">Direct Check</label>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="payment" id="payment" value="banktransfer" onclick="paymentChange()">
                                    <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                                </div>
                            </div>
                    <button class="btn btn-block btn-primary font-weight-bold py-3">Place Order</button>
                </div>
            </div>
        </div>

    </div>

</form> 
 Checkout End -->

<form action="index.php?act=checkout" method="post">
    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing
                        Address</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" placeholder="John" name="bill_name">
                        </div>

                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="example@email.com" name="bill_email">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" placeholder="+123 456 789" name="bill_phone">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Address Line 1</label>
                            <input class="form-control" type="text" placeholder="123 Street" name="bill_address">
                        </div>
                        <div class="col-md-12 form-group">
                            <p id="show" class="text-success font-weight-bold"></p>
                        </div>



                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order
                        Total</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Products</h6>
                        <?php if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                            $total = 0;
                            $amount = 0;
                            $i = 0;
                            $arrA = [];
                            $arrB = [];
                            $arrC = [];
                            $arrD = [];
                            foreach ($_SESSION['giohang'] as $item) {
                                $calculate = (int) $item[2] * (int) $item[3];
                                $total += $calculate;
                               
                                ?>
                                <div class="d-flex justify-content-between">
                                    <p>
                                        <?= $item[0] ?>
                                    </p>
                                    <p>
                                        <?php echo number_format($item[2]) ?>
                                    </p>
                                </div>
                                <!-- <div class="d-flex justify-content-between">
                            <p>Product Name 2</p>
                            <p>$150</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Product Name 3</p>
                            <p>$150</p>
                        </div> -->
                                <?php $amount += $item[3];
                                $i++;
                               
                            }
                            for($j = 0; $j<count($_SESSION['giohang']);$j++){
                                array_push($arrA,$_SESSION['giohang'][$j][0]);
                                array_push($arrB,$_SESSION['giohang'][$j][1]);
                                array_push($arrC,$_SESSION['giohang'][$j][4]);
                                array_push($arrD,$_SESSION['giohang'][$j][5]);
                               }
                             
                            echo var_dump($arrA)."<br>";
                            for($a = 0; $a<count($arrA);$a++){
                                echo $arrA[$a]."<br>";
                            }
                            echo var_dump($arrB)."<br>";
                            $ab = implode(",",$arrA);
                            $ad = implode(",",$arrB);
                            echo $ab."<br>";
                            echo $ad."<br>";
                            $man = preg_split("/\,/",$ab);
                            echo count($man);
                            echo var_dump($man);
                         
                        } ?>
                    </div>
                   
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>
                                <?= number_format($total) ?>
                            </h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Amount</h6>
                            <h6 class="font-weight-medium">
                                <?= $amount ?>
                            </h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>
                                <?= number_format($total) ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="bill_total" value="<?= $total ?>">
                <input type="hidden" name="bill_mount" value="<?= $amount ?>">
                <input type="hidden" name="bill_proname" value="<?= $ab ?>">
                <input type="hidden" name="bill_proimg" value="<?= $ad ?>">
                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span
                            class="bg-secondary pr-3">Payment</span></h5>
                    <div class="bg-light p-30">
                        <select class="custom-select mb-5" name="bill_payment" onchange="paymentChange()">
                         
                            <option value="paypal">Paypal</option>
                            <option value="directcheck">Direct Check</option>
                            <option value="banktransfer">Bank Transfer</option>
                        </select>
                        <input type="submit" class="btn btn-block btn-primary font-weight-bold py-3" name="buy" value="Place Order">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->
</form>





<script>
    function paymentChange() {
        var show = document.getElementById('show');
        var values = document.querySelector('select');
        console.log(values);
        var vl = values.value;
        console.log(vl);
        if (vl == "paypal") {
            show.innerHTML = "You choose paypal";
        }
        else if (vl == "directcheck") {
            show.innerHTML = "You choose Direct check"
        }
        else if (vl == "banktransfer") {
            show.innerHTML = "You choose Bank Transfer"
        }

    }
</script>