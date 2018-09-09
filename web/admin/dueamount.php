<?php
   include('header.php');
   ?>
	<br>
	<br>
	<br>
	<br>
	

<!------ Include the above in your HEAD tag ---------->
<center><fieldset style="background-color: #3330;"><h2>Due Amount</h2></fieldset></center>
<br>
<br>
<div class="container">
       <table align="center">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal">
                      <fieldset>
                         

                         <div class="form-group">
                            <label class="col-md-4 control-label">Invoice No</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="invoice_no" name="invoice_no" placeholder="Invoice No" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>

                         
                        
                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span><input id="fullName" name="fullName" placeholder="Full Name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>


 						             <div class="form-group">
                            <label class="col-md-4 control-label">Receive 1 </label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="addressLine1" name="R_1" placeholder="Receive 1" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Receive 2</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                               	<input id="addressLine2" name="R_2" placeholder="Receive 2" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>


                          <div class="form-group">
                            <label class="col-md-4 control-label">Receive 3</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                                <input id="addressLine1" name="R_3" placeholder="Receive 3" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Receive 4</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span>
                                <input id="addressLine2" name="R_4" placeholder="Receive 4" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div> 
 <input type="submit" name="" class="form-control" >                          </fieldset>
                   
                  </form>
                </td>

               </tr>

          </tbody>

                   
       </table>
      
 
 
    </div>
<?php
   include('footer.php');
   ?>
		