var options = "";
$("#type").change(function () {
    var value = $(this).val();

    if (value == "Dietary") {
        options = '<h4>DIETARY REQUIRED ATLEAST 2 ATTACHMENTS</h4>';
        $("#reminder").html(options).css("color", "#ff8800");
        $("#send").removeAttr('disabled');
        $('input#attachment').val('');


        $('input#attachment').change(function () {
            var files = $(this)[0].files;
            if (files.length > 1) {
                options = '<h5 class="alert alert-success">Please proceed now, Thank you!</h5>';
                $("#message").html(options);
                $("#send").removeAttr('disabled');
            } else {
                options = '<h5 class="alert alert-warning">Oooops! You selected less than 2 files</h5>';
                $("#message").html(options);
                $("#send").attr("disabled", "disabled");
            }
        });
    } else if (value == "Anthropometric") {
        options = '<h4>ANTHROPOMETRIC REQUIRED ATLEAST 1 ATTACHMENT</h4>';
        $("#reminder").html(options).css("color", "#ff8800");
        $("#send").removeAttr('disabled');
        $('input#attachment').val('');

        $('input#attachment').change(function () {
            var files = $(this)[0].files;
            if (files.length > 0) {
                options = '<h5 class="alert alert-success">Please proceed now, Thank you!</h5>';
                $("#message").html(options);
                $("#send").removeAttr('disabled');
            } else {
                options = '<h5 class="alert alert-warning">Oooops! No file selected</h5>';
                $("#message").html(options);
                $("#send").attr("disabled", "disabled");
            }
        });
    } else if (value == "eDCS Backup") {
        options = '<h4>EDCS BACKUP REQUIRED ATLEAST 1 ATTACHMENT</h4>';
        $("#reminder").html(options).css("color", "#ff8800");
        $("#send").removeAttr('disabled');
        $('input#attachment').val('');


        $('input#attachment').change(function () {
            var files = $(this)[0].files;
            if (files.length > 0) {
                options = '<h5 class="alert alert-success">Please proceed now, Thank you!</h5>';
                $("#message").html(options);
                $("#send").removeAttr('disabled');
            } else {
                options = '<h5 class="alert alert-warning">Oooops! No file selected</h5>';
                $("#message").html(options);
                $("#send").attr("disabled", "disabled");
            }
        });
    } else if (value == "Salt Sample") {
        options = '<h4>SALT SAMPLE REQUIRED ATLEAST 1 ATTACHMENT</h4>';
        $("#reminder").html(options).css("color", "#ff8800");
        $("#send").removeAttr('disabled');
        $('input#attachment').val('');


        $('input#attachment').change(function () {
            var files = $(this)[0].files;
            if (files.length > 0) {
                options = '<h5 class="alert alert-success">Please proceed now, Thank you!</h5>';
                $("#message").html(options);
                $("#send").removeAttr('disabled');
            } else {
                options = '<h5 class="alert alert-warning">Oooops! No file selected</h5>';
                $("#message").html(options);
                $("#send").attr("disabled", "disabled");
            }
        });
    }else if (value == "Food Item") {
        options = '<h4>FOOD ITEM LIST REQUIRED ATLEAST 1 ATTACHMENT</h4>';
        $("#reminder").html(options).css("color", "#ff8800");
        $("#send").removeAttr('disabled');
        $('input#attachment').val('');


        $('input#attachment').change(function () {
            var files = $(this)[0].files;
            if (files.length > 0) {
                options = '<h5 class="alert alert-success">Please proceed now, Thank you!</h5>';
                $("#message").html(options);
                $("#send").removeAttr('disabled');
            } else {
                options = '<h5 class="alert alert-warning">Oooops! No file selected</h5>';
                $("#message").html(options);
                $("#send").attr("disabled", "disabled");
            }
        });
	} else if (value == "Other Concerns") {
        options = '<h4>OTHER CONCERNS REQUIRED ATLEAST 1 ATTACHMENT</h4>';
        $("#reminder").html(options).css("color", "#ff8800");
        $("#send").removeAttr('disabled');
        $('input#attachment').val('');


        $('input#attachment').change(function () {
            var files = $(this)[0].files;
            if (files.length > 0) {
                options = '<h5 class="alert alert-success">Please proceed now, Thank you!</h5>';
                $("#message").html(options);
                $("#send").removeAttr('disabled');
            } else {
                options = '<h5 class="alert alert-warning">Oooops! No file selected</h5>';
                $("#message").html(options);
                $("#send").attr("disabled", "disabled");
            }
        });
  
    } else
        $("#reminder").find('h4').remove()
        $("#message").find('h5').remove()
        $('input#attachment').val('');

});