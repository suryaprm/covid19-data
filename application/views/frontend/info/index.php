<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="http://covid19.sumutprov.go.id/assets/favicon.png" />

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>COVID-19 | Sumatera Utara</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/styles/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/styles/framework.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/styles/custom.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/fonts/css/fontawesome-all.min.css">

<script type="text/javascript" src="<?php echo base_url();?>assets/frontend/scripts/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/frontend/scripts/plugins.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/frontend/scripts/custom.js"></script>

</head>
<body class="theme-light" data-background="none" data-highlight="green2">

<div id="page">
    <div class="page-content header-clear-small">
        <div data-height="130" class="caption caption-margins round-medium shadow-huge">
            <div class="caption-center left-15 text-left">
                <h1 class="color-white bolder" id="tgl">
                <?php
                  echo tgl_indo(date('Y-m-d'));
                ?>
                </h1>
                <p class="under-heading color-white opacity-90 bottom-0">
                    Informasi terkini terkait Covid-19 Di Sumatera Utara
                </p>
            </div>
            <div class="caption-overlay bg-black opacity-70"></div>
            <div class="caption-bg bg-18"></div>
        </div>
        <div class="content-boxed">
            <div class="content">
                <h3 class="bolder center-text">KASUS COVID-19 DUNIA</h3>
                <div class="row justify-content-center">
                      <div class="col-sm-3">
                        <div class="card mb-3">
                          <div class="card-body" style="background-color: orange; color: #fff; min-height: 115px !important;">
                          <center><span style="font-size: 20px; font-weight:bold; ">Positif</span><br>
                          <span style="font-size:33px; font-weight:bold;"><i class="fas fa-frown"></i>&nbsp; <?=$globalpos['value'];?></span>
                          </center>
                          
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="card mb-3">
                          <div class="card-body" style="background-color: green; color: #fff; ">
                          <center><span style="font-size: 20px; font-weight:bold; ">Sembuh</span><br>
                          <span style="font-size:33px; font-weight:bold;"><i class="fas fa-smile-beam"></i>&nbsp; <?=$globalsem['value'];?></span>
                          </center>
                          
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="card mb-3">
                          <div class="card-body"  style="background-color: red; color: #fff; ">
                          <center><span style="font-size: 20px; font-weight:bold; ">Meninggal</span><br>
                          <span style="font-size:33px; font-weight:bold;"><i class="fas fa-sad-cry"></i></i>&nbsp;<?=$globalmen['value'];?></span>
                          </center>
                          
                          </div>
                        </div>
                      </div>
              </div>
              </div>
        </div>
        <div class="content-boxed">
            <div class="content">
                <h3 class="bolder center-text">KASUS COVID-19 INDONESIA</h3>
                <div class="row justify-content-center">
                      <div class="col-sm-3">
                        <?php foreach($indonesia as $key):?>
                        <div class="card mb-3">
                          <div class="card-body" style="background-color: orange; color: #fff; min-height: 115px !important;">
                          <center><span style="font-size: 20px; font-weight:bold; ">Positif</span><br>
                          <span style="font-size:33px; font-weight:bold;"><i class="fas fa-frown"></i>&nbsp; <?=$key['positif'];?></span>
                          </center>
                          
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="card mb-3">
                          <div class="card-body" style="background-color: green; color: #fff; ">
                          <center><span style="font-size: 20px; font-weight:bold; ">Sembuh</span><br>
                          <span style="font-size:33px; font-weight:bold;"><i class="fas fa-smile-beam"></i>&nbsp; <?=$key['sembuh'];?></span>
                          </center>
                          
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="card mb-3">
                          <div class="card-body"  style="background-color: red; color: #fff; ">
                          <center><span style="font-size: 20px; font-weight:bold; ">Meninggal</span><br>
                          <span style="font-size:33px; font-weight:bold;"><i class="fas fa-sad-cry"></i></i>&nbsp;<?=$key['meninggal'];?></span>
                          </center>
                          
                          </div>
                        </div>
                      </div>
                      <?php endforeach; ?>
              </div>
              </div>
        </div>
        <div class="content-boxed">
            <div class="content">
                <h3 class="bolder center-text">KASUS COVID-19 SUMATERA UTARA</h3>
                <div class="row justify-content-center">
                      <div class="col-sm-3">
                        <div class="card mb-3">
                          <div class="card-body" style="background-color: orange; color: #fff; min-height: 115px !important;">
                          <center><span style="font-size: 20px; font-weight:bold; ">Positif RT-PCR</span><br>
                          <span style="font-size:33px; font-weight:bold;"><i class="fas fa-frown"></i>&nbsp; <?=$sumutprovinsi['positif'];?></span>
                          </center>
                          
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="card mb-3">
                          <div class="card-body" style="background-color: green; color: #fff; ">
                          <center><span style="font-size: 20px; font-weight:bold; ">Sembuh</span><br>
                          <span style="font-size:33px; font-weight:bold;"><i class="fas fa-smile-beam"></i>&nbsp; <?=$sumutprovinsi['sembuh'];?></span>
                          </center>
                          
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="card mb-3">
                          <div class="card-body"  style="background-color: red; color: #fff; ">
                          <center><span style="font-size: 20px; font-weight:bold; ">Meninggal</span><br>
                          <span style="font-size:33px; font-weight:bold;"><i class="fas fa-sad-cry"></i></i>&nbsp;<?=$sumutprovinsi['meninggal'];?></span>
                          </center>
                          
                          </div>
                        </div>
                      </div>
              </div>
              </div>
        </div>
        <div class="content-boxed">
            <div class="content">
                <h3 class="bolder center-text">Data Kasus COVID-19 di Indonesia Berdasarkan Provinsi</h3>
                <!-- <p class="under-heading font-12 center-text color-highlight bottom-10"> Update terakhir <?=$datasumut['update'];?></p> -->
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap" width="100%">
                                        <thead>
                                            <tr>
                                                <th><center>PROVINSI</center></th>
                                                <th><center>POSITIF</center></th>
                                                <th><center>SEMBUH</center></th>
                                                <th><center>MENINGGAL</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                                foreach($provinsi as $key):
                                           ?>
                                            <tr>
                                                <td><?=$key['attributes']['Provinsi'];?></td>
                                                <td><?=number_format($key['attributes']['Kasus_Posi'], 0, ',','.')?></td>
                                                <td><?=number_format($key['attributes']['Kasus_Semb'], 0, ',','.')?></td>
                                                <td><?=number_format($key['attributes']['Kasus_Meni'], 0, ',','.')?></td>
                                            </tr>
                                                <?php endforeach; ?>
                                        </tbody>
                                      
                                    </table>
                                                </div>
          </div>
        </div>
        <div class="content-boxed">
            <div class="content">
                <h3 class="bolder center-text">Kasus COVID-19 Global</h3>
                <!-- <p class="under-heading font-12 center-text color-highlight bottom-10"> Update terakhir <?=$datasumut['update'];?></p> -->
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap" width="100%">
                                        <thead>
                                            <tr>
                                                <th><center>NEGARA</center></th>
                                                <th><center>POSITIF</center></th>
                                                <th><center>SEMBUH</center></th>
                                                <th><center>MENINGGAL</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                                foreach($global as $y):
                                           ?>
                                            <tr>
                                                <td><?=$y['attributes']['Country_Region'];?></td>
                                                <td><?=number_format($y['attributes']['Confirmed'], 0, ',','.')?></td>
                                                <td><?=number_format($y['attributes']['Recovered'], 0, ',','.')?></td>
                                                <td><?=number_format($y['attributes']['Deaths'], 0, ',','.')?></td>
                                            </tr>
                                                <?php endforeach; ?>
                                        </tbody>
                                      
                                    </table>
                                                </div>
          </div>
        </div>
        
<div id="footer-menu" class="footer-menu-3-icons footer-menu-style-1 ">
<center>
      <a id="btnHome" class="active-nav" href="#"><i class="fa fa-home"></i><span>Home</span></a>
      <a href="#" data-menu="menu-settings"><i class="fa fa-info-circle"></i><span>Info</span></a>
      </center>
    <div class="clear"></div>
</div>
</div>
    <!--Menu Settings-->
    <div id="menu-settings" class="menu menu-box-bottom menu-box-detached round-large" data-menu-height="100" data-menu-effect="menu-over">
        <div class="content bottom-0">
            <div class="top-25 bottom-0"></div>
            <center>
                2020 &copy;  suryaprm.com<br/>
                <i class="color-highlight">Source data  : https://kawalcorona.com//</i>
            </center>
        </div>
    </div>
    <div class="menu-hider"></div>
</div>
</body>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/scripts/script.js"></script> -->
</html>
