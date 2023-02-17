let num1 = 0;
let num2 = 0;
let op;
let work;
let arr = [];
let counter = 0;
let text;



for(let t = 1;t>0;t++){
    work = confirm("continue or break");

    if(work === true){
        num1 = Number(prompt("Enter__first__nubber"));
        op = String(prompt("Enter__operation"));
        num2 = Number(prompt("Enter__second__nubber"));
        if(op == "+"){
            ansver = num1 + num2;
        }
        else if(op == "-"){
            ansver = num1 - num2;
        }
        else if(op == "*"){
            ansver = num1 * num2;
        }
        else if(op == "/"){
            ansver = num1 / num2;
        }
        // text = num1 + op
        arr.push(num1 + op + num2 + "=" + ansver.toString());

        alert(ansver);
        counter++;
    }
    else if (work === false){
        for(let i = 0;i < counter;i++){
            alert(arr[i]);
        }
        arr.length = 0;
        break;
    }
    


   

   

}





