<form  action="{{ url('subscribers') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    First Name: <input type="text" name="first_name" value="">
    Last Name: <input type="text" name="last_name" value="">
    Email:  <input type="text" name="email" value="">
    <input type="submit" name="name" value="Submit">
</form>
