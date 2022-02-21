

require('./bootstrap');
// @fontawsome
require('@fortawesome/fontawesome-free/js/all.min.js');
//Typed import typed.js
import Typed from 'typed.js';

var options = {
    strings: ["","Earn R$ with ease!","Win giveaways!","Redeem promocodes!","Finish quests!","Refer friends!", "Get rewards!",],
    typeSpeed:80,
    backSpeed:20,
    backDelay:2000,
    startDelay:0,
    loop:true,
    smartBackspace:true,
};

var typed = new Typed('#earning-method', options);

$(".loginBtn").on("click", function() {
    $("#auth-roblox-username-modal").modal("show");
});
