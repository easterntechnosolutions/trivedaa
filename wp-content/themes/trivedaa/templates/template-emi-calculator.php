<?php   
/*
Template Name: EMI Calculator
*/

get_header();
get_template_part('parts/page-title');?>

<section id="main">
	<div class="container" id="emi-calculator"  style="padding-left:0; padding-right: 0;">

    <div class="tab-content" id="emiTab">
        <div class="tab-pane fade in active" id="loan-calculator">
            <div class="calculatorcontainer">
            <div class="emicalculatorcontainer">
                <div id="loanformcontainer" class="row">
                    <div id="emicalculatordashboard" class="col-sm-12">
                        <ul class="loanproduct-nav">
                            <li id="home-loan" class=""><a href="#">Home Loan</a></li>
                            <li id="personal-loan" class=""><a href="#">Personal Loan</a></li>
                        </ul>
                        <div class="cleardiv"></div>
                        <div id="emicalculatorinnerformwrapper">
                            <form id="emicalculatorform" class="">
                                <div class="form-horizontal" id="emicalculatorinnerform">
                                    <div class="form-group lamount">
                                        <label class="col-md-4 control-label" for="loanamount"><strong>Car Loan Amount</strong></label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input class="form-control" id="loanamount" name="loanamount" value="25,00,000" type="text"> <span class="input-group-addon">₹</span></div>
                                        </div>
                                    </div>
                                    <div id="loanamountslider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 20%;"></span></div>
                                    <div id="loanamountsteps" class="steps"><span class="tick" style="left: 0%;">|<br><span class="marker">0</span></span><span class="tick" style="left: 25%;">|<br><span class="marker">5L</span></span><span class="tick" style="left: 50%;">|<br><span class="marker">10L</span></span><span class="tick" style="left: 75%;">|<br><span class="marker">15L</span></span><span class="tick" style="left: 100%;">|<br><span class="marker">20L</span></span>
                                    </div>
                                    <div class="sep form-group lint">
                                        <label class="col-md-4 control-label" for="loaninterest">Interest Rate</label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input class="form-control" id="loaninterest" name="loaninterest" value="10.5" type="text"> <span class="input-group-addon">%</span></div>
                                        </div>
                                    </div>
                                    <div id="loaninterestslider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 50%;"></span></div>
                                    <div id="loanintereststeps" class="steps"><span class="tick" style="left: 0%;">|<br><span class="marker">5</span></span><span class="tick" style="left: 16.67%;">|<br><span class="marker">7.5</span></span><span class="tick" style="left: 33.34%;">|<br><span class="marker">10</span></span><span class="tick" style="left: 50%;">|<br><span class="marker">12.5</span></span><span class="tick" style="left: 66.67%;">|<br><span class="marker">15</span></span><span class="tick" style="left: 83.34%;">|<br><span class="marker">17.5</span></span><span class="tick" style="left: 100%;">|<br><span class="marker">20</span></span>
                                    </div>
                                    <div class="sep form-group form-inline lterm">
                                        <label class="col-md-4 control-label" for="loanterm">Loan Tenure</label>
                                        <div class="col-md-6">
                                            <div class="loantermwrapper">
                                                <div class="btn-group float-right gutter-left no-gutter-right tenure-choice" data-toggle="buttons">
                                                    <label class="btn btn-default active">
                                                        <input type="radio" name="loantenure" id="loanyears" value="loanyears" tabindex="4" autocomplete="off" checked="checked">Yr </label>
                                                    <label class="btn btn-default">
                                                        <input type="radio" name="loantenure" id="loanmonths" value="loanmonths" tabindex="5" autocomplete="off">Mo </label>
                                                </div>
                                                <div class="input-group fill-width">
                                                    <input class="form-control" id="loanterm" name="loanterm" value="20" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="loantermslider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 71.4286%;"></span></div>
                                    <div id="loantermsteps" class="steps"><span class="tick" style="left: 0%;">|<br><span class="marker">0</span></span><span class="tick" style="left: 14.29%;">|<br><span class="marker">1</span></span><span class="tick" style="left: 28.57%;">|<br><span class="marker">2</span></span><span class="tick" style="left: 42.86%;">|<br><span class="marker">3</span></span><span class="tick" style="left: 57.14%;">|<br><span class="marker">4</span></span><span class="tick" style="left: 71.43%;">|<br><span class="marker">5</span></span><span class="tick" style="left: 85.71%;">|<br><span class="marker">6</span></span><span class="tick" style="left: 100%;">|<br><span class="marker">7</span></span>
                                    </div>
                                    <div id="leschemewrapper" class="sep toggle-visible">
                                        <div class="form-group escheme">
                                            <label class="col-md-4 control-label" for="emischeme">EMI Scheme</label>
                                            <div class="col-md-8">
                                                <div class="input-group emischemes">
                                                    <div class="btn-group add-check" data-toggle="buttons">
                                                        <label class="btn btn-default">
                                                            <input type="radio" name="emischeme" id="emiadvance" value="emiadvance" tabindex="4" autocomplete="off">EMI in Advance </label>
                                                        <label class="btn btn-default active">
                                                            <input type="radio" name="emischeme" id="emiarrears" value="emiarrears" tabindex="5" autocomplete="off" checked="checked">EMI in Arrears </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input id="loanproduct" name="loanproduct" value="car-loan" type="hidden">
                                <input id="loanstartdate" name="loanstartdate" value="Sep 2016" type="hidden">
                                <input id="loandata" name="loandata" value="" type="hidden">
                                <input id="calcversion" name="calcversion" value="4.0" type="hidden">
                            </form>
                            <div class="row gutter-left gutter-right">
                                <div id="emipaymentsummary" class="col-sm-5 col-md-6 no-gutter-left no-gutter-right">
                                    <div id="emiamount">
                                        <h4>Loan EMI</h4>
                                        <p>₹<span>8,999</span></p>
                                    </div>
                                    <div id="emitotalinterest">
                                        <h4>Total Interest Payable</h4>
                                        <p>₹<span>1,39,951</span></p>
                                    </div>
                                    <div id="emitotalamount" class="column-last">
                                        <h4>Total Payment<br>(Principal + Interest)</h4>
                                        <p>₹<span>5,39,951</span></p>
                                    </div>
                                </div>
                                <div id="emipiechart" class="no-gutter-left no-gutter-right col-sm-7 col-md-6 highcharts-container col-xs-12" data-highcharts-chart="16">
                                    <div class="highcharts-container" id="highcharts-48" style="position: relative; overflow: hidden; width: 351px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Lato, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: bold; color: rgb(51, 51, 51);">
                                        <svg version="1.1" style="font-family:Lato, Helvetica Neue, Helvetica, Arial, sans-serif;font-size:12px;font-weight:bold;color:#333333;fill:#333333;" xmlns="http://www.w3.org/2000/svg" width="351" height="400">
                                            <desc>Created with Highcharts 4.0.1</desc>
                                            <defs>
                                                <clippath id="highcharts-49">
                                                    <rect x="0" y="0" width="331" height="299"></rect>
                                                </clippath>
                                            </defs>
                                            <rect x="0" y="0" width="351" height="400" strokeWidth="0" fill="transparent" class=" highcharts-background"></rect>
                                            <rect x="10" y="41" width="331" height="299" fill="transparent"></rect>
                                            <g class="highcharts-series-group" zIndex="3">
                                                <g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(10,41) scale(1 1)" style="cursor:pointer;">
                                                    <path fill="#88A825" d="M 165.47158758808453 10.000002893423499 A 139.5 139.5 0 1 1 26.239390159796102 157.66899913909327 L 165.5 149.5 A 0 0 0 1 0 165.5 149.5 Z" stroke="#FFFFFF" stroke-width="0.00001" stroke-linejoin="round" transform="translate(0,0)"></path>
                                                    <path fill="#ED8C2B" d="M 26.231290792317623 157.52973446796395 A 139.5 139.5 0 0 1 165.30623729863902 10.00013456631737 L 165.5 149.5 A 0 0 0 0 0 165.5 149.5 Z" stroke="#FFFFFF" stroke-width="0.00001" stroke-linejoin="round" transform="translate(-7,-7)"></path>
                                                </g>
                                                <g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(10,41) scale(1 1)"></g>
                                            </g>
                                            <text x="176" text-anchor="middle" class="highcharts-title" zIndex="4" style="color:#333333;font-size:18px;font:bold 14px Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;width:287px;" y="25">
                                                <tspan>Break-up of Total Payment</tspan>
                                            </text>
                                            <g class="highcharts-data-labels highcharts-tracker" visibility="visible" zIndex="6" transform="translate(10,41) scale(1 1)" opacity="1" style="cursor:pointer;">
                                                <g zIndex="1" style="cursor:pointer;" transform="translate(228,215)">
                                                    <text x="1.5" zIndex="1" style="font-size:11px;color:#FFFFFF;fill:#FFFFFF;" y="15">
                                                        <tspan style="font-weight:bold">74.1%</tspan>
                                                    </text>
                                                </g>
                                                <g zIndex="1" style="cursor:pointer;" transform="translate(69,64)">
                                                    <text x="1.5" zIndex="1" style="font-size:11px;color:#FFFFFF;fill:#FFFFFF;" y="15">
                                                        <tspan style="font-weight:bold">25.9%</tspan>
                                                    </text>
                                                </g>
                                            </g>
                                            <g class="highcharts-legend" zIndex="7" transform="translate(35,360)">
                                                <rect x="0.5" y="0.5" width="280" height="24" strokeWidth="1" stroke="#DDDDDD" stroke-width="1" fill="none" visibility="visible"></rect>
                                                <g zIndex="1">
                                                    <g>
                                                        <g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)">
                                                            <text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;font-family:Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" text-anchor="start" zIndex="2">
                                                                <tspan>Principal Loan Amount</tspan>
                                                            </text>
                                                            <rect x="0" y="4" width="16" height="12" zIndex="3" fill="#88A825"></rect>
                                                        </g>
                                                        <g class="highcharts-legend-item" zIndex="1" transform="translate(178,3)">
                                                            <text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;font-family:Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" text-anchor="start" zIndex="2">
                                                                <tspan>Total Interest</tspan>
                                                            </text>
                                                            <rect x="0" y="4" width="16" height="12" zIndex="3" fill="#ED8C2B"></rect>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;font:14px Lato, Helvetica Neue, Helvetica, Arial, sans-serif;" transform="translate(0,-9999)">
                                                <path fill="none" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0" stroke-width="5" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" transform="translate(1, 1)"></path>
                                                <path fill="none" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0" stroke-width="3" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" transform="translate(1, 1)"></path>
                                                <path fill="none" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0" stroke-width="1" isShadow="true" stroke="black" stroke-opacity="0.15" transform="translate(1, 1)"></path>
                                                <path fill="rgba(249, 249, 249, .85)" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0" stroke-width="1"></path>
                                                <text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" y="21"></text>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="cleardiv"></div>
                        </div>
                    </div>
                </div>
                <div id="emipaymentdetails">
                    <form class="gutter-left gutter-right form-horizontal">
                        <div class="form-group" id="emipaymentscheduleheader">
                            <label class="col-sm-6 control-label" for="startmonthyear">Schedule showing EMI payments starting from</label>
                            <div class="col-sm-6 col-md-4">
                                <div class="input-group">
                                    <input class="form-control" id="startmonthyear" name="startmonthyear" value="" type="text" readonly="readonly"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span></div>
                            </div>
                        </div>
                    </form>
                    <div id="emibarchart" class=" highcharts-container" data-highcharts-chart="17">
                        <div class="highcharts-container" id="highcharts-50" style="position: relative; overflow: hidden; width: 1072px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Lato, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: bold; color: rgb(51, 51, 51);">
                            <svg version="1.1" style="font-family:Lato, Helvetica Neue, Helvetica, Arial, sans-serif;font-size:12px;font-weight:bold;color:#333333;fill:#333333;" xmlns="http://www.w3.org/2000/svg" width="1072" height="400">
                                <desc>Created with Highcharts 4.0.1</desc>
                                <defs>
                                    <clippath id="highcharts-51">
                                        <rect x="0" y="0" width="858" height="293"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1072" height="400" strokeWidth="0" fill="transparent" class=" highcharts-background"></rect>
                                <rect x="107" y="10" width="858" height="293" fill="transparent"></rect>
                                <g class="highcharts-grid" zIndex="1"></g>
                                <g class="highcharts-grid" zIndex="1">
                                    <path fill="none" d="M 107 9.5 L 965 9.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 107 69.5 L 965 69.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 107 127.5 L 965 127.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 107 186.5 L 965 186.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 107 244.5 L 965 244.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 107 303.5 L 965 303.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                                </g>
                                <g class="highcharts-grid" zIndex="1">
                                    <path fill="none" d="M 107 9.5 L 965 9.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 107 69.5 L 965 69.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 107 127.5 L 965 127.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 107 186.5 L 965 186.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 107 244.5 L 965 244.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 107 303.5 L 965 303.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                                </g>
                                <rect x="107.5" y="10.5" width="857" height="292" strokeWidth="-1" stroke="#C0C0C0" stroke-width="1" fill="none" zIndex="1"></rect>
                                <g class="highcharts-axis" zIndex="2">
                                    <path fill="none" d="M 321.5 303 L 321.5 313" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <path fill="none" d="M 464.5 303 L 464.5 313" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <path fill="none" d="M 607.5 303 L 607.5 313" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <path fill="none" d="M 750.5 303 L 750.5 313" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <path fill="none" d="M 893.5 303 L 893.5 313" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <path fill="none" d="M 178.5 303 L 178.5 313" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <path fill="none" d="M 107 303.5 L 965 303.5" stroke="#000" stroke-width="1" zIndex="7" visibility="visible"></path>
                                </g>
                                <g class="highcharts-axis" zIndex="2">
                                    <path fill="none" d="M 965 9.5 L 975 9.5" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <path fill="none" d="M 965 69.5 L 975 69.5" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <path fill="none" d="M 965 127.5 L 975 127.5" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <path fill="none" d="M 965 186.5 L 975 186.5" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <path fill="none" d="M 965 244.5 L 975 244.5" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <path fill="none" d="M 965 303.5 L 975 303.5" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <text x="1048" zIndex="7" text-anchor="middle" transform="translate(0,0) rotate(90 1048 156.5)" class=" highcharts-yaxis-title" style="color:#333333;font-weight:bold;font-size:12px;font-family:Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" visibility="visible" y="156.5">
                                        <tspan>EMI Payment / year</tspan>
                                    </text>
                                    <path fill="none" d="M 965.5 10 L 965.5 303" stroke="#000" stroke-width="1" zIndex="7" visibility="visible"></path>
                                </g>
                                <g class="highcharts-axis" zIndex="2">
                                    <path fill="none" d="M 107 9.5 L 97 9.5" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <path fill="none" d="M 107 69.5 L 97 69.5" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <path fill="none" d="M 107 127.5 L 97 127.5" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <path fill="none" d="M 107 186.5 L 97 186.5" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <path fill="none" d="M 107 244.5 L 97 244.5" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <path fill="none" d="M 107 303.5 L 97 303.5" stroke="#000" stroke-width="1" opacity="1"></path>
                                    <text x="24" zIndex="7" text-anchor="middle" transform="translate(0,0) rotate(270 24 156.5)" class=" highcharts-yaxis-title" style="color:#333333;font-weight:bold;font-size:12px;font-family:Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" visibility="visible" y="156.5">Balance</text>
                                    <path fill="none" d="M 106.5 10 L 106.5 303" stroke="#000" stroke-width="1" zIndex="7" visibility="visible"></path>
                                </g>
                                <g class="highcharts-series-group" zIndex="3">
                                    <g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(107,10) scale(1 1)" style="" clip-path="url(#highcharts-51)">
                                        <rect x="37" y="210" width="69" height="38" stroke="#FFFFFF" fill="#ED8C2B" rx="0" ry="0" stroke-width="0.00001"></rect>
                                        <rect x="180" y="41" width="69" height="103" stroke="#FFFFFF" fill="#ED8C2B" rx="0" ry="0" stroke-width="0.00001"></rect>
                                        <rect x="323" y="41" width="69" height="83" stroke="#FFFFFF" fill="#ED8C2B" rx="0" ry="0" stroke-width="0.00001"></rect>
                                        <rect x="466" y="41" width="69" height="61" stroke="#FFFFFF" fill="#ED8C2B" rx="0" ry="0" stroke-width="0.00001"></rect>
                                        <rect x="609" y="41" width="69" height="35" stroke="#FFFFFF" fill="#ED8C2B" rx="0" ry="0" stroke-width="0.00001"></rect>
                                        <rect x="752" y="125" width="69" height="8" stroke="#FFFFFF" fill="#ED8C2B" rx="0" ry="0" stroke-width="0.00001"></rect>
                                    </g>
                                    <g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(107,10) scale(1 1)" clip-path="none"></g>
                                    <g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(107,10) scale(1 1)" style="" clip-path="url(#highcharts-51)">
                                        <rect x="37" y="248" width="69" height="46" stroke="#FFFFFF" fill="#88A825" rx="0" ry="0" stroke-width="0.00001"></rect>
                                        <rect x="180" y="144" width="69" height="150" stroke="#FFFFFF" fill="#88A825" rx="0" ry="0" stroke-width="0.00001"></rect>
                                        <rect x="323" y="124" width="69" height="170" stroke="#FFFFFF" fill="#88A825" rx="0" ry="0" stroke-width="0.00001"></rect>
                                        <rect x="466" y="102" width="69" height="192" stroke="#FFFFFF" fill="#88A825" rx="0" ry="0" stroke-width="0.00001"></rect>
                                        <rect x="609" y="76" width="69" height="218" stroke="#FFFFFF" fill="#88A825" rx="0" ry="0" stroke-width="0.00001"></rect>
                                        <rect x="752" y="133" width="69" height="161" stroke="#FFFFFF" fill="#88A825" rx="0" ry="0" stroke-width="0.00001"></rect>
                                    </g>
                                    <g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(107,10) scale(1 1)" clip-path="none"></g>
                                    <g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(107,10) scale(1 1)" clip-path="url(#highcharts-51)">
                                        <path fill="none" d="M 71.5 70.1056231441899 C 71.5 70.1056231441899 157.3 91.62502747752393 214.5 107.62746153087937 C 271.7 123.62989558423482 300.3 131.9963803072452 357.5 150.11779341096715 C 414.7 168.2392065146891 443.3 177.71354806711435 500.5 198.23452704948915 C 557.7 218.75550603186394 586.3 233.76959373273894 643.5 252.7226883228411 C 700.7 271.67578291294325 786.5 293 786.5 293" stroke="#B8204C" stroke-width="2" zIndex="1" stroke-linejoin="round" stroke-linecap="round"></path>
                                        <path fill="none" d="M 61.5 70.1056231441899 L 71.5 70.1056231441899 C 71.5 70.1056231441899 157.3 91.62502747752393 214.5 107.62746153087937 C 271.7 123.62989558423482 300.3 131.9963803072452 357.5 150.11779341096715 C 414.7 168.2392065146891 443.3 177.71354806711435 500.5 198.23452704948915 C 557.7 218.75550603186394 586.3 233.76959373273894 643.5 252.7226883228411 C 700.7 271.67578291294325 786.5 293 786.5 293 L 796.5 293" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2" class=" highcharts-tracker" style=""></path>
                                    </g>
                                    <g class="highcharts-markers highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(107,10) scale(1 1)" clip-path="none" style="">
                                        <path fill="#B8204C" d="M 786 289 C 791.328 289 791.328 297 786 297 C 780.672 297 780.672 289 786 289 Z" stroke="#FFFFFF" stroke-width="0.00001"></path>
                                        <path fill="#B8204C" d="M 643 248.7226883228411 C 648.328 248.7226883228411 648.328 256.7226883228411 643 256.7226883228411 C 637.672 256.7226883228411 637.672 248.7226883228411 643 248.7226883228411 Z" stroke="#FFFFFF" stroke-width="0.00001"></path>
                                        <path fill="#B8204C" d="M 500 194.23452704948915 C 505.328 194.23452704948915 505.328 202.23452704948915 500 202.23452704948915 C 494.672 202.23452704948915 494.672 194.23452704948915 500 194.23452704948915 Z" stroke="#FFFFFF" stroke-width="0.00001"></path>
                                        <path fill="#B8204C" d="M 357 146.11779341096715 C 362.328 146.11779341096715 362.328 154.11779341096715 357 154.11779341096715 C 351.672 154.11779341096715 351.672 146.11779341096715 357 146.11779341096715 Z" stroke="#FFFFFF" stroke-width="0.00001"></path>
                                        <path fill="#B8204C" d="M 214 103.62746153087937 C 219.328 103.62746153087937 219.328 111.62746153087937 214 111.62746153087937 C 208.672 111.62746153087937 208.672 103.62746153087937 214 103.62746153087937 Z" stroke="#FFFFFF" stroke-width="0.00001"></path>
                                        <path fill="#B8204C" d="M 71 66.1056231441899 C 76.328 66.1056231441899 76.328 74.1056231441899 71 74.1056231441899 C 65.672 74.1056231441899 65.672 66.1056231441899 71 66.1056231441899 Z" stroke="#FFFFFF" stroke-width="0.00001"></path>
                                    </g>
                                </g>
                                <g class="highcharts-legend" zIndex="7" transform="translate(406,356)">
                                    <rect x="0.5" y="0.5" width="259" height="28" strokeWidth="1" stroke="#DDDDDD" stroke-width="1" fill="#EEEEEE" visibility="visible"></rect>
                                    <g zIndex="1">
                                        <g>
                                            <g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)">
                                                <text x="21" y="17" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;font-family:Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" text-anchor="start" zIndex="2">Principal</text>
                                                <rect x="0" y="6" width="16" height="12" zIndex="3" fill="#88A825"></rect>
                                            </g>
                                            <g class="highcharts-legend-item" zIndex="1" transform="translate(99,3)">
                                                <text x="21" y="17" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;font-family:Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" text-anchor="start" zIndex="2">Interest</text>
                                                <rect x="0" y="6" width="16" height="12" zIndex="3" fill="#ED8C2B"></rect>
                                            </g>
                                            <g class="highcharts-legend-item" zIndex="1" transform="translate(184,3)">
                                                <path fill="none" d="M 0 13 L 16 13" stroke-width="2" stroke="#B8204C"></path>
                                                <path fill="#B8204C" d="M 8 9 C 13.328 9 13.328 17 8 17 C 2.6719999999999997 17 2.6719999999999997 9 8 9 Z" stroke="#FFFFFF" stroke-width="0.00001"></path>
                                                <text x="21" y="17" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;font-family:Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" text-anchor="start" zIndex="2">Balance</text>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7">
                                    <text x="178.5" text-anchor="end" transform="translate(0,0) rotate(-45 178.5 319.4852813742386)" style="color:#000;cursor:default;font-size:11px;font:normal 9px Verdana, sans-serif;fill:#000;" y="319.4852813742386" opacity="1">2016</text>
                                    <text x="321.5" text-anchor="end" transform="translate(0,0) rotate(-45 321.5 319.4852813742386)" style="color:#000;cursor:default;font-size:11px;font:normal 9px Verdana, sans-serif;fill:#000;" y="319.4852813742386" opacity="1">2017</text>
                                    <text x="464.5" text-anchor="end" transform="translate(0,0) rotate(-45 464.5 319.4852813742386)" style="color:#000;cursor:default;font-size:11px;font:normal 9px Verdana, sans-serif;fill:#000;" y="319.4852813742386" opacity="1">2018</text>
                                    <text x="607.5" text-anchor="end" transform="translate(0,0) rotate(-45 607.5 319.4852813742386)" style="color:#000;cursor:default;font-size:11px;font:normal 9px Verdana, sans-serif;fill:#000;" y="319.4852813742386" opacity="1">2019</text>
                                    <text x="750.5" text-anchor="end" transform="translate(0,0) rotate(-45 750.5 319.4852813742386)" style="color:#000;cursor:default;font-size:11px;font:normal 9px Verdana, sans-serif;fill:#000;" y="319.4852813742386" opacity="1">2020</text>
                                    <text x="893.5" text-anchor="end" transform="translate(0,0) rotate(-45 893.5 319.4852813742386)" style="color:#000;cursor:default;font-size:11px;font:normal 9px Verdana, sans-serif;fill:#000;" y="319.4852813742386" opacity="1">2021</text>
                                </g>
                                <g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7">
                                    <text x="980" text-anchor="start" style="width:334px;color:#333333;cursor:default;font-size:11px;font:12px Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" y="308" opacity="1">
                                        <tspan>₹ 0</tspan>
                                    </text>
                                    <text x="980" text-anchor="start" style="width:334px;color:#333333;cursor:default;font-size:11px;font:12px Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" y="73.6" opacity="1">
                                        <tspan>₹ 1,00,000</tspan>
                                    </text>
                                    <text x="980" text-anchor="start" style="width:334px;color:#333333;cursor:default;font-size:11px;font:12px Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" y="249.39999999999998" opacity="1">
                                        <tspan>₹ 25,000</tspan>
                                    </text>
                                    <text x="980" text-anchor="start" style="width:334px;color:#333333;cursor:default;font-size:11px;font:12px Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" y="190.8" opacity="1">
                                        <tspan>₹ 50,000</tspan>
                                    </text>
                                    <text x="980" text-anchor="start" style="width:334px;color:#333333;cursor:default;font-size:11px;font:12px Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" y="132.2" opacity="1">
                                        <tspan>₹ 75,000</tspan>
                                    </text>
                                    <text x="980" text-anchor="start" style="width:334px;color:#333333;cursor:default;font-size:11px;font:12px Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" y="15" opacity="1">
                                        <tspan>₹ 1,25,000</tspan>
                                    </text>
                                </g>
                                <g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7">
                                    <text x="92" text-anchor="end" style="width:334px;color:#333333;cursor:default;font-size:11px;font:12px Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" y="308" opacity="1">
                                        <tspan>₹ 0</tspan>
                                    </text>
                                    <text x="92" text-anchor="end" style="width:334px;color:#333333;cursor:default;font-size:11px;font:12px Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" y="249.39999999999998" opacity="1">
                                        <tspan>₹ 1,00,000</tspan>
                                    </text>
                                    <text x="92" text-anchor="end" style="width:334px;color:#333333;cursor:default;font-size:11px;font:12px Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" y="190.8" opacity="1">
                                        <tspan>₹ 2,00,000</tspan>
                                    </text>
                                    <text x="92" text-anchor="end" style="width:334px;color:#333333;cursor:default;font-size:11px;font:12px Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" y="132.2" opacity="1">
                                        <tspan>₹ 3,00,000</tspan>
                                    </text>
                                    <text x="92" text-anchor="end" style="width:334px;color:#333333;cursor:default;font-size:11px;font:12px Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" y="73.6" opacity="1">
                                        <tspan>₹ 4,00,000</tspan>
                                    </text>
                                    <text x="92" text-anchor="end" style="width:334px;color:#333333;cursor:default;font-size:11px;font:12px Lato, Helvetica Neue, Helvetica, Arial, sans-serif;fill:#333333;" y="15" opacity="1">
                                        <tspan>₹ 5,00,000</tspan>
                                    </text>
                                </g>
                                <g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;font:14px Lato, Helvetica Neue, Helvetica, Arial, sans-serif;" transform="translate(0,-9999)">
                                    <path fill="none" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0" stroke-width="5" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" transform="translate(1, 1)"></path>
                                    <path fill="none" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0" stroke-width="3" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" transform="translate(1, 1)"></path>
                                    <path fill="none" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0" stroke-width="1" isShadow="true" stroke="black" stroke-opacity="0.15" transform="translate(1, 1)"></path>
                                    <path fill="rgba(249, 249, 249, .85)" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0" stroke-width="1"></path>
                                    <text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" y="21"></text>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div id="emipaymenttable">
                        <table>
                            <tbody>
                                <tr>
                                    <th class="col-xs-2 col-md-1" id="yearheader">Year</th>
                                    <th class="col-sm-2 hidden-xs" id="principalheader">Principal
                                        <br>(A)</th>
                                    <th class="col-xs-3 col-sm-2 visible-xs" id="principalheader">Principal</th>
                                    <th class="col-sm-2 hidden-xs" id="interestheader">Interest
                                        <br>(B)</th>
                                    <th class="col-xs-3 col-sm-2 visible-xs" id="interestheader">Interest</th>
                                    <th class="col-sm-3 hidden-xs" id="totalheader">Total Payment
                                        <br>(A + B)</th>
                                    <th class="col-xs-4 col-sm-3" id="balanceheader">Balance</th>
                                    <th class="col-md-1 hidden-xs hidden-sm" id="paidtodateheader">Loan Paid To Date</th>
                                </tr>
                                <tr class="yearlypaymentdetails">
                                    <td id="year2016" class="col-xs-2 col-md-1 paymentyear toggle">2016</td>
                                    <td class="col-xs-3 col-sm-2 currency">₹ 19,634</td>
                                    <td class="col-xs-3 col-sm-2 currency">₹ 16,363</td>
                                    <td class="col-sm-3 hidden-xs currency">₹ 35,997</td>
                                    <td class="col-xs-4 col-sm-3 currency">₹ 3,80,366</td>
                                    <td class="col-md-1 hidden-xs hidden-sm paidtodateyear">4.91%</td>
                                </tr>
                                <tr id="monthyear2016" class="monthlypaymentdetails">
                                    <td class="row monthyearwrapper" colspan="6">
                                        <div class="monthlypaymentcontainer" >
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Sep</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 4,833</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 4,167</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,95,167</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">1.21%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Oct</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 4,883</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 4,116</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,90,285</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">2.43%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Nov</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 4,934</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 4,065</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,85,351</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">3.66%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Dec</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 4,985</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 4,014</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,80,366</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">4.91%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="yearlypaymentdetails">
                                    <td id="year2017" class="col-xs-2 col-md-1 paymentyear toggle">2017</td>
                                    <td class="col-xs-3 col-sm-2 currency">₹ 64,030</td>
                                    <td class="col-xs-3 col-sm-2 currency">₹ 43,960</td>
                                    <td class="col-sm-3 hidden-xs currency">₹ 1,07,990</td>
                                    <td class="col-xs-4 col-sm-3 currency">₹ 3,16,335</td>
                                    <td class="col-md-1 hidden-xs hidden-sm paidtodateyear">20.92%</td>
                                </tr>
                                <tr id="monthyear2017" class="monthlypaymentdetails">
                                    <td class="row monthyearwrapper" colspan="6">
                                        <div class="monthlypaymentcontainer" >
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Jan</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 5,037</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 3,962</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,75,329</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">6.17%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Feb</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 5,090</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 3,910</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,70,239</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">7.44%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Mar</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 5,143</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 3,857</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,65,097</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">8.73%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Apr</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 5,196</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 3,803</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,59,901</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">10.02%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">May</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 5,250</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 3,749</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,54,650</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">11.34%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Jun</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 5,305</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 3,694</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,49,346</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">12.66%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Jul</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 5,360</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 3,639</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,43,985</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">14.00%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Aug</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 5,416</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 3,583</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,38,569</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">15.36%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Sep</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 5,472</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 3,527</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,33,097</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">16.73%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Oct</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 5,529</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 3,470</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,27,568</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">18.11%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Nov</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 5,587</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 3,412</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,21,981</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">19.50%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Dec</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 5,645</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 3,354</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,16,335</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">20.92%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="yearlypaymentdetails">
                                    <td id="year2018" class="col-xs-2 col-md-1 paymentyear toggle">2018</td>
                                    <td class="col-xs-3 col-sm-2 currency">₹ 72,509</td>
                                    <td class="col-xs-3 col-sm-2 currency">₹ 35,481</td>
                                    <td class="col-sm-3 hidden-xs currency">₹ 1,07,990</td>
                                    <td class="col-xs-4 col-sm-3 currency">₹ 2,43,826</td>
                                    <td class="col-md-1 hidden-xs hidden-sm paidtodateyear">39.04%</td>
                                </tr>
                                <tr id="monthyear2018" class="monthlypaymentdetails">
                                    <td class="row monthyearwrapper" colspan="6">
                                        <div class="monthlypaymentcontainer" >
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Jan</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 5,704</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 3,295</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,10,631</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">22.34%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Feb</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 5,763</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 3,236</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 3,04,868</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">23.78%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Mar</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 5,823</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 3,176</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 2,99,044</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">25.24%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Apr</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 5,884</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 3,115</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 2,93,160</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">26.71%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">May</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 5,945</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 3,054</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 2,87,215</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">28.20%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Jun</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 6,007</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 2,992</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 2,81,208</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">29.70%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Jul</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 6,070</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 2,929</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 2,75,138</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">31.22%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Aug</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 6,133</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 2,866</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 2,69,004</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">32.75%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Sep</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 6,197</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 2,802</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 2,62,807</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">34.30%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Oct</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 6,262</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 2,738</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 2,56,546</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">35.86%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Nov</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 6,327</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 2,672</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 2,50,219</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">37.45%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Dec</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 6,393</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 2,606</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 2,43,826</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">39.04%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="yearlypaymentdetails">
                                    <td id="year2019" class="col-xs-2 col-md-1 paymentyear toggle">2019</td>
                                    <td class="col-xs-3 col-sm-2 currency">₹ 82,110</td>
                                    <td class="col-xs-3 col-sm-2 currency">₹ 25,880</td>
                                    <td class="col-sm-3 hidden-xs currency">₹ 1,07,990</td>
                                    <td class="col-xs-4 col-sm-3 currency">₹ 1,61,716</td>
                                    <td class="col-md-1 hidden-xs hidden-sm paidtodateyear">59.57%</td>
                                </tr>
                                <tr id="monthyear2019" class="monthlypaymentdetails">
                                    <td class="row monthyearwrapper" colspan="6">
                                        <div class="monthlypaymentcontainer">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Jan</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 6,459</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 2,540</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 2,37,367</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">40.66%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Feb</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 6,527</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 2,473</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 2,30,840</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">42.29%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Mar</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 6,595</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 2,405</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 2,24,246</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">43.94%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Apr</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 6,663</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 2,336</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 2,17,583</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">45.60%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">May</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 6,733</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 2,266</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 2,10,850</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">47.29%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Jun</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 6,803</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 2,196</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 2,04,047</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">48.99%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Jul</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 6,874</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 2,125</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 1,97,173</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">50.71%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Aug</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 6,945</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 2,054</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 1,90,228</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">52.44%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Sep</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 7,018</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 1,982</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 1,83,210</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">54.20%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Oct</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 7,091</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 1,908</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 1,76,120</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">55.97%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Nov</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 7,165</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 1,835</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 1,68,955</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">57.76%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Dec</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 7,239</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 1,760</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 1,61,716</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">59.57%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="yearlypaymentdetails">
                                    <td id="year2020" class="col-xs-2 col-md-1 paymentyear toggle">2020</td>
                                    <td class="col-xs-3 col-sm-2 currency">₹ 92,983</td>
                                    <td class="col-xs-3 col-sm-2 currency">₹ 15,007</td>
                                    <td class="col-sm-3 hidden-xs currency">₹ 1,07,990</td>
                                    <td class="col-xs-4 col-sm-3 currency">₹ 68,733</td>
                                    <td class="col-md-1 hidden-xs hidden-sm paidtodateyear">82.82%</td>
                                </tr>
                                <tr id="monthyear2020" class="monthlypaymentdetails">
                                    <td class="row monthyearwrapper" colspan="6">
                                        <div class="monthlypaymentcontainer" style="display: none;">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Jan</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 7,315</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 1,685</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 1,54,401</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">61.40%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Feb</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 7,391</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 1,608</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 1,47,010</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">63.25%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Mar</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 7,468</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 1,531</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 1,39,543</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">65.11%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Apr</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 7,546</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 1,454</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 1,31,997</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">67.00%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">May</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 7,624</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 1,375</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 1,24,373</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">68.91%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Jun</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 7,704</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 1,296</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 1,16,669</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">70.83%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Jul</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 7,784</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 1,215</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 1,08,885</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">72.78%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Aug</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 7,865</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 1,134</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 1,01,020</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">74.74%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Sep</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 7,947</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 1,052</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 93,073</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">76.73%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Oct</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 8,030</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 970</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 85,044</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">78.74%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Nov</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 8,113</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 886</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 76,930</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">80.77%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Dec</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 8,198</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 801</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 68,733</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">82.82%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="yearlypaymentdetails">
                                    <td id="year2021" class="col-xs-2 col-md-1 paymentyear toggle">2021</td>
                                    <td class="col-xs-3 col-sm-2 currency">₹ 68,733</td>
                                    <td class="col-xs-3 col-sm-2 currency">₹ 3,261</td>
                                    <td class="col-sm-3 hidden-xs currency">₹ 71,993</td>
                                    <td class="col-xs-4 col-sm-3 currency">₹ 0</td>
                                    <td class="col-md-1 hidden-xs hidden-sm paidtodateyear">100.00%</td>
                                </tr>
                                <tr id="monthyear2021" class="monthlypaymentdetails">
                                    <td class="row monthyearwrapper" colspan="6">
                                        <div class="monthlypaymentcontainer" style="display: none;">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Jan</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 8,283</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 716</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 60,449</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">84.89%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Feb</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 8,369</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 630</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 52,080</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">86.98%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Mar</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 8,457</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 542</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 43,623</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">89.09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Apr</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 8,545</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 454</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 35,078</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">91.23%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">May</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 8,634</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 365</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 26,445</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">93.39%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Jun</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 8,724</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 275</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 17,721</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">95.57%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Jul</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 8,815</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 185</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 8,906</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">97.77%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-2 col-md-1 paymentmonthyear">Aug</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 8,906</td>
                                                        <td class="col-xs-3 col-sm-2 currency">₹ 93</td>
                                                        <td class="col-sm-3 hidden-xs currency">₹ 8,999</td>
                                                        <td class="col-xs-4 col-sm-3 currency">₹ 0</td>
                                                        <td class="col-md-1 hidden-xs hidden-sm paidtodatemonthyear">100.00%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="ecalprintandshare">
                        <p id="ecalprintandsharetext">Want to print OR share a custom link to your EMI calculation (with all your numbers pre-filled)?</p> <a title="Print this page" class="ecalprint btn btn-primary " href="" role="button"><i class="fa fa-print"></i> Print</a> 
                        <a title="Share this EMI calculation with friends &amp; family" class="ecalshare btn btn-primary " href="#" role="button"><i class="fa fa-link"></i> Share</a>
                        <div id="loader"><i class="fa fa-spinner fa-pulse"></i></div>
                    </div>
                    <div id="ecalsharelink" class="form-group" style="display: none;">
                        <label class="control-label" for="sharelink">Copy and share this link</label>
                        <input class="form-control" name="sharelink" id="sharelink" readonly="readonly" type="text" value="<?php //echo HTTP_SERVER.WS_ROOT.'loan-calculator/'; ?>">
                    </div>
                </div>
            </div>
        </div>
        </div>
       
    </div>
	</div>
</section>

<?php get_footer(); ?>