<main class="app-content" style="background-color: white">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Recruitment Details</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <!-- <li class="breadcrumb-item">Forms</li> -->
          <li class="breadcrumb-item"><a href="#">Recruitment Details</a></li>
        </ul>
      </div>
      <div class="row container">
        <div class="col-md-12">
          <!-- <div class="tile"> -->
            <h3 id="cname" class="">Add a Job</h3>
            <br>
            <!-- <div class="tile-body"> -->
              <form class="form-horizontal" method="post" action="<?php echo base_url('jobadd');?>">
                <div class="form-group row">
                  <label class="control-label col-md-3">Company Name</label>
                  <div class="col-md-8">
                    <input name="company" class="form-control" type="Text" placeholder="ABC Company" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">About Company</label>
                  <div class="col-md-8">
                    <textarea name="aboutcompany" class="form-control" rows="4" placeholder="ABC Company is very good!"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Vacancy</label>
                  <div class="col-md-8">
                    <input name="vacancy" class="form-control" type="Text" placeholder="NA">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">CTC</label>
                  <div class="col-md-8">
                    <input name="ctc" class="form-control" type="Text" placeholder="3.5 lakhs per year">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Interview Date</label>
                  <div class="col-md-8">
                    <input name="idate" class="form-control" type="Date" placeholder="30/06/2019" required>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Interview Time</label>
                    <div class="col-md-8">
                      <input name="itime" class="form-control" type="Time" placeholder="30/06/2019">
                    </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Skills</label>
                  <div class="col-md-8">
                    <input name="skills" class="form-control" type="text" placeholder="skill1, skill2,...,etc.">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Specialization</label>
                  <div class="col-md-8">
                    <input name="specialization" class="form-control" type="text" placeholder="PHP, .Net">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Recruitment Type</label>
                    <div class="col-md-8">
                      <select class="form-control" name="recruittype" required>
                        <option value="Referral">Referral</option>
                        <option value="Walkin">Walkin</option>
                        <option value="Selection">Selection</option>
                        <option value="Other">Other</option>
                        <!-- <option>Rotational</option> -->
                      </select>
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label class="control-label col-md-3">Recruitment Type</label>
                    <div class="col-md-8">
                      <input name="recruittype" class="form-control" type="text" placeholder="walkin/other" required>
                    </div>
                </div> -->
                <div class="form-group row">
                    <label class="control-label col-md-3">Experience</label>
                    <div class="col-md-8">
                      <input name="exp" class="form-control" type="text" placeholder="0-2 Years">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Qualification</label>
                    <div class="col-md-8">
                      <input name="qual" class="form-control" type="text" placeholder="B.tech/MCA" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Year Of Passing</label>
                    <div class="col-md-8">
                      <input name="passyear" class="form-control" type="text" placeholder="2019,2018">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Cut-Off</label>
                    <div class="col-md-8">
                      <input name="cutoff" class="form-control" type="text" placeholder="70% throughout">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Position</label>
                    <div class="col-md-8">
                      <input name="position" class="form-control" type="text" placeholder="Software Developer" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Job Description</label>
                    <div class="col-md-8">
                      <textarea name="jobdesc" class="form-control" rows="6" placeholder="This job is for you.."></textarea> 
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Job Type</label>
                    <div class="col-md-8">
                      <select class="form-control" name="jobtype">
                        <option>Full Time</option>
                        <option>Part Time</option>
                        <option>Internship</option>
                      </select>
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label class="control-label col-md-3">Job Type</label>
                    <div class="col-md-8">
                      <input name="jobtype" class="form-control" type="text" placeholder="Full Time">
                    </div>
                </div> -->
                <div class="form-group row">
                    <label class="control-label col-md-3">Job Shifts</label>
                    <div class="col-md-8">
                      <select class="form-control" name="jobshifts">
                        <option>Day Shift</option>
                        <option>Night Shift</option>
                        <option>Rotational</option>
                      </select>
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label class="control-label col-md-3">Job Shifts</label>
                    <div class="col-md-8">
                      <input name="jobshifts" class="form-control" type="text" placeholder="Rotational">
                    </div>
                </div> -->
                <div class="form-group row">
                    <label class="control-label col-md-3">Job Link</label>
                    <div class="col-md-8">
                      <input name="joblink" class="form-control" type="url" placeholder="https://sacredbits.com/jobs/">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Job Location</label>
                    <div class="col-md-8">
                      <input name="joblocation" class="form-control" type="text" placeholder="Banglore" required>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Venue (Interview)</label>
                  <div class="col-md-8">
                    <textarea name="ivenue" class="form-control" rows="4" placeholder="Venue Details" required></textarea>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Contact Person</label>
                    <div class="col-md-8">
                      <input name="contactperson" class="form-control" type="text" placeholder="contact person name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Contact Person Position</label>
                    <div class="col-md-8">
                      <input name="contactpersonpost" class="form-control" type="text" placeholder="hr">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Contact No</label>
                    <div class="col-md-8">
                      <input name="contactno" class="form-control" type="Number" placeholder="1199019101">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Email</label>
                    <div class="col-md-8">
                      <input name="email" class="form-control" type="email" placeholder="hr@company.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Last Date to Apply</label>
                    <div class="col-md-8">
                      <input name="lastdate" class="form-control" type="date" placeholder="29/06/19">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Other Requirments</label>
                    <div class="col-md-8">
                        <textarea name="other" class="form-control" rows="4" placeholder="technical/ non-technical"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Rounds</label>
                    <div class="col-md-8">
                        <textarea name="irounds" class="form-control" rows="4" placeholder="f2f/technical/aptitude"></textarea>
                    </div>
                </div>
                <?php if($this->session->userdata('userid'))
                  {
                ?> 
                  <div class="form-group row">
                      <div class="col-md-8 col-md-offset-3">
                          <button class="btn btn-primary" type="submit">
                              <i class="fa fa-fw fa-lg fa-check-circle"></i>
                              Register
                          </button>
                          <!-- &nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a> -->
                      </div>
                  </div>
                <?php
                  }
                ?>
                <!-- <div class="form-group row">
                  <label class="control-label col-md-3">Gender</label>
                  <div class="col-md-9">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender">Male
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender">Female
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Identity Proof</label>
                  <div class="col-md-8">
                    <input class="form-control" type="file">
                  </div>
                </div> -->
                <!-- <div class="form-group row">
                  <div class="col-md-8 col-md-offset-3">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">I accept the terms and conditions
                      </label>
                    </div>
                  </div>
                </div> -->
              </form>
        </div>
            <!-- <div class="tile-footer">
              <div class="form-group row">
                <div class="col-md-8 col-md-offset-3">
                    <button class="btn btn-primary" type="submit">
                      <i class="fa fa-fw fa-lg fa-check-circle"></i>
                      Register
                    </button> -->
                    <!-- &nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a> -->
                <!-- </div>
              </div>
            </div> -->
      </div>
    </main>