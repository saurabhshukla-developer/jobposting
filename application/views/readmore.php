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
            <h3 id="cname" class=""><?php echo $jobdetails->company_name;?></h3>
            <br>
            <!-- <div class="tile-body"> -->
              <form class="form-horizontal">
                <div class="form-group row">
                  <label class="control-label col-md-3">About Company</label>
                  <div class="col-md-8">
                    <textarea name="aboutcompany" class="form-control" rows="4" readonly><?php echo $jobdetails->about_company;?></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Vacancy</label>
                  <div class="col-md-8">
                    <input name="vacancy" class="form-control" value="<?php echo $jobdetails->vacancy;?>" type="text" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">CTC</label>
                  <div class="col-md-8">
                    <input name="ctc" class="form-control" value="<?php echo $jobdetails->ctc;?>" type="text" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Interview Date</label>
                  <div class="col-md-8">
                    <input name="idate" class="form-control" value="<?php echo $jobdetails->interview_date;?>" type="text" readonly >
                  </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Interview Time</label>
                    <div class="col-md-8">
                      <input name="itime" class="form-control" value="<?php echo $jobdetails->interview_time;?>" type="text" readonly>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Skills</label>
                  <div class="col-md-8">
                    <input name="skills" class="form-control" value="<?php echo $jobdetails->skills;?>" type="text" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Specialization</label>
                  <div class="col-md-8">
                    <input name="specialization" class="form-control" value="<?php echo $jobdetails->specialization;?>" type="text" readonly>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Recruitment Type</label>
                    <div class="col-md-8">
                      <input name="recruittype" class="form-control" value="<?php echo $jobdetails->recruitment_type;?>" type="text" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Experience</label>
                    <div class="col-md-8">
                      <input name="exp" class="form-control" value="<?php echo $jobdetails->experiance_needed;?>" type="text" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Qualification</label>
                    <div class="col-md-8">
                      <input name="qual" class="form-control" value="<?php echo $jobdetails->qualification;?>" type="text" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Year Of Passing</label>
                    <div class="col-md-8">
                      <input name="passyear" class="form-control" value="<?php echo $jobdetails->passing_year;?>" type="text" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Cut-Off</label>
                    <div class="col-md-8">
                      <input name="cutoff" class="form-control" value="<?php echo $jobdetails->cut_off;?>" type="text" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Position</label>
                    <div class="col-md-8">
                      <input name="position" class="form-control" value="<?php echo $jobdetails->position;?>" type="text" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Job Description</label>
                    <div class="col-md-8">
                      <textarea name="jobdesc" class="form-control" rows="6" readonly><?php echo $jobdetails->description;?>
                      </textarea> 
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Job Type</label>
                    <div class="col-md-8">
                      <input name="jobtype" class="form-control" value="<?php echo $jobdetails->job_type;?>" type="text" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Job Shifts</label>
                    <div class="col-md-8">
                      <input name="jobshifts" class="form-control" value="<?php echo $jobdetails->job_shift;?>" type="text" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Job Link</label>
                    <div class="col-md-8">
                      <a class="form-control" href="<?php echo $jobdetails->job_link;?>" target="_blank"><?php echo $jobdetails->job_link;?></a>  
                      <!-- <input name="joblink" class="form-control col-md-8" value="?php echo $jobdetails->job_link;?>" type="text" placeholder="https://sacredbits.com/jobs/Welcome/" readonly> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Job Location</label>
                    <div class="col-md-8">
                      <input name="joblocation" class="form-control" value="<?php echo $jobdetails->job_locaion;?>" type="text" readonly>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Venue (Interview)</label>
                  <div class="col-md-8">
                    <textarea name="ivenue" class="form-control" rows="4" readonly><?php echo $jobdetails->interview_address;?>
                    </textarea>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Contact Person</label>
                    <div class="col-md-8">
                      <input name="contactperson" class="form-control" value="<?php echo $jobdetails->contact_person_name;?>" type="text" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Contact Person Position</label>
                    <div class="col-md-8">
                      <input name="contactpersonpost" class="form-control" value="<?php echo $jobdetails->contact_person_position;?>" type="text" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Contact No</label>
                    <div class="col-md-8">
                      <input name="contactno" class="form-control" value="<?php echo $jobdetails->contact_person_mobile_no;?>" type="Number" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Email</label>
                    <div class="col-md-8">
                      <input name="email" class="form-control" value="<?php echo $jobdetails->contact_person_email_id;?>" type="email" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Last Date to Apply</label>
                    <div class="col-md-8">
                      <input name="lastdate" class="form-control" value="<?php echo $jobdetails->last_date;?>" type="text" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Other Requirments</label>
                    <div class="col-md-8">
                        <textarea name="other" class="form-control" rows="4" readonly><?php echo $jobdetails->other_requirment;?> 
                        </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Rounds</label>
                    <div class="col-md-8">
                        <textarea name="irounds" class="form-control" rows="4" readonly><?php echo $jobdetails->rounds;?>
                      </textarea>
                    </div>
                </div>
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
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
              </div>
            </div> -->
      </div>
    </main>