
<div class="col-md-12">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrap-fpanel">
                <div class="panel panel-info" data-collapsed="0">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>Add New Leave Application</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-offset-1">
                            <form id="form" action="<?php echo base_url() ?>employee/dashboard/save_leave_application" method="post"  enctype="multipart/form-data" class="form-horizontal">
                                <div class="panel_controls">
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-3 control-label">Leave Category<span class="required"> *</span></label>

                                        <div class="col-sm-5">
                                            <select name="leave_category_id" class="form-control" required >
                                                <option value="" >Select Leave Category...</option>
                                                <?php foreach ($all_leave_category as $v_category) : ?>
                                                    <option value="<?php echo $v_category->leave_category_id ?>">
                                                        <?php echo $v_category->category ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Start Date <span class="required"> *</span></label>

                                        <div class="col-sm-5">
                                            <div class="input-group">
                                                <input type="text" name="leave_start_date"  required class="form-control datepicker" value="" data-format="dd-mm-yyyy">
                                                <div class="input-group-addon">
                                                    <a href="#"><i class="entypo-calendar"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">End Date <span class="required"> *</span></label>

                                        <div class="col-sm-5">
                                            <div class="input-group">
                                                <input type="text" name="leave_end_date"   required class="form-control datepicker" value="" data-format="dd-mm-yyyy">
                                                <div class="input-group-addon">
                                                    <a href="#"><i class="entypo-calendar"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-3 control-label">Reason</label>

                                        <div class="col-sm-5">
                                            <textarea id="present" name="reason" class="form-control" rows="6"></textarea>
                                        </div>
                                    </div>                            


                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-5">
                                            <button type="submit" id="sbtn" name="sbtn" value="1" class="btn btn-primary">Submit</button>
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
</div>

