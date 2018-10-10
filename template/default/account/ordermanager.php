
<div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
    <?php include __DIR__."/menu.php"; ?>
  </div>
  <div class="col-12 col-md-9 col-xl-10 bd-content">
    <div class="card">
          
        <div class="card-body">
              
              <h4><i class="fas fa-markets fa-icon"></i> Order Manager</h4>
              <hr>
            <table class="table table-hover">
                <thead>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Market</th>
                    <th>Amount</th>
                    <th>Prices</th>
                    <th>Status</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php 
                    if(isset($data->records)){
                    foreach ($data->records as $key => $value) { 
                       
                        ?>
                       
                    <tr id="orderID<?php echo $value->id;?>">
                        <td><?php echo date('Y-m-d h:i:s',@$value->ctime);?></td>
                        <td><?php echo (@$value->type == 1 ? "Sell" : "Buy");?></td>
                        <td><?php echo $value->market;?></td>
                        <td><?php echo @$value->amount;?></td>
                        <td><?php echo @$value->price;?></td>
                        <td>Pendding</td>
                        <td class="text-right">
                            <button class="btn btn-outline-primary btn-sm" onClick="cancelOrder('<?php echo $value->id;?>','<?php echo $value->market;?>');"><i class="fas fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                    <?php } 
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    var cancelOrder = function(orderid, symbol){
        
        $.ajax({
            type: "GET",
            url: "<?php echo store_url("account/cancelorder");?>/"+orderid+"/"+symbol,
            
            success: function(){
                $("#orderID"+orderid).remove();
            }
          });
    };
</script>