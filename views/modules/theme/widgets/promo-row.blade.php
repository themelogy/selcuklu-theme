@foreach($slides as $slider)
    <div @if($loop->first)class="m-bot-20" @endif>
        <a @if($slider->link->target)target="{{ $slider->link->target }}" @endif href="{{ $slider->link->url }}">
            <img class="img-responsive" src="{{ $slider->present()->firstImage(370,142,'fit',80) }}" alt="">
        </a>
    </div>
@endforeach