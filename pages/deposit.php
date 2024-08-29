<div class="deposit">
    <form  class="depositf" action="#" id="depoform">
        <span class="formh"><i class="fa-solid fa-hand-holding-dollar"></i> Topup Account</span>
        <span class="formd">Deposit Balance: <i id="usys"></i>  <i id="actdip">0.00</i></span>
        
        <div class="formdiv">
            <label for="amount">Amount</label>
            <input type="text" name="amount" required>
        </div>

        <div class="formdiv" id="dipophone" style="display: none;">
            <label for="phone">Phone</label>
            <input type="text" name="phone">
        </div>

        <button class="authbtn" id=""><i class="fa-solid fa-hand-holding-dollar"></i> Request</button>
    </form>


    <div class="dipopro" id="datamanual">
    <span class="formh"><i class="fa-solid fa-hand-holding-dollar"></i> Topup Account</span>
    <span class="formd">Deposit Balance: <i id="usys"></i>  <i id="actdip">0.00</i></span>
    <div class="allrapper" id="allrapper">


    </div>
    </div>

    <div class="alldip">
    <span class="diph" ><i class="fa-solid fa-money-bill-1-wave"></i> Recent Deposit</span>
    <div class="tablediv" id = 'diposithistory'>
    <table class="table" id="dataTable">
            <thead>
                <tr id="tableHeader"></tr>
            </thead>
            <tbody>
            </tbody>

        </table>
    </div>
    </div>
</div>
