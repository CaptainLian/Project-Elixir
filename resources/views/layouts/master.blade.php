{{-- Master layout to be inherited by all pages --}}
{{-- Should rarely be edited --}}
<!DOCTYPE html>
<html>
	<head>
		@section('Page_Head_Meta')
		<meta charset="utf-8" />
        <meta name="description" content="@yield('Page_Meta_Description', "")" />
		<meta name="author" content="@yield('Page_Meta_Author', "Thomas James Tiam-Lee")" />
		@show

		<title>@yield('Page_Head_Title')</title>
		@yield('Page_Style')
		@yield('Page_Defer_Scripts')
	</head>

	<body>
	@yield('Page_Body')
	</body>
</html>
