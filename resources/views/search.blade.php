{!! Form::open(['method'=>'GET','url'=>'salons','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
<a href="{{ url('salons/create') }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Add</a>
 
<div class="input-group custom-search-form">
    <input type="text" class="form-control" name="search" placeholder="Search...">
    <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search"><!--<span class="hiddenGrammarError" pre="" data-mce-bogus="1"-->i>
        </button>
    </span>
</div>
{!! Form::close() !!}