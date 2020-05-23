<?php
// get countries
$SQL = 'SELECT * FROM countries';
$countries = $conn->query($SQL)->fetch_all(MYSQLI_ASSOC);

// get cities
$SQL = 'SELECT * FROM cities';
$cities = $conn->query($SQL)->fetch_all(MYSQLI_ASSOC);

// get category
$SQL = 'SELECT * FROM job_categories';
$categories = $conn->query($SQL)->fetch_all(MYSQLI_ASSOC);


?>

<!-- Forma Kerkimi i avancuar -->
<div class="col-sm-12 col-md-3 ">
    <form method="GET" action="/" accept-charset="UTF-8">
        <h4 class="text-center" >Kerkim i avancuar</h4>
        <hr>
        <div class="form-group">
            <label for="fjalkyc"><small><b>Fjale kyce ose kodin e punes</b></small></label>
            <input type="text" class="form-control" id="fjalkyc"  name="fjale" value="<?php echo $searchId; ?>">
        </div>
        <div class="form-group">
            <label for="emrikomp"><small><b>Emri i kompanise</b></small></label>
            <input type="text" class="form-control" id="emrikomp"  name="company" value="<?php echo $searchCompany; ?>">
        </div>
        <div class="form-group">
            <label for="country"><small><b>Shteti</b></small></label>
            <select class="form-control select-opt" id="country" name="country">
                <option value="" selected="selected">Zgjidhni shtetin</option>
                <?php foreach ($countries as $country) {?>
                    <option value="<?php echo $country['id']; ?>" <?php echo ($country['id'] == $searchCountry ? 'selected' : ''); ?>><?php echo $country['name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="city"><small><b>Qyteti</b></small></label>
            <select class="form-control select-opt" id="city" name="city">
                <option value="" selected="selected">Zgjidhni qytetin</option>
                <?php foreach ($cities as $city) {?>
                    <option value="<?php echo $city['id']; ?>" <?php echo ($city['id'] == $searchCity ? 'selected' : ''); ?>><?php echo $city['name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="category"><small><b>Kategoria</b></small></label>
            <select class="form-control select-opt" id="category" name="category">
                <option value="" selected="selected">Zgjidhni kategorinë</option>
                <?php foreach ($categories as $category) {?>
                    <option value="<?php echo $category['id']; ?>" <?php echo ($category['id'] == $searchCategory ? 'selected' : ''); ?>><?php echo $category['name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="job_type"><small><b>Lloji i punës</b></small></label>
            <select class="form-control select-opt" id="job_type" name="job_type">
                <option value="" selected="selected">Zgjidhni llojin e punës</option>
                <option value="part" <?php echo ($searchJobType == "part" ? 'selected' : ''); ?>>Kohe e pjesshme</option>
                <option value="full" <?php echo ($searchJobType == "full" ? 'selected' : ''); ?>>Kohe e plote </option>
                <option value="temporary" <?php echo ($searchJobType == "temporary" ? 'selected' : ''); ?>>E perkohshme</option>
                <option value="intership" <?php echo ($searchJobType == "intership" ? 'selected' : ''); ?>>Internship</option>
                <option value="other" <?php echo ($searchJobType == "other" ? 'selected' : ''); ?>>Tjeter</option>
                <option value="consulent" <?php echo ($searchJobType == "consulent" ? 'selected' : ''); ?>>Konsulent</option>
                <option value="fixed-term" <?php echo ($searchJobType == "fixed-term" ? 'selected' : ''); ?>>Kontrate me kohe te caktuar</option>
            </select>
        </div>
        <button type="submit" class="btn btn-outline-success" style="width: 100%">Kerko</button>
    </form>
</div>