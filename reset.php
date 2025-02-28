<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="text-center">
        <h1 class="text-3xl font-bold mb-4">Welcome to Our App</h1>
        <button id="resetBtn" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
            Reset Password
        </button>
    </div>

    <div id="resetDialog" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold mb-4">Reset Password</h2>
            <p class="mb-4">Enter the email you used to register:</p>
            <input type="email" id="emailInput" class="w-full px-3 py-2 border border-gray-300 rounded-md mb-4" placeholder="Enter your email">
            <button id="submitBtn" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded w-full">
                Submit
            </button>
            <p id="message" class="mt-4 text-green-600 hidden"></p>
        </div>
    </div>

    <script>
        const resetBtn = document.getElementById('resetBtn');
        const resetDialog = document.getElementById('resetDialog');
        const emailInput = document.getElementById('emailInput');
        const submitBtn = document.getElementById('submitBtn');
        const message = document.getElementById('message');

        resetBtn.addEventListener('click', () => {
            resetDialog.classList.remove('hidden');
        });

        resetDialog.addEventListener('click', (e) => {
            if (e.target === resetDialog) {
                resetDialog.classList.add('hidden');
                emailInput.value = '';
                message.classList.add('hidden');
            }
        });

        submitBtn.addEventListener('click', async () => {
            const email = emailInput.value;
            if (!email) {
                alert('Please enter your email');
                return;
            }

            try {
                const response = await fetch('/api/reset-password', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ email }),
                });

                const result = await response.json();

                if (result.success) {
                    message.textContent = 'Please check your email for the new credentials.';
                    message.classList.remove('hidden');
                    emailInput.value = '';
                } else {
                    alert('Failed to reset password. Please try again.');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            }
        });
    </script>
</body>
</html>