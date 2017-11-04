@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
     @include('common.errors')
     <form action="{{ url('books/update') }}" method="POST">
     
     <div class="form-group">
     <label for="item-name">title</label>
     <input type="text" id="item_name" name="item_name" class="form-control" value="{{$book->item_name}}">
     </div>
                
     <div class="form-group">
     <label for="item-number">numbers</label>
     <input type="text" id="item_number" name="item_number" class="form-control" value="{{$book->item_number}}">
     </div>

     <div class="form-group">
     <label for="item-amount">amount</label>
     <input type="text" id="item_amount "name="item_amount" class="form-control" value="{{$book->item_amount}}">
                </div>
                
     <div class="form-group">
     <label for="published">published</label>
     <input type="text" id="published "name="published" class="form-control" value="{{$book->published}}">
     </div>
                
                
               <div class="well well-sm">
                   <button type="submit" class="btn btn-primary">Save</button>
                   
                   <a class="btn btn-link pull-right" href="{{url('/')}}">
                       <i class "glyphicon glyphicon-backward"></i>
                       Back
                   </a>
                   </div>
                   
                   <!--idを送信-->
                   <input type= "hidden" name="id" value="{{$book->id}}"/>
                    <!--idを送信-->
                   
                   {{csrf_field()}}
                   
                   </form>
                   </div>
                    </div>
@endsection