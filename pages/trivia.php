<div class="trivia">

<span class="triviah"><i class="fa-solid fa-question"></i> Trivia Questions</span>
<div class="alltrivia">
    <div class="content" id="content" style="display: grid;">
        <span>Instructions</span>
        <div class="instructions">
            <ul>
                <li>
                    You're going to answer 10 questions, within <i>10 minutes</i>.
                </li>
                <li>
            Select the correct answer by clicking at what you think is the correct answer.
                </li>
                <li>
            Click the <i>Submit</i> button when done. If time elapses before clicking <i>Submit</i>, 
            the test will be submitted automatically.
                </li>
            </ul>
        </div>
        <button class="authbtn" id="readyButton">Ready</button>
    </div>
  
<div class="container"  id="container"   style="display: none;">
        <form action="/submit-quiz" method="post">

        <div class="dquiz">
            <span class="cquiz">Quiz 1</span>
            <label  class="lbb">
                <input class="lbb" type="radio" name="quiz1" value="A"> Answer A
            </label>
            <label class="lbb">
                <input  type="radio" name="quiz1" value="B"> Answer B
            </label>
            <label class="lbb">
                <input  type="radio" name="quiz1" value="C"> Answer C
            </label>
            <label class="lbb">
                <input  type="radio" name="quiz1" value="D"> Answer D
            </label>
            <label class="lbb">
                <input  type="radio" name="quiz1" value="E"> Answer E
            </label>
        </div>

        <div class="dquiz">
        <span class="cquiz">Quiz 2</span>
        <label class="lbb">
            <input  type="radio" name="quiz2" value="A"> Answer A
        </label>
        <label class="lbb">
            <input  type="radio" name="quiz2" value="B"> Answer B
        </label>
        <label class="lbb">
            <input  type="radio" name="quiz2" value="C"> Answer C
        </label>
        <label class="lbb">
            <input  type="radio" name="quiz2" value="D"> Answer D
        </label>
        </div>

        <div class="dquiz">

            <span class="cquiz">Quiz 3</span>
            <label class="lbb">
                <input   type="radio" name="quiz3" value="A"> Answer A
            </label>
            <label class="lbb">
                <input  type="radio" name="quiz3" value="B"> Answer B
            </label>
            <label class="lbb">
                <input  type="radio" name="quiz3" value="C"> Answer C
            </label>
            <label class="lbb">
                <input  type="radio" name="quiz3" value="D"> Answer D
            </label>
        </div>

        <div class="dquiz">

<span class="cquiz">Quiz 4</span>
<label class="lbb">
    <input  type="radio" name="quiz4" value="A"> Answer A
</label>
<label class="lbb">
    <input  type="radio" name="quiz4" value="B"> Answer B
</label>
<label class="lbb">
    <input  type="radio" name="quiz4" value="C"> Answer C
</label>
<label class="lbb">
    <input  type="radio" name="quiz4" value="D"> Answer D
</label>
</div>

<div class="dquiz">

<span class="cquiz">Quiz 5</span>
<label class="lbb">
    <input  type="radio" name="quiz5" value="A"> Answer A
</label>
<label class="lbb">
    <input  type="radio" name="quiz5" value="B"> Answer B
</label>
<label class="lbb">
    <input  type="radio" name="quiz5" value="C"> Answer C
</label>
<label class="lbb">
    <input  type="radio" name="quiz5" value="D"> Answer D
</label>
</div>

        <div class="dquiz">

            <span class="cquiz">Quiz 4</span>
            <label class="lbb">
                <input  type="radio" name="quiz4" value="A"> Answer A
            </label>
            <label class="lbb">
                <input  type="radio" name="quiz4" value="B"> Answer B
            </label>
            <label class="lbb">
                <input  type="radio" name="quiz4" value="C"> Answer C
            </label>
            <label class="lbb">
                <input  type="radio" name="quiz4" value="D"> Answer D
            </label>
        </div>

        <div class="dquiz">

            <span class="cquiz">Quiz 5</span>
            <label class="lbb">
                <input  type="radio" name="quiz5" value="A"> Answer A
            </label>
            <label class="lbb">
                <input  type="radio" name="quiz5" value="B"> Answer B
            </label>
            <label class="lbb">
                <input  type="radio" name="quiz5" value="C"> Answer C
            </label>
            <label class="lbb">
                <input  type="radio" name="quiz5" value="D"> Answer D
            </label>
        </div>

        <button class="authbtn" type="submit">Submit</button>
    </form>
    </div>
</div>
</div>
<script>
    let ready =document.getElementById("readyButton")
    let content =document.getElementById("content")
    let container =document.getElementById("container")

    if(ready){
        ready.addEventListener('click', () => {
            content.style.display = "none"
            container.style.display = "grid"
            
        })
    }


</script>

 