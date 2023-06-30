<?php
$country_query = "SELECT * from country";
$country_result = mysqli_query($conn, $country_query);

?>
<div class="row bg-white row-one">
    <div class="container col-lg-10 free-trip main-content">
        <div class="wrapper mx-5">
            <div class="col-md-12">
                <div class="box box-info">
                    <form name="addpage" method="post" action="index.php?view=add_city_page"
                        class="has-validation-callback">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-2">&nbsp;</div>
                                <div class="col-md-8">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr class="danger">
                                                <th colspan="2" class="text-center">Add City</th>
                                            </tr>
                                            <tr>
                                                <th>Country Select</th>
                                                <td>

                                                    <select class="form-select" aria-label="Default select example"
                                                        name="country" id="country">


                                                        <option value="">Select Country</option>
                                                        <?php
                                                             while($row = mysqli_fetch_array($country_result)){
                                                        ?>
                                                        <option value="<?php echo $row['id'];?>">
                                                            <?php echo $row['country_name'];?></option>
                                                        <?php
                                                            }?>
                                                    </select>


                                                </td>
                                            </tr>
                                            <tr>
                                                <th>State Select</th>
                                                <td>

                                                    <select class="form-select" aria-label="Default select example"
                                                        name="state_list" id="state">


                                                        <option value="">Select State</option>

                                                    </select>


                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Add City</th>
                                                <td>
                                                    <input type="text" name="city_name" class="form-control">

                                                </td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>

                                                    <!-- <a href="./actions/add_state_page.php" type="button" value="Add" name="submit" id="insert" class="btn btn-success">Add</a> -->
                                                    <input type="submit" class="btn btn-success" value="Add"
                                                        name="submit" id="insert">
                                                    <a href="index.php?view=read_city" class="btn btn-danger">Cancel</a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>