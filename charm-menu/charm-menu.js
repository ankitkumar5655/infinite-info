//Global Usage starts
/*Full Forms of Abbreviations used in this Page :-
1. mod = Modal
2. lang = Language
3. util = Utility
4. conty = Country
5. btn = Button
6. cls = Close*/

let charmTrigger = document.getElementById("charm-trigger");
let outlinedBox = document.querySelector(".outlined-box");
let charmModalOverlay = document.querySelectorAll(".charm-mod-overlay");


//Function is created to show the Charm Menu
function show_charm_menu(){
    outlinedBox.classList.add("active-outlined-box");
}

//Function is created to hide the Charm Menu
function hide_charm_menu(){
    outlinedBox.classList.remove("active-outlined-box");
}

//Function is created to close the Active Language Modal
function lang_mod_close(){
    langContainer.classList.remove("show-lang-cont");
}

//Function is created to close the Active Utility Modal
function util_mod_close(){
    utilModOverlay.classList.remove("charm-overlay-active"); 
}

//Function is created to close the Active Country Modal
function conty_mod_close(){
    countryModOverlay.classList.remove("charm-overlay-active");
    countryModal.classList.remove("charm-mod-active");
}




//Global Usage ends

/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/


//Code for Language Charm Menu

let langContainer = document.querySelector(".lang-container");
let langModalBtn = document.getElementById("lang-mod-btn");
let langOptions = document.querySelectorAll(".lang-options");


// Target IDs for individual language translations
let virtualMenu = document.getElementById("virtual-menu");
let langMenu = document.getElementById("lang-menu");
let utilMenu = document.getElementById("util-menu");
let countMenu = document.getElementById("count-menu");
let feedMenu = document.getElementById("feed-menu");
let miscMenu = document.getElementById("misc-menu");


//Menu Array
const menuArr = [virtualMenu, langMenu, utilMenu, countMenu, feedMenu, miscMenu];

//Translations Array
//1. Array for English language
//2. Array for French language
//3. Array for German language
//4. Array for Hindi language
//5. Array for Japanese language
//6. Array for Tamil language
const transArr = [
    ["Virtual Assistant", "Language", "Utilities", "Country", "Feedback", "Miscellaneous"],

    ["Assistant virtuel", "la langue", "la viabilité", "les pays", "la réaction", "varié"],

    ["Virtueller Assistent", "Sprache", "Versorgung sunternehmen", "Land", "Rückkoppelung", "Vermischtes"],

    ["आपकी सहायक", "भाषा", "उपयोगिताएं", "देश", "प्रतिक्रिया", "विविध"],

    ["仮想アシスタント", "言語", "ユーティリティー", "国", "フィードバック",
        "雑"],

    ["மெய்நிகர் உதவியாளர்", "மொழி", "பயன்பாடுகள்", "நாடு",
        "பின்னூட்டம்", "பல்வகை"]
];


//Click Event fired to translate the text of the Charm Menu
langModalBtn.onclick = function open_lang_opt(){
    langContainer.classList.toggle("show-lang-cont");
    conty_mod_close();
    util_mod_close();
}


// i : Run the loop & To cycle through each language option
for (let i = 0; i <= langOptions.length - 1; i++) {
    langOptions[i].onclick = function cls_lang_opt() {
        lang_mod_close();

        //if condition to check the type of language get selected
        if (langOptions[i] == langOptions[0]) {
            for (let m = 0; m < 6; m++) {
                for (let t = 0; t < transArr.length; t++) {
                    menuArr[m].textContent = transArr[i][m];
                }
            }

        }

        //if condition to check the type of language get selected
        else if (langOptions[i] == langOptions[1]) {
            for (let m = 0; m < 6; m++) {
                for (let t = 0; t < transArr.length; t++) {
                    menuArr[m].textContent = transArr[i][m];
                }
            }
        }

        //if condition to check the type of language get selected
        else if (langOptions[i] == langOptions[2]) {

            for (let m = 0; m < 6; m++) {
                for (let t = 0; t < transArr.length; t++) {
                    menuArr[m].textContent = transArr[i][m];
                }
            }
        }

        //if condition to check the type of language get selected
        else if (langOptions[i] == langOptions[3]) {

            for (let m = 0; m < 6; m++) {
                for (let t = 0; t < transArr.length; t++) {
                    menuArr[m].textContent = transArr[i][m];
                }
            }
        }

        //if condition to check the type of language get selected
        else if (langOptions[i] == langOptions[4]) {

            for (let m = 0; m < 6; m++) {
                for (let t = 0; t < transArr.length; t++) {
                    menuArr[m].textContent = transArr[i][m];
                }
            }
        }

        //if condition to check the type of language get selected
        else if (langOptions[i] == langOptions[5]) {

            for (let m = 0; m < 6; m++) {
                for (let t = 0; t < transArr.length; t++) {
                    menuArr[m].textContent = transArr[i][m];
                }
            }
        }

    }

}


//Code for Utility Charm menu

let utilModalBtn = document.getElementById("utility-mod-btn");
let utilModal = document.getElementById("util-mod");
let utilclsBtn = document.getElementById("util-mod-cls-btn");
let utilLink = document.querySelectorAll(".util-link");
let utilModOverlay = document.getElementById("util-mod-overlay");


utilModalBtn.addEventListener("click", function open_util_mod(){
    utilModOverlay.classList.add("charm-overlay-active");
    lang_mod_close();
    hide_charm_menu();
});

utilclsBtn.addEventListener("click", function close_util_mod(){
     util_mod_close();
     show_charm_menu();
});


utilLink.forEach(function(target){
        target.onclick = function()
        {
           util_mod_close();
           show_charm_menu();
        }
});


//Code for Country Charm Menu

let countryModalBtn = document.getElementById("country-mod-btn");
let countryModOverlay = document.getElementById("country-mod-overlay");
let countryModal = document.getElementById("country-mod");
let countclsBtn = document.getElementById("count-mod-cls-btn");
let flagContainer = document.querySelectorAll(".flag-container");

charmTrigger.addEventListener("click",function(){  
    outlinedBox.classList.toggle("active-outlined-box");
});

countryModalBtn.addEventListener("click", function open_count_mod(){
    countryModOverlay.classList.add("charm-overlay-active");
    countryModal.classList.add("charm-mod-active");
    lang_mod_close();
    hide_charm_menu();
});

countclsBtn.addEventListener("click", function close_count_mod(){
    conty_mod_close();
    show_charm_menu();
});

flagContainer.forEach(function(target){
    target.onclick = function()
    {
       conty_mod_close();   
       show_charm_menu();
    }
});






    
 