<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            background: #F1F1FA;
            width: 400px;
            height: 300px;
            display: block;
            margin: 10px auto;
            border: 0;
        }
    </style>
</head>
<body>
    <!-- <img src="https://ik.imagekit.io/demo/img/image1.jpeg?tr=w-400,h-300" />
    <img src="https://ik.imagekit.io/demo/img/image2.jpeg?tr=w-400,h-300" />
    <img src="https://ik.imagekit.io/demo/img/image3.jpg?tr=w-400,h-300" />
    <img class="lazy" data-src="https://ik.imagekit.io/demo/img/image4.jpeg?tr=w-400,h-300" />
    <img class="lazy" data-src="https://ik.imagekit.io/demo/img/image5.jpeg?tr=w-400,h-300" />
    <img class="lazy" data-src="https://ik.imagekit.io/demo/img/image6.jpeg?tr=w-400,h-300" />
    <img class="lazy" data-src="https://ik.imagekit.io/demo/img/image7.jpeg?tr=w-400,h-300" />
    <img class="lazy" data-src="https://ik.imagekit.io/demo/img/image8.jpeg?tr=w-400,h-300" />
    <img class="lazy" data-src="https://ik.imagekit.io/demo/img/image9.jpeg?tr=w-400,h-300" />
    <img class="lazy" data-src="https://ik.imagekit.io/demo/img/image10.jpeg?tr=w-400,h-300" /> -->
    <img class="lazy" data-src="http://103.179.57.237:8200/core-umra/view_file/banner/6e0620d7-1571-4a89-ac8a-247526b5aa84.png" />
    <img class="lazy" data-src="http://103.179.57.237:8200/core-umra/view_file/banner/6e0620d7-1571-4a89-ac8a-247526b5aa84.png" />
    <img class="lazy" data-src="http://103.179.57.237:8200/core-umra/view_file/banner/6e0620d7-1571-4a89-ac8a-247526b5aa84.png" />
    <img class="lazy" data-src="http://103.179.57.237:8200/core-umra/view_file/banner/6e0620d7-1571-4a89-ac8a-247526b5aa84.png" />
    <img class="lazy" data-src="http://103.179.57.237:8200/core-umra/view_file/banner/6e0620d7-1571-4a89-ac8a-247526b5aa84.png" />
    <img class="lazy" data-src="http://103.179.57.237:8200/core-umra/view_file/banner/6e0620d7-1571-4a89-ac8a-247526b5aa84.png" />
    <img class="lazy" data-src="http://103.179.57.237:8200/core-umra/view_file/banner/6e0620d7-1571-4a89-ac8a-247526b5aa84.png" />
    <img class="lazy" data-src="http://103.179.57.237:8200/core-umra/view_file/banner/6e0620d7-1571-4a89-ac8a-247526b5aa84.png" />
    <img class="lazy" data-src="http://103.179.57.237:8200/core-umra/view_file/banner/6e0620d7-1571-4a89-ac8a-247526b5aa84.png" />
    <img class="lazy" data-src="http://103.179.57.237:8200/core-umra/view_file/banner/6e0620d7-1571-4a89-ac8a-247526b5aa84.png" />
    <img class="lazy" data-src="http://103.179.57.237:8200/core-umra/view_file/banner/6e0620d7-1571-4a89-ac8a-247526b5aa84.png" />
</body>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
        var lazyloadImages;    

        if ("IntersectionObserver" in window) {
            lazyloadImages = document.querySelectorAll(".lazy");
            var imageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                var image = entry.target;
                image.src = image.dataset.src;
                image.classList.remove("lazy");
                imageObserver.unobserve(image);
                }
            });
            });

            lazyloadImages.forEach(function(image) {
            imageObserver.observe(image);
            });
        } else {  
            var lazyloadThrottleTimeout;
            lazyloadImages = document.querySelectorAll(".lazy");
            
            function lazyload () {
            if(lazyloadThrottleTimeout) {
                clearTimeout(lazyloadThrottleTimeout);
            }    

            lazyloadThrottleTimeout = setTimeout(function() {
                var scrollTop = window.pageYOffset;
                lazyloadImages.forEach(function(img) {
                    if(img.offsetTop < (window.innerHeight + scrollTop)) {
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    }
                });
                if(lazyloadImages.length == 0) { 
                document.removeEventListener("scroll", lazyload);
                window.removeEventListener("resize", lazyload);
                window.removeEventListener("orientationChange", lazyload);
                }
            }, 20);
            }

            document.addEventListener("scroll", lazyload);
            window.addEventListener("resize", lazyload);
            window.addEventListener("orientationChange", lazyload);
        }
        })
    </script>
</html>