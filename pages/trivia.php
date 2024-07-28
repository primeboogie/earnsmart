<div class="trivia">

<span>Trivia Questions</span>
<div class="alltrivia">

    <div class="quiz-container" id="quiz">
        <div class="quiz-header">
        <span id="question">Question Text</span>
        <ul>
            <li>
            <input type="radio" name="answer" id="a" class="answer">
            <label for="a" id="a_text">Answer</label>
            </li>
            <li>
            <input type="radio" name="answer" id="b" class="answer">
            <label for="b" id="b_text">Answer</label>
            </li>
            <li>
            <input type="radio" name="answer" id="c" class="answer">
            <label for="c" id="c_text">Answer</label>
            </li>
            <li>
            <input type="radio" name="answer" id="d" class="answer">
            <label for="d" id="d_text">Answer</label>
            </li>
        </ul>
        </div>
        <button id="submit">Submit</button>
    </div>
    
    </div>
    </div>

    <script>
    const quizData = [
    {
        question: "Which Currency Are you Using?",
        a: "KES",
        b: "TSH",
        c: "CED",
        d: "None",
        correct: "d",
    },
    {
        question: "Do You Belive In Marketting?",
        a: "Yes",
        b: "No",
        c: "Ofcourse",
        d: "Never Hard About It",
        correct: "a",
    },
    {
        question: "What Device are You Using?",
        a: "Laptop",
        b: "Calculater",
        c: "Remote",
        d: "Mobile Device",
        correct: "c",
    },

    {
        question: "Yes Am Gay ?",
        a: "Yes",
        b: "No",
        c: "Ofcourse",
        d: "A Bit",
        correct: "a",
    },
    {
        question: "Did You Earn Today ?",
        a: "Yes",
        b: "No",
        c: "Zii",
        d: "A Bit",
        correct: "a",
    },
];
const quiz= document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')
let currentQuiz = 0
let score = 0
loadQuiz()
function loadQuiz() {
    deselectAnswers()
    const currentQuizData = quizData[currentQuiz]
    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}
function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}
function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}
submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData[currentQuiz].correct) {
           score++
       }
       currentQuiz++
       if(currentQuiz < quizData.length) {
           loadQuiz()
       } else {
           quiz.innerHTML = `
           <h2>You answered ${score}/${quizData.length} questions correctly</h2>
           <button onclick="location.reload()">Reload</button>
           `
       }
    }
})
  </script>