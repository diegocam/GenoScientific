<div class="content_section">
    <div class="breadcrumbs_container">
        <nav>
            <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="<?php echo base_url(); ?>">
                        <span itemprop="name">Home</span>
                    </a>
                    <meta itemprop="position" content="1"/>
                    <span>»</span>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" class="active">
                        <span itemprop="name">Contact</span>
                    </a>
                    <meta itemprop="position" content="2"/>
                </li>
            </ul>
        </nav>
    </div>
</div>
<section class="content_section">

    <h2 class="pagetitle_heading">Contact Us </h2>
    <br>
    <p>
        <strong>Address:</strong><br>
        GenoScientific Molecular Diagnostics Laboratory<br>
        Medical Professional Plaza<br>
        2 Ethel Road, Suite 203C<br>
        Edison, NJ 08817<br>
    </p>
    <br>
    <p>
        <strong>Phone:</strong><br>
        ph: (732) 662-5543<br>
        fax: (732) 662-5544<br>
        alt: (732) 642-1133<br>
    </p>
    <br>
    <P>You may also use the form below to get in touch with us.</P>
    <form id="contact_form">
        <fieldset>
            <label>Full Name:</label>
            <input id="firstname" type="text" name ="firstname" placeholder="Please enter your first name" required/>
            <input id="lastname" type="text" name="lastname" placeholder="Please enter your last name" required/>
        </fieldset>
        <fieldset>
            <label>Email:</label>
            <input type="email" id="email" name="email" placeholder="Please enter your email address" required/>
        </fieldset>
        <fieldset>
            <label>Phone:</label>
            <input type="tel" id="phone" name="phone" placeholder="Please enter your phone number" required/>
        </fieldset>
        <fieldset>
            <label>Message:</label>
            <textarea placeholder="Please enter your message" id="message" name="message" required></textarea>
        </fieldset>

        <fieldset>
            <label>Security Check:&nbsp; &nbsp;  What is four plus seven?</label>
            <input type="text" id="human" name="human" placeholder="Please enter the answer for the secret question above" required/>
        </fieldset>
        <fieldset>
            <input type="submit" />
        </fieldset>
    </form>
    <div id="result">
    </div>

    <script>

        $("#contact_form").submit(function(e) {
            e.preventDefault();
            var formdata = $(this).serialize();
            var url = "<?php echo base_url(); ?>email/send";
            $.post(url, formdata, function(result) {
                if (result === "Thank you. Your message has been sent!<br> We will contact you within the next 2 business days.") {
                    $("#result").css("color", "dodgerblue");
                    $("#contact_form").slideUp("slow");
                } else {
                    $("#result").css("color", "red");
                }

                $("#result").html(result);
                $("#result").fadeIn("slow");
            });
        });
    </script>







</section>