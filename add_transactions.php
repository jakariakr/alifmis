<!DOCTYPE html>
<html>

<head>
    <title>Add Transactions</title>
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
    <link rel="stylesheet" href="css/transactions.css">

</head>

        <?php include "inc/header.php"; ?>


<div class="content-i">
     <div class="content-box">
       <div class="row">
         <div class="col-sm-6">
        <div class="element-wrapper">
            <div class="element-box">
             <legend>
               <span>Add Income</span>
             </legend>
             <form>
               <div class="cm-form-wrapper">
                  <label class="cm-form-label" for="Writeadescription">
                    <div class="cm-form-label-text">
                      Description
                    </div>
                 </label>
                 <div class="cm-form-element">
                      <input type="text" class="cm-input cm-input-xlarge form-control" id="Writeadescription" placeholder="Enter a Description">
                 </div>
               </div>


             <div class="row">
               <div class="cm-form-wrapper col-sm-6">
                  <label class="cm-form-label" for="Writeadescription">
                    <div class="cm-form-label-text">
                      Account
                    </div>
                 </label>
                 <div class="cm-form-element" >
                   <select class="form-control cm-input" id="Writeadescription">
                     <option>Cash on Hand</option>
                     <option>select & Search</option>
                   </select>
                 </div>
               </div>
               <div class="cm-form-wrapper col-sm-6">
                  <label class="cm-form-label" for="enterDate">
                    <div class="cm-form-label-text">
                      Date
                    </div>
                 </label>
                 <div class="cm-form-element date-input">
                      <input type="text" class=" single-daterange cm-input form-control" id="enterDate" placeholder="Form" type="text" value="" >
                 </div>
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
                <label class="cm-form-label" for="Categoryselect">
                  <div class="cm-form-label-text">
                    Category
                  </div>
               </label>
               <div class="cm-form-element" >
                 <select class="form-control cm-input" id="Categoryselect">
                   <option>Uncategorized Expense</option>
                   <option>select & Search</option>
                   <option>select & Search</option>
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
                <textarea class="cm-textarea cm-textarea-xlarge form-control" style="height: 104.979px;"></textarea>
               </div>
             </div>

               <button type="submit" class="btn btn-primary">Save</button>
             </form>
            </div>
         </div>
       </div>
       <div class="col-sm-6">

         <div class="element-wrapper">
             <div class="element-box">
               <legend>
                 <span>Add Expense</span>
               </legend>
               <form>
                 <div class="cm-form-wrapper">
                    <label class="cm-form-label" for="Writeadescription">
                      <div class="cm-form-label-text">
                        Description
                      </div>
                   </label>
                   <div class="cm-form-element">
                        <input type="text" class="cm-input cm-input-xlarge form-control" id="Writeadescription" placeholder="Enter a Description">
                   </div>
                 </div>


               <div class="row">
                 <div class="cm-form-wrapper col-sm-6">
                    <label class="cm-form-label" for="Writeadescription">
                      <div class="cm-form-label-text">
                        Account
                      </div>
                   </label>
                   <div class="cm-form-element" >
                     <select class="form-control cm-input" id="Writeadescription">
                       <option>Cash on Hand</option>
                       <option>select & Search</option>
                     </select>
                   </div>
                 </div>
                 <div class="cm-form-wrapper col-sm-6">
                    <label class="cm-form-label" for="enterDate">
                      <div class="cm-form-label-text">
                        Date
                      </div>
                   </label>
                   <div class="cm-form-element date-input">
                        <input type="text" class=" single-daterange cm-input form-control" id="enterDate" placeholder="Form" type="text" value="" >
                   </div>
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
                  <label class="cm-form-label" for="Categoryselect">
                    <div class="cm-form-label-text">
                      Category
                    </div>
                 </label>
                 <div class="cm-form-element" >
                   <select class="form-control cm-input" id="Categoryselect">
                     <option>Uncategorized Expense</option>
                     <option>select & Search</option>
                     <option>select & Search</option>
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
                  <textarea class="cm-textarea cm-textarea-xlarge form-control" style="height: 104.979px;"></textarea>
                 </div>
               </div>
                          <button type="submit" class="btn btn-primary">Save</button>
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
