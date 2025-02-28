# Link Component: Reusable Navigation Links

**To pass props we use @props()**

```php
// from resource/views/components/nav-link
@props(['url' => '/', 'active' => true, 'icon' => null, 'mobile' => null,])
```

**To pass href links we use attributes.**

```php
// from resource/views/components/button-link
href="{{$url}}"
```

**For conditional classes we use {{$key ? 'code' : ''}}**

```php
<a {{$attributes}} {{$key ? 'code' : ''}}>
```

**For the content inside the element we use $slot**

```php
// from resource/views/components/nav-link
<a href="{{$url}}" class="text-white hover:underline py-2 {{$active ? 'text-yellow-500 font-bold' : ''}}">
    @if($icon)
    <i class="fa fa-{{$icon}} mr-1"></i>
    @endif
{{$slot}}
</a>

// from resource/views/components/header.blade.php
 <x-nav-link url="/jobs" :active="request()->is('jobs')" :mobile="true">All Jobs</x-nav-link>
```

**We can send the url instead of complet href.**

`@props(['url' => '/'])`

```php
<a href="{{$url}}">

</a>
```

# Usage of component

-   href will be sent as an attribute and we use a special method for link named url('/location')

-   We use (:) before the props because otherwise the value passed will by a string `:mobile="true"`.
-   What ever we put inside ="" will by read as a expresion not just a regular string

-   `:active="request()->is('jobs')` // is a method to find out if we are at URL with /jobs

```php
<x-component-name href="{{url('/')}}" :active="request()->is('jobs')">

</x-nav-link>
```
