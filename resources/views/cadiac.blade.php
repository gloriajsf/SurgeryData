@extends('app')

@section('content')

<div class="container">
    <div class="tab-content">
        <div class="tab-pane active" id="cadiac">
            <div class="row" >  
                <div class="container-fluid" style="width: 2000 px">
                    <div>
                       @if( count($cadiac)>0 && count($cadiacColumns) > 0)
                        <table class="table table-striped" id="datatables">
                            <thead>
                                <tr>
                                    @for($i = 0; $i < count($cadiacColumns);$i++)
                                        @if(!in_array($i, [1,2,4,5,6,7]))
                                            <th>{{ $cadiacColumns[$i]['name'] }}</th>
                                        @endif
                                    @endfor
                                </th>
                            </thead>
                            <tbody>
                                @foreach($cadiac as $c)
                                    <tr>
                                        @for($i = 0; $i < count($c); $i ++)
                                            @if(!in_array($i, [1,2,4,5,6,7]))
                                                @if($i == 3)
                                                    <td>{{ date('m/d/Y',$c[$i]) }}</td>
                                                @else
                                                    <td>{{ $c[$i] }}</td>
                                                @endif
                                            @endif
                                        @endfor
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif 
                           
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="tab-pane" id="inpatient">
            <div class="row" >  
                <div class="container-fluid" style="width: 2000 px">
                    <div>
                       @if( count($inpatientColumns) > 0)
                        <table class="table table-striped" id="datatables">
                            <thead>
                                <tr>
                                    @for($i = 0; $i < count($inpatientColumns);$i++)
                                        <th>{{ $inpatientColumns[$i]['name'] }}</th>
                                    @endfor
                                </th>
                            </thead>
                            <tbody>
                                @foreach($inpatient as $c)
                                    <tr>
                                        @for($i = 0; $i < count($c); $i ++)
                                            <td>{{ $c[$i] }}</td>
                                        @endfor
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif 
                           
                    </div>
                </div>
            </div>
        </div>-->
    </div>    
</div>
    
<script>
$(document).ready(function() {
    $('#datatables').DataTable();
});
</script>
@endsection
