@vite('resources/css/app.css')
@vite('resources/js/app.js')
@include('navbar')
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Document</title>
</head>
<body>


<title>My New project</title>

<h1 class="text-slate-500 hover:text-red-600">Dashbor</h1>

<div>
    <div class="control-group">
        <span>
            <b>
                Full name
            </b>
        </span>
        <input type="text" class="small" id="full_name">
    </div>
    <div class="control-group">
        <span>
            <b>
                Location
            </b>
        </span>
        <input type="text" class="small" id="location">
    </div>
    <div class="control-group">
        <span>
            <b>
                Phone
            </b>
        </span>
        <input type="text" class="small" id="phone">
    </div>
    <br>
    <div class="control-group">
        <span>
            <b>
                Profile Picture
            </b>
        </span>
        <input type="file" class="small" id="profile_picture">
    </div>
</div>

        <button onclick="add_somthing()" style="btn btn-small btn-success">
            Click me   </button>
            <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    function add_somthing() {
        // Get values from the form
        var full_name = $("#full_name").val().trim();
        var location = $("#location").val().trim();
        var phone = $("#phone").val().trim();
        var profile_picture = $('#profile_picture')[0].files[0];

        // Validate inputs
        if (!full_name || !location || !phone) {
            alert("All fields are required!");
            return;
        }

        // Prepare FormData for file upload
        var formData = new FormData();
        formData.append('full_name', full_name);
        formData.append('location', location);
        formData.append('phone', phone);
        formData.append('_token', "{{ csrf_token() }}");
        if (profile_picture) {
            formData.append('profile_picture', profile_picture);
        }

        // AJAX request
        $.ajax({
            type: "POST",
            url: "{{ url('/user') }}",
            data: formData,
            contentType: false,  // Required for file upload
            processData: false,  // Required for file upload
            success: function (result) {
                alert("Data Successfully Inserted");
                var redirectUrl = "/userview";
                window.location.href = redirectUrl;
            },
            error: function (xhr) {
                let errors = xhr.responseJSON.errors;
                let errorMessage = 'Please fix the following errors:\n';
                for (const key in errors) {
                    errorMessage += `${errors[key]}\n`;
                }
                alert(errorMessage);
            }
        });
    }
</script>

</body>
</html>
