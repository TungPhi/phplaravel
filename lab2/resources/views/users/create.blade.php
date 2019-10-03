@extends('layouts')

@section('content')
<div class="content-wrapper">
	<section class="content container-fluid">
		<form action="{{route('users.store')}}" method="POST">
			@csrf
			<div>
				<label>Name</label>
				<input type="text" name="name">
			</div>

			<div>
				<label>Email</label>
				<input type="text" name="email">
			</div>
			<div>
				<label>Birthday</label>
				<input type="text" name="birthday">
			</div>
			<div>
				<input type="submit" name="" value="submit">
			</div>
		</form>
	</section>
</div>

@endsection