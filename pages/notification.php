<style>
        /* Prevent content selection */
        body {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Disable right-click */
        body {
            pointer-events: none;
        }
    </style>
    
    <div class="max-w-md w-full bg-white rounded-lg shadow-md overflow-hidden">
    <!-- Notification Header -->
    <div class="bg-blue-600 px-6 py-4">
      <h2 class="text-white font-semibold text-lg">Recent Notification</h2>
    </div>
    
    <!-- Notification Content -->
    <div class="p-6">
      <h3 class="font-bold text-gray-800 text-xl mb-4">Subject: Important Update on Your Earnings Adjustment</h3>
      
      <div class="space-y-4 text-gray-700">
        <p>Dear Valued Member,</p>
        
        <p>We hope this message finds you well.</p>
        
        <p>Following our recent system update, we discovered a technical glitch that unintentionally allowed users to watch the same sponsored videos multiple times specifically on Sunday and Monday, leading to unusually high earnings beyond the intended structure. To maintain fairness for all members and ensure the sustainability of our platform, we have made necessary adjustments by deducting the extra earnings obtained due to this error.</p>
        
        <p>Please rest assured that these deductions were made with pure intentions—to restore earnings to their rightful values while keeping our reward system fair and transparent for everyone. We sincerely apologize for any inconvenience this may have caused and appreciate your understanding as we continue improving our platform for a better experience.</p>
        
        <p>And whoever made a withdrawal during this period and was not paid, please forward the withdrawal details to the admins, and it will be worked upon.</p>
        
        <p>Thank you for being part of our community. If you have any concerns, feel free to reach out to our support team.</p>
        
        <p class="pt-2">Best regards,<br>The CEO</p>
      </div>
    </div>
    
    <!-- Timestamp -->
    <div class="bg-gray-50 px-6 py-3 text-right">
      <span class="text-sm text-gray-500">Received: February 27, 2025</span>
    </div>
  </div>
  

  <script>
        // Disable "Print Screen" key
        document.addEventListener("keyup", function (e) {
            if (e.key === "PrintScreen") {
                alert("Screenshots are disabled!");
                navigator.clipboard.writeText(""); // Clears clipboard
            }
        });

        // Disable right-click (Prevents context menu screenshot tools)
        document.addEventListener("contextmenu", function (e) {
            e.preventDefault();
            alert("Right-click is disabled!");
        });

        // Attempt to block screen capture tools
        setInterval(() => {
            if (window.outerHeight - window.innerHeight > 200 || window.outerWidth - window.innerWidth > 200) {
                document.body.innerHTML = ""; // Remove content if screen capture tools detected
                alert("Screen capture detected! Content removed.");
            }
        }, 1000);
    </script>