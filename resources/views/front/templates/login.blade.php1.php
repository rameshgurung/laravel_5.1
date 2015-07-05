<div class="content mysection1" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-center">
				<h1 class="heading">Log in</h1>

				<form class="col-left">


					{{ Form::opent(array('url'=>'login')) }}
					
					<div class="form-group">
						{{ Form::label('username','Username')}}
						{{ Form::text('username')}}
					</div>
					{{ Form::label('password','Password')}}
					{{ Form::password('password')}}

					{{ Form::checkbox('rember_me',' Remember me',false)}}

					{{ Form::submit('Login')}}
					{{ Form::close() }}
					<label for="">Name</label>
					<input type="text" name="name" class="form-control" placeholder="Enter your Name">
				</div>
				<div class="form-group">
					<label for="">Email Address</label>
					<input type="email" name="email" class="form-control" placeholder="Enter your Email Address">
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Enter your Password.">
				</div>
				<div class="form-group">
					<label for="">Confirm Password</label>
					<input type="password" name="confirm_password" class="form-control" placeholder="Confirm your Password.">
				</div>
				<input type="submit" class="col-center btn btn-info btn-lg" value="Sign Up">

			</form>
		</div>
	</div>
</div>
</div>