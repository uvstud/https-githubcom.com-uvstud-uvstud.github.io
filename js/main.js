function showMsg(msgText) {
    console.log(msgText);
}


function getSum(number1, number2) {
    var result=0;
    result=number1+number2;
    console.log(result);
}


 function isEmpty(field) {
     errorResult = field.match(/[a-z]{4}/);
     if(errorResult == null){
         console.log("OK");
         $(".error").fadeIn();
         $(".oki").fadeOut();

     }
     else{
         console.log("NOPPP");
         $(".error").fadeOut();
         $(".oki").fadeIn();
     };
 }