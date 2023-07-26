<!DOCTYPE html>
<html>
<head>
    <title>Contact Form </title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
     Name:  {{ $details['name'] }} <br>
     Email:  {{ $details['email'] }} <br>
     Phone:  {{ $details['phone_number'] }} <br>
     Subject:  {{ $details['msg_subject'] }} <br>
     Message:  {{ $details['message'] }} <br>
    <p>Thank you</p>
</body>
</html>