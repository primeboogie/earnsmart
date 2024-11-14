
<style>
        .wheel{
            display: flex;
            justify-content: center;
            position: relative;
            width: 100%;
        }
        .center-circle{
            width: 100px;
            height: 100px;
            border-radius: 60px;
            position: absolute;
            top: 50%;
            background-color: var(--theme1);
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
            color: var(--tt);
        }
        .center-circle img{
            width: 100%;
            height: 100%;
        }
        .cool{
            position: absolute;
            height: auto;
            width: 100%;
            background-color: var(--theme1);
            border-radius: var(--brall);
            border: var(--border1);
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
            border-right: 30px solid var(--tt); 
            position: absolute;
            top: 50%;
            right: -100%;
            transform: translateY(-50%);
        }
        .spininfo{
            margin: 5px auto;
            width: auto;
            height: auto;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            text-align: center;
            border-radius: 7px;
            padding: 0.5em;
            overflow: hidden;
            padding-bottom: 1em;
            background: var(--theme1);
            border-radius: var(--brall);
            border: var(--border1);
            color: #fff;
            
        }
        .spininfo p {
            text-wrap: wrap;
        }
        .sdip,
        .sspin{
            color: #fff;
            font-size: 1em;
            font-weight: 800;
        }
        .sspin{
            color: var(--tt) ;
        }
        .sclaim{
            color: var(--tt) !important;
        }
        .sdip{
            font-size: 0.8em;
            font-weight: 600;
        }
        .claims{
            min-width: 290px ;
            height: auto;
            margin: 5px auto;
            padding: 0.6em 1em;
            font-size: 0.9em;
            font-weight: 800;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            white-space: nowrap;
            gap: 0.5em;
            opacity: 0;
            transition: left .8s ease-in-out;
            background: var(--theme1);
            border-radius: var(--brall);
            border: var(--border1);
        }
        .stake{
            min-width: 290px ;
            height: auto;
            margin: 5px auto;
            padding: 0.6em 1em;
            font-size: 0.9em;
            
            background: var(--theme1);
            border-radius: var(--brall);
            border: var(--border1);
            
            display: grid;
            grid-gap: .8em;
            place-items: center;
        }
        .stakespan{
            place-self: start;
            font-size: 1.4em;
            color: var(--tt) ;
        }
        .stakeform{
            width: 100%;
            padding: .9em .6em;
            
            background: var(--theme1);
            border-radius: var(--brall);
            border: thin solid #fff;
            
            display: grid;
            align-items: center;
            overflow: hidden;
            gap: .8em;
        }
        
        
        .stakeform select,
            .stakeform input{
            /* height: 2em; */
            width: 100%;
            font-size: 1.1em;
            font-weight: 800;
            
            border: thin solid #fff;
            outline: none;
             border-radius: var(--brall);;
            background: transparent;

            color: #fff;
            padding:1em;
        }
        .stakeform input::placeholder{
            color: #c6c3c3;

        }

        .stakeform button{
            /* border: none;
            outline: none;
            background-color: var(--theme6);
            
            padding: .6em .9em;
            color: #fff;
            border-radius: 20px; */
            place-self: end;
            margin: 0;
        }

        .claims span:nth-child(2){
            color: #fff;
            font-size: 0.9em;
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
            border-radius: var(--brall);

            font-size: 1em;
            font-weight: 600;
        } 
        .kill{
        color: orange;
        position: absolute;
        right: 0; 
        top: 0;
        margin: 2%;
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
                width: 300px;
            }
            
        .sdip,
        .sspin p{
            font-size: 0.7em ;
            font-weight: 800;
        }
    }

</style>

<div class="trivia" >
    <span class="triviah"><i class="fa fa-life-ring"></i> Casino Spin</span>
    <i class="tearn formd" >
     Balance: <i id="usys"></i> <i id="curbal"></i> <br>
     Deposit: <i id="usys"></i> <i id="actdip"></i>
    </i>

    <div class="spininfo">
        <span class="sspin">Casino Spin</span>
        <p id="commentearn">
            Welcome To Our Daily Casino Spin
Try Your <?php echo date("l"); ?> Luck Now!</p>
    </div>

    <div class="claims" id="casinodiv">
                 <i class="fa-solid fa-xmark fa-shake kill" onclick="myex('casinodiv')"></i>
        <span class="sclaim" id="sclaim">Possible Win:</span>
            <span id="pwin">0.00 </span>
        </div>

    <div class="wheel">
            <canvas class="" id="canvas" width="300" height="300"></canvas>
            <div class="center-circle"  >
    <img 
    src="./images/earn11.png"
     alt="">
                <div class="triangle"></div>
            </div>
            
        </div>

    <div class="stake">
        <span class="stakespan">stake:</span>
        <form action="" id="stakeform" class="stakeform">

        <select name="acc" id="wallet-select" required>
  <option value=""> Choose Wallet </option>
  <option value="1">Balance</option>
  <option value="2">Deposit</option>
</select>

            <input  name="spin_amount" 
            type="number" min="20" max="20000" 
            placeholder="00" 
            required
            id="spin_amount"
            >
            <button class="authbtn" id="stake_spin">Stake</button>
        </form>
    </div>

</div>
    <script>
        

    let myex = (toclose) => {
        document.getElementById(toclose).style.left = "0%"
        setTimeout(() => {
            document.getElementById(toclose).style.opacity="0"
        }, 500)
    }

    </script>
