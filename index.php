<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if (!isset($_SESSION['username'])) {
    echo '<script>
                window.location.href = "http://localhost/aulusfy/register";
        </script>';
    exit();
}
else{
  $username = $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/logo.png">
  <title>Doctor AI</title>
</head>
<body>
  <div class="panel">
    <div class="Messaging" id="MessagingID">
      <img src="images/heart-white.png" id="mesIMG">
    </div> 
    <div class="DoctorMain" id="DoctorMain">
      <img src="images/pill1.png" id="resIMG">
    </div>
    <div class="Settings">
    <img src="images/settings1.png">
    </div> 
  </div> 
  <div class="results" id="results">
      <h1 id="nameIll" class="nameILL">Loading...</h1>
      <h1 id="nameRes" class="nameRES">Loading...</h1>
  </div>
  <div class="main-message" id="main-message">
    <div class="questionsForm"  id="quesform">
      <h1 class="textAnm">Anamnesis</h1>
      <div class="qustion"><h2>1.What is the current problem in brief?</h2> <input type="text"  id="q1"  oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>2. When did you first notice this problem?</h2> <input type="text"  id="q2" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>3. Has it gotten better, worse, or stayed the same?</h2> <input type="text"  id="q3" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>4. Can you describe the symptoms in more detail (pain, location, duration, severity)?</h2> <input type="text"  id="q4" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>5. Are there any specific things that make the symptoms better or worse?</h2> <input type="text"  id="q5" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>6.Do you have any chronic medical conditions (e.g., diabetes, high blood pressure)?</h2> <input type="text"  id="q6" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>7.Have you ever been hospitalized? If so, why?</h2> <input type="text"  id="q7" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>8.Have you had any surgeries? If so, what kind?</h2> <input type="text"  id="q8" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>9.Do you have any allergies (medications, food)?</h2> <input type="text"  id="q9" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>10.What medications are you currently taking (prescription and over-the-counter)?</h2> <input type="text"  id="q10" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>11.Does anyone in your family have any chronic medical conditions?</h2> <input type="text"  id="q11" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>12.Has anyone in your family had a similar illness to yours?</h2> <input type="text"  id="q12" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>13.Do you smoke? If so, how much and for how long?</h2> <input type="text"  id="q13" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>14.Do you drink alcohol? If so, how much and how often?</h2> <input type="text"  id="q14" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>15.Do you use any recreational drugs?</h2> <input type="text"  id="q15" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>16.What is your occupation?</h2> <input type="text" id="q16"  oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>17.Do you experience a lot of stress in your life?</h2> <input type="text"  id="q17" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>18.Do you have any fever, chills, or night sweats?</h2> <input type="text"  id="q18" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>19.Have you experienced any weight loss or gain recently?</h2> <input type="text"  id="q19" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>20.Are you tired all the time?</h2> <input type="text"  id="q20" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>21.Do you have any rashes, itching, or changes in your skin?</h2> <input type="text"  id="q21" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>22.Do you have any headaches, dizziness, or trouble sleeping?</h2> <input type="text" id="q22"  oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>23.Do you have any problems with your vision, such as blurry vision or pain?</h2> <input type="text"  id="q23" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>24.Do you have any earaches, ringing in your ears, or difficulty hearing?</h2> <input type="text"  id="q24" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>25.Do you have a sore throat, runny nose, or difficulty breathing?</h2> <input type="text"  id="q25" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>26.Do you have any cough, shortness of breath, or chest pain?</h2> <input type="text"  id="q26" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>27.Do you have any chest pain, palpitations, or swelling in your legs?</h2> <input type="text"  id="q27" oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>28.Do you have any nausea, vomiting, diarrhea, or constipation?</h2> <input type="text" id="q28"  oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>29.Do you have any pain or burning when you urinate, or any changes in your urinary frequency?</h2> <input type="text" id="q29"  oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>30.Do you have any numbness, tingling, weakness, or problems with coordination?</h2> <input type="text" id="q30"  oninput="changeBorderColor(this)"></div>
      <div class="qustion"><h2>Note:Is there anything else you would like to mention?</h2> <input type="text" id="qOt"  oninput="changeBorderColor(this)"></div>
      <div class="quesButton"><button id="sButton">Submit</button></div>
    </div>
    
  </div>
  <div class="panel2">
    <div class="logo">
     <img src="images/logoPurple_noBG.png">
     <h1>Doctor AI</h1>
    </div>
    <div class="userPanel">
      <div class="img-profile">
        <img src="images/profile-pic.jpg" >
      </div> 
      <div class="username-profile">
        <h1> <?php echo $username;?></h1>
      </div>
      <div class="buttons">
        <div class="edit-profile-btn"><button>Edit Profile</button></div>
        <div class="lang-btn"><h4>Language</h4><img src="images/ch-lang.png"></div>
      </div>
      <button onclick="window.location.href = 'signout.php';" class="s-out">Sign Out</button>
    </div>
    <div class="family-tree">
      <h1>Family Tree</h1>
      <h2>This function unavailable!</h2>
    </div>

  </div>
</body>
<script>
  var div = document.getElementById("quesform");
div.style.height = div.scrollHeight + 'px';
function changeBorderColor(input) {
    if (input.value.length > 0) {
        input.classList.add("greenBorder");
    } else {
        input.classList.remove("greenBorder");
    }
}

</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
        window.onload = function() {
          const mainMes=document.getElementById("main-message");
          const resu=document.getElementById("results");
          const buttonMES=document.getElementById("MessagingID");
          const mesIMG=document.getElementById("mesIMG");
          const buttonRes=document.getElementById("DoctorMain");
          const resIMG=document.getElementById("resIMG");
          
          const nameILL=document.getElementById("nameIll");
          const nameRES=document.getElementById("nameRes");
            var currentUrl = window.location.href;
            if (currentUrl.includes('results')){
                  mainMes.style.display="none";
                  resu.style.display="flex";
                  buttonMES.style.backgroundColor="#F5F5F5";
                  mesIMG.src="images/heart-p.png"
                  buttonRes.style.backgroundColor="#4C0ACE";
                  resIMG.src="images/pill2.png";

                  const queryString = window.location.search;
                  const urlParams = new URLSearchParams(queryString);
                  const textt = urlParams.get('results');
                  console.log(textt);
                  const indexOfWhatToDo = textt.indexOf("What to do");
                  const ans1 = textt.slice(0, indexOfWhatToDo).trim();
                  const ans2 = textt.slice(indexOfWhatToDo).trim();
                  nameILL.textContent=ans1;
                  nameRES.textContent=ans2;
                  
                  
            }
        }});
</script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Open+Sans&display=swap');
  body{
        margin:0;
        padding:0;
        display: flex;
        background:#EBEBEB;
        -moz-user-select: none;
        -webkit-user-drag: none;
        overflow-x: none;
        overflow-y:hidden;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    .results .nameILL {
        font-family: Open Sans;
        font-size: 2vw;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        color: #4C0ACE;
    }
    .results .nameRES {
        font-family: Open Sans;
        font-size: 1.5vw;
        font-style: normal;
        font-weight: 600;
        padding:5vw;
        line-height: normal;
        color: #4C0ACE;
    }


    .main-message{
      
        flex:64%;
        margin-left:18%; 
        padding-right:18%;
        justify-content:center;
        align-items:center;
        display: flex;
        flex-direction:column;
        position: relative;
        height: 100vh;
        border-radius: 90px 0px 0px 90px;
        background: #EBEBEB;
        box-shadow: 0px 4px 110.4px 36px rgba(0, 0, 0, 0.25);
        overflow-y: scroll; 
        overflow-x: hidden; /* Yatay kaydırma engellendi */
        
    }
    .results{
        display:none;
        flex:64%;
        margin-left:18%; 
        padding-right:18%;
        justify-content:center;
        align-items:center;
        flex-direction:column;
        position: relative;
        height: 100vh;
        border-radius: 90px 0px 0px 90px;
        background: #EBEBEB;
        box-shadow: 0px 4px 110.4px 36px rgba(0, 0, 0, 0.25);
        overflow-y: scroll; 
        overflow-x: hidden; /* Yatay kaydırma engellendi */
    }
    .panel2
    {
        flex: 18%;
        position:fixed;
        justify-content:center;
        align-items:center;
        display: flex;
        flex-direction: column;
        right:0;
        top:0;  
        width:18%;  
        height: 100%;
        flex-shrink: 0;
        border-left:solid 3px #4C0ACE;

    }
    .panel2 .logo{
      flex:10%;
      border-bottom:solid 3px #4C0ACE;  
      width:100%;
      justify-content:center;
      align-items:center;
      display: flex;
      flex-direction: row;
    }
    .panel2 .logo h1{
        font-family: Open Sans;
        font-size: 2vw;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        color:#4C0ACE;
    }
    .panel2 .userPanel{
      flex:37%;
      justify-content:center;
      align-items:center;
      flex-direction:column;
      display: flex;
    }
    .panel2 .userPanel .img-profile img{
      height :11vh;
      border-radius:100%;
    }
    .panel2 .userPanel .username-profile h1{
        color:#848484;
        font-family: Open Sans;
        font-size: 1.5vw;
        font-style: normal;
        font-weight: 400;
        margin-top:+0.2vw;
        line-height: normal;
        margin-bottom:-1vh;

    }
    .panel2 .family-tree{
      flex:53%;
      border-top:solid 3px #4C0ACE; 
      width:100%
    }

    .panel2 .logo img{  
      width :20%;
      height: auto;
    }
    .panel2 .buttons .edit-profile-btn button{
      border-radius:11px;
      width:130px;
      height:40px;
      font-family: Open Sans;
      font-size:16px;
      font-weight: 450;
      background-color:#4C0ACE;
      color:#EBEBEB;
      border:0;
      transition: all 0.3s ease;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    .panel2 .buttons .edit-profile-btn button:hover{
      transform: scale(1.05);
      background:#3B05A5;
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    .panel2 .buttons .lang-btn{
      justify-content:center;
      border-radius:11px;
      width:140px;
      height:40px;
      background-color:#dbdbdb;
      align-items:center;
      display: flex;
      flex-direction: row;
      margin-left:1vh;
      box-shadow: rgba(50, 50, 50, 0.35) 0px 5px 25px;
      transition: all 0.3s ease;

    }
    .panel2 .buttons .lang-btn:hover{
      transform: scale(1.05);
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    
    .panel2 .buttons .lang-btn img{
     width:15%;
     margin-left:0.5vh;

    }
    .panel2 .buttons .lang-btn h4{
      font-family: Open Sans;
      font-size:16px;
      font-weight: 450;
      color:#4C0ACE;
      transition: all 0.3s ease;
    }
    .panel2 .buttons{
      margin-top:3vh;
      justify-content:center;
      align-items:center;
      display: flex;
      flex-direction: row;
    }
    .s-out{
      margin-top:10px;
      margin-bottom:-10px;
      border-radius:11px;
      width:130px;
      height:40px;
      font-family: Open Sans;
      font-size:16px;
      font-weight: 450;
      background-color:#4C0ACE;
      color:#EBEBEB;
      border:0;
      transition: all 0.3s ease;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    .s-out:hover{
      background:#3B05A5;
      transform: scale(1.05);
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    } 
    .family-tree{
      align-items:center;
      display: flex;
      flex-direction: column;
    }
    .family-tree h1{
      font-family: Open Sans;
      font-size:27px;
      font-weight: 590;
      color:#4C0ACE;
      }
    .family-tree h2{
      font-family: Open Sans;
      font-size:20px;
      font-weight: 400;
      justify-content:center;
      color:#f53d3d;
      margin-top:45%;
    }
    .panel{
        flex: 18%;
        position:fixed;
        justify-content:center;
        align-items:center;
        display: flex;
        flex-direction: column;
        left:0;
        top:0;
        width:18%;
        height: 100%; 
        flex-shrink: 0;
    }
    .panel .Messaging{
      width: 210px;
      height:210px;
      margin-bottom:50px;
      background:#4C0ACE;
      border-radius:45px/40px;
      border:0 ;
      justify-content:center;
      align-items:center;
      display: flex;
      flex-direction: column;
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      transition: all 0.3s ease;
  }
  .panel .Messaging:hover{
    transform: scale(1.05);
    background:#3B05A5;

  }
  .panel .Messaging img{
    width:40%;
  }
    .panel .DoctorMain{
      width: 210px;
      height:210px;
      margin-bottom:50px;
      background:#F5F5F5;
      border-radius:45px/40px;
      border:0;
      justify-content:center;
      align-items:center;
      display: flex;
      flex-direction: column;
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;     
      transition: all 0.3s ease;
  }
  .panel .DoctorMain img{
    width:37%;
  }
  .panel .DoctorMain:hover{
    transform: scale(1.05);
    background:#EAEAEA;
  }
    .panel .Settings{
      width: 210px;
      height:210px;
      margin-bottom:50px;
      background:#F5F5F5;
      border-radius:45px/40px;
      border:0;
      justify-content:center;
      align-items:center;
      display: flex;
      flex-direction: column;
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;         
      transition: all 0.3s ease;
   }
   .panel .Settings img{
      width:37%;
   }
   .panel .Settings:hover{
    transform: scale(1.05);
    background:#EAEAEA;
  }
  .headerM{
    top:0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  } 
  .textAnm{
      font-family: Open Sans;
      font-size: 2.5vw;
      font-style: normal;
      font-weight: 600;
      line-height: normal;
      color:#4C0ACE;
      margin-bottom:-1vw;
  }

  .questionsForm{
    margin-top:138vw;
    height:100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

  }
  .questionsForm .qustion{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  } 
  .questionsForm .qustion h2{
    font-family: Open Sans;
      font-size: 1.2vw;
      font-style: normal;
      font-weight: 600;
      line-height: normal;
      color:#4C0ACE;
      margin-bottom:0.3vw;
  }
  .questionsForm .qustion input{
    font-size:1vw;
    background: rgba(255, 255, 255, 0.00);
    width:25vw;
    height:2.5vw;
    border: 0.2vw solid #464646;
    border-radius:0.8vw;
    transition: border-radius 0.5s ease; 
  }
  .questionsForm .qustion input:focus{
    border-radius:2.1vw;
    
  }
  .greenBorder {
    border-color: green !important;
  }
  .quesButton button{
    width: 15vw;
    height:2.5vw;
    border-radius: 787px;
    border: 0.3vw solid #4C0ACE;
    background: rgba(76, 10, 206, 0.00);
    color: #4C0ACE;
    font-family: Open Sans;
    font-size: 1vw;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin-top:1vw;
    margin-bottom:1vw;
    transition: transform 0.5s
  }
  .quesButton button:hover{
    transform: scale(1.1);
  }
   
  </style>


<script type="importmap"> 
      {
        "imports": {
          "@google/generative-ai": "https://esm.run/@google/generative-ai"
        }
      }
    </script>
    <script type="module">
      import { GoogleGenerativeAI } from "@google/generative-ai";

      const API_KEY = "";
      const genAI = new GoogleGenerativeAI(API_KEY);
      var button = document.getElementById('sButton');
      button.addEventListener('click', run);

      const model = genAI.getGenerativeModel({ model: "gemini-pro"});
      async function run() {

        const q1input=document.getElementById('q1');
        const q2input=document.getElementById('q2');
        const q3input=document.getElementById('q3');
        const q4input=document.getElementById('q4');
        const q5input=document.getElementById('q5');
        const q6input=document.getElementById('q6');
        const q7input=document.getElementById('q7');
        const q8input=document.getElementById('q8');
        const q9input=document.getElementById('q9');
        const q10input=document.getElementById('q10');
        const q11input=document.getElementById('q11');
        const q12input=document.getElementById('q12');
        const q13input=document.getElementById('q13');
        const q14input=document.getElementById('q14');
        const q15input=document.getElementById('q15');
        const q16input=document.getElementById('q16');
        const q17input=document.getElementById('q17');
        const q18input=document.getElementById('q18');
        const q19input=document.getElementById('q19');
        const q20input=document.getElementById('q20');
        const q21input=document.getElementById('q21');
        const q22input=document.getElementById('q22');
        const q23input=document.getElementById('q23');
        const q24input=document.getElementById('q24');
        const q25input=document.getElementById('q25');
        const q26input=document.getElementById('q26');
        const q27input=document.getElementById('q27');
        const q28input=document.getElementById('q28');
        const q29input=document.getElementById('q29');
        const q30input=document.getElementById('q30');
        const qOtinput=document.getElementById('qOt');

        const prompt = "You are a doctor and you write down the name of the possible disease, you ask the patient 30 questions and they answer you, remember, you are a very good doctor and you find the answer instantly, just tell me the names of the diseases.After finding the disease, write the risk for life next to it.Name 2 possible diseases.do not forget to put a number between diseases.Consider all issues when giving answers Example: Kidney Cancer-High , flu-low .write answers only as 'name 1 - severity level(low,medium,high) Don't use symbols .Question 1: What is the current problem in brief?Then tell the patient what to do.For this, write 'What to do:' and write 3-4 sentences about what to do, the information should be accurate . Do not use any other characters eg '* ; -'. Answer 1: " + q1input.value + 
    "  Question 2. When did you first notice this problem? Answer 2: " + q2input.value + 
    " Question 3. Has it gotten better, worse, or stayed the same? Answer 3: " + q3input.value +
    " Question 4. Can you describe the symptoms in more detail (pain, location, duration, severity)? Answer 4: " + q4input.value +
    " Question 5. Are there any specific things that make the symptoms better or worse? Answer 5: " + q5input.value +
    " Question 6. Do you have any chronic medical conditions (e.g., diabetes, high blood pressure)? Answer 6: " + q6input.value +
    " Question 7. Have you ever been hospitalized? If so, why? Answer 7: " + q7input.value +
    " Question 8. Have you had any surgeries? If so, what kind? Answer 8: " + q8input.value +
    " Question 9. Do you have any allergies (medications, food)? Answer 9: " + q9input.value +
    " Question 10. What medications are you currently taking (prescription and over-the-counter)? Answer 10: " + q10input.value +
    " Question 11. Does anyone in your family have any chronic medical conditions? Answer 11: " + q11input.value +
    " Question 12. Has anyone in your family had a similar illness to yours? Answer 12: " + q12input.value +
    " Question 13. Do you smoke? If so, how much and for how long? Answer 13: " + q13input.value +
    " Question 14. Do you drink alcohol? If so, how much and how often? Answer 14: " + q14input.value +
    " Question 15. Do you use any recreational drugs? Answer 15: " + q15input.value +
    " Question 16. What is your occupation? Answer 16: " + q16input.value +
    " Question 17. Do you experience a lot of stress in your life? Answer 17: " + q17input.value +
    " Question 18. Do you have any fever, chills, or night sweats? Answer 18: " + q18input.value +
    " Question 19. Have you experienced any weight loss or gain recently? Answer 19: " + q19input.value +
    " Question 20. Are you tired all the time? Answer 20: " + q20input.value +
    " Question 21. Do you have any rashes, itching, or changes in your skin? Answer 21: " + q21input.value +
    " Question 22. Do you have any headaches, dizziness, or trouble sleeping? Answer 22: " + q22input.value +
    " Question 23. Do you have any problems with your vision, such as blurry vision or pain? Answer 23: " + q23input.value +
    " Question 24. Do you have any earaches, ringing in your ears, or difficulty hearing? Answer 24: " + q24input.value +
    " Question 25. Do you have a sore throat, runny nose, or difficulty breathing? Answer 25: " + q25input.value +
    " Question 26. Do you have any cough, shortness of breath, or chest pain? Answer 26: " + q26input.value +
    " Question 27. Do you have any chest pain, palpitations, or swelling in your legs? Answer 27: " + q27input.value +
    " Question 28. Do you have any nausea, vomiting, diarrhea, or constipation? Answer 28: " + q28input.value +
    " Question 29. Do you have any pain or burning when you urinate, or any changes in your urinary frequency? Answer 29: " + q29input.value +
    " Question 30. Do you ha ve any numbness, tingling, weakness, or problems with coordination? Answer 30: " + q30input.value+
    " Note:Is there anything else you would like to mention? Answer Note: " + qOtinput.value;
        const result = await model.generateContent(prompt);
        const response = await result.response;
        var text = response.text();
        console.log(qOtinput.value);
        
        window.location.href = 'index.php?results='+text;

    }

        
    </script> 
</html> 