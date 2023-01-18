<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.img {
    height: 40px;
    width: 40px;
    background: #f1f3f6;
    border-radius: 50%;
    display: inline-block;
    position: relative;
    overflow: hidden;
}

.img::before {
    position: absolute;
    content: "";
    height: 300px;
    width: 476px;
    background-image: linear-gradient(
        to right,
        #f6f7f9 0%,
        #e9ebee 20%,
        #f6f7f9 40%,
        #f6f7f9 100%
    );
    background-repeat: no-repeat;
    background-size: 450px 400px;
    animation: shimmer 2s linear infinite;
}


@keyframes shimmer {
    0% {
        background-position: -450px 0;
    }
    100% {
        background-position: 450px 0;
    }
}
    </style>
</head>
<body>
<div class="card-design"> /* card-1 */
        <div class="header">
            <div class="img"></div>
        </div>
    </div>
</body>
</html>