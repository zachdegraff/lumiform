@extends('layout/base')

@section("head.title", __("Lumiform - Easy & FREE Digital Inspection / Audit App"))

@section("content")
<h1>@lang('Digital inspections and audits')</h1>
<p>@lang('Lumiform is the most flexible form builder bringing light into your internal quality and safety procedures.')</p>
<input placeholder="@lang('Enter your e-mail address')" />
<button>@lang('Try for free')</button>
<p>@lang('Already using Lumiform?') <a href="">@lang('Sign in')</a></p>

<h2>@lang('All quality and safety efforts in one hand!')</h2>
<h3>@lang('Create forms')</h3>
<h3>@lang('Organize inspections')</h3>
<h3>@lang('Conduct via App')</h3>
<h3>@lang('Solve issues')</h3>
<a href="">@lang('Take the product tour')</a>

<h2>@lang('Get inspired by our ready-to-use checklist templates')</h2>
<p>@lang('Get started fast with ready-to use inspection and audit templates built by industry experts.')</p>
<a href="">@lang('Discover templates')</a>

<h2>@lang('See how Lumiform can help you')</h2>
<p>@lang('Get started fast with ready-to use inspection and audit templates built by industry experts.')</p>
<h3>@lang('Solution by Industries')</h3>
<h3>@lang('Solution by Type')</h3>
<h3>@lang('Case Studies')</h3>
<h3>@lang('Blog Articlas')</h3>

<h2>@lang('You’ll be in good company')</h2>
<p>@lang('Teams of different industries, sizes and use cases have already used Lumiform where their quality and safety inspections take place.')</p>

<h2>@lang('It’s easy to get started with Lumiform. And it’s free.')</h2>
<input placeholder="@lang('Enter your e-mail address')" />
<button>@lang('Try for free')</button>
<p>@lang('Use Lumiform for free now. We also offer <a href=":link">paid plans</a> with additional features, storage, and support.', ['link' => "/".__('plans')])</p>
@endsection