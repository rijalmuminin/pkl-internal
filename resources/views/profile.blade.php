<?php $nama = "Rijal mu'minin"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

@php $umur = 16; @endphp
Ini Profile saya
<?php echo $nama;?> <br>
umur saya: {{ $umur }}
</body>
</html>