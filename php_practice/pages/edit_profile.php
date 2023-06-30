<div class="wrapper mx-5">
    <div class="col-md-12">
        <div class="box box-info">
            <form name="updatepage" method="post" action="actions/update_profile.php" class="has-validation-callback">
                <?php
                    $id=$_SESSION['id'];
                    $username= $row['username'];
                    $email= $row['email'];
                    $contact= $row['contact'];
                    
                    
                    if($count>0){ ?>

                <input type="hidden" name="id" value="<?php echo $id?>">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-2">&nbsp;</div>
                        <div class="col-md-8">
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example1">Name</label>
                                        <input type="text" id="form3Example1" class="form-control"
                                            value="<?php echo $username; ?>" name="username" />

                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Email address</label>
                                <input type="email" id="form3Example3" class="form-control" value="<?php echo $email?>"
                                    name="email" />

                            </div>
                            <!-- Phone input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example4">Phone</label>
                                <input type="tel" id="form4Example4" class="form-control" value="<?php echo $contact?>"
                                    name="contact" />

                            </div>
                            <!-- Submit button -->
                            <!-- <input type="submit" name="edit"> -->
                            <input type="submit" class="btn btn-primary btn-block mb-4" name="edit" value="Edit">
                        </div>
                    </div>
                </div>
                <?php }
                    else    {
                        echo "<h1 class='text-center m-5'>User is Not Found</h1>";
                    }
                ?>
            </form>
        </div>
    </div>
</div>