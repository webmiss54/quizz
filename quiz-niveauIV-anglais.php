<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="script/quiz.css">
    <title>Niveau IV - Test d'Anglais</title>
</head>

<body>
<p class="home-quiz">
    Test d'anglais (Durée : 30min)
    <br />
    Bonjour, merci d'apporter toute votre attention au test qui va suivre.
    <br />
    Les résultats vous seront communiqués lors de votre entretien d'admission. En cliquant sur Suivant, le test va débuter.
    <br />
    Faites de votre mieux, et bonne chance !
    <br />
    Merci de noter vos nom, prénom, adresse mail et la formation à laquelle vous postulez :
</p>
    <form action="" method="post">
        <fielset class="coordonnees">
            <p>
                <label for="nom">Nom :</label><br />
                <input type="text" name="nom" id="nom">
                <label for="prenom">Prénom :</label><br />
                <input type="text" name="prenom" id="prenom">
                <label for="mail">Adresse mail</label><br />
                <input type="email" name="mail" id="mail">
                <label for="formation">Formation candidatée</label><br />
                <select name="formation">
                    <option value="niveau-iv">Niveau IV</option>
                    <option value="bts">BTS</option>
                    <option value="bac-5">BAC +5</option>
                </select>
                SUIVANT
            </p>
        </fielset>
        <fieldset class="section_1">
            <legend>Section 1 : Everyday questions and situations. Identify the correct response in each situation.</legend>
            <p>
                <label for="id_q1">Question 1 sur 20</label><br />
                <label for="q1">How many times have you been to the U.S.A. ?</label><br />
                <input type="radio" name="q1" value="q1" id="q1">
                <label for="q1">Three weeks</label><br />
                <input type="radio" name="q1" value="q1" id="q1">
                <label for="q1">For short time</label><br />
                <input type="radio" name="q1" value="q1" id="q1">
                <label for="q1">Not long</label><br />
                <input type="radio" name="q1" value="q1" id="q1">
                <label for="q1">Only once</label><br />
            </p>
            <p>
                <label for="id_q2">Question 2 sur 20</label><br />
                <label for="q2">Do I have to show my passport at the German border ?</label><br />
                <input type="radio" name="q2" value="q2" id="q2">
                <label for="q2">No, you mustn't</label><br />
                <input type="radio" name="q2" value="q2" id="q2">
                <label for="q2">No, you haven't</label><br />
                <input type="radio" name="q2" value="q2" id="q2">
                <label for="q2">No, is no need</label><br />
                <input type="radio" name="q2" value="q2" id="q2">
                <label for="q2">No, you don't have to</label><br />
            </p>
            <p>
                <label for="id_q3">Question 3 sur 20</label><br />
                <label for="q3">Good night. I'm going...</label><br />
                <input type="radio" name="q3" value="q3" id="q3">
                <label for="q3">home</label><br />
                <input type="radio" name="q3" value="q3" id="q3">
                <label for="q3">at home</label><br />
                <input type="radio" name="q3" value="q3" id="q3">
                <label for="q3">to home</label><br />
                <input type="radio" name="q3" value="q3" id="q3">
                <label for="q3">to my home</label><br />
            </p>
            <p>
                <label for="id_q4">Question 4 sur 20</label><br />
                <label for="q4">Whose phone is this ?</label><br />
                <input type="radio" name="q4" value="q4" id="q4">
                <label for="q4">It's on the desk</label><br />
                <input type="radio" name="q4" value="q4" id="q4">
                <label for="q4">It's mine</label><br />
                <input type="radio" name="q4" value="q4" id="q4">
                <label for="q4">It's my pen</label><br />
                <input type="radio" name="q4" value="q4" id="q4">
                <label for="q4">It's to me</label><br />
            </p>
            <p>
                <label for="id_q5">Question 5 sur 20</label><br />
                <label for="q5">He would not do that, ...:</label><br />
                <input type="radio" name="q5" value="q5" id="q5">
                <label for="q5">Would he ?</label><br />
                <input type="radio" name="q5" value="q5" id="q5">
                <label for="q5">Would it ?</label><br />
                <input type="radio" name="q5" value="q5" id="q5">
                <label for="q5">Wouldn't he ?</label><br />
                <input type="radio" name="q5" value="q5" id="q5">
                <label for="q5">Would he not ?</label><br />
            </p>
            </fieldset>
            <fieldset class="section_2">
                <legend>Section 2 : Grammar questions. Complete each sentence with one of the four words or phrases suggested.</legend>
            <p>
                <label for="id_q6">Question 6 sur 20</label><br />
                <label for="q6">Where have they been ? I've been waiting ... an hour.</label><br />
                <input type="radio" name="q6" value="q6" id="q6">
                <label for="q6">since</label><br />
                <input type="radio" name="q6" value="q6" id="q6">
                <label for="q6">for</label><br />
                <input type="radio" name="q6" value="q6" id="q6">
                <label for="q6">more</label><br />
                <input type="radio" name="q6" value="q6" id="q6">
                <label for="q6">you</label><br />
            </p>
            <p>
                <label for="id_q7">Question 7 sur 20</label><br />
                <label for="q7">"I don't like American food." "No, ..."</label><br />
                <input type="radio" name="q7" value="q7" id="q7">
                <label for="q7">not me</label><br />
                <input type="radio" name="q7" value="q7" id="q7">
                <label for="q7">I don't</label><br />
                <input type="radio" name="q7" value="q7" id="q7">
                <label for="q7">neither do I</label><br />
                <input type="radio" name="q7" value="q7" id="q7">
                <label for="q7">either me</label><br />
            </p>
            <p>
                <label for="id_q8">Question 8 sur 20</label><br />
                <label for="q8">Ask ... back tomorrow</label><br />
                <input type="radio" name="q8" value="q8" id="q8">
                <label for="q8">him calling</label><br />
                <input type="radio" name="q8" value="q8" id="q8">
                <label for="q8">him call</label><br />
                <input type="radio" name="q8" value="q8" id="q8">
                <label for="q8">to call</label><br />
                <input type="radio" name="q8" value="q8" id="q8">
                <label for="q8">him to call</label><br />
            </p>
            <p>
                <label for="id_q9">Question 9 sur 20</label><br />
                <label for="q9">Tell her I found the book...</label><br />
                <input type="radio" name="q9" value="q9" id="q9">
                <label for="q9">I look for</label><br />
                <input type="radio" name="q9" value="q9" id="q9">
                <label for="q9">I looking for</label><br />
                <input type="radio" name="q9" value="q9" id="q9">
                <label for="q9">I've looked for</label><br />
                <input type="radio" name="q9" value="q9" id="q9">
                <label for="q9">I've been looking for</label><br />
            </p>
            <p>
                <label for="id_q10">Question 10 sur 20</label><br />
                <label for="q10">They could not help...</label><br />
                <input type="radio" name="q10" value="q10" id="q10">
                <label for="q10">to cry</label><br />
                <input type="radio" name="q10" value="q10" id="q10">
                <label for="q10">crying</label><br />
                <input type="radio" name="q10" value="q10" id="q10">
                <label for="q10">cried</label><br />
                <input type="radio" name="q10" value="q10" id="q10">
                <label for="q10">cry</label><br />
            </p>
            </fieldset>
            <fieldset class="section_3">
                <legend>Section 3 : Vocabulary. Que diriez-vous (en anglais) à quelqu'un qui... :</legend>
            <p>
                <label for="id_q11">Question 11 sur 20</label><br />
                <label for="q11">...entre dans votre entreprise ?</label><br />
                <input type="radio" name="q11" value="q11" id="q11">
                <label for="q11">Hi, how are you ?</label><br />
                <input type="radio" name="q11" value="q11" id="q11">
                <label for="q11">Welcome, may I help you ?</label><br />
                <input type="radio" name="q11" value="q11" id="q11">
                <label for="q11">Hello, can I help you ?</label><br />
            </p>
            <p>
                <label for="id_q12">Question 12 sur 20</label><br />
                <label for="q12">... vous dit merci, vous répondez ?</label><br />
                <input type="radio" name="q12" value="q12" id="q12">
                <label for="q12">Thank you</label><br />
                <input type="radio" name="q12" value="q12" id="q12">
                <label for="q12">It's nothing</label><br />
                <input type="radio" name="q12" value="q12" id="q12">
                <label for="q12">You're welcome</label><br />
            </p>
            <p>
                <label for="id_q13">Question 13 sur 20</label><br />
                <label for="q13">... vous demande s'il peut fumer dans l'enceinte de votre entreprise ?</label><br />
                <input type="radio" name="q13" value="q13" id="q13">
                <label for="q13">I'm sorry but it's forbidden</label><br />
                <input type="radio" name="q13" value="q13" id="q13">
                <label for="q13">No way, sorry</label><br />
                <input type="radio" name="q13" value="q13" id="q13">
                <label for="q13">Sorry, it's not possible</label><br />
            </p>
            <p>
                <label for="id_q14">Question 14 sur 20</label><br />
                <label for="q14">Quelle est la bonne traduction ? "Pourriez-vous m'épeler votre nom je vous prie ?"</label><br />
                <input type="radio" name="q14" value="q14" id="q14">
                <label for="q14">Can you tell me your name please ?</label><br />
                <input type="radio" name="q14" value="q14" id="q14">
                <label for="q14">Could you tell me your name ?</label><br />
                <input type="radio" name="q14" value="q14" id="q14">
                <label for="q14">Could you spell your name please ?</label><br />
            </p>
            <p>
                <label for="id_q15">Question 15 sur 20</label><br />
                <label for="q15">Quelle est la bonne traduction ? "Avez-vous besoin que j'appelle un taxi ?"</label><br />
                <input type="radio" name="q15" value="q15" id="q15">
                <label for="q15">Do you need me I call you a cab ?</label><br />
                <input type="radio" name="q15" value="q15" id="q15">
                <label for="q15">Do you need I call you a cab ?</label><br />
                <input type="radio" name="q15" value="q15" id="q15">
                <label for="q15">Do you need me to call a cab ?</label><br />
            </p>
            <p>
                <label for="id_q16">Question 16 sur 20</label><br />
                <label for="q16">Quelle est la bonne traduction ? "Veuillez ne pas quitter, je recherche votre correspondant."</label><br />
                <input type="radio" name="q16" value="q16" id="q16">
                <label for="q16">Please hold on, I'm looking for your correspondant</label><br />
                <input type="radio" name="q16" value="q16" id="q16">
                <label for="q16">Please hold on the line, I seek your correspondant</label><br />
                <input type="radio" name="q16" value="q16" id="q16">
                <label for="q16">Please wait, I search your correspondant</label><br />
            </p>
            <p>
                <label for="id_q17">Question 17 sur 20</label><br />
                <label for="q17">Quelle est la bonne traduction ? "De quelle société faites-vous partie ?"</label><br />
                <input type="radio" name="q17" value="q17" id="q17">
                <label for="q17">What is your company ?</label><br />
                <input type="radio" name="q17" value="q17" id="q17">
                <label for="q17">What company are you a member of ?</label><br />
                <input type="radio" name="q17" value="q17" id="q17">
                <label for="q17">From which company are you a part of ?</label><br />
            </p>
            <p>
                <label for="id_q18">Question 18 sur 20</label><br />
                <label for="q18">Quelle est la bonne traduction ? "Je suis désolé(e), mais le directeur est actuellement en réunion. Puis-je prendre un message ?"</label><br />
                <input type="radio" name="q18" value="q18" id="q18">
                <label for="q18">I'm sorry but the director is actually in a meeting. Can I take a message ?</label><br />
                <input type="radio" name="q18" value="q18" id="q18">
                <label for="q18">I'm sorry, the manager is currently in a meeting. May I take a message ?</label><br />
                <input type="radio" name="q18" value="q18" id="q18">
                <label for="q18">I'm sorry, the director is actually in a meeting. May I take a message ?</label><br />
            </p>
            <p>
                <label for="id_q19">Question 19 sur 20</label><br />
                <label for="q19">Quelle est la bonne traduction ? "Merci de votre visite et à très bientôt."</label><br />
                <input type="radio" name="q19" value="q19" id="q19">
                <label for="q19">Thank you for your visit and see you soon.</label><br />
                <input type="radio" name="q19" value="q19" id="q19">
                <label for="q19">Thank you for coming and at very soon.</label><br />
                <input type="radio" name="q19" value="q19" id="q19">
                <label for="q19">Thank you for visiting us and at very soon.</label><br />
            </p>
            <p>
                <label for="id_q20">Question 20 sur 20</label><br />
                <label for="q20">Quelle est la bonne traduction ? "Je vous souhaite une excellente journée."</label><br />
                <input type="radio" name="q20" value="q20" id="q20">
                <label for="q20">I wish you a good journey.</label><br />
                <input type="radio" name="q20" value="q20" id="q20">
                <label for="q20">I wish you a very nice journey.</label><br />
                <input type="radio" name="q20" value="q20" id="q20">
                <label for="q20">Have a nice day.</label><br />
            </p>
            </fieldset>
        <div class="validation">
            <input type="submit" value="Envoyer">
        </div>
    </form>
</body>

</html>