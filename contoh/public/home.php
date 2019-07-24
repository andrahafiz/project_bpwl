<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

         <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">account_circle</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH PEGAWAI</div>
                             <?php
                            include "pages/set/koneksi.php";
                            $sql = "SELECT COUNT(guru_nama) FROM `guru`";
                            $result =  mysqli_query($db, $sql);
                            $row = mysqli_fetch_array($result);

                            echo "
                            
                            <div class='number count-to' data-from='0' data-to='$row[0]' data-speed='15' 
                            data-fresh-interval='20'>
                            ";
                           ?>

                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH FASILITAS</div>
                             <?php
                            include "pages/set/koneksi.php";
                            $sql = "SELECT COUNT(nama_fasilitas) FROM `fasilitas`";
                            $result =  mysqli_query($db, $sql);
                            $row = mysqli_fetch_array($result);

                            echo "
                            
                            <div class='number count-to' data-from='0' data-to='$row[0]' data-speed='15' 
                            data-fresh-interval='20'>
                            ";
                           ?>
                        </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">forum</i>
                    </div>
                    <div class="content">
                        <div class="text">NEW COMMENTS</div>
                        <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">243</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text">NEW VISITORS</div>
                        <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">1225</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->
        <!-- CPU Usage -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>CPU USAGE (%)</h2>
                            </div>
                            <div class="col-xs-12 col-sm-6 align-right">
                                <div class="switch panel-switch-btn">
                                    <span class="m-r-10 font-12">REAL TIME</span>
                                    <label>OFF<input type="checkbox" id="realtime" checked=""><span class="lever switch-col-cyan"></span>ON</label>
                                </div>
                            </div>
                        </div>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="real_time_chart" class="dashboard-flot-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="949" height="275" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 949px; height: 275px;"></canvas>
                            <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 258px; left: 22px; text-align: center;">0</div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 258px; left: 110px; text-align: center;">10</div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 258px; left: 201px; text-align: center;">20</div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 258px; left: 293px; text-align: center;">30</div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 258px; left: 384px; text-align: center;">40</div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 258px; left: 476px; text-align: center;">50</div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 258px; left: 567px; text-align: center;">60</div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 258px; left: 658px; text-align: center;">70</div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 258px; left: 750px; text-align: center;">80</div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 258px; left: 841px; text-align: center;">90</div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 258px; left: 930px; text-align: center;">100</div>
                                </div>
                                <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 245px; left: 13px; text-align: right;">0</div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 196px; left: 7px; text-align: right;">20</div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 147px; left: 7px; text-align: right;">40</div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 98px; left: 7px; text-align: right;">60</div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 49px; left: 7px; text-align: right;">80</div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">100</div>
                                </div>
                            </div><canvas class="flot-overlay" width="949" height="275" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 949px; height: 275px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# CPU Usage -->
        <div class="row clearfix">
            <!-- Visitors -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="body bg-pink">
                        <div class="sparkline" data-type="line" data-spot-radius="4" data-highlight-spot-color="rgb(233, 30, 99)" data-highlight-line-color="#fff" data-min-spot-color="rgb(255,255,255)" data-max-spot-color="rgb(255,255,255)" data-spot-color="rgb(255,255,255)" data-offset="90" data-width="100%" data-height="92px" data-line-width="2" data-line-color="rgba(255,255,255,0.7)" data-fill-color="rgba(0, 188, 212, 0)"><canvas width="264" height="92" style="display: inline-block; width: 264px; height: 92px; vertical-align: top;"></canvas></div>
                        <ul class="dashboard-stat-list">
                            <li>
                                TODAY
                                <span class="pull-right"><b>1 200</b> <small>USERS</small></span>
                            </li>
                            <li>
                                YESTERDAY
                                <span class="pull-right"><b>3 872</b> <small>USERS</small></span>
                            </li>
                            <li>
                                LAST WEEK
                                <span class="pull-right"><b>26 582</b> <small>USERS</small></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Visitors -->
            <!-- Latest Social Trends -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="body bg-cyan">
                        <div class="m-b--35 font-bold">LATEST SOCIAL TRENDS</div>
                        <ul class="dashboard-stat-list">
                            <li>
                                #socialtrends
                                <span class="pull-right">
                                    <i class="material-icons">trending_up</i>
                                </span>
                            </li>
                            <li>
                                #materialdesign
                                <span class="pull-right">
                                    <i class="material-icons">trending_up</i>
                                </span>
                            </li>
                            <li>#adminbsb</li>
                            <li>#freeadmintemplate</li>
                            <li>#bootstraptemplate</li>
                            <li>
                                #freehtmltemplate
                                <span class="pull-right">
                                    <i class="material-icons">trending_up</i>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Latest Social Trends -->
            <!-- Answered Tickets -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="body bg-teal">
                        <div class="font-bold m-b--35">ANSWERED TICKETS</div>
                        <ul class="dashboard-stat-list">
                            <li>
                                TODAY
                                <span class="pull-right"><b>12</b> <small>TICKETS</small></span>
                            </li>
                            <li>
                                YESTERDAY
                                <span class="pull-right"><b>15</b> <small>TICKETS</small></span>
                            </li>
                            <li>
                                LAST WEEK
                                <span class="pull-right"><b>90</b> <small>TICKETS</small></span>
                            </li>
                            <li>
                                LAST MONTH
                                <span class="pull-right"><b>342</b> <small>TICKETS</small></span>
                            </li>
                            <li>
                                LAST YEAR
                                <span class="pull-right"><b>4 225</b> <small>TICKETS</small></span>
                            </li>
                            <li>
                                ALL
                                <span class="pull-right"><b>8 752</b> <small>TICKETS</small></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Answered Tickets -->
        </div>

        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="header">
                        <h2>TASK INFOS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Task</th>
                                        <th>Status</th>
                                        <th>Manager</th>
                                        <th>Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Task A</td>
                                        <td><span class="label bg-green">Doing</span></td>
                                        <td>John Doe</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Task B</td>
                                        <td><span class="label bg-blue">To Do</span></td>
                                        <td>John Doe</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Task C</td>
                                        <td><span class="label bg-light-blue">On Hold</span></td>
                                        <td>John Doe</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-light-blue" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Task D</td>
                                        <td><span class="label bg-orange">Wait Approvel</span></td>
                                        <td>John Doe</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Task E</td>
                                        <td>
                                            <span class="label bg-red">Suspended</span>
                                        </td>
                                        <td>John Doe</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-red" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->
            <!-- Browser Usage -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>BROWSER USAGE</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="donut_chart" class="dashboard-donut-chart"><svg height="265" version="1.1" width="264" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.65625px;">
                                <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc>
                                <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                <path fill="none" stroke="#e91e63" d="M132,213.83333333333331A81.33333333333333,81.33333333333333,0,0,0,194.1226260989693,80.0034245147479" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path>
                                <path fill="#e91e63" stroke="#ffffff" d="M132,216.83333333333331A84.33333333333333,84.33333333333333,0,0,0,196.41403443868538,78.06707541898042L225.18393914845393,53.75513677212187A122,122,0,0,1,132,254.5Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#00bcd4" d="M194.1226260989693,80.0034245147479A81.33333333333333,81.33333333333333,0,0,0,64.22993683209843,87.52968035103885" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#00bcd4" stroke="#ffffff" d="M196.41403443868538,78.06707541898042A84.33333333333333,84.33333333333333,0,0,0,61.73022138738075,85.87093905251159L34.51109765601045,67.80908935743702A117,117,0,0,1,221.36492524892714,56.98238526506769Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#ff9800" d="M64.22993683209843,87.52968035103885A81.33333333333333,81.33333333333333,0,0,0,62.71271115159598,175.09557154386988" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#ff9800" stroke="#ffffff" d="M61.73022138738075,85.87093905251159A84.33333333333333,84.33333333333333,0,0,0,60.15703246456468,176.6667196745864L32.328531205779456,193.77477709794397A117,117,0,0,1,34.51109765601045,67.80908935743702Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#009688" d="M62.71271115159598,175.09557154386988A81.33333333333333,81.33333333333333,0,0,0,112.58356456723796,211.4817266600097" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#009688" stroke="#ffffff" d="M60.15703246456468,176.6667196745864A84.33333333333333,84.33333333333333,0,0,0,111.86738457176722,214.39498706960026L104.06898017664147,246.1171559740304A117,117,0,0,1,32.328531205779456,193.77477709794397Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#607d8b" d="M112.58356456723796,211.4817266600097A81.33333333333333,81.33333333333333,0,0,0,131.97444838017105,213.83332931969426" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#607d8b" stroke="#ffffff" d="M111.86738457176722,214.39498706960026A84.33333333333333,84.33333333333333,0,0,0,131.97350590239049,216.83332917165018L131.96324336655752,249.49999422628147A117,117,0,0,1,104.06898017664147,246.1171559740304Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="132" y="122.5" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(1.8485,0,0,1.8485,-111.9934,-113.2727)" stroke-width="0.5409836065573771">
                                    <tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Chrome</tspan>
                                </text><text x="132" y="142.5" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(1.6944,0,0,1.6944,-91.6612,-93.4028)" stroke-width="0.5901639344262295">
                                    <tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">37%</tspan>
                                </text>
                            </svg></div>
                    </div>
                </div>
            </div>
            <!-- #END# Browser Usage -->
        </div>
    </div>
</body>

</html>