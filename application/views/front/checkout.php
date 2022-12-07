<div class="container">
    
    <div class="row">
        <div class="col-md-8">
        <h2 class="mt-3">Order Preview</h2>
            <div class="table-responsive-sm">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Dish</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>SubTotal</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php if($this->cart->total_items() > 0) { 
                    foreach($cartItems as $item) { ?>
                        <tr>
                            <td>
                                <?php $image = $item['image'];?>
                                <img class="" width="100"
                                    src="<?php echo base_url().'public/uploads/dishesh/thumb/'.$image; ?>">
                            </td>

                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo 'Rp '.$item['price']; ?></td>
                            <td><?php echo $item['qty']; ?></td>
                            <td><?php echo 'Rp '.$item['subtotal']; ?></td>
                        </tr>
                        <?php } ?>
                        <?php } else { ?>
                        <tr>
                            <td colspan="5">
                                <p>No Items In Your Cart!!</p>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4"></td>
                            <?php  if($this->cart->total_items() > 0) { ?>
                            <td class="text-left">Total: <b><?php echo 'Rp '.$this->cart->total();?></b></td>
                            <?php } ?>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <form action="<?php echo base_url().'send/index';?>" method="POST"
                class="form-container  shadow-container" style="width:80%">
                <?php if($this->cart->total_items() > 0) {
                foreach($cartItems as $item) { ?>
                    <?php   $nama = $item['name']?>
                <?php } ?>
                <?php } ?>
                <input type="hidden" name="namepro" value="<?php echo $nama;?>">
                <input type="hidden" name="qty" value="<?php echo $item['qty'];?>">
                <input type="hidden" name="total" value="<?php echo $this->cart->total();?>">
                <h3 class="mt-3">Shipping Details</h3><hr>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" type="text" style="height:70px;"
                        class="form-control
                    <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>"><?php echo set_value('address', $user['address']);?></textarea>
                    <?php echo form_error('address'); ?>
                </div>
                <div>
                    <a href="<?php echo base_url().'cart'; ?>" class="btn btn-warning"><i class="fas fa-angle-left"></i>
                        Back to cart</a>
                    <button type="submit" name="submit" class="btn btn-success">Place Order <i
                            class="fas fa-angle-right"></i></button>
                </div>
                </form>
        </div>
    </div>
</div>