<?php
$con=@mysql_connect("localhost","root","np@123");
mysql_select_db("rescuechennai",$con);
$sql=mysql_query("SELECT * FROM rescue ORDER BY Timestamp DESC",$con);
$n=mysql_num_rows($sql);
$htmlEle = '';
if(!$n=="0")
{
  while ($row = mysql_fetch_array($sql, MYSQL_ASSOC)) {
    $md5file = md5($row["Mobile"]);
    $refCode = substr($md5file, 0, 5);
    if($row["Type"] =='Help needed'){
     switch($row["Category"]) {
      case "Accommodation":
      $htmlEle .='<span id="'.$refCode.'" style="text-decoration: none;background: none !important;color: inherit !important;"><div class="panel panel-info"><div class="panel-heading"><h3 class="panel-title">'.$row["Category"].'&nbsp;<small><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> '.$row["Locality"].'</small></h3><span style="line-height: 2.5;"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> '.$row["Timestamp"].'</span></div><div class="panel-body">'.$row["Description"].'</div><div class="panel-footer"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row["Name"].' &nbsp; &nbsp; &nbsp; <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span><a href="tel:'.$row["Mobile"].'">&nbsp;&nbsp;'.$row["Mobile"].'</a> <div class="fb-share-button" data-href="http://chennairainshelp.com/#'.$refCode.'" data-layout="button"></div> </div></div></span>';
      break;
      case "Food":
      $htmlEle .='<span id="'.$refCode.'" style="text-decoration: none;background: none !important;color: inherit !important;"><div class="panel panel-info"><div class="panel-heading"><h3 class="panel-title">'.$row["Category"].'&nbsp;<small><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> '.$row["Locality"].'</small></h3><span style="line-height: 2.5;"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> '.$row["Timestamp"].'</span></div><div class="panel-body">'.$row["Description"].'</div><div class="panel-footer"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row["Name"].' &nbsp; &nbsp; &nbsp; <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span><a href="tel:'.$row["Mobile"].'">&nbsp;&nbsp;'.$row["Mobile"].'</a> <div class="fb-share-button" data-href="http://chennairainshelp.com/#'.$refCode.'" data-layout="button"></div> </div></div></span>';
      break;
      case "Missing persons":
      $htmlEle .='<span id="'.$refCode.'" style="text-decoration: none;background: none !important;color: inherit !important;"><div class="panel panel-warning"><div class="panel-heading"><h3 class="panel-title">'.$row["Category"].'&nbsp;<small><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> '.$row["Locality"].'</small></h3><span style="line-height: 2.5;"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> '.$row["Timestamp"].'</span></div><div class="panel-body">'.$row["Description"].'</div><div class="panel-footer"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row["Name"].' &nbsp; &nbsp; &nbsp; <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span><a href="tel:'.$row["Mobile"].'">&nbsp;&nbsp;'.$row["Mobile"].'</a> <div class="fb-share-button" data-href="http://chennairainshelp.com/#'.$refCode.'" data-layout="button"></div> </div></div></span>';
      break;
      case "Rescue":
      $htmlEle .='<span id="'.$refCode.'" style="text-decoration: none;background: none !important;color: inherit !important;"><div class="panel panel-danger"><div class="panel-heading"><h3 class="panel-title">'.$row["Category"].'&nbsp;<small><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> '.$row["Locality"].'</small></h3><span style="line-height: 2.5;"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> '.$row["Timestamp"].'</span></div><div class="panel-body">'.$row["Description"].'</div><div class="panel-footer"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row["Name"].' &nbsp; &nbsp; &nbsp; <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span><a href="tel:'.$row["Mobile"].'">&nbsp;&nbsp;'.$row["Mobile"].'</a> <div class="fb-share-button" data-href="http://chennairainshelp.com/#'.$refCode.'" data-layout="button"></div> </div></div></span>';
      break;
      case "Medical assistance":
      $htmlEle .='<span id="'.$refCode.'" style="text-decoration: none;background: none !important;color: inherit !important;"><div class="panel panel-danger"><div class="panel-heading"><h3 class="panel-title">'.$row["Category"].'&nbsp;<small><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> '.$row["Locality"].'</small></h3><span style="line-height: 2.5;"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> '.$row["Timestamp"].'</span></div><div class="panel-body">'.$row["Description"].'</div><div class="panel-footer"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row["Name"].' &nbsp; &nbsp; &nbsp; <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span><a href="tel:'.$row["Mobile"].'">&nbsp;&nbsp;'.$row["Mobile"].'</a> <div class="fb-share-button" data-href="http://chennairainshelp.com/#'.$refCode.'" data-layout="button"></div> </div></div></span>';
      break;
      default:
      $htmlEle .='<span id href="#'.$refCode.'" style="text-decoration: none;background: none !important;color: inherit !important;"><div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title">'.$row["Category"].'&nbsp;<small><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> '.$row["Locality"].'</small></h3><span style="line-height: 2.5;"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> '.$row["Timestamp"].'</span></div><div class="panel-body">'.$row["Description"].'</div><div class="panel-footer"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row["Name"].' &nbsp; &nbsp; &nbsp; <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span><a href="tel:'.$row["Mobile"].'">&nbsp;&nbsp;'.$row["Mobile"].'</a> <div class="fb-share-button" data-href="http://chennairainshelp.com/#'.$refCode.'" data-layout="button"></div> </div></div></span>';
    }
  }
} 
echo $htmlEle;
}
?>