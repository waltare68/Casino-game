@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <h2>Balance replenishment</h2><br>
                                <p>(there should be a connection to payment systems, but it will work just like that)</p>
                            </div>
                        </div>                        
                        <div class="col-md-3">
                            <div >
                                <img src="{{ asset('img/okay.png')}}" width="90%" ></h2>
                            </div>
                        </div>
                    </div>
                </div>
                
                 
                <div class="panel-body">                                                              
                    <hr>                   
                    <form id="form1" action="{{route('balance.update', $user->id)}}" method="post">
                    	{{method_field('PUT')}}
                        {{csrf_field()}}
                        <p>
                            <label for="cash">Your balance:</label>
                            <br>                      
                            <input type="number" name="cash" class="form-control" id="cash" required="" value="{{$user->cash}}" style="width: 50%" step="0.01"/>
                            <br>                                     	                            
                        </p>
                        <div class="row" style="margin-left: 5%; margin-bottom: 10%">
                            <div class="col-md-3">                        
                                <input type="submit" class="btn btn-success btn-lg" name="submit" value="Top up" style="width: 120px; font-size: 12pt;">
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('balance.edit', $user->id)}}" class="btn btn-danger btn-lg" style="width: 120px; font-size: 12pt;">Cancel</a>
                            </div>                        
                    	</div>
                    </form>                                                          
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection