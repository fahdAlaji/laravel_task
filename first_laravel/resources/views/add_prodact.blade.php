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
      <h3>Add Product:</h3>  
    <form method="post" action="{{route('add')}}"  enctype="multipart/form-data">
        @csrf

    Product name:<input type="text" name="name"><br><br>

    Product price: <input type="text" name="price"><br><br>

    <input type="submit" name="addProduct" value="Add"><br><br>
    
</center>
    </body>
    
    </html>