<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="partials/contact.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
    <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
    </div>
    <form method="POST" action="contact_handler.php">
        <h3>Drop Us a Message</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="Name" class="form-control" placeholder="Your Name *" value=""  required/>
                </div>
                <div class="form-group">
                    <input type="email" name="Email" class="form-control" placeholder="Your Email *" value="" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="Phone" class="form-control" placeholder="Your Phone Number *"
                        value="" required/>
                </div>
                <div class="form-group">
                    <input type="submit" name="Submit" class="btnContact" value="Send Message" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="Msg" class="form-control" placeholder="Your Message *"
                        style="width: 100%; height: 150px;" required></textarea>
                </div>
            </div>
        </div>
    </form>
</div>