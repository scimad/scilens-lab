@extends('layout')
@section('subheader')
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  	<script>tinymce.init({selector:'textarea'});</script>


  	<div class="container"  style="width:500px;">
  	<textarea placeholder="Enter Blog Text..."></textarea>
  	</div>
@endsection