<?php
   include('header.php');
   ?>
  <br>
  <br>
  <br>
  <br>
  

<!------ Include the above in your HEAD tag ---------->
<center><fieldset style="background-color: #3330;"><h2>Expenses</h2></fieldset></center>
<br>
<br>
<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal">
                      <fieldset>
                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">Trip No</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                                <input id="trip no" name="trip no" placeholder="Trip No" class="form-control" 
                                required="true" value="" type="number"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Diesel Ex</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                                <input id="invoice_no" name="Diesel_Ex" placeholder="Diesel Ex" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>

                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">Way Ex</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                                <input id="truck_no" name="way_ex" placeholder="Way Ex" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>

                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">Toll Tax</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                                <input id="date" name="toll_tax" placeholder="Toll Tax" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Road Repairs</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                                <input id="from_s" name="Road_rep" placeholder="Road Repairs" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Bavrages Ex</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                                <input id="to_s" name="food" placeholder="Bavrages Ex" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">General Ex</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span><input id="fullName" name="general_ex" placeholder="General Ex" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>


                        
                      </fieldset>
                   
                  </form>
                </td>

                <td colspan="1">
                   <form class="well form-horizontal">
                      <fieldset>

                          <div class="form-group">
                            <label class="col-md-4 control-label">Driver Bhatta</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                                <input id="addressLine1" name="driver" placeholder="driver_bhatta" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Cleaner Bhatta</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                                <input id="addressLine2" name="cleaner" placeholder="Cleaner Bhatta" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Driver Telephone</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                                <input id="phoneNumber" name="phoneNumber" placeholder="Contact" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>

                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">Loading Ex</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                                <input id="weight" name="weight" placeholder="Loading Ex" class="form-control" required="true" value="kg" type="number"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Un-loading Ex</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                                <input id="rate_permit" name="unWeight" placeholder="Un-loading Ex" class="form-control" required="true" value="kg" type="number"></div>
                            </div>
                         </div>

                        
                         <div class="form-group">
                            <label class="col-md-4 control-label">Other Ex</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                                <input id="total_fraight" name="total_fraight" placeholder="Other_Ex" class="form-control" required="true" value="kg" type="number"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Total Ex</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                                <input id="advance" name="advance" placeholder="Total_Ex" class="form-control" required="true" value="kg" type="number"></div>
                            </div>
                         </div>

                    
                         
       
                      </fieldset>
                   
                   </form>
                 

                </td>
             </tr>
          </tbody>

       </table>
<input type="submit" name="" class="form-control">
    </div>

<?php
   include('footer.php');
   ?>
    