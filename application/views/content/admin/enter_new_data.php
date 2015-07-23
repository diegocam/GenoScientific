<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Scientific</title>
        <script>
            var baseurl = "<?php echo base_url(); ?>";
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>scripts/functions.js"></script>
        <link href="<?php echo base_url(); ?>styles/main.css" rel="stylesheet"> 
        <style>
            #container{
                width: 1000px;
                margin: 20px auto;
            }
            
            
            #page_title h1{
                font-size: 20px;
                margin-bottom: 20px;
            }
            
            ul li{
                margin: 5px 0;
            }
            
            #results{
                width:90% !important;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <section>

                    <div id="page_title">
                        <h1>Test Directory Database</h1>
                        <h2>Welcome <?php echo ucfirst($_SESSION['username']);?>, please click on one of the following links to get started:</h2>
                        <br>
                    </div>

                    <div>
                        <ul>
                            <li><a href="javascript:" id="new_data" >Enter New Data</a></li>
                            <li><a href="javascript:" id="view_edit_data" >View/Edit Data</a></li>
                            <li><a href="<?php echo base_url();?>auth/logout">Logout and return to home page</a></li>
                        </ul>
                    </div>

                    <div id="results">
                        <div class="empty">Please make your selection above</div>

                        <div id="new_data_container" class="result_containers">
                            <h2>ENTER NEW DATA</h2>
                            <form>
                                <fieldset>
                                    <label>Name:</label>
                                    <input name="name" type="text" required/>
                                </fieldset>
                                <fieldset>
                                    <label>Code:</label>
                                    <input name="code" type="text" required/>
                                </fieldset>
                                <fieldset>
                                    <label>Methodology:</label>
                                    <input name="methodology" type="text" required/>
                                </fieldset>
                                <fieldset>
                                    <label>Performed:</label>
                                    <input name="performed" type="text" required/>
                                </fieldset>
                                <fieldset>
                                    <label>Reported:</label>
                                    <input name="reported" type="text" required/>
                                </fieldset>
                                <fieldset>
                                    <label>Specimen Required:</label>
                                    <textarea name="specimen_req" required></textarea>
                                </fieldset>
                                <fieldset>
                                    <label>CPT Code(s):</label>
                                    <input name="cpt_code" type="text" required/>
                                </fieldset>
                                <fieldset style="text-align: center;"><input type="submit" value="Save to Database"/></fieldset>
                            </form>
                        </div>


                        <div id="edit_data_container" class="result_containers">
                            <h2>VIEW EDIT/DATA</h2>
                            <div>
                                <h2>Laboratory Test Directory</h2>
                                <a href="javascript:" class="test_dir_selection">a</a>
                                <a href="javascript:" class="test_dir_selection">b</a>
                                <a href="javascript:" class="test_dir_selection">c</a>
                                <a href="javascript:" class="test_dir_selection">d</a>
                                <a href="javascript:" class="test_dir_selection">e</a>
                                <a href="javascript:" class="test_dir_selection">f</a>
                                <a href="javascript:" class="test_dir_selection">g</a>
                                <a href="javascript:" class="test_dir_selection">h</a>
                                <a href="javascript:" class="test_dir_selection">i</a>
                                <a href="javascript:" class="test_dir_selection">j</a>
                                <a href="javascript:" class="test_dir_selection">k</a>
                                <a href="javascript:" class="test_dir_selection">l</a>
                                <a href="javascript:" class="test_dir_selection">m</a>
                                <a href="javascript:" class="test_dir_selection">n</a>
                                <a href="javascript:" class="test_dir_selection">o</a>
                                <a href="javascript:" class="test_dir_selection">p</a>
                                <a href="javascript:" class="test_dir_selection">q</a>
                                <a href="javascript:" class="test_dir_selection">r</a>
                                <a href="javascript:" class="test_dir_selection">s</a>
                                <a href="javascript:" class="test_dir_selection">t</a>
                                <a href="javascript:" class="test_dir_selection">u</a>
                                <a href="javascript:" class="test_dir_selection">v</a>
                                <a href="javascript:" class="test_dir_selection">w</a>
                                <a href="javascript:" class="test_dir_selection">x</a>
                                <a href="javascript:" class="test_dir_selection">y</a>
                                <a href="javascript:" class="test_dir_selection">z</a>
                            </div>	
                        </div>

                        <div id="result_message"></div>
                    </div>

            </section>
        </div>
    </body>
</html>