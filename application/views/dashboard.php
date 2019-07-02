    <main class="app-content" style="background-color: white;">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Jobs For You</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <!-- <li class="breadcrumb-item">Tables</li> -->
          <li class="breadcrumb-item active"><a href="#">Jobs For You</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-bordered" id="sampleTable" width="100%">
            <thead>
                <tr>
                <th>S.No.</th>
                <th>Interview Date</th>
                <th>Company</th>
                <th>Skills</th>
                <th>Recruitment Type</th>
                <th>Experience</th>
                <th>Job Location</th>
                <th>Read More</th>
                <?php if($this->session->userdata('userid'))
                  {
                ?>
                  <th>Action</th>
                <?php
                  }
                ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($jobs as $job) { ?>
                <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $job->interview_date; ?></td>
                <td><?php echo $job->company_name; ?></td>
                <td><?php echo $job->skills; ?></td>
                <td><?php echo $job->recruitment_type; ?></td>
                <td><?php echo $job->experiance_needed; ?></td>
                <td><?php echo $job->job_locaion; ?></td>
                <td> 
                    <form action="<?php echo base_url('jobdescription');?>" method='POST'>
                      <input id="id" name="id" type="hidden" value="<?php echo $job->id; ?>">
                      <input id="" name="submit" type="submit" class="btn btn-info" style="background-color: #009688; border-color:#009688;" value="Read More">
                    </form>
                </td>
                <?php if($this->session->userdata('userid'))
                  {
                ?>
                  <td>
                      <form action="<?php echo base_url('deljob');?>" method='POST'>
                        <input id="id" name="id" type="hidden" value="<?php echo $job->id;?>">
                        <!-- <input id="" name="submit" type="submit" class="btn btn-info" style="background-color: #009688; border-color:#009688;" value="Read More"> -->
                        <button class="btn btn-danger fa fa-trash" type="submit"></button>
                      </form>
                  </td>
                <?php
                  }
                ?>
                </tr>
                <?php $i = $i+1; } ?>
            </tbody>
            </table>
        </div>
      </div>
    </main>