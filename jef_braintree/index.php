<?php require_once("braintree_init.php"); ?>

<html>

<?php require_once("braintree_head.php"); ?>

<body>

<?php require_once("braintree_header.php"); ?>

<div class="wrapper">
    <div class="checkout container">

        <header>
<!--            <h1>Hi, <br>Let's test a transaction</h1>-->
<!--            <p>-->
<!--                Make a test payment with Braintree using PayPal or a card-->
<!--            </p>-->
        </header>

        <form method="post" id="payment-form" action="checkout.php">
            <section id="top">
                <label for="first_name">
                    <span class="input-label">First Name</span>
                    <div class="input-wrapper first-name-wrapper">
                        <input type="text" name="first_name" placeholder="First Name" id="first_name" autocomplete="off"/>
                    </div>
                </label>
                <label for="l_name" id="middle_border_fix">
                    <span class="input-label">Last Name</span>
                    <div class="input-wrapper last-name-wrapper">
                        <input type="text" name="last_name" placeholder="Last Name" id="last_name"/>
                    </div>
                </label>
                <label for="email">
                    <span class="input-label">Email</span>
                    <div class="input-wrapper email-wrapper">
                        <input type="text" name="email" placeholder="Email" id="email"/>
                    </div>
                </label>
            </section>
            <section>
                <div class="bt-drop-in-wrapper">
                    <div id="bt-dropin"></div>
                </div>

                <label for="amount">
                    <span class="input-label">Amount</span>
                    <div class="input-wrapper amount-wrapper">
                        <input id="amount" name="amount" type="tel" min="10" placeholder="Amount" value="10">
<!--                        <input type="hidden" name="fake-valid-nonce" value="--><?php //echo(Braintree\Test\Nonces::$transactable);?><!--">-->
                    </div>
                </label>
            </section>

            <button id="submit_button" class="button" type="submit" onclick=""><span>Submit</span></button>
        </form>
    </div>
</div>

<form>
    <div id="dropin-container"></div>
</form>

<script src="https://js.braintreegateway.com/js/braintree-2.27.0.min.js"></script>
<script>
    var checkout = new Demo({
        formID: 'payment-form'
    });
    var client_token = "<?php echo(Braintree\ClientToken::generate([
//        "customerId" => "54027778"
    ])); ?>";
    braintree.setup(client_token, "dropin", {
        container: "bt-dropin"
    });
</script>
</body>
</html>