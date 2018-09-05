<!DOCTYPE html>
<head>
    <script type='text/javascript' src='<a href="http://code.jquery.com/jquery.min.js'></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src='script.js'></script>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link media="screen" href='style.css' rel="stylesheet" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <div id='frame'>
        <h1>Register Form</h1>
        <div id='response' class='alert alert-success'></div>
        <form class='form-horizontal' id="form1">
            <div class='control-group'>
                <label class="control-label">Username:</label>
                <div class='controls'>
                    <input type='text' class='input-large' placeholder='Username' id='username' />
                </div>
            </div>
            <div class='control-group'>
                <label class="control-label">Real Name:</label>
                <div class='controls'>
                    <input type='text' class='input-large' placeholder='Real Name' id='real-name' />
                </div>
            </div>
            <div class='control-group'>
                <label class="control-label">E-Mail:</label>
                <div class='controls'>
                    <input type='text' class='input-large' placeholder='E-Mail' id='email' />
                </div>
            </div>
            <a href='#' class='btn btn-inverse btn-large pull-right submit-btn'><i class='icon-ok icon-white'></i> Submit</a>
        </form>
    </div>
</body>
<script type="text/javascript">
    $(function(){
    $('.submit-btn').click(function(){
        var formInputs = new Array();
        //Get the form ID
        var id = $(this).parent().attr('id');
        $('#' + id + ' input').each(function(){
            //Get the input value
            var inputValue = $(this).val();
            //Get the input id
            var inputId = $(this).attr('id');
            //Add them to the array
            formInputs[inputId] = inputValue; 
        });
    });
});
$(function(){
    $('.submit-btn').click(function(){
        var formInputs = new Array();
        //Get the form ID
        var id = $(this).parent().attr('id');
        $('#' + id + ' input').each(function(){
            //Get the input value
            var inputValue = $(this).val();
            //Get the input id
            var inputId = $(this).attr('id');
            //Add them to the array
            formInputs[inputId] = inputValue; 
        });
        $.ajax({
            url: 'data.php',
            type: 'POST',
            data: {
                inputs: formInputs
            },
            success: function(data) {
 
            }
        });
    });
});
</script>