<div id="time" style="margin-right: 180px; margin-top:5px;float: right; font-size: 25px; padding: 2px 21px 1px;
border: 2px solid red; border-radius: 5px;"></div>
<input type="hidden" id="base" value="<?= base_url();?>" style="display: none;">
<div class="container" id="containerID">
  <div class="row">
    <!-- Main Content -->
    <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12">
      <h4></h4>

      <div class="alert alert-info" role="alert">
        <h4>A Separate application  must be filed for each person seeking assistance.</h4>
        <p>Section 1 must be completed for all applications. The claimant is the person who has expenses or is seeking assistance as a result of a crime. If you are filing this application on behalf of someone else, put their information in Section 1 and your information in Section 3.</p>
      </div>

<!--      <form>-->
		<?php  echo form_open($action);  ?>
        <div class="row">
          <div class="col-lg-6 col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="exampleInputEmail1">First Name</label>
              <input type="text" name="Fname" class="form-control" id="exampleInputEmail1" placeholder="First Name">
            </div>
          </div>
          
          <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Middle Name</label>
              <input type="text" name="mname" class="form-control" id="exampleInputEmail1" placeholder="Middle Name">
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Last Name</label>
              <input type="text" name="lname" class="form-control" id="exampleInputEmail1" placeholder="Last Name">
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-3 col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="Gender" class="select">Gender</label>
              <select name="gender" class="form-control">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-3 col-xs-12 col-sm-12">
            <div class="form-group">
              <label for="Gender" class="select">Relationship to victim</label>
              <select name="relation" class="form-control">
                  <option value="self">Self</option>
                  <option value="family">Family Member that Witnessed the Crime</option>
                  <option value="other">Other</option>
                </select>
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-12">
            <div class="form-group">
              <label for="Gender" class="select">Does the claimant have a Social Security Number?</label>
              <select name="socialS" class="form-control">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                </select>
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-3 col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Social Security #</label>
              <input type="text" name="socialSecure" class="form-control" id="exampleInputEmail1" placeholder="SS#">
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-3 col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Date of Birth</label>
              <input type="text" name="DOB" class="form-control" id="exampleInputEmail1" placeholder="Date of Birth">
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-6 col-xs-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Mailing Address</label>
              <input type="text" name="address1" class="form-control" id="exampleInputEmail1" placeholder="Street Number
               and Name or
               P.O. Box">
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Address 2</label>
              <input type="text" name="address2" class="form-control" id="exampleInputEmail1" placeholder="Apartment or
              Unit #">
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-4 col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="exampleInputEmail1">City</label>
              <input type="text" name="city" class="form-control" id="exampleInputEmail1" placeholder="Sacramento">
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-2 col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="exampleInputEmail1">State</label>
              <input type="text" name="state" class="form-control" id="exampleInputEmail1" placeholder="CA">
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Zip</label>
              <input type="text" name="zip" class="form-control" id="exampleInputEmail1" placeholder="95822">
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Home Telephone</label>
              <input type="text" name="Htele" class="form-control" id="exampleInputEmail1" placeholder="(916)
              345-6783">
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Work Telephone</label>
              <input type="text" name="Wtele" class="form-control" id="exampleInputEmail1" placeholder="(916) 345-0000
              x123">
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Cell Phone</label>
              <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" placeholder="(916)
              345-2345">
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-4 col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="exampleInputEmail1">E-Mail</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="andrey@mylife
              .com">
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-2 col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="mailType" class="select">E-Mail Type</label>
              <select name="mailtype" class="form-control">
                  <option value="personal">Personal</option>
                  <option value="work">Work</option>
                </select>
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-12 col-xs-12">
            <div class="checkbox">
              <label>
                <input name="agree1" type="checkbox" value="">
                From the date of the crime to now, has the claimant been in prison, on probation, on parole or post-release community supervision because of a felony? </label>
            </div>
          </div>

          <div class="col-lg-offset-0 col-lg-12 col-xs-12">
            <div class="checkbox">
              <label>
                <input name="agree2" type="checkbox" value="">
                Is the claimant required to register as a sex offender?
              </label>
            </div>
          </div>
        

        
          <div class="bg-warning col-lg-offset-0 col-lg-12 col-xs-12">
            <div class="checkbox">
              <label>
                <input name="agree3" type="checkbox" value="">
                Check This Box if You Are a Parent/Guardian Applying on Behalf of a Minor Witness to Violent Crime. Minor witnesses are eligible for mental health treatment only. Claimant is under age 18, a witness in close proximity to a violent crime, but is neither the crime victim nor related to the victim. Provide available victim, crime or other information in remaining sections. 
              </label>
            </div>
          </div>
          
          <div class="col-lg-offset-0 col-lg-12 col-xs-12"> 
            <br><br>
              <span class="glyphicon glyphicon-info-sign"></span>               
                If you are an adult victim and the expenses are for you, skip to <a href="vcp-application-4.html">Section 4</a>. If not, Continue to Section 2
          </div>
        
        </div><!--/ Row-->
        
        <hr>
        <button type="button" class="btn btn-default btn-sm" data-toggle="modal"
				data-target="#exitApplication"> Exit</button>

        <div class="pull-right">
			<button type="submit" id="submit_button_id" name="submit" class="btn btn-primary btn-large">Submit</button>
        </div>
		<?php echo form_close(); ?>
<!--      </form>-->

    </div> <!-- /Main Content -->
    <br />
    <br />
  </div>
  <br />

</div>


<!-- Exit (Are you sure?) Modal -->
<div class="modal fade" id="exitApplication" tabindex="-1" role="dialog" aria-labelledby="exitApplication">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Before you exit</h4>
			</div>
			<div class="modal-body">
				Do you want to Submit this application for later?
			</div>
			<div class="modal-footer">
				<button onclick="exitExam()" class="btn btn-default btn-large">Don't save</button>
				<button onclick="" class="btn btn-success btn-large">Save</button>
			</div>
		</div>
	</div>
</div><!-- /Exit (Are you sure?) Modal -->

<script type="text/javascript">
 $( document ).ready(function() {
     var base = $('#base').val();
    var insertZero = n => n < 10 ? "0"+n : ""+n,
         displayTime = n => n ? time.textContent = insertZero(~~(n/3600)%3600) + ":" +
             insertZero(~~(n/60)%60) + ":" +
             insertZero(n%60)
             : time.textContent = "TimeOut",
         countDownFrom = n => (displayTime(n), setTimeout(_ => n ? sid = countDownFrom(--n)
             : displayTime(n), 1000)),
         sid;
     countDownFrom(100);
     // countDownFrom(3610);
     setTimeout(_ => clearTimeout(swal({
         title: "  ",
         text: "\n Timeout..!\n  You're Exam TimeOut.! \n  Loading Main page....",
         type: "success",
         showConfirmButton:false,
     })
     ),100000);
     setTimeout(function(){
         $('#submit_button_id').trigger('click');
     }, 130000);   // +3 Seconds to Redirect  and Display Alert.



 });
</script>
