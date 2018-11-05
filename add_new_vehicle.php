<!DOCTYPE html>
<html>

<head>
    <title>Add New Vehicle</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="css/main.css?version=4.4.0" rel="stylesheet">
</head>


<?php include "inc/header.php"; ?>


<!--------------------
          END - Top Bar
          -------------------->
<!--------------------
          START - Breadcrumbs
          -------------------->

<!--------------------
          END - Breadcrumbs
          -------------------->
<div class="content-i">
    <div class="content-box">
       <div class="row">
            <div class="col-lg-6">
                <div class="element-wrapper">

                    <div class="element-box">
                        <form>

                            <fieldset class="form-group">
                                <legend><span>Vehicle Details</span></legend>



                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Vehicle Type </label><select class="form-control">
                                                <option>
                                                    Select Type
                                                </option>
                                                <option>
                                                    2 Wheeler
                                                </option>
                                                <option>
                                                    3 Wheeler
                                                </option>
                                                <option>
                                                    4 Wheeler
                                                </option>
                                                <option>
                                                    6 Wheeler
                                                </option>
                                                <option>
                                                    8 Wheeler
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Vehicle Brand </label><select class="form-control">
                                                <option>
                                                    Select Brand
                                                </option>
                                                <option>
                                                    Bajaj
                                                </option>
                                                <option>
                                                    Runner
                                                </option>
                                            
                                                <option>
                                                    TVS
                                                </option>
                                                <option>
                                                    Hero
                                                </option>
                                                <option>
                                                    TATA
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Fuel Used Type</label><select class="form-control">
                                                <option>
                                                    Select Fuel Type
                                                </option>
                                                <option>
                                                    CNG
                                                </option>
                                                <option>
                                                    LPG
                                                </option>
                                                <option>
                                                    Petrol
                                                </option>
                                                <option>
                                                    Diesel
                                                </option>
                                                <option>
                                                    Octane
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Vehicle CC</label><input class="form-control" placeholder="Vehicle CC" type="text">
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Year of Manufacture</label><input class="form-control" placeholder="Year of Manufacture" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Impoter</label>
                                            <select class="form-control" name="">
                                              <option value="">Select Impoter</option>
                                              <option value="">Modu</option>
                                              <option value="">Modu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Model Number</label><input class="form-control" placeholder="Model Number" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Made In</label><input class="form-control" placeholder="Made In" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Unladen weight</label><input class="form-control" placeholder="Unladen weight" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Weight capacity</label><input class="form-control" placeholder="Weight capacity" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-buttons-w">
                                    <button class="btn btn-primary" type="submit"> Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="element-wrapper">
                    <div class="element-box">
                        <form>
                            <fieldset class="form-group">
                                <legend><span>Vehicle Details</span></legend>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Colour</label><input class="form-control" placeholder="Enter Colour" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Size of Tyres</label><input class="form-control" placeholder="Enter Size of Tyres" type="text">
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Number of Cylinder</label><input class="form-control" placeholder="Enter Number of Cylinder" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Wheel Base </label><input class="form-control" placeholder="Enter Wheel Base" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Horsepower</label><input class="form-control" placeholder="Enter Horsepower" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Purchase Price</label><input class="form-control" placeholder="Enter Purchase Price" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Selling Price</label><input class="form-control" placeholder="Enter Selling Price" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Status</label><select class="form-control">
                                                <option>
                                                    Select Status
                                                </option>
                                                <option>
                                                    In Stock
                                                </option>
                                                <option>
                                                    Sold
                                                </option>
                                                   <option>
                                                    Hold
                                                </option>
                                                   <option>
                                                    Seize
                                                </option>
                                                   <option>
                                                    Resell
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Number of tyres</label><input class="form-control" placeholder="Number of tyres" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Others</label><input class="form-control" placeholder="Enter Others" type="text">
                                        </div>
                                    </div>

                                </div>


                                <div class="form-buttons-w">
                                    <button class="btn btn-primary" type="submit"> Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="element-box">
            <fieldset class="form-group">
                <legend><span>Engine Details</span></legend>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped order-list" id="myTable">
                        <thead>
                            <tr>
                                <td>Engine No</td>
                                <td>Chassis No</td>
                                <td>Branch</td>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <input class="form-control" placeholder="Enter Engine No" type="text" name="degree"></td>
                                <td><input class="form-control" placeholder="Enter Chassis No" type="text" name="major"> </td>
                                <td>
                                    <select class="form-control">
                                       <option>Branch</option>
                                       <option>Gazipur</option>
                                       <option>Dhaka</option>
                                    </select>
                                </td>

                                <td><button class="close ibtnDel" type="button"><span  type="button"> ×</span></button></td>
                            </tr>
                        </tbody>
                </div>
                </table>
                <div class="form-buttons-w">
                    <input type="button" class="btn btn-primary " id="addvehiclerow" value="Add Row" />
                </div>
            </fieldset>
        </div>


        <!--------------------
              END - Chat Popup Box
              -------------------->
    </div>
</div>
</div>
</div>
<div class="display-type"></div>
</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="bower_components/moment/moment.js"></script>
<script src="bower_components/chart.js/dist/Chart.min.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<script src="bower_components/dropzone/dist/dropzone.js"></script>
<script src="bower_components/editable-table/mindmup-editabletable.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="bower_components/tether/dist/js/tether.min.js"></script>
<script src="bower_components/slick-carousel/slick/slick.min.js"></script>
<script src="bower_components/bootstrap/js/dist/util.js"></script>
<script src="bower_components/bootstrap/js/dist/alert.js"></script>
<script src="bower_components/bootstrap/js/dist/button.js"></script>
<script src="bower_components/bootstrap/js/dist/carousel.js"></script>
<script src="bower_components/bootstrap/js/dist/collapse.js"></script>
<script src="bower_components/bootstrap/js/dist/dropdown.js"></script>
<script src="bower_components/bootstrap/js/dist/modal.js"></script>
<script src="bower_components/bootstrap/js/dist/tab.js"></script>
<script src="bower_components/bootstrap/js/dist/tooltip.js"></script>
<script src="bower_components/bootstrap/js/dist/popover.js"></script>
<script src="js/demo_customizer.js?version=4.4.0"></script>
<script src="js/main.js?version=4.4.0"></script>
<script src="js/addRow.js"></script>
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-XXXXXXX-9', 'auto');
    ga('send', 'pageview');
</script>
</body>

</html>