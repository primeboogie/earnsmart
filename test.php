<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TikTok Video Loop</title>
    <style>
        .video-container {
            margin-bottom: 20px;
        }
        iframe {
            width: 100%;
            height: 400px;
        }
        .play-button {
            display: block;
            margin: 10px auto;
            padding: 10px 20px;
            background-color: #ff5a5f;
            color: white;
            border: none;
            cursor: pointer;
            text-align: center;
        }
    </style>
</head>
<body>

    <div id="video-list"></div>

    <script>
        const tiktokLinks = [
            'https://vm.tiktok.com/ZMrp1jTNk',
            'https://vm.tiktok.com/ZMrp1BqKu',
            // Add more TikTok links here
        ];

        const videoList = document.getElementById('video-list');

        tiktokLinks.forEach(link => {
            const videoContainer = document.createElement('div');
            videoContainer.className = 'video-container';

            const iframe = document.createElement('iframe');
            iframe.src = link;
            iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
            iframe.allowFullscreen = true;
            iframe.style.display = 'none';

            const playButton = document.createElement('button');
            playButton.className = 'play-button';
            playButton.innerText = 'Play Video';
            playButton.addEventListener('click', () => {
                iframe.style.display = 'block';
                playButton.style.display = 'none';
            });

            videoContainer.appendChild(iframe);
            videoContainer.appendChild(playButton);
            videoList.appendChild(videoContainer);
        });
    </script>

</body>
</html>