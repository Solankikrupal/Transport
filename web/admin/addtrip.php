<?php
   include('header.php');
   ?>
	<br>
	<br>
	<br>
	<br>
	

<!------ Include the above in your HEAD tag ---------->
<center><fieldset style="background-color: #3330;"><h2>Add Trips</h2></fieldset></center>
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
                            <label class="col-md-4 control-label">Invoice No</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="invoice_no" name="invoice_no" placeholder="Invoice No" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>

                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">Truck No</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="truck_no" name="truck_no" placeholder="Truck No" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>

                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">Date</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="date" name="date" placeholder="Date" class="form-control" required="true" value="" type="date"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">From</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="from_s" name="from_s" placeholder="Source Address" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">To</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="to_s" name="to_s" placeholder="Destination Address" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span><input id="fullName" name="fullName" placeholder="Full Name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>


 						<div class="form-group">
                            <label class="col-md-4 control-label">Address Line 1</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="addressLine1" name="addressLine1" placeholder="Address Line 1" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 2</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="addressLine2" name="addressLine2" placeholder="Address Line 2" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Contact</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="phoneNumber" name="phoneNumber" placeholder="Contact" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>

                      </fieldset>
                   
                  </form>
                </td>

                <td colspan="1">
                  <br>
                  
                   <form class="well form-horizontal">
                      <fieldset>
                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">Weight</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="weight" name="weight" placeholder="Weight" class="form-control" required="true" value="kg" type="number"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Rate Permit</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="rate_permit" name="rate_permit" placeholder="Rate Permit" class="form-control" required="true" value="kg" type="number"></div>
                            </div>
                         </div>

                        
                         <div class="form-group">
                            <label class="col-md-4 control-label">Total Fraight</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="total_fraight" name="total_fraight" placeholder="Total Fraight" class="form-control" required="true" value="kg" type="number"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Advance</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="advance" name="advance" placeholder="Advance" class="form-control" required="true" value="kg" type="number"></div>
                            </div>
                         </div>

                    
                         <div class="form-group">
                            <label class="col-md-4 control-label">Balance</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="balance" name="balance" placeholder="Balance" class="form-control" required="true" value="kg" type="number"></div>
                            </div>
                         </div>


                         <div class="form-group">
                            <label class="col-md-4 control-label">W-Charge</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="wcharge" name="wcharge" placeholder="W-Charge" class="form-control" required="true"  type="number"></div>
                            </div>
                         </div>


                              <div class="form-group">
                            <label class="col-md-4 control-label">Claim</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"></span>
                                  <select class="selectpicker form-control" placeholder="Pending Or Paid">
                                     <option></option>
                                     <option>Pending</option>
                                     <option>Paid</option>
                                  </select>
                               </div>
                            </div>
                         </div>



                         <div class="form-group">
                            <label class="col-md-4 control-label">Truck Owner</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="truck_owner" name="truck_owner" placeholder="Truck Owner" class="form-control" required="true" type="text"></div>
                            </div>
                         </div>
                        
                         <div class="form-group">
                            <label class="col-md-4 control-label">Driver Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="driver_name" name="driver_name" placeholder="Drive Name" class="form-control" required="true" type="text"></div>
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
		