<style>
    #directory_letters{
        width: auto;
        height: auto;
        float: none;
        border-right: none;
        border-bottom: none;
        margin-top: 0;
        line-height: 15px;
    }

    #directory_letters_wrapper {
        width: 810px;
        margin: 20px auto;
    }
</style>

<section class="content_section">
    <div>
        <div class="breadcrumbs_container">
            <nav>
                <ul class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                    <li typeof="v:Breadcrumb">
                        <a rel="v:url" property="v:title" href="<?php echo base_url(); ?>">Home</a>
                        <span>»</span>
                    </li>
                    <li typeof="v:Breadcrumb">
                        <a rel="v:url" property="v:title" href="<?php echo base_url(); ?>test-directory">Test-Directory</a>
                        <span>»</span>
                    </li>
                    <li typeof="v:Breadcrumb">
                        <a class="active" property="v:title">Search Results for "<?php echo $search_item; ?>"</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="pagetitle_heading">
            <h1>Laboratory Test Directory</h1>
        </div>
        <br>
        <p style="text-align: center;">
            Click on one of the following to search through our test directory by letter.
        </p>

        <div id='directory_letters'>
            <div id="directory_letters_wrapper">
                <a href="<?php echo base_url();?>test-directory/a" class="test_dir_selection">a</a>
                <a href="<?php echo base_url();?>test-directory/b" class="test_dir_selection">b</a>
                <a href="<?php echo base_url();?>test-directory/c" class="test_dir_selection">c</a>
                <a href="<?php echo base_url();?>test-directory/d" class="test_dir_selection">d</a>
                <a href="<?php echo base_url();?>test-directory/e" class="test_dir_selection">e</a>
                <a href="<?php echo base_url();?>test-directory/f" class="test_dir_selection">f</a>
                <a href="<?php echo base_url();?>test-directory/g" class="test_dir_selection">g</a>
                <a href="<?php echo base_url();?>test-directory/h" class="test_dir_selection">h</a>
                <a href="<?php echo base_url();?>test-directory/i" class="test_dir_selection">i</a>
                <a href="<?php echo base_url();?>test-directory/j" class="test_dir_selection">j</a>
                <a href="<?php echo base_url();?>test-directory/k" class="test_dir_selection">k</a>
                <a href="<?php echo base_url();?>test-directory/l" class="test_dir_selection">l</a>
                <a href="<?php echo base_url();?>test-directory/m" class="test_dir_selection">m</a>
                <a href="<?php echo base_url();?>test-directory/n" class="test_dir_selection">n</a>
                <a href="<?php echo base_url();?>test-directory/o" class="test_dir_selection">o</a>
                <a href="<?php echo base_url();?>test-directory/p" class="test_dir_selection">p</a>
                <a href="<?php echo base_url();?>test-directory/q" class="test_dir_selection">q</a>
                <a href="<?php echo base_url();?>test-directory/r" class="test_dir_selection">r</a>
                <a href="<?php echo base_url();?>test-directory/s" class="test_dir_selection">s</a>
                <a href="<?php echo base_url();?>test-directory/t" class="test_dir_selection">t</a>
                <a href="<?php echo base_url();?>test-directory/u" class="test_dir_selection">u</a>
                <a href="<?php echo base_url();?>test-directory/v" class="test_dir_selection">v</a>
                <a href="<?php echo base_url();?>test-directory/w" class="test_dir_selection">w</a>
                <a href="<?php echo base_url();?>test-directory/x" class="test_dir_selection">x</a>
                <a href="<?php echo base_url();?>test-directory/y" class="test_dir_selection">y</a>
                <a href="<?php echo base_url();?>test-directory/z" class="test_dir_selection">z</a>
            </div>
        </div>

        <div>

            <div id="result_message">
                <table id="directory_table_list_result">
                    <tbody>

                        <?php
                        if ($letter_result) {


                            $loop = 0;
                            echo '<h1 style="color:red; font-size:20px;margin-bottom:20px;">Laboratory Test Directory. Search Results for "' . $search_item . '"</h1>';
                            $results_num = count($letter_result);
                            if ($results_num > 1) {
                                echo '<h3>There are ' . $results_num . ' results found</h3>';
                            } else {
                                echo '<h3>There is ' . $results_num . ' result found</h3>';
                            }
                            foreach ($letter_result as $result) {

                                $url_name = str_replace(' ', '-', strtolower($result['name']));

                                if ($loop % 2 === 0) {
                                    ?>
                                    <tr class="even">
                                        <td class="code"><?php echo $result['code']; ?></td>
                                        <td>
                                            <a class="lab_test_label" name="<?php echo $result['id']; ?>" href="<?php echo base_url() . "test-directory/" . $search_item . "/" . $result['code'] . "/" . $url_name; ?>">
                                                <?php echo $result['name']; ?>
                                            </a>
                                        </td>
                                    </tr>

                                    <?php
                                } else {
                                    ?>
                                    <tr class="odd">
                                        <td class="code"><?php echo $result['code']; ?></td>
                                        <td>
                                            <a class="lab_test_label" name="<?php echo $result['id']; ?>" href="<?php echo base_url() . "test-directory/" . $search_item . "/" . $result['code'] . "/" . $url_name; ?>">
                                                <?php echo $result['name']; ?>
                                            </a>
                                        </td>
                                    </tr>

                                    <?php
                                }
                                $loop++;
                            }
                        } else {
                            echo '<h1 style="color:red; font-size:20px;margin-bottom:20px;">NO DATA FOUND</h1>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>