<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
         function Model(text,status) {
                   
                  Toastify({
                           text: text,
                           duration: 5000,
                           destination: "https://github.com/apvarun/toastify-js",
                           newWindow: true,
                           close: true,
                           gravity: "top", // `top` or `bottom`
                           position: "right", // `left`, `center` or `right`
                           stopOnFocus: true, // Prevents dismissing of toast on hover
                           style: {
                                    background: status,
                           },
                           onClick: function() {} // Callback after click
                  }).showToast();
         }
</script>