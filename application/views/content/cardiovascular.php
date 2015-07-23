<style>

    #cardiac_risk_circles {
        width: 750px;
        margin: 20px auto;
    }

    #cardiac_risk_circles #cardiac_risk_circles_container {
        height: 750px;
        width: 750px;
    }

    #cardiac_risk_circles .column {
        float: left;
    }

    #cardiac_risk_circles .side_circles {
        height: 150px;
        width: 150px;
        background: url('<?php echo base_url(); ?>images/purple-circle2.gif') no-repeat;

        background-image: -webkit-gradient(
            linear,
            left top,
            left bottom,
            color-stop(0.47, #49A2F5),
            color-stop(1, #BFEFFF)
        );

        /* IE10 Consumer Preview */
        background-image: -ms-linear-gradient(bottom, #FFE0F1 0%, #EF5487 100%);

        /* Mozilla Firefox */
        background-image: -moz-linear-gradient(bottom, #FFE0F1 0%, #EF5487 100%);

        /* Opera */
        background-image: -o-linear-gradient(bottom, #FFE0F1 0%, #EF5487 100%);

        /* Webkit (Safari/Chrome 10) */
        background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #FFE0F1), color-stop(1, #EF5487));

        /* Webkit (Chrome 11+) */
        background-image: -webkit-linear-gradient(bottom, #FFE0F1 0%, #EF5487 100%);

        /* W3C Markup, IE10 Release Preview */
        background-image: linear-gradient(to top, #FFE0F1 0%, #EF5487 100%);
        border-radius: 50%;
    }

    #cardiac_risk_circles .row {
        width: 450px;
    }

    #cardiac_risk_circles .row .side_circles {
        float: left;
    }

    #cardiac_risk_circles #top_row {
        height: 150px;
    }

    #cardiac_risk_circles #mid_row {
        height: 450px;
    }

    #cardiac_risk_circles .middle_circle {
        height: 450px;

        background: url('<?php echo base_url(); ?>images/purple-circle3.gif') no-repeat;

        /* IE10 Consumer Preview */
        background-image: -ms-radial-gradient(center top, circle farthest-side, #FFE0F1 0%, #EF5487 100%);

        /* Mozilla Firefox */
        background-image: -moz-radial-gradient(center top, circle farthest-side, #FFE0F1 0%, #EF5487 100%);

        /* Opera */
        background-image: -o-radial-gradient(center top, circle farthest-side, #FFE0F1 0%, #EF5487 100%);

        /* Webkit (Safari/Chrome 10) */
        background-image: -webkit-gradient(radial, center top, 0, center top, 475, color-stop(0, #FFE0F1), color-stop(1, #EF5487));

        /* Webkit (Chrome 11+) */
        background-image: -webkit-radial-gradient(center top, circle farthest-side, #FFE0F1 0%, #EF5487 100%);

        /* W3C Markup, IE10 Release Preview */
        background-image: radial-gradient(circle farthest-side at center top, #FFE0F1 0%, #EF5487 100%);

        border-radius: 50%;
    }

    #cardiac_risk_circles #bottom_row {
        height: 150px;
    }

    #cardiac_risk_circles .corner_circles {
        background-color: white;
        background-image: none;
    }

    #cardiac_risk_circles .side_circles p {
        width: 150px;
        height: 150px;
        display: table;
    }

    #cardiac_risk_circles .side_circles a {
        display: table-cell;
        vertical-align: middle;
        text-align: center;
        text-decoration: none;
        font-size: 14px;
        font-weight: bold;
        text-shadow: 1px 1px 1px blue;
        padding: 10px;
        color: white;
        border-radius: 50%;
        transition-delay: 1s;
    }

    #cardiac_risk_circles .middle_circle a:hover,
    #cardiac_risk_circles .side_circles a:hover {
        color: purple;

        /* IE10 Consumer Preview */
        background-image: -ms-radial-gradient(center top, circle farthest-corner, #6E8CEF 0%, #E6CCFF 100%);

        /* Mozilla Firefox */
        background-image: -moz-radial-gradient(center top, circle farthest-corner, #6E8CEF 0%, #E6CCFF 100%);

        /* Opera */
        background-image: -o-radial-gradient(center top, circle farthest-corner, #6E8CEF 0%, #E6CCFF 100%);

        /* Webkit (Safari/Chrome 10) */
        background-image: -webkit-gradient(radial, center top, 0, center top, 551, color-stop(0, #6E8CEF), color-stop(1, #E6CCFF));

        /* Webkit (Chrome 11+) */
        background-image: -webkit-radial-gradient(center top, circle farthest-corner, #6E8CEF 0%, #E6CCFF 100%);

        /* W3C Markup, IE10 Release Preview */
        background-image: radial-gradient(circle farthest-corner at center top, #6E8CEF 0%, #E6CCFF 100%);
    }

    #cardiac_risk_circles .middle_circle p {
        width: 100%;
        height: 100%;
        display: table;
    }

    #cardiac_risk_circles .middle_circle a {
        display: table-cell;
        vertical-align: middle;
        text-align: center;
        text-decoration: none;
        font-size: 20px;
        text-shadow: #2CA5F5 0.1em 0.1em 0.2em;
        font-weight: bold;
        padding: 10px;
        color: white;
        border-radius: 50%;
    }

    #cardiovascular_title {
        text-align: center;
        font-size: 25px;
        font-weight: bold;
    }

    #cardiovascular_section {
        width: 1000px;
        margin: 20px auto;
        padding: 0 10px;
        line-height: 22px;
        font-size: 14px;
    }

    #cardiovascular_section h1 {
        font-size: 30px;
        font-weight: bold;
        line-height: 28px;
        text-align: center;
    }

    #cardiovascular_section h2 {
        font-size: 18px;
        font-weight: bold;
        text-align: center;
    }

    #cardiovascular_section h3 {
        font-size: 16px;
        font-weight: bold;
    }
    #author_signature{
        text-align: center;
        font-weight: bold;
        font-size: 14px;
    }
</style>
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
                        <span itemprop="name">Cardiovascular Genetics</span>
                    </a>
                    <meta itemprop="position" content="2"/>
                </li>
            </ul>
        </nav>
    </div>
</div>
<section class="content_section">

    <h2 class="pagetitle_heading">The Corner Stone of Personalized Medicine</h2>
    <br>
    <p>
        Cardiovascular Panel offered by CLIA and CMS certified Genoscientific Laboratory provides individualized drug
        metabolism and cardiovascular risk assessments. Both help cardiologists determine the right drug and the right
        dosage for each patient. Testing is done by a simple cheek swab and is covered by Medicare and most private
        insurance plans.
    </p>
    <br>
    <p>
        The GDx cardiac panel test consists of two elements. First, Thrombotic risk assessment by analyzing Coagulation
        specific genes such as Factor II, Factor VL, MTHFR, Factor XIIIb, PAI-1, IL-6, ACE Genotype. Second level of
        information comes from the drug metabolism of the CYP450 system from liver, which allows physicians to
        determine if patients can properly metabolize Clopidogrel (Plavix®), Warfarin (Coumadin) and Beta Blockers.
        Cytochrome P450 2C19 (CYP2C19) enzyme is involved in the liver's metabolism of several critically important
        drugs like Plavix, an anti-blood clotting medication. According to a 2010 FDA announcement, about 2 to 14 percent
        of the population is poor metabolizers of Plavix based on CYP2C19 function. These patients do not effectively
        convert Plavix to its active form because of low CYP2C19 activity, which reduces the drug’s effectiveness as a
        preventative therapy for heart attacks, unstable angina, stroke and cardiovascular death. The second element of
        this test is the cardiovascular risk assessment.
    </p>
    <br>
    <p>
        Many different studies have shown that people with these gene variants carry double or even triple the risk of
        death from heart attack or stroke compared to people with normal metabolism. Genetic testing can help identify
        those at higher risk, enabling physicians to adjust their treatment.
    </p>
    <br>
    <p>
        We believe there is great significance in genetic testing. As one of the only laboratory in the NJ area that offers this
        test, private physicians can deliver highly individualized treatment on multiple levels. Once physician understand
        the genotype—or genetic make-up—of each heart patient, one can use this specialized information to guide
        cardiovascular therapy that’s designed to conform to a patient’s distinct characteristics.
    </p>
    <br>
    <ul class="normal_ul_list">
        <li>
            Genomic testing is advancement in personalized medical care that allows physicians to know a priori how patient
            will metabolize a specific drug.
        </li>
        <li>
            Simple genotyping and viable drug alternatives available offer clinicians the roadmap to effectively guide therapy
            in patient with at-risk gene variants and potentially prevent tens of thousands of adverse events.
        </li>
        <li>
            the right drug, at the right dose, for the right patients…instead of one-size fit all prescribing”
        </li>
    </ul>
    <br>
    <div id="author_signature">
        -FRANCIS COLLINS, MD<br>
        DIRECTOR, NATIONAL INSTITUTE OF HEALTH
    </div>
    <br><br><br>
    <div id="cardiovascular_title"> Click on any of the circles below to get more information:</div>
    <div id='cardiac_risk_circles'>


        <div id='cardiac_risk_circles_container'>
            <div class='column'>
                <div class='side_circles corner_circles'></div>
                <div class='side_circles' style='margin-left: 40px; position:absolute;'>
                    <p>
                        <a href="">
                            CYP 450 2c19-Plavix<br/>
                            CYP 2c9-VK0RC1<br/>
                            CYP 450 26D Beta Blocker
                        </a>
                    </p>
                </div>
                <div class='side_circles' style='margin-top: 150px;'>
                    <p>
                        <a href="<?php echo base_url() ?>cardiovascular-genetics/lpa-aspirin-genotype">Aspirin Genotyping</a>
                    </p>
                </div>
                <div class='side_circles' style='margin-left: 40px; position:absolute;'>
                    <p>
                        <a href="">
                            Apolipoprotein B<br/>
                            (APOB) Mutation Detection
                        </a>
                    </p>
                </div>
                <div class='side_circles corner_circles'></div>
            </div>
            <div class='column'>
                <div id='top_row' class='row'>
                    <div class='side_circles' style='margin: 40px 0 0 0; position:absolute;'>
                        <p>
                            <a href="<?php echo base_url() ?>cardiovascular-genetics/satin-induced-myopathy-slc01b1-genotype">
                                Satin Induced<br/>
                                Myopathy SLCO1B1 Genotype
                            </a>
                        </p>
                    </div>
                    <div class='side_circles' style='margin: 0 0 0 150px;'>
                        <p>
                            <a href="<?php echo base_url() ?>cardiovascular-genetics/factor-II-prothrombin-genotype">
                                Factor II (Prothrombin) Genotype
                            </a>
                        </p>
                    </div>
                    <div class='side_circles' style='margin: 40px 0 0 300px; position:absolute;'>
                        <p>
                            <a href="<?php echo base_url() ?>cardiovascular-genetics/factor-v-leiden-genotype">
                                Factor V Leiden Genotype
                            </a>
                        </p>
                    </div>
                </div>
                <div id='mid_row' class='row'>
                    <div class='middle_circle'>
                        <p>
                            <a href="">
                                Thrombotic Cardiac Risk Assesment
                            </a>
                        </p>
                    </div>
                </div>
                <div id='bottom_row' class='row'>
                    <div class='side_circles' style='margin: -40px 0 0 0; position:absolute;'>
                        <p>
                            <a href="<?php echo base_url() ?>cardiovascular-genetics/apoe-apolipoprotein">
                                Apolipoprotein E<br/>
                                (APOE) 2 Mutations
                            </a>
                        </p>
                    </div>
                    <div class='side_circles' style='margin: 0 0 0 150px;'>
                        <p>
                            <a href="<?php echo base_url() ?>cardiovascular-genetics/factor-xiii-f131a1">
                                Factor XIII (F13A1)<br/>
                                V34L Variant
                            </a>
                        </p>
                    </div>
                    <div class='side_circles' style='margin: -40px 0 0 300px; position:absolute;'>
                        <p>
                            <a href="<?php echo base_url() ?>cardiovascular-genetics/interleukin-6-polymorphism">
                                Interleukin-6 (IL-6)<br/>
                                G-174C<br/>
                                Polymorphisim
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class='column'>
                <div class='side_circles corner_circles'></div>
                <div class='side_circles' style='margin-left: -40px; position:absolute;'>
                    <p>
                        <a href="<?php echo base_url() ?>cardiovascular-genetics/mthfr-c677t-a1298c">
                            MTHFR C677T,<br/>
                            A1298C
                        </a>
                    </p>
                </div>
                <div class='side_circles' style='margin-top: 150px;'>
                    <p>
                        <a href="<?php echo base_url() ?>cardiovascular-genetics/pai-1-plasminogen-activator-inhibitor">
                            PAI- 4G/5G
                        </a>
                    </p>
                </div>
                <div class='side_circles' style='margin-left: -40px; position:absolute;'>
                    <p>
                        <a href="<?php echo base_url() ?>cardiovascular-genetics/ace-genotyping">
                            ACE Genotyping for Coronary Risk Assesment
                        </a>
                    </p>
                </div>
                <div class='side_circles corner_circles'></div>
            </div>
        </div>
    </div>


</section>