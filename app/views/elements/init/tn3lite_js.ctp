<!--  initialize the TN3 when the DOM is ready -->
<script type="text/javascript">
    $(document).ready(function() {
        //Thumbnailer.config.shaderOpacity = 1;
        var tn1 = $('.mygallery').tn3({
            skinDir:"skins",
            imageClick:"fullscreen",
            image:{
                maxZoom:1.5,
                crop:true,
                clickEvent:"dblclick",
                transitions:[
                {
                    type:"blinds"
                },
                {
                    type:"grid"
                },
                {
                    type:"fade",
                    duration:200,
                },
                {
                    type:"slide",
                    duration:654,
                    easing: "easeInBack",
                    direction: "top"
                },
                {
                    type:"grid",
                    duration:460,
                    easing:"easeInQuad",
                    gridX:1,
                    gridY:8,
                    // flat, diagonal, circle, random
                    sort:"random",
                    sortReverse:false,
                    diagonalStart:"bl",
                    // fade, scale
                    method:"scale",
                    partDuration:360,
                    partEasing:"easeOutSine",
                    partDirection:"left"
                }
            ]
            }
        });
    });
</script>
