<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>  
    </head>
    <body class="antialiased">
       <div>
           <h2>Add Events</h2>
           <h3><a href="{{url('event/list')}}">Event List</a></h3>
           <div>
            @if(session()->has('msg'))
                <h3 style="color: blue"> {{session()->get('msg')}}</h3>
            @endif
            @if($errors->any())
            <ul style="background: red">
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
           </div>
           <div>
            <form method="POST" action="{{ url('add/event')}}">
                @csrf
               <label> Event title</label>
               <input type="text" name="title" placeholder="Event title"><br>
               <label> Event start date</label>
               <input type="text" name="start_date" id="start_date"><br>
               <label> Event end date</label>
               <input type="text" name="end_date" id="end_date"><br>
               <label> Recurrence</label>
               <select name="first_drop">
                <option value="0">select</option>
                <option value="Every">Every </option>
                <option value="Every other">Every other </option>
                <option value="Every third">Every third </option>
                <option value="Every fourth">Every fourth </option>
               </select>
               <select name="second_drop">
                <option value="0">select</option> 
                <option value="Day">Day</option>
                <option value="Week">Week</option>
                <option value="Month">Month</option>
                <option value="Year">Year</option>
               </select><br>
               <button type="submit">submit</button>
            </form>
           </div>
          
       </div>
    </body>
</html>
<script>
  $( function() {
    $( "#start_date" ).datepicker({minDate:0 ,dateFormat: 'yy-mm-dd' });
    $( "#end_date" ).datepicker({minDate:0 ,dateFormat: 'yy-mm-dd'});
  } );
</script>