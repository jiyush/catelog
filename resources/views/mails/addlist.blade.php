<!DOCTYPE html>
<html>
<head>
	<title>New listing inqueries</title>
</head>
<body>
	<table>
		<tr>
			<td>INdustry Name:-</td>
			<td>{{ $inquiry->name }}</td>
		</tr>
		<tr>
			<td>Category</td>
			<td>{{ $inquiry->category }}</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>{{$inquiry->address }}</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>{{$inquiry->phone }}</td>
		</tr>
		<tr>
			<td>Decriptions</td>
			<td>{{$inquiry->description }}</td>
		</tr>
		<tr>
			<td>WebSIte</td>
			<td>{{$inquiry->website }}</td>
		</tr>
	</table>
</body>
</html>