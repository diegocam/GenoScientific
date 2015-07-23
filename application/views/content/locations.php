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
                        <span itemprop="name">Locations</span>
                    </a>
                    <meta itemprop="position" content="2"/>
                </li>
            </ul>
        </nav>
    </div>
</div>
<section class="content_section">
    <h2 class="pagetitle_heading">GenoScientific Location</h2>

    <br>

    <div id="address_map">
        <div class="left">
            <div>
                <strong>Address:</strong><br>

                <div itemscope itemtype="http://schema.org/LocalBusiness">
                    <span itemprop="name">GenoScientific Molecular Diagnostics Laboratory</span>

                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <span itemprop="streetAddress">Medical Professional Plaza</span><br>
                        <span itemprop="streetAddress">2 Ethel Road, Suite 203C</span><br>
                        <span itemprop="addressLocality">Edison</span>,
                        <span itemprop="addressRegion">NJ</span> <span itemprop="postalCode">08817</span>
                    </div>
                    <br>
                    <strong>Phone:</strong><br>
                    Phone: <span itemprop="telephone">(732) 662-5543</span><br>
                    Fax: <span itemprop="telephone">(732) 662-5544</span><br>
                    Alt.: <span itemprop="telephone">(732) 642-1133</span><br>
                </div>
            </div>
        </div>

        <div class="right">
            <div id="map-canvas"></div>
        </div>

        <div class="clear_float"></div>
    </div>

</section>