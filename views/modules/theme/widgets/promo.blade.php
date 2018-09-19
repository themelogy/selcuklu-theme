@foreach($slides as $slider)
    <div>
        <a @if($slider->link->target)target="{{ $slider->link->target }}" @endif href="{{ $slider->link->url }}">
            <img src="{{ $slider->present()->firstImage(370,290,'fit',80) }}" alt="">
        </a>
    </div>
@endforeach