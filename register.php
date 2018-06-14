          <!-- Website Overview -->
                

            <!-- Latest Users -->
            <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                  <h3 class="panel-title">Register Clients</h3>
                </div>
              <div class="panel-body">
                        <div id="scrolTable">
                  <div class=" col-md-2">
                  </div>
                  <div class=" col-md-8">
      <form class="form-horizontal" method='POST' action='php/registerStaff.php'>
      <table class="table table-responsive">
          <tr>            
      <td><strong>Full Name</strong></td>
      <td><span id="sprytextfield1">
            <input type="text" name="fname" id="email" placeholder="full name" required>
      </span></td>
    </tr>
    <tr>
      <td><strong>Sex<span class="required"><font color="#CC0000">*</font></span></strong></td>
      <td>
 <div class="radio">
  <label><input type="radio" name="gender" value="male">Male</label>
  <label><input type="radio" name="gender" value="female">Female</label>
  <label><input type="radio" name="gender" value="semenya" disabled>Semenya</label>
</div>
  </td>
    </tr>
    <tr>
      <td><strong>Birthday</strong></td>
      <td>
        <input type="text" name="birthday" id="birthday" class="tcal"/>
  </td>
    </tr>
      <tr>
      <td><strong>ID Number<span class="required"><font color="#CC0000">*</font></span></strong></td>
      <td><span id="sprytextfield6">
        <input type="text" name="id"  placeholder="ID Number" required>
        </span></td>
    </tr>
    <tr>
      <td><strong>Phone Number<span class="required"><font color="#CC0000">*</font></span></strong></td>
      <td><span>
        <input type="text" name="phone" id="phone" placeholder="Phone Number" required>
        </span></td>
    </tr>
    <tr>
      <td><strong>Department</strong></td>
      <td><span id="spryselect3">
  <select name="department" id="department">
  <option value="" selected>Select Department</option>
  <option value="Mason" >Mason</option>
  <option value="Operator" >Operator</option>
  <option value="Welding">Welding</option>
  <option value="Carpenter">Carpenter</option>
  <option value="Mechanic">Mechanic</option>
  <option value="Electrician">Electrician</option>
  <option value="Others">Others</option>
  </select>      
    </span></td>
    </tr>
    <tr>
      <td><strong>Position</strong></td>
      <td><span id="spryselect2">
  <select name="position" id="position">
  <option value="selected">Select Position</option>
  <option value="Foreman">Foreman</option>
  <option value="As. Foreman">As. Foreman</option>
  <option value="Manager">Manager</option>
  <option value="Regular Worker">Regular Worker</option>
  <option value="Supervisor">Supervisor</option>
  <option value="Head">Head</option>
  <option value="Ass. Head">Ass. Head</option>
  <option value="Clerk">Clerk</option>
  </select>
      </span></td>
    </tr>
    <tr>
      <td><strong>Grade Level<span class="required"><font color="#CC0000">*</font></span></strong></td>
      <td><span id="sprytextfield5">
        <input type="text" name="grade" id="grade" placeholder="grade" required>
        </span></td>
    </tr>
    <tr>
      <td><strong>Years Spent<span class="required"><font color="#CC0000">*</font></span></strong></td>
      <td><span id="sprytextfield6">
        <input type="text" name="years" id="years" placeholder="years spent" required>
        </span></td>
    </tr>
    <tr>
      <td><strong>Username<span class="required"><font color="#CC0000">*</font></span></strong></td>
      <td><span id="sprytextfield4">
        <label for="username"></label>
        <input type="text" name="username" id="username" placeholder="Username" required>
        </span></td>
    </tr>
    <tr>
      <td><strong>Password<span class="required"><font color="#CC0000">*</font></span></strong></td>
      <td><input id="password" type="password" name="password" placeholder="Password" required>
      <br /><span>Minimum number of characters not met.</span></span></td>
    </tr>
    <tr>
      <td><strong>Confirm Password<span class="required"><font color="#CC0000">*</font></span></strong></td>
      <td><input id="password" type="password" name="password2" placeholder="Confirm Password" required>
      <br /><span class=" ">Passwords dont much! Please Try again!!</span></span></td>
    </tr>
    <tr>
      <td><strong>User Type</strong></td>
      <td>
      <div class="radio">
  <label><input type="radio" name="type" value="clerk">Clerk</label>
  <label><input type="radio" name="type" value="staff">Staff</label>
  <label><input type="radio" name="type" value="employee">Casual Employee</label>
</div>
      </td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" id="submit" value="Register Staff" class="btn btn-success"/></td>
    </tr>
                    </table>
              </form>
                  </div>
                  <div class=" col-md-2">
                  </div>
                
                </div>
            </div>
        </div>
          