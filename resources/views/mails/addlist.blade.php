<!DOCTYPE html>
<html>
<head>
	<title>New listing inqueries</title>
</head>
<body>
	<table>
		<tr>
			<td>INdustry Name:-</td>
			<td>{{ $data->indName }}</td>
		</tr>
		<tr>
			<td>Category</td>
			<td>{{ $data->indCat }}</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>{{$data->address }}</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>{{$data->phone }}</td>
		</tr>
		<tr>
			<td>Decriptions</td>
			<td>{{$data->description }}</td>
		</tr>
		<tr>
			<td>WebSIte</td>
			<td>{{$data->site }}</td>
		</tr>
	</table>
</body>
</html>