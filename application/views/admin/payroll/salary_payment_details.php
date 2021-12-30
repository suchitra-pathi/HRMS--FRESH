<div id="printableArea"> 
    <div class="row">
        <div class="col-sm-12" data-spy="scroll" data-offset="0">                            
            <div class="panel panel-default">            
                <!-- main content -->
                <div class="panel-heading hidden-print">
                    <div class="row">
                        <div  class="col-lg-12 panel-title">
                            <h3 class="col-lg-4 col-md-4 col-sm-4">Payment Salary Detail</h3>
                            <div class="pull-right">                                                               
                                <span><?php echo btn_pdf('admin/payroll/payment_salary_pdf/' . $salary_payment_info->salary_payment_id); ?></span>
                                <button class="margin btn-print" type="button" data-toggle="tooltip" title="Print" onclick="printDiv('printableArea')"><?php echo btn_print(); ?></button>                                                              
                            </div>
                        </div>
                    </div>
                </div>
                <br />            
                <div class="show_print" style="width: 100%; border-bottom: 2px solid black;">
                    <table style="width: 100%; vertical-align: middle;">
                        <tr>
                            <?php
                            $genaral_info = $this->session->userdata('genaral_info');
                            if (!empty($genaral_info)) {
                                foreach ($genaral_info as $info) {
                                    ?>
                                    <td style="width: 35px; border: 0px;">
                                        <img style="width: 50px;height: 50px" src="<?php echo base_url() . $info->logo ?>" alt="" class="img-circle"/>
                                    </td>
                                    <td style="border: 0px;">
                                        <p style="margin-left: 10px; font: 14px lighter;"><?php echo $info->name ?></p>
                                    </td>
                                    <?php
                                }
                            } else {
                                ?>
                                <td style="width: 35px; border: 0px;">
                                    <img style="width: 50px;height: 50px" src="<?php echo base_url() ?>img/logo.png" alt="Logo" class="img-circle"/>
                                </td>
                                <td style="border: 0px;">
                                    <p style="margin-left: 10px; font: 14px lighter;">Human Resource Management System</p>
                                </td>
                                <?php
                            }
                            ?>
                        </tr>
                    </table>
                </div><!--            show when print start-->
                <br/>
                <div class="col-lg-12 well">
                    <div class="row">                            
                        <div class="col-lg-2 col-sm-2">
                            <div class="fileinput-new thumbnail" style="width: 144px; height: 158px; margin-top: 14px; margin-left: 16px; background-color: #EBEBEB;">
                                <?php if ($salary_payment_info->photo): ?>
                                    <img src="<?php echo base_url() . $salary_payment_info->photo; ?>" style="width: 142px; height: 148px; border-radius: 3px;" >  
                                <?php else: ?>
                                    <img src="<?php echo base_url() ?>/img/user.png" alt="Employee_Image">
                                <?php endif; ?>         
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-1">
                            &nbsp;
                        </div>
                        <div class="col-lg-8 col-sm-8 ">
                            <div>
                                <div style="margin-left: 20px;">                                        
                                    <h3><?php echo "$salary_payment_info->first_name " . "$salary_payment_info->last_name"; ?></h3>
                                    <hr />
                                    <table class="table-hover">
                                        <tr>
                                            <td><strong>Employee ID</strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><?php echo "$salary_payment_info->employment_id"; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Department</strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><?php echo "$salary_payment_info->department_name"; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Designation</strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><?php echo "$salary_payment_info->designations"; ?></td>
                                        </tr>                                                                                
                                        <tr>
                                            <td><strong>Joining Date</strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><?php echo date('d M Y', strtotime($salary_payment_info->joining_date)); ?></td>
                                        </tr>                                            
                                    </table>                                                                           
                                </div>
                            </div>
                        </div>

                    </div>
                </div>                
            </div>                
        </div>                
    </div>                

    <div class="row">
        <div class="wrap-fpanel form-horizontal">
            <!-- ********************************* Salary Details Panel ***********************-->
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>Salary Details</strong>
                        </div>
                    </div>
                    <div class="panel-body">                        
                        <div class="">
                            <label for="field-1" class="col-sm-3 control-label"><strong>Salary Month :</strong> </label>                    
                            <p class="form-control-static"><?php echo date('F,Y', strtotime($salary_payment_info->payment_for_month)); ?></p>                    
                        </div>
                        <div class="">
                            <label for="field-1" class="col-sm-3 control-label"><strong>Basic Salary :</strong> </label>                    
                            <p class="form-control-static"><?php
                                if (!empty($genaral_info[0]->currency)) {
                                    $currency = $genaral_info[0]->currency;
                                } else {
                                    $currency = '$';
                                }
                                echo $currency . ' ' . number_format($salary_payment_info->basic_salary, 2);
                                ?></p>                    
                        </div>
                    </div>
                </div>
            </div><!-- ***************** Salary Details  Ends *********************-->

            <!-- ******************-- Allowance Panel Start **************************-->
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>Allowances</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php if (!empty($salary_payment_info->house_rent_allowance)): ?>
                            <div class="">
                                <label class="col-sm-6 control-label" ><strong>House Rent Allowance  : </strong></label>
                                <p class="form-control-static"><?php
                                    if (!empty($genaral_info[0]->currency)) {
                                        $currency = $genaral_info[0]->currency;
                                    } else {
                                        $currency = '$';
                                    }
                                    echo $currency . ' ' . number_format($salary_payment_info->house_rent_allowance, 2);
                                    ?></p>                         
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($salary_payment_info->medical_allowance)): ?>
                            <div class="">
                                <label class="col-sm-6 control-label" ><strong>Medical Allowance  : </strong></label>
                                <p class="form-control-static"><?php
                                    if (!empty($genaral_info[0]->currency)) {
                                        $currency = $genaral_info[0]->currency;
                                    } else {
                                        $currency = '$';
                                    }
                                    echo $currency . ' ' . number_format($salary_payment_info->medical_allowance, 2);
                                    ?></p>                        
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($salary_payment_info->special_allowance)): ?>
                            <div class="">
                                <label class="col-sm-6 control-label" ><strong>Special Allowance  : </strong></label>
                                <p class="form-control-static"><?php
                                    if (!empty($genaral_info[0]->currency)) {
                                        $currency = $genaral_info[0]->currency;
                                    } else {
                                        $currency = '$';
                                    }
                                    echo $currency . ' ' . number_format($salary_payment_info->special_allowance, 2);
                                    ?></p>                         
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($salary_payment_info->fuel_allowance)): ?>
                            <div class="">
                                <label class="col-sm-6 control-label" ><strong>Fuel Allowance  : </strong></label>
                                <p class="form-control-static"><?php
                                    if (!empty($genaral_info[0]->currency)) {
                                        $currency = $genaral_info[0]->currency;
                                    } else {
                                        $currency = '$';
                                    }
                                    echo $currency . ' ' . number_format($salary_payment_info->fuel_allowance, 2);
                                    ?></p>                         
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($salary_payment_info->phone_bill_allowance)): ?>
                            <div class="">
                                <label class="col-sm-6 control-label" ><strong>Phone Bill Allowance  : </strong></label>
                                <p class="form-control-static"><?php
                                    if (!empty($genaral_info[0]->currency)) {
                                        $currency = $genaral_info[0]->currency;
                                    } else {
                                        $currency = '$';
                                    }
                                    echo $currency . ' ' . number_format($salary_payment_info->phone_bill_allowance, 2);
                                    ?></p>                         
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($salary_payment_info->other_allowance)): ?>
                            <div class="">
                                <label class="col-sm-6 control-label" ><strong>Other Allowance  : </strong></label>
                                <p class="form-control-static"><?php
                                    if (!empty($genaral_info[0]->currency)) {
                                        $currency = $genaral_info[0]->currency;
                                    } else {
                                        $currency = '$';
                                    }
                                    echo $currency . ' ' . number_format($salary_payment_info->other_allowance, 2);
                                    ?></p>                        
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div><!-- ********************Allowance End ******************-->

            <!-- ************** Deduction Panel Column  **************-->
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>Deductions</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php if (!empty($salary_payment_info->provident_fund)): ?>
                            <div class="">
                                <label class="col-sm-6 control-label" ><strong>Provident Fund  : </strong></label>
                                <p class="form-control-static"><?php
                                    if (!empty($genaral_info[0]->currency)) {
                                        $currency = $genaral_info[0]->currency;
                                    } else {
                                        $currency = '$';
                                    }
                                    echo $currency . ' ' . number_format($salary_payment_info->provident_fund, 2);
                                    ?></p>                         
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($salary_payment_info->tax_deduction)): ?>
                            <div class="">
                                <label class="col-sm-6 control-label" ><strong>Tax Deduction  : </strong></label>
                                <p class="form-control-static"><?php
                                    if (!empty($genaral_info[0]->currency)) {
                                        $currency = $genaral_info[0]->currency;
                                    } else {
                                        $currency = '$';
                                    }
                                    echo $currency . ' ' . number_format($salary_payment_info->tax_deduction, 2);
                                    ?></p>                        
                            </div>    
                        <?php endif; ?>
                        <?php if (!empty($salary_payment_info->other_deduction)): ?>
                            <div class="">
                                <label class="col-sm-6 control-label" ><strong>Other Deduction  : </strong></label>
                                <p class="form-control-static"><?php
                                    if (!empty($genaral_info[0]->currency)) {
                                        $currency = $genaral_info[0]->currency;
                                    } else {
                                        $currency = '$';
                                    }
                                    echo $currency . ' ' . number_format($salary_payment_info->other_deduction, 2);
                                    ?></p>                       
                            </div>
                        <?php endif; ?>
                    </div>
                </div>                    
            </div><!-- ****************** Deduction End  *******************-->

            <!-- ************** Total Salary Details Start  **************-->
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>Total Salary Details</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="">
                            <label class="col-sm-6 control-label" ><strong>Gross Salary  : </strong></label>
                            <p class="form-control-static"><?php
                                if (!empty($genaral_info[0]->currency)) {
                                    $currency = $genaral_info[0]->currency;
                                } else {
                                    $currency = '$';
                                }
                                $gross = $salary_payment_info->basic_salary + $salary_payment_info->house_rent_allowance + $salary_payment_info->medical_allowance + $salary_payment_info->special_allowance + $salary_payment_info->fuel_allowance + $salary_payment_info->phone_bill_allowance + $salary_payment_info->other_allowance;
                                echo $currency . ' ' . number_format($gross, 2);
                                ?></p>
                        </div>
                        <div class="">
                            <label class="col-sm-6 control-label" ><strong>Total Deduction  : </strong></label>
                            <p class="form-control-static"><?php
                                if (!empty($genaral_info[0]->currency)) {
                                    $currency = $genaral_info[0]->currency;
                                } else {
                                    $currency = '$';
                                }
                                $deduction = $salary_payment_info->tax_deduction + $salary_payment_info->provident_fund + $salary_payment_info->other_deduction;
                                echo $currency . ' ' . number_format($deduction, 2);
                                ?></p>
                        </div>                                                        
                        <div class="">
                            <label class="col-sm-6 control-label" ><strong>Net Salary  : </strong></label>
                            <p class="form-control-static"><?php
                                if (!empty($genaral_info[0]->currency)) {
                                    $currency = $genaral_info[0]->currency;
                                } else {
                                    $currency = '$';
                                }
                                $net_salary = $gross - $deduction;
                                echo $currency . ' ' . number_format($net_salary, 2);
                                ?></p>
                        </div>                                                        
                        <?php if (!empty($salary_payment_info->fine_deduction)): ?>
                            <div class="">
                                <label class="col-sm-6 control-label" ><strong>Fine Deduction  : </strong></label>
                                <p class="form-control-static"><?php
                                    if (!empty($genaral_info[0]->currency)) {
                                        $currency = $genaral_info[0]->currency;
                                    } else {
                                        $currency = '$';
                                    }
                                    echo $currency . ' ' . number_format($salary_payment_info->fine_deduction, 2);
                                    ?></p>
                            </div>
                        <?php endif; ?>                        
                        <div class="">
                            <label class="col-sm-6 control-label" ><strong>Paid Amount  : </strong></label>
                            <p class="form-control-static"><?php
                                if (!empty($genaral_info[0]->currency)) {
                                    $currency = $genaral_info[0]->currency;
                                } else {
                                    $currency = '$';
                                }
                                if (!empty($salary_payment_info->fine_deduction)) {
                                    $paid_amount = $net_salary - $salary_payment_info->fine_deduction;
                                } else {
                                    $paid_amount = $net_salary;
                                }
                                echo $currency . ' ' . number_format($paid_amount, 2);
                                ?></p>
                        </div>                        
                    </div>
                </div>                    
            </div><!-- ****************** Total Salary Details End  *******************-->
        </div>  
    </div>  

    <script type="text/javascript">
        function printDiv(printableArea) {
            var printContents = document.getElementById(printableArea).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>

