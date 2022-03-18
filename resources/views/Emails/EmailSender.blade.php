<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body style="background: #e5e5e5; padding: 30px;" >

<div style="max-width: 320px; margin: 0 auto; padding: 20px; background: #fff;">
	<h3>Message via le SMTP Google :</h3>
    @if (session()->has('text'))
	<p>{{ session('text') }}</p>
	@endif
	<div>{{ $data['message'] }}
        <form action="{{ route('Emailsend') }}" method="POST" enctype="multipart/form-data">
		<label for="message" >Message</label>
		{{ @csrf_field() }}
		<p>
			<textarea name="message" id="message" rows="4" placeholder="Message à envoyer ici" required></textarea>
			{{ $errors->first('message', ":message")}}
		</p>
		<button type="submit" >Envoyer</button>
	</form>
    </div>
</div>

</body>
</html>