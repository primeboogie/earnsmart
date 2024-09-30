<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', 'error.log');



?>
<style>
        .wheel{
            display: flex;
            justify-content: center;
            position: relative;
        }
        .center-circle{
            width: 100px;
            height: 100px;
            border-radius: 60px;
            background-color: #ffffff;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
            font-size: 0.9em;
            font-weight: 900;
        }
        .cool{
            position: absolute;
            height: auto;
            width: 98%;
            background-color: #7c4c2dc9;
            overflow: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            border: 1px solid grey;
            border-radius: 7px;
            padding: 0.5em;
            gap: 2.5em;
        }
        .triangle{
            width: 0; 
            height: 0; 
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent; 
            border-right: 30px solid red; 
            position: absolute;
            top: 50%;
            right: -100%;
            transform: translateY(-50%);
        }
        textarea{
            background-color: rgba(20, 20, 20, 0.2);
            caret-color: #fff;
            color: #fff;
            height: auto !important;
            border-radius: 10px;
            height: 100%;
            width: 100%;
            display: none;
        }
        .spininfo{
            width: 30%;
            height: 200px ;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            text-align: center;
            background-color: #f3f3f3;
            border-radius: 7px;
            padding: 0.5em;
            overflow: auto;
        }
        .sdip,
        .sspin{
            font-size: 1em;
            font-weight: 800;
            color: black;
        }
        .sdip{
            font-size: 0.8em;
            font-weight: 600;
        }
        .claims{
            position: fixed;
            top: 30%;
            left: 20%;
            transform: translate(-50%, -50%);
            z-index: 500;
            width: 200px;
            height: auto;
            padding: 0.6em 1em;
            font-size: 0.9em;
            font-weight: 800;
            display: flex;
            flex-direction: column;
            background-color: blueviolet;
            justify-content: center;
            align-items: center;
            text-align: center;
            border-radius: 10px;
            white-space: nowrap;
            gap: 0.5em;
            opacity: 0;
            transition: left .8s ease-in-out;
            box-shadow: 0px 0px 20px #02eb8a;
            
        }
        .claims span:nth-child(2){
            color: #fff;
            font-size: 0.9em;
            border-bottom: 1px solid black;
            width: 100%;

        }
        .claims span:nth-child(3){
            color: #fff;
            font-size: 1.2em;

        }
        .claimbtn{
            padding: 0.3em;
            border: none;
            background-color: #11d382c9;
            text-align: center;
            align-items: center;
            color: #000;
            border-radius: 20px;
            font-size: 1em;
            font-weight: 600;
        } 
        @media screen and (max-width:630px) {
            .cool{
                flex-direction: column-reverse;
                justify-content: flex-start;
                text-align: center;
                align-items: center;
                gap: 0.5em;
            }
            .spininfo{
                width: 90%;
            }
            .triangle{
                right: -95%;
            }
            
        .sdip,
        .sspin p{
            font-size: 0.7em ;
            font-weight: 800;
        }
    }

</style>

<div class="claims" id="claimdiv">
             <i class="fa-solid fa-xmark fa-shake kill" onclick="myex('claimdiv')"></i>
    <span class="sclaim">Your Earnings:</span>
        <span id="winner">0.00  ?></span>
        <form action="reg.php" method="POST" id="fearnings">
            <input type="text" name="spin"  id="rwinner" hidden>
            <button type="submit" name="spins" id="spins" onclick="approveclaims(event)" class="claimbtn">Claim Now</button>
        </form>
    </div>
<div class="cool">
<div class="wheel">
        <canvas class="" id="canvas" width="400" height="300"></canvas>
        <div class="center-circle" onclick="spin()"> Spin

            <div class="triangle"></div>
        </div>
        
    </div>
        <?php
         $length = 13;

          $noarrays = mt_rand(5, $length -0); //should be number of rrayess
           $nospin = round($noarrays/2);
    
         
         function generateRandomArray($inarr) {
             $randomArray = [];
         
                    $below = round($inarr/2);
                    $above = $inarr - $below;
             // Generate 5 random figures below 1500
             for ($i = 0; $i < $below; $i++) {
                 $randomFigure = mt_rand(210, 1499);
                 $randomFigure = round($randomFigure, -2);
                 $randomArray[] = $randomFigure; // formatter(conv($randomFigure));
                }
                
                // Generate 2 remaining random figures between 1500 and 5999
                for ($i = 0; $i < $above; $i++) {
                    $randomFigure = mt_rand(1500, 5999);
                    $randomFigure = round($randomFigure, -2);
                    $randomArray[] = $randomFigure; // formatter(conv($randomFigure));
                //  $randomArray[] = formatter(conv($randomFigure));
             }
         
             // Shuffle the array to randomize the order
             shuffle($randomArray);
         
             return $randomArray;
         }
         
         // Example usage:
         $randomFigures =  //generateRandomArray( $noarrays);
         [
            "30.2",
            "5.0",
            "x20",
            "0",
            "x1.6",
            "x50",
            "0",
            // "10",
            // "5.0",
            // "x2.0",
            // "x0.8",
            // "x0.8",
            "x1.3",
            "0",
            "x0.2",
            "x0.5",
            "x0.2",
            "x10"
         ];
        
        echo "<pre>";
        print_r($randomFigures);
        echo "</pre>";

         
         $jsonArray = json_encode($randomFigures);
         
        ?>
    <div class="spininfo">
        <span class="sspin">SPIN & CLAIM</span>
        <p>"Spin the lottery wheel with <strong>55</strong> for a chance to win exciting prizes and earn some extra
             money – the more you spin, the more opportunities you unlock for incredible rewards!"</p>

    </div>
</div>
    <script>
        function randomColor(){
            r = Math.floor(Math.random() * 255);
            g = Math.floor(Math.random() * 255);
            b = Math.floor(Math.random() * 255);
            return {r,g,b}
        }
        function toRad(deg){
            return deg * (Math.PI / 180.0);
        }
        function randomRange(min,max){
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
        function easeOutSine(x) {
            return Math.sin((x * Math.PI) / 2);
        }
        // get percent between 2 number
        function getPercent(input,min,max){
            return (((input - min) * 100) / (max - min))/100
        }

function approveclaims(event) {
   

    <?php // echo userbal()['bdip']; ?> //>=  <?php // echo $spinfee; ?>

}
        const ucur = ""; <?php // echo mulla($uabrv)['sy']; ?>
        var claimdiv = document.getElementById('claimdiv');
        var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth; 
        const canvas = document.getElementById("canvas")
        const ctx = canvas.getContext("2d")
        const width = document.getElementById("canvas").width
        const height = document.getElementById("canvas").height

    // Call the function on page load and on resize
  


        const radius = width/2.9
        if (screenWidth < 600) {
         ctx.font = '0.9em serif';
        } 
         else {
         ctx.font = '1em serif';
        }
        const centerX = width/2
        const centerY = height/2
 
        let items = <?php echo $jsonArray;  ?> 
        let currentDeg = 0
        let step = 360/items.length
        let colors = []
        let itemDegs = {}

        for(let i = 0 ; i < items.length + 1;i++){
            colors.push(randomColor())
        }

        function createWheel(){

            items = <?php echo $jsonArray;  ?> 
            step = 360/items.length
            colors = []
            for(let i = 0 ; i < items.length + 1;i++){
                colors.push(randomColor())
            }
            draw()
        }
        draw()

        function draw(){
            

            ctx.beginPath();
            ctx.arc(centerX, centerY, radius, toRad(0), toRad(360))
            ctx.fillStyle = `rgb(${33},${33},${33})`
            ctx.lineTo(centerX, centerY);
            ctx.fill()

            let startDeg = currentDeg;
            for(let i = 0 ; i < items.length; i++, startDeg += step){
                let endDeg = startDeg + step

                color = colors[i]
                let colorStyle = `rgb(${color.r},${color.g},${color.b})`

                ctx.beginPath();
                rad = toRad(360/step);
                ctx.arc(centerX, centerY, radius - 2, toRad(startDeg), toRad(endDeg))
                let colorStyle2 = `rgb(${color.r - 30},${color.g - 30},${color.b - 30})`
                ctx.fillStyle = colorStyle2
                ctx.lineTo(centerX, centerY);
                ctx.fill()

                ctx.beginPath();
                rad = toRad(360/step);
                ctx.arc(centerX, centerY, radius - 30, toRad(startDeg), toRad(endDeg))
                ctx.fillStyle = colorStyle
                ctx.lineTo(centerX, centerY);
                ctx.fill()

                // draw text
                ctx.save();
                ctx.translate(centerX, centerY);
                ctx.rotate(toRad((startDeg + endDeg)/2));
                ctx.textAlign = "right";
                if(color.r > 150 || color.g > 150 || color.b > 150){
                    ctx.fillStyle = "#000";
                }
                else{
                    ctx.fillStyle = "#fff";
                }
                //font here 
              //  ctx.font = '15px serif';
                ctx.fillText(items[i], 130, 10);
                ctx.restore();

                itemDegs[items[i]] = 
                    {
                    "startDeg": startDeg,
                    "endDeg" : endDeg
                    }
                

                // check winner
                if(startDeg%360 < 360 && startDeg%360 > 270  && endDeg % 360 > 0 && endDeg%360 < 90 ){
                    document.getElementById("winner").innerHTML = items[i] + " " + ucur;
                    document.getElementById("rwinner").value =  items[i];
                }
                
            }
        }
        function formatter(number) {
    // Convert the input to a number (if it's a string)
    const numericValue = typeof number === 'string' ? parseFloat(number) : number;

    // Check if the conversion to a number was successful
    if (!isNaN(numericValue)) {
        // Convert the number to a fixed-point notation with two decimal places
        const formattedNumber = numericValue.toFixed(2);

        // Use regular expression to add commas as thousand separators
        return formattedNumber.replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " " + ucur;
    } else {
        // Handle the case where the input is not a valid number
        return "Invalid input";
    }
}

        let speed = 0
        let maxRotation = randomRange(360* 3, 360 * 6)
        let pause = false
        function animate(){
            if(pause){
                return
            }
            speed = easeOutSine(getPercent(currentDeg ,maxRotation ,0)) * 20
            if(speed < 0.01){
                speed = 0
                pause = true
            }
            currentDeg += speed
            draw()
            window.requestAnimationFrame(animate);
        }
        
        function spin(){
            if(speed != 0){
                return
            }
                            //claimdiv.style.positi
                            claimdiv.style.opacity="1"
            claimdiv.style.left="50%"
           setTimeout(function(){
        

            maxRotation = 0;
            currentDeg = 0
            createWheel()
            draw();

            
            maxRotation = (360 * <?php echo $nospin; ?>) - itemDegs['<?php echo $randomFigures[array_rand($randomFigures)]; ?>'].endDeg + 10
            // console.log(<?php echo $randomFigures[array_rand($randomFigures)]; ?>)
            // maxRotation = (360 * <?php echo $nospin; ?>) - itemDegs['1'].endDeg + 10
            itemDegs = {}
            pause = false
            window.requestAnimationFrame(animate);
          
           }, 800)

        }



    </script>


<?php 
// include("footer.php");
?>