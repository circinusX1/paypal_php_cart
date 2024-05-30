<style>

.innercd {
  width:100%;
  margin-top: 60px;
  display: flex;
  justify-content: center;
}

.innerd {
  width:100%;
  display: flex;
  justify-content: center;
  border: 1px solid grey;
}

.outerd {
  width:80%;
  border: 1px solid red;
  display: flex;
  justify-content: center;
  margin-left:10px;font-size:1.5em;margin-top:100px;text-align:left;
}
</style>

<div style="margin-left:0px;font-size:1.5em;margin-top:100px;text-align:left">


<h2>6 coil guitar pickup, 'Sexa-ccw'</h2>


<?php
    //
    // add your description for each idividual item
    //
    $arr=array();
        $arr[0]="Active guitar pickup with 6 coils (No LED)".
"<li>  Power supply 9v".
"<li>  Output impedance > 100 Ko".
"<li>  Operation temperature: 0&#176;C .. 39&#176;C".
"<li>  Variation of the signal from center to edges < 0.5dB (Measured)".
"<li>  Variation of the signal from string to string < 0.1dB (Measured)".
"<li>  SNR: ~80dB (From datasheet)".
"<li>  Universal fit, for bridge and neck".
"<li>  Distance to strings: 7..12mm".
"<li>  Current consumption at 9V is less than 1 mA, with LED option is about 2.0 mA".
"<li>  Shematic & PCB's at:  <a href='https://github.com/circinusX1/sexa-ccw' target='_blank'>github sexa-ccw</a>";
        $arr[1]="Active guitar pickup with 6 coils and with LED (red,blue,green) (Only 4 left)".
"<li>  Power supply 9v".
"<li>  Output impedance > 100 Ko".
"<li>  Operation temperature: 0&#176;C .. 39&#176;C".
"<li>  Variation of the signal from center to edges < 0.5dB (Measured)".
"<li>  Variation of the signal from string to string < 0.1dB (Measured)".
"<li>  SNR: ~80dB (From datasheet)".
"<li>  Universal fit, for bridge and neck".
"<li>  Distance to strings: 7..12mm".
"<li>  Current consumption at 9V is less than 1 mA, with LED option is about 2.0 mA".
"<li>  Schematic & PCB's at:  <a href='https://github.com/circinusX1/sexa-ccw' target='_blank'>github sexa-ccw</a>";


        $arr[2]="Differential premplifier for passive pickups (2 coils & 1 coil configuration) and variable gain".
                "<br> ~22dB - 30 dB, maxim out voltage clear sinus 3 Vpp at 800Hz";
        $arr[3]="Audio preamlifier kit with transitor, good for guitar pickups, variable gain".
                "<br> ~23dB - 28dB, maxim out voltage clear sinus 2 Vpp at 800Hz".
                "4 capacitors, 4 resistors for 2 gain rough control, 1 pot for continous gain control,<br>".
                " 1 transistor, pins and soldering wire";
        $arr[4]="Audio preamlifier kit with transitor prebuild, for guitar pickups, variable gain<br>".
                "As above but assembled";




    $dom = new DomDocument();
    $dom->load("./ppform.html");
    $pb = '<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" '.
          'border="0" name="submit" title="PayPal" alt="Add to Cart" />';

    $form = $dom->getElementsByTagName("form");
    if($form)
    {
        $action = $form[0]->getAttribute("action"); //"post_show_post.php";
        $xpath = new DOMXpath($dom);
        $inputs = $xpath->query("//input");
        $oform=array();
        foreach($inputs as $i)
        {
            $oform[$i->getAttribute("name")] = $i->getAttribute("value");
        }

        $optionTags = $dom->getElementsByTagName('option');
        $index=0;
        foreach ($optionTags as $i )
        {

            echo "<div class='innercd'>\n";

                echo "<form method='post' action='{$action}' target='_ppal'>\n";

                foreach ($oform as $k=>$v)
                {
                    if($k=="submit" || $k=="os0" || $k=="on0")
                        continue;
                    else
                        echo "  <input hidden name='{$k}' value='{$v}'>\n";
                }
                $isel=trim($i->textContent);
                $ival=trim($i->getAttribute("value"));
                $x=rand(4,90);     
                $y=rand(4,35);    //6 coils guitar pickup sexa-ccw
                echo "  <input hidden name='submit_x' value='${x}'>\n";
                echo "  <input hidden name='submit_y' value='${y}'>\n";
                echo "  <input hidden name='os0' value='{$ival}'>\n";
                echo "  <input hidden name='on0' value='{$isel}'>\n";

                echo "<div class='innerd'>\n";
                    echo("  <h3>".$isel."</h3>\n");
                echo "</div>\n";

                $imgs = $i->getElementsByTagName('img');
                //print_r ($imgs);
                echo "  <div class='innerd'>\n";
                    foreach ($imgs as $im )
                    {
                        $tit=$im->getAttribute("title"); if(empty($tit)) $tit=$isel;
                        $alt=$im->getAttribute("alt");   if(empty($alt)) $alt=$isel;
                        echo("      <img src='".$im->getAttribute("src")."' height='240px' title='{$tit}' alt='{$alt}' >\n");
                    }
                echo "  </div>\n";
                echo $arr[$index];
                $index++;
                echo "  <div class='inner'>\n";
                    echo "    ".$pb;
                echo "  </div>\n";
                echo "</form>\n";

            echo "</div>\n";

        }
    }
?>

<!-- SHOW_CART -->

<div style='float:right'>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="business" value="XXXXXXXXXXXX">
        <input type="hidden" name="display" value="1">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal - The safer,$
</form>

<!-- SHOW_CART -->

</div>


</div>

