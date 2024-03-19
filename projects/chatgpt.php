<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatGPT Chatbot</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <style>
        /* Common Styles */
        body {
            margin: 0;
            font-family: 'Open Sans', sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .chat-container {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .messages {
            padding: 10px;
            max-height: 400px;
            overflow-y: auto;
        }
        .message {
            display: flex;
            align-items: flex-start;
            margin-bottom: 10px;
        }
        .message-content {
            padding: 12px;
            border-radius: 10px;
            max-width: 70%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .chatbot-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            margin-right: 10px;
        }
        .user-message {
            margin-left: auto;
            align-items: flex-end;
        }
        .user-input {
            display: flex;
            align-items: center;
            border-top: 1px solid #ccc;
            padding: 10px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }
        .user-input input {
            flex-grow: 1;
            border: none;
            padding: 8px;
            border-radius: 4px;
            font-size: 14px;
        }
        .send-button {
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            font-size: 14px;
        }
        #send-button{
            outline: none;
        }
        .message-icon {
            margin-right: 5px;
        }
        .loading-icon {
            margin-right: 5px;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Light Theme */
        .light-theme {
            background-color: #f7f8fb;
            color: #333;
			height:100vh;
        }
        .light-theme .chat-container {
            background-color: #f7f8fb;
        }
        .light-theme .message-content {
            background-color: #fff;
            color: #333;
        }
        .light-theme .user-input {
            background-color: #fff;
        }

        /* Dark Theme */
        .dark-theme {
            background-color: #333;
            color: #f7f8fb;
        }
        .dark-theme .chat-container {
            background-color: #444;
        }
        .dark-theme .message-content {
            background-color: #555;
            color: #f7f8fb;
        }
        .dark-theme .user-input {
            background-color: #444;
        }

        /* Theme Toggle */
        .theme-toggle {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 10px;
            z-index: 1;
        }
        .theme-button {
            background-color: #f7f8fb;
            color: #333;
            border: none;
            border-radius: 50%;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }
        .theme-button:hover {
            background-color: #333;
            color: #f7f8fb;
        }
        .user-input input:focus{
        outline: none;
    }
    </style>
</head>
<body>
<div class="light-theme">
    <div class="container">
        <h1>ChatGPT Chatbot</h1>
        <div class="chat-container">
                <div class="messages" id="chat-messages">
                    <div class="message">
                        <div class="chatbot-avatar">C</div>
                        <div class="message-content">
                            Welcome! How can I assist you today?
                        </div>
                    </div>
            </div>
            <div class="user-input">
                <input type="text" class="input" id="message-input" placeholder="Type your message...">
                <button class="send-button" id="send-button">
                    <i class="fas fa-paper-plane message-icon"></i>
                    <i class="fas fa-spinner fa-spin loading-icon" style="display: none;"></i> Send
                </button>
            </div>
        </div>
    </div>
    <div class="theme-toggle">
        <button class="theme-button" id="light-theme-button" onclick="toggleTheme('light')">
            <i class="fas fa-sun theme-icon"></i>
        </button>
        <button class="theme-button" id="dark-theme-button" onclick="toggleTheme('dark')">
            <i class="fas fa-moon theme-icon"></i>
        </button>
    </div>
</div>
    <script>
        const chatMessages = document.getElementById('chat-messages');
        const messageInput = document.getElementById('message-input');
        const sendButton = document.getElementById('send-button');
        const lightThemeButton = document.getElementById('light-theme-button');
        const darkThemeButton = document.getElementById('dark-theme-button');

        sendButton.addEventListener('click', sendMessage);
        messageInput.addEventListener('keydown', handleKeyDown);

        function appendMessage(sender, message, isUser = false) {
            // ... (existing appendMessage code) ...
            const messageDiv = document.createElement('div');
            messageDiv.className = 'message';
            if (isUser) {
                messageDiv.classList.add('user-message');
            }
            const senderAvatar = isUser ? '<div class="chatbot-avatar">Y</div>' : '<div class="chatbot-avatar">C</div>';
            messageDiv.innerHTML = `${senderAvatar}<div class="message-content">${message}</div>`;
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function toggleLoadingIcon(show) {
            // ... (existing toggleLoadingIcon code) ...
            const loadingIcon = document.querySelector('.loading-icon');
            if (show) {
                loadingIcon.style.display = 'inline-block';
            } else {
                loadingIcon.style.display = 'none';
            }
        }

        function sendMessage() {
            // ... (existing sendMessage code) ...
            const userMessage = messageInput.value.trim();
            if (!userMessage) return;

            appendMessage('You', userMessage, true);
            messageInput.value = '';
            toggleLoadingIcon(true);

              // Call the ChatGPT API here and append the response to the chat
            // Replace 'YOUR_API_KEY' with your actual API key
            const apiKey = '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';
            const apiUrl = 'https://api.openai.com/v1/chat/completions';
            
            const requestOptions = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${apiKey}`
                },
                body: JSON.stringify({
                    model: 'gpt-3.5-turbo',
                    messages: [{ role: 'system', content: 'You are a chatbot.' }, { role: 'user', content: userMessage }]
                })
            };

            fetch(apiUrl, requestOptions)
                .then(response => response.json())
                .then(data => {
                    const chatbotMessage = data.choices[0].message.content;
                    appendMessage('ChatGPT', chatbotMessage);
                    toggleLoadingIcon(false);
                })
                .catch(error => {
                    console.error('Error:', error);
                    toggleLoadingIcon(false);
                });
        }

        function handleKeyDown(event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // Prevent line break in the input
                sendMessage();
            }
        }

        function toggleTheme(theme) {
            const body = document.body;
            if (theme === 'dark') {
                body.classList.add('dark-theme');
                body.classList.remove('light-theme');
            } else {
                body.classList.add('light-theme');
                body.classList.remove('dark-theme');
            }
        }
		document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            alert('not allowed');
            return false;
        } else {
            return true;
        }
};
    </script>
</body>
</html>
