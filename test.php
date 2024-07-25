<title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile-container {
            background-color: #1562ffda;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .profile-container h1 {
            text-align: center;
            color: yellow;
            font-size: 22px;
        }
        .profile-container .profile-details {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 10px 20px;
            margin-top: 20px;
            border: 1px solid #fff;
            border-radius: 10px;
            padding: 10px;
        }
        .profile-container .profile-details p {
            margin: 0;
            font-size: 16px;
            color: #fff;
        }
        .profile-container .profile-details p span {
            font-weight: bold;
        }
        .change-password-button {
            display: block;
            padding: 10px;
            margin-top: 20px;
            background-color: #0054f6e0;
            color: yellow;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            border: 3px double #fff;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
            width: auto;
            margin-left: auto;
            margin-right: auto;
        }
        .password-form {
            display: none;
            margin-top: 20px;
            border: 1px solid #fff;
            border-radius: 10px;
            padding: 20px;
        }
        .password-form.show {
            display: block;
        }
        .password-form input {
            display: block;
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .password-form .save-changes-button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #0054f6e0;
            color: yellow;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            border: 3px double #fff;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-details"><h3 style="color: #fff;">Logo + Earn Empire Connections</h3></div>
        <div class="profile-details">
            <h1>User Profile</h1> <br>
            <p><span>Username:</span></p> <p>Nyacorya</p>
            <p><span>Country:</span></p> <p>Kenya</p>
            <p><span>Number:</span></p> <p>+254719869131</p>
            <p><span>Email:</span></p> <p>nyacorya@gmail.com</p>
            <p><span>Upline:</span></p> <p>CEO</p>
            <p><span>Joined:</span></p> <p>28/02/2024 8:16am</p>
            <p><span>Activated:</span></p> <p>29/02/2024 6:24pm</p>
        </div>
        <a href="#" class="change-password-button" onclick="showPasswordForm()">Change Password</a>
        <div class="password-form" id="passwordForm">
            <input type="password" id="currentPassword" placeholder="Current Password" required>
            <input type="password" id="newPassword" placeholder="New Password" required>
            <input type="password" id="confirmPassword" placeholder="Confirm Password" required>
            <button type="submit" class="save-changes-button">Save Changes</button>
        </div>
    </div>

    <script>
        function showPasswordForm() {
            document.querySelector('.change-password-button').style.display = 'none';
            document.querySelector('.password-form').classList.add('show');
        }

        function saveChanges(event) {
            event.preventDefault();
            // Add your logic to handle saving changes here
            alert('Changes saved successfully!');
        }
    </script>
</body>
</html>