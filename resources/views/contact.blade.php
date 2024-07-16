<!DOCTYPE html>
<html>
<head>
    <title>Hubungan Kami</title>
</head>
<body>
    <form action ="{( url ('contact'))}" method = "POST">
    @csrf
    <Table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="emai"/></td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td><Textarea name="pesan"></Textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="SUBMIT" value="send"/>
            </td>
        </tr>
    </Table>
</body>
</html>