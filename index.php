<?php include 'include/header.php';?>
<!-- main start -->
<div class="container">
    <div id="main">
    <?php echo "Hello PHP!"."<br/>"; ?>
    <?php echo "Today is ".date("Y/m/d/H:i:s");?>

    <!-- This is the submit form -->
    <h3>Submit Form</h3>
    <form class="form-horizontal formBorder" method="post" action="submit.php" role="form">
    <div class="form-group">
        <label for="name" class="control-label col-sm-2">Your name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="name" id="name" />
        </div>
    </div>
    <div class="form-group">
        <label for="address" class="control-label col-sm-2">Your address</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="address" id="address" />
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="control-label col-sm-2">Your Email</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="email" id="email" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="gender">Gender</label>
        <div class="col-sm-10">
        <select class=" form-control" name="gender" id="">
            <option value="1">Select...</option>
            <option value="2">Female</option>
            <option value="3">Male</option>
        </select>
        </div>
    </div>
    <button class="btn btn-primary form-control">Submit</button>

    </form>
    </div>
</div>

<!-- main end -->
<?php include 'include/footer.php';?>