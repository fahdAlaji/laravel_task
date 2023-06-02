<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    
    <body>
 <center>
     <table>
     <?php foreach ($pro as $k){?>
     <tr>
        <td><?php echo $k->name; ?></td>
        <td><?php echo $k->price; ?></td>
     </tr>
        <?php }?>
     </table>
     <a href='create'>add prodact</a>
</center>
    </body>
    
    </html>