<?php 

require '../vendor/autoload.php';
use Mailgun\Mailgun;

$submit = false;

    if(!empty($_POST['name'])) {
        $submit = true;

        $client = new \Http\Adapter\Guzzle6\Client();
        $mailgun = new Mailgun('key-926e9bfdce63c30c5e9dc39e2ff60632', $client);
        $domain = 'weirswalkies.co.uk';

        $body = 'Hey there, we have received a new form submission on the website!';
        $body .= '<br><br>';
        $body .= 'Name: ' . $_POST['name'] . '<br>';
        $body .= 'Email: ' . $_POST['email'] . '<br>';
        $body .= 'Phone: ' . $_POST['phone'] . '<br>';
        $body .= 'Days per week required (1-5): ' . $_POST['days'] . '<br>';
        $body .= 'Message: ' . $_POST['message'];

        try {
            $email_result = $mailgun->sendMessage("$domain",
                array(
                    'from' => "'No-reply' <no-reply@weirswalkies.co.uk>",
                    'to' => "'Nina' <preserveprotect@yahoo.co.uk>",
                    'cc' => "'William' <williamblommaert@gmail.com>",
                    'subject' => 'New form submission!',
                    'text' => $body,
                    'html' => $body
                ));
        } catch (Exception $e) {
            $submit = false;
            $error = $e->getMessage();
        }
    } else {
        $submit = false;
    }
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
    <head>
                <title>Doggy Day Care, located in Johnstone, Glasgow, No1 for Scotland, Family Run</title>
          <meta name="description" content="Fully Insured and Secure, Inside and outside facilities, dog walking, dog sitting, dog day care, free induction days, Family run business, catering for you" />
          <meta name="keywords" content="Dog walking, doggy day care, dog sitting, the best dog walking and sitting service, Johnstone, Glasgow, weirs walkies" />
          

        <link rel="stylesheet" href="http://www.weirswalkies.co.uk/_app/5158805/sm6/styles/styles.min.css">
        <link rel="stylesheet" href="http://www.weirswalkies.co.uk/_app/5158805/sm6/styles/rothko.min.css">
        <style>
          .page_contact_fwCIoPRX1nJM2cGWGKsxR {
  left: -37px;
  top: 460px;
  position: absolute;
  height: 348px;
  width: 217px;
  z-index: 5;
  display: block;
  opacity: 1.0;
}
.page_contact_f5lAxaO7I3eqpC8TLNqv9 {
  left: 703px;
  top: 462px;
  position: absolute;
  height: 341px;
  width: 245px;
  z-index: 4;
  display: block;
  opacity: 1.0;
}
.FormSubmitButton445781986Div {
  margin: 0px 0px 0px 0px;
  padding: 0px 5px 20px 5px;
  display: block;
}
.FormSubmitButton445781986 {
  background-color: #9966ff;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  color: #ffffff;
  font-family: Arial, 'Helvetica Neue', Helvetica, 'Liberation Sans', sans-serif;
  font-size: 13px;
  font-weight: 400;
  text-align: center;
  width: 90px;
  height: 40px;
}
.FormSubmitButton445781986:hover {
  background-color: #ccb3ff;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  color: #ffffff;
  font-family: Arial, 'Helvetica Neue', Helvetica, 'Liberation Sans', sans-serif;
  font-size: 13px;
  font-weight: 400;
  text-align: center;
}
.Label1813127788Div {
  margin: 0px 0px 0px 0px;
  padding: 0px 5px 20px 5px;
  display: block;
}
.Label1813127788 {
  width: 305px;
  height: 16px;
  padding: 0px 5px 20px 5px;
  color: #ffffff;
  font-family: Arial, 'Helvetica Neue', Helvetica, 'Liberation Sans', sans-serif;
  font-size: 11px;
  font-weight: 400;
  text-align: left;
}
.FormTextArea708201477Div {
  width: 305px;
  display: block;
}
.FormTextArea708201477Box {
  padding: 0px 5px 20px 5px;
}
.FormTextArea708201477 {
  color: #707070;
  font-family: Arial, 'Helvetica Neue', Helvetica, 'Liberation Sans', sans-serif;
  font-size: 13px;
  font-weight: 400;
  line-height: 15.0px;
  text-align: left;
  height: 130px;
  background-color: #ffffff;
  border-color: #c2c2c2;
  border-width: 1px;
}
.Label1387852265 {
  width: 300px;
  height: 18px;
  padding: 0px 5px 5px 0px;
  color: #ffffff;
  font-family: Arial, 'Helvetica Neue', Helvetica, 'Liberation Sans', sans-serif;
  font-size: 13px;
  font-weight: 400;
  text-align: left;
}
.FormTextInput334350744Div {
  width: 305px;
  display: block;
}
.FormTextInput334350744Box {
  padding: 0px 5px 20px 5px;
}
.FormTextInput334350744 {
  height: 35px;
  background-color: #ffffff;
  border-color: #c2c2c2;
  border-width: 1px;
  color: #707070;
  font-family: Arial, 'Helvetica Neue', Helvetica, 'Liberation Sans', sans-serif;
  font-size: 13px;
  font-weight: 400;
  text-align: left;
}
.Label1615733856 {
  width: 300px;
  height: 18px;
  padding: 0px 5px 5px 0px;
  color: #ffffff;
  font-family: Arial, 'Helvetica Neue', Helvetica, 'Liberation Sans', sans-serif;
  font-size: 13px;
  font-weight: 400;
  text-align: left;
}
.FormTextInput2107805955Div {
  width: 305px;
  display: block;
}
.FormTextInput2107805955Box {
  padding: 0px 5px 20px 5px;
}
.FormTextInput2107805955 {
  height: 35px;
  background-color: #ffffff;
  border-color: #c2c2c2;
  border-width: 1px;
  color: #707070;
  font-family: Arial, 'Helvetica Neue', Helvetica, 'Liberation Sans', sans-serif;
  font-size: 13px;
  font-weight: 400;
  text-align: left;
}
.Label1004444773 {
  width: 300px;
  height: 18px;
  padding: 0px 5px 5px 0px;
  color: #ffffff;
  font-family: Arial, 'Helvetica Neue', Helvetica, 'Liberation Sans', sans-serif;
  font-size: 13px;
  font-weight: 400;
  text-align: left;
}
.FormTextInput201337930Div {
  width: 305px;
  display: block;
}
.FormTextInput201337930Box {
  padding: 0px 5px 20px 5px;
}
.FormTextInput201337930 {
  height: 35px;
  background-color: #ffffff;
  border-color: #c2c2c2;
  border-width: 1px;
  color: #707070;
  font-family: Arial, 'Helvetica Neue', Helvetica, 'Liberation Sans', sans-serif;
  font-size: 13px;
  font-weight: 400;
  text-align: left;
}
.Label1599845485 {
  width: 300px;
  height: 18px;
  padding: 0px 5px 5px 0px;
  color: #ffffff;
  font-family: Arial, 'Helvetica Neue', Helvetica, 'Liberation Sans', sans-serif;
  font-size: 13px;
  font-weight: 400;
  text-align: left;
}
.FormTextInput1419288797Div {
  width: 305px;
  display: block;
}
.FormTextInput1419288797Box {
  padding: 0px 5px 20px 5px;
}
.FormTextInput1419288797 {
  height: 35px;
  background-color: #ffffff;
  border-color: #c2c2c2;
  border-width: 1px;
  color: #707070;
  font-family: Arial, 'Helvetica Neue', Helvetica, 'Liberation Sans', sans-serif;
  font-size: 13px;
  font-weight: 400;
  text-align: left;
}
.Label1885943950 {
  width: 300px;
  height: 18px;
  padding: 0px 5px 5px 0px;
  color: #ffffff;
  font-family: Arial, 'Helvetica Neue', Helvetica, 'Liberation Sans', sans-serif;
  font-size: 13px;
  font-weight: 400;
  text-align: left;
}
.page_contact_--fMsbnMseUUooi6GLSwCvT {
  left: 271px;
  top: 362px;
  position: absolute;
  z-index: 3;
  color: #707070;
  font-family: Arial, 'Helvetica Neue', Helvetica, 'Liberation Sans', sans-serif;
  font-size: 13px;
  font-weight: 400;
  line-height: 15.0px;
  text-align: left;
  border-style: solid;
  height: 611px;
  padding: 20px 8px 8px 8px;
  width: 331px;
}
.page_contact_fCCowArL3bT4UmBzq3RL6 {
  left: 213px;
  top: 360px;
  position: absolute;
  height: 639px;
  width: 440px;
  z-index: 2;
}
.master_fc7CjWDn69nAA1vSsxsm2 {
  left: 106px;
  top: 104px;
  position: absolute;
}
.master_fc7CjWDn69nAA1vSsxsm2 .menuItem {
  padding: 0 0 50px 0;
}
.master_fc7CjWDn69nAA1vSsxsm2.horizontal .menuItem {
  padding: 0 50px 0 0;
}
.master_fc7CjWDn69nAA1vSsxsm2.horizontal .subMenu {
  padding-top: 0px;
}
.master_fc7CjWDn69nAA1vSsxsm2 .menuItem .menuItemDesign {
  background-color: #9966cc;
  border-width: 30px;
  border-color: #aaaaaa;
  border-style: solid;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  -ms-border-radius: 0px;
  -o-border-radius: 0px;
  border-radius: 0px;
  color: #000000;
  color: rgba(0, 0, 0, 0.87);
  font-family: Six Caps;
  font-size: 30px;
  font-weight: 400;
  line-height: 40.0px;
  text-align: left;
  text-decoration: underline;
  padding: 19px;
  width: auto;
}
.master_fc7CjWDn69nAA1vSsxsm2 > .menuItem:hover > .menuItemDesign, .master_fc7CjWDn69nAA1vSsxsm2 .selected.menuItem:hover .menuItemDesign {
  background-color: #9900ff;
  border-width: 30px;
  border-color: #aaaaaa;
  border-style: solid;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  -ms-border-radius: 0px;
  -o-border-radius: 0px;
  border-radius: 0px;
  color: #000000;
  font-family: Six Caps;
  font-size: 30px;
  font-weight: 400;
  line-height: 40.0px;
  text-align: left;
  text-decoration: underline;
}
.master_fc7CjWDn69nAA1vSsxsm2 .selected .menuItemDesign {
  background-color: #9966ff;
  border-width: 30px;
  border-color: #cccccc;
  border-style: solid;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  -ms-border-radius: 0px;
  -o-border-radius: 0px;
  border-radius: 0px;
  color: #000000;
  font-family: Six Caps;
  font-size: 30px;
  font-weight: 400;
  line-height: 40.0px;
  text-align: left;
  text-decoration: underline;
}
.master_fc7CjWDn69nAA1vSsxsm2 .subMenu {
  padding: 0px;
}
.master_fc7CjWDn69nAA1vSsxsm2 .subMenu ul {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  -ms-border-radius: 0px;
  -o-border-radius: 0px;
  border-radius: 0px;
  background-color: #ffffff;
  background-color: rgba(255, 255, 255, 0.5);
  border-style: solid;
  overflow: hidden;
}
.master_fc7CjWDn69nAA1vSsxsm2 .subMenu .subMenuItem .subMenuItemDesign {
  border: none;
  padding: 3px 10px;
  background-clip: border-box;
  color: #ffffff;
  font-family: Six Caps;
  font-size: 26px;
  font-weight: 400;
  line-height: 35.0px;
  text-align: center;
}
.master_fc7CjWDn69nAA1vSsxsm2 .subMenu .selected.subMenuItem .subMenuItemDesign {
  background-color: #f1f1f1;
  color: #555555;
  font-family: Six Caps;
  font-size: 26px;
  font-weight: 400;
  line-height: 35.0px;
  text-align: center;
}
.master_fc7CjWDn69nAA1vSsxsm2 .subMenu .subMenuItem:hover .subMenuItemDesign {
  background-color: #f1f1f1;
  color: #555555;
  font-family: Six Caps;
  font-size: 26px;
  font-weight: 400;
  line-height: 35.0px;
  text-align: center;
}
.pageContent {
  position: relative;
  float: left;
  overflow: hidden;
  width: 960px;
  min-height: 1000px;
  border-style: solid;
}
.pageOffset {
  position: relative;
  float: left;
  width: 1px;
  margin-bottom: 0px;
  height: 0%;
}
.pagePadding {
  width: auto;
  min-width: 960px;
  clear: both;
  padding: 15px 0px 30px 0px;
}
.pageAlignment {
  position: relative;
  margin: 0px auto;
  width: 960px;
  min-height: 1000px;
  z-index: 0;
}
body {
  background-color: #141414;
  background-image: url('../communities/8/004/013/469/338/images/4629772815.jpg');
  background-repeat: repeat;
  background-position: center top;
}

        </style>

        <script src="http://www.weirswalkies.co.uk/_app/5158805/sm6/scripts/main.min.js"></script>
        <script>
          var EXPOSE_JQUERY = true;  
          var Rothko = { csrfToken : 'GSMvb-sQUTe2VP1GEm8L4kSA' };
          var tref = { tok: 'GSMvb-sQUTe2VP1GEm8L4kSA' };
        </script>
        <script src="http://www.weirswalkies.co.uk/_app/5158805/sm6/screenshot.js"></script>
        
        <script src="http://www.weirswalkies.co.uk/_app/5158805/sm6/login/Login.js"></script>
<link rel="stylesheet" href="http://www.weirswalkies.co.uk/_app/5158805/sm6/fancybox/jquery.fancybox.css?v=2.1.5" />
<link rel="stylesheet" href="http://www.weirswalkies.co.uk/_app/5158805/sm6/fancybox/sm.custom.css" />
<link rel="stylesheet" href="http://www.weirswalkies.co.uk/_app/5158805/sm6/fancybox/jquery.fancybox-patch.css" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Six+Caps:400"/><script type="text/i18n" data-lang="en">{"Shop_Try_Again":"Please try again.","Shop_Add_To_Basket":"Sorry, we could not add to cart.","Shop_Action_Failed":"Sorry, the action failed.","Form_Upload_Field_Empty":"No file uploaded","Shop_Sorry_Order_Text":"Sorry, we could not display your order.","Shop_Set_Express_Checkout":"Sorry could not proceed to PayPal.","Shop_Set_Cart_Shipping_Option":"Sorry, we could not update shipping.","Shop_Error_PayPal":"Payment via PayPal failed.","Shop_Sorry_Sold_Out":"has sold out.","Shop_Item_Unavailable":"Sorry, the item","Form_Required_Message":"Required field","Shop_Remove_From_Cart":"Sorry, we could not delete item from cart.","Shop_Not_Available":"is not available.","Shop_Completed_Cart":"Invalid order. Probably another order was completed already.","Shop_Items_Unavailable":"Sorry, some of the items in your basket are no longer available.","Shop_Invalid_Order":"Invalid order. Probably another order is in process.","Form_Upload_Field_Size_Error":"File is too big","Form_Invalid_Message":"Invalid entry","Shop_Error_Payment":"Payment failed.","Shop_Recalculate_Cart":"Sorry, we could not update cart.","Shop_Sorry_Text":"Sorry, the item","Shop_No_Shipping_Chosen":"Please choose a shipping option","Shop_Review_Cart":"Please review your cart.","Preview_Exit_Button":"Exit preview","Shop_Sorry_Limited_Quantity":"has limited quantity.","Shop_Promocode_Minimum_not_Met":"You have not added enough to your basket to meet the minimum order for this promo code."}</script>
        <script type="text/i18n" data-lang="es">{"Shop_Try_Again":"Vuelva a intentarlo.","Shop_Add_To_Basket":"Lo sentimos, pero no pudimos agregar al carro.","Shop_Action_Failed":"Lo sentimos, falló la acción.","Form_Upload_Field_Empty":"No se cargó un archivo.","Shop_Sorry_Order_Text":"Lo sentimos, no pudimos mostrar su pedido.","Shop_Set_Express_Checkout":"Lo sentimos, no se puede continuar a PayPal.","Shop_Set_Cart_Shipping_Option":"Lamentamos no poder actualizar el envío.","Shop_Error_PayPal":"Se produjo un error con el pago a través de PayPal.","Shop_Sorry_Sold_Out":"se agotó.","Shop_Item_Unavailable":"Lo sentimos, pero el elemento","Form_Required_Message":"Campo obligatorio","Shop_Remove_From_Cart":"Lamentamos no poder eliminar el elemento del carro.","Shop_Not_Available":"no está disponible.","Shop_Completed_Cart":"Orden no válida. Probablemente ya se haya completado otra orden.","Shop_Items_Unavailable":"Lo sentimos, algunos de los artículos de su canasta ya no están disponibles.","Shop_Invalid_Order":"Orden no válida. Probablemente otra orden esté en proceso.","Form_Upload_Field_Size_Error":"El archivo es demasiado grande","Form_Invalid_Message":"Entrada no válida","Shop_Error_Payment":"Se produjo un error con el pago.","Shop_Recalculate_Cart":"Lamentamos no poder actualizar el carro.","Shop_Sorry_Text":"Lo sentimos, el elemento","Shop_No_Shipping_Chosen":"Elija una opción de envío","Shop_Review_Cart":"Revise su carro.","Preview_Exit_Button":"Exit preview","Shop_Sorry_Limited_Quantity":"tiene cantidad limitada."}</script>
        </head>
    <body>
        
        
        <div class="pageOffset"></div>
<div class="pagePadding">
    
    <div id="pageAlignment" class="pageAlignment">
      <div id="pageContent" class="pageContent">
    <ul class="menu horizontal master_fc7CjWDn69nAA1vSsxsm2">
    <li class="menuItem ">
        <a href="../home/4592980997.html" class="menuItemDesign"><span>HOME</span></a>
        </li>
    <li class="menuItem ">
        <a href="../about/4592980998.html" class="menuItemDesign"><span>ABOUT</span></a>
        </li>
    <li class="menuItem ">
        <a href="../gallery/4592981000.html" class="menuItemDesign"><span>GALLERY</span></a>
        </li>
    <li class="menuItem selected">
        <a href="4592981001.php" class="menuItemDesign"><span>CONTACT</span></a>
        </li>
    </ul>
<img class="rectangle page_contact_fCCowArL3bT4UmBzq3RL6" src="../_imgstore/8/4013469338/page_contact_fCCowArL3bT4UmBzq3RL6/ML9BqXCcSh7eEsGYJGf57VYHO30.png" />

<form id="contact" method="POST" role="form" class="page_contact_--fMsbnMseUUooi6GLSwCvT sm-form" novalidate>
    <?php if($submit): ?>
        <div class="sfm-message" style="color: white; padding-top: 20px;">
      Your message has been sent.<br>Thanks!<br><br>
            <a href="4592981001.php">Send a new message</a>
        </div>
    <?php else: ?>
    <fieldset>
    
        <input type="hidden" name="PageID" value="4592981001" />
        <div class="shim"></div>
        <input type="hidden" name="FormID" value="page_contact_--fMsbnMseUUooi6GLSwCvT">
        
<div class="smf-group FormTextInput1419288797Box">
    
    <div class="smf-label Label1885943950">
        
        <label id="Label1885943950" for="FormTextInput1419288797" title="Name">
            Name</label>
    </div>
    <div class="smf-field FormTextInput1419288797Div">
        
        <input id="FormTextInput1419288797" class="FormTextInput1419288797" type="text" name="name" placeholder=""
               data-sm-frm-el="field" data-sm-validator="alphanumeric, " maxlength="100">
        <div data-sm-tooltip="Required field." class="error-tt"></div>
    </div>
</div>

<div class="smf-group FormTextInput201337930Box">
    
    <div class="smf-label Label1599845485">
        
        <label id="Label1599845485" for="FormTextInput201337930" title="Email">
            Email</label>
    </div>
    <div class="smf-field FormTextInput201337930Div">
        
        <input id="FormTextInput201337930" class="FormTextInput201337930" type="email" name="email" placeholder=""
               data-sm-frm-el="field" data-sm-validator="email, " maxlength="255">
        <div data-sm-tooltip="Required field." class="error-tt"></div>
    </div>
</div>

<div class="smf-group FormTextInput2107805955Box">
    
    <div class="smf-label Label1004444773">
        
        <label id="Label1004444773" for="FormTextInput2107805955" title="Contact Telephone Number">
            Contact Telephone Number</label>
    </div>
    <div class="smf-field FormTextInput2107805955Div">
        
        <input id="FormTextInput2107805955" class="FormTextInput2107805955" type="text" name="phone" placeholder=""
               data-sm-frm-el="field" data-sm-validator="alphanumeric, " maxlength="100">
        <div data-sm-tooltip="Required field." class="error-tt"></div>
    </div>
</div>

<div class="smf-group FormTextInput334350744Box">
    
    <div class="smf-label Label1615733856">
        
        <label id="Label1615733856" for="FormTextInput334350744" title="Days per week required (1-5)">
            Days per week required (1-5)</label>
    </div>
    <div class="smf-field FormTextInput334350744Div">
        
        <input id="FormTextInput334350744" class="FormTextInput334350744" type="text" name="days" placeholder=""
               data-sm-frm-el="field" data-sm-validator="alphanumeric, " maxlength="100">
        <div data-sm-tooltip="Required field." class="error-tt"></div>
    </div>
</div>

<div class="smf-group FormTextArea708201477Box">
    
    <div class="smf-label Label1387852265">
        
        <label id="Label1387852265" for="FormTextArea708201477" title="Message">
            Message</label>
    </div>
    <div class="smf-field FormTextArea708201477Div">
        
        <textarea id="FormTextArea708201477" class="FormTextArea708201477" name="message" data-sm-frm-el="field"
                  data-sm-validator="" cols="30" rows="10"></textarea>
        <div data-sm-tooltip="Required field." class="error-tt"></div>
    </div>
</div>

<div class="smf-required-note Label1813127788">
    * Required
</div>

<div class="smf-group smf-buttons">
    <div class="smf-field FormSubmitButton445781986Div">
        <input class="FormSubmitButton445781986" type="submit" data-text-action="Submit" name="Submit" value="Submit">
    </div>
</div>
    </fieldset>
  <?php endif ?>
    <script type="text/template">
        <div class="sfm-message">
            There has been an error, sorry!<br>Your message has not been sent.<br><br>
            <a href="javascript:document.location.reload(true);">Try it again</a>
      </div>
    </script>
</form>

<img src="../communities/8/004/013/469/338/images/4630005073_245x341.jpg" alt="14494713_1113248525378607_5193878848278543132_n" class="page_contact_f5lAxaO7I3eqpC8TLNqv9" />

<img src="../communities/8/004/013/469/338/images/4630005075_217x348.jpg" alt="14462715_1113248532045273_6875093027605543460_n" class="page_contact_fwCIoPRX1nJM2cGWGKsxR" />

</div>
    </div>
</div>


<!--        <script>
$(document).ready(function () { SM6.Login.init('', ''); })
</script>
<script src="http://www.weirswalkies.co.uk/_app/5158805/sm6/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
<script src="http://www.weirswalkies.co.uk/_app/5158805/sm6/fancybox/jquery.fancybox-init.js"></script>--></body>
</html>
