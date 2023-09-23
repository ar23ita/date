<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.4/css/bootstrap-datetimepicker.min.css">


</head>
<body>
<div class="container">
    <div class="row">
    <form method="POST" action="{{ url('save-date-time-picker') }}">

    @csrf

           <h2 style="background-color: yellow">Start Date</h2>
              <br />
              <input type="text" name="start_date" id="dateTimePicker" style="font-weight: bold" class="form-control input-lg" required="required">
           <h2 style="background-color: yellow">End Date</h2>
        <br />
        <input type="text" name="end_date" id="endDateTimePicker" style="font-weight: bold" class="form-control input-lg">
        <br/>
            <button type="submit" class="btn btn-warning">Submit</button>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment-with-locales.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.4/js/bootstrap-datetimepicker.min.js"></script>

<script>
$(document).ready(function(){
    $('#dateTimePicker').datetimepicker({
        format : 'DD/MM/YYYY HH:mm:ss',
        todayHighlight: true,
        autoclose: true,
        language: 'tr', 
        useSeconds: true
    });
    $('#endDateTimePicker').datetimepicker({ 
       format : 'DD/MM/YYYY HH:mm:ss',
        todayHighlight: true,
        autoclose: true,
        language: 'tr', 
        useSeconds: true
    });


    $('#dateTimePicker').onchange('dp', function (e) {
        var deger = e.date.format('DD/MM/YYYY HH:mm:ss');
        $("h2").html("<font color=green>" + deger + "</font>");
    });
    $('#endDateTimePicker').onchange('dp', function (e) { 
        var deger = e.date.format('DD/MM/YYYY HH:mm:ss');
        $("h2").html("<font color=blue>" + deger + "</font>"); 
    });

    
});
</script>

</body>
</html>

