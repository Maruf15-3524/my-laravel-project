<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <div>
       <div>
        <span>Full org  Name:</span>
    <input type="text" name="" id="full_name" value="{{ $editusevariable->full_name }}">
        </div>
        <div>
        <span>Location:</span>
    <input type="text" name="" id="location" value="{{ $editusevariable->location }}">
        </div>
        <div>
        <span>Phone:</span>
    <input type="text" name="" id="phone" value="{{ $editusevariable->phone }}">
        </div>
    <input type="hidden" name="" id="edit_id" value="{{ $editusevariable->id }}">
    <img src="{{ asset('storage/' . $editusevariable->profile_pic) }}" width="100" alt="Profile Picture">
    </div>
    <button type="submit" onclick="upadate_bnt()">update</button>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        // Include CSRF token in headers
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    function upadate_bnt() {
        var full_name = $("#full_name").val();
         var location = $("#location").val();
         var phone = $("#phone").val();

        var edit_id = $("#edit_id").val();

        if (!full_name || !edit_id) {
            alert("Full name or ID is missing!");
            return;
        }

        var data = {
            full_name: full_name,
            location: location,
            phone: phone,
            id: edit_id
        };

        $.ajax({
            type: "POST",
            url: "{{ url('/upadte') }}",
            data: data,
            success: function(result) {
                alert("Data successfully Updated");
                window.location.href = "/userview";

            },

        });
    }
</script>
