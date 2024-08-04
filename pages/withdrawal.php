<div class="deposit">
    <form  class="depositf" action="#" id="withforrm">
        <span class="formh"><i class="fa-solid fa-sack-dollar"></i> Withdrawl Funds</span>
        
        <div class="formdiv" >
            <label for="ref">Choose Account </label>
            <select name="acc" id="" required>
                <option value="">-- Choose Account  --</option>
                <option value="1">Account Balance (<i id="curbal"></i>)</option>
                <option value="2">Trivia-Balance (<i id="curtivia"></i>)</option>
                <option value="3">Spin-Balance (<i id="curspin"></i>)</option>
                <option value="4">Youtube-Balance (<i id="curyou"></i>)</option>
                <option value="5">Tiktok-Balance (<i id="curtiktok"></i>)</option>
            </select>
        </div>


        <div class="formdiv">
            <label for="amount">Amount</label>
            <input type="text" name="amount" required>
        </div>

        <!-- <div class="formdiv">
            <label for="phone">Phone</label>
            <input type="text" name="phone">
        </div> -->


        <button class="authbtn" id=""><i class="fa-solid fa-coins"></i> Request</button>
    </form>

</div>