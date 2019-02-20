<article class="registrationform">
  <h2>Registration form</h2>
  <p>We're not currently taking registrations for the Roux Academy Conference, but if you want to be placed into our mailing list for more information, please complete the form below.</p>

  <form class="registration form-horizontal" action="#">

    <fieldset id="personalinfo">
      <legend>Personal Info</legend>
      
      <div class="form-group">
        <label class="col-lg-4 control-label" for="myname">Name</label>
        <div class="col-lg-8">
          <input type="text" class="form-control" name="myname" id="myname" autofocus placeholder="Last, First" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-4 control-label" for="companyname">Company Name</label>
        <div class="col-lg-8">
          <input class="form-control" type="text" name="companybname" id="companyname" />
        </div>
      </div>


      <div class="form-group">
        <label class="col-lg-4 control-label" for="myemail">Email</label>
        <div class="col-lg-8">
        <input class="form-control" type="email" name="myemail" id="myemail" required autocomplete="off" />
        </div>
      </div>

    </fieldset> <!-- personal info -->

   <fieldset id="otherinfo">
      <legend>Other Info</legend>

        <div class="form-group">
          <label class="col-lg-4 control-label">Request Type</label>
            <div class="radio col-lg-8">
              <label>
                <input  type="radio" name="requesttype" value="question" /> Question
              </label>
              <div class="radio">
                <label>
                  <input  type="radio" name="requesttype" value="question" /> Question
                </label>
              </div> 
            </div>
        </div>

        <div class="form-group">
          <label class="col-lg-4 control-label">Subscribe</label>
          <div class="checkbox col-lg-8">
            <label>
              <input type="checkbox" id="subscribe" name="subscribe" CHECKED value="yes" />
              Would you like to subscribe to our e-mail list?
            </label>
          </div>
        </div>



        <div class="form-group">
          <label class="col-lg-4 control-label" for="reference">How did you hear about the Roux Academy Conference?</label>
            
            <div class="tspace col-lg-8">
              <select class="form-control"  name="reference" id="reference">
                <option>Choose...</option>
                <option value="friend">A friend</option>
                <option value="facebook">Facebook</option>
                <option value="twitter">Twitter</option>
              </select>
            </div>
          
        </div>
    </fieldset> 
    <div class="col-lg-offset-4 col-lg-8">
      <button class="btn btn-success" type="submit">Submit</button>
    </div>
  </form>
</article>