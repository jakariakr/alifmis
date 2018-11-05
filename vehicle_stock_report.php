<!DOCTYPE html>
<html>

<head>
    <title>Vehicle Stock Report</title>
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
                        <form class="" action="index.php" method="post">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for=""> Select Branch Name</label><select class="form-control">
                                            <option>
                                                All
                                            </option>
                                            <option>
                                                Gazipur
                                            </option>
                                            <option>
                                                Hajigong
                                            </option>
                                        </select>
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
            <!--------------------
      View all issues
      -------------------->

            <!--------------------
      END - Controls Above Table
      ------------------          -->
            <!--------------------
      START - Table with actions
      ------------------  -->



            <div class="col-lg-12">
                <div class="element-wrapper">
                    <h6 class="element-header">Vehicle Stock Report</h6>

                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-lg table-v2 table-striped">
                    <thead>
                        <tr>
                            <th>
                                Vehicle Type
                            </th>
                            <th>
                                Gazipur
                            </th>
                            <th>
                                Hagijong
                            </th>
                            <th>
                                Goripour
                            </th>
                            <th>
                                Uttara
                            </th>
                            <th>
                                Maymanshing
                            </th>
                            <th>
                                Valuka
                            </th>
                            <th>
                                Total
                            </th>


                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                CNG
                            </td>
                            <td>
                                55812
                            </td>
                            <td>
                                45645
                            </td>
                            <td class="text-right">
                                5552
                            </td>
                            <td>
                                4545
                            </td>
                            <td>
                                6565
                            </td>
                            <td>
                                5458
                            </td>
                            <td>
                                55577
                            </td>

                        </tr>
                        <tr>
                            <td>
                                Disell
                            </td>
                            <td>
                                55812
                            </td>
                            <td>
                                45645
                            </td>
                            <td class="text-right">
                                5552
                            </td>
                            <td>
                                4545
                            </td>
                            <td>
                                6565
                            </td>
                            <td>
                                5458
                            </td>
                            <td>
                                55577
                            </td>

                        </tr>
                        <tr>
                            <td>
                                Cargo Maxima
                            </td>
                            <td>
                                55812
                            </td>
                            <td>
                                45645
                            </td>
                            <td class="text-right">
                                5552
                            </td>
                            <td>
                                4545
                            </td>
                            <td>
                                6565
                            </td>
                            <td>
                                5458
                            </td>
                            <td>
                                55577
                            </td>

                        </tr>
                        <tr>
                            <td>
                                Kute
                            </td>
                            <td>
                                55812
                            </td>
                            <td>
                                45645
                            </td>
                            <td class="text-right">
                                5552
                            </td>
                            <td>
                                4545
                            </td>
                            <td>
                                6565
                            </td>
                            <td>
                                5458
                            </td>
                            <td>
                                55577
                            </td>

                        </tr>
                        <tr>
                            <td>
                                Motor
                            </td>
                            <td>
                                55812
                            </td>
                            <td>
                                45645
                            </td>
                            <td class="text-right">
                                5552
                            </td>
                            <td>
                                4545
                            </td>
                            <td>
                                6565
                            </td>
                            <td>
                                5458
                            </td>
                            <td>
                                55577
                            </td>

                        </tr>
                        <tr>
                            <td>
                                Honda
                            </td>
                            <td>
                                55812
                            </td>
                            <td>
                                45645
                            </td>
                            <td class="text-right">
                                5552
                            </td>
                            <td>
                                4545
                            </td>
                            <td>
                                6565
                            </td>
                            <td>
                                5458
                            </td>
                            <td>
                                55577
                            </td>

                        </tr>

                        </tr>
                    </tbody>
                </table>
            </div>
            <!--------------------
      END - Table with actions
      ------------------            -->
            <!--------------------
      START - Controls below table
      ------------------  -->
            <div class="controls-below-table">
                <div class="table-records-info">
                    Showing records 1 - 5
                </div>
                <div class="table-records-pages">
                    <ul>
                        <li>
                            <a href="#">Previous</a>
                        </li>
                        <li>
                            <a class="current" href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--------------------
      END - Controls below table
      -------------------->
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
