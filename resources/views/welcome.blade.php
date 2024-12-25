<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My New projectvvp</title>
</head>
<div>
    <div class="control-group">
        <span>
            <b>
                full name
            </b>
        </span>
    </div>
</div>
<body>
    <?php
        echo "Hello, World!";
        ?>
        <button click="add_somthing()" style="btn btn-small btn-success">
            Click me   </button>

</body>
</html>
<script>
    function add_somthing(){
        alert("Hello, World!");
        $.ajax({
          type: "POST",
          url: "user/my_project/result_sms_ajax.php",
          data: datastra,
          success: function(result) {
            alert(result);
          }
        });
    }
</script>
