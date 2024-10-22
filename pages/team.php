<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        #scrollTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none; /* Initially hidden */
            background-color: var(--theme1);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        #scrollTopBtn:hover {
            background-color: #6da2db;
        }

        @media (max-width: 768px) {
            #scrollTopBtn {
                display: block; /* Ensure displayed on mobile */
            }
        }
    </style>
</head>
<body>

<div class="forex">
    <span class="forexh">
        <i class="fa-solid fa-chart-gantt"></i> <i id="team"></i> Downlines
    </span>
    <p>
        Hi <i id="username">Zanytech</i>,<br>
        Check out your <i id="team"></i> downlines Let’s keep growing strong.
        Your effort is amazing. Let’s continue to expand and achieve new heights.
        Keep it up and let’s build an unstoppable team. <br>
        <span class="ttstyle">Total <i id="team"></i> Earnings: <i id="totalmoney">0.00</i></span>
    </p>
    <input type="text" id="searchInput" class="serachuser" placeholder="Search...">
    <div class="tablediv">
        <table class="table" id="dataTable">
            <thead>
                <tr id="tableHeader"></tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <button id="scrollTopBtn">⬆ Top</button>
</div>

<script>
    const scrollTopBtn = document.getElementById('scrollTopBtn');

    // Show button when scroll starts
    window.onscroll = function () {
        if (window.scrollY > 100) { // Use window.scrollY for consistency
            scrollTopBtn.style.display = 'block';
        } else {
            scrollTopBtn.style.display = 'none';
        }
    };

    // Scroll to the top when the button is clicked
    scrollTopBtn.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'  // Smooth scrolling effect
        });
    });

    // Optional: add touch event for mobile
    scrollTopBtn.addEventListener('touchstart', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>