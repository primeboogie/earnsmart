<style>

#scrollTopBtn {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: block;
      background-color: var(--theme1);
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      /* z-index: 300; */
    }

    #scrollTopBtn:hover {
      background-color: #6da2db;
    }

</style>

<div class="forex">
    <span class="forexh">
    <i class="fa-solid fa-chart-gantt"></i> <i id="team"></i> Downlines
    </span>

    <p>
    Hi <i id="username">Zanytech</i>,<br>
Check out your <i id="team"></i> downlines Let’s keep growing strong

Your effort is amazing. Let’s continue to expand and achieve new heights

Keep it up and let’s build an unstoppable team. <br>

<span class="ttstyle" >Total <i id="team"></i> Earnings: <i id="totalmoney">0.00</i> </span>

    </p>

    
    <!-- <div class="actionbtns">
        <button class="authbtn" id="tall">ALL
            <small id="sall">(0)</small>
        </button>

        <button class="authbtn" id="tactive">
            Active
        <small id="sactive">(0)</small>
    </button>

        <button class="authbtn" id="tinactive">
            Inactive
            <small id="sactive">(0)</small>
        </button>

        <button class="authbtn" id="tsuspend">
            Suspended
            <small id="sactive">(0)</small>
    </button> 

    </div>  -->
    

    <input type="text" id="searchInput" class="serachuser" placeholder="Search...">

    <div class="tablediv">
        <table class="table" id="dataTable">
            <thead>
                <tr id="tableHeader"></tr>
            </thead>
            <tbody>
            </tbody>

        </table>

        
    </div>
    <button id="scrollTopBtn">⬆ Top</button>
</div>
<script>
    const scrollTopBtn = document.getElementById('scrollTopBtn');

    // Show button when scroll starts
    window.onscroll = function () {
      if (document.documentElement.scrollTop > 100) {
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
  </script