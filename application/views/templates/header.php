<body>

    <div id="wrap">

        <div id="container">
            <section>
                <header>
                    <div id="logo">
                        <h2><img src="<?php echo base_url();?>images/geno_logo_2.png" alt="GenoScientific Logo"/></h2>
                    </div>

                    <div id="main_navigation">
                        <nav>
                            <ul>
                                <li><a <?php echo $this->uri->segment(1) == "" ? "class='active_menu_tab'" : "";?> href="<?php echo base_url();?>">Home</a></li>
                                <li><a <?php echo $this->uri->segment(1) === "about-us" ? "class='active_menu_tab'" : "";?> href="<?php echo base_url();?>about-us">About Us</a></li>
                                <li><a <?php echo $this->uri->segment(1) === "insurances" ? "class='active_menu_tab'" : "";?> href="<?php echo base_url();?>insurances">Insurances</a></li>
                                <li><a <?php echo $this->uri->segment(1) === "locations" ? "class='active_menu_tab'" : "";?> href="<?php echo base_url();?>locations">Locations</a></li>
                                <li><a <?php echo $this->uri->segment(1) === "download-forms" ? "class='active_menu_tab'" : "";?> href="<?php echo base_url();?>download-forms">Forms</a></li>
                                <li><a <?php echo $this->uri->segment(1) === "contact" ? "class='active_menu_tab'" : "";?> href="<?php echo base_url();?>contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                </header>
            </section>

            <div class="line_separator"></div>