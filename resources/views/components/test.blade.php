@props(['method'=>'POST'])
<div>
    <form method="{{$method}}">
        <p class="title">
        {{$header}}
        </p>
        <div class="container">
        {{ $slot }}
        </div>
        <div class="btns">
            <button>cancel</button>
            <button type="submit">save</button>
        </div>
    </form>    
</div>