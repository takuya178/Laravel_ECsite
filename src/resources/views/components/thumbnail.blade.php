@php
if($type === 'shops'){
  $path = 'storage/shops/';
}
if($type === 'products'){
  $path = 'storage/products/';
}
@endphp

{{-- タイプによって画像を保存する場所を変更できる --}}
<div>
  @if(empty($filename))
    <img src="{{ asset('images/no_image.jpg')}}">
  @else
    <img src="{{ asset($path . $filename)}}">
  @endif
</div> 