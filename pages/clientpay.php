<div class="deposit">
    <style>
        td{
            text-wrap: nowrap;
        }
    </style>
    <form  class="depositf" action="#" id="depositf">
        <span class="formh"><i class="fab fa-paypal"></i> Transfer Funds</span>
        
        <div class="formdiv">
            <label for="ref">Choose Payment </label>
            <select name="paymode" id="">
                <option value="">-- Payment Mode --</option>
                <option value="1">Account Balance (6500)</option>
                <option value="2">Mpesa-Direct</option>
            </select>
        </div>

        <div class="formdiv">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>


        <div class="formdiv">
            <label for="amount">Amount</label>
            <input type="text" name="amount">
        </div>

        <!-- <div class="formdiv">
            <label for="phone">Phone</label>
            <input type="text" name="phone">
        </div> -->


        <button class="authbtn" id=""><i class="fa-solid fa-paper-plane"></i> Transfer</button>
    </form>
    <div class="alldip">
    <span class="diph" > <i class="fa-solid fa-money-bill-transfer"></i> Recent WIthdrawals</span>
    <div class="tablediv">
        <table class="table">
        <thead>
    <tr>
        <th>ID</th>
        <th>Amount</th>
        <th>Recipient</th>
        <th>Status</th>
        <th>Date</th>
    </tr>
</thead>
<tbody>
<!-- <tr>
        <td>001</td>
        <td>5000</td>
        <td>Moraa</td>
        <td>Completed</td>
        <td>2024-07-23</td>
    </tr>
    <tr>
        <td>002</td>
        <td>3500</td>
        <td>Nyanchama</td>
        <td>Pending</td>
        <td>2024-07-22</td>
    </tr>
    <tr>
        <td>003</td>
        <td>4200</td>
        <td>Nyambeki</td>
        <td>Completed</td>
        <td>2024-07-21</td>
    </tr>
    <tr>
        <td>004</td>
        <td>2800</td>
        <td>Basweti</td>
        <td>Failed</td>
        <td>2024-07-20</td>
    </tr>
    <tr>
        <td>005</td>
        <td>5300</td>
        <td>Onchonka</td>
        <td>Completed</td>
        <td>2024-07-19</td>
    </tr> -->

</tbody>

        </table>
    </div>
    </div>
</div>