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

                                    <div class="form-group">
                                        <label for="">Date Range Picker</label><input class="multi-daterange form-control" type="text" value="03/31/2017 - 04/06/2018">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">ID Number</label>
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
                                            ID Number
                                        </th>
                                        <th>
                                            Comments
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Attach
                                        </th>
                                        <th>
                                            Feedback Comments
                                        </th>
                                        <th>
                                            Attach
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            12/12/2018
                                        </td>
                                        <td>
                                            John Mayers
                                        </td>
                                        <td>
                                            fdef ffrtr fdfdfdfdf rfdef
                                        </td>
                                        <td class="text-right">
                                            Active
                                        </td>
                                        <td>
                                            Organic
                                        </td>
                                        <td class="text-center">
                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                        </td>
                                        <td class="row-actions">
                                            <a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                        </td>
                                        <td>
                                            Organic
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            2
                                        </td>
                                        <td>
                                            Mike Astone
                                        </td>
                                        <td>

                                        </td>
                                        <td class="text-right">
                                            $154
                                        </td>
                                        <td>
                                            Organic
                                        </td>
                                        <td class="text-center">
                                            <div class="status-pill red" data-title="Cancelled" data-toggle="tooltip"></div>
                                        </td>
                                        <td class="row-actions">
                                            <a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                        </td>
                                        <td>
                                            Organic
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>
                                            Kira Knight
                                        </td>
                                        <td>
                                            <img alt="" src="img/flags-icons/us.png" width="25px">
                                        </td>
                                        <td class="text-right">
                                            $23
                                        </td>
                                        <td>
                                            Adwords
                                        </td>
                                        <td class="text-center">
                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                        </td>
                                        <td class="row-actions">
                                            <a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                        </td>
                                        <td>
                                            Organic
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>
                                            Jessica Bloom
                                        </td>
                                        <td>
                                            <img alt="" src="img/flags-icons/ca.png" width="25px">
                                        </td>
                                        <td class="text-right">
                                            $112
                                        </td>
                                        <td>
                                            Organic
                                        </td>

                                        <td class="text-center">
                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                        </td>
                                        <td class="row-actions">
                                            <a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                        </td>
                                        <td>
                                            Organic
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>
                                            Gary Lineker
                                        </td>
                                        <td>
                                            <img alt="" src="img/flags-icons/ca.png" width="25px">
                                        </td>
                                        <td class="text-right">
                                            $64
                                        </td>
                                        <td>
                                            Organic
                                        </td>

                                        <td class="text-center">
                                            <div class="status-pill yellow" data-title="Pending" data-toggle="tooltip"></div>
                                        </td>
                                        <td class="row-actions">
                                            <a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                        </td>
                                        <td>
                                            Organic
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
            <!--------------------
      START - Controls below table
      ------------------  -->
            
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