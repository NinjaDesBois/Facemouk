@extends('layouts.app')



    
@section('content')
    
@lang('messages.Home')
{{ __('messages.Home')}}



{!!Hello_world()!!}

  <div class="dropdown">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
      Dropdown link
    </a>
  
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li><a rel="alternate" hreflang="{{ $localeCode }}" class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
            {{ $properties['native'] }}
        </a></li>
                  
        @endforeach
      
      
    </ul>
  </div>


  
  @endsection







