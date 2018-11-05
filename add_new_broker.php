<!DOCTYPE html>
<html>

<head>
    <title>Add New Broker</title>
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
        <legend><span>Add New Broker</span></legend>

        <div class="element-wrapper">
            <div class="element-box">
                <div class="row">
                    <div class="col-lg-6">
                        <form>
                            <fieldset class="form-group">

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

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Permanent Address</label>
                                            <input class="form-control" placeholder="Permanent Address" type="text">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                         </div>
                   </form>
                   <div class="col-sm-6">
                        <div class="element-Box">
                            <label for=""><h5>Upload Broker Photo</h5></label>

                            <form action="index.html" class="dropzone" id="my-awesome-dropzone" style="height: 90px; ">
                                <div class="dz-message" style=" ">
                                    <div>
                                        <h7>Drop files here or click to upload.</h7>
                                        <div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded)</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="element-Box">
                            <label for=""><h6> Upload Broker NID,Passport and other documents</h6></label>

                            <form action="index.html" class="dropzone" id="my-awesome-dropzone" style=" height: 90px;">
                                <div class="dz-message" style="">
                                    <div>
                                        <h7>Drop files here or click to upload.</h7>
                                        <div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded)</div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        </form>
                    </div>

                </div>
                <div class="col-lg-12">
                    <div class="form-buttons-w">
                        <button class="btn btn-primary" type="submit"> Submit</button>
                    </div>
                </div>
            </div>
        </div>

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
