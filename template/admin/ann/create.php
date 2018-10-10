
      <?php echo form_open(admin_url("ann/".($info->id ? "service_update/".$info->id : "service_create")));?>
        <div class="card">
            <div class="card-header clear-border bg-primary text-white">Coind Manager</div>
            <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="title">Server</h5>
                      <div class="row">
                        <div class="col">
                          Name
                          <input type="text" value="<?php echo $info->name;?>" class="form-control" name="name" placeholder="Project Name">
                        </div>
                        <div class="col">
                          Symbol
                          <input type="text" value="<?php echo $info->symbol;?>" class="form-control" name="symbol" placeholder="Symbol">
                        </div>
                      </div>


                      <div class="row">
                        <div class="col">
                          Server
                          <input type="text" value="<?php echo $info->rpcserver;?>" name="rpcserver" class="form-control" placeholder="Server">
                        </div>
                        <div class="col">
                          Port
                          <input type="text" value="<?php echo $info->rpcport;?>" name="rpcport" class="form-control" placeholder="Port">
                        </div>
                      </div>

                      <div class="form-group">
                        Class
                        <select class="form-control" name="runclass">
                            <option <?php echo ($info->runclass == "RPCClass" ? "selected" : "");?> value="RPCClass">RPC</option>
                            <option <?php echo ($info->runclass == "Web3" ? "selected" : "");?> value="Web3">Web3</option>
                            <option <?php echo ($info->runclass == "ServiceAPI" ? "selected" : "");?> value="ServiceAPI">Service API</option>
                        </select>
                      </div>


                      <div class="row">
                        <div class="col">
                          
                          <label class="checkbox-inline"><input type="checkbox" <?php echo ($info->deposit == 1 ? "checked" : "");?> data-toggle="toggle" data-onstyle="info" data-offstyle="danger" data-size="small" name="deposit"  value="1" placeholder="Deposit"> Deposit</label>
                        </div>
                        <div class="col">
                          
                          <label class="checkbox-inline"><input type="checkbox" <?php echo ($info->withdraw == 1 ? "checked" : "");?> data-toggle="toggle" data-onstyle="info" data-offstyle="danger" data-size="small" name="withdraw"  value="1" placeholder="Withdraw"> Withdraw</label>
                        </div>

                        <div class="col">
                          
                          <label class="checkbox-inline"><input type="checkbox" <?php echo ($info->opentrade == 1 ? "checked" : "");?> data-toggle="toggle" data-onstyle="info" data-offstyle="danger" data-size="small" name="opentrade" value="1" placeholder="Open trade"> Open trade</label>
                        </div>

                        <div class="form-group form-check">

                          <label class="checkbox-inline"><input type="checkbox" <?php echo ($info->status == 1 ? "checked" : "");?> data-toggle="toggle" data-onstyle="info" data-offstyle="danger" data-size="small" name="status" value="1" placeholder="Open trade"> Online</label>

                          
                        </div>

                      </div>

                      <hr>
                       <h5>Base</h5>
                      <div class="row">
	                      <?php
	                      foreach($base as $cBase) {
		                      ?>
		                      <div class="col">
			                      <div class="checkbox"><label><input <?php echo (in_array($cBase, $info->base) ? "checked" : "");?> data-toggle="toggle" data-onstyle="info" data-offstyle="danger" data-size="small" type="checkbox" name="base[]" value="<?php echo $cBase;?>"></label> <?php echo $cBase;?></div>
		                      </div>
		                      <?php
	                      }
	                      ?>
                        <!--<div class="col">
                         
                          <div class="checkbox"><label><input <?php /*echo (in_array("BTC",$info->base) ? "checked" : "");*/?> data-toggle="toggle" data-onstyle="info" data-offstyle="danger" data-size="small" type="checkbox" name="base[]" value="BTC"></label> BTC</div>
                        </div>
                        <div class="col">
                          <div class="checkbox"><label><input <?php /*echo (in_array("USDT",$info->base) ? "checked" : "");*/?> data-toggle="toggle" data-onstyle="info" data-offstyle="danger" data-size="small" type="checkbox" name="base[]" value="USDT"></label> USDT</div>
                        </div>
                        <div class="col">
                          <div class="checkbox"><label><input <?php /*echo (in_array("ETH",$info->base) ? "checked" : "");*/?> data-toggle="toggle" data-onstyle="info" data-offstyle="danger" data-size="small" type="checkbox" name="base[]" value="ETH"></label> ETH</div>
                        </div>

                        <div class="col">
                          <div class="checkbox"><label><input <?php /*echo (in_array("KRW",$info->base) ? "checked" : "");*/?> data-toggle="toggle" data-onstyle="info" data-offstyle="danger" data-size="small" type="checkbox" name="base[]" value="KRW"></label> KRW</div>
                        </div>

	                      <div class="col">
		                      <div class="checkbox"><label><input <?php /*echo (in_array("VND",$info->base) ? "checked" : "");*/?> data-toggle="toggle" data-onstyle="info" data-offstyle="danger" data-size="small" type="checkbox" name="base[]" value="VND"></label> VND</div>
	                      </div>-->
                      </div>
                      <hr>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Icons</label>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" value="<?php echo $info->icon;?>" name="icon" placeholder="Icon URL">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Upload</button>
                        </div>
                      </div>
                        <small id="emailHelp" class="form-text text-muted">Icon format 48x48</small>
                      </div>

                    </div><!--//end col base //-->
                    <div class="col">
                      <h5 class="title">Infomation</h5>

                      <div class="form-group">
                        <label for="exampleInputEmail1">ANN</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" name="info[url]" placeholder="ANN URL">
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="exampleInputEmail1">Homepage</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" name="info[homepage]" placeholder="Home URL">
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="exampleInputEmail1">Explorer</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" name="info[explorer]" placeholder="Explorer URL">
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="exampleInputEmail1">API</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" name="info[api]" placeholder="API URL">
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="exampleInputEmail1">Github</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" name="info[github]" placeholder="Github URL">
                        </div>
                      </div>

                      
                    </div>
                  </div>
                  
              </div><!--//Card body //-->
              <div class="card-footer"><button type="submit" class="btn btn-primary">Submit</button></div>
          </div>    
         
                  
      </form>
