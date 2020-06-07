@extends('layout')

@section('Content')

<div align="center" >
	<h1>Member Login</h1>
	<form name="form" method="post" action="login">
	@csrf 
	<table  cellpadding="2" cellspacing="5" >
		
		<tr>
			<td >Username </td>
			<td >:</td>
			<td ><input name="username" type="text" id="username" placeholder="Enter Username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input name="password" type="password" id="password" placeholder="Enter Password"></td>
		</tr>
		<tr>

			<td colspan="3" align="center"><input type="submit" name="Submit" value="Login"></td>
		</tr>
		</table>
		
		</form>
</div>
@stop