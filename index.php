<?php include 'include/header.php';?>
<!-- main start -->
<div class="container">
    <div id="main">
    <?php echo "Hello PHP!"."<br/>"; ?> 
    <h3>Submit Form</h3>
    <form class="form-horizontal formBorder" action="submit.php" role="form">
    <div class="form-group">
        <label for="" class="control-label col-sm-2">Your name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="" id="" />  
        </div>  
    </div>
    <div class="form-group">
        <label for="" class="control-label col-sm-2">Your address</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="" id="" />
        </div>
    </div>
    <button class="btn btn-primary form-control">Submit</button>

    </form>
    </div>
</div>

<!-- main end -->
<?php include 'include/footer.php';?>