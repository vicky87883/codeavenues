<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .google-auth-button {
            display: inline-block;
            background-color: #db4a39;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }
        .google-auth-button:hover {
            background-color: #c53726;
            transform: scale(1.05);
        }
        .google-auth-icon {
            margin-right: 10px;
        }
        .google-auth-text {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="google-auth-button" id="googleSignInButton">
        <span class="google-auth-icon"><i class="fab fa-google"></i></span>
        <span class="google-auth-text">Sign in with Google</span>
    </div>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const googleSignInButton = document.getElementById('googleSignInButton');

            googleSignInButton.addEventListener('click', () => {
                gapi.load('auth2', function() {
                    gapi.auth2.init({
                        client_id: '1084905472943-u9m52a3h1vjl0ui4coah403hsjtmjb0c.apps.googleusercontent.com',
                    }).then(() => {
                        const auth2 = gapi.auth2.getAuthInstance();
                        auth2.signIn().then(onSignIn);
                    });
                });
            });
        });

        function onSignIn(googleUser) {
            const profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId());
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail());

            // You can use the profile information to customize your application's behavior.
            // For example, you can display the user's name and profile picture.
        }
    </script>
</body>
</html>
