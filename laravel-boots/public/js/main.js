import { money, months } from './data.js'

//Money
var moneyRange = document.getElementById("inputMoney"),
    moneyValue = document.getElementById("outputMoney");

moneyRange.oninput = function() {
    moneyValue.innerText = money[this.value];
};
moneyRange.oninput();

document.addEventListener("DOMContentLoaded", () => {
    moneyRange.value = '100';
    moneyValue.textContent = "1,000,000";
    var color = `linear-gradient(90deg, rgb(206,86,3) 100%, rgb(23, 190, 187) 100%)`;
    moneyRange.style.background = color;


});


moneyRange.addEventListener("mousemove", () => {

    var x = moneyRange.value;
    var color = `linear-gradient(90deg, rgb(206,86,3) ${x}%, rgb(23, 190, 187) ${x}%)`;
    moneyRange.style.background = color;
    var moneyLoan = parseInt(moneyValue.firstChild.textContent.replace(/,/g, ''));
    changeMonth(moneyLoan);
    setTotal()

});


//Mounth
var monthRange = document.getElementById("inputMonths"),
    monthValue = document.getElementById("outputMonths");

monthRange.oninput = function() {
    monthValue.innerText = months[this.value]

};
monthRange.oninput();
document.addEventListener("DOMContentLoaded", () => {
    monthRange.value = '24';
    monthValue.textContent = "24";
    var color = `linear-gradient(90deg, rgb(206,86,3) 100%, rgb(23, 190, 187) 100%)`;
    monthRange.style.background = color;
    setTotal();



})
monthRange.addEventListener("mousemove", () => {

    var moneyLoan = parseInt(moneyValue.firstChild.textContent.replace(/,/g, ''));
    changeMonth(moneyLoan);

});

//frencuency
var frecuencyRange = document.getElementById("inputFrecuency");

document.addEventListener("DOMContentLoaded", () => {
    frecuencyRange.value = '1';
    var color = `linear-gradient(90deg, rgb(206,86,3) 100%, rgb(23, 190, 187) 100%)`;
    frecuencyRange.style.background = color;
    setTotal();
});

frecuencyRange.addEventListener("mousemove", () => {

    var x = frecuencyRange.value;
    if (x == 1) {
        var color = 'linear-gradient(90deg, rgb(206,86,3) 100%, rgb(23, 190, 187) 100%)';
    } else {
        var color = 'linear-gradient(90deg, rgb(206,86,3) 1%, rgb(23, 190, 187) 1%)';
    }
    frecuencyRange.style.background = color;
    setTotal();
});



//Loan functions


function changeMonth(money) {

    let minMonth = document.getElementById('minMonth').firstChild;

    if (money <= 400000) {
        months[3] = "3";
        monthRange.min = 3;
        minMonth.textContent = '3 meses'
        var x = monthRange.value;
        if (x == 3) {
            var color = 'linear-gradient(90deg, rgb(206,86,3) 1%, rgb(23, 190, 187) 1%)';

        }
        if (x == 6) {
            var color = 'linear-gradient(90deg, rgb(206,86,3) 17%, rgb(23, 190, 187) 17%)';

        }
        if (x == 9) {
            var color = 'linear-gradient(90deg, rgb(206,86,3) 33%, rgb(23, 190, 187) 33%)';

        }
        if (x == 12) {
            var color = 'linear-gradient(90deg, rgb(206,86,3) 49%, rgb(23, 190, 187) 49%)';

        }
        if (x == 15) {
            var color = 'linear-gradient(90deg, rgb(206,86,3) 66%, rgb(23, 190, 187) 66%)';

        }
        if (x == 18) {
            var color = 'linear-gradient(90deg, rgb(206,86,3) 82%, rgb(23, 190, 187) 82%)';

        }
        if (x == 21) {
            var color = 'linear-gradient(90deg, rgb(206,86,3) 100%, rgb(23, 190, 187) 100%)';

        }
        monthRange.style.background = color;
    } else {
        months[3] = "6";
        monthRange.min = 6;
        minMonth.textContent = '6 meses'
        var x = monthRange.value;

        if (x == 6) {
            var color = 'linear-gradient(90deg, rgb(206,86,3) 1%, rgb(23, 190, 187) 1%)';

        }
        if (x == 9) {
            var color = 'linear-gradient(90deg, rgb(206,86,3) 20%, rgb(23, 190, 187) 20%)';

        }
        if (x == 12) {
            var color = 'linear-gradient(90deg, rgb(206,86,3) 39%, rgb(23, 190, 187) 39%)';

        }
        if (x == 15) {
            var color = 'linear-gradient(90deg, rgb(206,86,3) 59%, rgb(23, 190, 187) 59%)';

        }
        if (x == 18) {
            var color = 'linear-gradient(90deg, rgb(206,86,3) 79%, rgb(23, 190, 187) 79%)';

        }
        if (x == 21) {
            var color = 'linear-gradient(90deg, rgb(206,86,3) 100%, rgb(23, 190, 187) 100%)';

        }
        monthRange.style.background = color;
    }
    setTotal();

}

function setTotal() {
    var totalToPay = 0;
    var toPay = document.getElementById('toPay');
    var money = document.getElementById('outputMoney').textContent;
    //toPay.innerText = money;
    var moneyLoan = parseInt(moneyValue.firstChild.textContent.replace(/,/g, ''));
    var monthLoan = parseInt(monthValue.firstChild.textContent);
    var frencuencyLoan = document.getElementById('inputFrecuency').value
    console.log(moneyLoan);
    console.log(typeof(monthLoan));
    console.log((frencuencyLoan));

    switch (monthLoan) {

        case 3:
            if (frencuencyLoan == "0") {
                console.log("Entera quincenal 3 meses");
                totalToPay = ((moneyLoan * (44 / 100) + (moneyLoan)) / 6);
                console.log(totalToPay);
                toPay.innerText = totalToPay;
            } else {
                totalToPay = ((moneyLoan * (44 / 100) + (moneyLoan)) / 3);
                console.log('entra mensual 3 meses')
                toPay.innerText = totalToPay;
            }
            break;

        case 6:
            if (frencuencyLoan == "0") {
                console.log("Entera quincenal");
                totalToPay = ((moneyLoan * (44 / 100) + (moneyLoan)) / 12);
                console.log(totalToPay);
                toPay.innerText = totalToPay;
            } else {
                totalToPay = ((moneyLoan * (44 / 100) + (moneyLoan)) / 6);
                console.log('entra mensual 6 meses')
                toPay.innerText = totalToPay;
            }
            break;
        case 9:
            if (frencuencyLoan == "0") {
                console.log("Entera quincenal 9 meses");
                totalToPay = ((moneyLoan * (44 / 100) + (moneyLoan)) / 18);
                console.log(totalToPay);
                toPay.innerText = totalToPay;
            } else {
                totalToPay = ((moneyLoan * (44 / 100) + (moneyLoan)) / 9);
                console.log('entra mensual 9 meses')
                toPay.innerText = totalToPay;
            }
            break;
        case 12:
            if (frencuencyLoan == "0") {
                console.log("Entera quincenal 12 meses");
                totalToPay = ((moneyLoan * (44 / 100) + (moneyLoan)) / 24);
                console.log(totalToPay);
                toPay.innerText = totalToPay;
            } else {
                totalToPay = ((moneyLoan * (44 / 100) + (moneyLoan)) / 12);
                console.log('entra mensual 12 meses');
                toPay.innerText = totalToPay;
            }
            break;
        case 15:
            if (frencuencyLoan == "0") {
                console.log("Entera quincenal 15 meses");
                totalToPay = ((moneyLoan * (44 / 100) + (moneyLoan)) / 30);
                console.log(totalToPay);
                toPay.innerText = totalToPay;
            } else {
                totalToPay = ((moneyLoan * (44 / 100) + (moneyLoan)) / 15);
                console.log('entra mensual 15 meses');
                toPay.innerText = totalToPay;
            }
            break;
        case 18:
            if (frencuencyLoan == "0") {
                console.log("Entera quincenal 18 meses");
                totalToPay = ((moneyLoan * (44 / 100) + (moneyLoan)) / 36);
                console.log(totalToPay);
                toPay.innerText = totalToPay;
            } else {
                totalToPay = ((moneyLoan * (44 / 100) + (moneyLoan)) / 18);
                console.log('entra mensual 18 meses');
                toPay.innerText = totalToPay;
            }
            break;
        case 24:
            if (frencuencyLoan == "0") {
                console.log("Entera quincenal 24 meses");
                totalToPay = ((moneyLoan * (44 / 100) + (moneyLoan)) / 48);
                console.log(totalToPay);
                toPay.innerText = totalToPay;
            } else {
                totalToPay = ((moneyLoan * (44 / 100) + (moneyLoan)) / 24);
                console.log("Entera mensual 24 meses");
                toPay.innerText = totalToPay;
            }
            break;

        default:
            console.log("No case");
            break;
    }

}