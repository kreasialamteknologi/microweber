<script type="text/javascript">

function paypal_checkout_callback(data,selector){
	alert('paypal_checkout_callback');
	$(selector).empty().append(data);

}


</script>
<?php 

$paypal_is_test = (get_option('paypalexpress_testmode', 'payments')) == 'y';
 
?>

<div class="edit" rel="page" field="paypal_checkout_html">
    <p><b>Thank you for your order.</b></p>
    <p>Please complete your order. </p>
    <p class="alert alert-warning"><small style="font-size: x-small"><strong> *Note </strong>Your shopping cart will be emptied when you compleate the order</small> </p>
</div>




<?php if($paypal_is_test == true and is_admin()): ?>
<small><?php print mw_warn("You are using Paypal Express in test mode!"); ?></small>
<?php endif; ?>