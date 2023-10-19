<?php
$pageTitle = "Contact";
ob_start();
?>

<?php require_once "./mvc/views/partials/breadcrumb.php" ?>

<div class="contact">
    <div class="container-xl">
        <div class="row">
            <div class="col-sm-3">
                <div class="contact__info">
                    <div class="contact__info--box contact__info--box--more">
                        <i class="icon-location"></i>
                        <p>2715 Ash Dr. San Jose, South Dakota 83475</p>
                    </div>
                    <div class="contact__info--box contact__info--box--more">
                        <i class="icon-mail"></i>
                        <p>Proxy@gmail.com</p>
                        <p>Help.proxy@gmail.com</p>
                    </div>
                    <div class="contact__info--box">
                        <i class="icon-phone-call"></i>
                        <p>(219) 555-0114<br>(164) 333-0487</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-9">
                <div class="contact__request">
                    <p class="contact__request--title">Just Say Hello!</p>
                    <p class="contact__request--text">
                        Do you fancy saying hi to me or you want to get started with your project
                        and you need my help? Feel free to contact me.
                    </p>
                    <form action="">
                        <div class="contact__request--double">
                            <input type="text" class="contact__request--double--inp" placeholder="Full name..." required>
                            <input type="text" class="contact__request--double--inp" placeholder="Phone number..." required>
                        </div>
                        <div class="d-flex flex-column">
                            <input type="email" placeholder="Email..." required>
                            <textarea type="text" rows="3" name="content" placeholder="Content..."></textarea>
                            <button type="submit" class="btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6696584619353!2d106.67968337460306!3d10.759922359498796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1b7c3ed289%3A0xa06651894598e488!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBTw6BpIEfDsm4!5e0!3m2!1svi!2s!4v1697709361811!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <?php include "./mvc/views/partials/footer-child.php" ?>
</div>


<?php
$content = ob_get_contents();
ob_end_clean();
require_once('./mvc/views/template.php');
?>