<!DOCTYPE html>
<html>

<head>
    <title>Alif Motors Branch</title>
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
    <link rel="stylesheet" href="css/sweet-alert.css">
</head>

<?php include "inc/header.php"; ?>

<!--------------------
          END - Top Bar
          -------------------->
<div class="content-i">
    <div class="content-box">


        <div class="row pt-4">
            <div class="col-sm-12">
                <!--START -Branch List-->
                <div class="element-wrapper">
                    <h6 class="element-header">
                        Branch List
                    </h6>
                    <div class="tasks-header-w">

                        <a class="add-task-btn" data-target="#taskModal" data-toggle="modal" href="#"><i class="os-icon os-icon-ui-22"></i><span>Add Branch</span></a>
                    </div>


                    <div class="element-box-tp">
                        <div class="table-responsive">
                            <table class="table table-padded">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>
                                            Branch ID
                                        </th>
                                        <th>
                                            Address
                                        </th>
                                        <th class="text-center">
                                            Zone
                                        </th>
                                        <th>
                                            Location
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Mobile
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>
                                            <div class="user-with-avatar">
                                                <img alt="" src="img/avatar1.jpg"><span>John Mayers</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="smaller lighter">
                                                I have enabled the software for you, you can try now...
                                            </div>
                                        </td>
                                        <td>
                                            <span>Today</span><span class="smaller lighter">1:52am</span>
                                        </td>
                                        <td class="text-center">
                                            <a class="badge badge-success-inverted" href="">Shopping</a>
                                        </td>
                                        <td class="nowrap">
                                            <span class="status-pill smaller green"></span><span>Active</span>
                                        </td>
                                        <td class="row-actions">
                                            <a href="#"><i class="os-icon os-icon-grid-10"></i></a><a href="#"><i class="os-icon os-icon-ui-44"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>
                                            <div class="user-with-avatar">
                                                <img alt="" src="img/avatar2.jpg"><span>Mike Bishop</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="smaller lighter">
                                                Please approve this request so we can move...
                                            </div>
                                        </td>
                                        <td>
                                            <span>Jan 19th</span><span class="smaller lighter">3:22pm</span>
                                        </td>
                                        <td class="text-center">
                                            <a class="badge badge-danger-inverted" href="">Cafe</a>
                                        </td>
                                        <td class="nowrap">
                                            <span class="status-pill smaller red"></span><span>Closed</span>
                                        </td>
                                        <td class="row-actions">
                                            <a href="#"><i class="os-icon os-icon-grid-10"></i></a><a href="#"><i class="os-icon os-icon-ui-44"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>
                                            <div class="user-with-avatar">
                                                <img alt="" src="img/avatar3.jpg"><span>Terry Crews</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="smaller lighter">
                                                We will need some login credentials to make...
                                            </div>
                                        </td>
                                        <td>
                                            <span>Yesterday</span><span class="smaller lighter">7:45am</span>
                                        </td>
                                        <td class="text-center">
                                            <a class="badge badge-warning-inverted" href="">Restaurants</a>
                                        </td>
                                        <td class="nowrap">
                                            <span class="status-pill smaller yellow"></span><span>Pending</span>
                                        </td>
                                        <td class="row-actions">
                                            <a href="#"><i class="os-icon os-icon-grid-10"></i></a><a href="#"><i class="os-icon os-icon-ui-44"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>
                                            <div class="user-with-avatar">
                                                <img alt="" src="img/avatar1.jpg"><span>Phil Collins</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="smaller lighter">
                                                I have enabled the software for you, you can try now...
                                            </div>
                                        </td>
                                        <td>
                                            <span>Jan 23rd</span><span class="smaller lighter">2:12pm</span>
                                        </td>
                                        <td class="text-center">
                                            <a class="badge badge-primary-inverted" href="">Shopping</a>
                                        </td>
                                        <td class="nowrap">
                                            <span class="status-pill smaller yellow"></span><span>Pending</span>
                                        </td>
                                        <td class="row-actions">
                                            <a href="#"><i class="os-icon os-icon-grid-10"></i></a><a href="#"><i class="os-icon os-icon-ui-44"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>
                                            <div class="user-with-avatar">
                                                <img alt="" src="img/avatar4.jpg"><span>Katy Pilsner</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="smaller lighter">
                                                I have tried this solution but it does not open...
                                            </div>
                                        </td>
                                        <td>
                                            <span>Jan 12th</span><span class="smaller lighter">9:51am</span>
                                        </td>
                                        <td class="text-center">
                                            <a class="badge badge-danger-inverted" href="">Groceries</a>
                                        </td>
                                        <td class="nowrap">
                                            <span class="status-pill smaller green"></span><span>Active</span>
                                        </td>
                                        <td class="row-actions">
                                            <a href="#"><i class="os-icon os-icon-grid-10"></i></a><a href="#"><i class="os-icon os-icon-ui-44"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>
                                            <div class="user-with-avatar">
                                                <img alt="" src="img/avatar2.jpg"><span>Wes Morgan</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="smaller lighter">
                                                I have enabled the software for you, you can try now...
                                            </div>
                                        </td>
                                        <td>
                                            <span>Jan 9th</span><span class="smaller lighter">12:45pm</span>
                                        </td>
                                        <td class="text-center">
                                            <a class="badge badge-primary-inverted" href="">Business</a>
                                        </td>
                                        <td class="nowrap">
                                            <span class="status-pill smaller yellow"></span><span>Pending</span>
                                        </td>
                                        <td class="row-actions">
                                            <a href="#"><i class="os-icon os-icon-grid-10"></i></a><a href="#"><i class="os-icon os-icon-ui-44"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--END - Recent Ticket Comments-->
            </div>
        </div>
    </div>
</div>
<!--Modal - Edit Task-->
<div class="close-taskModal" id="clsTask">
    <div aria-hidden="true" class="modal fade" id="taskModal" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header faded smaller">
                    <div class="modal-title">
                        <span>Add New Branch</span>

                    </div>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> &times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for=""> Branch ID: Auto Assign from system </label>

                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <textarea class="form-control" name="" rows="2">Uttara, Dhaka 1230, Bangladesh</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Zone </label>
                            <div class="attached-media-w">
                                <input class="form-control" placeholder="Enter Zoon " type="text" value="">
                                <a class="attach-media-btn" href="#"><i class="os-icon os-icon-ui-22"></i><span>Add Zoon</span></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Status</label><select class="form-control">
                                        <option value="active">
                                            Active
                                        </option>
                                        <option value="disable">
                                            Disable
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Location</label>
                                    <input class="form-control" placeholder="Enter Location " type="text" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Mobile</label>
                                    <input class="form-control" placeholder="Enter Mobile Number" type="" value="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input class="form-control" placeholder="Enter email " type="email" value="">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer buttons-on-left">

                    <button class="btn  btn-teal btn-alert" data-dismiss="modal" id="save-btn" type="button"> Save changes</button>

                    <button class="btn btn-link" data-dismiss="modal" type="button"> Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--alertpopup start-->
<div class="alert-popup" id="alert">
    <div class="alert-content">
        <div class="succes-animation">
            <div class="icon-success-animate">
                <span class="animateSuccessMini"></span>
                <span class="animateSuccessLong"></span>
                <div class="placeholder"></div>
                <div class="touchup"></div>

            </div>

        </div>
        <div class="message">
            <h1 class="msg-heading">Good Job!</h1>
            <p>
                Branch Details Update Done
            </p>
        </div>

        <div class="btn-ok">
            <button class="btn-close" id="close-btn">
                OK
            </button>
        </div>

    </div>

</div>
<!--alertpopup end-->

<!--END - To Do Application-->


<!--------------------
              START - Color Scheme Toggler
              -------------------->
<div class="floated-colors-btn second-floated-btn">
    <div class="os-toggler-w">
        <div class="os-toggler-i">
            <div class="os-toggler-pill"></div>
        </div>
    </div>
    <span>Dark </span><span>Colors</span>
</div>
<!--------------------
              END - Color Scheme Toggler
              -------------------->
<!--------------------
              START - Demo Customizer
              -------------------->
<div class="floated-customizer-btn third-floated-btn">
    <div class="icon-w">
        <i class="os-icon os-icon-ui-46"></i>
    </div>
    <span>Customizer</span>
</div>
<div class="floated-customizer-panel">
    <div class="fcp-content">
        <div class="close-customizer-btn">
            <i class="os-icon os-icon-x"></i>
        </div>
        <div class="fcp-group">
            <div class="fcp-group-header">
                Menu Settings
            </div>
            <div class="fcp-group-contents">
                <div class="fcp-field">
                    <label for="">Menu Position</label><select class="menu-position-selector">
                        <option value="left">
                            Left
                        </option>
                        <option value="right">
                            Right
                        </option>
                        <option value="top">
                            Top
                        </option>
                    </select>
                </div>
                <div class="fcp-field">
                    <label for="">Menu Style</label><select class="menu-layout-selector">
                        <option value="compact">
                            Compact
                        </option>
                        <option value="full">
                            Full
                        </option>
                        <option value="mini">
                            Mini
                        </option>
                    </select>
                </div>
                <div class="fcp-field with-image-selector-w">
                    <label for="">With Image</label><select class="with-image-selector">
                        <option value="yes">
                            Yes
                        </option>
                        <option value="no">
                            No
                        </option>
                    </select>
                </div>
                <div class="fcp-field">
                    <label for="">Menu Color</label>
                    <div class="fcp-colors menu-color-selector">
                        <div class="color-selector menu-color-selector color-bright selected"></div>
                        <div class="color-selector menu-color-selector color-dark"></div>
                        <div class="color-selector menu-color-selector color-light"></div>
                        <div class="color-selector menu-color-selector color-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fcp-group">
            <div class="fcp-group-header">
                Sub Menu
            </div>
            <div class="fcp-group-contents">
                <div class="fcp-field">
                    <label for="">Sub Menu Style</label><select class="sub-menu-style-selector">
                        <option value="flyout">
                            Flyout
                        </option>
                        <option value="inside">
                            Inside/Click
                        </option>
                        <option value="over">
                            Over
                        </option>
                    </select>
                </div>
                <div class="fcp-field">
                    <label for="">Sub Menu Color</label>
                    <div class="fcp-colors">
                        <div class="color-selector sub-menu-color-selector color-bright selected"></div>
                        <div class="color-selector sub-menu-color-selector color-dark"></div>
                        <div class="color-selector sub-menu-color-selector color-light"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fcp-group">
            <div class="fcp-group-header">
                Other Settings
            </div>
            <div class="fcp-group-contents">
                <div class="fcp-field">
                    <label for="">Full Screen?</label><select class="full-screen-selector">
                        <option value="yes">
                            Yes
                        </option>
                        <option value="no">
                            No
                        </option>
                    </select>
                </div>
                <div class="fcp-field">
                    <label for="">Show Top Bar</label><select class="top-bar-visibility-selector">
                        <option value="yes">
                            Yes
                        </option>
                        <option value="no">
                            No
                        </option>
                    </select>
                </div>
                <div class="fcp-field">
                    <label for="">Above Menu?</label><select class="top-bar-above-menu-selector">
                        <option value="yes">
                            Yes
                        </option>
                        <option value="no">
                            No
                        </option>
                    </select>
                </div>
                <div class="fcp-field">
                    <label for="">Top Bar Color</label>
                    <div class="fcp-colors">
                        <div class="color-selector top-bar-color-selector color-bright selected"></div>
                        <div class="color-selector top-bar-color-selector color-dark"></div>
                        <div class="color-selector top-bar-color-selector color-light"></div>
                        <div class="color-selector top-bar-color-selector color-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------------------
              END - Demo Customizer
              -------------------->
<!--------------------
              START - Chat Popup Box
              -------------------->
<div class="floated-chat-btn">
    <i class="os-icon os-icon-mail-07"></i><span>Demo Chat</span>
</div>
<div class="floated-chat-w">
    <div class="floated-chat-i">
        <div class="chat-close">
            <i class="os-icon os-icon-close"></i>
        </div>
        <div class="chat-head">
            <div class="user-w with-status status-green">
                <div class="user-avatar-w">
                    <div class="user-avatar">
                        <img alt="" src="img/avatar1.jpg">
                    </div>
                </div>
                <div class="user-name">
                    <h6 class="user-title">
                        John Mayers
                    </h6>
                    <div class="user-role">
                        Account Manager
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-messages">
            <div class="message">
                <div class="message-content">
                    Hi, how can I help you?
                </div>
            </div>
            <div class="date-break">
                Mon 10:20am
            </div>
            <div class="message">
                <div class="message-content">
                    Hi, my name is Mike, I will be happy to assist you
                </div>
            </div>
            <div class="message self">
                <div class="message-content">
                    Hi, I tried ordering this product and it keeps showing me error code.
                </div>
            </div>
        </div>
        <div class="chat-controls">
            <input class="message-input" placeholder="Type your message here..." type="text">
            <div class="chat-extra">
                <a href="#"><span class="extra-tooltip">Attach Document</span><i class="os-icon os-icon-documents-07"></i></a><a href="#"><span class="extra-tooltip">Insert Photo</span><i class="os-icon os-icon-others-29"></i></a><a href="#"><span class="extra-tooltip">Upload Video</span><i class="os-icon os-icon-ui-51"></i></a>
            </div>
        </div>
    </div>
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
<script src="js/sweet-alert.js"></script>
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