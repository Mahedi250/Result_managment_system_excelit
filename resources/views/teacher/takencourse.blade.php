@extends('/teacher/index');

@section('main_content')

<style>
    table,td {
     
      padding: 20px;
    }
   
    </style>

<table>

 
     
<tr>
  @foreach ($subjectdata as $data)
    <td>
    <div class="card" style="width: 18rem;">
    
        <div class="card-body">
          <h5 class="card-title">{{$data->subject_name}}</h5>  
          <p class="card-text">{{$data->subject_code}}</p> 
          <a href="../teacher/Studentrecord/{{$data->id}}" class="btn btn-primary">Assign Result</a>
        </div>
      </div>
      

    </td> 

@endforeach

         
</tr>


  



</table>







  



@endsection