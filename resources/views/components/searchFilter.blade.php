@php if(!isset($checkOptions)) $checkOptions = [] @endphp
@php if(!isset($checkOptionsHeader)) $checkOptionsHeader = "" @endphp
@php if(!isset($checkOptionsHeaderIcon)) $checkOptionsHeaderIcon = "" @endphp

<div class="filter-head text-center">
  <h4>Result Found Matching Your Search.</h4>
</div>
<div class="filter-area">
  <div class="airline-filter filter">
    <h5><i class="{{ $checkOptionsHeaderIcon }}"></i> {{ $checkOptionsHeader }}</h5>
    <ul>
      @foreach($checkOptions as $option)
        <li><input type="checkbox" value={{$option->id}}>{{ $option->name }}</li>
      @endforeach
    </ul>
  </div>
</div>