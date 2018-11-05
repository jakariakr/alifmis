<!DOCTYPE html>
<html>

<head>
    <title>Chart of Accounts</title>
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
  <link rel="stylesheet" href="css/chart_of_accounts.css">
  <link href="icon_fonts_assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

        <?php include "inc/header.php"; ?>
<div class="content-i">
     <div class="content-box">
        <div class="element-wrapper">
            <div class="element-box">
              <div class="form-header">
                      <span class="cm-header"><b>Chart of Accounts</b> </span>
                      <span class="cm-q-icon">
                         <a class="btn btn-sm"  href="#">

                             <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                         </a>
                      </span>
                <div class="cm-head-btn">
                    <button type="button"  data-target="#addnewAccountMD1" data-toggle="modal"  class="btn btn-primary btn-header">Add a New Account</button>
                </div>
              </div>
              <div class="steps-w chart-of-accounts-tabs ">
                <div class="step-triggers">
                  <legend><a class="step-trigger active" href="#stepContent1">Assets</a></legend>
                  <legend><a class="step-trigger" href="#stepContent2">Liabilities & Credit Cards</a></legend>
                  <legend><a class="step-trigger" href="#stepContent3">Income</a></legend>
                  <legend><a class="step-trigger" href="#stepContent4">Expenses</a></legend>
                  <legend><a class="step-trigger" href="#stepContent5">Equity</a></legend>
               </div>
          <div class="step-contents">
             <div class="step-content active" id="stepContent1">
                <table class="cm-table table table-hover">
                  <tbody class="cm-table-rowgroup">
                    <tr class="cm-table-row-header">
                      <td class="cm-table-cell-head" colspan="5">
                        <b>  Cash and Bank</b>
                        <span class="cm-q-icon">
                           <a class="btn btn-sm"  href="#">
                               <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                           </a>
                        </span>
                      </td>
                    </tr>
                    <tr class="cm-table-row">
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell" colspan="1">
                        <span class="wv-text wv-text--fine-print">
                          <span class="chart-of-accounts__no-accounts-in-subgroup">
                            <em class="wv-text--emphasized">Cash on Hand</em>
                          </span>
                        </span>
                      </td>
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell" colspan="1">
                        <a class="btn  btn-sm float-right"  data-target="#addnewAccountMD2" data-toggle="modal" href="#"><i class="os-icon os-icon-pencil-2"></i></a>
                      </td>
                    </tr>
                    <tr class="cm-table-row">
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell add-new-btn"  colspan="4">
                            <a class="add-task-btn " data-target="#addnewAccountMD2" data-toggle="modal" href="#">
                              <i class="os-icon os-icon-ui-22"></i>
                              <span>Add a new account</span>
                            </a>
                      </td>
                    </tr>
                  </tbody>
                  <tbody class="cm-table-rowgroup">
                    <tr class="cm-table-row-header">
                      <td class="cm-table-cell-head" colspan="5">
                        <b>  Money in Transit</b>
                        <span class="cm-q-icon">
                           <a class="btn btn-sm"  href="#">
                               <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                           </a>
                        </span>
                      </td>
                    </tr>
                    <tr class="cm-table-row">
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell" colspan="4">
                        <span class="wv-text wv-text--fine-print">
                          <span class="chart-of-accounts__no-accounts-in-subgroup">
                            <em class="wv-text--emphasized">You haven't added any Money in Transit accounts yet.</em>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr class="cm-table-row">
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell add-new-btn" colspan="4">
                            <a class="add-task-btn" data-target="#addnewAccountMD2" data-toggle="modal" href="#">
                              <i class="os-icon os-icon-ui-22"></i>
                              <span>Add a new account</span>
                            </a>
                      </td>
                    </tr>
                  </tbody>
                  <tbody class="cm-table-rowgroup">
                    <tr class="cm-table-row-header">
                      <td class="cm-table-cell-head" colspan="5">
                       <b>  Expected Payments from Customers</b>
                       <span class="cm-q-icon">
                          <a class="btn btn-sm"  href="#">
                              <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                          </a>
                       </span>
                      </td>
                    </tr>
                  <tr class="cm-table-row">
                    <td class="cm-table-cell" colspan="1">
                      <span class="fs-exclude"></span>
                    </td>
                    <td class="cm-table-cell" colspan="1">
                      <span class="chart-of-accounts-table__account-name-column">
                        <span class="fs-exclude"><b>Accounts Receivable</b></span>

                      </span>
                    </td>
                    <td class="cm-table-cell" colspan="1">
                        <span class="fs-exclude"></span>
                      </td>
                      <td class="cm-table-cell" colspan="1">  </td>
                      <td class="cm-table-cell wv-table__cell--actions" colspan="1"></td>
                    </tr>
                    <tr class="cm-table-row">
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell add-new-btn" colspan="4">
                            <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                              <i class="os-icon os-icon-ui-22"></i>
                              <span>Add a new account</span>
                            </a>
                      </td>
                  </tbody>
                  <tbody class="cm-table-rowgroup">
                    <tr class="cm-table-row-header">
                      <td class="cm-table-cell-head" colspan="5">
                         <b>  Inventory</b>
                         <span class="cm-q-icon">
                            <a class="btn btn-sm"  href="#">
                                <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                            </a>
                         </span>
                      </td>
                    </tr>
                    <tr class="cm-table-row">
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell" colspan="4">
                        <span class="wv-text wv-text--fine-print">
                          <span class="chart-of-accounts__no-accounts-in-subgroup">
                            <em class="wv-text--emphasized">You haven't added any Inventory accounts yet.</em>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr class="cm-table-row">
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell add-new-btn" colspan="4">
                            <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                              <i class="os-icon os-icon-ui-22"></i>
                              <span>Add a new account</span>
                            </a>
                      </td>
                    </tr>
                  </tbody>
                  <tbody class="cm-table-rowgroup">
                    <tr class="cm-table-row-header">
                      <td class="cm-table-cell-head" colspan="5">
                       <b>  Property, Plant, Equipment</b>
                       <span class="cm-q-icon">
                          <a class="btn btn-sm"  href="#">
                              <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                          </a>
                       </span>
                      </td>
                    </tr>
                    <tr class="cm-table-row">
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell" colspan="4">
                        <span class="wv-text wv-text--fine-print">
                          <span class="chart-of-accounts__no-accounts-in-subgroup">
                            <em class="wv-text--emphasized">You haven't added any Property, Plant, Equipment accounts yet.</em>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr class="cm-table-row">
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell add-new-btn" colspan="4">
                            <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                              <i class="os-icon os-icon-ui-22"></i>
                              <span>Add a new account</span>
                            </a>
                      </td>
                    </tr>
                  </tbody>
                  <tbody class="cm-table-rowgroup">
                    <tr class="cm-table-row-header">
                      <td class="cm-table-cell-head" colspan="5">
                       <b>  Depreciation and Amortization</b>
                       <span class="cm-q-icon">
                          <a class="btn btn-sm"  href="#">
                              <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                          </a>
                       </span>
                      </td>
                    </tr>
                    <tr class="cm-table-row">
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell" colspan="4">
                        <span class="wv-text wv-text--fine-print">
                          <span class="chart-of-accounts__no-accounts-in-subgroup">
                            <em class="wv-text--emphasized">	You haven't added any Depreciation and Amortization accounts yet.</em>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr class="cm-table-row">
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell add-new-btn" colspan="4">
                            <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                              <i class="os-icon os-icon-ui-22"></i>
                              <span>Add a new account</span>
                            </a>
                      </td>
                    </tr>
                  </tbody>
                  <tbody class="cm-table-rowgroup">
                    <tr class="cm-table-row-header">
                      <td class="cm-table-cell-head" colspan="5">
                        <b>Vendor Prepayments and Vendor Credits</b>
                        <span class="cm-q-icon">
                           <a class="btn btn-sm"  href="#">
                               <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                           </a>
                        </span>
                      </td>
                    </tr>
                    <tr class="cm-table-row">
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell" colspan="4">
                        <span class="wv-text wv-text--fine-print">
                          <span class="chart-of-accounts__no-accounts-in-subgroup">
                            <em class="wv-text--emphasized">	You haven't added any Vendor Prepayments and Vendor Credits accounts yet.</em>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr class="cm-table-row">
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell add-new-btn" colspan="4">
                            <a class="add-task-btn" data-target="#addnewAccountMD2" data-toggle="modal" href="#">
                              <i class="os-icon os-icon-ui-22"></i>
                              <span>Add a new account</span>
                            </a>
                      </td>
                    </tr>
                  </tbody>
                  <tbody class="cm-table-rowgroup">
                    <tr class="cm-table-row-header">
                      <td class="cm-table-cell-head" colspan="5">
                       <b>  Other Short-Term Asset</b>
                       <span class="cm-q-icon">
                          <a class="btn btn-sm"  href="#">
                              <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                          </a>
                       </span>
                      </td>
                    </tr>
                    <tr class="cm-table-row">
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell" colspan="4">
                        <span class="wv-text wv-text--fine-print">
                          <span class="chart-of-accounts__no-accounts-in-subgroup">
                            <em class="wv-text--emphasized">You haven't added any Other Short-Term Asset accounts yet.</em>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr class="cm-table-row">
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell add-new-btn" colspan="4">
                            <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                              <i class="os-icon os-icon-ui-22"></i>
                              <span>Add a new account</span>
                            </a>
                      </td>
                    </tr>
                  </tbody>
                  <tbody class="cm-table-rowgroup">
                    <tr class="cm-table-row-header">
                      <td class="cm-table-cell-head" colspan="5">
                        <b>Other Long-Term Asset</b>
                        <span class="cm-q-icon">
                           <a class="btn btn-sm"  href="#">
                               <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                           </a>
                        </span>
                      </td>
                    </tr>
                    <tr class="cm-table-row">
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell" colspan="4">
                        <span class="wv-text wv-text--fine-print">
                          <span class="chart-of-accounts__no-accounts-in-subgroup">
                            <em class="wv-text--emphasized">	You haven't added any Other Long-Term Asset accounts yet.</em>
                          </span>
                        </span>
                      </td>
                    </tr>
                    <tr class="cm-table-row">
                      <td class="cm-table-cell" colspan="1"></td>
                      <td class="cm-table-cell add-new-btn" colspan="4">
                            <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                              <i class="os-icon os-icon-ui-22"></i>
                              <span>Add a new account</span>
                            </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
             </div>

             <div class="step-content" id="stepContent2">
               <table class="cm-table table table-hover">
                 <tbody class="cm-table-rowgroup">
                   <tr class="cm-table-row-header">
                     <td class="cm-table-cell-head" colspan="5">
                      <b>  Credit Card</b>
                      <span class="cm-q-icon">
                         <a class="btn btn-sm"  href="#">
                             <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                         </a>
                      </span>
                     </td>
                   </tr>
                   <tr class="cm-table-row">
                     <td class="cm-table-cell" colspan="1"></td>
                     <td class="cm-table-cell" colspan="4">
                       <span class="wv-text wv-text--fine-print">
                         <span class="chart-of-accounts__no-accounts-in-subgroup">
                           <em class="wv-text--emphasized">You haven't added any Credit Card accounts yet.</em>
                         </span>
                       </span>
                     </td>
                   </tr>
                   <tr class="cm-table-row">
                     <td class="cm-table-cell" colspan="1"></td>
                     <td class="cm-table-cell add-new-btn" colspan="4">
                           <a class="add-task-btn" data-target="#addnewAccountMD2" data-toggle="modal" href="#">
                             <i class="os-icon os-icon-ui-22"></i>
                             <span>Add a new account</span>
                           </a>
                     </td>
                   </tr>
                 </tbody>
                 <tbody class="cm-table-rowgroup">
                   <tr class="cm-table-row-header">
                     <td class="cm-table-cell-head" colspan="5">
                      <b>  Loan and Line of Credit</b>
                      <span class="cm-q-icon">
                         <a class="btn btn-sm"  href="#">
                             <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                         </a>
                      </span>
                     </td>
                   </tr>
                   <tr class="cm-table-row">
                     <td class="cm-table-cell" colspan="1"></td>
                     <td class="cm-table-cell" colspan="4">
                       <span class="wv-text wv-text--fine-print">
                         <span class="chart-of-accounts__no-accounts-in-subgroup">
                           <em class="wv-text--emphasized">You haven't added any Loan and Line of Credit accounts yet.</em>
                         </span>
                       </span>
                     </td>
                   </tr>
                   <tr class="cm-table-row">
                     <td class="cm-table-cell" colspan="1"></td>
                     <td class="cm-table-cell add-new-btn" colspan="4">
                           <a class="add-task-btn" data-target="#addnewAccountMD2" data-toggle="modal" href="#">
                             <i class="os-icon os-icon-ui-22"></i>
                             <span>Add a new account</span>
                           </a>
                     </td>
                   </tr>
                 </tbody>
                 <tbody class="cm-table-rowgroup">
                   <tr class="cm-table-row-header">
                     <td class="cm-table-cell-head" colspan="5">
                       <b>  Expected Payments to Vendors</b>
                       <span class="cm-q-icon">
                          <a class="btn btn-sm"  href="#">
                              <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                          </a>
                       </span>
                     </td>
                   </tr>
                 <tr class="cm-table-row">
                   <td class="cm-table-cell" colspan="1">
                     <span class="fs-exclude"></span>
                   </td>
                   <td class="cm-table-cell" colspan="1">
                     <span class="chart-of-accounts-table__account-name-column">
                       <span class="fs-exclude"><b>Accounts Payable</b></span>

                     </span>
                   </td>
                   <td class="cm-table-cell" colspan="1">
                       <span class="fs-exclude"></span>
                     </td>
                     <td class="cm-table-cell" colspan="1">  </td>
                     <td class="cm-table-cell wv-table__cell--actions" colspan="1"></td>
                   </tr>
                   <tr class="cm-table-row">
                     <td class="cm-table-cell" colspan="1"></td>
                     <td class="cm-table-cell add-new-btn" colspan="4">
                           <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                             <i class="os-icon os-icon-ui-22"></i>
                             <span>Add a new account</span>
                           </a>
                     </td>
                 </tbody>
                 <tbody class="cm-table-rowgroup">
                   <tr class="cm-table-row-header">
                     <td class="cm-table-cell-head" colspan="5">
                      <b>  Sales Taxes</b>
                      <span class="cm-q-icon">
                         <a class="btn btn-sm"  href="#">
                             <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                         </a>
                      </span>
                     </td>
                   </tr>
                   <tr class="cm-table-row">
                     <td class="cm-table-cell" colspan="1"></td>
                     <td class="cm-table-cell" colspan="4">
                       <span class="wv-text wv-text--fine-print">
                         <span class="chart-of-accounts__no-accounts-in-subgroup">
                           <em class="wv-text--emphasized">You haven't added any Sales Taxes accounts yet.</em>
                         </span>
                       </span>
                     </td>
                   </tr>

                 </tbody>
                 <tbody class="cm-table-rowgroup">
                   <tr class="cm-table-row-header">
                     <td class="cm-table-cell-head" colspan="5">
                     <b>  Due For Payroll</b>
                     <span class="cm-q-icon">
                        <a class="btn btn-sm"  href="#">
                            <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                        </a>
                     </span>
                     </td>
                   </tr>
                   <tr class="cm-table-row">
                     <td class="cm-table-cell" colspan="1"></td>
                     <td class="cm-table-cell" colspan="4">
                       <span class="wv-text wv-text--fine-print">
                         <span class="chart-of-accounts__no-accounts-in-subgroup">
                           <em class="wv-text--emphasized">You haven't added any Due For Payroll accounts yet.</em>
                         </span>
                       </span>
                     </td>
                   </tr>
                   <tr class="cm-table-row">
                     <td class="cm-table-cell" colspan="1"></td>
                     <td class="cm-table-cell add-new-btn" colspan="4">
                           <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                             <i class="os-icon os-icon-ui-22"></i>
                             <span>Add a new account</span>
                           </a>
                     </td>
                   </tr>
                 </tbody>
                 <tbody class="cm-table-rowgroup">
                   <tr class="cm-table-row-header">
                     <td class="cm-table-cell-head" colspan="5">
                       <b>  Due to You and Other Business Owners</b>
                       <span class="cm-q-icon">
                          <a class="btn btn-sm"  href="#">
                              <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                          </a>
                       </span>
                     </td>
                   </tr>
                   <tr class="cm-table-row">
                     <td class="cm-table-cell" colspan="1"></td>
                     <td class="cm-table-cell" colspan="4">
                       <span class="wv-text wv-text--fine-print">
                         <span class="chart-of-accounts__no-accounts-in-subgroup">
                           <em class="wv-text--emphasized">You haven't added any Due to You and Other Business Owners accounts yet.</em>
                         </span>
                       </span>
                     </td>
                   </tr>
                   <tr class="cm-table-row">
                     <td class="cm-table-cell" colspan="1"></td>
                     <td class="cm-table-cell add-new-btn" colspan="4">
                           <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                             <i class="os-icon os-icon-ui-22"></i>
                             <span>Add a new account</span>
                           </a>
                     </td>
                   </tr>
                 </tbody>
                 <tbody class="cm-table-rowgroup">
                   <tr class="cm-table-row-header">
                     <td class="cm-table-cell-head" colspan="5">
                      <b>  Customer Prepayments and Customer Credits</b>
                      <span class="cm-q-icon">
                         <a class="btn btn-sm"  href="#">
                             <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                         </a>
                      </span>
                     </td>
                   </tr>
                   <tr class="cm-table-row">
                     <td class="cm-table-cell" colspan="1"></td>
                     <td class="cm-table-cell" colspan="4">
                       <span class="wv-text wv-text--fine-print">
                         <span class="chart-of-accounts__no-accounts-in-subgroup">
                           <em class="wv-text--emphasized">You haven't added any Customer Prepayments and Customer Credits accounts yet.</em>
                         </span>
                       </span>
                     </td>
                   </tr>
                   <tr class="cm-table-row">
                     <td class="cm-table-cell" colspan="1"></td>
                     <td class="cm-table-cell add-new-btn" colspan="4">
                           <a class="add-task-btn" data-target="#addnewAccountMD2" data-toggle="modal" href="#">
                             <i class="os-icon os-icon-ui-22"></i>
                             <span>Add a new account</span>
                           </a>
                     </td>
                   </tr>
                 </tbody>
                 <tbody class="cm-table-rowgroup">
                   <tr class="cm-table-row-header">
                     <td class="cm-table-cell-head" colspan="5">
                        <b>Other Short-Term Liability<b>
                          <span class="cm-q-icon">
                             <a class="btn btn-sm"  href="#">
                                 <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                             </a>
                          </span>
                     </td>
                   </tr>
                   <tr class="cm-table-row">
                     <td class="cm-table-cell" colspan="1"></td>
                     <td class="cm-table-cell" colspan="4">
                       <span class="wv-text wv-text--fine-print">
                         <span class="chart-of-accounts__no-accounts-in-subgroup">
                           <em class="wv-text--emphasized">You haven't added any Other Short-Term Liability accounts yet.</em>
                         </span>
                       </span>
                     </td>
                   </tr>
                   <tr class="cm-table-row">
                     <td class="cm-table-cell" colspan="1"></td>
                     <td class="cm-table-cell add-new-btn" colspan="4">
                           <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                             <i class="os-icon os-icon-ui-22"></i>
                             <span>Add a new account</span>
                           </a>
                     </td>
                   </tr>
                 </tbody>
                 <tbody class="cm-table-rowgroup">
                   <tr class="cm-table-row-header">
                     <td class="cm-table-cell-head" colspan="5">
                      <b>  Other Long-Term Liability</b>
                      <span class="cm-q-icon">
                         <a class="btn btn-sm"  href="#">
                             <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                         </a>
                      </span>
                     </td>
                   </tr>
                   <tr class="cm-table-row">
                     <td class="cm-table-cell" colspan="1"></td>
                     <td class="cm-table-cell" colspan="4">
                       <span class="wv-text wv-text--fine-print">
                         <span class="chart-of-accounts__no-accounts-in-subgroup">
                           <em class="wv-text--emphasized">You haven't added any Other Long-Term Liability accounts yet.</em>
                         </span>
                       </span>
                     </td>
                   </tr>
                   <tr class="cm-table-row">
                     <td class="cm-table-cell" colspan="1"></td>
                     <td class="cm-table-cell add-new-btn" colspan="4">
                           <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                             <i class="os-icon os-icon-ui-22"></i>
                             <span>Add a new account</span>
                           </a>
                     </td>
                   </tr>
                 </tbody>
               </table>
            </div>


                    <div class="step-content" id="stepContent3">
                        <table class="cm-table table table-hover">
                            <tbody class="cm-table-rowgroup">
                                <tr class="cm-table-row-header">
                                  <td class="cm-table-cell-head" colspan="5">
                                   <b> Income</b>
                                   <span class="cm-q-icon">
                                      <a class="btn btn-sm"  href="#">
                                          <i class="os-icon os-icon-mail-07" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                                      </a>
                                   </span>
                                  </td>
                                </tr>
                                <tr class="cm-table-row">
                                  <td class="cm-table-cell" colspan="1"></td>
                                  <td class="cm-table-cell" colspan="1">
                                    <span class="wv-text wv-text--fine-print">
                                      <span class="chart-of-accounts__no-accounts-in-subgroup">
                                        <em class="wv-text--emphasized">Sales No transactions for this account</em>
                                      </span>
                                    </span>
                                  </td>
                                  <td class="cm-table-cell" colspan="1"></td>
                                  <td class="cm-table-cell" colspan="1"></td>
                                  <td class="cm-table-cell" colspan="1">
                                    <a class="btn  btn-sm float-right"  data-target="#addnewAccountMD2" data-toggle="modal" href="#"><i class="os-icon os-icon-pencil-2"></i></a>
                                  </td>
                                </tr>
                                <tr class="cm-table-row">
                                  <td class="cm-table-cell" colspan="1"></td>
                                  <td class="cm-table-cell add-new-btn" colspan="4">
                                        <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                                          <i class="os-icon os-icon-ui-22"></i>
                                          <span>Add a new account</span>
                                        </a>
                                  </td>
                                </tr>
                              </tbody>
                              <tbody class="cm-table-rowgroup">
                                <tr class="cm-table-row-header">
                                  <td class="cm-table-cell-head" colspan="5">
                                   <b>  Discount</b>
                                   <span class="cm-q-icon">
                                      <a class="btn btn-sm"  href="#">
                                          <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                                      </a>
                                   </span>
                                  </td>
                                </tr>
                                <tr class="cm-table-row">
                                  <td class="cm-table-cell" colspan="1"></td>
                                  <td class="cm-table-cell" colspan="4">
                                    <span class="wv-text wv-text--fine-print">
                                      <span class="chart-of-accounts__no-accounts-in-subgroup">
                                        <em class="wv-text--emphasized">You haven't added any Discount accounts yet.</em>
                                      </span>
                                    </span>
                                  </td>
                                </tr>
                                <tr class="cm-table-row">
                                  <td class="cm-table-cell" colspan="1"></td>
                                  <td class="cm-table-cell add-new-btn" colspan="4">
                                        <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                                          <i class="os-icon os-icon-ui-22"></i>
                                          <span>Add a new account</span>
                                        </a>
                                  </td>
                                </tr>
                              </tbody>
                              <tbody class="cm-table-rowgroup">
                                <tr class="cm-table-row-header">
                                  <td class="cm-table-cell-head" colspan="5">
                                    <b> Other Income</b>
                                    <span class="cm-q-icon">
                                       <a class="btn btn-sm"  href="#">
                                           <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                                       </a>
                                    </span>
                                  </td>
                                </tr>
                              <tr class="cm-table-row">
                                <td class="cm-table-cell" colspan="1">
                                  <span class="fs-exclude"></span>
                                </td>
                                <td class="cm-table-cell" colspan="1">
                                  <span class="wv-text wv-text--fine-print">
                                    <span class="chart-of-accounts__no-accounts-in-subgroup">
                                      <em class="wv-text--emphasized">You haven't added any Other Income accounts yet.</em>
                                    </span>
                                  </span>
                                </td>
                                <td class="cm-table-cell" colspan="1">
                                    <span class="fs-exclude"></span>
                                  </td>
                                  <td class="cm-table-cell" colspan="1">  </td>
                                  <td class="cm-table-cell wv-table__cell--actions" colspan="1"></td>
                                </tr>
                                <tr class="cm-table-row">
                                  <td class="cm-table-cell" colspan="1"></td>
                                  <td class="cm-table-cell add-new-btn" colspan="4">

                                        <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                                          <i class="os-icon os-icon-ui-22"></i>
                                          <span>Add a new account</span>
                                        </a>
                                  </td>
                              </tbody>
                              <tbody class="cm-table-rowgroup">
                                <tr class="cm-table-row-header">
                                  <td class="cm-table-cell-head" colspan="5">
                                   <b>  Uncategorized Income</b>
                                   <span class="cm-q-icon">
                                      <a class="btn btn-sm"  href="#">
                                          <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                                      </a>
                                   </span>
                                  </td>
                                </tr>
                                <tr class="cm-table-row">
                                  <td class="cm-table-cell" colspan="1"></td>
                                  <td class="cm-table-cell" colspan="4">
                                    <span class="wv-text wv-text--fine-print">
                                      <span class="chart-of-accounts__no-accounts-in-subgroup">
                                        <em class="wv-text--emphasized">Uncategorized Income No transactions for this account</em>
                                      </span>
                                    </span>
                                  </td>
                                </tr>

                              </tbody>
                              <tbody class="cm-table-rowgroup">
                                <tr class="cm-table-row-header">
                                  <td class="cm-table-cell-head" colspan="5">
                                  <b> Gain On Foreign Exchange</b>
                                  <span class="cm-q-icon">
                                     <a class="btn btn-sm"  href="#">
                                         <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                                     </a>
                                  </span>
                                  </td>
                                </tr>
                                <tr class="cm-table-row">
                                  <td class="cm-table-cell" colspan="1"></td>
                                  <td class="cm-table-cell" colspan="4">
                                    <span class="wv-text wv-text--fine-print">
                                      <span class="chart-of-accounts__no-accounts-in-subgroup">
                                        <em class="wv-text--emphasized">Gain on Foreign Exchange No transactions for this account</em>
                                      </span>
                                    </span>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                     </div>

                          <div class="step-content" id="stepContent4">
                              <table class="cm-table table table-hover">
                                    <tbody class="cm-table-rowgroup">
                                        <tr class="cm-table-row-header">
                                          <td class="cm-table-cell-head" colspan="5">
                                           <b> Operating Expense</b>
                                           <span class="cm-q-icon">
                                              <a class="btn btn-sm"  href="#">
                                                  <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                                              </a>
                                           </span>
                                          </td>
                                        </tr>
                                        <tr class="cm-table-row">
                                          <td class="cm-table-cell" colspan="1"></td>
                                          <td class="cm-table-cell" colspan="1">
                                            <span class="wv-text wv-text--fine-print">
                                              <span class="chart-of-accounts__no-accounts-in-subgroup">
                                                <em class="wv-text--emphasized">Accounting Fees</em>
                                              </span>
                                            </span>
                                          </td>
                                          <td class="cm-table-cell" colspan="1"></td>
                                          <td class="cm-table-cell" colspan="1"></td>
                                          <td class="cm-table-cell" colspan="1">
                                            <a class="btn  btn-sm float-right"  data-target="#addnewAccountMD2" data-toggle="modal" href="#"><i class="os-icon os-icon-pencil-2"></i></a>
                                          </td>
                                        </tr>
                                        <tr class="cm-table-row">
                                          <td class="cm-table-cell" colspan="1"></td>
                                          <td class="cm-table-cell add-new-btn" colspan="4">
                                                <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                                                  <i class="os-icon os-icon-ui-22"></i>
                                                  <span>Add a new account</span>
                                                </a>
                                          </td>
                                        </tr>
                                      </tbody>
                                      <tbody class="cm-table-rowgroup">
                                        <tr class="cm-table-row-header">
                                          <td class="cm-table-cell-head" colspan="5">
                                           <b>  Cost of Goods Sold</b>
                                           <span class="cm-q-icon">
                                              <a class="btn btn-sm"  href="#">
                                                  <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                                              </a>
                                           </span>
                                          </td>
                                        </tr>
                                        <tr class="cm-table-row">
                                          <td class="cm-table-cell" colspan="1"></td>
                                          <td class="cm-table-cell" colspan="1">
                                            <span class="wv-text wv-text--fine-print">
                                              <span class="chart-of-accounts__no-accounts-in-subgroup">
                                                <em class="wv-text--emphasized">Purchases – Parts & Materials</em>
                                              </span>
                                            </span>
                                          </td>
                                          <td class="cm-table-cell" colspan="1"></td>
                                          <td class="cm-table-cell" colspan="1"></td>
                                          <td class="cm-table-cell" colspan="1">
                                            <a class="btn  btn-sm float-right"  data-target="#addnewAccountMD2" data-toggle="modal" href="#"><i class="os-icon os-icon-pencil-2"></i></a>
                                          </td>
                                        </tr>
                                        <tr class="cm-table-row">
                                          <td class="cm-table-cell" colspan="1"></td>
                                          <td class="cm-table-cell add-new-btn" colspan="4">
                                                <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                                                  <i class="os-icon os-icon-ui-22"></i>
                                                  <span>Add a new account</span>
                                                </a>
                                          </td>
                                        </tr>
                                      </tbody>
                                      <tbody class="cm-table-rowgroup">
                                        <tr class="cm-table-row-header">
                                          <td class="cm-table-cell-head" colspan="5">
                                            <b>Payment Processing Fee</b>
                                            <span class="cm-q-icon">
                                               <a class="btn btn-sm"  href="#">
                                                   <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                                               </a>
                                            </span>
                                          </td>
                                        </tr>
                                      <tr class="cm-table-row">
                                        <td class="cm-table-cell" colspan="1">
                                          <span class="fs-exclude"></span>
                                        </td>
                                        <td class="cm-table-cell" colspan="1">
                                          <span class="chart-of-accounts-table__account-name-column">
                                            <span class="fs-exclude">Merchant Account Fees</span>
                                            <span class="wv-text wv-text--fine-print">No transactions for this account</span>
                                          </span>
                                        </td>
                                        <td class="cm-table-cell" colspan="1"></td>
                                        <td class="cm-table-cell" colspan="1"></td>
                                        <td class="cm-table-cell" colspan="1">
                                          <a class="btn  btn-sm float-right"  data-target="#addnewAccountMD2" data-toggle="modal" href="#"><i class="os-icon os-icon-pencil-2"></i></a>
                                        </td>
                                        </tr>
                                        <tr class="cm-table-row">
                                          <td class="cm-table-cell" colspan="1"></td>
                                          <td class="cm-table-cell add-new-btn" colspan="4">
                                                <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                                                  <i class="os-icon os-icon-ui-22"></i>
                                                  <span>Add a new account</span>
                                                </a>
                                          </td>
                                        </tr>
                                      </tbody>
                                      <tbody class="cm-table-rowgroup">
                                        <tr class="cm-table-row-header">
                                          <td class="cm-table-cell-head" colspan="5">
                                           <b> Payroll Expense</b>
                                           <span class="cm-q-icon">
                                              <a class="btn btn-sm"  href="#">
                                                  <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                                              </a>
                                           </span>
                                          </td>
                                        </tr>
                                        <tr class="cm-table-row">
                                          <td class="cm-table-cell" colspan="1"></td>
                                          <td class="cm-table-cell" colspan="1">
                                            <span class="wv-text wv-text--fine-print">
                                              <span class="chart-of-accounts__no-accounts-in-subgroup">
                                                <em class="wv-text--emphasized">Payroll – Employee Benefits</em>
                                              </span>
                                            </span>
                                          </td>
                                          <td class="cm-table-cell" colspan="1"></td>
                                          <td class="cm-table-cell" colspan="1"></td>
                                          <td class="cm-table-cell" colspan="1">
                                            <a class="btn  btn-sm float-right"  data-target="#addnewAccountMD2" data-toggle="modal" href="#"><i class="os-icon os-icon-pencil-2"></i></a>
                                          </td>
                                        </tr>
                                        <tr class="cm-table-row">
                                          <td class="cm-table-cell" colspan="1"></td>
                                          <td class="cm-table-cell add-new-btn" colspan="4">
                                                <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                                                  <i class="os-icon os-icon-ui-22"></i>
                                                  <span>Add a new account</span>
                                                </a>
                                          </td>
                                        </tr>
                                      </tbody>
                                      <tbody class="cm-table-rowgroup">
                                        <tr class="cm-table-row-header">
                                          <td class="cm-table-cell-head" colspan="5">
                                          <b>Uncategorized Expense</b>
                                          <span class="cm-q-icon">
                                             <a class="btn btn-sm"  href="#">
                                                 <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                                             </a>
                                          </span>pan>
                                          </td>
                                        </tr>
                                        <tr class="cm-table-row">
                                          <td class="cm-table-cell" colspan="1"></td>
                                          <td class="cm-table-cell" colspan="4">
                                            <span class="wv-text wv-text--fine-print">
                                              <span class="chart-of-accounts__no-accounts-in-subgroup">
                                                <em class="wv-text--emphasized">Uncategorized Expense</em>
                                              </span>
                                            </span>
                                          </td>
                                        </tr>

                                      </tbody>
                                      <tbody class="cm-table-rowgroup">
                                        <tr class="cm-table-row-header">
                                          <td class="cm-table-cell-head" colspan="5">
                                            <b> Loss On Foreign Exchange</b>
                                            <span class="cm-q-icon">
                                               <a class="btn btn-sm"  href="#">
                                                   <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                                               </a>
                                            </span>
                                          </td>
                                        </tr>
                                        <tr class="cm-table-row">
                                          <td class="cm-table-cell" colspan="1"></td>
                                          <td class="cm-table-cell" colspan="4">
                                            <span class="wv-text wv-text--fine-print">
                                              <span class="chart-of-accounts__no-accounts-in-subgroup">
                                                <em class="wv-text--emphasized">Loss on Foreign Exchange</em>
                                              </span>
                                            </span>
                                          </td>
                                        </tr>

                                      </tbody>
                                    </table>
                                 </div>


                                  <div class="step-content" id="stepContent5">
                                        <table class="cm-table table table-hover">
                                                <tbody class="cm-table-rowgroup">
                                                    <tr class="cm-table-row-header">
                                                      <td class="cm-table-cell-head" colspan="5">
                                                       <b> Business Owner Contribution</b>
                                                       <span class="cm-q-icon">
                                                          <a class="btn btn-sm"  href="#">
                                                              <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                                                          </a>
                                                       </span>
                                                      </td>
                                                    </tr>
                                                    <tr class="cm-table-row">
                                                      <td class="cm-table-cell" colspan="1"></td>
                                                      <td class="cm-table-cell" colspan="1">
                                                        <span class="wv-text wv-text--fine-print">
                                                          <span class="chart-of-accounts__no-accounts-in-subgroup">
                                                            <em class="wv-text--emphasized">	Owner Investment / Drawings No transactions for this account</em>
                                                          </span>
                                                        </span>
                                                      </td>
                                                      <td class="cm-table-cell" colspan="1"></td>
                                                      <td class="cm-table-cell" colspan="1"></td>
                                                      <td class="cm-table-cell" colspan="1">
                                                        <a class="btn  btn-sm float-right"  data-target="#addnewAccountMD2" data-toggle="modal" href="#"><i class="os-icon os-icon-pencil-2"></i></a>
                                                      </td>
                                                    </tr>
                                                    <tr class="cm-table-row">
                                                      <td class="cm-table-cell" colspan="1"></td>
                                                      <td class="cm-table-cell add-new-btn" colspan="4">
                                                            <a class="add-task-btn" data-target="#addnewAccountMD2" data-toggle="modal" href="#">
                                                              <i class="os-icon os-icon-ui-22"></i>
                                                              <span>Add a new account</span>
                                                            </a>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                  <tbody class="cm-table-rowgroup">
                                                    <tr class="cm-table-row-header">
                                                      <td class="cm-table-cell-head" colspan="5">
                                                       <b> Retained Earnings: Profit and Business Owner Drawing</b>
                                                       <span class="cm-q-icon">
                                                          <a class="btn btn-sm"  href="#">
                                                              <i class="fa fa-exclamation-circle" data-toggle="tooltip" title="" data-original-title="Categories help you track and organize all types of amounts (income, expense, loans, and much more) so Wave can tell you where your money is going and coming from, and how much money you have left."></i>
                                                          </a>
                                                       </span>
                                                      </td>
                                                    </tr>
                                                    <tr class="cm-table-row">
                                                      <td class="cm-table-cell" colspan="1"></td>
                                                      <td class="cm-table-cell" colspan="1">
                                                        <span class="wv-text wv-text--fine-print">
                                                          <span class="chart-of-accounts__no-accounts-in-subgroup">
                                                            <em class="wv-text--emphasized">	Owner's Equity No transactions for this account.</em>
                                                          </span>
                                                        </span>
                                                      </td>
                                                      <td class="cm-table-cell" colspan="1"></td>
                                                      <td class="cm-table-cell" colspan="1"></td>
                                                      <td class="cm-table-cell" colspan="1">
                                                        <a class="btn  btn-sm float-right"  data-target="#addnewAccountMD2" data-toggle="modal" href="#"><i class="os-icon os-icon-pencil-2"></i></a>
                                                      </td>
                                                    </tr>
                                                    <tr class="cm-table-row">
                                                      <td class="cm-table-cell" colspan="1"></td>
                                                      <td class="cm-table-cell add-new-btn" colspan="4">
                                                            <a class="add-task-btn" data-target="#addnewAccountMD1" data-toggle="modal" href="#">
                                                              <i class="os-icon os-icon-ui-22"></i>
                                                              <span>Add a new account</span>
                                                            </a>
                                                      </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                         </div>
                                     </div>
                                 </div>
             <!----------
                       Modal of Add new Accounts
             ---------->

                             <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="addnewAccountMD1" role="dialog" tabindex="-1">
                                   <div class="modal-dialog" role="document">
                                     <div class="modal-content">
                                       <div class="modal-header">
                                         <h5 class="element-title" id="exampleModalLabel">
                                          Add an Account
                                         </h5>
                                         <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> &times;</span></button>
                                       </div>
                                       <div class="modal-body">
                                         <form>
                                           <div class="row">
                                             <div class="form-group col-sm-10">
                                               <label class="col-sm-4 label-star" for="">Account Type</label>
                                               <select class="form-control col-sm-6 float-right" name="">
                                                  <option value="">select & search</option>
                                                  <option value="">select & search</option>
                                                  <option value="">select & search</option>
                                               </select>
                                             </div>
                                           </div>
                                           <div class="row">
                                              <div class="form-group col-sm-10">
                                                <label class="col-sm-6 label-star" for="">Account Name</label>
                                                <input type="text" class="form-control col-sm-6 float-right" placeholder="">
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="form-group col-sm-10">
                                                <label class="col-sm-6" for="">Account ID</label>
                                                <input type="text" class="form-control col-sm-6 float-right" placeholder="">
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="form-group col-sm-10">
                                                <label class="col-sm-6" for="">Description</label>
                                                <input type="text" class="form-control col-sm-6 float-right" placeholder="">
                                              </div>
                                           </div>
                                         </form>
                                       </div>
                                       <div class="modal-footer">
                                         <button class="btn btn-danger btn-radius" data-dismiss="modal" type="button"> Close</button>
                                         <button class="btn btn-primary btn-radius " type="button"> Save</button>
                                       </div>
                                     </div>
                                   </div>
                                 </div>


                                 <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="addnewAccountMD2" role="dialog" tabindex="-1">
                                   <div class="modal-dialog" role="document">
                                     <div class="modal-content">
                                       <div class="modal-header">
                                         <h5 class="element-title" id="exampleModalLabel">
                                          Add an Account
                                         </h5>
                                         <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> &times;</span></button>
                                       </div>
                                       <div class="modal-body">
                                         <form>
                                           <!---search and select--->
                                           <div class="row">
                                             <div class="form-group col-sm-10">
                                               <label class="col-sm-4 label-star" for="">Account Type</label>
                                               <select class="form-control col-sm-6 float-right" name="">
                                                  <option value="">select & search</option>
                                                  <option value="">select & search</option>
                                                  <option value="">select & search</option>
                                               </select>
                                             </div>
                                           </div>
                                           <div class="row">
                                              <div class="form-group col-sm-10">
                                                <label class="col-sm-6 label-star" for="">Account Name</label>
                                                <input type="text" class="form-control col-sm-6 float-right" placeholder="">
                                              </div>
                                           </div>
                                           <!---search and select--->
                                           <div class="row">
                                             <div class="form-group col-sm-10">
                                               <label class="col-sm-4 " for="">Account Currency</label>
                                               <select class="form-control col-sm-6 float-right" name="">
                                                  <option value="">BDT (৳) - Taka</option>
                                                  <option value="">USD ($) - U.S. dollar</option>
                                                  <option value="">select & search</option>
                                               </select>
                                             </div>
                                           </div>
                                           <div class="row">
                                              <div class="form-group col-sm-10">
                                                <label class="col-sm-6" for="">Account ID</label>
                                                <input type="text" class="form-control col-sm-6 float-right" placeholder="">
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="form-group col-sm-10">
                                                <label class="col-sm-6" for="">Description</label>
                                                <input type="text" class="form-control col-sm-6 float-right" placeholder="">
                                              </div>
                                           </div>
                                         </form>
                                       </div>
                                       <div class="modal-footer">
                                         <button class="btn btn-danger btn-radius" data-dismiss="modal" type="button"> Close</button>
                                         <button class="btn btn-primary btn-radius" type="button"> Save</button>
                                       </div>
                                     </div>
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
