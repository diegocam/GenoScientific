function getBaseUrl() {
    var base_url = baseurl;
    return base_url;
}

function prevent_html_paste(elem) {
    elem.on('paste', function(e) {
        e.preventDefault();
        document.execCommand('inserttext', false, prompt('Please paste your content here.'));
    });
}

function even_odd() {
    var rowsArray = [];
    $('#result_message table>tbody>tr').each(function() {
        rowsArray.push(this);
    });
    $.each(rowsArray, function(i) {
        if (i % 2 == 0) {
            //even
            $(rowsArray[i]).css("background", "#EFEFEF");
        } else {
            //odd
            $(rowsArray[i]).css("background", "white");
        }
    });
}


function search(letter) {

    var search_letter = letter;

    $('#result_message').append('<h1 style="color:red; font-size:20px;margin-bottom:20px;">Laboratory Test Directory. Search Results for "' + search_letter.toUpperCase() + '"</h1>');

    var postData = {'letter': search_letter};
    var url = getBaseUrl() + "requests/get_data";
    $.post(url, postData, function(result) {

        if (result !== "failed") {

            var json = JSON.parse(result);
            $('#result_message').append('<table id="directory_table_list_result"><tbody>');
            $.each(json, function(i) {
                if (i % 2 === 0) {
                    $('#result_message table tbody').append(
                            '<tr class="even">\n\
                                            <td class="code">' + json[i].code + '</td>\n\
                                            <td><a class="lab_test_label" name="' + json[i].id + '" href="javascript:">' + json[i].name + '</a></td>\n\
                                        </tr>'
                            );
                } else {
                    $('#result_message table tbody').append(
                            '<tr class="odd">\n\
                                            <td class="code">' + json[i].code + '</td>\n\
                                            <td><a class="lab_test_label" name="' + json[i].id + '"href="javascript:">' + json[i].name + '</a></td>\n\
                                        </tr>'
                            );
                }
            });

            $(".lab_test_label").bind('click', function() {

                var id = $(this).attr('name');

                $('#result_message').slideUp(function() {
                    $('#result_message').empty();
                    var postData = {'id': id};
                    var url = getBaseUrl() + "requests/get_data_by_id";
                    $.post(url, postData, function(result) {

                        if (result !== "failed") {
                            var json = JSON.parse(result);

                            $.each(json, function(i) {

                                $('#result_message').append('<h1 style="color:red; font-size:20px;margin-bottom:20px;">Laboratory Test Directory</h1>');
                                $('#result_message').append('<h2 style="color:red; font-size: 16px; margin-bottom: 10px;" id="view_edit_name" class="editable">' + json[i].name + '</h2>');
                                $('#result_message').append('<h2 style="font-size: 14px; margin-bottom: 10px;"  id="view_edit_code" class="editable">' + json[i].code + '</h2>');
                                $('#result_message').append('<table id="directory_table_list_result"><tbody>');
                                if (json[i].methodology) {
                                    $('#result_message table tbody').append(
                                            '<tr>\n\
                                                            <td class="code">Methodology</td>\n\
                                                            <td><a class="editable" id="view_edit_methodology">' + json[i].methodology + '</a></td>\n\
                                                        </tr>'
                                            );
                                }
                                if (json[i].performed) {
                                    $('#result_message table tbody').append(
                                            '<tr>\n\
                                                            <td class="code">Performed</td>\n\
                                                            <td><a class="editable" id="view_edit_performed">' + json[i].performed + '</a></td>\n\
                                                        </tr>'
                                            );
                                }
                                if (json[i].reported) {
                                    $('#result_message table tbody').append(
                                            '<tr>\n\
                                                            <td class="code">Reported</td>\n\
                                                            <td><a class="editable" id="view_edit_reported">' + json[i].reported + '</a></td>\n\
                                                        </tr>'
                                            );
                                }
                                if (json[i].specimen_req) {
                                    $('#result_message table tbody').append(
                                            '<tr>\n\
                                                            <td class="code">Specimen Required</td>\n\
                                                            <td><a class="editable" id="view_edit_specimen">' + json[i].specimen_req + '</a></td>\n\
                                                        </tr>'
                                            );
                                }
                                if (json[i].cpt_code) {
                                    $('#result_message table tbody').append(
                                            '<tr>\n\
                                                            <td class="code">CPT Code</td>\n\
                                                            <td><a class="editable" id="view_edit_cpt">' + json[i].cpt_code + '</a></td>\n\
                                                        </tr>'
                                            );
                                }
                                if ($("#page_title h1").html() === 'Test Directory Database') {
                                    $('#result_message').append('<button name="' + json[i].id + '" class="edit_info">Edit Data</button>');
                                }

                                even_odd();



                                prevent_html_paste($('.editable'));

                            });

                            if ($("#page_title h1").html() === 'Test Directory Database') {

                                $('.edit_info').bind('click', function() {
                                    $('#view_edit_name').before('<div style="color:red; padding: 20px 0;">All fields are now clickable and editable. Click the "Submit Data" button below after you make your changes.</div>')
                                    var id = $(this).attr('name');
                                    $('.editable').attr("contenteditable", "true");
                                    $('.editable').css('padding', '2px');
                                    $('.editable').first().focus();
                                    $('.edit_info').remove();

                                    $('#result_message').append('<button class="submit_edited_data">Submit Data</button>');


                                    $('.submit_edited_data').click(function() {
                                        var postData = {
                                            id: id,
                                            name: $('#view_edit_name').html(),
                                            code: $('#view_edit_code').html(),
                                            methodology: $('#view_edit_methodology').html(),
                                            performed: $('#view_edit_performed').html(),
                                            reported: $('#view_edit_reported').html(),
                                            specimen_req: $('#view_edit_specimen').html(),
                                            cpt_code: $('#view_edit_cpt').html()
                                        };
                                        var url = getBaseUrl() + "inputs/submit_edited_data";
                                        $.post(url, postData, function(result) {
                                            if (result !== "failed") {
                                                $('#result_message').empty();
                                                $('#result_message').hide().html('Your data has been successfully updated in the Database. Please make another selection above.').fadeIn();

                                            }
                                        });
                                    });
                                });
                            }

                            $('#result_message').slideDown();


                        } else {
                            $('#result_message').append('<div>No Data Found</div>');
                        }
                    });
                });

            });


            $('#result_message').slideDown();

        } else {
            $('#result_message').append('<div>No Data Found</div>');
            $('#result_message').slideDown();
        }



    });

}



$(document).ready(function() {




    $('#new_data_container fieldset input[type="text"], #new_data_container fieldset textarea').on('paste', function(e) {
        e.preventDefault();
        document.execCommand('inserttext', false, prompt('Please paste your content here.'));
    });








    $("#new_data").click(function() {
        $('#result_message').hide();
        $('.result_containers').hide();
        $('.empty').hide();
        $('#new_data_container').show();
    });

    $("#view_edit_data").click(function() {
        $('#result_message').hide();
        $('.result_containers').hide();
        $('.empty').hide();
        $('#edit_data_container').show();
    });

    $('#new_data_container form').on("submit", function(event) {
        event.preventDefault();
        var text = $('textarea').val().replace(/\r\n|\r|\n/g, "<br />")
        $('textarea').val(text);
        var serializedForm = $(this).serialize();
        var url = getBaseUrl() + "inputs/submit_data";
        $.post(url, serializedForm, function(result) {
            if (result === 'success') {
                $('#new_data_container').hide();
                $('#result_message').hide().html('Your data has been successfully entered in the Database. Please make another selection above.').fadeIn();
                $('#new_data_container form')[0].reset();
            } else {
                $('#new_data_container').hide();
                $('#result_message').hide().html('There was an error in the system. Please contact your web developer').fadeIn();
                $('#new_data_container form')[0].reset();
            }
        });

    });




    $(".test_dir_selection").on('click', function() {
        var letter = $(this).html();
        $('#result_message_directory').empty();
        $('#result_message').empty();
        $('#result_message').hide();



        search(letter);

    });


    $(".left_nav_arrow").on("click", function() {
        $(this).parent().animate({left: 0});
    });

    $(document).on("click", function(e) {
        var clicked_elem = $(e.target);
        var parent_class = clicked_elem.parent().attr("class");
        console.log(parent_class);

        if (parent_class !== "hidden_left_nav" && parent_class !== "left_nav_arrow") {
            $(".hidden_left_nav").animate({left: -200});
        }
    });

});