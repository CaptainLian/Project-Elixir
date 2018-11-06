{{-- the Index.html of the application --}}
@extends('layouts.master')
@section('Page_Head_Meta')
	@parent
	<meta name="aguy" value="penchorn" />
@endsection

@section('Page_Head_Title', 'Homepage')

@section('Page_Style')
	<style media="screen">
		ul {
			background-color: black;
		}
	</style>
@endsection

@section('Page_Body')
	Tarubaskibas <br />
	<ul>
		<li><a href="/exercise/search">SEARCH</a></li>
		<li><a href="/exercise/upload">UPLOAD</a></li>
	</ul>
@endsection
