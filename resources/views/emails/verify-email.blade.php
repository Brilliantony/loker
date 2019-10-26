<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title></title>
    <style type="text/css">
        #test {
            background-repeat: no-repeat;
            background-position: bottom;
        }
    </style>
</head>
<body style="background-color:#F2F2F2; ">
<p>&nbsp;</p>
<center>
    <table width="" border="0" cellpadding="0" cellspacing="0" bgcolor="white">
        <tr>
            <td id="test" valign="top" style="padding-left:20px;adding-right:20px;line-height: 1.5;">
                <p>Yth,<br>
                    <b>Hai, {{ $email }},</b><br>
                    <br>
                    <br>
                    Kami sampaikan bahwa email yang Anda gunakan untuk akun Loker Magang belum terverifikasi.
                    <br>
                    <br>
                    Segera lakukan verifikasi email yang Anda gunakan dengan klik tautan dibawah ini.
                    <br>
                    Link : {{url('form/verify/pass',$token)}}
                    <br>
                    Demi keamanan, jangan berikan informasi ini kepada siapapun.<br>
                    <br>
                    Terima Kasih<br>
                    <br>
                    <br>
                    <br>
                    <b><u>{{$from}}</u></b>
                </p>
                <BR><BR><BR>
            </td>
        </tr>
    </table>
</center>
<p>&nbsp;</p>
</body>
</html>