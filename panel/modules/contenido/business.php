 <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Menu
                                <small>Business</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                            <!-- BEGIN THEME PANEL -->
                            <div class="btn-group btn-theme-panel">
                                <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-settings"></i>
                                </a>
                                <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <h3>THEME</h3>
                                            <ul class="theme-colors">
                                                <li class="theme-color theme-color-default" data-theme="default">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Dark Header</span>
                                                </li>
                                                <li class="theme-color theme-color-light active" data-theme="light">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Light Header</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                            <h3>LAYOUT</h3>
                                            <ul class="theme-settings">
                                                <li> Theme Style
                                                    <select class="layout-style-option form-control input-small input-sm">
                                                        <option value="square">Square corners</option>
                                                        <option value="rounded" selected="selected">Rounded corners</option>
                                                    </select>
                                                </li>
                                                <li> Layout
                                                    <select class="layout-option form-control input-small input-sm">
                                                        <option value="fluid" selected="selected">Fluid</option>
                                                        <option value="boxed">Boxed</option>
                                                    </select>
                                                </li>
                                                <li> Header
                                                    <select class="page-header-option form-control input-small input-sm">
                                                        <option value="fixed" selected="selected">Fixed</option>
                                                        <option value="default">Default</option>
                                                    </select>
                                                </li>
                                                <li> Top Dropdowns
                                                    <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                                        <option value="light">Light</option>
                                                        <option value="dark" selected="selected">Dark</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Mode
                                                    <select class="sidebar-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Menu
                                                    <select class="sidebar-menu-option form-control input-small input-sm">
                                                        <option value="accordion" selected="selected">Accordion</option>
                                                        <option value="hover">Hover</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Position
                                                    <select class="sidebar-pos-option form-control input-small input-sm">
                                                        <option value="left" selected="selected">Left</option>
                                                        <option value="right">Right</option>
                                                    </select>
                                                </li>
                                                <li> Footer
                                                    <select class="page-footer-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END THEME PANEL -->
                        </div>
                        <!-- END PAGE TOOLBAR -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Menu</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
					
					
						<?php 

 $sql_destacada =  "SELECT * FROM sis_terms order by term_id asc ";


?>
                    <div class="portlet light bordered form-fit">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="icon-user font-blue-hoki"></i>
                                                    <span class="caption-subject font-blue-hoki bold uppercase">New Bisiness</span>
                                                    <span class="caption-helper"></span>
                                                </div>
                                                <div class="actions">
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-cloud-upload"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-wrench"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="#" class="form-horizontal form-bordered form-label-stripped">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">First Name</label>
                                                            <div class="col-md-9">
                                                                <input type="text" placeholder="small" class="form-control" />
                                                                <span class="help-block"> This is inline help </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Last Name</label>
                                                            <div class="col-md-9">
                                                                <input type="text" placeholder="medium" class="form-control" />
                                                                <span class="help-block"> This is inline help </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Gender</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control">
                                                                    <option value="">Male</option>
                                                                    <option value="">Female</option>
                                                                </select>
                                                                <span class="help-block"> Select your gender. </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Date of Birth</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Category</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control select2_category">
                                                                    <option value="Category 1">Category 1</option>
                                                                    <option value="Category 2">Category 2</option>
                                                                    <option value="Category 3">Category 5</option>
                                                                    <option value="Category 4">Category 4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Multi-Value Select</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control select2_sample1" multiple>
                                                                    <optgroup label="NFC EAST">
                                                                        <option>Dallas Cowboys</option>
                                                                        <option>New York Giants</option>
                                                                        <option>Philadelphia Eagles</option>
                                                                        <option>Washington Redskins</option>
                                                                    </optgroup>
                                                                    <optgroup label="NFC NORTH">
                                                                        <option>Chicago Bears</option>
                                                                        <option>Detroit Lions</option>
                                                                        <option>Green Bay Packers</option>
                                                                        <option>Minnesota Vikings</option>
                                                                    </optgroup>
                                                                    <optgroup label="NFC SOUTH">
                                                                        <option>Atlanta Falcons</option>
                                                                        <option>Carolina Panthers</option>
                                                                        <option>New Orleans Saints</option>
                                                                        <option>Tampa Bay Buccaneers</option>
                                                                    </optgroup>
                                                                    <optgroup label="NFC WEST">
                                                                        <option>Arizona Cardinals</option>
                                                                        <option>St. Louis Rams</option>
                                                                        <option>San Francisco 49ers</option>
                                                                        <option>Seattle Seahawks</option>
                                                                    </optgroup>
                                                                    <optgroup label="AFC EAST">
                                                                        <option>Buffalo Bills</option>
                                                                        <option>Miami Dolphins</option>
                                                                        <option>New England Patriots</option>
                                                                        <option>New York Jets</option>
                                                                    </optgroup>
                                                                    <optgroup label="AFC NORTH">
                                                                        <option>Baltimore Ravens</option>
                                                                        <option>Cincinnati Bengals</option>
                                                                        <option>Cleveland Browns</option>
                                                                        <option>Pittsburgh Steelers</option>
                                                                    </optgroup>
                                                                    <optgroup label="AFC SOUTH">
                                                                        <option>Houston Texans</option>
                                                                        <option>Indianapolis Colts</option>
                                                                        <option>Jacksonville Jaguars</option>
                                                                        <option>Tennessee Titans</option>
                                                                    </optgroup>
                                                                    <optgroup label="AFC WEST">
                                                                        <option>Denver Broncos</option>
                                                                        <option>Kansas City Chiefs</option>
                                                                        <option>Oakland Raiders</option>
                                                                        <option>San Diego Chargers</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Membership</label>
                                                            <div class="col-md-9">
                                                                <div class="radio-list">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Street</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">City</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">State</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Post Code</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"> </div>
                                                        </div>
                                                        <div class="form-group last">
                                                            <label class="control-label col-md-3">Country</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control"> </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn green">
                                                                    <i class="fa fa-check"></i> Submit</button>
                                                                <button type="button" class="btn default">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>