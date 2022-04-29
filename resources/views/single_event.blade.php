<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>  
    
    <style type="text/css">
      .tabletd{
        padding: 15px;
      }
    </style>
    </head>

    <body class="antialiased">
       <div>
        <h2>Event View</h2>
        <h3><a href="{{url('/')}}">Add Event</a></h3>
        <h3><a href="{{url('event/list')}}">Event List</a></h3>
           <div>
            <table border="1" style="">
              <tr>
                <th>Event</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Recurrence</th>
              </tr>
              <tr>             
                <td class="tabletd">{{ $event[0]->title }}</td>
                <td class="tabletd">{{ $event[0]->start_date }}</td>
                <td class="tabletd">{{ $event[0]->end_date }}</td>
                <td class="tabletd">{{ $event[0]->first_drop }} {{ $event[0]->second_drop}}</td>
               
              </tr>
              
            </table>

           </div>
          
       </div>
    </body>
</html>
