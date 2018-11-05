<!DOCTYPE html>
<html>

<head>
    <title>Bulk Assign Recobery Officer</title>
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
    <link href="css/custom-main.css" rel="stylesheet">
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
                                        <label for=""> Status</label><select class="form-control">
                                            <option>
                                                All
                                            </option>
                                            <option>
                                                Assign
                                            </option>
                                            <option>
                                                Unassigned
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for=""> Officer</label><select class="form-control">
                                            <option>
                                                All
                                            </option>
                                            <option>
                                                Jakaria
                                            </option>
                                            <option>
                                                sajoy roy
                                            </option>
                                            <option>
                                                Salauddin
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="">
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
                    <div class="element-wrapper">
                        <div class="element-box">
                            <div class="float-right">
                                <button type="button" data-target="#updateStatus" data-toggle="modal" class="btn cm-btn">Update Status</button>

                            </div>
                            <div class="form-header">
                                <h6 class="">File Details</h6>
                            </div>

                            <table class="table table-bordered table-lg table-v2 table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <input class="form-control" type="checkbox">
                                        </th>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Branch
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Officer
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>
                                            1001
                                        </td>
                                        <td>
                                            John Mayers
                                        </td>
                                        <td>
                                            Hajigong
                                        </td>
                                        <td class="text-center">
                                            <a class="badge badge-success-inverted">Active</a>
                                        </td>
                                        <td class="text-center">
                                            Jakaria
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>
                                            2001
                                        </td>
                                        <td>
                                            Mike Astone
                                        </td>
                                        <td>
                                            Gazipour
                                        </td>
                                        <td class="text-center">
                                            <a class="badge badge-success-inverted">Assign</a>
                                        </td>
                                        <td class="text-center">
                                            sajoy roy
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>
                                            554
                                        </td>
                                        <td>
                                            Kira Knight
                                        </td>
                                        <td>
                                            Dhaka
                                        </td>
                                        <td class="text-center">
                                            <a class="badge badge-success-inverted">Assign</a>
                                        </td>
                                        <td class="text-center">
                                            Salauddin
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>
                                            2241
                                        </td>
                                        <td>
                                            Jessica Bloom
                                        </td>
                                        <td>
                                            Maymanshing
                                        </td>
                                        <td class="text-center">
                                            <a class="badge badge-danger-inverted">Unassigned</a>
                                        </td>

                                        <td class="text-center">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>
                                            665
                                        </td>
                                        <td>
                                            Gary Lineker
                                        </td>
                                        <td>
                                            valoka
                                        </td>
                                        <td class="text-center">
                                            <a class="badge badge-success-inverted">Assign</a>
                                        </td>

                                        <td class="text-center">
                                            Jubayer
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--START- To Do Application-->


<div class="close-taskModal" id="clsTask">
    <div aria-hidden="true" class="modal fade" id="updateStatus" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header faded smaller">
                    <div class="modal-title">
                        <span>Update Status</span>
                    </div>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> &times;</span></button>
                </div>
                <div class="element-box">
                    <form>
                        <div class="cm-form-wrapper">
                            <label class="cm-form-label" for="Categoryselect">
                                <div class="cm-form-label-text">
                                    Select Officer
                                </div>
                            </label>
                            <div class="cm-form-element">
                                <select class="form-control cm-input" id="Categoryselect">
                                    <option>Select Officer</option>
                                    <option>Hasan</option>
                                    <option>sajoy roy</option>
                                    <option>Salauddin</option>
                                    <option>Jubayer</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--END - To Do Application-->
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