@extends('layouts.master')

@section('title')
Config Tool
@stop


@section('breadcrumb')
<li><a href="#">Flume</a></li>
@stop

@section('topcontent')
@stop

@section('content')

<div class="ink-grid">
    <div class="column-group gutters">
        <div class="large-33 medium-30 small-100">
<<<<<<< HEAD
            <div class="ink-dropdown green large-100" style="height: 250px; overflow-y: scroll;">
=======
            <div class="ink-dropdown green large-100" style="height: 300px; overflow-y: scroll;">
>>>>>>> 6c1730e7bf6e78b9053973e326d00631d5dc1dda
                <ul style="display: block; position: static;" class="dropdown-menu dropdown1" id="sources">
                    <li class="heading active">Sources</li>
                </ul>
                <br>
            </div>

        </div>
        <div class="large-33 medium-30 small-100">
<<<<<<< HEAD
            <div class="ink-dropdown blue large-100" style="height: 250px; overflow-y: scroll;">
=======
            <div class="ink-dropdown blue large-100" style="height: 300px; overflow-y: scroll;">
>>>>>>> 6c1730e7bf6e78b9053973e326d00631d5dc1dda
                <ul style="display: block; position: static;" class="dropdown-menu dropdown1" id="channels">
                    <li class="heading active">Channels</li>
                </ul>
                <br>
            </div>

        </div>
        <div class="large-33 medium-30 small-100">
<<<<<<< HEAD
            <div class="ink-dropdown red large-100" style="height: 250px; overflow-y: scroll;">
=======
            <div class="ink-dropdown red large-100" style="height: 300px; overflow-y: scroll;">
>>>>>>> 6c1730e7bf6e78b9053973e326d00631d5dc1dda
                <ul style="display: block; position: static;" class="dropdown-menu dropdown1" id="sinks">
                    <li class="heading active">Sinks</li>
                </ul>
            </div>
        </div>


    </div>
    <hr>


</div>

<div class="box">
	    <div class="column-group gutters">
				<div class="large-20"><b>Showcase</b></div>
                <div class="large-80 content-right">
					{{ Form::open(array('route' => 'configTool', 'class' => 'ink-form')) }}
                    {{ Form::text('configName', '', array('placeholder' => 'Name')) }}
                    {{ Form::close() }}
                </div>
            <div class="large-100">
    <div class="button-group">
        <div class="content-left">
    </div>
    </div>

            </div>

</div>
<div class="large-100">
    <div class="column-group gutters">
<div class="control append-button content-right">
    <button class="ink-button"><i class="icon-save"></i></button>
    <button class="ink-button"><i class="icon-refresh"></i></button>
</div>
</div>
</div>

@stop

@section('footer_scripts')
{{ HTML::script('js/all.json') }}
<script>

boxes = ["sources","channels","sinks"]
for (var i=0;i<boxes.length;i++) {
	box = document.getElementById(boxes[i])
	for(var key in all[boxes[i]]) {
<<<<<<< HEAD
      	var liElement = "<li onClick='chooseItem(\""+key+"\")' class=\"separator-above\" id=\""+key+"\"><a>"+key+" </a></li>";
=======
      	var liElement = "<li class=\"separator-above\"><a href=\"#\">" + key + "</a></li>"
>>>>>>> 6c1730e7bf6e78b9053973e326d00631d5dc1dda
      	box.insertAdjacentHTML("beforeend",liElement);
    }
}

<<<<<<< HEAD
function chooseItem(itemID){
    var generalItem = document.getElementById(itemID);
    var parentClass = generalItem.parentNode
    var parentsChildren = parentClass.children

    if (parentClass.id == "sinks" || parentClass.id == "channels"){
        for (var j=1;j<parentsChildren.length;j++ ) {
            parentsChildren[j].className = "separator-above"
        }
    }

    if (generalItem.className == "separator-above") {
        generalItem.className = "separator-above active";
    }
    else{
        generalItem.className = "separator-above";
    }
}

function addToShowCase(itemID){

}

=======
>>>>>>> 6c1730e7bf6e78b9053973e326d00631d5dc1dda
</script>
@stop
