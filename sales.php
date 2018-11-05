<!DOCTYPE html>
<html>
  <head>
    <title>Sales</title>
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
    <link rel="stylesheet" href="css/custom-main.css">
    </head>

          <?php include "inc/header.php"; ?>

          <!--------------------
          END - Top Bar
          -------------------->
    <div class="content-i">
      <div class="content-box">
        <div class="row">
          <div class="col-lg-7">
            <div class="element-wrapper">
              <div class="element-box">
                <form class="" >
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="row">
                        <div class="form-group">
                          <div class="search">
                              <input  type="text" name="search" placeholder="Search Customer" >
                             <ul class="results" >
                              <li><a href="index.html">Korim</a></li>
                              <li><a href="index.html">Jarif</a></li>
                              <li><a href="index.html">Cintu</a></li>
                              <li><a href="index.html">Sadman</a></li>
                          </ul>
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

                  <div class="col-sm-6">
                     <div class="row" >
                       <div class="form-group">
                        <div class="search">
                            <input type="text" name="q" placeholder="Search Broker" >
                          <ul class="results" >
                             <li><a href="index.html">Korim</a></li>
                             <li><a href="index.html">Jarif</a></li>
                             <li><a href="index.html">Cintu</a></li>
                             <li><a href="index.html">Sadman</a></li>
                          </ul>
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

                     <div class="col-sm-12 form-group">
                        <div class="search col-sm-9 flt-wdt">
                           <input  type="text" name="q" placeholder="Search Product and Service "  >
                           <ul class="results col-sm-9" >
                                 <li><a href="index.html">Korim</a></li>
                                 <li><a href="index.html">Jarif</a></li>
                                <li><a href="index.html">Cintu</a></li>
                                <li><a href="index.html">Sadman</a></li>
                           </ul>
                       </div>
                     </div>

                 </div>
         </form>
         <div class="table-responsive col-lg-12">
           <table  class="table table-bordered table-v2 table-striped text-center cm-table">
             <thead class="col-lg-12 cm-thead">
               <tr >
                 <th >
                   Details
                 </th>
                 <th >
                   Unit
                 </th>
                 <th >
                  Unit Price
                 </th>
                 <th >
                  Sub Total
                 </th>
               </tr>
             </thead>
             <tbody class="col-lg-12 cm-tbody">
               <tr >
                 <td >Tiger Nixon</td>
                 <td>2</td>
                 <td>$1500</td>
                 <td>$30,000</td>
               </tr>
               <tr>
                 <td >Tiger Nixon</td>
                 <td>2</td>
                 <td>$1500</td>
                 <td>$45,000</td>
               </tr>
               <tr>
                 <td >Tiger Nixon</td>
                 <td>3</td>
                 <td>$1500</td>
                 <td>$60,000</td>
               </tr>
               <tr>
                 <td >Tiger Nixon</td>
                 <td>4</td>
                 <td>$1500</td>
                 <td>$75,000</td>
               </tr>
               <tr>
                 <td  >Tiger Nixon</td>
                 <td>5</td>
                 <td>$1500</td>
                 <td>$90,000</td>
               </tr>
               <tr>
                 <td  >Tiger Nixon</td>
                 <td>6</td>
                 <td>$1500</td>
                 <td>$105,000</td>
               </tr>
             </tbody>
             <tfoot class="col-lg-12 cm-tfoot">
               <tr class="col-lg-12">
                 <td colspan="3">Total</td>
                 <td>1001000</td>
               </tr>
             </tfoot>
           </table>
        </div>
       </div>
      </div>
     </div>
     <div class="col-lg-5">
          <div class="element-wrapper">
            <div class="element-box cus-pdbt">
              <div class="row">
                <div class="btn-center" style="">
                    <button class="btn btn-black" type="button" name="button" style=" border-radius: 30px;" data-target=".add-other-service-modal" data-toggle="modal">
                        <i class="os-icon os-icon-ui-22"></i><span>Add</span>
                    </button>
                </div>
              </div>
              <div class="row">
              <div class="form-group">
                <div class="col-sm-4">
                  <button type="button" class="btn btn-grey">
                    Decoration
                  </button>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6">
                  <button type="button" class="btn btn-grey">
                    Registratiuon Cost
                  </button>
                </div>
              </div>
              </div>
            <div class="row">
              <div class="form-group">
                <div class="col-sm-6">
                  <button type="button" class="btn btn-grey">
                    Insurance
                  </button>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6">
                  <button type="button" class="btn btn-grey">
                    Document Process fee
                  </button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <div class="col-sm-6">
                  <button type="button" class="btn btn-grey">
                    Others
                  </button>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6">
                  <button type="button" class="btn btn-grey">
                    Driving License
                  </button>
                </div>
               </div>
              </div>
              <form class="" action="index.html" method="post">
                <fieldset class="form-group">
                  <legend><span>Bank Chack Details</span></legend>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Bank Name</label>
                        <input type="text" class="form-control" id="" placeholder="Bank Name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Number of Chack</label>
                        <input type="number" class="form-control" id="" placeholder="Number of Chack">
                      </div>
                    </div>
                     <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Chack Number</label>
                        <input type="text" class="form-control" id="" placeholder="Number of Chack">
                      </div>
                    </div>
                     <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Challan No</label>
                        <input type="text" class="form-control" id="" placeholder="Number of Chack">
                      </div>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
     </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="element-wrapper">
          <div class="element-box">
            <form class="" >
               <div class="row">
                 <div class="col-sm-2">
                     <select class="form-control" name="">
                           <option>Select Payment Type</option>
                           <option>Cash</option>
                           <option>bKash</option>
                           <option> Bank Deposit </option>
                           <option>Check</option>
                      </select>
                 </div>
                 <div class="col-sm-2">
                     <select class="form-control" name="">
                           <option>Select Payment</option>
                            <option>EMI</option>
                            <option>Booking Money</option>
                            <option> Down Payment</option>
                             <option>Registration Fee</option>
                             <option>Fine</option>
                             <option>Driving License</option>
                              <option>File Transfer</option>
                              <option> Others</option>
                      </select>
                 </div>
                 <div class="col-sm-2">
                     <input class="form-control" type="number" placeholder="Amount" name="" value="">
                 </div>
                 <div class="col-sm-2">
                     <input class="form-control" type="number" placeholder="Installment " name="" value="">
                 </div>
                 <div class="col-sm-4">
                   <div class=" float-right">
                   <button type="button" class="btn btn-primary"> Save </button>
                   <button type="button" class="btn btn-danger "> Cancel </button>
                 </div>
               </div>
               </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   </div>
  </div>
<!--------
   Start Modal of Add Other Service
---------->

<div aria-hidden="true" aria-labelledby="myLargeModalLabel" class="modal fade  add-other-service-modal" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          Add Other Service
        </h5>
        <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> &times;</span></button>
      </div>
      <div class="modal-body">
        <form>
          <fieldset class="form-group">
              <div class="row">
                  <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Service Title</label>
                            <input class="form-control" placeholder="Service Title" type="text">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Amount</label>
                            <input class="form-control" placeholder=" Enter Amount" type="number">
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




<!--------
End Modal of Add Other Service
---------->


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
        <!--End modal of add broker-->

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
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-XXXXXXX-9', 'auto');
      ga('send', 'pageview');
    </script>

  </body>
</html>
