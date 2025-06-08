@props(['employer', 'width' => 90])

<img src="{{ $employer->logo ? asset($employer->logo) : 'http://picsum.photos/seed/' . rand(0, 100000) . '/' . $width }}" 
     alt="" 
     class="rounded-xl" 
     width="{{ $width }}">