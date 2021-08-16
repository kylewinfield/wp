function incrementQuantity(item) {

    var inputValue = document.getElementById(item).value;

    if (inputValue < 100) {
        inputValue = isNaN(inputValue) ? 0 : inputValue;
        inputValue++;
        document.getElementById(item).value = inputValue;
    }
}

function decrementQuantity(item) {

    var inputValue = document.getElementById(item).value;

    if (inputValue > 1) {
        inputValue = isNaN(inputValue) ? 0 : inputValue;
        inputValue--;
        document.getElementById(item).value = inputValue;
    }
    else if (inputValue = 1) {
        document.getElementById(item).value = '';
    }
}

function inputRangeCheck(item, price) {

    var inputValue = document.getElementById(item).value;

    inputValue = isNaN(inputValue) ? 0 : inputValue;

    if (inputValue > 100) {
        inputValue = 100;
    }
    else if (inputValue < 1) {
        inputValue = '';
    }
    document.getElementById(item).value = inputValue;


    var vari = variantCheck(item);

    var subtotal = calcSubTotal(item, price, vari);

    document.getElementById("subtotal").innerHTML = subtotal;
    
}

function variantCheck(item) {

    if (item == 'comb') {
        if (document.getElementById(id = 'allpurpose').checked) {
            vari = "allpurpose";
        }
        else if (document.getElementById(id = 'finetooth').checked) {
            vari = "finetooth";
        }
        else if (document.getElementById(id = 'widetooth').checked) {
            vari = "widetooth";
        }
    }
    else if(item =='trimmer'){
        if (document.getElementById(id = 'multigroom').checked) {
            vari = "multigroom";
        }
        else if (document.getElementById(id = 'stuble').checked) {
            vari = "stuble";
        }
        else if (document.getElementById(id = 'travel').checked) {
            vari = "travel";
        }
    }
    else if(item=='razor'){
        if (document.getElementById(id = 'black').checked) {
            vari = "black";
        }
    }
    else if (item =='product'){
        if (document.getElementById(id = 'hairwax').checked) {
            vari = "hairwax";
        }
        else if (document.getElementById(id = 'shavingcream').checked) {
            vari = "shavingcream";
        }
        else if (document.getElementById(id = 'beardoil').checked) {
            vari = "beardoil";
        }
    }

    return vari;
}

function calcSubTotal(item, price, vari){

    var qty = document.getElementById(item).value;

    subtotal = (qty * price[item][vari]).toFixed(2);

    return subtotal;
}
