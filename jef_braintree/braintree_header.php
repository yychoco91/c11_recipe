<header class="main">
    <div class="container wide">
        <div class="content slim">
            <div class="set">
                <div class="fill">
                    <a href="http://localhost:8888/lfz/c11_recipe/"><img src="../images/fridge2plate.png" width="300px"></a>
                </div>

                <div class="fit">
                    <a href="https://www.braintreegateway.com/merchants/9pbmh9skjwrmy4t8/verified" target="_blank">
                        <img src="https://s3.amazonaws.com/braintree-badges/braintree-badge-wide-light.png" width="280px" height ="44px" border="0"/>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="notice-wrapper">
        <?php if(isset($_SESSION["errors"])) : ?>
            <div class="show notice error notice-error">
                <span class="notice-message">
                    <?php
                    echo($_SESSION["errors"]);
                    unset($_SESSION["errors"]);
                    ?>
                <span>
            </div>
        <?php endif; ?>
    </div>
</header>