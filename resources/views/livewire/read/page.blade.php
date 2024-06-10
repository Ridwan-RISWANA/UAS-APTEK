<div>
    @foreach($_news as $index  => $single_News)
        {{$index+1}}. 
        <span wire::click="read" style="color:blue; cursor: pointer"">
            <u>{{$single_News->title}}</u>
        </span>
        &nbsp; &nbsp;
        <i wire:click="delete({{$single_News->id}})" style="color:red; cursor:pointer"class="fas fa-xs fa-trash"></i>
        <br>
    @endforeach
</div>