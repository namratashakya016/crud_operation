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
        <h2>Event List</h2>
        <h3><a href="{{url('/')}}">Add Event</a></h3>
            @if(session()->has('msg'))
                <h3 style="color: blue"> {{session()->get('msg')}}</h3>
            @endif
           
           <div>
            <table border="1" style="">
              <tr>
                <th>Event</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Recurrence</th>
                <th>Action</th>
              </tr>
             @if($list)
              @foreach($list as $row)
              <tr>             
                <td class="tabletd">{{ $row->title }}</td>
                <td class="tabletd">{{ $row->start_date }}</td>
                <td class="tabletd">{{ $row->end_date }}</td>
                <td class="tabletd">{{ $row->first_drop }} {{ $row->second_drop}}</td>
                <td class="tabletd">
                  <a href="{{ url('event/view/'.$row->id)}}">View</a>
                  <a href="{{ url('event/delete/'.$row->id)}}">Delete</a>
                  <a href="{{ url('event/edit/'.$row->id)}}">Update</a>
                </td>
              </tr>
                @endforeach
              @endif
              
            </table>

           </div>
          
       </div>
    </body>
</html>
