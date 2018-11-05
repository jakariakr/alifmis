<!DOCTYPE html>
<html>

<head>
    <title>File Transfer</title>
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
    <link rel="stylesheet" href="css/custom-main.css">
</head>

<!--------------------
        END - Main Menu
        -------------------->
<div class="content-w">
    <!--------------------
          START - Top Bar
          -------------------->
    <?php include "inc/header.php"; ?>
    <!--------------------
      End - Top Bar
  -------------------->

    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-lg-12">

                    <div class="element-box">
                        <form class="" action="index.html" method="post">
                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">ID Number</label>
                                        <input class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Engine Number</label>
                                        <input class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Chassis Number</label>
                                        <input class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group" style="padding-top:20px;">
                                        <button type="button" class="btn btn-primary" style="float:right;">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="element-box">
                        <h6 class="element-header">
                            Coustomer Information
                        </h6>
                        <table class="table table-responsive table-bordered table-striped table-v2">
                            <tbody>
                                <tr>
                                    <td>ID Number</td>
                                    <td>1010</td>
                                    <td>Vehicle Type </td>
                                    <td>CNG</td>
                                    <td>Branch</td>
                                    <td>gazipur</td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>Jakaria Khondaker </td>
                                    <td>Registration Number</td>
                                    <td>Dhaka Metro Tha 24.2597</td>
                                    <td>Delivery Date</td>
                                    <td>12 Aprial 2018</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>1911886197</td>
                                    <td>Engine Number </td>
                                    <td>5454568454574</td>
                                    <td>Closing Date</td>
                                    <td>12 Aprial 2020</td>
                                </tr>
                                <tr>
                                    <td>Fathers name</td>
                                    <td>Ismail khondaker</td>
                                    <td>Chassis Number</td>
                                    <td>4541454145874</td>
                                    <td>Number of installment </td>
                                    <td>24</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>House 8 road no 9 block C section 6 mirpur</td>
                                    <td>Model </td>
                                    <td>2018</td>
                                    <td>Monthly installment </td>
                                    <td>14000</td>
                                </tr>
                                <tr>
                                    <td>Recovery Officer</td>
                                    <td>Hasan Mahmud</td>
                                    <td>Cheque Status </td>
                                    <td>Yes</td>
                                    <td>Staus</td>
                                    <td class="text-center">
                                        <a class="badge badge-success-inverted">Active</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="element-box">
                        <form class="" action="index.php" method="post">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="cm-search">
                                                <input type="text" name="q" placeholder="Search Customer" style="width:auto">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="float-right">
                                                <button class="btn btn-grey" type="button" name="button" style="    border-radius: 30px;" data-target=".bd-add-customer-modal-lg" data-toggle="modal">
                                                    <i class="os-icon os-icon-ui-22"></i><span>Add</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Total Selling Price</label>
                                        <input class="form-control" type="number" name="" value="">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Down Payment</label>
                                        <input class="form-control" type="number" name="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="cm-search">
                                                <input type="text" name="q" placeholder="Search Broker" style="width:auto">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="float-right">
                                                <button class="btn btn-grey" type="button" name="button" style=" border-radius: 30px;" data-target=".bd-add-broker-modal-lg" data-toggle="modal">
                                                    <i class="os-icon os-icon-ui-22"></i><span>Add</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Number of Installment</label>
                                        <input class="form-control" type="number" name="" value="">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group" style="padding-top:20px;">
                                        <button type="button" class="btn btn-primary" style="float:right;">
                                            Transfer File
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            
        </div>
        <!-----------
    Start Modal of
     add customer
      -------------->
        <div aria-hidden="true" aria-labelledby="myLargeModalLabel" class="modal fade bd-add-customer-modal-lg" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Add New Customer
                        </h5>
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> &times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <fieldset class="form-group">
                                <legend><span>Customer Details</span></legend>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Customer Type </label>
                                            <select class="form-control">
                                                <option>
                                                    Select Type
                                                </option>
                                                <option>
                                                    General
                                                </option>
                                                <option>
                                                    Silver
                                                </option>
                                                <option>
                                                    Gold
                                                </option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Customer Status </label>
                                            <select class="form-control">
                                                <option>
                                                    Select Status
                                                </option>
                                                <option>
                                                    Active
                                                </option>
                                                <option>
                                                    Disable
                                                </option>
                                                <option>
                                                    Close
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Name</label>
                                            <input class="form-control" placeholder="Name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Old Fole number</label>
                                            <input class="form-control" placeholder="Old Fole number" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Father Name</label>
                                            <input class="form-control" placeholder="Father Name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Mother Name</label>
                                            <input class="form-control" placeholder="Mother Name" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> ID Type </label>
                                            <select class="form-control">
                                                <option>
                                                    Select Status
                                                </option>
                                                <option>
                                                    NID
                                                </option>
                                                <option>
                                                    Driving License
                                                </option>
                                                <option>
                                                    Passport
                                                </option>
                                                <option>
                                                    Birth Certificate
                                                </option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">ID Number</label>
                                            <input class="form-control" placeholder="ID Number" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Apouse Name</label>
                                            <input class="form-control" placeholder="Apouse Name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Religion</label>
                                            <input class="form-control" placeholder="Religion" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Marital Status</label>
                                            <select class="form-control">
                                                <option>
                                                    Select Status
                                                </option>
                                                <option>
                                                    Single
                                                </option>
                                                <option>
                                                    Married
                                                </option>
                                                <option>
                                                    divorced
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Date of Birth</label>
                                            <input class="form-control" placeholder="Date of Birth" type="text">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Register Mobile No</label>
                                            <input class="form-control" placeholder="Register Mobile No" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Mobile</label>
                                            <input class="form-control" placeholder="Mobile" type="text">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Occupation</label>
                                            <input class="form-control" placeholder="Occupation" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input class="form-control" placeholder="Email" type="text">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Nominee name</label>
                                            <input class="form-control" placeholder="Nominee name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Relation</label>
                                            <input class="form-control" placeholder="Relation" type="text">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Nominee ID Type</label>
                                            <input class="form-control" placeholder="Nominee ID Type" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Nominee ID</label>
                                            <input class="form-control" placeholder="Nominee ID" type="text">
                                        </div>
                                    </div>

                                </div>

                                <legend><span>Customer Address</span></legend>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Present Address</label>
                                            <input class="form-control" placeholder="Present Address" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">P.O</label>
                                            <input class="form-control" placeholder="P.O" type="text">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">P.S</label>
                                            <input class="form-control" placeholder="P.S" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">District</label>
                                            <input class="form-control" placeholder="District" type="text">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Present address is same to permanent address</label>
                                            <input class="" type="radio">Yes
                                            <input class="" type="radio">No
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Permanent Address</label>
                                            <input class="form-control" placeholder="Permanent Address" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">P.O</label>
                                            <input class="form-control" placeholder="P.O" type="text">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">P.S</label>
                                            <input class="form-control" placeholder="P.S" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">District</label>
                                            <input class="form-control" placeholder="District" type="text">
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

        <!--End of add customer modal-->

        <!-----------
            Start Modal for
             add Broker
              -------------->
        <div aria-hidden="true" aria-labelledby="myLargeModalLabel" class="modal fade bd-add-broker-modal-lg" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Add New Broker
                        </h5>
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> &times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <fieldset class="form-group">
                                <legend><span>Broker Details</span></legend>



                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Broker Name</label>
                                            <input class="form-control" placeholder="Name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Broker Number</label>
                                            <input class="form-control" placeholder=" Number" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Father Name</label>
                                            <input class="form-control" placeholder="Father Name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Father Number</label>
                                            <input class="form-control" placeholder="Father Number" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Mother Name</label>
                                            <input class="form-control" placeholder="Mother Name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Present Address</label>
                                            <input class="form-control" placeholder="Present Address" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-buttons-w">
                                    <button class="btn btn-primary" type="submit"> Submit</button>
                                </div>
                        </form>
                    </div>
                    </form>
                </div>
            </div>
        </div>
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
