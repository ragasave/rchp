<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/gh/ragasave/JavaScript/ragasave.js"></script>
    <!-- <script src="{{assets('assets/js/ragasave.js') }}"></script> -->
    <script src="{{assets('assets/js/ragasave.tamplate.js') }}"></script>
</head>
<body>

    <view view-id="home">
        <h2 @click=hide @each=" [1,2,3,4,5,6] as val => key"> -{val} and -{key } -{ val + key }</h2>
        <br>----
        <h2 @click=hide @each=" fecthFrom('https://my-json-server.typicode.com/typicode/demo/comments') as val => key"> -{key.body}</h2>
        <br>---
        <h2 @click=hide @each=" ['fesfs','efs','ef','esf','s'] as val => key"> -{val} and -{key } -{ val + key }</h2>
    </view>

    <view view-id="contact">
        Contact Us
    </view>














    <script>
    










    new Ragasave.App.ViewData('home').set({
        data : {
            data : [1,2,3,4,5]
        }
    });

    new Ragasave.App.View('home');
    </script>
</body>
</html>