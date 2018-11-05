<!DOCTYPE html>
<html>

<head>
    <title>Add New Field Issues</title>
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
    <link href="icon_fonts_assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
                        <form class="" action="index.html" method="post">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="radio">
                                        <label for=""><input class="form-check-input" type="radio" name="radiobtn">Assiatance</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="radio">
                                        <label for=""><input class="form-check-input" type="radio" name="radiobtn">Action Taken</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="radio">

                                        <label for=""><input class="form-check-input" type="radio" name="radiobtn">Vehicle Condition</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="radio">

                                        <label for=""><input class="form-check-input" type="radio" name="radiobtn">Customer Status</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="radio">

                                        <label for=""><input class="form-check-input" type="radio" name="radiobtn">Information</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group ">
                                        <label for="">Status</label>
                                        <select class="form-control" name="">
                                            <option value="">Normal Communication</option>
                                            <option value="">high high priority</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Comments</label>
                                        <textarea class="form-control" name="name" rows="1" cols="30" placeholder="Chack Number"></textarea>
                                    </div>
                                </div>
                        </form>
                        <div class="col-sm-3">
                            <label for=""><b>Upload Broker Photo</b> </label>
                            <form action="index.html" class="dropzone" id="my-awesome-dropzone" style="padding:0px;min-height:0px">
                                <div class="dz-message">
                                    <div>
                                        <h7>Drop files here or click to upload.</h7>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-sm-3">
                            <div class="" style="padding-top:70px">
                                <button type="button" class="btn btn-primary float-right">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            <!--------------------
      View all issues
      -------------------->

            <!--------------------
      END - Controls Above Table
      ------------------          -->
            <!--------------------
      START - Table with actions
      ------------------  -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="element-wrapper">
                        <div class="element-box">
                            <div class="form-header">
                                <h6 class="">File Details</h6>
                            </div>

                            <table class="table table-bordered table-lg table-v2 table-striped">
                                <thead>
                                    <tr>

                                        <th>
                                            Date
                                        </th>
                                        <th>
                                            Employee
                                        </th>
                                        <th>
                                            Statuss
                                        </th>
                                        <th>
                                            Comments
                                        </th>
                                        <th>
                                            Upload
                                        </th>
                                        <th>
                                            Feedback Comments
                                        </th>
                                        <th>
                                            Feedback Upload
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            12/12/2018
                                        </td>
                                        <td>
                                            John Mayers
                                        </td>
                                        <td>
                                            Active
                                        </td>
                                        <td>
                                            Test testtest Test testtest Test testtest Test testtest
                                        </td>
                                        <td>
                                            <a href="#"> <i class="fa fa-eye"></i></a>
                                        </td>
                                        <td>
                                            Test testtest Test testtest Test
                                        </td>
                                        <td class="row-actions">
                                            <a href="#"> <i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            12/12/2018
                                        </td>
                                        <td>
                                            John Mayers
                                        </td>
                                        <td>
                                            Active
                                        </td>
                                        <td>
                                            Test testtest Test testtest Test testtest Test testtest
                                        </td>
                                        <td>
                                            <a href="#"> <i class="fa fa-eye"></i></a>
                                        </td>
                                        <td>
                                            Test testtest Test testtest Test
                                        </td>
                                        <td class="row-actions">
                                            <a href="#"> <i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            12/12/2018
                                        </td>
                                        <td>
                                            John Mayers
                                        </td>
                                        <td>
                                            Active
                                        </td>
                                        <td>
                                            Test testtest Test testtest Test testtest Test testtest
                                        </td>
                                        <td>
                                            <a href="#"> <i class="fa fa-eye"></i></a>
                                        </td>
                                        <td>
                                            Test testtest Test testtest Test
                                        </td>
                                        <td class="row-actions">
                                            <a href="#"> <i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            12/12/2018
                                        </td>
                                        <td>
                                            John Mayers
                                        </td>
                                        <td>
                                            Active
                                        </td>
                                        <td>
                                            Test testtest Test testtest Test testtest Test testtest
                                        </td>
                                        <td>
                                            <a href="#"> <i class="fa fa-eye"></i></a>
                                        </td>
                                        <td>
                                            Test testtest Test testtest Test
                                        </td>
                                        <td class="row-actions">
                                            <a href="#"> <i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            12/12/2018
                                        </td>
                                        <td>
                                            John Mayers
                                        </td>
                                        <td>
                                            Active
                                        </td>
                                        <td>
                                            Test testtest Test testtest Test testtest Test testtest
                                        </td>
                                        <td>
                                            <a href="#"> <i class="fa fa-eye"></i></a>
                                        </td>
                                        <td>
                                            Test testtest Test testtest Test
                                        </td>
                                        <td class="row-actions">
                                            <a href="#"> <i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            12/12/2018
                                        </td>
                                        <td>
                                            John Mayers
                                        </td>
                                        <td>
                                            Active
                                        </td>
                                        <td>
                                            Test testtest Test testtest Test testtest Test testtest
                                        </td>
                                        <td>
                                            <a href="#"> <i class="fa fa-eye"></i></a>
                                        </td>
                                        <td>
                                            Test testtest Test testtest Test
                                        </td>
                                        <td class="row-actions">
                                            <a href="#"> <i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--------------------
      END - Table with actions
      ------------------            -->

        </div>
    </div>
</div>

<!--------------------
      END - Sidebar
      -------------------->
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