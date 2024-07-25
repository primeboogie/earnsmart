<div class="deposit">
    <form  class="depositf" action="#" id="depositf">
        <span class="formh"><i class="fa-solid fa-hand-holding-dollar"></i> Topup Account</span>
        
        <div class="formdiv">
            <label for="ref">Choose Payment </label>
            <select name="paymode" id="">
                <option value="">-- Payment Mode --</option>
                <option value="1">Mpesa</option>
                <option value="2">Flutter-Wave</option>
            </select>
        </div>

        <div class="formdiv">
            <label for="amount">Amount</label>
            <input type="text" name="amount">
        </div>

        <div class="formdiv">
            <label for="phone">Phone</label>
            <input type="text" name="phone">
        </div>


        <button class="authbtn" id="">Request</button>
    </form>
    <div class="alldip">
    <span class="diph" >Recent Deposit</span>
    <div class="tablediv">
        <table class="table">
        <thead>
    <tr>
        <th>ID</th>
        <th>Amount</th>
        <th>Phone</th>
        <th>Status</th>
        <th>Date</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>001</td>
        <td>5000</td>
        <td>+254712345678</td>
        <td>Completed</td>
        <td>2024-07-23</td>
    </tr>
    <tr>
        <td>002</td>
        <td>3500</td>
        <td>+254798765432</td>
        <td>Pending</td>
        <td>2024-07-22</td>
    </tr>
    <tr>
        <td>003</td>
        <td>4200</td>
        <td>+254712098765</td>
        <td>Completed</td>
        <td>2024-07-21</td>
    </tr>
    <tr>
        <td>004</td>
        <td>2800</td>
        <td>+254798654321</td>
        <td>Failed</td>
        <td>2024-07-20</td>
    </tr>
    <tr>
        <td>005</td>
        <td>5300</td>
        <td>+254701234567</td>
        <td>Completed</td>
        <td>2024-07-19</td>
    </tr>
</tbody>

        </table>
    </div>
    </div>
</div>