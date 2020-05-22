

<div class="card col-12 mb-1 job-item <?php if($jobItem['promotion'] == true) echo 'job-item-promotion'; ?>">
    <div class="container">
        <div class="row no-gutters">

            <!--Logo e kompanise-->
            <div class="col-md-1 col-sm-12">
                <img src="<?php echo $jobItem['companyLogo']; ?>" class="card-img rounded-circle logo" alt="foto">
            </div>

            <!--Te dhenat-->
            <div class="col-md-8 col-sm-12">
                <div class=" card-body">
                    <!--titulli profesionit-->
                    <div class="col-sm-12 card-text"><?php echo $jobItem['title']; ?></div>

                    <!--emri i kompanise-->
                    <div class="col-sm-12 card-text">
                        <small class="text-muted"><?php echo $jobItem['companyName']; ?></small>
                    </div>

                    <!--butonat profesione-->
                    <div class="col-sm-12 card-text mt-2">
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
                <div class="col-sm-12 card-body">

                    <!--location-->
                    <div class="col-sm-12 card-text">
                        <small class="text-muted">
                            <a href="<?php echo $jobItem['location']['href']; ?>" target="_blank"><i class="fa fa-location-arrow" aria-hidden="true"></i> <?php echo $jobItem['location']['name']; ?></a>
                        </small>
                    </div>

                    <!--clock-->
                    <div class="col-sm-12 card-text">
                        <small class="text-muted"><i class="fa fa-clock" aria-hidden="true"></i> <?php echo $jobItem['expireDate']; ?></small>
                    </div>

                    <!--Apliko-->
                    <div class="col-sm-12 card-text mt-2">
                        <a href="single_job.php?id=<?php echo $jobItem['id']; ?>" class="btn btn-success btn-sm">Apliko</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>