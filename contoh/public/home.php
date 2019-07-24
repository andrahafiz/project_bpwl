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
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">forum</i>
                    </div>
                    <div class="content">
                        <div class="text">JUMLAH EKSTRAKULIKULER</div>
                        <?php
                            include "pages/set/koneksi.php";
                            $sql = "SELECT COUNT(nama_eskul) FROM `eskul`";
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
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text">JUMLAH PENGUMUMAN</div>
                        <?php
                            include "pages/set/koneksi.php";
                            $sql = "SELECT COUNT(judul_pengumuman) FROM `pengumuman`";
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
            
        </div>
    </div>
</body>

</html>