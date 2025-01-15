@vite('resources/css/app.css')
@vite('resources/js/app.js')
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
</div>
<div class="control-group">
    <span>
        <b>
            Location
        </b>
    </span>
    {{-- <legend><b>Location</b></legend> --}}
    <input type="textaria" id="location">
</div>
<div>
    <b>Phone Number</b>
    <input type="text" id="phone">
</div>
<div>
    <b>organigation name</b>
    <input type="text" id="organigation">
</div>

<div>
    <b>Profile Pic</b>
    <input type="text" id="organigation">
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

                    // Validate inputs
                    if (!full_name || !location || !phone) {
                        alert("All fields are required!");
                        return;
                    }

                    // Prepare data
                    var data = {
                        full_name: full_name,
                        location: location,
                        phone: phone,
                        _token: "{{ csrf_token() }}" // Include CSRF token if necessary
                    };

                    // Display data for debugging
                    console.log(data);

                    // AJAX request
                    $.ajax({
                        type: "POST",
                        url: "{{ url('/user') }}",
                        data: data,
                        success: function (result) {
                            // alert("Success: " + result);
                            alert("data Succesfully Inserted");
                            var redirectUrl = "/userview";
				             window.location.href = redirectUrl;

                        },

                    });
                }
            </script>

</body>
</html>
