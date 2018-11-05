<!DOCTYPE html>
<html>

<head>
    <title>Add New Employee</title>
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
                    <h6 class="element-header">
                        Add New Employee
                    </h6>
                    <div class="element-box">
                        <form>

                            <fieldset class="form-group">
                                <legend><span>Personal Details</span></legend>



                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> First Name</label><input class="form-control" placeholder="First Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Last Name</label><input class="form-control" placeholder="Last Name" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Mobile Personal</label><input class="form-control" placeholder="Mobile Personal" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Official Number</label><input class="form-control" placeholder="Official Number" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Email Personal</label><input class="form-control" placeholder="Email Personal" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Official Email</label><input class="form-control" placeholder="Official Email" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Date Of Birth</label>
                                            <div class="date-input">
                                                <input class="single-daterange form-control" placeholder="Date of birth" type="text" value="04/12/1978">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Marital Status</label><select class="form-control">
                                                <option>
                                                    Select State
                                                </option>
                                                <option>
                                                    Single
                                                </option>
                                                <option>
                                                    Remarried
                                                </option>
                                                <option>
                                                    Divorced
                                                </option>
                                                <option>
                                                    Separated
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> NID Number</label><input class="form-control" placeholder="Nationality" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">TIN Number</label><input class="form-control" placeholder="Enter TIN Number" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Passport Number</label><input class="form-control" placeholder="Enter Passport Number" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Driving License Number</label><input class="form-control" placeholder="Enter Driving License Number" type="text">
                                        </div>
                                    </div>



                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Blood Group</label><select class="form-control">
                                                <option>
                                                    Select Blood Group
                                                </option>
                                                <option>
                                                    A(+)
                                                </option>
                                                <option>
                                                    A(-)
                                                </option>
                                                <option>
                                                    B(+)
                                                </option>
                                                <option>
                                                    B(-)
                                                </option>
                                                <option>
                                                    O(+)
                                                </option>
                                                <option>
                                                    O(-)
                                                </option>
                                                <option>
                                                    AB(+)
                                                </option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Gender</label><select class="form-control">
                                                <option>
                                                    Select Gender
                                                </option>
                                                <option>
                                                    Male
                                                </option>
                                                <option>
                                                    Femail
                                                </option>
                                                <option>
                                                    Others
                                                </option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Religion</label><select class="form-control">
                                                <option>
                                                    Select Religion
                                                </option>
                                                <option>
                                                    Islam
                                                </option>
                                                <option>
                                                    Hinduism
                                                </option>
                                                <option>
                                                    Christianity
                                                </option>
                                                <option>
                                                    Buddhism
                                                </option>
                                                <option>
                                                    Judaism
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                              <fieldset class="form-group">
                                      <legend><span>Address</span></legend>
                                    <div class="form-group">
                                      <label for=""> Present Address</label><input class="form-control" placeholder="Present Address" type="email">
                                    </div>
                                 <div class="form-group">
                                    <label for=""> Permanent Address</label><input class="form-control" placeholder="Permanent Address" type="email">
                                </div>
                           </fieldset>

                                <fieldset class="form-group">
                                    <legend><span>Emergency Contract</span></legend>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for=""> Father Name</label><input class="form-control" placeholder="Father Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Phone Number</label><input class="form-control" placeholder="Phone Number" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for=""> Mother Name</label><input class="form-control" placeholder="First Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Phone Number</label><input class="form-control" placeholder="Phone Number" type="text">
                                            </div>
                                        </div>


                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Others Contact Name</label><input class="form-control" placeholder="Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Phone Number</label><input class="form-control" placeholder="Phone Number" type="text">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for=""> Relation</label><input class="form-control" placeholder="First Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Phone Number</label><input class="form-control" placeholder="Phone Number" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-buttons-w">
                                    <button class="btn btn-primary" type="submit"> Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="element-wrapper">
                    <h6 class="element-header">
                        Company and Others Details
                    </h6>

                    <div class="element-box">
                        <form>
                            <fieldset class="form-group">
                                <legend><span>Job Details</span></legend>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Designation</label><input class="form-control" placeholder="Enter Designation" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Department</label><input class="form-control" placeholder="Enter Department" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Division</label><input class="form-control" placeholder="Enter Division" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Company Name</label><input class="form-control" placeholder="Enter Company Name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Work Location (Branch)</label><input class="form-control" placeholder="Enter Work Location/Branch" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Reporting Boss</label>
                                              <select class="form-control" name="">
                                                <option value="">Reporting Boss</option>
                                                <option value="">Jodu</option>
                                                <option value="">Sundar</option>
                                                <option value="">Korim</option>
                                              </select>

                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Joining Date</label>
                                            <div class="date-input">
                                                <input class="single-daterange form-control" placeholder="Joining Date" type="text" value="04/12/1978">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Permanent Date</label>
                                            <div class="date-input">
                                                <input class="single-daterange form-control" placeholder="Permanent Date" type="text" value="04/12/1978">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Service End</label>
                                            <div class="date-input">
                                                <input class="single-daterange form-control" placeholder="Service End" type="text" value="04/12/1978">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Status</label><select class="form-control">
                                                <option>
                                                    Select Status
                                                </option>
                                                <option>
                                                    Active
                                                </option>
                                                <option>
                                                    Disable
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> PF Enable</label><select class="form-control">
                                                <option>
                                                    Select PF Enable
                                                </option>
                                                <option>
                                                    No
                                                </option>
                                                <option>
                                                    Yes
                                                </option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Attendance</label><select class="form-control">
                                                <option>
                                                    Select Attendance
                                                </option>
                                                <option>
                                                    Machine
                                                </option>
                                                <option>
                                                    Manual
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                          <select class="form-control" name="">
                                            <option value="">Status</option>
                                            <option value="">Active</option>
                                            <option value="">Diseble</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <legend><span>Salary Details</span></legend>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Basic Salary</label><input class="form-control" placeholder="Enter Basic Salary" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for=""> House Allowance</label><input class="form-control" placeholder="Enter House Allowance" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Medical Allowance</label><input class="form-control" placeholder="Enter Medical Allowance" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for=""> Conveyance Allowance</label><input class="form-control" placeholder="Enter Conveyance Allowance" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for=""> Gross Salary</label><input class="form-control" placeholder="Enter Gross Salary" type="text">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for=""> Salary Process</label><select class="form-control">
                                                    <option>
                                                        Select Salary Process
                                                    </option>
                                                    <option>
                                                        Cash
                                                    </option>
                                                    <option>
                                                        Bank
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Bank Name</label><input class="form-control" placeholder="Enter Bank Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for=""> Bank Account Number</label><input class="form-control" placeholder="Enter Account Number" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for=""> Bank Branch Name</label><input class="form-control" placeholder="Enter Branch Name" type="text">
                                            </div>
                                        </div>

                                    </div>
                                </fieldset>
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
            <legend><span>Education Details</span></legend>
            <div class="table-responsive">
               <table class="table table-bordered table-hover table-striped order-list" id="myTable">
                 <thead>
                   <tr>
                     <td>Degree</td>
                     <td> Major</td>
                     <td>Institution Name</td>
                     <td>Passing Year</td>
                     <td> Result</td>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <td> <input class="form-control"  placeholder="Enter Degree" type="text" name="degree"></td>
                     <td><input class="form-control" placeholder="Enter Major" type="text" name="major"> </td>
                     <td> <input class="form-control" placeholder="Enter Institution Name" type="text" name="institution"> </td>
                     <td> <input class="form-control" placeholder="Enter Passing Year" type="text" name="passingyear"> </td>
                     <td> <input class="form-control" placeholder="Enter Result" type="text" name="result"> </td>
                     <td><button class="close ibtnDel"  type="button"><span  type="button"> ×</span></button></td>
                   </tr>
                 </tbody>
               </div>
            </table>
            <div class="form-buttons-w">
                <input type="button" class="btn btn-primary " id="addrow" value="Add Row" />
          </div>
      </fieldset>
    </div>
        <div class="content-i">
            <div class="content-box">
              <div class="element-wrapper">
                <h6 class="element-header">
                  File Uploads
                </h6>
                <div class="element-box">
                  <div class="row">
                    <div class="col-sm-6">
                        <label for=""><b>Upload Broker Photo</b> </label>
                        <form action="index.html" class="dropzone" id="my-awesome-dropzone" style="padding:0px;min-height:0px" >
                            <div class="dz-message">
                                <div>
                                    <h7>Drop files here or click to upload.</h7>
                                </div>
                            </div>
                        </form>
                      </div>
                        <div class="col-sm-6">
                            <label for=""><b>Upload Broker Photo</b> </label>
                            <form action="index.html" class="dropzone" id="my-awesome-dropzone" style="padding:0px;min-height:0px" >
                                <div class="dz-message">
                                    <div>
                                        <h7>Drop files here or click to upload.</h7>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>
                  <div class="element-box">
                    <div class="row">
                      <div class="col-sm-6">
                          <label for=""><b>Upload Broker Photo</b> </label>
                          <form action="index.html" class="dropzone" id="my-awesome-dropzone" style="padding:0px;min-height:0px" >
                              <div class="dz-message">
                                  <div>
                                      <h7>Drop files here or click to upload.</h7>
                                  </div>
                              </div>
                          </form>
                        </div>
                          <div class="col-sm-6">
                              <label for=""><b>Upload Broker Photo</b> </label>
                              <form action="index.html" class="dropzone" id="my-awesome-dropzone" style="padding:0px;min-height:0px" >
                                  <div class="dz-message">
                                      <div>
                                          <h7>Drop files here or click to upload.</h7>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                    </div>
                    <div class="element-box">
                      <div class="row">
                        <div class="col-sm-6">
                            <label for=""><b>Upload Broker Photo</b> </label>
                            <form action="index.html" class="dropzone" id="my-awesome-dropzone" style="padding:0px;min-height:0px" >
                                <div class="dz-message">
                                    <div>
                                        <h7>Drop files here or click to upload.</h7>
                                    </div>
                                </div>
                            </form>
                          </div>
                            <div class="col-sm-6">
                                <label for=""><b>Upload Broker Photo</b> </label>
                                <form action="index.html" class="dropzone" id="my-awesome-dropzone" style="padding:0px;min-height:0px" >
                                    <div class="dz-message">
                                        <div>
                                            <h7>Drop files here or click to upload.</h7>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                      </div>
                      <div class="element-box">
                        <div class="row">
                          <div class="col-sm-6">
                              <label for=""><b>Upload Broker Photo</b> </label>
                              <form action="index.html" class="dropzone" id="my-awesome-dropzone" style="padding:0px;min-height:0px" >
                                  <div class="dz-message">
                                      <div>
                                          <h7>Drop files here or click to upload.</h7>
                                      </div>
                                  </div>
                              </form>
                            </div>
                              <div class="col-sm-6">
                                  <label for=""><b>Upload Broker Photo</b> </label>
                                  <form action="index.html" class="dropzone" id="my-awesome-dropzone" style="padding:0px;min-height:0px" >
                                      <div class="dz-message">
                                          <div>
                                              <h7>Drop files here or click to upload.</h7>
                                          </div>
                                      </div>
                                  </form>
                              </div>
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
