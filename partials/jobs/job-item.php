<div class="card col-12 mb-1 job-item <?php if($jobItem['promotion'] == true) echo 'job-item-promotion'; ?>">
    <div class="row no-gutters">
        <div class="col-md-1 col-sm-12">
            <img src="<?php echo $jobItem['companyLogo']; ?>" class="card-img rounded-circle logo" alt="foto">
        </div>
        <div class="col-md-8 col-sm-12">
            <div class="card-body">
                <div class="card-text"><?php echo $jobItem['title']; ?></div>
                <div class="card-text">
                    <small class="text-muted"><?php echo $jobItem['company']; ?></small>
                </div>
                <div class="card-text mt-2">
                    <?php
                    foreach ($jobItem['proffesions'] as $proffesion) {
                    ?>
                        <a href="<?php echo $proffesion['id']; ?>" target="_blank" type="button" class="btn btn-outline-primary btn-sm"><?php echo $proffesion['name']; ?></a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="card-body">
                <div class="card-text">
                    <small class="text-muted">
                        <a href="<?php echo $jobItem['location']['href']; ?>" target="_blank"><i class="fa fa-location-arrow" aria-hidden="true"></i> <?php echo $jobItem['location']['name']; ?></a>
                    </small>
                </div>
                <div class="card-text">
                    <small class="text-muted"><i class="fa fa-clock" aria-hidden="true"></i> <?php echo $jobItem['expireDate']; ?></small>
                </div>
                <div class="card-text mt-2">
                    <a href="<?php echo $jobItem['jobLink']; ?>" class="btn btn-success btn-sm">Apliko</a>
                </div>
            </div>

        </div>
    </div>
</div>