<form method="post" action="sendemail.php" id="contact-form">
    <div class="response"></div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="input-field">
                <input type="text" name="name" id="name" class="name" placeholder="Name">
            </div><!--input-field end-->
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="input-field">
                <input type="text" name="email" id="email" class="email" placeholder="Email">
            </div><!--input-field end-->
        </div>
        <div class="col-lg-12">
            <div class="input-field">
                <textarea id="message" name="message" placeholder="Message"></textarea>
            </div><!--input-field end-->
        </div>
        <div class="col-lg-12">
            <div class="input-field m-0">
                <button type="submit" class="btn-default" id="submit">Send message</button>
            </div>
        </div>
    </div>
</form>