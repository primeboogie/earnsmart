
    <style>
        .container {
            border-radius: 10px;
            width: 500px;
            margin: 0 auto;
            overflow: auto;
        }
        .header {
            background: transparent;
            border: thin solid white;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
        }
        .header .payfor{
            color: yellow;
            margin: 0;
        }
        .body {
            display: none; 
            background: white;
            border: thin solid orange;
            border-radius: 10px;
            padding: 10px;
            margin: 10px;
        }
        .mycc{
            font-weight: 800;
            font-size: 1.1em;
        }
        ol{
            padding-left: 2em;
        }
        .body.active {
            display: block; 
        }
        .body .payfor{
            color: #52A6DE;
            font-size: 17px;
            font-weight: 800;
            padding: 0 0 1em 0;
        } 
        .body h2 {
            margin: 0 0 20px 0;
        }
        .button-container {
            overflow: hidden;
            display: grid;
            grid-gap: .9em;
            grid-template-columns: repeat(2, 1fr);
            grid-auto-rows: auto;
            place-items: start;
        }
        .button, .link-button {
            background: #098000;
            color: white;
            border: double 5px white;
            border-radius: 10px;
            padding: 10px;
            cursor: pointer;
            width: 100%;
            text-align: center;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .button span, .link-button span {
            font-weight: bold;
        }
        .button:hover, .link-button:hover {
            background: orange;
        }
        @media only screen and (max-width: 600px) {
            .container{
                width: 100%;
                height: 100%;
            }
            .button, .link-button {
                width: 100%;
            }
        }
        .footer-buttons {
            margin-top: 10px;
            display: flex;
            justify-content: center;
        }
        
        .footer-buttons button {
            background-color: #52A6DE;
        }
        
      
    </style>
    <script>
        function showSection(id) {
            const sections = document.querySelectorAll('.body');
            sections.forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById(id).classList.add('active');
        }

        function logout() {
            window.location.href = '/logout';
        }
        
        
    </script>

    <div class="container">
        <div id="main-body" class="body active">
            <span class="mycc">Choose Country; </span>
            <div class="button-container">

<!-- <button class="link-button" aria-label="Kenya" onclick="window.location.href='https://earn-empire.com';"><span>🇰🇪 Kenya</span></button> -->
<button class="link-button" aria-label="Ghana" onclick="//window.location.href='https://flutterwave.com/pay/earnempire-ghana';"><span>🇬🇭 Ghana</span></button>
<button class="link-button" aria-label="Gambia" onclick="//window.location.href='https://flutterwave.com/pay/earnempire-gambia';"><span>🇬🇲 Gambia</span></button>
<button class="link-button" aria-label="Nigeria" onclick="//window.location.href='https://flutterwave.com/pay/earnempire-nigeria';"><span>🇳🇬 Nigeria</span></button>
<button class="link-button" aria-label="Cameroon" onclick="//window.location.href='https://flutterwave.com/pay/earnempire-cameroon';"><span>🇨🇲 Cameroon</span></button>
<button class="button" aria-label="Tanzania" onclick="showSection('tanzania')"><span>🇹🇿 Tanzania</span></button>
<button class="button" aria-label="Uganda" onclick="showSection('uganda')"><span>🇺🇬 Uganda</span></button>
<button class="button" aria-label="Rwanda" onclick="showSection('rwanda')"><span>🇷🇼 Rwanda</span></button>
<button class="button" aria-label="Botswana" onclick="showSection('botswana')"><span>🇧🇼 Botswana</span></button>
                <button class="button" aria-label="South Sudan" onclick="showSection('s-sudan')"><span>🇸🇸 S. Sudan</span></button>
                <button class="button" aria-label="Malawi" onclick="showSection('malawi')"><span>🇲🇼 Malawi</span></button>
                <!-- <button class="button" aria-label="Uganda" onclick="showSection('uganda')"><span>🇺🇬 Uganda</span></button> -->
                <button class="button" aria-label="Zambia" onclick="showSection('zambia')"><span>🇿🇲 Zambia</span></button>     
                <button class="link-button" aria-label="Others" onclick="//window.location.href='https://flutterwave.com/pay/earnempire-international';"><span>🌐 Others</span></button>
            </div>
        </div>
        <div id="tanzania" class="body">
            <h1 class="payfor">Pay for Tanzania:</h1>
<div style="background-color: #f9f9f9; border: 1px solid #ccc; border-radius: 10px; padding: 20px; margin: 0 auto; font-family: Arial, sans-serif; color: #333; line-height: 1.6;">
 
    
    <h3 style="color: #333; font-size: 15px; margin-top: 10px; text-align: center;">Tanzania Payment Procedure</h3>
    
    <h4 style="color: #333; font-size: 16px; margin-top: 10px;">1️⃣ Vodacom</h4>
    <ol style="margin-top: 11px;">
        <li style="margin-bottom: 10px;">Bonyeza <strong>*150*00#</strong></li>
        <li style="margin-bottom: 10px;">Tuma Pesa</li>
        <li style="margin-bottom: 10px;">Mitandao Mingine</li>
        <li style="margin-bottom: 10px;">Tigopesa <strong>254719869131</strong> (Zachariah Nyambega)</li>
        <li style="margin-bottom: 10px;">Kiasi: <strong>TSH 12,000</strong></li>
        <li style="margin-bottom: 10px;">Weka Namba ya Siri</li>
        <li style="margin-bottom: 10px;">Tuma</li>
    </ol>
    
    <h4 style="color: #333; font-size: 16px; margin-top: 10px;">2️⃣ TIGO</h4>
    <ol style="margin-top: 11px;">
        <li style="margin-bottom: 10px;">Bonyeza <strong>*150*01#</strong></li>
        <li style="margin-bottom: 10px;">Lipa kwa Simu</li>
        <li style="margin-bottom: 10px;">Kwenda Tigo Pesa</li>
        <li style="margin-bottom: 10px;">Weka Number: <strong>254719869131</strong> (Zachariah Nyambega)</li>
        <li style="margin-bottom: 10px;">Weka Kiasi: <strong>TSH 12,000</strong></li>
        <li style="margin-bottom: 10px;">Weka Namba ya Siri</li>
        <li style="margin-bottom: 10px;">Tuma</li>
    </ol>
    
    <h4 style="color: #333; font-size: 16px; margin-top: 10px;">3️⃣ Airtel</h4>
    <ol style="margin-top: 11px;">
        <li style="margin-bottom: 10px;">Bonyeza <strong>*150*60#</strong></li>
        <li style="margin-bottom: 10px;">Tuma Pesa</li>
        <li style="margin-bottom: 10px;">Tuma Mitandao Mingine</li>
        <li style="margin-bottom: 10px;">Tigopesa <strong>254719869131</strong> (Zachariah Nyambega)</li>
        <li style="margin-bottom: 10px;">Kiasi: <strong>TSH 12,000</strong></li>
        <li style="margin-bottom: 10px;">Weka Neno la Siri</li>
        <li style="margin-bottom: 10px;">Tuma</li>
    </ol>
    
    <h4 style="color: #333; font-size: 16px; margin-top: 10px;">4️⃣ Halotel</h4>
    <ol style="margin-top: 11px;">
        <li style="margin-bottom: 10px;">Bonyeza <strong>*150*88#</strong></li>
        <li style="margin-bottom: 10px;">Tuma Pesa</li>
        <li style="margin-bottom: 10px;">Kwenda Mitandao Mingine</li>
        <li style="margin-bottom: 10px;">Chagua Tigo Pesa</li>
        <li style="margin-bottom: 10px;">Weka Namba Simu ya Mpokeaji: <strong>254719869131</strong> (Zachariah Nyambega)</li>
        <li style="margin-bottom: 10px;">Weka Kiasi: <strong>TSH 12,000</strong></li>
        <li style="margin-bottom: 10px;">Weka Namba ya Siri</li>
        <li style="margin-bottom: 10px;">Tuma</li>
    </ol>
</div>

    <p style="text-align: center; font-style: italic; color: #666; margin-top: 10px;">Once paid, send the payment screenshot, username, full name, number, and email address.</p>
    
    <p style="text-align: center; font-style: italic; color: #666; margin-top: 10px;">Any questions on payment? Contact the helpline: <strong>+254719869131</strong>.</p>
    
        <div class="footer-buttons">
            <button class="button" aria-label="main-label" onclick="showSection('main-body')"><span>Back</span></button>
            <button class="button logout" aria-label="logout" onclick="logout()"><span>Log out</span></button>
        </div>
       </div>
        
        
        
        <div id="uganda" class="body">
            <h1 class="payfor">Pay for Uganda:</h1>
<div style="background-color: #f9f9f9; border: 1px solid #ccc; border-radius: 10px; padding: 20px; margin: 0 auto; font-family: Arial, sans-serif; color: #333; line-height: 1.6;">
 
    
    <h3 style="color: #333; font-size: 15px; margin-top: 10px; text-align: center;">Airtel Uganda Payment Procedure</h3>
    
    <ol style="margin-top: 11px;">
        <li style="margin-bottom: 10px;">Dial <strong>*185*9#</strong></li>
        <li style="margin-bottom: 10px;">Enter Number: <strong>6671253</strong></li>
        <li style="margin-bottom: 10px;">Enter Amount: <strong>UGX 17,000</strong></li>
        <li style="margin-bottom: 10px;">Enter Reference: <strong>Username</strong></li>
        <li style="margin-bottom: 10px;">Confirm: <strong>EARN EMPIRE CONNECTIONS</strong></li>
        <li style="margin-bottom: 10px;">Enter PIN</li>
    </ol>
    
    <h3 style="color: #333; font-size: 15px; margin-top: 10px; text-align: center;">MTN Uganda Payment Procedure</h3>
    
    <ol style="margin-top: 11px;">
        <li style="margin-bottom: 10px;">Dial <strong>*165*3#</strong></li>
        <li style="margin-bottom: 10px;">Enter Number: <strong>725983</strong></li>
        <li style="margin-bottom: 10px;">Enter Amount: <strong>UGX 17,000</strong></li>
        <li style="margin-bottom: 10px;">Select: <strong>Mobile Money</strong></li>
        <li style="margin-bottom: 10px;">Confirm: <strong>WILFRED</strong></li>
        <li style="margin-bottom: 10px;">Enter PIN</li>
    </ol>
</div> 
    <p style="text-align: center; font-style: italic; color: #666; margin-top: 10px;">Once paid, send the payment screenshot, username, full name, number, and email address.</p>
    
    <p style="text-align: center; font-style: italic; color: #666; margin-top: 10px;">Any questions on payment? Contact the helpline: <strong>+256 740 506 431</strong>.</p>
    
        <div class="footer-buttons">
            <button class="button" aria-label="main-label" onclick="showSection('main-body')"><span>Back</span></button>
            <button class="button logout" aria-label="logout" onclick="logout()"><span>Log out</span></button>
        </div>
       </div>
       
       
       
       
       
        <div id="rwanda" class="body">
            <h1 class="payfor">Pay for Rwanda:</h1>
            <div style="background-color: #f9f9f9; border: 1px solid #ccc; border-radius: 10px; padding: 20px; margin: 0 auto; font-family: Arial, sans-serif; color: #333; line-height: 1.6;">
 
    
    <h3 style="color: #333; font-size: 15px; margin-top: 10px; text-align: center;">Rwanda Payment Procedure</h3>
    
    <ol style="margin-top: 11px;">
        <li style="margin-bottom: 10px;">Dial <strong>*182#</strong></li>
        <li style="margin-bottom: 10px;">Choose <strong>1</strong></li>
        <li style="margin-bottom: 10px;">Choose <strong>Mumahanga 3</strong></li>
        <li style="margin-bottom: 10px;">Choose <strong>1 Kenya</strong></li>
        <li style="margin-bottom: 10px;">Enter Number: <strong>254719869131</strong></li>
        <ul>
            <li style="margin-bottom: 10px;">Name will appear as: <em>Zachariah Nyambega</em></li>
        </ul>
        <li style="margin-bottom: 10px;">Enter Amount: <strong>RWF 5000</strong></li>
        <li style="margin-bottom: 10px;">Choose <strong>Yego or Yes</strong></li>
        <li style="margin-bottom: 10px;">Enter PIN</li>
        <li style="margin-bottom: 10px;">Send</li>
    </ol>

</div>
    <p style="text-align: center; font-style: italic; color: #666; margin-top: 10px;">Once paid, send the payment screenshot, username, full name, number, and email address.</p>
    
    <p style="text-align: center; font-style: italic; color: #666; margin-top: 10px;">Any questions on payment? Contact the helpline: <strong>+254719869131</strong>.</p>
    
        <div class="footer-buttons">
            <button class="button" aria-label="main-label" onclick="showSection('main-body')"><span>Back</span></button>
            <button class="button logout" aria-label="logout" onclick="logout()"><span>Log out</span></button>
        </div>
        </div>
        
        
        
        
        
        
        <div id="zambia" class="body">
            <h1 class="payfor">Pay for Zambia:</h1>
            <div style="background-color: #f9f9f9; border: 1px solid #ccc; border-radius: 10px; padding: 20px; margin: 0 auto; font-family: Arial, sans-serif; color: #333; line-height: 1.6;">
 
    
    <h3 style="color: #333; font-size: 15px; margin-top: 10px; text-align: center;">Zambia Airtel Payment Procedure</h3>
    
    <ol style="margin-top: 11px;">
        <li style="margin-bottom: 10px;">Dial <strong>*115#</strong></li>
        <li style="margin-bottom: 10px;">Select <strong>Send Money</strong></li>
        <li style="margin-bottom: 10px;">Select <strong>International Transfer</strong></li>
        <li style="margin-bottom: 10px;">Select <strong>Kenya</strong></li>
        <li style="margin-bottom: 10px;">Enter Number: <strong>254752166167</strong> (Zachariah Nyambega)</li>
        <li style="margin-bottom: 10px;">Enter Amount You Want to Deposit</li>
        <li style="margin-bottom: 10px;">Amount: <strong>100 ZMF</strong></li>
    </ol>
    
    <h3 style="color: #333; font-size: 15px; margin-top: 10px; text-align: center;">Zambia MTN Payment Procedure</h3>
    
    <ol style="margin-top: 11px;">
        <li style="margin-bottom: 10px;">Dial <strong>*115#</strong></li>
        <li style="margin-bottom: 10px;">Select <strong>Send Money</strong></li>
        <li style="margin-bottom: 10px;">Select <strong>International Transfer</strong></li>
        <li style="margin-bottom: 10px;">Select <strong>Kenya</strong></li>
        <li style="margin-bottom: 10px;">Enter Number: <strong>254752166167</strong> (Zachariah Nyambega)</li>
        <li style="margin-bottom: 10px;">Enter Amount You Want to Deposit</li>
        <li style="margin-bottom: 10px;">Amount: <strong>100 ZMF</strong></li>
    </ol>
</div>
    <p style="text-align: center; font-style: italic; color: #666; margin-top: 10px;">Once paid, send the payment screenshot, username, full name, number, and email address.</p>
    
    <p style="text-align: center; font-style: italic; color: #666; margin-top: 10px;">Any questions on payment? Contact the helpline: <strong>+254719869131</strong>.</p>
    
         
        <div class="footer-buttons">
            <button class="button" aria-label="main-label" onclick="showSection('main-body')"><span>Back</span></button>
            <button class="button logout" aria-label="logout" onclick="logout()"><span>Log out</span></button>
        </div>
        </div>
        
        
        
        
        
        <div id="botswana" class="body">
            <h1 class="payfor">Pay for Botswana:</h1>
<div style="background-color: #f9f9f9; border: 1px solid #ccc; border-radius: 10px; padding: 8px;  margin: 0 auto; font-family: Arial, sans-serif; color: #333; line-height: 1.6;">
 
    
    <h3 style="color: #333; font-size: 15px; margin-top: 10px; text-align: center;">Botswana Payment Procedure (Automatic Payment)</h3>
    
    <ol style="margin-top: 11px;">
        <li style="margin-bottom: 10px;">Dial <strong>*145#</strong></li>
        <li style="margin-bottom: 10px;">Select <strong>2 Orange Money Transactions</strong></li>
        <li style="margin-bottom: 10px;">Select <strong>2 International Money Transfer</strong></li>
        <li style="margin-bottom: 10px;">Select <strong>5 Kenya (Safaricom)</strong></li>
        <li style="margin-bottom: 10px;">Enter Number: <strong>254719869131</strong> (Zachariah Nyambega)</li>
        <li style="margin-bottom: 10px;">Enter Amount: <strong>60 BWP (PULAS)</strong></li>
        <li style="margin-bottom: 10px;">Enter PIN</li>
    </ol>
</div>
    <p style="text-align: center; font-style: italic; color: #666; margin-top: 10px;">Once paid, send the payment screenshot, username, full name, number, and email address.</p>
    
    <p style="text-align: center; font-style: italic; color: #666; margin-top: 10px;">Any questions on payment? Contact the helpline: <strong>+254719869131</strong>.</p>
    
    
        <div class="footer-buttons">
            <button class="button" aria-label="main-label" onclick="showSection('main-body')"><span>Back</span></button>
            <button class="button logout" aria-label="logout" onclick="logout()"><span>Log out</span></button>
        </div>
        </div>
        
        
        
        
        
        <div id="s-sudan" class="body">
            <h1 class="payfor">Pay for South Sudan:</h1>
            <div style="background-color: #f9f9f9; border: 1px solid #ccc; border-radius: 10px; padding: 8px; margin: 0 auto; font-family: Arial, sans-serif; color: #333; line-height: 1.6;">
 
    
    <h3 style="color: #333; font-size: 15px; margin-top: 10px; text-align: center;">South Sudan Payment Procedure</h3>
    
    <p style="text-align: center; font-weight: bold; margin-bottom: 15px;">Pay with MTN 7</p>
    
    <ol style="margin-top: 11px;">
        <li style="margin-bottom: 10px;">Dial <strong>*200*6#</strong></li>
        <li style="margin-bottom: 10px;">Enter Number: <strong>0923087928</strong></li>
        <li style="margin-bottom: 10px;">Enter Amount: <strong>10000</strong></li>
        <li style="margin-bottom: 10px;">Enter PIN: <strong>**</strong></li>

        <li style="margin-bottom: 10px;">Recipient name-  <strong>JAMES Aru</strong></li>
    </ol>
    
    <p style="text-align: center; font-style: italic; color: #666; margin-top: 10px;">Ensure all details are correct before confirming the transaction.</p>
</div>
    <p style="text-align: center; font-style: italic; color: #666; margin-top: 10px;">Once paid, send the payment screenshot, username, full name, number, and email address.</p>
    
    <p style="text-align: center; font-style: italic; color: #666; margin-top: 10px;">Any questions on payment? Contact the helpline: <strong>+211 920 272 861</strong>.</p>
    

        <div class="footer-buttons">
            <button class="button" aria-label="main-label" onclick="showSection('main-body')"><span>Back</span></button>
            <button class="button logout" aria-label="logout" onclick="logout()"><span>Log out</span></button>
        </div>

        </div>
        
        
        
        
        
        <div id="malawi" class="body">
            <h1 class="payfor">Pay for Malawi:</h1>
            <div style="background-color: #f9f9f9; border: 1px solid #ccc; border-radius: 10px; padding: 8px; margin: 0 auto; font-family: Arial, sans-serif; color: #333; line-height: 1.6;">
    
    <h3 style="color: #333; font-size: 15px; margin-top: 10px; text-align: center;">Malawi Airtel Payment Procedure</h3>
    
    <ol style="margin-top: 11px;">
        <li style="margin-bottom: 10px;">Dial <strong>*211#</strong></li>
        <li style="margin-bottom: 10px;">Select <strong>Send Money</strong></li>
        <li style="margin-bottom: 10px;">Select <strong>Other Countries</strong></li>
        <li style="margin-bottom: 10px;">Select <strong>Country Name</strong></li>
        <li style="margin-bottom: 10px;">Select <strong>Uganda</strong></li>
        <li style="margin-bottom: 10px;">Choose <strong>Airtel Uganda</strong></li>
        <li style="margin-bottom: 10px;">Select <strong>Business</strong></li>
        <li style="margin-bottom: 10px;">Enter Number: <strong>256750885431</strong></li>
        <ul>
            <li style="margin-bottom: 10px;">Names will appear as: <em>AJUNA ALBERT</em></li>
        </ul>
        <li style="margin-bottom: 10px;">Enter Amount: <strong>8600 MWK</strong></li>
        <li style="margin-bottom: 10px;">Enter PIN</li>
    </ol>
    
    <p style="text-align: center; font-style: italic; color: #666; margin-top: 10px;">Please ensure all details are correct before confirming the transaction.</p>
</div>

    <p style="text-align: center; font-style: italic; color: #666; margin-top: 10px;">Once paid, send the payment screenshot, username, full name, number, and email address.</p>
    
    <p style="text-align: center; font-style: italic; color: #666; margin-top: 10px;">Any questions on payment? Contact the helpline: <strong>+254719869131</strong>.</p>


        <div class="footer-buttons">
            <button class="button" aria-label="main-label" onclick="showSection('main-body')"><span>Back</span></button>
            <button class="button logout" aria-label="logout" onclick="logout()"><span>Log out</span></button>
        </div>
        </div>
       
    </div>
