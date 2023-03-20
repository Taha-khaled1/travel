<form action="{{route('mass')}}" method="POST">
@csrf
<input type="text" name="number">
<br><br>
<input type="text"  name="name">
<br><br>
<input type="submit" value="Send SMS">
<br><br>

</form> 