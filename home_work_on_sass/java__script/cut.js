let users = ['Isabella', 'Lucas', 'Sophia', 'Noah', 'Ava', 'Ethan', 'Emma', 'Liam', 'Olivia', 'Mason'];
let names = ['Ethan', 'Lucas', 'Charlotte', 'Logan', 'Mia', 'Emma', 'Amelia', 'Jackson', 'Harper', 'Olivia'];
let students = ['Ava', 'Mia', 'Jax', 'Zoe'];

function cut__array(){
    let name__array = prompt("Choose an array from {users, names, students}");
    let until = Number(prompt("Enter__number__cut__until__the__array"));

    let cutted__arr;
    let ansver__arr;
    switch(name__array){
        case "users":
            cutted__arr = users;
            break;
        case "names":
            cutted__arr = names;
            break;
        case "students":
            cutted__arr = students;
            break;
        default:
            alert("Wrong input");
    }
    // ansver__arr = cutted__arr.slice(0, until);
    // for(let i = 0;i < ansver__arr.length;i++){
    //     alert(ansver__arr[i]);
    // }

    if(isNaN(until) || until < 0 || until > cutted__arr.length) {
        alert("Invalid input");
    } else {
        let ansver__arr = cutted__arr.slice(0, until);
        alert(ansver__arr.join(', '));
    }
}
cut__array();