<h2>Hello</h2>

You Recieved and email from : {{Auth::User()->name}}

Here is the details:

<b>Name:</b> {{$reciever_mail}}
<b>Subject:</b>{{$subject}}
<b>Message :</b>{{$message}}
<b>Attachment:</b>{{$attachment}}