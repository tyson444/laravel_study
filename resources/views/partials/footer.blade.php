<footer>
	<p>저는 꼬리말입니다. 다른 뷰에서 저를 입양해 가요.</p>
	@section('script')
		@parent
		<script> 
		
			alert("저는 조각뷰(footer)의 'script' 섹션입니다.");
		</script>
	@endsection
</footer>