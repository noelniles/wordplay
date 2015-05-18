<div class="col-md-4">

    <div class="col-md-1" id="tile0" draggable="true" ondragstart="drag(event)">
        <p class="text-center">A</p>
    </div>

    <div class="col-md-1" id="tile1">
        <p class="text-center">A</p>
    </div>

    <div class="col-md-1" id="tile2">
        <p class="text-center">A</p>
    </div>

    <div class="col-md-1" id="tile3">
        <p class="text-center">A</p>
    </div>

    <div class="col-md-1" id="tile4">
        <p class="text-center">A</p>
    </div>

    <div class="col-md-1" id="tile5">
        <p class="text-center">A</p>
    </div>

    <div class="col-md-1" id="tile6">
        <p class="text-center">A</p>
    </div>

</div><!-- end col-md-4 tile rack wrapper -->
<script>

function allowDrop(ev){
    ev.preventDefault();
}

function drag(ev){
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev){
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
</script>
