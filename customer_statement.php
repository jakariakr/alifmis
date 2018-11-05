<!DOCTYPE html>
<html>

<head>
    <title>Customer Statement </title>
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
                                        <label for="">ID Number</label>
                                        <input class="form-control" type="number" name="" value="">
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
                    <div class="element-wrapper">
                         <div class="element-box">
                               <div class="float-right">
                                  <button type="button" data-target="#" data-toggle=""  class="btn cm-btn">Download CSV</button>
                                  <button type="button" data-target="#" data-toggle=""  class="btn cm-btn">Print</button>
                                  <button type="button" data-target="#UpdateInfo" data-toggle="modal" class="btn cm-btn">Update Info</button>
                                   <button type="button" data-target="#viewModal" data-toggle="modal"  class="btn cm-btn">Add Other Charge</button>
                                   <button type="button" data-target="#AddDiscount" data-toggle="modal" class="btn cm-btn">Add Discount</button>
                                 </div>
                        <div class="form-header">
                                 <h6 class="">Transction Details</h6>
                                </div>
                        
                        <table class="table table-bordered table-v2 table-striped ">
                            <thead>
                                <tr>
                                    <td>Date</td>
                                    <td>Details </td>
                                    <td>Debit</td>
                                    <td>Credit</td>
                                    <td>Balance</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1-12-2018</td>
                                    <td>The standard Lorem Ipsum passage, 1500s </td>
                                    <td>380000</td>
                                    <td></td>
                                    <td>380000</td>
                                </tr>
                                <tr>
                                    <td>1-12-2018</td>
                                    <td>The standard Lorem Ipsum passage, 1500s </td>
                                    <td>380000</td>
                                    <td></td>
                                    <td>380000</td>
                                </tr>
                                <tr>
                                    <td>1-12-2018</td>
                                    <td>The standard Lorem Ipsum passage, 1500s </td>
                                    <td>380000</td>
                                    <td></td>
                                    <td>380000</td>
                                </tr>
                                <tr>
                                    <td>1-12-2018</td>
                                    <td>The standard Lorem Ipsum passage, 1500s </td>
                                    <td></td>
                                    <td>200000</td>
                                    <td>380000</td>
                                </tr>
                                <tr>
                                    <td>1-12-2018</td>
                                    <td>The standard Lorem Ipsum passage, 1500s </td>
                                    <td></td>
                                    <td>200000</td>
                                    <td>380000</td>
                                </tr>
                                <tr>
                                    <td>1-12-2018</td>
                                    <td>The standard Lorem Ipsum passage, 1500s </td>
                                    <td></td>
                                    <td>200000</td>
                                    <td>380000</td>
                                </tr>
                                <tr>
                                    <td>1-12-2018</td>
                                    <td>The standard Lorem Ipsum passage, 1500s </td>
                                    <td></td>
                                    <td>200000</td>
                                    <td>380000</td>
                                </tr>
                                <tr>
                                    <td>1-12-2018</td>
                                    <td>The standard Lorem Ipsum passage, 1500s </td>
                                    <td></td>
                                    <td>200000</td>
                                    <td>380000</td>
                                </tr>
                                <tr>
                                    <td>1-12-2018</td>
                                    <td>The standard Lorem Ipsum passage, 1500s </td>
                                    <td></td>
                                    <td>200000</td>
                                    <td>380000</td>
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
                      <div aria-hidden="true" class="modal fade" id="viewModal" role="dialog" tabindex="-1">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header faded smaller">
                                    <div class="modal-title">
                                        <span>Add Other Charge</span>
                                    </div>
                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> &times;</span></button>
                                </div>
                                <div class="element-box">
                                 <form>
                                 <div class="cm-form-wrapper">
                                    <label class="cm-form-label" for="Categoryselect">
                                      <div class="cm-form-label-text">
                                        Category
                                      </div>
                                   </label>
                                   <div class="cm-form-element" >
                                     <select class="form-control cm-input" id="Categoryselect">
                                       <option>Select Other Charge</option>
                                       <option>select & Search</option>
                                       <option>select & Search</option>
                                     </select>
                                   </div>
                                 </div>
                                     <div class="cm-form-wrapper">
                                    <label class="cm-form-label" for="totalAmount">
                                      <div class="cm-form-label-text">
                                        Total Amount
                                      </div>
                                   </label>
                                   <div class="cm-form-element">
                                        <input type="text" class="cm-input cm-input-xlarge form-control" id="totalAmount" placeholder="0.00">
                                   </div>
                                 </div>
                                 <div class="cm-form-wrapper">
                                    <label class="cm-form-label" for="">
                                      <div class="cm-form-label-text">
                                        Notes
                                      </div>
                                   </label>
                                   <div class="cm-form-element" >
                                    <textarea class="cm-textarea cm-textarea-xlarge form-control" ></textarea>
                                   </div>
                                 </div>
                                   <button type="submit" class="btn btn-primary">Save</button>
                                 </form>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
                   <div class="close-taskModal" id="clsTask">
                      <div aria-hidden="true" class="modal fade" id="AddDiscount" role="dialog" tabindex="-1">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header faded smaller">
                                    <div class="modal-title">
                                        <span>Add Discount</span>
                                    </div>
                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> &times;</span></button>
                                </div>
                                <div class="element-box">
                                 <form>
                                     <div class="cm-form-wrapper">
                                    <label class="cm-form-label" for="totalAmount">
                                      <div class="cm-form-label-text">
                                        Total Amount
                                      </div>
                                   </label>
                                   <div class="cm-form-element">
                                        <input type="text" class="cm-input cm-input-xlarge form-control" id="totalAmount" placeholder="0.00">
                                   </div>
                                 </div>
                                 <div class="cm-form-wrapper">
                                    <label class="cm-form-label" for="">
                                      <div class="cm-form-label-text">
                                        Notes
                                      </div>
                                   </label>
                                   <div class="cm-form-element" >
                                    <textarea class="cm-textarea cm-textarea-xlarge form-control" ></textarea>
                                   </div>
                                 </div>
                                   <button type="submit" class="btn btn-primary">Save</button>
                                 </form>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="close-taskModal" id="clsTask">
                      <div aria-hidden="true" class="modal fade" id="UpdateInfo" role="dialog" tabindex="-1">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header faded smaller">
                                    <div class="modal-title">
                                        <span>Update Info</span>
                                    </div>
                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> &times;</span></button>
                                </div>
                                <div class="element-box">
                                 <form>
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
                                         <label for="">Branch </label>
                                    <div class="cm-form-element" >
                                     <select class="form-control cm-input" id="Categoryselect">
                                       <option>Select Branch</option>
                                       <option>hajigong</option>
                                       <option>Dhaka</option>
                                       <option>uttara</option>
                                       <option>maymanshing</option>
                                     </select>
                                   </div>
                                      </div>
                                    </div>
                                 </div>
                                   <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           <label for="">Registration Number </label>
                                           <input class="form-control" placeholder="Enter Importer Name " type="text" value="Dhaka Metro Tha 24.2597">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                         <label for="">Challan No </label>
                                        <div class="attached-media-w">
                                         <input class="form-control" placeholder="Enter Phone " type="text" value="122039">
                                        </div>
                                      </div>
                                    </div>
                                 </div>
                                   <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           <label for="">Engine Number </label>
                                           <input class="form-control" placeholder="Enter Importer Name " type="text" value="T4G568454574">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                         <label for="">Chassis Number </label>
                                        <div class="attached-media-w">
                                         <input class="form-control" placeholder="Enter Phone " type="text" value="T4G568454574">
                                        </div>
                                      </div>
                                    </div>
                                 </div>
                                   <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           <label for="">Model </label>
                                           <input class="form-control" placeholder="Enter Importer Name " type="text" value="2018">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                         <label for="">Cheque Status </label>
                                        <div class="attached-media-w">
                                         <input class="form-control" placeholder="Enter Phone " type="text" value="Yes">
                                        </div>
                                      </div>
                                    </div>
                                 </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Delivery Date</label>
                                            <div class="date-input">
                                                <input class="single-daterange form-control" placeholder="Date of birth" type="text" value="04/12/1978">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Closing Date </label>
                                            <div class="date-input">
                                                <input class="single-daterange form-control" placeholder="Date of birth" type="text" value="04/12/1978">
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                   
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           <label for=""> Monthly Installment </label>
                                           <input class="form-control" placeholder="Monthly Installment  " type="text" value="30,000">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                         <label for="">Number of Installment</label>
                                        <div class="attached-media-w">
                                         <input class="form-control" placeholder="Enter Phone " type="number" value="24">
                                        </div>
                                      </div>
                                    </div>
                                 </div>
                                 <div class="cm-form-wrapper">
                                    <label class="cm-form-label" for="Categoryselect">
                                      <div class="cm-form-label-text">
                                        Status
                                      </div>
                                   </label>
                                   <div class="cm-form-element" >
                                     <select class="form-control cm-input" id="Categoryselect">
                                       <option>Select Status</option>
                                       <option>Active</option>
                                       <option>Seized</option>
                                       <option>Temporary Seized</option>
                                       <option>Re-Sales</option>
                                     </select>
                                   </div>
                                 </div>
                                 <div class="cm-form-wrapper">
                                    <label class="cm-form-label" for="">
                                      <div class="cm-form-label-text">
                                        Notes
                                      </div>
                                   </label>
                                   <div class="cm-form-element" >
                                    <textarea class="cm-textarea cm-textarea-xlarge form-control" ></textarea>
                                   </div>
                                   <br>
                                 </div>
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
